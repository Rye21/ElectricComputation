<?php
if (isset($_POST['submit'])) {
	// File upload configuration
	/* $description = $_POST["description"];
	$answer = $_POST["answer"];
	$category = $_REQUEST["category"]; */
	$targetDir = "email_image/";
	$allowTypes = array('pdf');
	$images_arr = array();
	foreach ($_FILES['item_photos']['name'] as $key => $val) {
		$image_name = $_FILES['item_photos']['name'][$key];
		$tmp_name   = $_FILES['item_photos']['tmp_name'][$key];
		$size       = $_FILES['item_photos']['size'][$key];
		$type       = $_FILES['item_photos']['type'][$key];
		$error      = $_FILES['item_photos']['error'][$key];

		// File upload path
		$fileName = basename($_FILES['item_photos']['name'][$key]);
		$targetFilePath = $targetDir . $fileName;

		// Check whether file type is valid
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
		if (in_array($fileType, $allowTypes)) {
			// Store images on the server

			$item_photos   = "email_image/" . $_FILES['item_photos']['name'][$key];
			if (move_uploaded_file($_FILES['item_photos']['tmp_name'][$key], $targetFilePath)) {
				$images_arr[] = $targetFilePath;
			}
		}
	}


	// Generate gallery view of the images
	/*     if(!empty($images_arr)){ ?>
        <ul>
        <?php foreach($images_arr as $image_src){ ?>
			
            <img src="<?php echo $image_src;?>" alt="" style="width:400px">
		
		<?php } ?>
        </ul>
		
<?php } */
} {
	$serial = $_POST['serial'];
	$pcode = $_POST['pcode'];
	$LeaderName = $_POST['LeaderName'];
	$team = $_POST['team'];

	//$item_photos = $_GET['item_photos'];
	//echo $item_photos;	
	$from = $_POST['email'];
	$dir = $item_photos;
	$file = str_replace('', '%20', $dir);
	//echo $file;
	//$to = 'denki-support@hrd-s.com';
	$to = 'denki-documentation@hrd-s.com';
	$cc = '<' . $from . '>,<denki-support@hrd-s.com>';
	//$cc = '<denki-support@hrd-s.com>';
	$fromName = $from;
	//email subject
	$subject = 'This is just a test from syscom';

	//email body content
	$msg = "<b style='font-family:Century Gothic;font-size:16px'><br>Sir Jaymar,<br><br>Good Day!<br><br></b><span style='font-family:Century Gothic;font-size:18px;'>Kindly check and add window serial below in our list of window structure.<br><br>Attached is the plan we’ve encountered.</span><br><br>";
	$msg1 = "<u><b><span style='color:blue;font-family:Century Gothic;'>Serial: </span><br><span style='font-family:Century Gothic;font-size:18px;color:red;'>$serial</span><span style='font-family:Century Gothic;font-size:18px;color:blue;'><br>Plan Code of encountered plan:<br></span><span style='font-family:Century Gothic;font-size:18px;color:red;'>$pcode</span></b></u><br><br>";
	$msg4 = "<span style='font-family:Century Gothic;font-size:16px;'>Thank you!</span><br><br>";
	$msg5 = "<span style='font-family:Century Gothic;font-size:16px;'>Regards,<br>$LeaderName <br> Denki Department<br> $team Team</span><br><br>";
	$htmlContent = $msg . $msg1 . $msg4 . $msg5;

	//header for sender info
	$headers = "From: $fromName" . " <" . $from . ">" . "\r\n" . "Cc: " . $cc;
	//$headers = "From: <".$from.">"."\r\n"."Cc: ".$cc;

	//boundary 
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

	//headers for attachment 
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

	//multipart boundary 
	$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

	if (!empty($file) > 0) {
		if (is_file($file)) {
			$message .= "--{$mime_boundary}\n";
			$fp =    @fopen($file, "rb");
			$data =  @fread($fp, filesize($file));

			@fclose($fp);
			$data = chunk_split(base64_encode($data));
			$message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
				"Content-Description: " . basename(@$files[@$i]) . "\n" .
				"Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
				"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		}
	}

	$message .= "--{$mime_boundary}--";
	$returnpath = "-f" . $from;

	//send email
	$mail = @mail($to, $subject, $message, $headers, $returnpath);
	//echo $to, $subject, $message, $headers, $returnpath; 

	$pdffile = $item_photos;
	unlink($pdffile);
}

?>
<script>
	window.location.href = 'http://hrdapps33/denkicomputation/window_new_case2.php';
</script>
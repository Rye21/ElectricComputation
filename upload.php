

<?php
/* $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["item_photos"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["item_photos"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["item_photos"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    
	@$item_photos = "uploads/".@$_FILES["item_photos"]["name"];	
	if
	(move_uploaded_file($_FILES["item_photos"]["tmp_name"], $item_photos)){
		echo "The file ". basename( $_FILES["item_photos"]["name"]). " has been uploaded.";
	}else{
		 echo "Sorry, there was an error uploading your file.";
	}
	
}


try{
	$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	$pdo->query("SET NAMES utf8");
	$stmt = $pdo->prepare("
	INSERT IGNORE qcc 
	(
	item_photos,
	 description,
	actual_image,
	material
	
	)
	VALUES (
	:item_photos,
	:description,
	:actual_image,
	:material
	
	)
	");
	
	$stmt->bindValue(':item_photos',@$item_photos,PDO::PARAM_STR);
	$stmt->bindValue(':description',@$_REQUEST["description"],PDO::PARAM_STR);
	$stmt->bindValue(':actual_image',@$_REQUEST["actual_image"],PDO::PARAM_STR);
	$stmt->bindValue(':material',@$_REQUEST["material"],PDO::PARAM_STR);
	
	$stmt->execute();
	
}catch (PDOException $e){
	echo $e->getMessage();
}$pdo = null; */

?>
<!--<script>
	window.location.href = 'http://hrdapps33/uploading/select_request_data.php?id=<?php echo @$_REQUEST["id"];?>';
</script>-->
<?php

//include "db_connect.php"; 
if(isset($_POST['submit'])){
    // File upload configuration
	/* $description = $_POST["description"];
	$answer = $_POST["answer"];
	$category = $_REQUEST["category"]; */
    $targetDir = "email_image/";
    $allowTypes = array('jpg','png','jpeg','gif');
    $images_arr = array();
    foreach($_FILES['item_photos']['name'] as $key=>$val){
        $image_name = $_FILES['item_photos']['name'][$key];
        $tmp_name   = $_FILES['item_photos']['tmp_name'][$key];
        $size       = $_FILES['item_photos']['size'][$key];
        $type       = $_FILES['item_photos']['type'][$key];
        $error      = $_FILES['item_photos']['error'][$key];
        
        // File upload path
        $fileName = basename($_FILES['item_photos']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){    
            // Store images on the server
			
			 $item_photos   = "email_image/".$_FILES['item_photos']['name'][$key];
			if(move_uploaded_file($_FILES['item_photos']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;
            }
			echo $item_photos ;
			 /* try{
				$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
				$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
				$pdo->query("SET NAMES utf8");
				$stmt = $pdo->prepare("
				INSERT INTO qcc 
				(
				item_photos,
				description,
				answer,
				category
			
				)
				VALUES (
				:item_photos,
				:description,
				:answer,
				:category
				
			
				
				
				)
				");
				
				//$stmt->bindValue(':id',@$REQUEST["id"],PDO::PARAM_STR);
				$stmt->bindValue(':item_photos',@$item_photos,PDO::PARAM_STR);
				$stmt->bindValue(':description',@$description,PDO::PARAM_STR);
				$stmt->bindValue(':answer',@$answer,PDO::PARAM_STR);
				$stmt->bindValue(':category',@$_REQUEST["category"],PDO::PARAM_STR);
				
				
				$stmt->execute();
				
			}catch (PDOException $e){
				echo $e->getMessage();
			}$pdo = null;  */
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
}


?>
<script>
	//window.location.href = 'http://hrdapps33/qcc/index.php';
</script>




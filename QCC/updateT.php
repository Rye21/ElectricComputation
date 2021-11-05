<?php

include "db_connect.php"; 
if(isset($_POST['submit'])){
    // File upload configuration
	
	$description = $_POST["description"];
	$answer = $_POST["answer"];
	$category = $_REQUEST["category"];
    $targetDir = "uploads/";
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
			
			 $item_photos   = "uploads/".$_FILES['item_photos']['name'][$key];
			if(move_uploaded_file($_FILES['item_photos']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;
            }
			
			 try{
				$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
				$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
				$pdo->query("SET NAMES utf8");
				$stmt = $pdo->prepare("
				UPDATE IGNORE qcc 
				SET
				item_photos = :item_photos,
				description = :description,
				answer = :answer,
				category = :category
				
				WHERE id = :id
				");
				
				$stmt->bindValue(':id',@$_REQUEST["id"],PDO::PARAM_STR);
				$stmt->bindValue(':item_photos',@$item_photos,PDO::PARAM_STR);
				$stmt->bindValue(':description',@$description,PDO::PARAM_STR);
				$stmt->bindValue(':answer',@$answer,PDO::PARAM_STR);
				$stmt->bindValue(':category',@$_REQUEST["category"],PDO::PARAM_STR);
				
				
				$stmt->execute();
				
			}catch (PDOException $e){
				echo $e->getMessage();
			}$pdo = null; 
        }
    }
	
    
    // Generate gallery view of the images
    if(!empty($images_arr)){ ?>
        <ul>
        <?php foreach($images_arr as $image_src){ ?>
			
            <img src="<?php echo $image_src;?>" alt="" style="width:400px">
		
		<?php } ?>
        </ul>
		
<?php }
}


?>
<script>
	alert('Successfully Updated..!')
	window.location.href = 'http://hrdapps33/qcc/index.php';
</script>
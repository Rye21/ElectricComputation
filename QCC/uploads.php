<?php
include "db_connect.php"; 
if(isset($_POST['submit'])){
    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $images_arr = array();
    foreach($_FILES['item_name']['name'] as $key=>$val){
        $image_name = $_FILES['item_name']['name'][$key];
        $tmp_name   = $_FILES['item_name']['tmp_name'][$key];
        $size       = $_FILES['item_name']['size'][$key];
        $type       = $_FILES['item_name']['type'][$key];
        $error      = $_FILES['item_name']['error'][$key];
        
        // File upload path
        $fileName = basename($_FILES['item_name']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){    
            // Store images on the server
			
			 $item_name   = "uploads/".$_FILES['item_name']['name'][$key];
			if(move_uploaded_file($_FILES['item_name']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;
            }
			try{
				$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
				$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
				$pdo->query("SET NAMES utf8");
				$stmt = $pdo->prepare("
				INSERT INTO qcc 
				(
				item_name
				
				)
				VALUES (
				:item_name
				
				
				)
				");
				
				$stmt->bindValue(':item_name',@$item_name,PDO::PARAM_STR);
				
				
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
            <img src="<?php echo $image_src; ?>" alt="" style="width:400px">
        <?php } ?>
        </ul>
<?php }
}


?>
<script>
	window.location.href = 'http://hrdapps33/qcc/index.php?id=<?php echo @$_REQUEST["id"];?>';
</script>
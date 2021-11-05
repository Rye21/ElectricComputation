<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["interphone"]) ){
	$interphone = $_POST["interphone"]; 
	
$sql="SELECT * FROM interphone WHERE item_name = '$interphone' ";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

echo $row['item_name'];

}

?>



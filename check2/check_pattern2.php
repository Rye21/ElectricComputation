<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["interphone"]) || ($_POST["interphone2"])  ){
	$interphone = $_POST["interphone"]; 
	$interphone2 = $_POST["interphone2"];  
	
	
$sql="SELECT * FROM interphone
 WHERE
	item_name = '$interphone'
 OR item_name = '$interphone2'
 
 ";
$result = $db_connect->query($sql);
while($row = mysqli_fetch_assoc($result)) {
   echo $row['pattern'].'+';
}



}

?>



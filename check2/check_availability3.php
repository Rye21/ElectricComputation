<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
  if(!empty($_POST["electric_contract"]) ){
	$electric_contract = $_POST["electric_contract"];
	
$sql="SELECT * FROM shudenban WHERE electric_contract = '$electric_contract' ";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

echo $row['main_breaker'];

}

?>



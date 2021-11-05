<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki"]) && $_POST["standard"]  ){
	$exterior_denki = $_POST["exterior_denki"];
	$standard = $_POST["standard"]; 

	  
$sql="SELECT * FROM centering_240_back WHERE exterior_denki = '$exterior_denki'";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

//echo $row[$standard];
echo $row["high_nokiten"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



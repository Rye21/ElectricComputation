<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki_1"]) && $_POST["standard_1"]  ){
	$exterior_denki_1 = $_POST["exterior_denki_1"];
	$standard_1 = $_POST["standard_1"]; 

	  
$sql="SELECT * FROM centering_240_back WHERE exterior_denki = '$exterior_denki_1'";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

//echo $row[$standard];
echo $row["high_nokiten"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



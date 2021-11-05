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

	if (($exterior_denki_1 == 'bousui socket' || $exterior_denki_1 == 'joint box') && ($standard_1 == 'balcony_2f' || $standard_1 == 'EWH_2f' || $standard_1 == 'EWL_2f')){
		echo $row["balcony_2f"];
	} else if (($exterior_denki_1 == 'bousui socket' || $exterior_denki_1 == 'joint box') && ($standard_1 == 'balcony_3f' || $standard_1 == 'EWH_3f' || $standard_1 == 'EWL_3f')){
		echo $row["balcony_3f"];
	} else {
		echo $row["minimum_height"];
	}
//echo $row["minimum_height"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki"]) && $_POST["standard"]  ){
	$exterior_denki = $_POST["exterior_denki"];
	$standard = $_POST["standard"]; 

	  
$sql="SELECT * FROM centering_260_back WHERE exterior_denki = '$exterior_denki'";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

	if (($exterior_denki == 'bousui socket' || $exterior_denki == 'joint box') && ($standard == 'balcony_2f' || $standard == 'EWH_2f' || $standard == 'EWL_2f')){
		echo $row["balcony_2f"];
	} else if (($exterior_denki == 'bousui socket' || $exterior_denki == 'joint box') && ($standard == 'balcony_3f' || $standard == 'EWH_3f' || $standard == 'EWL_3f')){
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



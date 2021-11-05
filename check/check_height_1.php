<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki_1"]) && $_POST["standard_1"]  ){
	$exterior_denki_1 = $_POST["exterior_denki_1"];
	$standard_1 = $_POST["standard_1"]; 
	$ecompany = $_POST["ecompany"]; 

	  
$sql="SELECT * FROM centering_240_back WHERE exterior_denki = '$exterior_denki_1'";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

if($exterior_denki_1 == 'meterbox'){
	if($ecompany == 'HOKKAIDOU(北海道電力)' || $ecompany == 'TOHOUKU(東北電力)' || $ecompany == 'CHUBU(中部電力)'){
		echo substr(@$row["$standard_1"],0,4);
	} else {
		echo substr(@$row["$standard_1"],5,8);
	}
} else {
	echo @$row["$standard_1"];
}




}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



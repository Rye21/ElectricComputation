<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki_1GS"]) && $_POST["standard_1GS"]  ){
	$exterior_denki_1GS = $_POST["exterior_denki_1GS"];
	$standard_1GS = $_POST["standard_1GS"]; 
	$houseTypes = $_POST["houseTypes"]; 
	$kanabakari = $_POST["kanabakari"]; 
	$ecompany = $_POST["ecompany"]; 

		if($houseTypes == 'GType' && $kanabakari == '２６５'){
			$sql="SELECT * FROM centering_265_back WHERE exterior_denki = '$exterior_denki_1GS'";
		} else if($houseTypes == 'GType' && $kanabakari == '２４０'){
			$sql="SELECT * FROM centering_240gs_back WHERE exterior_denki = '$exterior_denki_1GS'";
		} else {
			
		}
	  

$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);
				if($exterior_denki_1GS == 'meterbox'){
					if($ecompany == 'HOKKAIDOU(北海道電力)' || $ecompany == 'TOHOUKU(東北電力)' || $ecompany == 'CHUBU(中部電力)'){
						echo substr(@$row["$standard_1GS"],0,4);
					} else {
						echo substr(@$row["$standard_1GS"],5,8);
					}
				} else {
					echo @$row["$standard_1GS"];
				}
//echo @$row["$standard_1GS"];




}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



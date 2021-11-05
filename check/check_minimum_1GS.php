<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki_1GS"]) && $_POST["standard_1GS"]  ){
	$exterior_denki_1GS = $_POST["exterior_denki_1GS"];
	$standard_1GS = $_POST["standard_1GS"]; 
	$houseTypes = $_POST["houseTypes"]; 
	$kanabakari = $_POST["kanabakari"]; 

		if($houseTypes == 'GType' && $kanabakari == '２６５'){
			$sql="SELECT * FROM centering_265_back WHERE exterior_denki = '$exterior_denki_1GS'";
		} else if($houseTypes == 'GType' && $kanabakari == '２４０'){
			$sql="SELECT * FROM centering_240gs_back WHERE exterior_denki = '$exterior_denki_1GS'";
		} else {
			
		}
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);
				/* if ($exterior_denki_1GS == 'bousui socket' || $exterior_denki_1GS == 'EV PHEV socket' || $exterior_denki_1GS == 'SHOURAI EV socket' || $exterior_denki_1GS == 'joint box' && $standard_1GS == 'doma'){
					echo $row[$standard_1GS];		
				} else if ($exterior_denki_1GS == 'bousui socket' || $exterior_denki_1GS == 'EV PHEV socket' || $exterior_denki_1GS == 'SHOURAI EV socket' || $exterior_denki_1GS == 'joint box' && $standard_1GS == 'wooddeck'){
					echo $row[$standard_1GS];		
				} else if ($exterior_denki_1GS == 'bousui socket' || $exterior_denki_1GS == 'EV PHEV socket' || $exterior_denki_1GS == 'SHOURAI EV socket' || $exterior_denki_1GS == 'joint box' && $standard_1GS == 'balcony_2f'){
					echo $row[$standard_1GS];		
				} else if ($exterior_denki_1GS == 'bousui socket' || $exterior_denki_1GS == 'EV PHEV socket' || $exterior_denki_1GS == 'SHOURAI EV socket' || $exterior_denki_1GS == 'joint box' && $standard_1GS == 'balcony_3f'){
					echo $row[$standard_1GS];		
				}else */ if($standard_1GS == 'gl'){
					echo $row["min_gl"];
				} else if($standard_1GS == 'doma'){
					echo $row["min_doma"];
				} else if($standard_1GS == 'wooddeck'){
					echo $row["min_wooddeck"];
				} else if($standard_1GS == 'balcony_2f' || $standard_1GS == 'balcony_3f'){
					echo $row["min_balcony"];
				} else {
					
				}  
//echo $row[$standard_1GS];
//echo $row["minimum_height"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



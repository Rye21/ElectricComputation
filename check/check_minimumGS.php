<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denkiGS"]) && $_POST["standardGS"]  ){
	$exterior_denkiGS = $_POST["exterior_denkiGS"];
	$standardGS = $_POST["standardGS"]; 
	$houseTypes = $_POST["houseTypes"]; 
	$kanabakari = $_POST["kanabakari"]; 
	//print_r($standardGS);
		if($houseTypes == 'GType' && $kanabakari == '２６５'){
			$sql="SELECT * FROM centering_265_back WHERE exterior_denki = '$exterior_denkiGS'";
		} else if($houseTypes == 'GType' && $kanabakari == '２４０'){
			$sql="SELECT * FROM centering_240gs_back WHERE exterior_denki = '$exterior_denkiGS'";
		} else {
			
		}
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);
	/* if($standardGS == 'gl'){
		echo $row["min_gl"];
	} else if($standardGS == 'doma'){
		echo $row["min_doma"];
	} else if($standardGS == 'wooddeck'){
		echo $row["min_wooddeck"];
	} else if($standardGS == 'balcony_2f' || $standardGS == 'balcony_3f'){
		echo $row["min_balcony"];
	} else {
		
	}  */
	
	/* if ($exterior_denkiGS == 'bousui socket' || $exterior_denkiGS == 'EV PHEV socket' || $exterior_denkiGS == 'SHOURAI EV socket' || $exterior_denkiGS == 'joint box' && $standardGS == 'doma'){
		echo $row[$standardGS];		
	} else if ($exterior_denkiGS == 'bousui socket' || $exterior_denkiGS == 'EV PHEV socket' || $exterior_denkiGS == 'SHOURAI EV socket' || $exterior_denkiGS == 'joint box' && $standardGS == 'wooddeck'){
		echo $row[$standardGS];		
	} else if ($exterior_denkiGS == 'bousui socket' || $exterior_denkiGS == 'EV PHEV socket' || $exterior_denkiGS == 'SHOURAI EV socket' || $exterior_denkiGS == 'joint box' && $standardGS == 'balcony_2f'){
		echo $row[$standardGS];		
	} else if ($exterior_denkiGS == 'bousui socket' || $exterior_denkiGS == 'EV PHEV socket' || $exterior_denkiGS == 'SHOURAI EV socket' || $exterior_denkiGS == 'joint box' && $standardGS == 'balcony_3f'){
		echo $row[$standardGS];		
	}else */ if($standardGS == 'gl'){
		echo $row["min_gl"];
	} else if($standardGS == 'doma'){
		echo $row["min_doma"];
	} else if($standardGS == 'wooddeck'){
		echo $row["min_wooddeck"];
	} else if($standardGS == 'balcony_2f' || $standardGS == 'balcony_3f'){
		echo $row["min_balcony"];
	} else {
		
	}  
//echo $row[$standardGS];
//echo $row["minimum_height"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



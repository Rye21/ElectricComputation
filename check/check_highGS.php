<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denkiGS"]) && $_POST["standardGS"]  ){
	$exterior_denkiGS = $_POST["exterior_denkiGS"];
	$standardGS = $_POST["standardGS"]; 
    $houseTypes = $_POST["houseTypes"]; 
	$kanabakari = $_POST["kanabakari"]; 

		if($houseTypes == 'GType' && $kanabakari == '２６５'){
			$sql="SELECT * FROM centering_265_back WHERE exterior_denki = '$exterior_denkiGS'";
		} else if($houseTypes == 'GType' && $kanabakari == '２４０'){
			$sql="SELECT * FROM centering_240gs_back WHERE exterior_denki = '$exterior_denkiGS'";
		} else {
			
		}
	  

$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

//echo $row[$standard];
echo $row["high_nokiten"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



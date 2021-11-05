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

echo @$row["top_height"];
echo ',';
echo @$row["bottom_height"];


}

?>



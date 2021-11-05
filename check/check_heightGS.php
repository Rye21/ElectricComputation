<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denkiGS"]) && $_POST["standardGS"]  ){
	$exterior_denkiGS = $_POST["exterior_denkiGS"];
	$standardGS = $_POST["standardGS"]; 
	$houseTypes = $_POST["houseTypes"]; 
	$kanabakari = $_POST["kanabakari"]; 
	$ecompany = $_POST["ecompany"]; 

		if($houseTypes == 'GType' && $kanabakari == '２６５'){
			$sql="SELECT * FROM centering_265_back WHERE exterior_denki = '$exterior_denkiGS'";
		} else if($houseTypes == 'GType' && $kanabakari == '２４０'){
			$sql="SELECT * FROM centering_240gs_back WHERE exterior_denki = '$exterior_denkiGS'";
		} else {
			
		}
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);
				if($exterior_denkiGS == 'meterbox'){
					if($ecompany == 'HOKKAIDOU(北海道電力)' || $ecompany == 'TOHOUKU(東北電力)' || $ecompany == 'CHUBU(中部電力)'){
						echo substr(@$row["$standardGS"],0,4);
					} else {
						echo substr(@$row["$standardGS"],5,8);
					}
				} else {
					echo @$row["$standardGS"];
				}
//echo @$row["$standardGS"];




}

?>



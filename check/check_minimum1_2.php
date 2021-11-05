<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
   if(!empty($_POST["exterior_denki"]) && $_POST["standard"]  ){
	$exterior_denki = $_POST["exterior_denki"];
	$standard = $_POST["standard"]; 
	$houseTypes = $_POST["houseTypes"]; 
	$kanabakari = $_POST["kanabakari"];	
	$floor = $_POST["floor"];
	$wtight = $_POST["wtight"];
	$dodai = $_POST["dodai"];
		//print_r($_REQUEST);	
		if(($kanabakari == '２４０ □' || $kanabakari == '２４０ Ｔ□') && $wtight == 'スタンダードタイプ' && ($floor == '１Ｆ' || $floor == '２Ｆ')){
			$sql="SELECT * FROM centering_240tpu_back WHERE exterior_denki = '$exterior_denki'";	
		} else if(($kanabakari == '２４０ Ｆ'  || $kanabakari == '２４０ □Ｆ') && $wtight == '浮上タイプ' && ($floor == '１Ｆ' || $floor == '２Ｆ')){
			$sql="SELECT * FROM centering_240tf_back WHERE exterior_denki = '$exterior_denki'";	
		} else if(( $kanabakari == '２４０ ＴＦ' ) && $wtight == '浮上タイプ' && ($floor == '１Ｆ' || $floor == '２Ｆ')){
			$sql="SELECT * FROM centering_240ttf_back WHERE exterior_denki = '$exterior_denki'";	
		} else if($kanabakari == '２４０ □'  && $wtight == 'スタンダードタイプ' && $floor == '３Ｆ'){
			$sql="SELECT * FROM centering_240tpu_3f_back WHERE exterior_denki = '$exterior_denki'";	
		} else if(($kanabakari == '２４０ □' || $kanabakari == '２４０＋Ｔ' || $kanabakari == '２４０ Ｔ□') && ($wtight == '' || $wtight == 'なし')) {
			$sql="SELECT * FROM centering_240t_back WHERE exterior_denki = '$exterior_denki'";	
		} else {
			
		}
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);
	if (($exterior_denki == 'bousui socket' || $exterior_denki == 'joint box') && $kanabakari == '２４０ □'  && $wtight == 'スタンダードタイプ' && $floor == '３Ｆ' && ($standard == 'balcony_2f' || $standard == 'EWH_2f' || $standard == 'EWL_2f')){
		echo $row["balcony_2f"];
	} else if (($exterior_denki == 'bousui socket' || $exterior_denki == 'joint box') && $kanabakari == '２４０ □'  && $wtight == 'スタンダードタイプ' && $floor == '３Ｆ' && ($standard == 'balcony_3f' || $standard == 'EWH_3f' || $standard == 'EWL_3f')){
		echo $row["balcony_3f"];
	} else if (($exterior_denki == 'wireless camera' && $standard == 'balcony_2f') && ($kanabakari == '２４０ □' || $kanabakari == '２４０ Ｔ□') && $wtight == 'スタンダードタイプ' && ($floor == '１Ｆ' || $floor == '２Ｆ')){
		echo $row["balcony_2f"];			
	} else if (($exterior_denki == 'bousui socket' || $exterior_denki == 'joint box') && ($standard == 'balcony_2f' || $standard == 'EWH_2f' || $standard == 'EWL_2f')){
		echo $row["balcony_2f"];
	} else if (($exterior_denki == 'bousui socket' || $exterior_denki == 'joint box') && ($standard == 'balcony_3f' || $standard == 'EWH_3f' || $standard == 'EWL_3f')){
		echo $row["balcony_3f"];
	} else {
		echo $row["minimum_height"];
	} 
//echo $row[$standard];




}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



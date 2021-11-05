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

//echo $row[$standard];
echo $row["high_nokiten"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



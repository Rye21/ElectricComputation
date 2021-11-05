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
	$ecompany = $_POST["ecompany"];
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

			if($exterior_denki == 'meterbox'){
				if($ecompany == 'HOKKAIDOU(北海道電力)' || $ecompany == 'TOHOUKU(東北電力)' || $ecompany == 'CHUBU(中部電力)'){
					echo substr(@$row["$standard"],0,4);
				} else {
					echo substr(@$row["$standard"],5,8);
				}
			} else {
				echo @$row["$standard"];
			}

}

?>



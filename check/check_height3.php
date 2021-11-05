<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
  if(!empty($_POST["exterior_denki"]) && $_POST["standard"]  ){
	$exterior_denki = $_POST["exterior_denki"];
	$standard = $_POST["standard"]; 
	$ecompany = $_POST["ecompany"]; 
$sql="SELECT * FROM centering_260_back WHERE exterior_denki = '$exterior_denki'";
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



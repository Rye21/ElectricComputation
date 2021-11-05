<?php 
error_reporting(0);
require_once("../include/dbcon.php");
//code check email
  if(!empty(@$_POST["powercon_1"]) && (@$_POST["powercon_2"]) ){
	$powercon_1 = @$_POST["powercon_1"];
	$powercon_2 = @$_POST["powercon_2"];
$sql="SELECT * FROM shudenban WHERE powercon_1 = '$powercon_1' AND powercon_2 = '$powercon_2'";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

echo $row['solar_breaker'];

}

?>



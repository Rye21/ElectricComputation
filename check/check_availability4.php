<?php 
require_once("../include/dbcon.php");
//code check email
  if(!empty($_POST["contract_kind"]) ){
	$contract_kind = $_POST["contract_kind"];
	
$sql="SELECT * FROM shudenban WHERE contract_kind = '$contract_kind' ";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

echo $row['contract_kind'];

}

?>



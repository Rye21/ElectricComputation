<?php 
require_once("../include/dbcon2.php");
//code check email
   if(!empty($_POST["LeaderName"]) && $_POST["LeaderName"]  ){
	$LeaderName = $_POST["LeaderName"];
	

	  
$sql="SELECT * FROM department WHERE LeaderName = '$LeaderName'";
$result = $db_connect->query($sql);
$row = mysqli_fetch_assoc($result);

//echo $row[$standard];
echo $row["team"];
echo '+';
echo $row["LeaderEmail"];



}
/* $minimum_height = $_POST["minimum_height"]; 
	$low_nokiten = $_POST["low_nokiten"]; 
	$high_nokiten = $_POST["high_nokiten"]; */
?>



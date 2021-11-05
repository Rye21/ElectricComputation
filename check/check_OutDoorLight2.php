<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "admin"; /* Password */
$dbname = "reymardrio"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	//echo 'Connected';
}
if (!empty($_POST["colorShanai2"])) {
	$colorShanai2 = $_POST["colorShanai2"];

	//echo $colorShanai;

	$result = mysqli_query($con, "SELECT `outDoor_light` FROM `plan_completion2` WHERE `tc` LIKE '$colorShanai2'") or die(mysqli_connect_error());
	while ($row = mysqli_fetch_array($result)) {
		$outDoor_light = $row['outDoor_light'];
		echo $outDoor_light;
	}
} else {
}

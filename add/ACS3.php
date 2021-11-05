<?php 
require_once("../include/dbcon.php");

//code check email
if(!empty($_POST["room"])) {

$sql = "SELECT * FROM computation WHERE room = '" . $_POST["room"] . "'  ORDER BY id desc";
$resultset = mysqli_query($db_connect, $sql) or die("database error:". mysqli_error($db_connect));
$row = mysqli_fetch_assoc($resultset);

echo $row['std'];

}

?>

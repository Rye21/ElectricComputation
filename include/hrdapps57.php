<?php
$mysql_hostname = "hrdapps57";
$mysql_user = "root";
$mysql_password = "admin";
$mysql_database = "dems";
$db_connect = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database) or ("Could not connect database");
?>
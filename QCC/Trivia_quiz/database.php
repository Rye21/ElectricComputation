<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "admin";
$mysql_database = "Quiz_trivia";
$cn = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database) or ("Could not connect database");
?>
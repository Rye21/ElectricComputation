<?php
//require_once 'php/getstatus.php';
session_start();

 //print_r($_SESSION);
	if(!$_SESSION["employee_code"]){
	header('Location: login.php');
	} 
	$employee_code = @$_SESSION["employee_code"];
	//$nick_name = @$_SESSION["nick_name"];
	//$nick_name = @$_SESSION["full_name"];
	$position = @$_SESSION["position"];
	$designation = @$_SESSION["designation"];
	$section = @$_SESSION["section"];
	$team = @$_SESSION["team"];
	$nick_name = @$_SESSION["nick_name"];
?>	
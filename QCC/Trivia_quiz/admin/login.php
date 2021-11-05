<?php
session_start();
error_reporting(1);
?>

<html>
<head>
<title>Administrative Trivia Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg">
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysqli_query($cn,"select * from mst_admin where loginid='$loginid' and pass='$pass'") or die(mysql_error());
	if(mysqli_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">Welcome to Administrative Area </p>

<!--<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">-->
<div style="padding-top:5%">
<center>
<p class="style7" style="font-size:30px"><a href="subadd.php">Add Subject</a></p>
<p class="style7" style="font-size:30px"><a href="testadd.php">Add Test</a></p>
<p class="style7" style="font-size:30px"><a href="questionadd.php">Add Question </a></p>
<p align="center" class="head1">&nbsp;</p>
</center>
</div>
<!--</div>-->

</body>
</html>

<?php
session_start();
extract($_POST);
extract($_SESSION);
include("database.php");
if(@$submit=='Finish')
{
	mysqli_query($cn,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	unset($_SESSION[qn]);
	header("Location: index.php");
	exit;
}
?>

<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg">
<?php
include("header.php");
echo "<h1 class=head1> Review Test Question</h1>";

if(!isset($_SESSION[qn]))
{
		$_SESSION[qn]=0;
}
else if($submit=='Next Question' )
{
	$_SESSION[qn]=$_SESSION[qn]+1;
	
}

$rs=mysqli_query($cn,"select * from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=review.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=".($row[7]==1?'tans':'style8').">$row[3]";
echo "<tr><td class=".($row[7]==2?'tans':'style8').">$row[4]";
echo "<tr><td class=".($row[7]==3?'tans':'style8').">$row[5]";
echo "<tr><td class=".($row[7]==4?'tans':'style8').">$row[6]";
if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><font size=6><input type=submit name=submit value='Next Question'></font></form>";
else
echo "<tr><td><font size=6><input type=submit name=submit value='Finish'></font></form>";

echo "</table></table>";
?>

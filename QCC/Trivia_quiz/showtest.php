<?php
session_start();
?>

<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg">
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysqli_query($cn,"select * from mst_subject where sub_id=$subid");
$row1=mysqli_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysqli_query($cn,"select * from mst_test where sub_id=$subid");
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";

while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=6>$row[2]</font></a>";
}
echo "</table>";
?>
</body>
</html>
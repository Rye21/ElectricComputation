<?php
session_start();
?>

<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg">
<?php
include("header.php");
include("database.php");
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
$rs=mysqli_query($cn,"select * from mst_subject");
echo "<table align=center>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center><a href=showtest.php?subid=$row[0]><font size=6>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>

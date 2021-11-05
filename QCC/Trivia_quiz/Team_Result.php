<?php
session_start();
?>

<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="../../bootstrap/js/jquery-1.11.3.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="bg">
<?php
include("header.php");
include("database.php");
extract($_SESSION);

		$email=$_SESSION[email];
		$phone=$_SESSION[phone];
		$city=$_SESSION[city];

$rs=mysqli_query($cn,"select t.test_name,t.total_que,r.test_date,r.score,y.username,y.phone from mst_test t, mst_result r,mst_user y where t.test_id = r.test_id and
y.email != '$email' and y.city = '$city' and y.phone = '$phone' and r.login = y.login ORDER BY r.score DESC") or die(mysql_error());

echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=6 align=center><tr class=style2><td width=100 align=center style='font-size:20px'>Date
<td width=250 align=center style='font-size:20px'>Employee Name
<td width=300 align=center style='font-size:20px'> Team
<td width=300 align=center style='font-size:20px'>Test Name 
<td width=150 align=center style='font-size:20px'> Total Question 
<td width=100 align=center style='font-size:20px'> Score
<td width=300 align=center style='font-size:20px'> Average";
while($row=mysqli_fetch_row($rs))
{
	$total = ($row[3] / $row[1]) * 100;
	
echo "<tr class=style4>
<td align=center>$row[2] 
<td align=center> $row[4]
<td align=center> $row[5]  
<td align=center>$row[0] 
<td align=center> $row[1]
<td align=center> $row[3] 
<td align=center>$total% 
 

";
}
echo "</table>";
?>
</body>
</html>

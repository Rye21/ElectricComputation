<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>

<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg">
<?php
//echo date("d/m/Y");
include("header.php");


$query="select * from mst_question";

$rs=mysqli_query($cn,"select * from mst_question where test_id=$tid") or die(mysql_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysqli_query($cn,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				mysqli_query($cn,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				mysqli_query($cn,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center width=500><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>Correct Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td>  ". $w;
				echo "</table>";
				mysqli_query($cn,"insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysqli_query($cn,"select * from mst_question where test_id=$tid") or die(mysql_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style4><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style4> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style4><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style4><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><font size=6><input type=submit name=submit  value='Next Question'></font></form>";
else
echo "<tr><td><font size=6><input type=submit name=submit value='Get Result'></font></form>";
echo "</table></table>";
?>
<br><br><br><br><br><br><br><br><br><br><br>
<div>
	<p align="center" style="font-size:20px;color:khaki">"The shortest and surest way to live with honor in the world,<br> is to be in reality what we would appear to be,<br> all human virtues increase and strengthen themselves by the practice and experience of them."</p>
</div>
</body>
</html>
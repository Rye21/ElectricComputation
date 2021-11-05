<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<body class="bg">
<?php

extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
//echo "<h3 class='head1'>Subject Add</h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysqli_query($cn,"select * from mst_subject where sub_name='$subname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysqli_query($cn,"insert into mst_subject(sub_name) values ('$subname')") or die(mysql_error());
echo "<script>alert('Subject Added Successfully')</script><br><br><br><p class=head1>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>


<title>Add Subject</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="50%"  border="0" align="center">
    <tr>
      <td width="90%" height="32%" style="font-size:30px"><div align="center"><strong>Enter Subject Name </strong></div></td>
    </tr>
	
	<tr>
      <td width="90%" height="32%" align="center">
        <input name="subname" placeholder="Enter language name" type="text" id="subname" style="font-size:20px;height:50px;width:50%;text-align:center"></td>
    </tr>
	<tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="submit" value="Add" style="width:20%;height:50%;font-size:30px"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>

</body>
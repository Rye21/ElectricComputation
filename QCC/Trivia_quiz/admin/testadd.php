<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
require("../database.php");

include("header.php");


echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysqli_query($cn,"insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')") or die(mysql_error());
echo "<script>alert('Test Added Successfully')</script><p class=head1>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<body class="bg">
<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32" style="font-size:25px"><div align="center"><strong>Enter Subject ID </strong></div></td>
      
      <td width="48%" height="32"><select name="subid" style="width:200px;height:30px">
	  
<?php
$rs=mysqli_query($cn,"Select * from mst_subject order by  sub_name");
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26" style="font-size:25px"><div align="center"><strong> Enter Test Name </strong></div></td>
        
	  <td><input name="testname" type="text" id="testname" style="width:200px;height:30px"></td>
    </tr>
    <tr>
      <td height="26" style="font-size:25px"><div align="center"><strong>Enter Total Question </strong></div></td>
    
      <td><input name="totque" type="text" id="totque" style="width:200px;height:30px"></td>
    </tr>
    <tr>
      <td height="26" ></td>
   
      <td><input type="submit" name="submit" value="Add" align="center"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
extract($_POST);
echo $testid;

echo "<BR>";
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Add Question </h3>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysqli_query($cn,"insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')") or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>
<body class="bg">
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<form name="form1" method="post" onSubmit="return check();">
  <table width="80%"  height="100%" border="1" align="center" style="background-color:white">
    <tr>
      <td width="24%" height="32" style="font-size:25px"><div align="center"><strong>Select Test Name </strong></div></td>
      
      <td width="75%" height="32" align="center"><select name="testid" id="testid" style="font-size:25px;width:50%;text-align:center">
<?php
$rs=mysqli_query($cn,"Select * from mst_test order by test_name");
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26" style="font-size:25px"><div align="center"><strong> Enter Question </strong></div></td>
       
	    <td><textarea name="addque" cols="60" rows="2" id="addque" style="width:100%;height:100%;font-size:20px"></textarea></td>
    </tr>
    <tr>
      <td height="26" style="font-size:25px"><div align="center"><strong>Enter Answer1 </strong></div></td>
      
      <td><input name="ans1" type="text" id="ans1" size="85" maxlength="1000" style="width:100%;height:100%;font-size:20px"></td>
    </tr>
    <tr>
      <td height="26" style="font-size:25px"><div align="center"><strong>Enter Answer2 </strong></div></td>
     
      <td><input name="ans2" type="text" id="ans2" size="85" maxlength="1000" style="width:100%;height:100%;font-size:20px"></td>
    </tr>
    <tr>
      <td height="26" style="font-size:25px"><div align="center"><strong>Enter Answer3 </strong></div></td>
     
      <td><input name="ans3" type="text" id="ans3" size="85" maxlength="1000" style="width:100%;height:100%;font-size:20px"></td>
    </tr>
    <tr>
      <td height="26" style="font-size:25px"><div align="center"><strong>Enter Answer4</strong></div></td>
     
      <td><input name="ans4" type="text" id="ans4" size="85" maxlength="1000" style="width:100%;height:100%;font-size:20px"></td>
    </tr>
    <tr>
      <td height="26" style="font-size:25px"><div align="center"><strong>Enter True Answer </strong></div></td>
    
      <td><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50" style="width:100%;height:100%;font-size:20px"></td>
    </tr>
    <tr>
      <td height="26"></td>
  
      <td align="center"><input type="submit" name="submit" value="Add Question" style="font-size:25px" align="center"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
</body>
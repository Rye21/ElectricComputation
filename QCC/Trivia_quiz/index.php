<?php
session_start();
?>

<html>
<head>
<title>Welcome to Quiz Trivia</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="http://hrdapps33/qcc/trivia_quiz/image/imageedit_1_7870517384.png" type="image/x-icon" />
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="../../bootstrap/js/jquery-1.11.3.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
	
</style>
<script>
	function check(){
		checkemailAvailability();
		checkemailAvailability2();
		checkemailAvailability3();
	} 
	function checkemailAvailability() {
	  $("#loaderIcon").show();
	jQuery.ajax({
	url: "../check/check_availability.php",
	data:'loginid2='+$("#loginid2").val(),
	type: "POST",
	success:function(data){
	$("#email-availability-status").html(data);
	var number1 = document.getElementById("email").value = document.getElementById("email-availability-status").innerHTML;

	
	$("#loaderIcon").hide();
	},
	error:function (){}
	}); 
	} 
	//////////////phone///////////////////
	function checkemailAvailability2() {
	  $("#loaderIcon").show();
	jQuery.ajax({
	url: "../check/check_availability2.php",
	data:'loginid2='+$("#loginid2").val(),
	type: "POST",
	success:function(data){
	$("#email2-availability-status").html(data);
	var number1 = document.getElementById("phone").value = document.getElementById("email2-availability-status").innerHTML;

	
	$("#loaderIcon").hide();
	},
	error:function (){}
	}); 
	} 
	//////////////city///////////////////
	function checkemailAvailability3() {
	  $("#loaderIcon").show();
	jQuery.ajax({
	url: "../check/check_availability3.php",
	data:'loginid2='+$("#loginid2").val(),
	type: "POST",
	success:function(data){
	$("#email3-availability-status").html(data);
	var number1 = document.getElementById("city").value = document.getElementById("email3-availability-status").innerHTML;

	
	$("#loaderIcon").hide();
	},
	error:function (){}
	}); 
	} 
	
</script>
<body class="bg">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($cn,"select * from mst_user where login='$loginid' and pass='$pass'")or die(mysql_error());

	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
		$_SESSION[pass]=$pass;
		$_SESSION[email]=$email;
		$_SESSION[phone]=$phone;
		$_SESSION[city]=$city;
		
	}
}
if (isset($_SESSION[login]))

	
{
	echo '<br>';		
	echo '<br>';		
	echo '<br>';		
	echo '<br>';		
	
	//echo '<script>alert("The shortest and surest way to live with honor in the world, is to be in reality what we would appear to be, all human virtues increase and strengthen themselves by the practice and experience of them.")</script>';
	if (($_SESSION[email] == 'SH' ) || ($_SESSION[email] == 'Leader' ))	{
		echo "<h1 class='style8' align=center>Welcome to Trivia Quiz</h1>";
		  echo 	'<table width="28%"  border="0" align="center">
				  <tr>
					<td width="7%" height="65" valign="bottom"><img src="image/imageedit_9_8632073558.png" width="70" height="70" align="middle"></td>
					<td width="40%"  valign="middle" bordercolor="#0000FF"> <a href="sublist.php" class="style4" style="font-size:30px;color:white" >Category for Quiz </a></td>
				  </tr>
				  <tr>
					<td height="58" valign="bottom"><img src="image/imageedit_16_7877884432.png" width="70" height="70" align="absmiddle"></td>
					<td valign="middle"> <a href="result.php" class="style4" style="font-size:30px;color:white">Result </a></td>
				  </tr>
				  <tr>	<td height="58" valign="bottom"><img src="image/images.jpg" width="70" height="70" align="absmiddle"></td>
					<td valign="middle"> <a href="Team_Result.php" class="style4" style="font-size:30px;color:white"> Team Result </a></td>
				  </tr>
				</table>';
		
	}    else{
		//echo '<script>alert("The shortest and surest way to live with honor in the world, is to be in reality what we would appear to be, all human virtues increase and strengthen themselves by the practice and experience of them.")</script>';
		echo 	'<table width="28%"  border="0" align="center">
				  <tr>
					<td width="7%" height="65" valign="bottom"><img src="image/imageedit_9_8632073558.png" width="70" height="70" align="middle"></td>
					<td width="40%"  valign="middle" bordercolor="#0000FF"> <a href="sublist.php" class="style4" style="font-size:30px;color:white" >Category for Quiz </a></td>
				  </tr>
				  <tr>
					<td height="58" valign="bottom"><img src="image/imageedit_16_7877884432.png" width="70" height="70" align="absmiddle"></td>
					<td valign="middle"> <a href="result.php" class="style4" style="font-size:30px;color:white">Result </a></td>
				  </tr>';
	}                                                                                                             
	
				

	exit;
}
		

	
?>

<style>
	#email,#phone,#city{
		display:none;
		visibility:hidden;
	}
	
	html { height: 100% }
::-moz-selection { background: #fe57a1; color: #fff; text-shadow: none; }
::selection { background: #fe57a1; color: #fff; text-shadow: none; }
body { background-image: radial-gradient( cover, rgba(92,100,111,1) 0%,rgba(31,35,40,1) 100%), url('http://i.minus.com/io97fW9I0NqJq.png') }
.login {
  background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 6px;
  height: 265px;
  margin: 20px auto 0;
  width: 298px;
}
.login h1 {
  background-image: linear-gradient(top, #f1f3f3, #d4dae0);
  border-bottom: 1px solid #a6abaf;
  border-radius: 6px 6px 0 0;
  box-sizing: border-box;
  color: #727678;
  display: block;
  height: 43px;
  font: 600 14px/1 'Open Sans', sans-serif;
  padding-top: 14px;
  margin: 0;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff;
}
input[type="password"], input[type="text"] {
  background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 30px 30px 0px 30px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
.show-password {
  display: block;
  height: 16px;
  margin: 26px 0 0 28px;
  width: 87px;
}
input[type="checkbox"] {
  cursor: pointer;
  height: 16px;
  opacity: 0;
  position: relative;
  width: 64px;
}
input[type="checkbox"]:checked {
  left: 29px;
  width: 58px;
}
.toggle {
  background: url(http://i.minus.com/ibitS19pe8PVX6.png) no-repeat;
  display: block;
  height: 16px;
  margin-top: -20px;
  width: 87px;
  z-index: -1;
}
input[type="checkbox"]:checked + .toggle { background-position: 0 -16px }
.forgot {
  color: #7f7f7f;
  display: inline-block;
  float: right;
  font: 12px/1 sans-serif;
  left: -19px;
  position: relative;
  text-decoration: none;
  top: 5px;
  transition: color .4s;
}
.forgot:hover { color: #3b3b3b }
input[type="submit"] {
  width:240px;
  height:35px;
  display:block;
  font-family:Arial, "Helvetica", sans-serif;
  font-size:16px;
  font-weight:bold;
  color:#fff;
  text-decoration:none;
  text-transform:uppercase;
  text-align:center;
  text-shadow:1px 1px 0px #37a69b;
  padding-top:6px;
  margin: 30px 30px 0 30px;
  position:relative;
  cursor:pointer;
  border: none;  
  background-color: #37a69b;
  background-image: linear-gradient(top,#3db0a6,#3111);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius:5px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}

.shadow {
  background: #000;
  border-radius: 12px 12px 4px 4px;
  box-shadow: 0 0 20px 10px #000;
  height: 12px;
  margin: 30px auto;
  opacity: 0.2;
  width: 270px;
}


input[type="submit"]:active {
  top:3px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}
</style>


		<div class="row">
			<tr>
				<td height="296" valign="top"><div align="center">
					<h1 class="style8" style="color:red;font-family:Candari">Welcome to QCC Trivia Quiz</h1>
				  <span class="style5"><img src="image/faq400x600.png" width="129" height="100"><span class="style7"><img src="image/imageedit_1_7870517384.png" width="129" height="150"><img src="image/Head-Scratch-234x300.png" width="129" height="100"></span>        </span>
					
				  <blockquote>
					  <p align="center" class="style5"><span class="style7">Welcome !!
						You need to login for take the Trivia Quiz.</span></p>
				  </blockquote>
				</div></td>
			</tr>
		</div>	
		<div class="row" align="center">
			<td valign="center"><form name="form1" method="post" action="">
			<div class="login">
				<input type="text" placeholder="Login ID" id="loginid2" name="loginid" onkeyup="check()">  
			  <input type="password" placeholder="Password" id="pass2" name="pass">
					<td><input name="email" type="text" id="email"></td>
				   <span class="hidden" id="email-availability-status"></span>	
				   <td><input name="phone" type="text" id="phone"></td>
				   <span class="hidden" id="email2-availability-status"></span>	
				   <td><input name="city" type="text" id="city"></td>
				   <span class="hidden" id="email3-availability-status"></span>			  
			  <span class="errors">
					<?php
				  if(isset($found))
				  {
					echo "Invalid Username or Password";
				  }
				  ?>
				  </span>
			  <input type="submit" name="submit" id="submit" value="Login"><br>
			  <div align="center"><span class="style4" style="color:black">New User ? <a href="QCC_Manual.php">Manual Guide</a></span></div>
			</div>
			<div class="shadow"></div>
			 <!--  <table width="200" border="0">
			  <tr>
					
					<td colspan="2" width="29%" bgcolor="#1d91d0"><div align="center" class="style1" style="font-size:30px">User Login </div></td>
				</tr>
			   <tr>
				  <td><span class="style2" style="font-size:30px">Login ID </span></td>
				  <td><input name="loginid" type="text" id="loginid2" onkeyup="check()"></td>
				</tr>
				<tr>
				  <td><span class="style2" style="font-size:30px">Password</span></td>
				  <td><input name="pass" type="password" id="pass2"></td>
					<td><input name="email" type="text" id="email"></td>
				   <span class="hidden" id="email-availability-status"></span>	
				   <td><input name="phone" type="text" id="phone"></td>
				   <span class="hidden" id="email2-availability-status"></span>	
				   <td><input name="city" type="text" id="city"></td>
				   <span class="hidden" id="email3-availability-status"></span>	
				</tr>
				<tr>
				  <td colspan="2"><span class="errors">
					<?php
				  //if(isset($found))
				 // {
					//echo "Invalid Username or Password";
				  //}
				  ?>
				  </span></td>
				  </tr>
				<tr>
				  <td colspan=2 align=center class="errors">
				
				
				  <input name="submit" type="submit" id="submit" value="Login" style="font-size:30px">
					
				  </td>
				</tr>
					<tr>
				  <td colspan="2" bgcolor="#1d91d0"><div align="center"><span class="style4">New User ? <a href="QCC_Manual.php">Manual Guide</a></span></div></td>
				 
					</tr>
				  
			  </table>-->
			  
			</form></td>
		</div>  


</body>
</html>
<style>
#modalContainer {
    background-color:rgba(0, 0, 0, 0.3);
    position:absolute;
    width:100%;
    height:100%;
    top:0px;
    left:0px;
    z-index:10000;
    background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
    position:relative;
    width:500px;
    min-height:200;
    margin-top:50px;
    border:1px solid #666;
    background-color:#fff;
    background-repeat:no-repeat;
    background-position:20px 30px;
}

#modalContainer > #alertBox {
    position:fixed;
}

#alertBox h1 {
    margin:0;
    font:bold 0.9em verdana,arial;
    background-color:#3073BB;
    color:#FFF;
    border-bottom:1px solid #000;
    padding:2px 0 2px 0px;
}

#alertBox p {
    font:0.9em verdana,arial;
    height:50px;
    padding-left:5px;
    margin-left:5px;
}

#alertBox #closeBtn {
    display:block;
    position:relative;
    margin:5px auto;
    padding:7px;
    border:0 none;
    width:70px;
    font:0.7em verdana,arial;
    text-transform:uppercase;
    text-align:center;
    color:#FFF;
    background-color:#357EBD;
    border-radius: 3px;
    text-decoration:none;
}

/* unrelated styles */

#mContainer {
    position:relative;
    width:600px;
    margin:auto;
    padding:5px;
    border-top:2px solid #000;
    border-bottom:2px solid #000;
    font:0.7em verdana,arial;
}

h1,h2 {
    margin:0;
    padding:4px;
    font:bold 1.5em verdana;
   // border-bottom:1px solid #000;
}

code {
    font-size:1.2em;
    color:#069;
}

#credits {
    position:relative;
    margin:25px auto 0px auto;
    width:350px; 
    font:0.7em verdana;
    border-top:1px solid #000;
    border-bottom:1px solid #000;
    height:90px;
    padding-top:4px;
}

#credits img {
    float:left;
    margin:5px 10px 5px 0px;
    border:1px solid #000000;
    width:80px;
    height:79px;
}

.important {
    background-color:#F5FCC8;
    padding:2px;
}

code span {
    color:green;
}
</style>
<!--<input type="button" value = "Test the alert" onclick="alert('The shortest and surest way to live with honor in the world, is to be in reality what we would appear to be, all human virtues increase and strengthen themselves by the practice and experience of them');" />-->
<script>

var ALERT_TITLE = "Oops!";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
    window.alert = function(txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    d = document;

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "./";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";

}


</script>

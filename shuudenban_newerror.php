<?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "ryanpelaez";
    $conn = new mysqli($servername, $username, $password, $dbname);
$dateUpdate = date('Y-m-d h:i:s');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id =7";
    $conn->query($sql);

    $sql = "SELECT visits FROM views WHERE id = 7";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }
    
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SHUUDENBAN CHECKING</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter0.css" />   
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<link href="select2.min.css" rel="stylesheet">
	<link href="http://hrdapps33/CountingSheet/css/shake.css" rel="stylesheet">
	<link rel="stylesheet" href="http://hrdapps33/bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="icon" href="http://hrdapps33/DenkiComputation/assets/img/images.png" type="image/x-icon" />
	<script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
	<script src="http://hrdapps33/CountingSheet/js/select2.full.js"></script>
    <script src="http://hrdapps33/bootstrap/js/bootstrap.min.js"></script>
	<script src="index.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<link rel="shortcut icon" href="http://hrdapps33/beforekakou/img/denkiNEW.ico">
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>

	#modalContainer {
	background-color:rgba(0, 0, 0, 0.3);
	position:absolute;
	top:0;
	width:100%;
	height:115%;
	left:0px;
	z-index:10000;
	background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
	position:relative;
	width:33%;
	min-height:100px;
	max-height:400px;
	margin-top:50px;
	border:1px solid #fff;
	background-color:#fff;
	background-repeat:no-repeat;
	top:30%;
}

#modalContainer > #alertBox {
	position:fixed;
}

#alertBox h1 {
	margin:0;
	font:bold 1em Raleway,arial;
	background-color:red;
	color:#FFF;
	border-bottom:1px solid #f97352;
	padding:10px 0 10px 5px;
}

#alertBox p {
	height:120px;
	padding-left:5px;
    padding-top:30px;
    text-align:center;
    vertical-align:middle;
	font-size:30px;
	color:black;
}

#alertBox #closeBtn {
	display:block;
	position:relative;
	margin:10px auto 10px auto;
	padding:7px;
	border:0 none;
	width:70px;
	text-transform:uppercase;
	text-align:center;
	color:#FFF;
	background-color:red;
	border-radius: 0px;
	text-decoration:none;
	outline:0!important;
}

/* unrelated styles */

#mContainer {
	position:relative;
	width:600px;
	margin:auto;
	padding:5px;
	border-top:2px solid #fff;
	border-bottom:2px solid #fff;
}

h1,h2 {
	margin:0;
	padding:4px;
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

@media (max-width: 600px) 
{
  #alertBox {
	position:relative;
	width:90%;
  top:30%;
}
#fixed-div {
    position: fixed;
    width: 30%;
    margin-top:290px;
    padding-top:20px;
    padding-bottom: 20px; /* must be same height as the footer */
    background-color: rgba(255, 255, 255, 0.60);
    min-height: 100%;
}

</style>
<script>
var ALERT_TITLE = "Attention!!";
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
	//mObj.style.height = d.documentElement.scrollHeight + "px";
	
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
	btn.href = "#";
	btn.focus();
	btn.onclick = function() { removeCustomAlert();return false; }

	alertObj.style.display = "block";
	
}

function removeCustomAlert() {
	document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
function ful(){
alert('NO NEED TO COMPUTE !! ITS 10kW ( below ) !!');
}
</script>
    	<script>
			//集電盤
				//////////////////////kva_check1/////////////////////
					
	
				function kva_check1() {
					if(!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)){
					//alert('Please Input Control Number..!')
					return false
					}
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check2/check_kva2.php",
				data:'code_number='+$("#code_number").val()+
				'&plan_number='+$("#plan_number").val(),
				type: "POST",
				success:function(data){
				$("#email3-availability-status").html(data);
				var number3 = document.getElementById("electric_company1").value = document.getElementById("email3-availability-status").innerHTML;
				var number4 = document.getElementById("electric_company1").value;
				var number5 = document.getElementById("plan_number").value;
				var number1 = document.getElementById("code_number").value;
				//alert(number5);
				if(number4 != ''){
					setTimeout(check_contract,100);
					setTimeout(kva_check,200);
					setTimeout(check_OptionPicking,300);
					//setTimeout(check_PlanNumber,400);
					setTimeout(bundenban,500);		
				} else if( number5 == ''){
					alert('NO DATA IN SPCAD !! but Please Check Bundenban !!');
					setTimeout(bundenban(),500);
				}else{
					document.getElementById("demo").value = '';
					document.getElementById("demo1").value = '';
					document.getElementById("demo2").value = '';
					
					document.getElementById('electric_company').style.backgroundColor = "";
				}
			
				////////////////////////////////////////////////////////////////////////
				if(number4== 3){
					document.getElementById("electric_company").value = 'TOHOUKU(東北電力)';
					//$("#electric_company").css('background-color','green');
					
				}else if(number4== 6){
					document.getElementById("electric_company").value = 'CHUBU(中部電力)';
					//$("#electric_company").css('background-color','red');
					
				}else if(number4== 4){
					document.getElementById("electric_company").value = 'TOKYOU(東京電力)';
					//$("#electric_company").css('background-color','blue');
					
				}else if(number4== 5){
					document.getElementById("electric_company").value = 'HOKURIKU(北陸電力)';
					//$("#electric_company").css('background-color','violet');
					
				}else if(number4 == 7){
					document.getElementById("electric_company").value = 'KANSAI(関西電力)';
					//$("#electric_company").css('background-color','yellow');
					
				}else if(number4== 8){
					document.getElementById("electric_company").value = 'CHUGOKU(中国電力)';
					//$("#electric_company").css('background-color','brown');
					
				}else if(number4== 9){
					document.getElementById("electric_company").value = 'SHIKOKU(四国電力)';
					//$("#electric_company").css('background-color','pink');
					
				}else if(number4== 10){
					document.getElementById("electric_company").value = 'KYUUSHU(九州電力)';
					//$("#electric_company").css('background-color','#66ffff');
					
				}else if(number4== 2){
					document.getElementById("electric_company").value = 'HOKKAIDOU(北海道電力)';
					//$("#electric_company").css('background-color','#009999');					
				}
				check_powercon();
				
				setTimeout(hybrid,600);
				setTimeout(compute,700);
				//compute();
				$("#loaderIcon").hide();
				},
				error:function (){}
				});  
				}  
				/////////////////////check_PlanNumber///////////////////
				function check_PlanNumber() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check2/check_PlanNumber.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var C = document.getElementById("plan_number").value = document.getElementById("email6-availability-status").innerHTML;
				var D = document.getElementById("plan_number").value;
				//alert(D);
				setTimeout(hybrid,600);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 
				/////////////////////		
				function checkemailAvailability() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check2/check_availability.php",
				data:'powercon_1='+$("#powercon_1").val()+
				'&powercon_2='+$("#powercon_2").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("solar_breaker").value = document.getElementById("email-availability-status").innerHTML;
				var number2 = document.getElementById("solar_breaker").value;
				var number3 = document.getElementById("main_breaker").value;
				 if(number2 != '' && number3 != '' ){	
					compute();
				}else{
					compute();
				} 
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 
				//////////////////checkemailAvailability2///////////////////////////////////////////////////////////////
	
				function checkemailAvailability2() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check2/check_availability2.php",
				data:'KVA='+$("#KVA").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("main_breaker").value = document.getElementById("email-availability-status").innerHTML;
				var number2 = document.getElementById("solar_breaker").value;
				var number3 = document.getElementById("code_number").value;
				if(number1 != '' && number2 != '' && number3 != '' ){
					compute();
				}else{
				 document.getElementById("demo").value = '';	
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 
				//////////////////////checkemailAvailability3////////////////////////////////////////////////////////////
				
				function checkemailAvailability3() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check2/check_availability3.php",
				data:'electric_contract='+$("#electric_contract").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementB
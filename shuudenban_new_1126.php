<?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "ryanpelaez";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE views SET visits = visits+1 WHERE id =7";
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
				url: "check1/check_kva2.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email3-availability-status").html(data);
				var number3 = document.getElementById("electric_company1").value = document.getElementById("email3-availability-status").innerHTML;
				var number4 = document.getElementById("electric_company1").value;
				var number5 = document.getElementById("plan_number").value;
				if(number4 != ''){
					setTimeout(check_contract,100);
					setTimeout(kva_check,200);
					setTimeout(check_OptionPicking,300);
					setTimeout(check_PlanNumber,400);
					setTimeout(bundenban,500);		
				} else if(number5 == ''){
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
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}  
				/////////////////////check_PlanNumber///////////////////
				function check_PlanNumber() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_PlanNumber.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var C = document.getElementById("plan_number").value = document.getElementById("email6-availability-status").innerHTML;
				var D = document.getElementById("plan_number").value;
	
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 
				/////////////////////		
				function checkemailAvailability() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_availability.php",
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
				url: "check1/check_availability2.php",
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
				url: "check1/check_availability3.php",
				data:'electric_contract='+$("#electric_contract").val(),
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
				/////////////////////kva_check///////////////////
				function kva_check() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_kva.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email2-availability-status").html(data);
				var number1 = document.getElementById("KVA").value = document.getElementById("email2-availability-status").innerHTML;
				var number2 = document.getElementById("KVA").value;
				setTimeout(checkemailAvailability2,500); 
				document.getElementById("electric_contract").value = number2;
				setTimeout(check_powercon,1000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}  
				
				///////////////////check_contract///////////////////////////////////////////////////////
				function check_contract() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_contract.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email4-availability-status").html(data);
				var number4 = document.getElementById("contract_kind").value = document.getElementById("email4-availability-status").innerHTML;
				var number5 = document.getElementById("contract_kind").value;
				var number6 = document.getElementById("code_number").value;
				var number7 = document.getElementById("solar_breaker").value;
				var number8 = document.getElementById("electric_contract").value;
				var number9 = document.getElementById("electric_company").value;
				var judge = '10kW以上申請(above)';
				var judge1 = '10kW未満申請(below)'; 
				
				if ( number5 != 1 ){
					alert('NO NEED TO COMPUTE (SHUUDENBAN) !! ITS 10kW ( below ) !!');
					
					document.getElementById("code_number").disabled = true;
					document.getElementById("electric_contract").disabled = true;
					document.getElementById("powercon_1").disabled = true;
					document.getElementById("powercon_2").disabled = true;
					document.getElementById("demo1").value = judge1;
					document.getElementById("demo1").style.color = "red";
				} else if (number6 != '' && number7 !=''){
					document.getElementById("code_number").disabled = true;
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";
				}else if (number6 != '' && number7 !='' && number8 != '' ){
					document.getElementById("electric_contract").disabled = true;
					document.getElementById("powercon_1").disabled = true;
					document.getElementById("powercon_2").disabled = true;
					document.getElementById("code_number").disabled = true;
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";
				}else{
					document.getElementById("electric_contract").disabled = false;
					document.getElementById("powercon_1").disabled = false;
					document.getElementById("powercon_2").disabled = false;		
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";					
				}	 
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}  
			////////////////////////////////////////////////////////////////////
			function check_powercon() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_powercon.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email5-availability-status").html(data);
				var number7 = document.getElementById("Inverter55Qty").value = document.getElementById("email5-availability-status").innerHTML;
				var pow = number7.substr(0, 1);
				var pow2 = number7.substr(1, 1);
				var pow3 = number7.substr(2, 2);
				var powv1 = document.getElementById("Inverter55Qty").value = pow;
				var powv2 = document.getElementById("Inverter80Qty").value = pow2;
				var powv3 =document.getElementById("Inverter99Qty").value = pow3;
				
				if(powv1 == 2 && powv2 == 0 && powv3 == 0){
					document.getElementById("powercon_1").value = '5.5kW';
					document.getElementById("powercon_2").value = '5.5kW';
				}else if(powv1 == 0 && powv2 == 2 && powv3 == 0){
					document.getElementById("powercon_1").value = '8.0kW';
					document.getElementById("powercon_2").value = '8.0kW';
				}else if(powv1 == 0 && powv2 == 0 && powv3 == 2){
					document.getElementById("powercon_1").value = '9.9kW';
					document.getElementById("powercon_2").value = '9.9kW';	
				}else if(powv1 == 1 && powv2 == 1 && powv3 == 0){
					document.getElementById("powercon_1").value = '5.5kW';
					document.getElementById("powercon_2").value = '8.0kW';
				}else if(powv1 == 0 && powv2 == 1 && powv3 == 1){
					document.getElementById("powercon_1").value = '8.0kW';
					document.getElementById("powercon_2").value = '9.9kW';
				}else if(powv1 == 1 && powv2 == 0 && powv3 == 1){
					document.getElementById("powercon_1").value = '5.5kW';
					document.getElementById("powercon_2").value = '9.9kW';
				}else{
					document.getElementById("powercon_1").value = '';
					document.getElementById("powercon_2").value = '';
				}
				if(powv1 == 1 && powv2 == 0 && powv3 == 0){
					document.getElementById("powerqty").value = '1';	
				} else if(powv1 == 0 && powv2 == 1 && powv3 == 0){
					document.getElementById("powerqty").value = '1';		
				} else if(powv1 == 0 && powv2 == 0 && powv3 == 1){
					document.getElementById("powerqty").value = '1';		
				} else if(powv1 == 2 && powv2 == 0 && powv3 == 0){
					document.getElementById("powerqty").value = '2';		
				} else if(powv1 == 0 && powv2 == 2 && powv3 == 0){
					document.getElementById("powerqty").value = '2';		
				} else if(powv1 == 0 && powv2 == 0 && powv3 == 2){
					document.getElementById("powerqty").value = '2';		
				} else if(powv1 == 3 && powv2 == 0 && powv3 == 0){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 0 && powv2 == 3 && powv3 == 0){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 0 && powv2 == 0 && powv3 == 3){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 1 && powv2 == 1 && powv3 == 0){
					document.getElementById("powerqty").value = '2';		
				} else if(powv1 == 1 && powv2 == 0 && powv3 == 1){
					document.getElementById("powerqty").value = '2';		
				} else if(powv1 == 0 && powv2 == 1 && powv3 == 1){
					document.getElementById("powerqty").value = '2';		
				} else if(powv1 == 2 && powv2 == 1 && powv3 == 0){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 0 && powv2 == 2 && powv3 == 1){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 0 && powv2 == 1 && powv3 == 2){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 1 && powv2 == 2 && powv3 == 0){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 1 && powv2 == 0 && powv3 == 2){
					document.getElementById("powerqty").value = '3';		
				} else if(powv1 == 0 && powv2 == 0 && powv3 == 4){
					document.getElementById("powerqty").value = '4';		
				} else if(powv1 == 0 && powv2 == 4 && powv3 == 0){
					document.getElementById("powerqty").value = '4';		
				} else if(powv1 == 4 && powv2 == 0 && powv3 == 0){
					document.getElementById("powerqty").value = '4';		
				}
				
				checkemailAvailability();
				setTimeout(check_OptionPicking2,500);
				var number9 = document.getElementById("code_number").value;
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
			/////////////////////check_OptionPicking///////////////////
				function check_OptionPicking() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_OptionPicking.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email5-availability-status").html(data);
				var A = document.getElementById("option_p").value = document.getElementById("email5-availability-status").innerHTML;
				var B = document.getElementById("option_p").value;
				//var D = document.getElementById("demo").value;
				var option_p = $('#option_p').val();
				var number9 = document.getElementById("electric_company").value;
				var D = $('#demo').val();
				var option = 'OK(✔)';
				var option1 = 'NOT TALLY(✘)';
				var results = 'Pattern A No Need Shuudenban=(✘)';
				
				var results1 = 'Pattern B Need Shuudenban=(✔)';
				var results2 = 'Pattern A Need Shuudenban=(✔)';
				var results7 = 'NO NEED SHUUDENBAN';
				setTimeout(100);
				if ( option_p == '集電盤' && D == results1  ){
					//alert ('try');
					document.getElementById("demo2").value = option;
					document.getElementById("demo2").style.color = "blue";
				}else if (option_p != '集電盤' &&  D == results1 ){
					alert ('NOT TALLY !! Please Check the Floor Plan');
					document.getElementById("demo2").value = option1;
					document.getElementById("demo2").style.color = "maroon";
				}else if (option_p == '' &&  D == results ){
					//alert ('try2');
					document.getElementById("demo2").value = option;
					document.getElementById("demo2").style.color = "blue";
				
				}else if (option_p == '集電盤' &&  D == results2 ){
					//alert ('try2');
					document.getElementById("demo2").value = option;
					document.getElementById("demo2").style.color = "blue";
				
				}else if (option_p == '集電盤' && D == results){
					alert ('NOT TALLY !! Please Check the Floor Plan');
					document.getElementById("demo2").value = option1;
					document.getElementById("demo2").style.color = "maroon";
				}else if (option_p == '' && D == results2){
					alert ('NOT TALLY !! Please Check the Floor Plan');
					document.getElementById("demo2").value = option1;
					document.getElementById("demo2").style.color = "maroon";
				}else if(option_p == '' && D == results7){
					document.getElementById("demo2").value = option;
					document.getElementById("demo2").style.color = "blue";
				}else if(option_p == '集電盤' && D == results7 ){
					document.getElementById("demo2").value = option1;
					document.getElementById("demo2").style.color = "maroon";
				}
				
				
				document.getElementById("option_p").value = B;
			
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
			////////////////solar//////////////////////////////////
			 function check_OptionPicking2() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_OptionPicking_solar.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email5-availability-status").html(data);
				var A = document.getElementById("option_p1").value = document.getElementById("email5-availability-status").innerHTML;
				
				
			
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_OptionPicking_solar2.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email5-availability-status").html(data);
				var A = document.getElementById("option_p2").value = document.getElementById("email5-availability-status").innerHTML;
				
				
			
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_OptionPicking_solar3.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email5-availability-status").html(data);
				var A = document.getElementById("option_p3").value = document.getElementById("email5-availability-status").innerHTML;
				var op1 = document.getElementById("option_p1").value;
				var op2 = document.getElementById("option_p2").value;
				var op3 = document.getElementById("option_p3").value;
				var powv4 =document.getElementById("powerqty").value ;
				//console.log(powv4);
				if (powv4 == 1 && op1 == 1){
					var op1 = document.getElementById("demosolar").value = 'OK(✔)';
					document.getElementById("demosolar").style.color = "blue";
				} else if (powv4 == 2 && op1 == 2 || powv4 == 2 && op2 == 1 ){
					var op1 = document.getElementById("demosolar").value = 'OK(✔)';
					document.getElementById("demosolar").style.color = "blue";
				} /* else if (powv4 == 2 && op1 == 1 || powv4 == 2 && op2 == 1 ){
					var op1 = document.getElementById("demosolar").value = 'OK(✔)';
					document.getElementById("demosolar").style.color = "blue";
				} */ else if (powv4 == 3 && op1 == 3 || powv4 == 3 && op3 == 1 ){
					var op1 = document.getElementById("demosolar").value = 'OK(✔)';
					document.getElementById("demosolar").style.color = "blue";
				} else if (powv4 == 3 && op1 == 1 || powv4 == 3 && op2 == 2 ){
					var op1 = document.getElementById("demosolar").value = 'OK(✔)';
					document.getElementById("demosolar").style.color = "blue";
				} else if (powv4 == 3 && op1 == 1 || powv4 == 3 && op2 == 1 || powv4 == 3 && op2 == 1 ){
					var op1 = document.getElementById("demosolar").value = 'OK(✔)';
					document.getElementById("demosolar").style.color = "blue";
				}  else if (powv4 == ''){
					var op1 = document.getElementById("demosolar").value = '';
				} else if (powv4 != '' && (op1 == '' && op2 == '' && op3 == '')){
					var op1 = document.getElementById("demosolar").value = 'NOT TALLY';
					document.getElementById("demosolar").style.color = "maroon";
				} else if (powv4 == ''){
					//console.log(op2);
					var op1 = document.getElementById("demosolar").value = 'NOT TALLY';
					document.getElementById("demosolar").style.color = "maroon";
				}	else {
					var op1 = document.getElementById("demosolar").value = 'NOT TALLY';
					document.getElementById("demosolar").style.color = "maroon";
				}
			
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 		
			
		/////////////////////bundenban///////////////////
				function bundenban() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_bundenban.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var nisetai = document.getElementById("nisetai").value = document.getElementById("email6-availability-status").innerHTML;
				var nisetai2 = document.getElementById("nisetai").value;
				if (nisetai2 == '無'){
					document.getElementById("nisetai").value = '✘';
					document.getElementById("nisetai").style.color = "red";
				} else if (nisetai2 == '有'){
					document.getElementById("nisetai").value = '✔';
					document.getElementById("nisetai").style.color = "green";
				}
				setTimeout(bundenban_picking,10);
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				jQuery.ajax({
				url: "check1/check_spower.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var spower = document.getElementById("spower").value = document.getElementById("email6-availability-status").innerHTML;
				var spower2 = document.getElementById("spower").value;
				if (spower2 == '無'){
					document.getElementById("spower").value = '✘';
					document.getElementById("spower").style.color = "red";
				} else if (spower2 == '有'){
					document.getElementById("spower").value = '✔';
					document.getElementById("spower").style.color = "green";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				jQuery.ajax({
				url: "check1/check_solarpower.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var solarpower = document.getElementById("solarpower").value = document.getElementById("email6-availability-status").innerHTML;
				var solarpower = document.getElementById("solarpower").value;
	
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				} 
				///////////check option picking bundenban//////////////
				
				function bundenban_picking() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/check_bundenban_picking.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var b_picking = document.getElementById("b_picking").value = document.getElementById("email6-availability-status").innerHTML;
				var number0 = b_picking.slice(0, -1);
					var strArray = number0.split("+");
						for(var i = 0; i < strArray.length; i++){
											document.getElementById("b1").value = strArray[0];
											document.getElementById("c1").value = strArray[1];
											document.getElementById("b2").value = strArray[2];
											document.getElementById("c2").value = strArray[3];
											document.getElementById("b3").value = strArray[4];
											document.getElementById("c3").value = strArray[5];
											
											//document.getElementById("serial4").value = strArray[0];
											} 
				var nisetai = document.getElementById("nisetai").value ;
				var spowers = document.getElementById("spower").value ;
				var solarpower = document.getElementById("solarpower").value ;
				var a = document.getElementById("b1").value ;
				var b = document.getElementById("c1").value ;
				var c = document.getElementById("b2").value ;
				var d = document.getElementById("c2").value ;
				var e = document.getElementById("b3").value ;
				var f = document.getElementById("c3").value ;
				
				
								if ( a == 'undefined'){
									document.getElementById("b1").value = '';
								}  if ( b == 'undefined'){
									document.getElementById("c1").value = '';
								}  if ( c == 'undefined'){
									document.getElementById("b2").value = '';
								}  if ( d == 'undefined'){
									document.getElementById("c2").value = '';
								}  if ( e == 'undefined'){
									document.getElementById("b3").value = '';
								}  if ( f == 'undefined'){
									document.getElementById("c3").value = '';
								}
				
				
				//console.log(z);
				if (nisetai == '✘' && spowers == '✘'){
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/J_bundenban.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById("b_result").value = 'NO PROBLEM';
						document.getElementById("b_result").style.color = "blue";
				} 
				if (a == '分電盤' && solarpower == 'YOJO (余剰電力)'){
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/J_bundenban.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById("b_result").value = 'NO PROBLEM';
						document.getElementById("b_result").style.color = "blue";
				}
				if (a == '分電盤-5(nisetai)' && c == '分電盤-6(nisetai)'){
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/1_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById('imageDiv2').innerHTML = '<img src="bundenban_image/2_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivb').innerHTML = d;
						document.getElementById('imageDivb').style.color = "black";
						document.getElementById("imageDivb").style.fontSize = "xx-large"; 
						document.getElementById("imageDivb").style.textAlign = "center";
						document.getElementById("b_result").value = 'NO PROBLEM';
						document.getElementById("b_result").style.color = "blue";
						
				} 
				if (a == '分電盤' && c == '分電盤-3'){
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/J_bundenban.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById('imageDiv2').innerHTML = '<img src="bundenban_image/Z_bundenban.PNG" style="width:180px;"/>';
						document.getElementById('imageDivb').innerHTML = d;
						document.getElementById('imageDivb').style.color = "black";
						document.getElementById("imageDivb").style.fontSize = "xx-large"; 
						document.getElementById("imageDivb").style.textAlign = "center";
						document.getElementById("b_result").value = 'NO PROBLEM';
						document.getElementById("b_result").style.color = "blue";
				}
				if (a == '分電盤-3' && c == '分電盤-5(nisetai)' && e == '分電盤-6(nisetai)'){
						console.log(1);
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/Z_bundenban.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById('imageDiv2').innerHTML = '<img src="bundenban_image/1_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivb').innerHTML = d;
						document.getElementById('imageDivb').style.color = "black";
						document.getElementById("imageDivb").style.fontSize = "xx-large"; 
						document.getElementById("imageDivb").style.textAlign = "center";
						document.getElementById('imageDiv3').innerHTML = '<img src="bundenban_image/2_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivc').innerHTML = f;
						document.getElementById('imageDivc').style.color = "black";
						document.getElementById("imageDivc").style.fontSize = "xx-large"; 
						document.getElementById("imageDivc").style.textAlign = "center";
						document.getElementById("b_result").value = 'NO PROBLEM';
						document.getElementById("b_result").style.color = "blue";
				} 
				if (a == '分電盤-5(nisetai)' && c == '分電盤-6(nisetai)' && e == '分電盤-7(nisetai)'){
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/1_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById('imageDiv2').innerHTML = '<img src="bundenban_image/2_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivb').innerHTML = d;
						document.getElementById('imageDivb').style.color = "black";
						document.getElementById("imageDivb").style.fontSize = "xx-large"; 
						document.getElementById("imageDivb").style.textAlign = "center";
						document.getElementById('imageDiv3').innerHTML = '<img src="bundenban_image/3_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivc').innerHTML = f;
						document.getElementById('imageDivc').style.color = "black";
						document.getElementById("imageDivc").style.fontSize = "xx-large"; 
						document.getElementById("imageDivc").style.textAlign = "center";
						document.getElementById("b_result").value = 'NO PROBLEM';
						document.getElementById("b_result").style.color = "blue";
				}
				if (nisetai == '✘' && a == '分電盤-5(nisetai)' && c == '分電盤-6(nisetai)'){
						document.getElementById("b_result").value = 'PROBLEM';
						document.getElementById("b_result").style.color = "maroon";
				}
				if (nisetai == '✔' && solarpower == 'YOJO (余剰電力)' &&  a != '分電盤-5(nisetai)' && c != '分電盤-6(nisetai)'){
						document.getElementById("b_result").value = 'PROBLEM';
						document.getElementById("b_result").style.color = "maroon";
				} 
				if (nisetai == '✘' && spowers == '✘' && a == '分電盤-5(nisetai)' && c == '分電盤-6(nisetai)' && e == '分電盤-7(nisetai)'){
						document.getElementById('imageDiv').innerHTML = '<img src="bundenban_image/1_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDiva').innerHTML = b;
						document.getElementById('imageDiva').style.color = "black";
						document.getElementById("imageDiva").style.fontSize = "xx-large"; 
						document.getElementById("imageDiva").style.textAlign = "center";
						document.getElementById('imageDiv2').innerHTML = '<img src="bundenban_image/2_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivb').innerHTML = d;
						document.getElementById('imageDivb').style.color = "black";
						document.getElementById("imageDivb").style.fontSize = "xx-large"; 
						document.getElementById("imageDivb").style.textAlign = "center";
						document.getElementById('imageDiv3').innerHTML = '<img src="bundenban_image/3_nisetai.PNG" style="width:180px;"/>';
						document.getElementById('imageDivc').innerHTML = f;
						document.getElementById('imageDivc').style.color = "black";
						document.getElementById("imageDivc").style.fontSize = "xx-large"; 
						document.getElementById("imageDivc").style.textAlign = "center";
						document.getElementById("b_result").value = 'PROBLEM';
						document.getElementById("b_result").style.color = "maroon";
						document.getElementById('tri').innerHTML = 'Please Check The Item !!';
						document.getElementById("tri").style.color = "maroon";
						//document.getElementById("tri").style.fontSize = "xx-large"; 
					
				}
				if( b == '2.0' || d == '2.0' || f == '2.0'){
						document.getElementById("b_result").value = 'PROBLEM';
						document.getElementById("b_result").style.color = "maroon";
						document.getElementById('tri').innerHTML = 'Please Check The Item !!';
				}
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 	
    	</script>
		<style>			
			.space{
				white-space:pre;				
			}
			h1 {
					background: #68dff0;					
					font: bold normal 210% 'arial black', Times, serif;
					letter-spacing: 0.2em;
					margin: 0;
					padding: 10px 10px 10px 60px;
					text-align:center;
					color:#424242;					
				}
			td {
				border-style:solid;
				border-color:black;
			}	
			p{
				vertical-align:middle;
			}
			label{
				font-style: normal;
			}
			select {
				 text-align-last:center;
			}
			.blink_me {
			  animation: blinker 2s linear infinite;
			} 
			@keyframes blinker {
			  50% {
				opacity: 0;
			  }	
				
			 
			  
		</style>
		<style>
	.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 background: transparent;
 color: orange;
 border: none;
}
.scroll-left p {
 position: absolute;
 width: 130%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-left 15s linear infinite;
 -webkit-animation: scroll-left 15s linear infinite;
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}
</style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>DENKI COMPUTATION</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="http://hrdapps33/denki_portal/" style="color:black;">Denki Portal</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="index.php"><img src="assets/img/cal.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">COMPUTATION</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>HOME</span>
                      </a>
                  </li>

                 <li class="sub-menu">
                      <a  href="firealarm_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>FIRE ALARM (KEMURI)</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a href="bundenban_new.php">
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>BUNDENBAN KABE FUKASU IN IRISUMI DOOR/WINDOW</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="bracket_light_kaidan_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>WALL MOUNTED BRACKET LIGHT AND KAIDAN</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="window_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>WINDOW AND WINDOW SILL</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="hitting_of_items_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>HITTING ITEMS</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="socket_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>AC SOCKET(KONSENTO)</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a class="active" href="shuudenban_new.php">
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>SHUUDENBAN, SOLAR SOCKET & BUNDENBAN CHECKING</span>
                      </a>
                      <ul class="sub">
                         	<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Checking Shuudenban And Solar Socket</a></li>		
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="exterior_item_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>EXTERIOR ITEM HEIGHT</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="interphone.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>INTERPHONE</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper" >
			
			<ul class="nav nav-tabs" style="font-size:20px">
				
							
			</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>CHECKING SHUUDENBAN</h1></th>					
							</div>
						</thead>
						<tbody>
						<form method="post" action="">
									
									
						<div class="row"  >			
							<div class="col-sm-6">	
									<p>* Press<span style="color:red;font-weight:bold"> ENTER </span>after you put the Customer Code *</p>
									<label style="font-size:20px;color:black">Customer Code:</label>
										<input type="text" name="code_number" id="code_number" onkeypress="kva_check1()" onKeyup="kva_check1()" onblur="kva_check1()" onmousemove="kva_check1()"   style="font-size:20px;width:150px;text-align:center;color:red;" maxlength="12"   />
										<input class="bg-danger" type="button" onclick="window.location.href=window.location.href" value="Clear Form" style="font-size:25px;color:black;font-weight:bold;" >	
									<br>	
									<label style="font-size:20px;color:black" class="space">Plan Number:     </label>		
										<input type="" name="plan_number" id="plan_number"   style="font-size:20px;width:150px;text-align:center;color:red"  readonly="readonly"  />
										<span class="hidden" id="email6-availability-status"></span>
										
										<span> <span class="blink_me" style="color:red;font-size:15px;font-weight:bold">*Check Plan number if Latest/Not Tally</span></span><br>
									
							</div>	
							<div class="scroll-left" style="width:50%;float:right;margin-top:60px;">
								<p style="color:black;font-size:15px;float:right"><span style="color:red;">Reminder</span>: Please use Google Chrome or Mozilla Firefox and ZOOM it to 80% as your browser for better usage of this system.</p>			
							</div>
						</div>	
							<tr>		
								<td rowspan="2">
								<div class="row">
									<div class="col-sm-12" align="center">
										<label style="font-size:20px;color:black">Electric Company:</label>	
											<input type="text" name="electric_company1" id="electric_company1"  style="font-size:20px;width:300px;text-align:center;color:black"  class="hide" />
											<select type="" name="electric_company" id="electric_company"  onchange="compute(),check_OptionPicking()" style="font-size:15px;width:200px;text-align:center;color:red;height:35px;font-weight:bold" >
												<option value=""></option>
												<option style="width:50px;height:20px;" value="CHUBU(中部電力)">CHUBU(中部電力)</option>
												<option style="width:50px;height:20px;" value="TOHOUKU(東北電力)">TOHOUKU(東北電力)</option>
												<option style="width:50px;height:20px;" value="TOKYOU(東京電力)">TOKYOU(東京電力)</option>
												<option style="width:50px;height:20px;" value="HOKURIKU(北陸電力)">HOKURIKU(北陸電力)</option>
												<option style="width:50px;height:20px;" value="HOKKAIDOU(北海道電力)">HOKKAIDOU(北海道電力)</option>
												<option style="width:50px;height:20px;" value="KANSAI(関西電力)">KANSAI(関西電力)</option>
												<option style="width:50px;height:20px;" value="CHUGOKU(中国電力)">CHUGOKU(中国電力)</option>
												<option style="width:50px;height:20px;" value="SHIKOKU(四国電力)">SHIKOKU(四国電力)</option>
												<option style="width:50px;height:20px;" value="KYUUSHU(九州電力)">KYUUSHU(九州電力)</option>
											</select><br><br><br>
											<span class="hidden" id="email3-availability-status"></span>
										<!--<label style="font-size:25px;color:black">Contract kind:</label>-->	
											<input type="hidden" name="contract_kind" id="contract_kind"  style="font-size:20px;width:300px;text-align:center;color:black"   />									
											<!--<input type="" name="option_p" id="option_p"  style="font-size:20px;width:300px;text-align:center;color:black;color:red" readonly="readonly"  />-->									
											<!--<input type="text" id="demo1"  style="width:350px;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>-->
											<span class="hidden" id="email4-availability-status"></span>	
									<span  style="font-size:15px">*For <span style="color:red;font-weight:bold">Autocad USERS</span> checking <span class="blink_me" style="color:red;font-weight:bold">only</span> !!</span><br>
									<label align="center" style="font-size:20px;color:black;" class="space">Option Picking:</label>
									<input type="" name="option_p" id="option_p"  style="font-size:30px;width:150px;text-align:center;color:red;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />		
										<span class="hidden" id="email5-availability-status"></span>
								</div>
									
							
								</div>
								</td>	
								<td>
								
								<div class="col-sm-5"  >	
									<?php	
											include_once 'include/dbcon.php';
											$query="SELECT DISTINCT powercon_1 FROM shudenban limit 6";
											$result= $db_connect->query($query);
										?>
										<label style="font-size:18px;color:black">PowerCon 1</label>&nbsp;
											<select  style="font-size:25px;text-align:center" id="powercon_1"  name="powercon_1" onchange="checkemailAvailability(),check_OptionPicking()" required="required">
												<option value=""></option>
												<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['powercon_1']?>"><?php echo $row['powercon_1']?></option>
												<?php } ?>
											</select>
											<label style="font-size:18px;color:red;font-weight:bold" class="space">	Solar Breaker</label>
											
											<br>
											
											
											<?php	
											include_once 'include/dbcon.php';
											$query="SELECT DISTINCT powercon_2 FROM shudenban limit 6";
											$result= $db_connect->query($query);
										?>
										<label style="font-size:18px;color:black">PowerCon 2</label>&nbsp;
											<select   style="font-size:25px;text-align:center" id="powercon_2"  name="powercon_2" onchange="checkemailAvailability(),check_OptionPicking()" required="required">
												<option value=""></option>
												<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['powercon_2']?>"><?php echo $row['powercon_2']?></option>
												<?php } ?>
											</select>	
										<span class="space" style="color:red;font-size:18px">	=  </span><input type="" name="solar_breaker" id="solar_breaker" value="" style="font-size:30px;width:100px;text-align:center;color:blue" disabled  /></span>
											<span class="hidden" id="email-availability-status"></span>									
									
								</div>
							
										
										<?php	
												include_once 'include/dbcon.php';
												$query="SELECT * FROM shudenban limit 16";
												$result= $db_connect->query($query);
										?>
								<div class="col-sm-6" style="margin-top:15px;">	
									<label style="font-size:18px;color:black">KVA</label>
										<input class="hidden" type="text" name="KVA" id="KVA"  onkeyup="checkemailAvailability2()"style="font-size:25px;width:200px;text-align:center"  />
										<span class="hidden" id="email2-availability-status"></span>	
										<label style="font-size:18px;color:black"></label>&nbsp;
											<select  style="font-size:25px;text-align:center" id="electric_contract"  name="electric_contract" onchange="checkemailAvailability3(),check_OptionPicking()" required="required">
												<option value=""></option>
												<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['electric_contract']?>"><?php echo $row['electric_contract']?></option>
												<?php } ?>
											</select>
										<label style="font-size:18px;color:red;font-weight:bold">MainBreaker =</label>
										<input type="" name="main_breaker" id="main_breaker" style="font-size:30px;width:100px;text-align:center;color:blue"  disabled />	
										<span class="hidden" id="email-availability-status"></span>	
									
								</div>	
								</td>
							</tr>
							<tr>
								<td>
									<div class="col-sm-6">
									<label style="font-size:25px;color:black;" class="space">				Result:</label>									
										<input type="text" id="demo" name="demo"  style="text-align:center;width:530px;font-size:30px;font-weight:bold;border:;background-color:#b6bdc6;" disabled>								
									<center class="space"><input type="text" id="demoA" name="demoA" style="width:450px;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;color:blue" disabled></center>
									</div>
									<div class="col-sm-6" align="center">
									<label align="center" style="font-size:25px;color:black;" class="space">REMARKS:</label><br>
										<input type="text" id="demo2" name="demo2"  style="text-align:center;width:300px;font-size:45px;font-weight:bold;border:;background-color:#b6bdc6;" disabled>
									</div>
								</td>
							</tr>	
							</div>
							
							
							
							
							<!--<div class="col-sm-5">	
								<span style="font-size:15px;">*For Pattern A,OK to follow Request to <span style="color:red;font-weight:bold">ADD SHUUDENBAN</span>.</span>						
								<br><span style="font-size:15px;">*For Pattern B,if Request to Delete <span style="color:red;font-weight:bold">SHUUDENBAN not follow</span></span>
							</div>-->							
										
								
									<input class="hidden" type="text" name="Inverter55Qty" id="Inverter55Qty"  style="font-size:25px;width:200px;text-align:center"  />
									<input class="hidden" type="text" name="Inverter80Qty" id="Inverter80Qty" style="font-size:25px;width:200px;text-align:center"  />
									<input class="hidden" type="text" name="Inverter99Qty" id="Inverter99Qty"  style="font-size:25px;width:200px;text-align:center"  />
									<span class="hidden" id="email6-availability-status"></span>
								
						
							</form>	
						</tbody>
					</table>	
				</form>
				<!--<div class="col-sm-3">
					<label style="color:black;font-size:25px;">*ELECTRIC COMPANIES*</label><br>
					<input type="text" style="width:50px;height:20px;background-color:red;" disabled><span style="color:black;font-size:20px">-CHUBU(中部電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:green;" disabled><span style="color:black;font-size:20px">-TOHOUKU(東北電力)</span><br>				
					<input type="text" style="width:50px;height:20px;background-color:#3333ff;" disabled><span style="color:black;font-size:20px">-TOKYOU(東京電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:violet;" disabled><span style="color:black;font-size:20px">-HOKURIKU(北陸電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:#009999;" disabled><span style="color:black;font-size:20px">-HOKKAIDOU(北海道電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:yellow;" disabled><span style="color:black;font-size:20px">-KANSAI(関西電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:brown;" disabled><span style="color:black;font-size:20px">-CHUGOKU(中国電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:pink;" disabled><span style="color:black;font-size:20px">-SHIKOKU(四国電力)</span><br>
					<input type="text" style="width:50px;height:20px;background-color:#66ffff;" disabled><span style="color:black;font-size:20px">-KYUUSHU(九州電力)</span><br>
				</div>
				<div class="col-sm-9">
				<p><span style="font-size:25px;color:blue">REMINDER !!!</span></p>
				<p style="color:black;font-size:15px" >* Always check/compare the <img src="assets/img/plannumber.PNG" style="height:30px;width:200px;">if it is tally or not, if not Please Check and follow Request or latest 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; plan number based on CAD PDF. Because sometimes the Plan Number that will generate from system is not latest and updated.</p>
				<hr>
				<p style="color:black;font-size:15px">* If the O.P or Option Picking Field is Empty<img src="assets/img/OP.PNG" style="height:30px;width:200px;">,its means <span style="color:blue;font-size:25px">NO SHUUDENBAN</span>.</p>
				<p style="color:black;font-size:15px" class="space">    and If the O.P or Option Picking Field is =<span style="color:red"> '集電盤' </span><img src="assets/img/OP1.PNG" style="height:30px;width:200px;">,its means <span style="color:blue;font-size:25px">WITH SHUUDENBAN</span>.</p>
				<hr>
				<p style="color:black;font-size:15px">* Check If the Status is OK<img src="assets/img/status.PNG" style="height:30px;width:200px;">or NOT TALLY<img src="assets/img/status2.PNG" style="height:30px;width:200px;">.</p>
				<p style="color:black;font-size:20px;font-weight:bold" class="space">	  * HOW TO DETERMINE IF THE STATUS IS <span style="color:red"> OK </span>OR <span style="color:red">NOT TALLY</span> *</p>
				<p style="color:black;font-size:15px" class="space">			Please Compare the <img src="assets/img/Res.PNG" style="height:30px;width:200px;">and <img src="assets/img/OP.PNG" style="height:30px;width:200px;">. </p>
				
					
					<img src="assets/img/TALLY.PNG" height="30px"><span style="color:black;font-size:30px" class="space">->GOOD   </span><img src="assets/img/TALLY2.PNG" height="30px"><span style="color:black;font-size:30px" class="space">->NOT GOOD</span><br><br><br>
					<img src="assets/img/TALLY1.PNG" height="30px"><span style="color:black;font-size:30px" class="space">->GOOD   </span><img src="assets/img/NOT TALLY.PNG" height="40px"><span style="color:black;font-size:30px" class="space">->NOT GOOD</span><br><br><br>
					
				</div>-->
			
			</div>
			
		</div>	
              <!-- page end-->
		
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>CHECKING of SOLAR SOCKET</h1></th>					
							</div>
						</thead>
						<tbody>
							<tr>	
								
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM shudenban limit 16";
										$result= $db_connect->query($query);
									?>
							</tr>
							<tr >
							<form method="post" action="">
							
								<td style="" rowspan="2">
									
									<div class="container-fluid">
										<div class="col-sm-12">	
													<br>
													<br>
													
													<label style="font-size:18px;color:black"><img src="http://hrdapps33/denkicomputation/denkilogo/pwrty.PNG">=</label>
													<input type="text" name="powerqty" id="powerqty" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   readonly="readonly" />
										</div>	
								</td>
								<td>
									<div class="col-sm-12">		
							
											<label style="font-size:18px;color:black"><img src="http://hrdapps33/denkicomputation/denkilogo/x1.PNG">=</label>
												<input type="text" name="option_p1" id="option_p1"  style="font-size:30px;width:150px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />	
											<label style="font-size:18px;color:black"><img src="http://hrdapps33/denkicomputation/denkilogo/x2.PNG">=</label>
												<input type="text" name="option_p2" id="option_p2"  style="font-size:30px;width:150px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />
											<label style="font-size:18px;color:black"><img src="http://hrdapps33/denkicomputation/denkilogo/x3.PNG">=</label>	
												<input type="text" name="option_p3" id="option_p3"  style="font-size:30px;width:150px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />
											<span class="hidden" id="email3-availability-status"></span>
											<span class="hidden" id="email-availability-status"></span>	
											<span class="hidden" id="email5-availability-status"></span>	
									</div>	
								</td>
							</tr>
							<tr>
								<td style="">
								
									<div class="col-sm-12" align="center">	
												<!--<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="font-size:25px;color:black;font-weight:bold;float:left;" >-->
												<label style="font-size:45px;color:red;" class="space">Result:</label>									
												<input type="text" id="demosolar" name="demosolar"  style="text-align:center;width:300px;font-size:45px;font-weight:bold;border:;background-color:#b6bdc6;" disabled>
									</div>
								</div>						
								</td>														
									<span class="hidden" id="email6-availability-status"></span>	
							</tr>
							</form>	
						</tbody>
					</table>	
				</form>	
			</div>
			
		</div>	
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>CHECKING of BUNDENBAN</h1></th>					
							</div>
						</thead>
						<tbody>
						<tr>
							<form method="post" action="">
							
							<td style="" rowspan="2" width="35%">
							
							<div class="container-fluid">
								<div class="col-sm-12">	
								<label style="color:black;font-size:20px;" class="space"><span style="color:red;">Nisetai</span> ( 2世帯電気工事 )  </label>
											<input type="text" name="nisetai" id="nisetai"  style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   readonly="readonly" /><br><br>
								<label style="color:black;font-size:20px;"><span style="color:red;">Solar Power</span> ( 太陽光発電 )</label>			
											<input type="text" name="spower" id="spower"  style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   readonly="readonly" /><br><br>
											<input type="text" name="solarpower" id="solarpower" style="font-size:30px;width:270px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   readonly="readonly" />
											<input type="text" name="b_picking" id="b_picking"   class="hide" style="font-size:30px;width:300px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   readonly="readonly" />		
							    </div>	
							</td>
							<td>
								<div class="row">
									<div class="col-sm-1">
										<label style="font-size:20px;color:black;margin-top:20px;"  class="space">Pattern:	</label>
										<label style="font-size:20px;color:black;margin-top:5px;">QTY:</label>
									</div>
									<div class="col-sm-3" style="margin-left:20px;">
									<div id="imageDiv"></div>
									<div id="imageDiva"></div>
										<input type="text" name="b1" id="b1"  style="font-size:30px;width:250px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   class="hide" readonly="readonly" />
										<input type="text" name="c1" id="c1"  style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   class="hide" readonly="readonly" />
									</div>	
									<div class="col-sm-3">
										<div id="imageDiv2"></div>
										<div id="imageDivb"></div>
										<input type="text" name="b2" id="b2"  style="font-size:30px;width:250px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"  class="hide" readonly="readonly" />
										<input type="text" name="c2" id="c2"  style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"  class="hide" readonly="readonly" />
									</div>	
									<div class="col-sm-3">	
										<div id="imageDiv3"></div>
										<div id="imageDivc"></div>
										<input type="text" name="b3" id="b3"  style="font-size:30px;width:250px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   class="hide" readonly="readonly" />
										<input type="text" name="c3" id="c3"  style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   class="hide" readonly="readonly" />		
									</div>	
								</div>
							</td>	
						</tr>
						<tr>
							<td>
								<div class="col-sm-8" align="center">	
											<!--<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="font-size:25px;color:black;font-weight:bold;float:left;" >-->
											<label style="font-size:45px;color:red;" class="space">Result:</label>									
											<input type="text" id="b_result" name="b_result"  style="text-align:center;width:300px;font-size:45px;font-weight:bold;border:;background-color:#b6bdc6;" disabled>
											
								</div>
								<div class="col-sm-4" >	
									<div style="font-size:20px;"id="tri"></div>
								</div>
							</div>						
							</td>													
									<span class="hidden" id="email6-availability-status"></span>	
							</tr>
							</form>	
						</tbody>
					</table>	
				</form>	
			</div>
			
		</div>	
              <!-- page end-->
		</section><! --/wrapper -->
      </section>
      <!--main content end-->
      <!--footer start-->
     <footer class="site-footer">
          <div class="text-center">
               Poweredby Syscom 
              <a href="#" class="go-top">
                  <i class="fa fa-angle-double-up fa-1x"></i>
              </a>
			
          </div>
		   
		   
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>-->
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>    
 <script>
		function myFunction() {
			document.getElementById("myForm").reset();
			document.getElementById('electric_company').style.backgroundColor = "";	
			document.getElementById("electric_contract").disabled = false;
			document.getElementById("electric_company").disabled = false;
			document.getElementById("powercon_1").disabled = false;
			document.getElementById("powercon_2").disabled = false;
			document.getElementById("code_number").disabled = false;
		}
	</script>

	<script>

   
	/////////////////////////////////////////////////////////////
	 function compute() {
              var res = document.getElementById("solar_breaker").value;
              var res2 = parseInt(res);
			  var res3 = document.getElementById("main_breaker").value;
			  var res4 = parseInt(res3);
			  var electric_company = $('#electric_company').val();
			  var contract_kind = $('#contract_kind').val();
			  var powercon_1 = $('#powercon_1').val();
			  var powercon_2 = $('#powercon_2').val();
			  var option_p = $('#option_p').val();
			  
			  var KVA = $('#KVA').val();

				var results = 'Pattern A No Need Shuudenban=(✘)';
				var results1 = 'Pattern B Need Shuudenban=(✔)';
				var resulta = 'If request to add Shuudenban, FOLLOW ..';
				var resultb = 'If request to delete Shuudenban, NOT FOLLOW..';
				var results2 = 'Pattern A Need Shuudenban=(✔)';
				var results6 = 'NO SOLAR';
				var results7 = 'NO NEED SHUUDENBAN';
				
				var option = 'OK(✔)';
				var option1 = 'NOT TALLY';
				
				
				
				if ( res == ''   ){
					//alert('NO SOLAR !! Please Check !!');
					document.getElementById("demo").value = results7;
					document.getElementById("demo2").value = option;
					document.getElementById("demo").style.color = "red";
					document.getElementById("demo2").style.color = "blue";
				
				}else if (contract_kind != 1 ){
				 document.getElementById("demo").value = results7;
				 document.getElementById("demo").style.color = "red";
				} else  if ((electric_company == 'KANSAI(関西電力)'  || electric_company == 'SHIKOKU(四国電力)' || electric_company == 'CHUGOKU(中国電力)' || electric_company == 'KYUUSHU(九州電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW') && contract_kind != 1 ){
				
					document.getElementById("demo").value = results7;
					document.getElementById("demo").style.color = "red";;
					
				} else if ((electric_company == 'KANSAI(関西電力)' || electric_company == 'SHIKOKU(四国電力)' || electric_company == 'CHUGOKU(中国電力)' || electric_company == 'KYUUSHU(九州電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW')&& contract_kind == 1)  {
					
					document.getElementById("demo").value = results;
					document.getElementById("demoA").value = resulta;
					document.getElementById("demo").style.color = "green";
				} else if ((electric_company == 'KANSAI(関西電力)' || electric_company == 'SHIKOKU(四国電力)' || electric_company == 'CHUGOKU(中国電力)' || electric_company == 'KYUUSHU(九州電力)'  ) 
					&& (powercon_2 == '8.0kW' || powercon_2 == '9.9kW' )){
				
					document.getElementById("demo").value = results1;
					document.getElementById("demoA").value = resultb;
					document.getElementById("demo").style.color = "red";
				//////////////////////////////////////////////
				} else if ((electric_company == 'HOKKAIDOU(北海道電力)' || electric_company == 'TOHOUKU(東北電力)' || electric_company == 'TOKYOU(東京電力)' || electric_company == 'HOKURIKU(北陸電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW')&& contract_kind != 1 ){
					
					document.getElementById("demo").value = results7;
				 document.getElementById("demo").style.color = "red";
				} else if ((electric_company == 'HOKKAIDOU(北海道電力)' || electric_company == 'TOHOUKU(東北電力)' || electric_company == 'TOKYOU(東京電力)' || electric_company == 'HOKURIKU(北陸電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW') && contract_kind == 1 ){
					
					document.getElementById("demo").value = results;
					document.getElementById("demoA").value = resulta;
					document.getElementById("demo").style.color = "green";
				} else if ((electric_company == 'HOKKAIDOU(北海道電力)' || electric_company == 'TOHOUKU(東北電力)' || electric_company == 'TOKYOU(東京電力)' || electric_company == 'HOKURIKU(北陸電力)' ) 
					&& (powercon_2 == '8.0kW' || powercon_2 == '9.9kW' )){
					
					document.getElementById("demo").value = results2;
					document.getElementById("demoA").value = resulta;
					document.getElementById("demo").style.color = "red";
				} else if (electric_company == 'CHUBU(中部電力)' && res2 > res4 && contract_kind != 1)   {
					
					document.getElementById("demo").value = results7;
				 document.getElementById("demo").style.color = "red";;
					
						//////////////////////////////////////////////
				} else if (electric_company == 'CHUBU(中部電力)' && res2 > res4 && contract_kind == 1 )   {
					
					document.getElementById("demo").value = results1 ;
					document.getElementById("demoA").value = resultb;
					document.getElementById("demo").style.color = "red";
				} else if(electric_company == 'CHUBU(中部電力)' && res4 == res2 && (powercon_1 == '8.0kW' || powercon_1 == '9.9kW') && powercon_2 != '8.0kW'){
					
					document.getElementById("demo").value = results1;
					document.getElementById("demoA").value = resultb;
					document.getElementById("demo").style.color = "red";
				} else if(electric_company == 'CHUBU(中部電力)' && res4 == res2 ){
					
					document.getElementById("demo").value = results;
					document.getElementById("demoA").value = resulta;
					document.getElementById("demo").style.color = "green";
				} else if (electric_company == 'CHUBU(中部電力)' && res2 < res4)  {
					
					document.getElementById("demo").value = results;
					document.getElementById("demoA").value = resulta;
					document.getElementById("demo").style.color = "green";
					///////////////For PDR//////////////
				} else if(KVA == '' && electric_company == '' && powercon_1 != '' && powercon_2 != '' ){
						
					document.getElementById("demo").value = results7;
					document.getElementById("demo").style.color = "red";;
					
				} else if(powercon_2 == '8.0kW' || powercon_2 == '9.9kW' ){
					
					document.getElementById("demo").value = results1;
					document.getElementById("demoA").value = resultb;
					document.getElementById("demo").style.color = "red";
				} else if(KVA == '' && electric_company == 'CHUBU(中部電力)' && powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW' ){
					
					document.getElementById("demo").value = results1;
					document.getElementById("demoA").value = resultb;
					document.getElementById("demo").style.color = "red";
				}
					
				//集電盤	
			} 
</script>
<script type="text/javascript">
       $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
           // title: 'Welcome to Denki Computation!',
            // (string | mandatory) the text inside the notification
            text: 'For any encountered problems,concerned and feedback. Just Click <a href="http://hrdapps33/system_feedback" target="_blank" style="color:#ffd777">FEEDBACK</a> here..',
            // (string | optional) the image to display on the left
            image: 'denkilogo/denki-red.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        }); 
	</script>

  </body>
</html>

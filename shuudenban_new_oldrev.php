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
	height:100%;
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
					//setTimeout(,500);
					compute();
			
				}else{
					compute();
					//document.getElementById("demo").value = '';
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
				setTimeout(checkemailAvailability2(),500); 
				document.getElementById("electric_contract").value = number2;
				setTimeout(check_powercon(),1000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}  
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
					setTimeout(check_contract(),500);
					setTimeout(kva_check(),500);
					setTimeout(check_OptionPicking(),500);
					setTimeout(check_PlanNumber(),500);
					
				} else if(number5 == ''){
					alert('NO DATA IN SPCAD');
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
				/* if(number4== '東北電力'){
					document.getElementById("electric_company").value = 'TOHOUKU(東北電力)';
					//$("#electric_company").css('background-color','green');
					
				}else if(number4== '中部電力'){
					document.getElementById("electric_company").value = 'CHUBU(中部電力)';
					//$("#electric_company").css('background-color','red');
					
				}else if(number4== '東京電力'){
					document.getElementById("electric_company").value = 'TOKYOU(東京電力)';
					//$("#electric_company").css('background-color','blue');
					
				}else if(number4== '北陸電力'){
					document.getElementById("electric_company").value = 'HOKURIKU(北陸電力)';
					//$("#electric_company").css('background-color','violet');
					
				}else if(number4 == '関西電力'){
					document.getElementById("electric_company").value = 'KANSAI(関西電力)';
					//$("#electric_company").css('background-color','yellow');
					
				}else if(number4== '中国電力'){
					document.getElementById("electric_company").value = 'CHUGOKU(中国電力)';
					//$("#electric_company").css('background-color','brown');
					
				}else if(number4== '四国電力'){
					document.getElementById("electric_company").value = 'SHIKOKU(四国電力)';
					//$("#electric_company").css('background-color','pink');
					
				}else if(number4== '九州電力'){
					document.getElementById("electric_company").value = 'KYUUSHU(九州電力)';
					//$("#electric_company").css('background-color','#66ffff');
					
				}else if(number4== '北海道電力'){
					document.getElementById("electric_company").value = 'HOKKAIDOU(北海道電力)';
					//$("#electric_company").css('background-color','#009999');					
				} */
				check_powercon();
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
					alert('NO NEED TO COMPUTE !! ITS 10kW ( below ) !!');
					
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
				setTimeout(check_OptionPicking2(),500);
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
				} else {
					var op1 = document.getElementById("demosolar").value = 'NOT TALLY';
					document.getElementById("demosolar").style.color = "maroon";
				}
			
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
                      <a class="active" href="bundenban_new.php">
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>SHUUDENBAN AND SOLAR SOCKET CHECKING</span>
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
          <section class="wrapper">
			<center><label class="head">SHUUDENBAN CHECKING</label></center>
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
							<tr>	
								
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM shudenban limit 16";
										$result= $db_connect->query($query);
									?>
							</tr>
							<tr>
							<form method="post" action="">
							
							<td style="">
							<p>* Press<span style="color:red;font-weight:bold"> ENTER </span>after you put the Customer Code *</p>
							<div class="row">
								<div class="col-sm-4">	
									
									<label style="font-size:20px;color:black">Customer Code:</label>
										<input type="text" name="code_number" id="code_number" onkeypress="kva_check1()" onKeyup="kva_check1()" onblur="kva_check1()" onmousemove="kva_check1()"   style="font-size:20px;width:150px;text-align:center;color:red;" maxlength="12"   />
									<br>	
									<label style="font-size:20px;color:black" class="space">Plan Number:     </label>		
										<input type="" name="plan_number" id="plan_number"   style="font-size:20px;width:150px;text-align:center;color:red"  readonly="readonly"  />
										<span class="hidden" id="email6-availability-status"></span><br>
										
										<span> <span class="blink_me" style="color:red;font-size:15px;font-weight:bold">*Check Plan number if Latest/Not Tally</span></span>
										
								</div>	
								<div class="col-sm-4" >
									
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
										</select><br>
										<span class="hidden" id="email3-availability-status"></span>
									<!--<label style="font-size:25px;color:black">Contract kind:</label>-->	
										<input type="hidden" name="contract_kind" id="contract_kind"  style="font-size:20px;width:300px;text-align:center;color:black"   />									
										<!--<input type="" name="option_p" id="option_p"  style="font-size:20px;width:300px;text-align:center;color:black;color:red" readonly="readonly"  />-->									
										<!--<input type="text" id="demo1"  style="width:350px;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>-->
										<span class="hidden" id="email4-availability-status"></span>	
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
								
								<div class="col-sm-4">	
								
								<!--<div id="content"></div>-->
								
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
											<label style="font-size:18px;color:red;font-weight:bold" class="space">	Solar Breaker</label><br>
											
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
							</div>
							<hr>
							<div class="container-fluid">
							<input class="bg-danger" type="button" onclick="window.location.href=window.location.href" value="Clear Form" style="font-size:25px;color:black;font-weight:bold;float:left;" >
							<label style="font-size:25px;color:black;" class="space">				Result:</label>									
								<input type="text" id="demo" name="demo"  style="text-align:center;width:530px;font-size:30px;font-weight:bold;border:;background-color:#b6bdc6;" disabled>								
							<center class="space">							<input type="text" id="demoA" name="demoA" style="width:580px;font-size:25px;font-weight:bold;border:none;background-color:#F0F8FF;color:blue" disabled></center>
							</div>
							<hr style="color:gray">
							<span  style="font-size:15px">*For <span style="color:red;font-weight:bold">Autocad USERS</span> checking <span class="blink_me" style="color:red;font-weight:bold">only</span> !!</span><br>
							<div class="col-sm-4">
							<label align="center" style="font-size:25px;color:black;" class="space">REMARKS:</label>
								<input align="center" type="text" id="demo2" name="demo2"    style="width:200px;font-size:30px;font-weight:bold;border:none;background-color:#b6bdc6;text-align:center" disabled >
							</div>
							<div class="col-sm-4">
							<label align="center" style="font-size:20px;color:black;" class="space">Option Picking:</label>
								<input type="" name="option_p" id="option_p"  style="font-size:30px;width:150px;text-align:center;color:red;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />		
										<span class="hidden" id="email5-availability-status"></span>
							</div>
							<!--<div class="col-sm-5">	
								<span style="font-size:15px;">*For Pattern A,OK to follow Request to <span style="color:red;font-weight:bold">ADD SHUUDENBAN</span>.</span>						
								<br><span style="font-size:15px;">*For Pattern B,if Request to Delete <span style="color:red;font-weight:bold">SHUUDENBAN not follow</span></span>
							</div>-->							
							</td>				
								
									<input class="hidden" type="text" name="Inverter55Qty" id="Inverter55Qty"  style="font-size:25px;width:200px;text-align:center"  />
									<input class="hidden" type="text" name="Inverter80Qty" id="Inverter80Qty" style="font-size:25px;width:200px;text-align:center"  />
									<input class="hidden" type="text" name="Inverter99Qty" id="Inverter99Qty"  style="font-size:25px;width:200px;text-align:center"  />
									<span class="hidden" id="email6-availability-status"></span>
								
							</tr>
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
							<tr>
							<form method="post" action="">
							
							<td style="">
							
							<div class="container-fluid">
								<!--<div class="col-sm-4">	
									<br>
									<br>
									<br>
									<p>* Press<span style="color:red;font-weight:bold"> ENTER </span>after you put the Customer Code *</p>
									<label style="font-size:20px;color:black">Customer Code:</label>
										<input type="text" name="code_number" id="code_number" onkeypress="kva_check1()" onKeyup="kva_check1()" onblur="kva_check1()" onmousemove="kva_check1()"   style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12"   />
									<br>	
									<label style="font-size:20px;color:black" class="space">Plan Number:     </label>		
										<input type="" name="plan_number" id="plan_number"   style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;"  readonly="readonly"  />
										<span class="hidden" id="email6-availability-status"></span><br>		
										<span> <span class="blink_me" style="color:red;font-size:15px;font-weight:bold">*Check Plan number if Latest/Not Tally</span></span>	
								</div>-->	
								
								
								<div class="col-sm-3">	
											<br>
											<br>
											<br>
											<!--<input class="hide" type="text" name="Inverter55Qty" id="Inverter55Qty"  style="font-size:25px;width:200px;text-align:center"  />
											<input class="hide" type="text" name="Inverter80Qty" id="Inverter80Qty" style="font-size:25px;width:200px;text-align:center"  />
											<input class="hide" type="text" name="Inverter99Qty" id="Inverter99Qty"  style="font-size:25px;width:200px;text-align:center"  />-->
											<label style="font-size:18px;color:black"><img src="http://hrdapps33/denkicomputation/denkilogo/pwrty.PNG">=</label>
											<input type="text" name="powerqty" id="powerqty" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;"   readonly="readonly" />
							    </div>	
							<div class="col-sm-4">		
							
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
								<div class="col-sm-4">	
											<!--<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="font-size:25px;color:black;font-weight:bold;float:left;" >-->
											<label style="font-size:45px;color:red;" class="space">Result:</label>									
											<input type="text" id="demosolar" name="demosolar"  style="text-align:center;width:300px;font-size:45px;font-weight:bold;border:;background-color:#b6bdc6;" disabled>
								</div>
							</div>
						
							
															
							<!--<center class="space">							<input type="text" id="demoA" name="demoA" style="width:580px;font-size:25px;font-weight:bold;border:none;background-color:#F0F8FF;color:blue" disabled></center>
							</div>
							<hr style="color:gray">
							<span  style="font-size:15px">*For <span style="color:red;font-weight:bold">Autocad USERS</span> checking <span class="blink_me" style="color:red;font-weight:bold">only</span> !!</span><br>
							<div class="col-sm-4">
							<label align="center" style="font-size:25px;color:black;" class="space">REMARKS:</label>
								<input align="center" type="text" id="demo2" name="demo2"    style="width:200px;font-size:30px;font-weight:bold;border:none;background-color:#b6bdc6;text-align:center" disabled >
							</div>
							<div class="col-sm-4">
							<label align="center" style="font-size:20px;color:black;" class="space">Option Picking:</label>
								<input type="" name="option_p" id="option_p"  style="font-size:30px;width:150px;text-align:center;color:red;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />		
										<span class="hidden" id="email5-availability-status"></span>
							</div>
							<div class="col-sm-5">	
								<span style="font-size:15px;">*For Pattern A,OK to follow Request to <span style="color:red;font-weight:bold">ADD SHUUDENBAN</span>.</span>						
								<br><span style="font-size:15px;">*For Pattern B,if Request to Delete <span style="color:red;font-weight:bold">SHUUDENBAN not follow</span></span>
							</div>-->							
							</td>				
								
									
									<span class="hidden" id="email6-availability-status"></span>
								
							</tr>
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
					alert('NO SOLAR !! Please Check !!');
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

  </body>
</html>

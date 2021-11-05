<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>IA Rankings</title>

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
						
				/* function checkemailAvailability() {
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
				}  */
				//////////////////checkemailAvailability2///////////////////////////////////////////////////////////////
	
				/* function checkemailAvailability2() {
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
				}  */
				//////////////////////checkemailAvailability3////////////////////////////////////////////////////////////
				
				/* function checkemailAvailability3() {
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
				}   */
				/////////////////////kva_check///////////////////
				/* function kva_check() {
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
				}   */
				//////////////////////kva_check1/////////////////////
					
	
				function kva_check1() {
					if(!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)){
					//alert('Please Input Control Number..!')
					return false
					}
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check1/count_item.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number3 = document.getElementById("count").value = document.getElementById("email-availability-status").innerHTML;
				var B = document.getElementById("count").value = number3;
				var C = document.getElementById("juntaika").value ;
				var D = document.getElementById("floor").value ;
				
					
				if(C == '準防火仕様' || C == '準耐火仕様' || D == '３Ｆ'){
					document.getElementById("rank").value = 'Rank 4';
				} else {
					if (B <= 204){
					document.getElementById("rank").value = 'Rank 1';
					} else if (B <= 250){
						document.getElementById("rank").value = 'Rank 2';
					} else if(B <= 300){
						document.getElementById("rank").value = 'Rank 3';
					} else if(B >= 301){
						document.getElementById("rank").value = 'Rank 4';
					} 
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				
				jQuery.ajax({
				url: "check/check_juntaika.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("juntaika").value = document.getElementById("email-availability-status").innerHTML;
				 
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				
				jQuery.ajax({
				url: "check/check_floor_juntaika.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("floor").value = document.getElementById("email-availability-status").innerHTML;
				 
				
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
			   span {
					display:block;  
					
				}
				.inputfield {
					display:inline-block;
				}
		</style>
  </head>

  <body>
 <form id="myForm"> 
<div class="container-fluid">
 <label style="font-size:20px;color:black;" class="space">Customer Code:   	Item Count:	    Floor:       		   Juntaika:			Rank:</label><br>
	<input type="text" name="code_number" id="code_number" onkeypress="setTimeout(kva_check1, 10)" onKeyup="setTimeout(kva_check1, 10)" onblur="setTimeout(kva_check1, 10)"   style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12"   />
	<input type="text" name="count" id="count"  style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12"   />
	<input type="text" name="floor" id="floor"  style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12"   />
	<input type="text" name="juntaika" id="juntaika"  style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12"   />
	<input type="text" name="rank" id="rank" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12"   /><br>
	<a href="test.php"><input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold"></a>
	<span class="hidden" id="email-availability-status"></span><br>	
</div>
</form> 
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
	setTimeout(10);	
	}
 
		function myFunction() {
			document.getElementById("myForm").reset();
			document.getElementById("imageDiv").innerHTML = '';
			document.getElementById("imageDiv2").innerHTML = '';
			
			/* document.getElementById('electric_company').style.backgroundColor = "";	
			document.getElementById("electric_contract").disabled = false;
			document.getElementById("electric_company").disabled = false;
			document.getElementById("powercon_1").disabled = false;
			document.getElementById("powercon_2").disabled = false;
			document.getElementById("code_number").disabled = false; */
		}
	</script>

	<script>
	/* $(document).on('keyup','#code_number',function(){
     $.ajax({
       type: 'post',
       url: 'add/interphone.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#pattern").text(data)
		document.getElementById("STDSOCKET1").value = document.getElementById("pattern").value;
	
	  
     }).fail(function(data){
       alert('Failed')
     })
   }) */
  
	</script>

  </body>
</html>

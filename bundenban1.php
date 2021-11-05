<?php include ('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="IE=8-Compatible" content="IE=8-Compatible; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Plan Completion Smart Series Workguide</title>

    <!-- Bootstrap core CSS -->
	
	<link href="select2.min.css" rel="stylesheet">
	<link href="http://hrdapps33/CountingSheet/css/shake.css" rel="stylesheet">
	<link rel="stylesheet" href="http://hrdapps33/bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="http://hrdapps33/beforekakou/img/denkiNEW.ico">
	<script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
	<script src="http://hrdapps33/CountingSheet/js/select2.full.js"></script>
    <script src="http://hrdapps33/bootstrap/js/bootstrap.min.js"></script>
	<script>

			function compute1() {
             
				var CH7 = parseFloat($('select[name=CH7]').val() || 0 );
				var CH3 = parseFloat($('input[name=CH3]').val() || 0 );
				var wdhB = parseFloat($('input[name=wdhB]').val() || 0 );
				var wdhD = document.getElementById("wdhD").value;
				var woh2 = parseFloat($('input[name=woh2]').val() || 0 );
				var rsh = parseFloat($('input[name=rsh]').val() || 0 );
				var result = parseFloat($('input[name=result]').val() || 0 );
				var c1 = 489  ;
				var c5 = 683  ;
				var c6 = 2597  ;
				var st = 2100  ;
				var halfs = 185  ;
			 	var result = 'GOOD';		
			 	var result1 = 'NOT GOOD';
				var result5 = 'HIT TO CEILING';
				
				if (wdhD == 'DOOR '){
					var woh2 = document.getElementById("woh2").value = 0;
					var sum1 = CH7 - wdhB + woh2 + 30  ;
				}	else if (wdhD == 'WINDOW ') {
					var sum1 = CH7 - ( wdhB + woh2 ) + 30 ;
				}; 
				 
				if(wdhD == 'DOOR '){
					 var woh2 = document.getElementById("woh2").value = 0;
						var sum4 = CH3 - wdhB + woh2 + 30  ;
				} else if (wdhD == 'WINDOW ') {
					var sum4 = CH3 - ( wdhB + woh2 ) + 30 ;
					
				};
				if (CH7 != ""){
					document.getElementById("CH3").disabled = true;
				} else if (CH3 != ""){
					document.getElementById("CH7").disabled = true;
				} else {
					document.getElementById("CH3").disabled = false;
					document.getElementById("CH7").disabled = false;
				}
			
				if(CH7 && wdhB != ""){
					//document.getElementById("CH3").disabled = true;
						 if (sum1 >= c1){
							 $('#sum1').val(sum1);
							document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";
							
						 }else if(sum1 <= c1 ){
							 $('#sum1').val(sum1);
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
							alert ('check if with 102mm wall');
						}
					} else  {
						document.getElementById("sum1").value = '';
						document.getElementById("demo1").value = '';
						//alert();
					}
				if(CH7 >= c6 && wdhB != ""){
					//alert(sum1);
						if (sum1 >= c5){
							document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";	
						}else if(sum1 <= c5 ){			
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
						} 
				}	
				if(CH3 && wdhB != ""){
					//document.getElementById("CH7").disabled = true;
						 if (sum4 >= c1){
							$('#sum1').val(sum4);
							document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";
						 }else if(sum4 <= c1 ){
							 $('#sum1').val(sum4);
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
						}
					} /* else {
						document.getElementById("CH7").disabled = false;	
					} */
				/// 185			
					var sum5 = rsh - st  ;
					var sum13 = rsh + halfs;
					//$('#sizes').val(sum13);
				if(CH7 && rsh  != ""){
					if(CH7 <  sum13 ){
						//alert(CH1);
					//$('#sizes').val(sum13);
						document.getElementById("demo4").value = result5;
					} else if (CH7 >  sum13 ) {
						document.getElementById("demo4").value = '';
					}
				} else if (rsh == ""){
					document.getElementById("demo4").value = '';
				}else if (CH7  == ""){
					document.getElementById("demo4").value = '';
				} 
					
				if(CH7 && sum1 && rsh != ""){
					var sum7 = sum1 + (sum5)  ;
					 if (sum7 >= c1){						
							$('#sum1').val(sum7);
							document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";
					 } else if(sum7 <= c1 ){
							 $('#sum1').val(sum7);
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
						} 
				} else if (CH7 && sum1 && rsh != "" && rsh <= st){
					var sum7 = sum1 - (sum5)  ;
					$('#sum1').val(sum7);
				}
				
				if(CH3 && sum1 && rsh != ""){
					var sum6 = sum4 + (sum5) ;
					$('#sum1').val(sum6);
					
						  if (sum6 >= c1){
							 document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";
						 }  else if(sum6 <= c1 ){
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
						}
				}else if (CH3 && sum1 && rsh != "" && rsh <= st){
					var sum7 = sum1 - (sum5)  ;
					$('#sum1').val(sum7);
				}	
				
			}  
		
//////////////////////////////////////////////////////////////////////////////////////////////////// 
			function compute2() {
		
				var CH1 = parseFloat($('select[name=CH1]').val() || 0 );
				var CH2 = parseFloat($('input[name=CH2]').val() || 0 );
				var wdh3 = parseFloat($('input[name=wdh3]').val() || 0 );
				var wdh5 = document.getElementById("wdh5").value;
				var woh1 = parseFloat($('input[name=woh1]').val() || 0 );
				var rsh2 = parseFloat($('input[name=rsh2]').val() || 0 );
				var result2 = parseFloat($('input[name=result2]').val() || 0 );
			  
				var c2 = 293.5  ;
				var c3 = 340.5  ;
				var c4 = 2627  ;
				var st2 = 2200  ;
				var half = 160  ;
			 	var result2 = 'GOOD';		
			 	var result3 = 'NOT GOOD';
				var result4 = 'HIT TO CEILING'; 
				
				if(wdh5 == 'DOOR '){
					var woh1 = document.getElementById("woh1").value = 0;
					var sum2 = CH1 - wdh3 + woh1 + 30 ;			
				} else if (wdh5 == 'WINDOW ') {
					var sum2 = CH1 - (wdh3 + woh1) + 30 ;
				}
				if (CH1 != ""){
					document.getElementById("CH2").disabled = true;
				} else if (CH2 != ""){
					document.getElementById("CH1").disabled = true;
				} else {
					document.getElementById("CH1").disabled = false;
					document.getElementById("CH2").disabled = false;
				}
			
				//////////////////////////////////////////////////////////	
				if(wdh5 == 'DOOR '){
					var woh1 = document.getElementById("woh1").value = 0;				
					var sum3 = CH2 - wdh3 + woh1 + 30   ;
				} else if (wdh5 == 'WINDOW '){
					var sum3 =CH2 - (wdh3 + woh1) + 30 ;
				};
				
			///////////////////////////////////////////////////////////////////	
				if(CH1 && wdh3 != ""){	
						if (sum2 >= c2){
							 $('#sum2').val(sum2);
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";	
						}else if(sum2 <= c2 ){
							 $('#sum2').val(sum2);
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
							alert ('check if with 102mm wall');
						}
					} else  {
						document.getElementById("sum2").value = '';
						document.getElementById("demo2").value = '';
						//alert();
					}
				if(CH1 >= c4 && wdh3 != "") {
					
						if (sum2 >= c3){
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";	
						}else if(sum2 <= c3 ){
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						} 
					} 
					//////////////////////////////////////////
				if (CH2 && wdh3 != ""){	
						
						if (sum3 >= c2 ){
							$('#sum2').val(sum3);
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";	
						} else if (sum3 <= c2 ){
							$('#sum2').val(sum3);
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
					} 
				if(CH2 >= c4 && wdh3 != "") {
					
						if (sum3 >= c3){
							$('#sum2').val(sum3);
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";	
						}else if(sum3 <= c3 ){
							$('#sum2').val(sum3);
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						} 
					} 
				//160
				var sum9 = rsh2 - st2;
				 
					//$('#size').val(sum12);
				if(CH1 && rsh2  != ""){
					var sum12 = rsh2 + half;
					if(CH1 <  sum12 ){
						//alert(CH1);
					//$('#size').val(sum12);
					document.getElementById("demo3").value = result4;
					} else if (CH1 >  sum12 ) {
						document.getElementById("demo3").value = '';
					}
				} else if (rsh2  == ""){
					document.getElementById("demo3").value = '';
				} else if (CH1  == ""){
					document.getElementById("demo3").value = '';
				} 
					//alert(sum9);				
				if(CH1 && sum2 && rsh2 != ""){	
					var sum10 = sum2 + (sum9)  ;
					//alert(sum10);
					$('#sum2').val(sum10);
						if(sum10 >= c2){
							//alert('try');
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";
						} else if (sum10 <= c2){
							//alert('try2');
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
						
				}  else if (CH1 && sum2 && rsh2 != "" && rsh2 <= st2){
					var sum10 = sum2 - (sum9)  ;
					$('#sum2').val(sum10);
				}
				
				if(CH1 && sum2 && rsh2 != "" && CH1 >= c4 ) {
					var sum10 = sum2 + (sum9)  ;
					//alert(sum10);
					$('#sum2').val(sum10);
						if(sum10 >= c3){
							//alert('try');
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";
						} else if (sum10 <= c3){
							//alert('try2');
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
				} else if (CH1 && sum2 && rsh2 != "" && rsh2 <= st2 && CH1 >= c4){
					var sum10 = sum2 - (sum9)  ;
					$('#sum2').val(sum10);
				};
				///////////////////////////////////////////////////
				if(CH2 && sum3 && rsh2 != ""){	
					var sum11 = sum3 + (sum9)  ;
					//alert(sum10);
					$('#sum2').val(sum11);
						if(sum11 >= c2){
							//alert('try');
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";
						} else if (sum11 <= c2){
							//alert('try2');
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
						
				}  else if (CH2 && sum3 && rsh2 != "" && rsh2 <= st2){
					var sum11 = sum3 - (sum9)  ;
					$('#sum2').val(sum11);
				}
				
				if(CH2 && sum3 && rsh2 != "" && CH2 >= c4 ) {
					var sum11 = sum3 + (sum9)  ;
					//alert(sum10);
					$('#sum2').val(sum11);
						if(sum11 >= c3){
							//alert('try');
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";
						} else if (sum11 <= c3){
							//alert('try2');
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
				} else if (CH2 && sum3 && rsh2 != "" && rsh2 <= st2 && CH2 >= c4){
					var sum11 = sum3 - (sum9)  ;
					$('#sum2').val(sum11);
				}	
			} 
			
          //////////////////////////////////////////////////  ////////////////////////////////////////////////// 
		 
		/*  $(document).ready(function() {
			 function compute3() {
             
				
			  var CH2 = parseFloat($('select[name=CH2]').val() || 0 );
			  var wdh2 = parseFloat($('input[name=wdh2]').val() || 0 );
			  //var woh2 = parseFloat($('input[name=woh2]').val() || 0 );
			  var result5 = parseFloat($('input[name=result5]').val() || 0 );
				var c3 = 340.5  ;
			 	var result5 = 'GOOD';		
			 	var result6 = 'NOT GOOD';		
				var sum3 = CH2 - wdh2  ;
              
				$('#sum3').val(sum3);
				
					if(CH2 && wdh2 != ""){
						 if (sum3 >= c3){
							document.getElementById("demo3").value = result5;
							document.getElementById("demo3").style.color = "green";
						 }else if(sum3 <= c3 ){
							document.getElementById("demo3").value = result6;
							document.getElementById("demo3").style.color = "#ff0000";
						}
					}
				}          
            $('#CH2, #wdh2,#result5,#result6').change(compute3);
    		
    	 }); */
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
	<style>
		.space{
				white-space:pre;				
			}
			h1 {
					background: #68dff0;					
					font: bold normal 215% 'arial black', Times, serif;
					letter-spacing: 0.2em;
					margin: 0;
					padding: 10px 10px 10px 60px;
					text-align:center;
					
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
				width: 400px; text-align-last:center;
				}		
  </style>
  </head>
  <body>
		<section id="main-content">			
	<section class="wrapper"><br>
		<center><label style="font-size:35px;font-family: arial black">BUNDENBAN KABE FUKASU IN IRISUMI DOOR/WINDOW COMPUTATION</label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			<!--<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>-->
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Bundenban Kabe Fukasu</a></li>	
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">JB-DA Kabe Fukasu</a></li>
					
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			-->
		</ul>
			
		<div class="tab-content">
			<div id="tab2" class="tab-pane fade">
				<form id="myForm2">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>JB-DA Kabe Fukasu Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:18px;" class="space"><span style="color:red;font-size:20px;">*CH = 2400 : 489*<br>*CH = 2600 : 683*</span>      	Formula:   (Ceiling Height <span style="color:red">-</span>  Window/Door/Opening Height) <span style="color:red">+/-</span> (Requested Height <span style="color:red">-</span> Standard Height)<span style="color:red"> =  Space/Allowance </span> </p>
								</td>
							</tr>
							<?php
							 function room() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT serial FROM computation");
								$flag = $stmt->execute();
								if( !$flag ) {
							  $info = $stmt->errorInfo();
								  exit( $info[2] );
								}
								$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
							  }catch( PDOException $e ){
								echo $e->getMessage();
							}
							  $pdo = null;
							  return $array;
							}
							/////////////////////////////////////////////////////////////////////////////////
							$option = ''; 
							foreach( room() as $value ) {
							  $option .= '<option value="'.$value["serial"].'">'.$value["serial"].'</option>';
							}
							?>
							<tr>
								<td style="width:250px;text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black;color:red;margin-top:-32px">Requested Height<br> Other Than Standard Height</label><br>
										<input type="" name="rsh" id="rsh" value="" style="font-size:30px;height:40px;width:150px;color:red;text-align:center" onkeyup="setTimeout(compute1, 100)" onkeypress="setTimeout(compute1, 100)"   /><br>
										<input type="text" name="sum5" id="sum5" class="sum5 hide" value="" style="height:40px;font-size:25px;width:150px;color:blue;text-align:center"   />
										<input type="text" name="sizes" id="sizes" class="sizes hide" value="" style="height:40px;font-size:25px;width:150px;color:blue;text-align:center"   />
										 <label style="font-size:18px;color:black;color:red">(standard H=2100)</label>
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black"class="space">Ceiling Height:</label><br><br>
										<select  style="height:40px;font-size:25px;text-align:center;width:150px;color:blue" id="CH7"  name="CH7" class="CH7"required="required"  onchange="setTimeout(compute1, 10)"  >
											<option value=""></option>
											<option value="2400">2400</option>
											<option value="2200">2200</option>
											<option value="2300">2300</option>
											<option value="2597">2597</option>
										</select><span style="color:red;font-size:20px" class="space"> + 30</span><!--<br><span style="color:red;font-size:15px" class="space">OR</span><br>
									<label style="font-size:18px;color:black" class="space">Req. Ceiling Height:</label>	<br>-->
										<input type="text" name="CH3" id="CH3" class="CH3 hide" value="" style="height:40px;font-size:25px;width:150px;color:blue;text-align:center" onkeyup="setTimeout(compute1, 100)" onkeypress="setTimeout(compute1, 100)"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="width:900px;text-align:center;vertical-align:middle;background-color:">			
									<label style="font-size:18px;color:black" class="space">	 Window/Door Serial	</label>
									<label style="font-size:18px;color:black" class="space">			Elevated Height</label><br>	
										<select class="select2_single"  style="font-size:25px;text-align:center;height:40px;width:300px;color:blue;margin:auto;" id="wdh"  name="wdh" required="required" onchange="setTimeout(compute1, 100)"  onkeypress="setTimeout(compute1, 100)" />
											<option value=""></option>
											<option><?php echo $option; ?></option>
										</select><span style="color:red;font-size:35px" class="space"> + </span>
										<textarea id="wdhA" name="wdhA" class="wdhA hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" name="wdhB" id="wdhB" class="wdhB hide" value="" style="font-size:20px;width:150px;color;text-align:center"  />
										<textarea id="wdhC" name="wdhC" class="wdhC hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" name="wdhD" id="wdhD" class="wdhD hide" value="" style="font-size:20px;width:150px;color;text-align:center"  />
										<input type="number" name="woh2" id="woh2" value="" style="font-size:25px;height:40px;width:150px;color;text-align:center;color:blue" onkeyup="setTimeout(compute1, 100)" onkeypress="setTimeout(compute1, 100)"  /><br><br>
										<!--<input type="number" name="wdh" id="wdh" value="" style="font-size:20px;width:150px;color;text-align:center"    />-->
								</td><!--<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Opening Height:</label>
										<input type="number" name="woh" id="woh" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td>--><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="padding:auto;width:200px;text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Space/Allowance:</label><br>
										<input type="" name="sum1" id="sum1" value="" style="font-size:30px;height:100px;width:150px;color:red;text-align:center" readonly  /><br>										
										<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" readonly>
										<input type="text" id="demo4" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" readonly>
										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<center><input class="bg-danger" type="button" onclick="myFunction1(),compute1()" value="Clear Form" style="font-size:18px;color:black;font-weight:bold"></center>
								</td>	
							</tr>
						</tbody>												
					</table>					
				</form>
			</div>
			<!------------------------------------------------------------------------------------------->
			<div id="tab3" class="tab-pane fade in active">
				<form id="myForm3">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>Bundenban Kabe Fukasu in Irisumi Door/Window</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:18px;" class="space"><span style="color:red;font-size:20px;">*CH = 2400 : 293.5*<br>*CH = 2600 : 340.5*</span>      	Formula:   (Ceiling Height <span style="color:red">-</span>  Window/Door/Opening Height) <span style="color:red">+/-</span> (Requested Height <span style="color:red">-</span> Standard Height)<span style="color:red"> =  Space/Allowance </span> </p>
								</td>
							</tr>
							<tr>
								<td style="width:250px;text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black;color:red;margin-top:-32px">Requested Height Other Than Standard Height</label><br>
										<input type="" name="rsh2" id="rsh2" value="" style="font-size:30px;height:40px;width:150px;color:red;text-align:center"  onkeypress="setTimeout(compute2, 100)"   /><br>
										<input type="text" name="sum8" id="sum8" class="sum8 hide" value="" style="height:40px;font-size:25px;width:150px;color:blue;text-align:center"   />
										<input type="text" name="size" id="size" class="size hide" value="" style="height:40px;font-size:25px;width:150px;color:blue;text-align:center"   />
										<label style="font-size:18px;color:black;color:red">(standard H=2200)</label>
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black"class="space">Ceiling Height:</label><br><br>
										<select style="font-size:25px;text-align:center;height:40px;width:150px;color:blue" id="CH1"  name="CH1" required="required" onchange="setTimeout(compute2, 10)"  > 
											<option value=""></option>
											<option value="2400">2400</option>
											<option value="2200">2200</option>
											<option value="2300">2300</option>
											<option value="2597">2597</option>
										</select><span style="color:red;font-size:20px" class="space"> + 30</span><!--<br><span style="color:red;font-size:15px" class="space">OR</span><br>
									<label style="font-size:18px;color:black" class="space">Req. Ceiling Height:</label>	<br>-->
										<input type="number" name="CH2" id="CH2" class="CH2 hide" value="" style="height:40px;font-size:25px;width:150px;color:blue;text-align:center" onkeyup="setTimeout(compute2, 100)" onkeypress="setTimeout(compute2, 100)"  />		
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
									<?php	
										/* include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 157";
										$result= $db_connect->query($query); */
									?>
								<?php
							 function room1() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT serial FROM computation");
								$flag = $stmt->execute();
								if( !$flag ) {
							  $info = $stmt->errorInfo();
								  exit( $info[2] );
								}
								$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
							  }catch( PDOException $e ){
								echo $e->getMessage();
							}
							  $pdo = null;
							  return $array;
							}
							/////////////////////////////////////////////////////////////////////////////////
							$option1 = ''; 
							foreach( room1() as $value ) {
							  $option1 .= '<option value="'.$value["serial"].'">'.$value["serial"].'</option>';
							}
							?>		
								</td><td style="width:900px;text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black" class="space">	Window/Door Serial</label>
									<label style="font-size:18px;color:black" class="space">		    Elevated Height</label><br>										
										<select  class="select2_single" style="font-size:25px;text-align:center;height:40px;width:300px;color:blue" id="wdh1"  name="wdh1" required="required" onchange="setTimeout(compute2, 100)"  onkeypress="setTimeout(compute2, 100)" />
											<option value=""></option>
											<option><?php echo $option1; ?></option>
										</select><span style="color:red;font-size:35px" class="space"> + </span>
										<textarea id="wdh2" name="wdh2" class="wdh2 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" name="wdh3" id="wdh3" class="wdh3 hide" value="" style="font-size:20px;width:150px;color;text-align:center"  />
										<textarea id="wdh4" name="wdh4" class="wd4 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" name="wdh5" id="wdh5" class="wdh5 hide" value="" style="font-size:20px;width:150px;color;text-align:center"  />

										<input type="number" name="woh1" id="woh1" value="" style="font-size:25px;height:40px;width:150px;color;text-align:center;color:blue" onkeyup="setTimeout(compute2, 100)" onkeypress="setTimeout(compute2, 100)"  /><br><br>
										
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="width:300px;text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Space/Allowance:</label><br>
										<input type="" name="sum2" id="sum2" value="" style="font-size:30px;height:100px;width:150px;color:red;text-align:center" readonly  />
										<input type="text" id="demo2" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" readonly>	
										<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" readonly>	
								</td>
							</tr>
							<tr>
								<center><td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">								
									<input class="bg-danger" type="button" onclick="myFunction2(),compute2()" value="Clear Form" style="font-size:18px;color:black;font-weight:bold">
								</td></center>	
							</tr>
						</tbody>												
					</table>					
				</form>
				<!--<form id="myForm4">
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>260+ Bundenban Kabe Fukasu Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;font-size:20px;">*260+(Kabe Fukasu Size: 340.5)*</span>      	Formula:   Ceiling Height   -   Window/Door/Opening Height  </p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Ceiling Height:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="CH2"  name="CH2" required="required" >
											<option value=""></option>
											<option value="2430">2430</option>
											<option value="2627">2627</option>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window/Door/Opening Height:</label>
										<input type="number" name="wdh2" id="wdh2" value="" style="font-size:20px;width:150px;color;text-align:center"    />
								</td><!--<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Opening Height:</label>
										<input type="number" name="woh2" id="woh2" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Total:</label>
										<input type="" name="sum3" id="sum3" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Result:</label>
									<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>	
							</tr>
						</tbody>												
					</table>
				</form>	-->			
			</div>
		</div>								
	</section>								
</section>								
</section>
<script>
$(function(){
   $(document).on('change','#wdh1',function(){
     $.ajax({
       type: 'post',
       url: 'add/window_height.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#wdh2").text(data)
		document.getElementById("wdh3").value = document.getElementById("wdh2").value;
	
     }).fail(function(data){
       alert('Failed')
     })
   })
 });
 $(function(){
   $(document).on('change','#wdh1',function(){
     $.ajax({
       type: 'post',
       url: 'add/item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#wdh4").text(data)
		document.getElementById("wdh5").value = document.getElementById("wdh4").value;
	
     }).fail(function(data){
       alert('Failed')
     })
   })
 });
  ///////////////////////////////
 $(function(){
   $(document).on('change','#wdh',function(){
     $.ajax({
       type: 'post',
       url: 'add/window_height.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#wdhA").text(data)
		document.getElementById("wdhB").value = document.getElementById("wdhA").value;
	
     }).fail(function(data){
       alert('Failed')
     })
   })
 });
 $(function(){
   $(document).on('change','#wdh',function(){
     $.ajax({
       type: 'post',
       url: 'add/item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#wdhC").text(data)
		document.getElementById("wdhD").value = document.getElementById("wdhC").value;
	
     }).fail(function(data){
       alert('Failed')
     })
   })
 });

/* 	$(document).ready(function(){
 $("#tc").keyup(function() {
     $.ajax({
       type: 'post',
       url: 'comment2.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#vent").text(data)
     }).fail(function(data){
       alert('Failed')
     });
   });
 }); 
 	$(document).ready(function(){
 $("#tc").change(function() {
     $.ajax({
       type: 'post',
       url: 'comment2.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#vent").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   });
 }) */
</script>	
<script>
	$(document).ready(function () {
		$(".select2_single").select2({
			placeholder: "Please select..",
			allowClear: true
		});
	});
	/////////////////////////////	
function myFunction1() {
    document.getElementById("myForm2").reset();   
}
function myFunction2() {
    document.getElementById("myForm3").reset();   
}
function myFunction3() {
    document.getElementById("myForm4").reset();   
}
</script>
	</body>
</html>

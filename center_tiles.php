<?php include ('header.php'); ?>
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
    	<script>
			//✔
						
				function checkemailAvailability() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height.php",
				data:'exterior_denki='+$("#exterior_denki").val()+
				'&standard='+$("#standard").val()+
				'&minimum_height='+$("#minimum_height").val()+
				'&low_nokiten='+$("#low_nokiten").val()+
				'&high_nokiten='+$("#high_nokiten").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("std_height").value = document.getElementById("email-availability-status").innerHTML;
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}		////////////////////minimum/////////////////
				function checkemailAvailabilityA() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum.php",
				data:'exterior_denki='+$("#exterior_denki").val()+
				'&standard='+$("#standard").val()+
				'&minimum_height='+$("#minimum_height").val(),	
				type: "POST",
				success:function(data){
				$("#emailA-availability-status").html(data);
				var number1 = document.getElementById("minimum_height").value = document.getElementById("emailA-availability-status").innerHTML;
				var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;		
				var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles >= minimum_height ){
					document.getElementById("ans").value = tru ;
					document.getElementById("ans").style.color = "green";
				} else if (center_tiles < minimum_height){
					document.getElementById("ans").value = fals ;
					document.getElementById("ans").style.color = "red";
				}
		
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
								////////////////////low/////////////////
				 function checkemailAvailabilityB() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_low.php",
				data:'exterior_denki='+$("#exterior_denki").val()+
				'&standard='+$("#standard").val()+
				'&low_nokiten='+$("#low_nokiten").val(),
				type: "POST",
				success:function(data){
				$("#emailB-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten").value = document.getElementById("emailB-availability-status").innerHTML;	
				var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;		
				var low_nokiten = parseFloat($('input[name=low_nokiten]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles <= low_nokiten ){
					document.getElementById("ans2").value = tru ;
					document.getElementById("ans2").style.color = "green";
				} else if (center_tiles >=low_nokiten){
					document.getElementById("ans2").value = fals ;
					document.getElementById("ans2").style.color = "red";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}	
				////////////////////high/////////////////
				 function checkemailAvailabilityC() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high.php",
				data:'exterior_denki='+$("#exterior_denki").val()+
				'&standard='+$("#standard").val()+
				'&high_nokiten='+$("#high_nokiten").val(),
				type: "POST",
				success:function(data){
				$("#emailC-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten").value = document.getElementById("emailC-availability-status").innerHTML;	
				var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;		
				var high_nokiten = parseFloat($('input[name=high_nokiten]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles <= high_nokiten ){
					document.getElementById("ans3").value = tru ;
					document.getElementById("ans3").style.color = "green";
				} else if (center_tiles >= high_nokiten){
					document.getElementById("ans3").value = fals ;
					document.getElementById("ans3").style.color = "red";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				} 		
				/////////////////////////////////////////////////////////////////////////
				function checkemailAvailability1() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height2.php",
				data:'exterior_denki='+$("#exterior_denki1").val()+
				'&standard='+$("#standard1").val(),
				type: "POST",
				success:function(data){
				$("#email1-availability-status").html(data);
				var number1 = document.getElementById("std_height1").value = document.getElementById("email1-availability-status").innerHTML;
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				/////////////////////////////
				function checkemailAvailability1A() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum1.php",
				data:'exterior_denki='+$("#exterior_denki1").val()+
				'&standard='+$("#standard1").val()+
				'&minimum_height='+$("#minimum_height1").val(),	
				type: "POST",
				success:function(data){
				$("#email1A-availability-status").html(data);
				var number1 = document.getElementById("minimum_height1").value = document.getElementById("email1A-availability-status").innerHTML;
				var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0 ;		
				var minimum_height1 = parseFloat($('input[name=minimum_height1]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles1 >= minimum_height1 ){
					document.getElementById("ans4").value = tru ;
					document.getElementById("ans4").style.color = "green";
				} else if (center_tiles1 < minimum_height1){
					document.getElementById("ans4").value = fals ;
					document.getElementById("ans4").style.color = "red";
				}
		
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
								////////////////////low/////////////////
				 function checkemailAvailability1B() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_low1.php",
				data:'exterior_denki='+$("#exterior_denki1").val()+
				'&standard='+$("#standard1").val()+
				'&low_nokiten='+$("#low_nokiten1").val(),
				
				type: "POST",
				success:function(data){
				$("#email1B-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten1").value = document.getElementById("email1B-availability-status").innerHTML;	
				var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0 ;		
				var low_nokiten1 = parseFloat($('input[name=low_nokiten1]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles1 <= low_nokiten1 ){
					document.getElementById("ans5").value = tru ;
					document.getElementById("ans5").style.color = "green";
				} else if (center_tiles1 >=low_nokiten1){
					document.getElementById("ans5").value = fals ;
					document.getElementById("ans5").style.color = "red";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}	
				////////////////////high/////////////////
				 function checkemailAvailability1C() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high1.php",
				data:'exterior_denki='+$("#exterior_denki1").val()+
				'&standard='+$("#standard1").val()+
				'&high_nokiten='+$("#high_nokiten1").val(),
				type: "POST",
				success:function(data){
				$("#email1C-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten1").value = document.getElementById("email1C-availability-status").innerHTML;	
				var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0 ;		
				var high_nokiten1 = parseFloat($('input[name=high_nokiten1]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles1 <= high_nokiten1 ){
					document.getElementById("ans6").value = tru ;
					document.getElementById("ans6").style.color = "green";
				} else if (center_tiles1 >= high_nokiten1){
					document.getElementById("ans6").value = fals ;
					document.getElementById("ans6").style.color = "red";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				} 	
				////////////////////////////
				function checkemailAvailability2() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height3.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val(),
				type: "POST",
				success:function(data){
				$("#email2-availability-status").html(data);
				var number1 = document.getElementById("std_height2").value = document.getElementById("email2-availability-status").innerHTML;
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				/////////////////////////////
				function checkemailAvailability2A() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum2.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val()+
				'&minimum_height='+$("#minimum_height2").val(),	
				type: "POST",
				success:function(data){
				$("#email2A-availability-status").html(data);
				var number1 = document.getElementById("minimum_height2").value = document.getElementById("email2A-availability-status").innerHTML;
				var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0 ;		
				var minimum_height2 = parseFloat($('input[name=minimum_height2]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles2 >= minimum_height2 ){
					document.getElementById("ans7").value = tru ;
					document.getElementById("ans7").style.color = "green";
				} else if (center_tiles2 < minimum_height2){
					document.getElementById("ans7").value = fals ;
					document.getElementById("ans7").style.color = "red";
				}
		
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
								////////////////////low/////////////////
				 function checkemailAvailability2B() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_low2.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val()+
				'&low_nokiten='+$("#low_nokiten2").val(),
				
				type: "POST",
				success:function(data){
				$("#email2B-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten2").value = document.getElementById("email2B-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0 ;		
				var low_nokiten2 = parseFloat($('input[name=low_nokiten2]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles2 <= low_nokiten2 ){
					document.getElementById("ans8").value = tru ;
					document.getElementById("ans8").style.color = "green";
				} else if (center_tiles2 >=low_nokiten2){
					document.getElementById("ans8").value = fals ;
					document.getElementById("ans8").style.color = "red";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}	
				////////////////////high/////////////////
				 function checkemailAvailability2C() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high1.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val()+
				'&high_nokiten='+$("#high_nokiten2").val(),
				type: "POST",
				success:function(data){
				$("#email2C-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten2").value = document.getElementById("email2C-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0 ;		
				var high_nokiten2 = parseFloat($('input[name=high_nokiten2]').val()) || 0 ;		
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				if (center_tiles2 <= high_nokiten2 ){
					document.getElementById("ans9").value = tru ;
					document.getElementById("ans9").style.color = "green";
				} else if (center_tiles2 >= high_nokiten2 ){
					document.getElementById("ans9").value = fals ;
					document.getElementById("ans9").style.color = "red";
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				}
				////////////////////////////
		
    	/* function compare() {	
       
		var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;		
        var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
		
		var tru = '✔';				
		var fals = '✘'; 
		
         
		if (center_tiles >= minimum_height ){
			document.getElementById("ans").value = tru ;
		} else if (center_tiles < minimum_height){
			document.getElementById("ans").value = fals ;
		}
		
        } */
          
    		
		//////////////////////////////////////////////////////////////////////////////////////////
	$(document).ready(function() {
    	function compute() {
      
			var std_height = parseFloat($('input[name=std_height]').val()) || 0 ;
			var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;		
						setTimeout(checkemailAvailabilityA(),500);
						setTimeout(checkemailAvailabilityB(),500);
						setTimeout(checkemailAvailabilityC(),500); 	
			var center_tiles = (std_height - R_height) / 49 ; 
			var center_tiles1 = (R_height - std_height) / 49 ; 
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;	
			var Result5 = std_height + Result3;	
		
			$('#center_tiles').val(Result4);
			$('#center_tiles').val(Result5);
	
				if (R_height > std_height){
					 $('#center_tiles').val(Result5);
					//alert('try1');
				} else if(std_height > R_height ){
					 $('#center_tiles').val(Result4);
					//alert('try2');
				}
        }
          
    		 $('#std_height,#R_height').change(compute);
    	});
		//////////////////////////////////////////////
	$(document).ready(function() {
    	function compute2() {
      
			var std_height1 = parseFloat($('input[name=std_height1]').val()) || 0 ;
			var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0 ;	
						setTimeout(checkemailAvailability1A(),500);
						setTimeout(checkemailAvailability1B(),500);
						setTimeout(checkemailAvailability1C(),500);
			var center_tiles1 = (std_height1 - R_height1) / 49 ; 
			var center_tiles1 = (R_height1 - std_height1) / 49 ; 
			var Result = Math.ceil(center_tiles1);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height1 - Result2;	
			var Result5 = std_height1 + Result3;	
		
            $('#center_tiles1').val(Result4);
            $('#center_tiles1').val(Result5);
         
		
				if (R_height1 > std_height1){
					 $('#center_tiles1').val(Result5);
				} else if(std_height1 < R_height1 ){
					 $('#center_tiles1').val(Result4);
				} 	
	
            }
          
    		 $('#std_height1,#R_height1').change(compute2);
    	});
		
		//////////////////////////////////////////////
	$(document).ready(function() {
    	function compute3() {
      
			var std_height2 = parseFloat($('input[name=std_height2]').val()) || 0 ;
			var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0 ;	
						setTimeout(checkemailAvailability2A(),500);
						setTimeout(checkemailAvailability2B(),500);
						setTimeout(checkemailAvailability2C(),500);
			
			var center_tiles2 = (std_height2 - R_height2) / 49 ; 
			var center_tiles2 = (R_height2 - std_height2) / 49 ; 
			var Result = Math.ceil(center_tiles2);
			var Result1 = Math.floor(center_tiles2);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height2 - Result2;	
			var Result5 = std_height2 + Result3;	
		 
		
            $('#center_tiles2').val(Result4);
            $('#center_tiles2').val(Result5);
         
		
				if (R_height2 > std_height2){
					 $('#center_tiles2').val(Result5);
				} else if(std_height2 < R_height2 ){
					 $('#center_tiles2').val(Result4);
				} 
	 
			
            }
          
    		 $('#std_height2,#R_height2').change(compute3);
    	});
		
				 		
    	</script>
		<script src="controller/select.js" type="text/javascript"></script>
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
		</style>
		
	<script src="controller/select.js" type="text/javascript"></script>
	
	<section id="main-content">			
        <section class="wrapper"><br>
			<center><label style="font-size:35px;font-family: arial black">CENTER TILES COMPUTATION</label></center>
			<ul class="nav nav-tabs" style="font-size:20px">
				<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">EXTERIOR ITEMS CENTERING OF TILE</a></li>
							
			</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>240 + (140 土台)</h1></th>					
							</div>
						</thead>
						<tbody>
							<tr>	
								
									<?php
							 function exterior_denki() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering1");
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
							foreach( exterior_denki() as $value ) {
							  $option .= '<option value="'.$value["exterior_denki"].'">'.$value["exterior_denki"].'</option>';
							}
							?>
							</tr>
						<form id="myForm">		
							<tr>
							
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Exterior Denki Items</label>&nbsp;
										<select  style="font-size:25px;text-align:center;color:black" id="exterior_denki"  name="exterior_denki"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
								</td>
							
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering1 WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>
						
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Standard</label>&nbsp;
										<select  style="font-size:25px;text-align:center" onchange="checkemailAvailability()" id="standard"  name="standard"  required="required">
											 <option disabled selected>Choose Type</option>
											
											<option value="gl">gl</option>
											<option value="doma">doma</option>
											<option value="wooddeck">wooddeck</option>
											<option value="balcony_2f">balcony(2f)</option>
											<option value="EWH_2f">EWH(2f)</option>
											<option value="EWL_2f">EWL(2f)</option>
											<option value="balcony_3f">balcony(3f)</option>
											<option value="EWH_3f">EWH(3f)</option>
											<option value="EWL_3f">EWL(3f)</option> 
											
										</select> 
																	
								</td>
							
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<label style="font-size:25px;color:black;" class="space">STD.Height</label>									
										<input type="text" id="std_height" name="std_height" style="font-size:25px;color:blue;text-align:center" readonly>					
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 																		
									<label style="font-size:30px;color:black;" class="space">R.Height</label>								
										<input type="text" id="R_height" name="R_height"  style="font-size:25px;color:blue;text-align:center"  >				
										<span class="hidden" id="email-availability-status"></span>
								</td>
							</tr>	
							<tr >
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>										  					 											
									<label style="font-size:25px;color:black;" class="space">Center Tiles =  </label>									
										<input type="text" id="center_tiles" name="center_tiles" align="center" style="font-size:25px;color:red;text-align:center" readonly>
										<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold"><br><br>
										<b style="font-size:20px">Minimum height</b><input type="text" id="minimum_height" name="minimum_height"  align="center" style="font-size:20px;color:red;text-align:center"  readonly>
													  <input type="text" id="ans" name="ans" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="emailA-availability-status"></span>
										<b style="font-size:20px">Low Nokiten</b><input type="text" id="low_nokiten" name="low_nokiten" align="center" style="font-size:20px;color:red;text-align:center" readonly>
													  <input type="text" id="ans2" name="ans2" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="emailB-availability-status"></span>
										<b style="font-size:20px">High Nokiten</b><input type="text" id="high_nokiten" name="high_nokiten" align="center" style="font-size:20px;color:red;text-align:center" readonly>
													  <input type="text" id="ans3" name="ans3" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="emailC-availability-status"></span>
										
								</td>
							</tr>
								
						</form>	
						<br>	
						</tbody>
					</table>
						
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>240 + (89 土台)</h1></th>						
							</div>
						</thead>
						<tbody>
							<tr>	
								
									<?php
							 function exterior_denki1() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering");
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
							foreach( exterior_denki1() as $value ) {
							  $option .= '<option value="'.$value["exterior_denki"].'">'.$value["exterior_denki"].'</option>';
							}
							?>
							</tr>
						<form id="myForm2">		
							<tr>
							
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Exterior Denki Items</label>&nbsp;
										<select  style="font-size:25px;text-align:center;color:black" id="exterior_denki1"  name="exterior_denki1"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
								</td>
							
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>
						
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Standard</label>&nbsp;
										<select  style="font-size:25px;text-align:center" onchange="checkemailAvailability1()" id="standard1"  name="standard1"  required="required">
											 <option disabled selected>Choose Type</option>
											
											<option value="gl">gl</option>
											<option value="doma">doma</option>
											<option value="wooddeck">wooddeck</option>
											<option value="balcony_2f">balcony(2f)</option>
											<option value="EWH_2f">EWH(2f)</option>
											<option value="EWL_2f">EWL(2f)</option>
											<option value="balcony_3f">balcony(3f)</option>
											<option value="EWH_3f">EWH(3f)</option>
											<option value="EWL_3f">EWL(3f)</option> 
											
										</select> 
																	
								</td>
							
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<label style="font-size:25px;color:black;" class="space">STD.Height</label>									
										<input type="text" id="std_height1" name="std_height1" style="font-size:25px;color:blue;text-align:center" readonly>					
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 																		
									<label style="font-size:30px;color:black;" class="space">R.Height</label>									
										<input type="text" id="R_height1" name="R_height1" style="font-size:25px;color:blue;text-align:center"   >				
										<span class="hidden" id="email1-availability-status"></span>
								</td>
							</tr>	
							<tr >
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>										  					 											
									<label style="font-size:25px;color:black;" class="space">Center Tiles =  </label>									
										<input type="text" id="center_tiles1" name="center_tiles1" align="center" style="font-size:25px;color:red;text-align:center" readonly>					
										<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold"><br><br>
										<b style="font-size:20px">Minimum height</b><input type="text" id="minimum_height1" name="minimum_height1"  align="center" style="font-size:20px;color:red;text-align:center" readonly >
													  <input type="text" id="ans4" name="ans4" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1A-availability-status"></span>
										<b style="font-size:20px">Low Nokiten</b><input type="text" id="low_nokiten1" name="low_nokiten1" align="center" style="font-size:20px;color:red;text-align:center" readonly>
													  <input type="text" id="ans5" name="ans5" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1B-availability-status"></span>
										<b style="font-size:20px">High Nokiten</b><input type="text" id="high_nokiten1" name="high_nokiten1" align="center" style="font-size:20px;color:red;text-align:center" readonly>
													  <input type="text" id="ans6" name="ans6" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>													 
													  <span class="hidden" id="email1C-availability-status"></span>
										
								</td>
							</tr>
								
						</form>	
						<br>	
							</tbody>
						</table>		
					
					
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>260 + (140 土台)</h1></th>						
							</div>
						</thead>
						<tbody>
							<tr>	
								
									<?php
							 function exterior_denki2() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering2");
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
							foreach( exterior_denki2() as $value ) {
							  $option .= '<option value="'.$value["exterior_denki"].'">'.$value["exterior_denki"].'</option>';
							}
							?>
							</tr>
						<form id="myForm3">		
							<tr>
							
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Exterior Denki Items</label>&nbsp;
										<select  style="font-size:25px;text-align:center;color:black" id="exterior_denki2"  name="exterior_denki2"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
								</td>
							
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering2 WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>
						
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Standard</label>&nbsp;
										<select  style="font-size:25px;text-align:center" onchange="checkemailAvailability2()" id="standard2"  name="standard2"  required="required">
											 <option disabled selected>Choose Type</option>
											
											<option value="gl">gl</option>
											<option value="doma">doma</option>
											<option value="wooddeck">wooddeck</option>
											<option value="balcony_2f">balcony(2f)</option>
											<option value="EWH_2f">EWH(2f)</option>
											<option value="EWL_2f">EWL(2f)</option>
											<option value="balcony_3f">balcony(3f)</option>
											<option value="EWH_3f">EWH(3f)</option>
											<option value="EWL_3f">EWL(3f)</option> 
											
										</select> 
																	
								</td>
							
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<label style="font-size:25px;color:black;" class="space">STD.Height</label>									
										<input type="text" id="std_height2" name="std_height2" style="font-size:25px;color:blue;text-align:center" readonly>					
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 																		
									<label style="font-size:30px;color:black;" class="space">R.Height</label>									
										<input type="text" id="R_height2" name="R_height2" style="font-size:25px;color:blue;text-align:center"   >				
										<span class="hidden" id="email2-availability-status"></span>
								</td>
							</tr>	
							<tr >
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>										  					 											
									<label style="font-size:25px;color:black;" class="space">Center Tiles =  </label>									
										<input type="text" id="center_tiles2" name="center_tiles2" align="center" style="font-size:25px;color:red;text-align:center" readonly >					
										<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold"><br><br>
										<b style="font-size:20px">Minimum height</b><input type="text" id="minimum_height2" name="minimum_height2"  align="center" style="font-size:20px;color:red;text-align:center" readonly >
													  <input type="text" id="ans7" name="ans7" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2A-availability-status"></span>
										<b style="font-size:20px">Low Nokiten</b><input type="text" id="low_nokiten2" name="low_nokiten2" align="center" style="font-size:20px;color:red;text-align:center" readonly>
													  <input type="text" id="ans8" name="ans8" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2B-availability-status"></span>
										<b style="font-size:20px">High Nokiten</b><input type="text" id="high_nokiten2" name="high_nokiten2" align="center" style="font-size:20px;color:red;text-align:center" readonly>
													  <input type="text" id="ans9" name="ans9" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													 <span class="hidden" id="email2C-availability-status"></span>
										
								</td>
							</tr>
								
						</form>	
						<br>
						
						
							
							
							
						</tbody>
					</table>		
				
			
			</div>
			
		</div>								
	</section>								
</section>
								

	<script>
	function myFunction1() {
    document.getElementById("myForm").reset();   
	}
	function myFunction2() {
    document.getElementById("myForm2").reset();   
	}
	function myFunction3() {
    document.getElementById("myForm3").reset();   
	}
		
	</script>

	<script>
	function myFunction(e) {
    document.getElementById("std_height").value = e.target.value;
	}
 	
	</script>


<?php include ('footer.php'); ?>


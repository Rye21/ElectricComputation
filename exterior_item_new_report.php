<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>EXTERIOR ITEM CENTER TILE</title>

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
	<link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter0.css" />	
	
	<script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
	<script src="http://hrdapps33/CountingSheet/js/select2.full.js"></script>
    <script src="http://hrdapps33/bootstrap/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
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
						
		function compute() {
			var std_height = parseFloat($('input[name=std_height]').val()) || 0 ;
			var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;		
			var standard = document.getElementById("standard").value;	
			var std_height1 = document.getElementById("std_height").value;	
			var exterior_denki = document.getElementById("exterior_denki").value;	
			var top_height = document.getElementById("top_height").value;	
			var bottom_height = document.getElementById("bottom_height").value;	
			var center_tiles = document.getElementById("center_tiles").value;	
						
						/* setTimeout(checkemailAvailabilityA(),100);
						setTimeout(checkemailAvailabilityB(),200);
						setTimeout(checkemailAvailabilityC(),300);  */	
						setTimeout(combine,40);
						setTimeout(centerhole(),400);
						setTimeout(checkemailA(),500);
						//setTimeout(checkemailAvailability(),500);
						
						//setTimeout(hitting(),500);
			var center_tiles = (std_height - R_height) / 49 ; 
			var center_tiles1 = (R_height - std_height) / 49 ; 
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;	
			var Result5 = std_height + Result3;
			//alert(Result3);
			var judge = 'Use Maximum Height then send FYI';	
			var judge2 = 'Send FYI';	
			//alert(standard);
			//alert(Result1);
			$('#center_tiles').val(Result4);
			$('#center_tiles').val(Result5);
			
			  
			/*  if (R_height != Result5){
				//alert('try'); 
				document.getElementById("demoss").value = judge2 ;
			}  else if(R_height == Result5 ) {
				
				document.getElementById("demoss").value = '' ;
			} else if (R_height == '')  {
				document.getElementById("demoss").value = '' ;
			} */
			
			if(std_height1 == ''){
					 	
			}	
				if (R_height > std_height){
					 $('#center_tiles').val(Result5);
					 //setTimeout(hitting(),500);
					//if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
					 if((exterior_denki == 'Wall Mounted Light' && standard == 'EWH_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWH_3f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_3f') 
							
						&& Result5 > std_height){
							alert(judge);
						}  else if (  std_height1 == ''  ){
							//alert('NOT');
						} 
				} else if(std_height > R_height ){
					 $('#center_tiles').val(Result4);
					// setTimeout(hitting(),500);
						/*  if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
							alert(judge);
						}	 */
				}
				if(R_height == ''){
					var x = document.getElementById("center_tiles").value = std_height;
				}
				
				setTimeout(myequal,100);
        }
		function compute_1() {
			var std_height = parseFloat($('input[name=std_height_1]').val()) || 0 ;
			var R_height = parseFloat($('input[name=R_height_1]').val()) || 0 ;		
			var standard = document.getElementById("standard_1").value;	
			var std_height1 = document.getElementById("std_height_1").value;	
			var exterior_denki = document.getElementById("exterior_denki_1").value;	
						
						//setTimeout(checkemailAvailability_1(),500);
						/* setTimeout(checkemailAvailabilityA_1(),500);
						setTimeout(checkemailAvailabilityB_1(),500);
						setTimeout(checkemailAvailabilityC_1(),500);  */
						setTimeout(combine,40);
						setTimeout(centerhole_1(),500);					 	
			var center_tiles_1 = (std_height - R_height) / 49 ; 
			var center_tiles1 = (R_height - std_height) / 49 ; 
			var Result = Math.ceil(center_tiles_1);
			var Result1 = Math.ceil(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;	
			var Result5 = std_height + Result3;
			var judge = 'Use Maximum Height then send FYI ';	
			var judge2 = 'Send FYI';	
			//alert(standard);
				
			
			$('#center_tiles_1').val(Result4);
			$('#center_tiles_1').val(Result5);
			  
			/*  if (R_height != Result5){
				//alert('try'); 
				document.getElementById("demoss").value = judge2 ;
			}  else if(R_height == Result5 ) {
				
				document.getElementById("demoss").value = '' ;
			} else if (R_height == '')  {
				document.getElementById("demoss").value = '' ;
			} */
			
			if(std_height1 == ''){
					 	
			}	
				if (R_height > std_height){
					 $('#center_tiles_1').val(Result5);
					 
					//if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
					 if((exterior_denki == 'Wall Mounted Light' && standard == 'EWH_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWH_3f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_3f') 
							
						&& Result5 > std_height){
							alert(judge);
						}  else if (  std_height1 == ''  ){
							//alert('NOT');
						} 
				} else if(std_height > R_height ){
					 $('#center_tiles_1').val(Result4);
						/*  if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
							alert(judge);
						}	 */
				}
				if(R_height == ''){
					document.getElementById("center_tiles_1").value = std_height;
				}
					
				setTimeout(myequal_1,10);
        }
		function hitting(){
			var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height]').val()) || 0 ;
			var bottom_height = parseFloat($('input[name=bottom_height]').val()) || 0 ;
			var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;
			var ans = center_tiles + top_height;
			var ans2 = center_tiles - bottom_height;
			var x = document.getElementById("center_tiles_hit").value = ans;
			var y = document.getElementById("center_tiles_hit2").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit]').val()) || 0 ;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2]').val()) || 0 ;
			var z = center_tiles_hit - center_tiles_hit2;
			var calc = document.getElementById("center_tiles_hit3").value = z;
			
			//alert(center_tiles);
		}
		
				function checkemailAvailability() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height.php",
				data:'exterior_denki='+$("#exterior_denki").val()+
				'&standard='+$("#standard").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("std_height").value = document.getElementById("email-availability-status").innerHTML;
				//var std_height = parseFloat($('select[name=std_height]').val()) || 0 ;
				var number6 = document.getElementById("standard").value;
				var number7 = document.getElementById("R_height").value;
				var number8 = document.getElementById("center_tiles").value;
				if(number6 == 'Choose Type'){
					document.getElementById("std_height").value = '';
				}else if (number6 != ''){
					document.getElementById("standard_1").value = number6;
					setTimeout(checkemailAvailability_1,300);					
				}
					
				setTimeout(compute,100);
				setTimeout(hitting,200);
				setTimeout(combine,300);
					
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				
				}
				function centerhole() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_hole.php",
				data:'exterior_denki='+$("#exterior_denki").val()+
				'&standard='+$("#standard").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number1 = document.getElementById("top_height").value = document.getElementById("email-availability-status").innerHTML;
				var number2 = document.getElementById("top_height").value;
				var strArray = number2.split(",");
				for(var i = 0; i < strArray.length; i++){
						document.getElementById("top_height").value = strArray[0];
						document.getElementById("bottom_height").value = strArray[1];			
						}
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}	
				/////////////////////////////////
				function hitting_1(){
					var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;
					var top_height = parseFloat($('input[name=top_height_1]').val()) || 0 ;
					var bottom_height = parseFloat($('input[name=bottom_height_1]').val()) || 0 ;
					var R_height = parseFloat($('input[name=R_height_1]').val()) || 0 ;
					var ans = center_tiles + top_height;
					var ans2 = center_tiles - bottom_height;
					var x = document.getElementById("center_tiles_hit_1").value = ans;
					var y = document.getElementById("center_tiles_hit2_1").value = ans2;
					var center_tiles_hit = parseFloat($('input[name=center_tiles_hit_1]').val()) || 0 ;
					var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2_1]').val()) || 0 ;
					var z = center_tiles_hit - center_tiles_hit2;
					var calc = document.getElementById("center_tiles_hit3_1").value = z;
			
				}
				function checkemailAvailability_1() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val(),
				type: "POST",
				success:function(data){
				$("#email_1-availability-status").html(data);
				var number1 = document.getElementById("std_height_1").value = document.getElementById("email_1-availability-status").innerHTML;
				//var std_height = parseFloat($('select[name=std_height]').val()) || 0 ;
				var number6 = document.getElementById("standard_1").value;
				var number7 = document.getElementById("R_height_1").value;
				var number8 = document.getElementById("center_tiles_1").value;
				if(number6 == 'Choose Type'){
					document.getElementById("std_height_1").value = '';
				}else{
					
				}
				setTimeout(compute_1,100);
				setTimeout(hitting_1,200);
				setTimeout(combine,300);
				
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function centerhole_1() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_hole_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val(),
				type: "POST",
				success:function(data){
				$("#email_1-availability-status").html(data);
				var number1 = document.getElementById("top_height_1").value = document.getElementById("email_1-availability-status").innerHTML;
				var number2 = document.getElementById("top_height_1").value;
				var strArray = number2.split(",");
				for(var i = 0; i < strArray.length; i++){
						document.getElementById("top_height_1").value = strArray[0];
						document.getElementById("bottom_height_1").value = strArray[1];	
						}
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function combine(){
					var item1 = parseFloat($('input[name=center_tiles_hit]').val()) || 0 ;
					var item2 = parseFloat($('input[name=center_tiles_hit_1]').val()) || 0 ;
					var item3 = parseFloat($('input[name=center_tiles_hit3]').val()) || 0 ;
					var exterior_denki_1 = document.getElementById("exterior_denki_1").value ;
					var exterior_denki = document.getElementById("exterior_denki").value ;
					var R_height = document.getElementById("R_height").value ;
					var R_height_1 = document.getElementById("R_height_1").value ;
					var standard = document.getElementById("standard").value ;
					var standard_1 = document.getElementById("standard_1").value ;
					var result = item1 - item2;
					var result1 = -result;
					var equal = Math.ceil(result1);
					var equal2 = Math.abs(equal);
					var judge = document.getElementById("hittings").value = equal2;
					if(exterior_denki_1 != '' && exterior_denki != '' ){
						if (judge > item3 || (exterior_denki == 'interphone' || exterior_denki == 'joint box') && standard == standard_1 && R_height == R_height_1 && (exterior_denki_1 == 'interphone' || exterior_denki_1 == 'joint box')){
							
							document.getElementById("good_hit").value = '	P O S S I B L E';
							document.getElementById("good_hit").style.color = "white";
							document.getElementById("good_hit").style.background = "black";
						} 	 else {
							document.getElementById("good_hit").value = ' 		PROHIBITED !! IT WILL HIT !!';
							document.getElementById("good_hit").style.color = "white";
							document.getElementById("good_hit").style.background = "red";
						} 
					} 
					
				}	
				////////////////////minimum/////////////////
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
				//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
				var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;		
				var f1 = $('#minimum_height').val();
				
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				} 
				function checkemailAvailabilityA_1() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val()+
				'&minimum_height_1='+$("#minimum_height_1").val(),	
				type: "POST",
				success:function(data){
				$("#emailA_1-availability-status").html(data);
				var number1 = document.getElementById("minimum_height_1").value = document.getElementById("emailA_1-availability-status").innerHTML;
				var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;		
				//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
				var R_height = parseFloat($('input[name=R_height_1]').val()) || 0 ;		
				var f1 = $('#minimum_height_1').val();
				
				
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
				var f1 = $('#minimum_height').val();
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}
				function checkemailAvailabilityB_1() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_low_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val()+
				'&low_nokiten_1='+$("#low_nokiten_1").val(),
				type: "POST",
				success:function(data){
				$("#emailB_1-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten_1").value = document.getElementById("emailB_1-availability-status").innerHTML;	
				var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;		
				var low_nokiten = parseFloat($('input[name=low_nokiten_1]').val()) || 0 ;		
				var f1 = $('#minimum_height_1').val();
				
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
				var f3 = $('#high_nokiten').val();
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				} 
				function checkemailAvailabilityC_1() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val()+
				'&high_nokiten_1='+$("#high_nokiten_1").val(),
				type: "POST",
				success:function(data){
				$("#emailC_1-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten_1").value = document.getElementById("emailC_1-availability-status").innerHTML;	
				var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;		
				var high_nokiten = parseFloat($('input[name=high_nokiten_1]').val()) || 0 ;		
				var f3 = $('#high_nokiten_1').val();
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				} 
				function checkemailA() {
					
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
				//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
				var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;
				var f1 = $('#minimum_height').val();
	
				var tru = '✔';				
				var fals = '✘'; 

				if (center_tiles >= minimum_height ){
					document.getElementById("ans").value = tru ;
					document.getElementById("ans").style.color = "green";
				} else if (center_tiles < minimum_height){
					document.getElementById("ans").value = fals ;
					document.getElementById("ans").style.color = "red";
					//alert('Height is below minimum Please Check');
				} else if(f1 > R_height) {
					//alert ('try');
					//document.getElementById("center_tiles").value = f1 ;
					document.getElementById("ans").value = tru ;
					document.getElementById("ans").style.color = "green";
				} else if (f1 == ''  )  {					
					document.getElementById("ans").value = '' ;
				} else {
					document.getElementById("ans").value = tru ;
					document.getElementById("ans").style.color = "green";
				} 
				//$('#center_tiles').val(Result4);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				//////////////////
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
				var f1 = $('#minimum_height').val();
				var tru = '✔';				
				var fals = '✘';
				var judge = "Item 1:Height Exceeds Please Check if with load above";	
				
				 
				 if (center_tiles <= low_nokiten ){
					document.getElementById("ans2").value = tru ;
					document.getElementById("ans2").style.color = "green";
					document.getElementById("demos").value = '';
					
				} else if (center_tiles >=low_nokiten){
					document.getElementById("ans2").value = fals ;
					document.getElementById("ans2").style.color = "red";
					document.getElementById("demos").value = judge ;
					
				} else {
					document.getElementById("ans2").value = tru ;
					document.getElementById("ans2").style.color = "green";
					document.getElementById("demos").value = '';
				} 
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				//////////////////////////////////
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
				var f3 = $('#high_nokiten').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles <= high_nokiten ){
					document.getElementById("ans3").value = tru ;
					document.getElementById("ans3").style.color = "green";
				} else if (center_tiles >= high_nokiten){
					document.getElementById("ans3").value = fals ;
					document.getElementById("ans3").style.color = "red";
				} else {
					document.getElementById("ans3").value = tru ;
					document.getElementById("ans3").style.color = "green";
				}  
				setTimeout(myequal,100);
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}
				function checkemailA_1() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val()+
				'&minimum_height_1='+$("#minimum_height_1").val(),	
				type: "POST",
				success:function(data){
				$("#emailA_1-availability-status").html(data);
				var number1 = document.getElementById("minimum_height_1").value = document.getElementById("emailA_1-availability-status").innerHTML;
				var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;		
				//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
				var R_height = parseFloat($('input[name=R_height_1]').val()) || 0 ;
				var f1 = $('#minimum_height_1').val();
				
				var tru = '✔';				
				var fals = '✘'; 
				
				if (center_tiles >= minimum_height ){
					document.getElementById("ans_1").value = tru ;
					document.getElementById("ans_1").style.color = "green";
				} else if (center_tiles < minimum_height){
					document.getElementById("ans_1").value = fals ;
					document.getElementById("ans_1").style.color = "red";
					//alert('Height is below minimum Please Check');
				} else if(f1 > R_height) {
					//alert ('try');
					//document.getElementById("center_tiles").value = f1 ;
					document.getElementById("ans_1").value = tru ;
					document.getElementById("ans_1").style.color = "green";
				} else if (f1 == ''  )  {					
					document.getElementById("ans_1").value = '' ;
				} else {
					document.getElementById("ans_1").value = tru ;
					document.getElementById("ans_1").style.color = "green";
				} 
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				//////////////////
				jQuery.ajax({
				url: "check/check_low_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val()+
				'&low_nokiten_1='+$("#low_nokiten_1").val(),
				type: "POST",
				success:function(data){
				$("#emailB_1-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten_1").value = document.getElementById("emailB_1-availability-status").innerHTML;	
				var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;		
				var low_nokiten = parseFloat($('input[name=low_nokiten_1]').val()) || 0 ;		
				var f1 = $('#minimum_height_1').val();
				var tru = '✔';				
				var fals = '✘';
				var judge = 'Item 2:Height Exceeds Please Check if with load above';	
				
				 
				 if (center_tiles <= low_nokiten ){
					document.getElementById("ans2_1").value = tru ;
					document.getElementById("ans2_1").style.color = "green";
					document.getElementById("demos_1").value = '';
					
				} else if (center_tiles >=low_nokiten){
					document.getElementById("ans2_1").value = fals ;
					document.getElementById("ans2_1").style.color = "red";
					document.getElementById("demos_1").value = judge ;
					//alert('Height Exceeds Please Check if with load above');
					//setTimeout(compute(),100);
				} else {
					document.getElementById("ans2_1").value = tru ;
					document.getElementById("ans2_1").style.color = "green";
					document.getElementById("demos_1").value = '';
				} 
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				//////////////////////////////////
				jQuery.ajax({
				url: "check/check_high_1.php",
				data:'exterior_denki_1='+$("#exterior_denki_1").val()+
				'&standard_1='+$("#standard_1").val()+
				'&high_nokiten_1='+$("#high_nokiten_1").val(),
				type: "POST",
				success:function(data){
				$("#emailC-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten_1").value = document.getElementById("emailC-availability-status").innerHTML;	
				var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;		
				var high_nokiten = parseFloat($('input[name=high_nokiten_1]').val()) || 0 ;		
				var f3 = $('#high_nokiten_1').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles <= high_nokiten ){
					document.getElementById("ans3_1").value = tru ;
					document.getElementById("ans3_1").style.color = "green";
				} else if (center_tiles >= high_nokiten){
					document.getElementById("ans3_1").value = fals ;
					document.getElementById("ans3_1").style.color = "red";
				} else {
					document.getElementById("ans3_1").value = tru ;
					document.getElementById("ans3_1").style.color = "green";
				}  
						
				setTimeout(myequal_1,100);
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}
				function myequal(){
					var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;
					var center_tiles = document.getElementById("center_tiles").value;
					var judge2 = 'SEND FYI';
					//alert(R_height);
					if (R_height == 0 || R_height == '' ){
						//alert(R_height);
						//alert(center_tiles); 
						document.getElementById("demoss").value = '' ;
					} else if (R_height != center_tiles ){
						//alert(R_height);
						document.getElementById("demoss").value = judge2 ;
					} else {
						document.getElementById("demoss").value = '' ;
					}
					var standard = document.getElementById("standard").value;
					var exterior_denki = document.getElementById("exterior_denki").value;
						if (exterior_denki == 'joint box' || exterior_denki == 'bousui socket')	{
							if (standard == 'balcony_2f' || standard == 'EWH_2f' || standard == 'EWL_2f'){
								document.getElementById("minimum_height").value = '419';
							} else if (standard == 'balcony_3f' || standard == 'EWH_3f' || standard == 'EWL_3f'){
								document.getElementById("minimum_height").value = '431';
							}
						}
				setTimeout(10); 
				}
				function myequal_1(){
					var R_height = parseFloat($('input[name=R_height_1]').val()) || 0 ;
					var center_tiles = document.getElementById("center_tiles_1").value;
					var judge2 = 'SEND FYI';
					
					if (R_height == 0 || R_height == '' ){
						document.getElementById("demoss_1").value = '' ;
					} else if (R_height != center_tiles ){
						//alert(R_height);
						document.getElementById("demoss_1").value = judge2 ;
					} else {
						document.getElementById("demoss_1").value = '' ;
					}
					var standard = document.getElementById("standard_1").value;
					var exterior_denki = document.getElementById("exterior_denki_1").value;
						if (exterior_denki == 'joint box' || exterior_denki == 'bousui socket')	{
							if (standard == 'balcony_2f' || standard == 'EWH_2f' || standard == 'EWL_2f'){
								document.getElementById("minimum_height_1").value = '419';
							} else if (standard == 'balcony_3f' || standard == 'EWH_3f' || standard == 'EWL_3f'){
								document.getElementById("minimum_height_1").value = '431';
							}
						}
									
				setTimeout(10); 
				}
						
				///////////////////////////240+T 140 DODAI//////////////////////////////////////////////////////
				function compute2() {
				//alert(1);
				var std_height1 = parseFloat($('input[name=std_height1]').val()) || 0 ;
				var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0 ;
				var standard1 = document.getElementById("standard1").value;	
				var std_height4 = document.getElementById("std_height1").value;	
				var exterior_denki1 = document.getElementById("exterior_denki1").value;
							/* setTimeout(checkemailAvailability1A(),500);
							setTimeout(checkemailAvailability1B(),500);
							setTimeout(checkemailAvailability1C(),500); */
							setTimeout(combine2,300);
							setTimeout(centerhole1(),500);
							//setTimeout(hitting1(),700);
				var center_tiles = (std_height1 - R_height1) / 49 ; 
				var center_tiles1 = (R_height1 - std_height1) / 49 ; 
				var Result = Math.ceil(center_tiles);
				var Result1 = Math.ceil(center_tiles1);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height1 - Result2;	
				var Result5 = std_height1 + Result3;
				var judge = 'Use Maximum Height then send FYI ';
			
			$('#center_tiles1').val(Result4);
				$('#center_tiles1').val(Result5);
			 
			
					if (R_height1 > std_height1){
						
						 $('#center_tiles1').val(Result5);
						
						if(( exterior_denki1 == 'Wall Mounted Light' 	&& standard1 == 'EWH_2f') || (exterior_denki1 == 'Wall Mounted Light' 	&& standard1 == 'EWL_2f') || (exterior_denki1 == 'Wall Mounted Light'	&& standard1 == 'EWH_3f') || (exterior_denki1 == 'Wall Mounted Light' 	&& standard1 == 'EWL_3f') 	
							&& Result5 > std_height4){
								alert(judge);
							}  else if (  std_height4 == ''  ){
								//alert('NOT');
							} 
					} else if(std_height1 > R_height1 ){
						 $('#center_tiles1').val(Result4);
						 
					} 
					if(R_height1 == ''){
						var x = document.getElementById("center_tiles1").value = std_height1;
					}
					
					setTimeout(myequal2,100);	
		
				}
				function compute2_2() {
      
				var std_height1 = parseFloat($('input[name=std_height1_2]').val()) || 0 ;
				var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0 ;
				var standard1 = document.getElementById("standard1_2").value;	
				var std_height4 = document.getElementById("std_height1_2").value;	
				var exterior_denki1 = document.getElementById("exterior_denki1_2").value;
							/* setTimeout(checkemailAvailability1A_2(),500);
							setTimeout(checkemailAvailability1B_2(),500);
							setTimeout(checkemailAvailability1C_2(),500); */
							setTimeout(combine2,300);
							setTimeout(centerhole1_2(),500);
				var center_tiles1_ = (std_height1 - R_height1) / 49 ; 
				var center_tiles1_2 = (R_height1 - std_height1) / 49 ; 
				var Result = Math.ceil(center_tiles1_);
				var Result1 = Math.ceil(center_tiles1_2);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height1 - Result2;	
				var Result5 = std_height1 + Result3;
				var judge = 'Use Maximum Height then send FYI ';
			
				$('#center_tiles1_2').val(Result4);
				$('#center_tiles1_2').val(Result5);
			 
			
					if (R_height1 > std_height1){
						 $('#center_tiles1_2').val(Result5);
						if(( exterior_denki1 == 'Wall Mounted Light' 	&& standard1 == 'EWH_2f') || (exterior_denki1 == 'Wall Mounted Light' 	&& standard1 == 'EWL_2f') || (exterior_denki1 == 'Wall Mounted Light'	&& standard1 == 'EWH_3f') || (exterior_denki1 == 'Wall Mounted Light' 	&& standard1 == 'EWL_3f') 	
							&& Result5 > std_height4){
								alert(judge);
							}  else if (  std_height4 == ''  ){
								//alert('NOT');
							} 
					} else if(std_height1 > R_height1 ){
						 $('#center_tiles1_2').val(Result4);
					} 
					if(R_height1 == ''){
						
						var x = document.getElementById("center_tiles1_2").value = std_height1;
					}
					setTimeout(myequal2_2,100);	
		
				}
				
				function hitting1(){
					
					var center_tiles = parseFloat($('input[name=center_tiles1]').val()) || 0 ;
					//var center_tiles = parseFloat($('input[name=std_height1]').val()) || 0 ;
					var top_height = parseFloat($('input[name=top_height1]').val()) || 0 ;
					var bottom_height = parseFloat($('input[name=bottom_height1]').val()) || 0 ;
					var R_height = parseFloat($('input[name=R_height1]').val()) || 0 ;
					var ans = center_tiles + top_height;
					var ans2 = center_tiles - bottom_height;
					var x = document.getElementById("center_tiles_hit1_2").value = ans;
					var y = document.getElementById("center_tiles_hit2_2").value = ans2;
					var center_tiles_hit = parseFloat($('input[name=center_tiles_hit1_2]').val()) || 0 ;
					var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2_2]').val()) || 0 ;
					var z = center_tiles_hit - center_tiles_hit2;
					var calc = document.getElementById("center_tiles_hit3_2").value = z;
					//alert(center_tiles);
					//alert(center_tiles);
				}
				
				//////////////////////////////////////////////////
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
				var number6 = document.getElementById("standard1").value;
				var number7 = document.getElementById("R_height1").value;
				
				if(number6 == 'Choose Type'){
					document.getElementById("std_height1").value = '';
				}else if (number6 != ''){
					document.getElementById("standard1_2").value = number6;	
					setTimeout(checkemailAvailability1_2,100);
				}
				setTimeout(compute2,10);
				setTimeout(hitting1,20);
				setTimeout(combine2,30);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function centerhole1() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_hole1.php",
				data:'exterior_denki='+$("#exterior_denki1").val()+
				'&standard='+$("#standard1").val(),
				type: "POST",
				success:function(data){
				$("#email1A-availability-status").html(data);
				var number1 = document.getElementById("top_height1").value = document.getElementById("email1A-availability-status").innerHTML;
				var number2 = document.getElementById("top_height1").value;
				var strArray = number2.split(",");
				for(var i = 0; i < strArray.length; i++){
						document.getElementById("top_height1").value = strArray[0];
						document.getElementById("bottom_height1").value = strArray[1];			
						}
				setTimeout(hitting1(),10);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				
				function hitting1_2(){
					var center_tiles = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;
					var top_height = parseFloat($('input[name=top_height1_2]').val()) || 0 ;
					var bottom_height = parseFloat($('input[name=bottom_height1_2]').val()) || 0 ;
					var R_height = parseFloat($('input[name=R_height1_2]').val()) || 0 ;
					var ans = center_tiles + top_height;
					var ans2 = center_tiles - bottom_height;
					var x = document.getElementById("center_tiles_hit1_21").value = ans;
					var y = document.getElementById("center_tiles_hit2_22").value = ans2;
					var center_tiles_hit = parseFloat($('input[name=center_tiles_hit1_21]').val()) || 0 ;
					var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2_22]').val()) || 0 ;
					var z = center_tiles_hit - center_tiles_hit2;
					var calc = document.getElementById("center_tiles_hit3_23").value = z;
					
					//alert(center_tiles);
				}
				
				function checkemailAvailability1_2() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height2_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val(),
				type: "POST",
				success:function(data){
				$("#email1_2-availability-status").html(data);
				var number1 = document.getElementById("std_height1_2").value = document.getElementById("email1_2-availability-status").innerHTML;
				var number6 = document.getElementById("standard1_2").value;
				var number7 = document.getElementById("R_height1_2").value;
				
				if(number6 == 'Choose Type'){
					document.getElementById("std_height1_2").value = '';
				}else{
					//alert('s'); 
					//setTimeout(compute2,2000);					
				}
				setTimeout(compute2_2,10);
				setTimeout(hitting1_2,20);
				setTimeout(combine2,30);				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function centerhole1_2() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_hole1_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val(),
				type: "POST",
				success:function(data){
				$("#email1A_2-availability-status").html(data);
				var number1 = document.getElementById("top_height1_2").value = document.getElementById("email1A_2-availability-status").innerHTML;
				var number2 = document.getElementById("top_height1_2").value;
				var strArray = number2.split(",");
				for(var i = 0; i < strArray.length; i++){
						document.getElementById("top_height1_2").value = strArray[0];
						document.getElementById("bottom_height1_2").value = strArray[1];			
						}
				setTimeout(hitting1_2(),10);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function combine2(){
					var item1 = parseFloat($('input[name=center_tiles_hit1_2]').val()) || 0 ;
					var item2 = parseFloat($('input[name=center_tiles_hit1_21]').val()) || 0 ;
					var item3 = parseFloat($('input[name=center_tiles_hit3_2]').val()) || 0 ;
					var exterior_denki_1 = document.getElementById("exterior_denki1_2").value ;
					var exterior_denki1 = document.getElementById("exterior_denki1").value ;
					var R_height1 = document.getElementById("R_height1").value ;
					var R_height1_2 = document.getElementById("R_height1_2").value ;
					var standard1 = document.getElementById("standard1").value ;
					var standard1_2 = document.getElementById("standard1_2").value ;
					var result = item1 - item2;
					var result1 = -result;
					var equal = Math.floor(result1);
					var equal2 = Math.abs(equal);
					var judge = document.getElementById("hittings2").value = equal2;
					if(exterior_denki_1 != '' && exterior_denki1 != ''){
						if (judge > item3 || (exterior_denki1 == 'interphone' || exterior_denki1 == 'joint box') && standard1 == standard1_2 && R_height1 == R_height1_2 && (exterior_denki_1 == 'interphone' || exterior_denki_1 == 'joint box')){
							document.getElementById("good_hit2").value = '	   P O S S I B L E';
							document.getElementById("good_hit2").style.color = "white";
							document.getElementById("good_hit2").style.background = "black";
						} else {
							document.getElementById("good_hit2").value = ' 		PROHIBITED !! IT WILL HIT !!';
							document.getElementById("good_hit2").style.color = "white";
							document.getElementById("good_hit2").style.background = "red";
						}
					}
				}
				
			////////////////////////////////////////////////
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
				var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0 ;
				var f2 = $('#minimum_height1').val();
				
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
				function checkemailAvailability1A_2() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum1_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val()+
				'&minimum_height='+$("#minimum_height1_2").val(),	
				type: "POST",
				success:function(data){
				$("#email1A_2-availability-status").html(data);
				var number1 = document.getElementById("minimum_height1_2").value = document.getElementById("email1A_2-availability-status").innerHTML;
				var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;		
				var minimum_height1 = parseFloat($('input[name=minimum_height1_2]').val()) || 0 ;		
				var R_height1 = parseFloat($('input[name=R_height1-2]').val()) || 0 ;
				var f2 = $('#minimum_height1_2').val();
				
		
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
				var f3 = $('#low_nokiten1').val();
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}
				function checkemailAvailability1B_2() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_low1_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val()+
				'&low_nokiten='+$("#low_nokiten1_2").val(),
				
				type: "POST",
				success:function(data){
				$("#email1B_2-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten1_2").value = document.getElementById("email1B_2-availability-status").innerHTML;	
				var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;		
				var low_nokiten1 = parseFloat($('input[name=low_nokiten1_2]').val()) || 0 ;		
				var f3 = $('#low_nokiten1_2').val();
				
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
				var f4 = $('#high_nokiten1').val();
				setTimeout(myequal2,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				}
				function checkemailAvailability1C_2() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high1_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val()+
				'&high_nokiten='+$("#high_nokiten1_2").val(),
				type: "POST",
				success:function(data){
				$("#email1C_2-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten1_2").value = document.getElementById("email1C_2-availability-status").innerHTML;	
				var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;		
				var high_nokiten1 = parseFloat($('input[name=high_nokiten1_2]').val()) || 0 ;		
				var f4 = $('#high_nokiten1_2').val();
				setTimeout(myequal2_2,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				}
				////////////////////////////////////////////
				function checkemail1A() {
					
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
				//var minimum_height1 = parseFloat($('input[name=minimum_height1]').val()) || 0 ;		
				var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0 ;
				var f2 = $('#minimum_height1').val();
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles1 >= minimum_height1 ){
					document.getElementById("ans4").value = tru ;
					document.getElementById("ans4").style.color = "green";
				} else if (center_tiles1 < minimum_height1){
					document.getElementById("ans4").value = fals ;
					document.getElementById("ans4").style.color = "red";
				} else if(f2 > R_height1) {
					//alert ('try');
					//document.getElementById("center_tiles1").value = f2 ;
					document.getElementById("ans4").value = tru ;
					document.getElementById("ans4").style.color = "green";
				} else if (f2 == ''  )  {					
					document.getElementById("ans4").value = '' ;
				}  else {
					document.getElementById("ans4").value = tru ;
					document.getElementById("ans4").style.color = "green";
				}
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
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
				var f3 = $('#low_nokiten1').val();
				var tru = '✔';				
				var fals = '✘'; 
				var judge = 'Height Exceeds Please Check if with load above';
				
				 
				 if (center_tiles1 <= low_nokiten1 ){
					document.getElementById("ans5").value = tru ;
					document.getElementById("ans5").style.color = "green";
					document.getElementById("demos2").value = '';
				} else if (center_tiles1 >=low_nokiten1){
					document.getElementById("ans5").value = fals ;
					document.getElementById("ans5").style.color = "red";
					document.getElementById("demos2").value = judge ;
				} else {
					document.getElementById("ans5").value = tru ;
					document.getElementById("ans5").style.color = "green";
					document.getElementById("demos2").value = '';
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
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
				var f4 = $('#high_nokiten1').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles1 <= high_nokiten1 ){
					document.getElementById("ans6").value = tru ;
					document.getElementById("ans6").style.color = "green";
				} else if (center_tiles1 >= high_nokiten1){
					document.getElementById("ans6").value = fals ;
					document.getElementById("ans6").style.color = "red";
				} else {
					document.getElementById("ans6").value = tru ;
					document.getElementById("ans6").style.color = "green";
				} 
				
				setTimeout(myequal2,100);
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});		
				}
				function checkemail1A_2() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum1_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val()+
				'&minimum_height='+$("#minimum_height1_2").val(),	
				type: "POST",
				success:function(data){
				$("#email1A_2-availability-status").html(data);
				var number1 = document.getElementById("minimum_height1_2").value = document.getElementById("email1A_2-availability-status").innerHTML;
				var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;		
				//var minimum_height1 = parseFloat($('input[name=minimum_height1]').val()) || 0 ;		
				var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0 ;
				var f2 = $('#minimum_height1_2').val();
				
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles1 >= minimum_height1 ){
					document.getElementById("ans4_2").value = tru ;
					document.getElementById("ans4_2").style.color = "green";
				} else if (center_tiles1 < minimum_height1){
					document.getElementById("ans4_2").value = fals ;
					document.getElementById("ans4_2").style.color = "red";
				} else if(f2 > R_height1) {
					//alert ('try');
					//document.getElementById("center_tiles1_2").value = f2 ;
					document.getElementById("ans4-2").value = tru ;
					document.getElementById("ans4_2").style.color = "green";
				} else if (f2 == ''  )  {					
					document.getElementById("ans4_2").value = '' ;
				}  else {
					document.getElementById("ans4_2").value = tru ;
					document.getElementById("ans4_2").style.color = "green";
				}
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				jQuery.ajax({
				url: "check/check_low1_2.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val()+
				'&low_nokiten='+$("#low_nokiten1_2").val(),
				
				type: "POST",
				success:function(data){
				$("#email1B_2-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten1_2").value = document.getElementById("email1B_2-availability-status").innerHTML;	
				var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;		
				var low_nokiten1 = parseFloat($('input[name=low_nokiten1_2]').val()) || 0 ;		
				var f3 = $('#low_nokiten1_2').val();
				var tru = '✔';				
				var fals = '✘'; 
				var judge = 'Height Exceeds Please Check if with load above';
				
				 
				 if (center_tiles1 <= low_nokiten1 ){
					document.getElementById("ans5_2").value = tru ;
					document.getElementById("ans5_2").style.color = "green";
					document.getElementById("demos2_2").value = '';
				} else if (center_tiles1 >= low_nokiten1){
					document.getElementById("ans5_2").value = fals ;
					document.getElementById("ans5_2").style.color = "red";
					document.getElementById("demos2_2").value = judge ;
				} else {
					document.getElementById("ans5_2").value = tru ;
					document.getElementById("ans5_2").style.color = "green";
					document.getElementById("demos2_2").value = '';
				}
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				jQuery.ajax({
				url: "check/check_high1.php",
				data:'exterior_denki='+$("#exterior_denki1_2").val()+
				'&standard='+$("#standard1_2").val()+
				'&high_nokiten='+$("#high_nokiten1_2").val(),
				type: "POST",
				success:function(data){
				$("#email1C_2-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten1_2").value = document.getElementById("email1C_2-availability-status").innerHTML;	
				var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;		
				var high_nokiten1 = parseFloat($('input[name=high_nokiten1_2]').val()) || 0 ;		
				var f4 = $('#high_nokiten1_2').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles1 <= high_nokiten1 ){
					document.getElementById("ans6_2").value = tru ;
					document.getElementById("ans6_2").style.color = "green";
				} else if (center_tiles1 >= high_nokiten1){
					document.getElementById("ans6_2").value = fals ;
					document.getElementById("ans6_2").style.color = "red";
				} else {
					document.getElementById("ans6_2").value = tru ;
					document.getElementById("ans6_2").style.color = "green";
				} 
				setTimeout(myequal2_2,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});		
				}
				function myequal2(){
					var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0 ;
					var center_tiles1 = document.getElementById("center_tiles1").value;
					var judge2 = 'SEND FYI';
					//alert(R_height);
					if (R_height1 == 0 || R_height1 == '' ){
						//alert(R_height);
						//alert(center_tiles); 
						document.getElementById("demoss2").value = '' ;
					} else if (R_height1 != center_tiles1 ){
						//alert(R_height);
						document.getElementById("demoss2").value = judge2 ;
					} else {
						document.getElementById("demoss2").value = '' ;
					}
					var standard1 = document.getElementById("standard1").value;
					var exterior_denki1 = document.getElementById("exterior_denki1").value;
						if (exterior_denki1 == 'joint box' || exterior_denki1 == 'bousui socket')	{
							if (standard1 == 'balcony_2f' || standard1 == 'EWH_2f' || standard1 == 'EWL_2f'){
								document.getElementById("minimum_height1").value = '417';
							} else if (standard1 == 'balcony_3f' || standard1 == 'EWH_3f' || standard1 == 'EWL_3f'){
								document.getElementById("minimum_height1").value = '';
							}
						}
					setTimeout(10);
					
				}
				function myequal2_2(){
					var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0 ;
					var center_tiles1 = document.getElementById("center_tiles1_2").value;
					var judge2 = 'SEND FYI';
					//alert(R_height);
					if (R_height1 == 0 || R_height1 == '' ){
						//alert(R_height);
						//alert(center_tiles); 
						document.getElementById("demoss2_2").value = '' ;
					} else if (R_height1 != center_tiles1 ){
						//alert(R_height);
						document.getElementById("demoss2_2").value = judge2 ;
					} else {
						document.getElementById("demoss2_2").value = '' ;
					}
					var standard1 = document.getElementById("standard1_2").value;
					var exterior_denki1 = document.getElementById("exterior_denki1_2").value;
						if (exterior_denki1 == 'joint box' || exterior_denki1 == 'bousui socket')	{
							if (standard1 == 'balcony_2f' || standard1 == 'EWH_2f' || standard1 == 'EWL_2f'){
								document.getElementById("minimum_height1_2").value = '417';
							} else if (standard1 == 'balcony_3f' || standard1 == 'EWH_3f' || standard1 == 'EWL_3f'){
								document.getElementById("minimum_height1_2").value = '';
							}
						}
					setTimeout(10);
				}	
				//////////////////////////260 140 DODAI//////////////////////////////
			function compute3() {
      
				var std_height2 = parseFloat($('input[name=std_height2]').val()) || 0 ;
				var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0 ;
				var standard2 = document.getElementById("standard2").value;	
				var std_height3 = document.getElementById("std_height2").value;	
				var exterior_denki2 = document.getElementById("exterior_denki2").value;	
							/* setTimeout(checkemailAvailability2A(),500);
							setTimeout(checkemailAvailability2B(),500);
							setTimeout(checkemailAvailability2C(),500); */
							setTimeout(hitting2(),400);
							setTimeout(centerhole3(),500);
				
				var center_tiles1 = (std_height2 - R_height2) / 49 ; 
				var center_tiles2 = (R_height2 - std_height2) / 49 ; 
				var Result = Math.ceil(center_tiles1);
				var Result1 = Math.ceil(center_tiles2);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height2 - Result2;	
				var Result5 = std_height2 + Result3;
				var judge = 'Use Maximum Height then send FYI ';	
			 
			
				$('#center_tiles2').val(Result4);
				$('#center_tiles2').val(Result5);
			 
			
					if (R_height2 > std_height2){
						 $('#center_tiles2').val(Result5);
						if(( exterior_denki2 == 'Wall Mounted Light' 	&& standard2 == 'EWH_2f') || (exterior_denki2 == 'Wall Mounted Light' 	&& standard2 == 'EWL_2f') || (exterior_denki2 == 'Wall Mounted Light'	&& standard2 == 'EWH_3f') || (exterior_denki2 == 'Wall Mounted Light' 	&& standard2 == 'EWL_3f') 	
							&& Result5 > std_height3){
								alert(judge);
							}  else if (  std_height3 == ''  ){
								//alert('NOT');
							}
					} else if(std_height2 > R_height2 ){
						 $('#center_tiles2').val(Result4);
					}
					if (R_height2 == ''){
						document.getElementById("center_tiles2").value = std_height2;	
					}					
		 
					setTimeout(myequal3,100);
				}
				function compute3_3() {
      
				var std_height2 = parseFloat($('input[name=std_height2_3]').val()) || 0 ;
				var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0 ;
				var standard2 = document.getElementById("standard2_3").value;	
				var std_height3 = document.getElementById("std_height2_3").value;	
				var exterior_denki2 = document.getElementById("exterior_denki2_3").value;	
							/* setTimeout(checkemailAvailability2A_3(),500);
							setTimeout(checkemailAvailability2B_3(),500);
							setTimeout(checkemailAvailability2C_3(),500); */
							setTimeout(hitting2_1(),400);
							setTimeout(centerhole3_3(),500);
				
				var center_tiles2_ = (std_height2 - R_height2) / 49 ; 
				var center_tiles2_3 = (R_height2 - std_height2) / 49 ; 
				var Result = Math.ceil(center_tiles2_);
				var Result1 = Math.ceil(center_tiles2_3);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height2 - Result2;	
				var Result5 = std_height2 + Result3;
				var judge = 'Use Maximum Height then send FYI ';	
			 
			
				$('#center_tiles2_3').val(Result4);
				$('#center_tiles2_3').val(Result5);
			 
			
					if (R_height2 > std_height2){
						 $('#center_tiles2_3').val(Result5);
						if(( exterior_denki2 == 'Wall Mounted Light' 	&& standard2 == 'EWH_2f') || (exterior_denki2 == 'Wall Mounted Light' 	&& standard2 == 'EWL_2f') || (exterior_denki2 == 'Wall Mounted Light'	&& standard2 == 'EWH_3f') || (exterior_denki2 == 'Wall Mounted Light' 	&& standard2 == 'EWL_3f') 	
							&& Result5 > std_height3){
								alert(judge);
							}  else if (  std_height3 == ''  ){
								//alert('NOT');
							}
					} else if(std_height2 > R_height2 ){
						 $('#center_tiles2_3').val(Result4);
					}
					if (R_height2 == ''){
						document.getElementById("center_tiles2_3").value = std_height2;	
					}					
		 
					setTimeout(myequal3_3,100);
				}
				function hitting2(){
					
					var center_tiles = parseFloat($('input[name=center_tiles2]').val()) || 0 ;
					//var center_tiles = parseFloat($('input[name=std_height1]').val()) || 0 ;
					var top_height = parseFloat($('input[name=top_height2_1]').val()) || 0 ;
					var bottom_height = parseFloat($('input[name=bottom_height2_1]').val()) || 0 ;
					var R_height = parseFloat($('input[name=R_height2]').val()) || 0 ;
					var ans = center_tiles + top_height;
					var ans2 = center_tiles - bottom_height;
					var x = document.getElementById("center_tiles_hit3_x").value = ans;
					var y = document.getElementById("center_tiles_hit3_y").value = ans2;
					var center_tiles_hit = parseFloat($('input[name=center_tiles_hit3_x]').val()) || 0 ;
					var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit3_y]').val()) || 0 ;
					var z = center_tiles_hit - center_tiles_hit2;
					var calc = document.getElementById("center_tiles_hit3_z").value = z;
					//alert(center_tiles);
					//alert(center_tiles);
				}
				//////////////////////////////////
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
				var number6 = document.getElementById("standard2").value;
				var number7 = document.getElementById("R_height2").value;
				
				if(number6 == 'Choose Type'){
					document.getElementById("std_height2").value = '';
				}else if (number6 != ''){
					document.getElementById("standard2_3").value = number6;	
					setTimeout(checkemailAvailability2_3,100);
				}
				setTimeout(compute3,100);
				setTimeout(hitting2(),200);
				setTimeout(combine3(),300);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function centerhole3() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_hole2.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val(),
				type: "POST",
				success:function(data){
				$("#email2A-availability-status").html(data);
				var number1 = document.getElementById("top_height2_1").value = document.getElementById("email2A-availability-status").innerHTML;
				var number2 = document.getElementById("top_height2_1").value;
				var strArray = number2.split(",");
				for(var i = 0; i < strArray.length; i++){
						document.getElementById("top_height2_1").value = strArray[0];
						document.getElementById("bottom_height2_1").value = strArray[1];			
						}
				setTimeout(hitting2(),100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function hitting2_1(){
					
					var center_tiles = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;
					//var center_tiles = parseFloat($('input[name=std_height1]').val()) || 0 ;
					var top_height = parseFloat($('input[name=top_height2_3]').val()) || 0 ;
					var bottom_height = parseFloat($('input[name=bottom_height2_3]').val()) || 0 ;
					var R_height = parseFloat($('input[name=R_height2_3]').val()) || 0 ;
					var ans = center_tiles + top_height;
					var ans2 = center_tiles - bottom_height;
					var x = document.getElementById("center_tiles_hit3_x1").value = ans;
					var y = document.getElementById("center_tiles_hit3_y2").value = ans2;
					var center_tiles_hit = parseFloat($('input[name=center_tiles_hit3_x1]').val()) || 0 ;
					var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit3_y2]').val()) || 0 ;
					var z = center_tiles_hit - center_tiles_hit2;
					var calc = document.getElementById("center_tiles_hit3_z3").value = z;
					//alert(center_tiles);
					//alert(center_tiles);
				}
				function checkemailAvailability2_3() {
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_height3_3.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val(),
				type: "POST",
				success:function(data){
				$("#email2-availability-status").html(data);
				var number1 = document.getElementById("std_height2_3").value = document.getElementById("email2-availability-status").innerHTML;
				var number6 = document.getElementById("standard2_3").value;
				var number7 = document.getElementById("R_height2_3").value;
				
				if(number6 == 'Choose Type'){
					document.getElementById("std_height2_3").value = '';
				}else{
					//alert('s'); 
					//setTimeout(compute3,2000);					
				}
				setTimeout(compute3_3,100);
				setTimeout(hitting2_1,200);
				setTimeout(combine3,300);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function centerhole3_3() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_hole2_3.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val(),
				type: "POST",
				success:function(data){
				$("#email2A_3-availability-status").html(data);
				var number1 = document.getElementById("top_height2_3").value = document.getElementById("email2A_3-availability-status").innerHTML;
				var number2 = document.getElementById("top_height2_3").value;
				var strArray = number2.split(",");
				for(var i = 0; i < strArray.length; i++){
						document.getElementById("top_height2_3").value = strArray[0];
						document.getElementById("bottom_height2_3").value = strArray[1];			
						}
				setTimeout(hitting2_1,200);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
				function combine3(){
					var item1 = parseFloat($('input[name=center_tiles_hit3_x]').val()) || 0 ;
					var item2 = parseFloat($('input[name=center_tiles_hit3_x1]').val()) || 0 ;
					var item3 = parseFloat($('input[name=center_tiles_hit3_z]').val()) || 0 ;
					var exterior_denki_1 = document.getElementById("exterior_denki2_3").value ;
					var exterior_denki2 = document.getElementById("exterior_denki2").value ;
					var R_height2 = document.getElementById("R_height2").value ;
					var R_height2_3 = document.getElementById("R_height2_3").value ;
					var standard2 = document.getElementById("standard2").value ;
					var standard2_3 = document.getElementById("standard2_3").value ;
					var result = item1 - item2;
					var result1 = -result;
					var equal = Math.floor(result1);
					var equal2 = Math.abs(equal);
					var judge = document.getElementById("hittings3").value = equal2;
					if(exterior_denki_1 != '' && exterior_denki2 != ''){
						if (judge > item3 || (exterior_denki2 == 'interphone' || exterior_denki2 == 'joint box') && standard2 == standard2_3 && R_height2 == R_height2_3 && (exterior_denki_1 == 'interphone' || exterior_denki_1 == 'joint box')){
							document.getElementById("good_hit3").value = '		P O S S I B L E';
							document.getElementById("good_hit3").style.color = "white";
							document.getElementById("good_hit3").style.background = "black";
						} else {
							document.getElementById("good_hit3").value = '		PROHIBITED !! IT WILL HIT !!';
							document.getElementById("good_hit3").style.color = "white";
							document.getElementById("good_hit3").style.background = "red";
						}
					}
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
				var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0 ;
				var f3 = $('#minimum_height2').val();
				
		
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
				function checkemailAvailability2A_3() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum2_3.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val()+
				'&minimum_height='+$("#minimum_height2_3").val(),	
				type: "POST",
				success:function(data){
				$("#email2A_3-availability-status").html(data);
				var number1 = document.getElementById("minimum_height2_3").value = document.getElementById("email2A-3-availability-status").innerHTML;
				var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
				var minimum_height2 = parseFloat($('input[name=minimum_height2_3]').val()) || 0 ;		
				var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0 ;
				var f3 = $('#minimum_height2_3').val();
				
		
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
				var f4 = $('#low_nokiten2').val();
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}	
				function checkemailAvailability2B_3() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_low2_3.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val()+
				'&low_nokiten='+$("#low_nokiten2_3").val(),
				
				type: "POST",
				success:function(data){
				$("#email2B_3-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten2_3").value = document.getElementById("email2B_3-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
				var low_nokiten2 = parseFloat($('input[name=low_nokiten2_3]').val()) || 0 ;		
				var f4 = $('#low_nokiten2_3').val();
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});	
				}
				////////////////////high/////////////////
				 function checkemailAvailability2C() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high2.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val()+
				'&high_nokiten='+$("#high_nokiten2").val(),
				type: "POST",
				success:function(data){
				$("#email2C-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten2").value = document.getElementById("email2C-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0 ;		
				var high_nokiten2 = parseFloat($('input[name=high_nokiten2]').val()) || 0 ;		
				var f5 = $('#high_nokiten2').val();
				setTimeout(myequal3,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				}
				function checkemailAvailability2C_3() {
					
				$("#loaderIcon").show();				
				jQuery.ajax({
				url: "check/check_high2_3.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val()+
				'&high_nokiten='+$("#high_nokiten2_3").val(),
				type: "POST",
				success:function(data){
				$("#email2C_3-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten2_3").value = document.getElementById("email2C_3-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
				var high_nokiten2 = parseFloat($('input[name=high_nokiten2_3]').val()) || 0 ;		
				var f5 = $('#high_nokiten2_3').val();
				setTimeout(myequal3_3,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});					
				}
				////////////////////////////
				
				function checkemail2A() {
					
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
				//var minimum_height2 = parseFloat($('input[name=minimum_height2]').val()) || 0 ;		
				var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0 ;
				var f3 = $('#minimum_height2').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles2 >= minimum_height2 ){
					document.getElementById("ans7").value = tru ;
					document.getElementById("ans7").style.color = "green";
				} else if (center_tiles2 < minimum_height2){
					document.getElementById("ans7").value = fals ;
					document.getElementById("ans7").style.color = "red";
				} else if(f3 > R_height2) {
					//alert ('try');
					//document.getElementById("center_tiles2").value = f3 ;
					document.getElementById("ans7").value = tru ;
					document.getElementById("ans7").style.color = "green";
				} else if (f3 == ''  )  {					
					document.getElementById("ans7").value = '' ;
				} else {
					document.getElementById("ans7").value = tru ;
					document.getElementById("ans7").style.color = "green";
				} 
		
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				////////////////////////
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
				var f4 = $('#low_nokiten2').val();
				var tru = '✔';				
				var fals = '✘'; 
				var judge = 'Height Exceeds Please Check if with load above';
				
				 
				 if (center_tiles2 <= low_nokiten2 ){
					document.getElementById("ans8").value = tru ;
					document.getElementById("ans8").style.color = "green";
					document.getElementById("demos3").value = '' ;
				} else if (center_tiles2 >=low_nokiten2){
					document.getElementById("ans8").value = fals ;
					document.getElementById("ans8").style.color = "red";
					document.getElementById("demos3").value = judge ;
				} else {
					document.getElementById("ans8").value = tru ;
					document.getElementById("ans8").style.color = "green";
					document.getElementById("demos3").value = '';
				} 
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				///////////////
				jQuery.ajax({
				url: "check/check_high2.php",
				data:'exterior_denki='+$("#exterior_denki2").val()+
				'&standard='+$("#standard2").val()+
				'&high_nokiten='+$("#high_nokiten2").val(),
				type: "POST",
				success:function(data){
				$("#email2C-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten2").value = document.getElementById("email2C-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0 ;		
				var high_nokiten2 = parseFloat($('input[name=high_nokiten2]').val()) || 0 ;		
				var f5 = $('#high_nokiten2').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles2 <= high_nokiten2 ){
					document.getElementById("ans9").value = tru ;
					document.getElementById("ans9").style.color = "green";
				} else if (center_tiles2 >= high_nokiten2 ){
					document.getElementById("ans9").value = fals ;
					document.getElementById("ans9").style.color = "red";
				} else {
					document.getElementById("ans9").value = tru ;
					document.getElementById("ans9").style.color = "green";
				} 	
				setTimeout(myequal3,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
				function checkemail2A_3() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_minimum2.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val()+
				'&minimum_height='+$("#minimum_height2_3").val(),	
				type: "POST",
				success:function(data){
				$("#email2A_3-availability-status").html(data);
				var number1 = document.getElementById("minimum_height2_3").value = document.getElementById("email2A_3-availability-status").innerHTML;
				var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
				//var minimum_height2 = parseFloat($('input[name=minimum_height2]').val()) || 0 ;		
				var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0 ;
				var f3 = $('#minimum_height2_3').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles2 >= minimum_height2 ){
					document.getElementById("ans7_3").value = tru ;
					document.getElementById("ans7_3").style.color = "green";
				} else if (center_tiles2 < minimum_height2){
					document.getElementById("ans7_3").value = fals ;
					document.getElementById("ans7_3").style.color = "red";
				} else if(f3 > R_height2) {
					//alert ('try');
					//document.getElementById("center_tiles2").value = f3 ;
					document.getElementById("ans7_3").value = tru ;
					document.getElementById("ans7_3").style.color = "green";
				} else if (f3 == ''  )  {					
					document.getElementById("ans7_3").value = '' ;
				} else {
					document.getElementById("ans7_3").value = tru ;
					document.getElementById("ans7_3").style.color = "green";
				} 
		
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				////////////////////////
				jQuery.ajax({
				url: "check/check_low2.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val()+
				'&low_nokiten='+$("#low_nokiten2_3").val(),
				
				type: "POST",
				success:function(data){
				$("#email2B_3-availability-status").html(data);
				var number1 = document.getElementById("low_nokiten2_3").value = document.getElementById("email2B_3-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
				var low_nokiten2 = parseFloat($('input[name=low_nokiten2_3]').val()) || 0 ;		
				var f4 = $('#low_nokiten2_3').val();
				var tru = '✔';				
				var fals = '✘'; 
				var judge = 'Height Exceeds Please Check if with load above';
				
				 
				 if (center_tiles2 <= low_nokiten2 ){
					document.getElementById("ans8_3").value = tru ;
					document.getElementById("ans8_3").style.color = "green";
					document.getElementById("demos3_3").value = '' ;
				} else if (center_tiles2 >=low_nokiten2){
					document.getElementById("ans8_3").value = fals ;
					document.getElementById("ans8_3").style.color = "red";
					document.getElementById("demos3_3").value = judge ;
				} else {
					document.getElementById("ans8_3").value = tru ;
					document.getElementById("ans8_3").style.color = "green";
					document.getElementById("demos3_3").value = '';
				} 
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				///////////////
				jQuery.ajax({
				url: "check/check_high2.php",
				data:'exterior_denki='+$("#exterior_denki2_3").val()+
				'&standard='+$("#standard2_3").val()+
				'&high_nokiten='+$("#high_nokiten2_3").val(),
				type: "POST",
				success:function(data){
				$("#email2C_3-availability-status").html(data);
				var number1 = document.getElementById("high_nokiten2_3").value = document.getElementById("email2C_3-availability-status").innerHTML;	
				var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
				var high_nokiten2 = parseFloat($('input[name=high_nokiten2_3]').val()) || 0 ;		
				var f5 = $('#high_nokiten2_3').val();
				var tru = '✔';				
				var fals = '✘'; 
				
				 
				 if (center_tiles2 <= high_nokiten2 ){
					document.getElementById("ans9_3").value = tru ;
					document.getElementById("ans9_3").style.color = "green";
				} else if (center_tiles2 >= high_nokiten2 ){
					document.getElementById("ans9_3").value = fals ;
					document.getElementById("ans9_3").style.color = "red";
				} else {
					document.getElementById("ans9_3").value = tru ;
					document.getElementById("ans9_3").style.color = "green";
				} 	
				setTimeout(myequal3_3,100);
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				}
				function myequal3(){
					var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0 ;
					var center_tiles2 = document.getElementById("center_tiles2").value;
					var judge2 = 'SEND FYI';
					//alert(R_height);
					if (R_height2 == 0 || R_height2 == '' ){
						//alert(R_height);
						//alert(center_tiles); 
						document.getElementById("demoss3").value = '' ;
					} else if (R_height2 != center_tiles2 ){
						//alert(R_height);
						document.getElementById("demoss3").value = judge2 ;
					} else {
						document.getElementById("demoss3").value = '' ;
					}
					var standard2 = document.getElementById("standard2").value;
					var exterior_denki2 = document.getElementById("exterior_denki2").value;
						if (exterior_denki2 == 'joint box' || exterior_denki2 == 'bousui socket')	{
							if (standard2 == 'balcony_2f' || standard2 == 'EWH_2f' || standard2 == 'EWL_2f'){
								document.getElementById("minimum_height2").value = '418';
							} else if (standard2 == 'balcony_3f' || standard2 == 'EWH_3f' || standard2 == 'EWL_3f'){
								document.getElementById("minimum_height2").value = '430';
							}
						}
					setTimeout(10);
				}
				function myequal3_3(){
					var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0 ;
					var center_tiles2 = document.getElementById("center_tiles2_3").value;
					var judge2 = 'SEND FYI';
					//alert(R_height);
					if (R_height2 == 0 || R_height2 == '' ){
						//alert(R_height);
						//alert(center_tiles); 
						document.getElementById("demoss3_3").value = '' ;
					} else if (R_height2 != center_tiles2 ){
						//alert(R_height);
						document.getElementById("demoss3_3").value = judge2 ;
					} else {
						document.getElementById("demoss3_3").value = '' ;
					}
					var standard2 = document.getElementById("standard2_3").value;
					var exterior_denki2 = document.getElementById("exterior_denki2_3").value;
						if (exterior_denki2 == 'joint box' || exterior_denki2 == 'bousui socket')	{
							if (standard2 == 'balcony_2f' || standard2 == 'EWH_2f' || standard2 == 'EWL_2f'){
								document.getElementById("minimum_height2_3").value = '418';
							} else if (standard2 == 'balcony_3f' || standard2 == 'EWH_3f' || standard2 == 'EWL_3f'){
								document.getElementById("minimum_height2_3").value = '430';
							}
						}
					setTimeout(10);
				}
    	
        
		//////////////////////////////////////////////////////////////////////////////////////////
/* 	 function disable() {
		var number1 = document.getElementById("dodai3").value ;
			
		  document.getElementById("exterior_denki").disabled=true;			
		  document.getElementById("exterior_denki1").disabled=true;			
		  document.getElementById("exterior_denki2").disabled=true;			
		 
		}
	function enable() {	
		
		  document.getElementById("exterior_denki").disabled=false;
		  document.getElementById("exterior_denki1").disabled=false;
		  document.getElementById("exterior_denki2").disabled=false;			
		}	 */
	
	$(document).ready(function() {
		setTimeout(disable(),500);
		function disable() {		
		  //document.getElementById("exterior_denki").disabled=true;			
		  //document.getElementById("exterior_denki1").disabled=true;			
		  //document.getElementById("exterior_denki2").disabled=true;			
		}
		

    	function compute() {
			
			var std_height = parseFloat($('input[name=std_height]').val()) || 0 ;
			var R_height = parseFloat($('input[name=R_height]').val()) || 0 ;		
						setTimeout(checkemailAvailabilityA(),100);
						setTimeout(checkemailAvailabilityB(),200);
						setTimeout(checkemailAvailabilityC(),300); 
						setTimeout(hitting,400);
			var center_tiles = (std_height - R_height) / 49 ; 
			var center_tiles1 = (R_height - std_height) / 49 ; 
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;	
			var Result5 = std_height + Result3;	
			
				
		
			//$('#center_tiles').val(Result4);
			//$('#center_tiles').val(Result5);
	
				if (R_height > std_height){
					 $('#center_tiles').val(Result5);
					//alert('try1');
				} else if(std_height > R_height ){
					 $('#center_tiles').val(Result4);
					//alert('try2');
				} 
				
        } 
        
    		 $('#std_height,#R_height,#exterior_denki').change(compute,10);
		function compute_1() {
			var std_height = parseFloat($('input[name=std_height_1]').val()) || 0 ;
			var R_height = parseFloat($('input[name=R_height_1]').val()) || 0 ;		
						setTimeout(checkemailAvailabilityA_1(),100);
						setTimeout(checkemailAvailabilityB_1(),200);
						setTimeout(checkemailAvailabilityC_1(),300); 
						setTimeout(hitting_1,400);						
			var center_tiles_1 = (std_height - R_height) / 49 ; 
			var center_tiles1_1 = (R_height - std_height) / 49 ; 
			var Result = Math.ceil(center_tiles_1);
			var Result1 = Math.floor(center_tiles1_1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;	
			var Result5 = std_height + Result3;	
			
				
		
			//$('#center_tiles_1').val(Result4);
			//$('#center_tiles_1').val(Result5);
	
				if (R_height > std_height){
					 $('#center_tiles_1').val(Result5);
					//alert('try1');
				} else if(std_height > R_height ){
					 $('#center_tiles_1').val(Result4);
					//alert('try2');
				} 
        }  
				$('#std_height_1,#R_height_1,#exterior_denki_1').change(compute_1,10);	 
    	});
		//////////////////////////////////////////////
	$(document).ready(function() {
    	function compute2() {
      
			var std_height1 = parseFloat($('input[name=std_height1]').val()) || 0 ;
			var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0 ;	
						setTimeout(checkemailAvailability1A(),100);
						setTimeout(checkemailAvailability1B(),200);
						setTimeout(checkemailAvailability1C(),300);
						setTimeout(hitting1(),400);
			var center_tiles = (std_height1 - R_height1) / 49 ; 
			var center_tiles1 = (R_height1 - std_height1) / 49 ; 
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height1 - Result2;	
			var Result5 = std_height1 + Result3;	
		
           /*   $('#center_tiles1').val(Result4);
            $('#center_tiles1').val(Result5);  */
         
		
				 if (R_height1 > std_height1){
					 $('#center_tiles1').val(Result5);
				} else if(std_height1 > R_height1 ){
					 $('#center_tiles1').val(Result4);
				} 	 
	
            }
          
    		 $('#std_height1,#R_height1').change(compute2,10);
		function compute2_2() {
      
			var std_height1 = parseFloat($('input[name=std_height1_2]').val()) || 0 ;
			var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0 ;	
						setTimeout(checkemailAvailability1A_2(),100);
						setTimeout(checkemailAvailability1B_2(),200);
						setTimeout(checkemailAvailability1C_2(),300);
						setTimeout(hitting1_2,400);
			var center_tiles = (std_height1 - R_height1) / 49 ; 
			var center_tiles1 = (R_height1 - std_height1) / 49 ; 
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height1 - Result2;	
			var Result5 = std_height1 + Result3;	
		
           /*  $('#center_tiles1_2').val(Result4);
            $('#center_tiles1_2').val(Result5); */
         
		
				if (R_height1 > std_height1){
					 $('#center_tiles1_2').val(Result5);
				} else if(std_height1 > R_height1 ){
					 $('#center_tiles1_2').val(Result4);
				} 	
	
            }
          
    		 $('#std_height1_2,#R_height1_2').change(compute2_2,10);	 
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
				} else if(std_height2 > R_height2 ){
					 $('#center_tiles2').val(Result4);
				} 
	 
			
            }
          
    		 $('#std_height2,#R_height2').change(compute3);
			 function compute3_3() {
      
			var std_height2 = parseFloat($('input[name=std_height2_3]').val()) || 0 ;
			var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0 ;	
						setTimeout(checkemailAvailability2A_3(),500);
						setTimeout(checkemailAvailability2B_3(),500);
						setTimeout(checkemailAvailability2C_3(),500);
			
			var center_tiles2_3 = (std_height2 - R_height2) / 49 ; 
			var center_tiles2_3 = (R_height2 - std_height2) / 49 ; 
			var Result = Math.ceil(center_tiles2_3);
			var Result1 = Math.floor(center_tiles2_3);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height2 - Result2;	
			var Result5 = std_height2 + Result3;	
		 
		
            $('#center_tiles2_3').val(Result4);
            $('#center_tiles2_3').val(Result5);
         
		
				if (R_height2 > std_height2){
					 $('#center_tiles2_3').val(Result5);
				} else if(std_height2 > R_height2 ){
					 $('#center_tiles2_3').val(Result4);
				} 
	 
			
            }
          
    		 $('#std_height2_3,#R_height2_3').change(compute3_3);
    	});
		/////////////////////////////
		function shio_code() {
			
					if(!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)){
					//alert('Please Input Control Number..!')
					return false
					}
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_shio_code.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email4-availability-status").html(data);
				var number3 = document.getElementById("code_number").value = document.getElementById("email3-availability-status").innerHTML;
				//setTimeout(check_PlanNumber(),500);				
				
				
				/*setTimeout(check_kanabakari(),500); */
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}  
		function check_PlanNumber() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_shio_plan_number.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var C = document.getElementById("plan_number").value = document.getElementById("email6-availability-status").innerHTML;
				var number4 = document.getElementById("code_number").value;
				var number5 = document.getElementById("dodai3").value;
				var number6 = document.getElementById("kanabakari").value;
				var result2 = 'NO NEED TO COMPUTE';
				//alert(number6);
				if (number4 != '' && number6 == '２４０＋' && number5 == '140 dodai'  ){
					document.getElementById("show").click();
				} else if (number4 != '' && number6 == '２４０+□' && number5 == '140 dodai'  ){
					document.getElementById("show").click();
				} else if (number4 != '' && number6 == '２４０+Ｔ□' && number5 == '140 dodai'  ){
					document.getElementById("show1").click();
				} else if (number4 != '' && number6 == '２４０＋Ｔ' && number5 == '140 dodai'  ){
					document.getElementById("show1").click();
				} else if (number4 != '' && number6 == '２６０+□' && number5 == '140 dodai'){
					document.getElementById("show2").click();
				} else if (number4 != '' && number6 == '２６０＋' && number5 == '140 dodai'){
					document.getElementById("show2").click();				
				} else if (number4 != '' && number6 == '２４０＋' && number5 == '89 dodai'){
					//document.getElementById("show").click();				
				} else if (number4 != '' && number6 == '２６５' && number5 == ''){
					document.getElementById("demo2").value = result2;
					document.getElementById("show3").click();
				} else if (number4 != '' && number6 == '２４０' && number5 == ''){
					document.getElementById("demo2").value = result2;	
					document.getElementById("show3").click();	
				} else if (number4 == '') {
					document.getElementById("hide").click();
				}
				 if (number4 != "" && number5 != ""){
						document.getElementById("code_number").disabled=true;
					} else {
						document.getElementById("code_number").disabled=false;
					}
				
				setTimeout(check_kanabakari(),500);
				setTimeout(check_dodai(),500);
				//setTimeout(check_prefec(),500);
				
				
				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} 
		function check_kanabakari() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_shio_kanabakari.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var kanabakari = document.getElementById("kanabakari").value = document.getElementById("email6-availability-status").innerHTML;
				var dodai = document.getElementById("dodai3").value;
				
				
				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}
		
		function check_dodai() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_shio_dodai.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var dodai = document.getElementById("dodai").value = document.getElementById("email6-availability-status").innerHTML;
				var dodai2 = document.getElementById("dodai2").value ;
				var exterior = document.getElementById("exterior_denki").value ;
				var pow = dodai.substr(0, 2);
				var pow2 = dodai.substr(2, 7);
				
				var powv1 = document.getElementById("dodai").value = pow;
			 	var powv2 = document.getElementById("dodai2").value = pow2;
				
				var dodai_140 = '140 dodai';
				var dodai_89 = '89 dodai'; 
				
				if (powv1 == '土台' && powv2 == '0200016' ){
					document.getElementById("dodai3").value = dodai_140;
				} else if (powv1 == '土台' && powv2 == '0200007' || powv1 == '土台' && powv2 == '0200008' || powv1 == '土台' && powv2 == '0200009' ){
					document.getElementById("dodai3").value = dodai_89;
				} /* /* else if(powv2 == dodai_140 ) {
					alert(powv2);
					document.getElementById("exterior").disabled = true; 
				} */else {
					document.getElementById("dodai3").value = '';
				}
				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}	
		function calculate(){
			
			//setTimeout(compute,100);
			setTimeout(checkemailAvailability,10);
			setTimeout(checkemailA,20);
			setTimeout(hitting,30);
			setTimeout(combine,40);
			//setTimeout(items,500);		
		}
		function calculate_1(){
			
			//setTimeout(compute_1,100);
			setTimeout(checkemailAvailability_1,10);
			setTimeout(checkemailA_1,20);
			setTimeout(hitting_1,30);
			setTimeout(combine,40);
			//combine();
			
		}
		function calculate1(){
			
			//setTimeout(compute,100);
			setTimeout(checkemailAvailability1,10);
			setTimeout(checkemail1A,20);
			setTimeout(hitting1,30);
			setTimeout(combine2,40);
			//setTimeout(items,500);		
		}
		function calculate1_2(){
			
			//setTimeout(compute,100);
			setTimeout(checkemailAvailability1_2,10);
			setTimeout(checkemail1A_2,20);
			setTimeout(hitting1_2,30);
			setTimeout(combine2,40);
			//setTimeout(items,500);		
		}
		function calculate2(){
			
			//setTimeout(compute,100);
			setTimeout(checkemailAvailability2,10);
			setTimeout(checkemail2A,20);
			setTimeout(hitting2,30);
			setTimeout(combine3,40);
			//setTimeout(items,500);		
		}
		function calculate2_1(){
			
			//setTimeout(compute,100);
			setTimeout(checkemailAvailability2_3,10);
			setTimeout(checkemail2A_3,20);
			setTimeout(hitting2_1,30);
			setTimeout(combine3,40);
			//setTimeout(items,500);		
		}
		/* function items() {
			
			setTimeout(combine,400);
		} */
		/* function check_prefec() {
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_shio_prefectures.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email6-availability-status").html(data);
				var prefec = document.getElementById("prefec").value = document.getElementById("email6-availability-status").innerHTML;
				
				
				
				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				} */		 		
    	</script>
		<script>
		
function showTable(){
document.getElementById('table').style.visibility = "visible";
document.getElementById('table').style.display = "inline-table";

}
function showTable1(){
document.getElementById('table2').style.visibility = "visible";
document.getElementById('table2').style.display = "inline-table";
}
function showTable2(){
document.getElementById('table3').style.visibility = "visible";
document.getElementById('table3').style.display = "inline-table";
}
function showTable3(){
document.getElementById('demo2').style.visibility = "visible";
document.getElementById('demo2').style.display = "inline-table";
}
function showTable4(){
document.getElementById('items').style.visibility = "visible";
document.getElementById('items').style.display = "";
}
function showTable5(){
document.getElementById('items2').style.visibility = "visible";
document.getElementById('items2').style.display = "";
}
function showTable6(){
document.getElementById('items3').style.visibility = "visible";
document.getElementById('items3').style.display = "";
}
  function hideTable(){
document.getElementById('items').style.display = "none";
document.getElementById('items2').style.display = "none";
document.getElementById('items3').style.display = "none";
document.getElementById('table').style.display = "none";
document.getElementById('table2').style.display = "none";
document.getElementById('table3').style.display = "none";
document.getElementById('demo2').style.display = "none"; 
}  
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
			#table #table2 #table3{
				display:block;
			}
			select {
				width: 400px; text-align-last:center;
			}
			.blink_me {
			  animation: blinker 7s linear infinite;
			} 
			@keyframes blinker {
			  60% {
				opacity: 0;
			  }
			   span {
					display:block;  
					
				}

				
		</style>
		<script src="controller/select.js" type="text/javascript"></script>
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
            <a href="index.html" class="logo"><b>DENKI COMPUTATION</b></a>
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
                      <a  href="shuudenban_new.php">
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>SHUUDENBAN CHECKING</span>
                      </a>
                     
                  </li>
				  <li class="sub-menu">
                      <a class="active" href="exterior_item_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>EXTERIOR ITEM HEIGHT</span>
                      </a>
					  <ul class="sub">
                         	<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">EXTERIOR ITEMS CENTERING OF TILE</a></li>
                      </ul>
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
			<center><label class="head">EXTERIOR ITEM HEIGHT COMPUTATION</label></center>
			<ul class="nav nav-tabs" style="font-size:20px">
				
							
			</ul>
			
						<form id="myForm0">
						<!--sample<br>
						9953459-2018 - 240+<br>
						5520458-2018 - 240+T<br>
						4750394-2017 - 260+-->
								<span>
								<td style="text-align:center;vertical-align:middle;background-color:">
								<p>* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Computation *</p>
								<p class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * 			*<span class="blink_me" style="color:red;font-size:15px">Check Plan Shio # if Latest/Not Tally</span>*</p>
								<label style="font-size:20px;color:black" class="space">Customer Code: </label>
									<input type="" name="code_number" id="code_number" onkeypress="check_PlanNumber()" onkeyup="check_PlanNumber()" onblur="check_PlanNumber()" onmouseout="check_PlanNumber()"    style="font-size:20px;width:170px;text-align:center;color:red;" maxlength="12"   />
								<label style="font-size:20px;color:black" class="space"> Plan Shio #: </label>							
									<input type="" name="plan_number" id="plan_number"   style="font-size:20px;width:170px;text-align:center;color:red"  readonly />
								<label style="font-size:20px;color:black" class="space"> Kanabakari: </label>		
									<input type="text" name="kanabakari" id="kanabakari"  style="font-size:20px;width:170px;text-align:center;color:red"  readonly />	
									<label style="font-size:20px;color:black" class="space"> Dodai: </label>		
									<input type="hidden" name="dodai" id="dodai"   style="font-size:20px;width:200px;text-align:center;color:red"   />
									<input type="hidden" name="dodai2" id="dodai2" style="font-size:20px;width:200px;text-align:center;color:red"   />
									<input type="text" name="dodai3" id="dodai3"   style="font-size:20px;width:170px;text-align:center;color:red" readonly  />
								<!--<label style="font-size:20px;color:black" class="space">	Prefec Code:</label>		
									<input type="text" name="prefec" id="prefec"   style="font-size:20px;width:200px;text-align:center;color:red"  readonly />	-->
									<span class="hidden" id="email6-availability-status"></span><br>
																		
								</td>
								</span>
								<span class="space"><input class="bg-danger" type="button" onclick="window.location.href=window.location.href" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
						
				<body onload="javascript:hideTable()">
				<input type='button' class="hide" id="show"  name="show" onClick='javascript:showTable();' value='show'>
				<input type='button' class="hide" id="show1" name="show1" onClick='javascript:showTable1();' value='show1'>
				<input type='button' class="hide" id="show2" name="show2" onClick='javascript:showTable2();' value='show2'>
				<input type='button' class="hide" id="show3" name="show3" onClick='javascript:showTable3();' value='show3'>
				<input type='button' class="hide" id="hide"  name="hide" onClick='javascript:hideTable();' value='hide'>				
					<table id="table" class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="">
								<th colspan="6"><h1>240 + (140 土台)</h1></th>					
							</div>
						</thead>
						<tbody >
							<tr >	
								
									<?php
							 function exterior_denki() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240_back");
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
							<tr height="250px">
								<td style="vertical-align:middle;width:500px">
									<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>
									<div class="col-sm-6" style="margin-left:50px;" >								
									<span>
									<!--<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center;color:black"  onchange="setTimeout(calculate,10)"  id="exterior_denki"  name="exterior_denki"  required="required">
											<option value=""></option>   
											<option><?php echo $option; ?></option>	
										</select>
												<?php	
													include_once 'include/dbcon.php';
													$query="SELECT * FROM centering_240_back WHERE exterior_denki = 'exterior_denki' ";
													$result= $db_connect->query($query);
												?>
										<br>	
										<br>
									<!--<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center" onchange="setTimeout(calculate,10)" id="standard"  name="standard"  required="required">
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
									<br>	
									<br>
									<!--<label style="font-size:20px;color:black;" class="space">Requested Height:  </label>-->								
										<input type="text" id="R_height" name="R_height"   onkeyup="setTimeout(calculate,10)" onkeypress="setTimeout(calculate,20)"   style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"  ><br><br>				
										<span class="hidden" id="email-availability-status"></span>
										<input class="bg-danger" type='button' class="" id="view" name="view" onClick='javascript:showTable4();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">
										
									</span>
									</div>
									<!--<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->	
								</td>							
								<span>	
									<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
										<input type="text" id="center_tiles" name="center_tiles" align="center" style="height:150px;width:200px;font-size:60px;color:red;text-align:center" readonly><br>
										<label style="font-size:25px;color:black;color:red" class="space">Item Height to Use</label><br>
										<input align="center" type="text" id="demoss" name="demoss" class=""    style="color:red;width:50%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
										<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
										<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
										<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->	
																	
									</td>
								</span>
								<span>
									<td style="vertical-align:middle;width:400px">
											<b style="font-size:20px" class="space">Half Size 	 	    </b>
											top <input type="text" id="top_height" name="top_height"  align="center" style="width:60px;font-size:25px;color:blue;text-align:center"  readonly>
											bottom <input type="text" id="bottom_height" name="bottom_height"  align="center" style="width:60px;font-size:25px;color:blue;text-align:center"  readonly><br><br>
											<b style="font-size:20px" class="space">Standard height  </b>																	
											<input type="text" id="std_height" name="std_height" style="width:200px;font-size:25px;color:blue;text-align:center" readonly>
											<br><br>
											<b style="font-size:20px" class="space">Minimum height </b>
											<input type="text" id="minimum_height" name="minimum_height"  align="center" style="width:200px;font-size:25px;color:blue;text-align:center"  readonly>
														  <input type="text" id="ans" name="ans" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
														  <span class="hidden" id="emailA-availability-status"></span>
											<hr>
											Reminder:
											<textarea align="center" type="text" id="demos" name="demos" class="blink_me"    style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled ></textarea>
											<b style="font-size:20px" class="space">Low Nokiten	  </b>
											<input type="text" id="low_nokiten" name="low_nokiten" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
														 <input type="text" id="ans2" name="ans2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
														 <span class="hidden" id="emailB-availability-status"></span>
											<b style="font-size:20px" class="space">High Nokiten        </b>
											<input type="text" id="high_nokiten" name="high_nokiten" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
														 <input type="text" id="ans3" name="ans3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
														  <span class="hidden" id="emailC-availability-status"></span>
														  
									</td>
								</span>			
							</tr>
							
														
							
						</tbody>
						<tbody id="items">
							<tr >
								<td colspan="3" style="height:10px;">
										<input class="hide" type="text" id="center_tiles_hit" name="center_tiles_hit" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="center_tiles_hit2" name="center_tiles_hit2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="center_tiles_hit3" name="center_tiles_hit3" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="hittings" name="hittings" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input align="center" type="text" id="good_hit" name="good_hit" class=""    style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;text-align:center;background-coor:none;" disabled >							
								</td>
							</tr>
							<tr style="border-top:2pt solid black;">	
								
									<?php
							 function exterior_denki_1() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240_back");
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
							foreach( exterior_denki_1() as $value ) {
							  $option1 .= '<option value="'.$value["exterior_denki"].'">'.$value["exterior_denki"].'</option>';
							}
							?>
							</tr>
						<form id="myFormS">		
							<tr height="250px">
							
								<td style="vertical-align:middle;width:500px">
									<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>
									<div class="col-sm-6" style="margin-left:50px;">
										<span>
										<!--<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center;color:black"  onchange="setTimeout(calculate_1,10)"   id="exterior_denki_1"  name="exterior_denki_1"  required="required">
											<option value=""></option>   
											<option><?php echo $option1; ?></option>	
										</select>
										<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering_240_back WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>
									<br>
									<br>
										<!--<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center" onchange="setTimeout(calculate_1,10)" id="standard_1"  name="standard_1"  required="required">
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
										
									<br>
									<br>
									<!--<label style="font-size:20px;color:black;" class="space">Requested Height:  </label>-->								
										<input type="text" id="R_height_1" name="R_height_1"   onkeyup="setTimeout(calculate_1,10)" onkeypress="setTimeout(calculate_1,10)"   style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"  >				
										<span class="hidden" id="email_1-availability-status"></span>
									</span>
									</div>
									<br>
									<br>
									<!--<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->	
								</td>			
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<input type="text" id="center_tiles_1" name="center_tiles_1" align="center" style="height:150px;width:200px;font-size:60px;color:red;text-align:center" readonly><br>
									<label style="font-size:25px;color:black;color:red" class="space">Item Height to Use</label><br>
									<input align="center" type="text" id="demoss_1" name="demoss_1" class=""    style="color:red;width:50%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
									<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->	
																
								</td>						
								<td style="vertical-align:middle;width:400px">
										<b style="font-size:20px" class="space">Half Size 	 	     </b>
										top <input type="text" id="top_height_1" name="top_height_1"  align="center" style="width:60px;font-size:25px;color:blue;text-align:center"  readonly>
										bottom <input type="text" id="bottom_height_1" name="bottom_height_1"  align="center" style="width:60px;font-size:25px;color:blue;text-align:center"  readonly><br><br>
										<b style="font-size:20px" class="space">Standard height  </b>									
										<input type="text" id="std_height_1" name="std_height_1" style="width:200px;font-size:25px;color:blue;text-align:center" readonly>
										<br><br>
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height_1" name="minimum_height_1"  align="center" style="width:200px;font-size:25px;color:blue;text-align:center"  readonly>
													  <input type="text" id="ans_1" name="ans_1" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="emailA_1-availability-status"></span>
										<hr>
										Reminder:
										<textarea align="center" type="text" id="demos_1" name="demos_1" class="blink_me"    style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled ></textarea>
										<b style="font-size:20px" class="space">Low Nokiten	  </b>
										<input type="text" id="low_nokiten_1" name="low_nokiten_1" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													 <input type="text" id="ans2_1" name="ans2_1" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="emailB_1-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten        </b>
										<input type="text" id="high_nokiten_1" name="high_nokiten_1" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													 <input type="text" id="ans3_1" name="ans3_1" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="emailC_1-availability-status"></span>
										
								</td>
										<input class="hide type="text" id="center_tiles_hit_1" name="center_tiles_hit_1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide type="text" id="center_tiles_hit2_1" name="center_tiles_hit2_1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide type="text" id="center_tiles_hit3_1" name="center_tiles_hit3_1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								
							
							</tr>
							
								
						</form>		
						</tbody>
					</table>
					
					<table id="table2" class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>２４０＋Ｔ (140 土台)</h1></th>						
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
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240t_back");
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
							
								<td style="vertical-align:middle;width:500px">
									<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>
									<span>
									<div class="col-sm-6" style="margin-left:50px;">
										<!--<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center;color:black" onchange="setTimeout(calculate1, 10)" id="exterior_denki1"  name="exterior_denki1"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering_240t_back WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>	
									<br>
									<br>
										<!--<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center" onchange="setTimeout(calculate1, 10)" id="standard1"  name="standard1"  required="required">
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
									<br>	
									<br>
										<!--<label style="font-size:20px;color:black;" class="space">Requested Height:  </label>-->									
										<input type="text" id="R_height1" name="R_height1" onkeyup="setTimeout(calculate1, 10),setTimeout(hitting1,20);" onkeypress="setTimeout(calculate1, 10),setTimeout(hitting1,20);" onchange="setTimeout(calculate1, 10),setTimeout(hitting1,20);" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"   >				
										<span class="hidden" id="email1-availability-status"></span><br>
									<br>	
										<input class="bg-danger" type='button' class="" id="view2" name="view2" onClick='javascript:showTable5();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">
									<br>
									<br>
									</span>
								</div>	
									<!--<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
							
								</td>
								
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<input type="text" id="center_tiles1" name="center_tiles1" align="center" style="height:150px;width:200px;font-size:60px;color:red;text-align:center" readonly><br>
									<label style="font-size:25px;color:black;color:red" class="space">Item Height to Use</label><br>
									<input align="center" type="text" id="demoss2" name="demoss2" class=""    style="color:red;width:50%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >									
									<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
								</td>
								<td style="vertical-align:middle;width:400px">
										<b style="font-size:20px" class="space">Half Size 	 	    </b>
										top <input type="text" id="top_height1" name="top_height1"  align="center" style="width:60px;font-size:25px;color:blue;text-align:center"  readonly>
										bottom <input type="text" id="bottom_height1" name="bottom_height1"  align="center" style="width:60px;font-size:25px;color:blue;text-align:center"  readonly><br><br>	
										<b style="font-size:20px" class="space">Standard height  </b>									
										<input type="text" id="std_height1" name="std_height1" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>					
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height1" name="minimum_height1"  align="center" style="width:200px;font-size:25px;color:blue;text-align:center"  readonly>
													  <input type="text" id="ans4" name="ans4" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1A-availability-status"></span>
										<hr>
										Reminder:
										<textarea align="center" type="text" id="demos2" name="demos2" class="blink_me"    style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled ></textarea>
										<b style="font-size:20px" class="space">Low Nokiten	  </b>
										<input type="text" id="low_nokiten1" name="low_nokiten1" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													 <input type="text" id="ans5" name="ans5" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1B-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten        </b>
										<input type="text" id="high_nokiten1" name="high_nokiten1" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													  <input type="text" id="ans6" name="ans6" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1C-availability-status"></span>
										
										<input class="hide" type="text" id="center_tiles_hit1_2" name="center_tiles_hit1_2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit2_2" name="center_tiles_hit2_2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_2" name="center_tiles_hit3_2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>	
									<input class="hide" type="text" id="hittings2" name="hittings2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								</td>
							</tr>					
							<br>	
						</tbody>
						<tbody id="items2">
							<tr>
								<td colspan="3">
										<input align="center" type="text" id="good_hit2" name="good_hit2"     style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
								</td>
							</tr>	
							<tr style="border-top:2pt solid black;">	
								
									<?php
							 function exterior_denki1_2() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240t_back");
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
							foreach( exterior_denki1_2() as $value ) {
							  $option .= '<option value="'.$value["exterior_denki"].'">'.$value["exterior_denki"].'</option>';
							}
							?>
							</tr>
							
							<tr>
							
								<td style="vertical-align:middle;width:500px">
									<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>
									<div class="col-sm-6" style="margin-left:50px;">
									<span>
									<!--<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center;color:black" onchange="setTimeout(calculate1_2, 10)" id="exterior_denki1_2"  name="exterior_denki1_2"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering_240t_back WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>	
									<br>
									<br>
									<!--<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center" onchange="setTimeout(calculate1_2, 10)" id="standard1_2"  name="standard1_2"  required="required">
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
									<br>	
									<br>
										<!--<label style="font-size:20px;color:black;" class="space">Requested Height:  </label>-->									
										<input type="text" id="R_height1_2" name="R_height1_2" onkeyup="setTimeout(calculate1_2, 10)" onkeypress="setTimeout(calculate1_2, 10)" onchange="setTimeout(calculate1_2, 10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"   >				
										<span class="hidden" id="email1_2-availability-status"></span>	
									<br>
									<br>
									</span>
								</div>	
									<!--<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
							
								</td>
								
								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<input type="text" id="center_tiles1_2" name="center_tiles1_2" align="center" style="height:150px;width:200px;font-size:60px;color:red;text-align:center" readonly><br>
									<label style="font-size:25px;color:black;color:red" class="space">Item Height to Use</label><br>
									<input align="center" type="text" id="demoss2_2" name="demoss2_2" class=""    style="color:red;width:50%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >									
									<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
								</td>
								<td style="vertical-align:middle;width:400px">
										<b style="font-size:20px" class="space">Half Size 	 	    </b>
										top <input type="text" id="top_height1_2" name="top_height1_2" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
										bottom <input type="text" id="bottom_height1_2" name="bottom_height1_2" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<b style="font-size:20px" class="space">Standard height  </b>									
										<input type="text" id="std_height1_2" name="std_height1_2" style="width:200px;font-size:25px;color:blue;text-align:center" readonly>
										<br><br>
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height1_2" name="minimum_height1_2"  align="center" style="width:200px;font-size:25px;color:blue;text-align:center"  readonly>
													  <input type="text" id="ans4_2" name="ans4_2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1A_2-availability-status"></span>
										<hr>
										Reminder:
										<textarea align="center" type="text" id="demos2_2" name="demos2_2" class="blink_me"    style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled ></textarea>
										<b style="font-size:20px" class="space">Low Nokiten	  </b>
										<input type="text" id="low_nokiten1_2" name="low_nokiten1_2" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													 <input type="text" id="ans5_2" name="ans5_2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1B_2-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten        </b>
										<input type="text" id="high_nokiten1_2" name="high_nokiten1_2" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													  <input type="text" id="ans6_2" name="ans6_2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email1C_2-availability-status"></span>
										
										<input class="hide" type="text" id="center_tiles_hit1_21" name="center_tiles_hit1_21" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit2_22" name="center_tiles_hit2_22" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_23" name="center_tiles_hit3_23" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>	
								</td>
							</tr>
							
								
						</form>	
						<br>	
							</tbody>	
					</table>		
					
					
					<table id="table3" class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
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
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_260_back");
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
							
								<td style="vertical-align:middle;width:500px">
									<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>
									<div class="col-sm-6" style="margin-left:50px;">
									<!--<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;-->
									<span>	
										<select  style="height:50px;width:100%;font-size:25px;text-align:center;color:black" onchange="setTimeout(calculate2, 10)" id="exterior_denki2"  name="exterior_denki2"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
									<br>	
									<br>	
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering_260_back WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>	
									<!--<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center" onchange="setTimeout(calculate2, 10)" id="standard2"  name="standard2"  required="required">
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
										<br>
										<br>
									<!--<label style="font-size:20px;color:black;" class="space">Requested Height:  </label>-->									
										<input type="text" id="R_height2" name="R_height2" onkeyup="setTimeout(calculate2, 10)" onkeypress="setTimeout(calculate2, 10)" onchange="setTimeout(calculate2, 10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"   >				
										<span class="hidden" id="email2-availability-status"></span>
									<br>
									<br>
									<input class="bg-danger" type='button' class="" id="view3" name="view3" onClick='javascript:showTable6();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">
									<!--<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->	
									</span>
									</div>
								</td>

								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<input type="text" id="center_tiles2" name="center_tiles2" align="center" style="height:150px;width:200px;font-size:60px;color:red;text-align:center" readonly><br>
									<label style="font-size:25px;color:black;color:red" class="space">Item Height to Use</label><br>																	
									<input align="center" type="text" id="demoss3" name="demoss3" class=""    style="color:red;width:50%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
									<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
								</td>
							
								<td style="vertical-align:middle;width:400px">
										<b style="font-size:20px" class="space">Half Size 	 	    </b>
										top <input type="text" id="top_height2_1" name="top_height2_1" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
										bottom <input type="text" id="bottom_height2_1" name="bottom_height2_1" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<b style="font-size:20px" class="space">Standard height  </b>									
										<input type="text" id="std_height2" name="std_height2" style="width:200px;font-size:25px;color:blue;text-align:center" readonly>
										<br><br>
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height2" name="minimum_height2"  align="center" style="width:200px;font-size:25px;color:blue;text-align:center"  readonly>
													<input type="text" id="ans7" name="ans7" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2A-availability-status"></span>
										<hr>
										Reminder:
										<textarea align="center" type="text" id="demos3" name="demos3" class="blink_me"    style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled ></textarea>
										<b style="font-size:20px" class="space">Low Nokiten	  </b>
										<input type="text" id="low_nokiten2" name="low_nokiten2" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans8" name="ans8" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2B-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten        </b>
										<input type="text" id="high_nokiten2" name="high_nokiten2" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans9" name="ans9" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2C-availability-status"></span>
										
										<input class="hide" type="text" id="center_tiles_hit3_x" name="center_tiles_hit3_x" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_y" name="center_tiles_hit3_y" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_z" name="center_tiles_hit3_z" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>	
									<input class="hide" type="text" id="hittings3" name="hittings3" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								</td>
							</tr>
							
						
						<center><input type="text" class="hide" id="demo2" name="demo2" onClick='javascript:showTable3();' style="font-size:50px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" disabled></center>					
					</tbody>
					<tbody id="items3">
							<tr>
								<td colspan="3">
										<input align="center" type="text" id="good_hit3" name="good_hit3" class=""    style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
								</td>
							</tr>
							<tr style="border-top:2pt solid black;">	
								
									<?php
							 function exterior_denki2_3() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_260_back");
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
							foreach( exterior_denki2_3() as $value ) {
							  $option .= '<option value="'.$value["exterior_denki"].'">'.$value["exterior_denki"].'</option>';
							}
							?>
							</tr>
							
							<tr>
							
								<td style="vertical-align:middle;width:500px">
									<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>
									<div class="col-sm-6" style="margin-left:50px;">
									<span>
										<!--<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center;color:black" onchange="setTimeout(calculate2_1, 10)" id="exterior_denki2_3"  name="exterior_denki2_3"  required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>	
										</select>
									<br>	
									<br>	
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM centering_260_back WHERE exterior_denki = 'exterior_denki' ";
										$result= $db_connect->query($query);
									?>	
										<!--<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;-->
										<select  style="height:50px;width:100%;font-size:25px;text-align:center" onchange="setTimeout(calculate2_1, 10)" id="standard2_3"  name="standard2_3"  required="required" >
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
										<br>
										<br>
										<!--<label style="font-size:20px;color:black;" class="space">Requested Height:  </label>-->									
										<input type="text" id="R_height2_3" name="R_height2_3" onkeyup="setTimeout(calculate2_1, 10)" onkeypress="setTimeout(calculate2_1, 10)" onchange="setTimeout(calculate2_1, 10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"   >				
										<span class="hidden" id="email2-availability-status"></span>
									<br>
									<br>
									</span>
									</div>
									<!--<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->	
								</td>

								<td style="text-align:center;vertical-align:middle;background-color:">										  					 											
									<input type="text" id="center_tiles2_3" name="center_tiles2_3" align="center" style="height:150px;width:200px;font-size:60px;color:red;text-align:center" readonly><br>
									<label style="font-size:25px;color:black;color:red" class="space">Item Height to Use</label><br>																	
									<input align="center" type="text" id="demoss3_3" name="demoss3_3" class=""    style="color:red;width:50%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
									<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
								</td>
							
								<td style="vertical-align:middle;width:400px">
										<b style="font-size:20px" class="space">Half Size 	 	    </b>
										top <input type="text" id="top_height2_3" name="top_height2_3" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
										bottom <input type="text" id="bottom_height2_3" name="bottom_height2_3" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<b style="font-size:20px" class="space">Standard height  </b>									
										<input type="text" id="std_height2_3" name="std_height2_3" style="width:200px;font-size:25px;color:blue;text-align:center" readonly>								
										<br><br>
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height2_3" name="minimum_height2_3"  align="center" style="width:200px;font-size:25px;color:blue;text-align:center"  readonly>
													<input type="text" id="ans7_3" name="ans7_3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2A_3-availability-status"></span>
										<hr>
										Reminder:
										<textarea align="center" type="text" id="demos3_3" name="demos3_3" class="blink_me"    style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled ></textarea>
										<b style="font-size:20px" class="space">Low Nokiten	  </b>
										<input type="text" id="low_nokiten2_3" name="low_nokiten2_3" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans8_3" name="ans8_3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2B_3-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten        </b>
										<input type="text" id="high_nokiten2_3" name="high_nokiten2_3" align="center" style="width:200px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans9_3" name="ans9_3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													  <span class="hidden" id="email2C_3-availability-status"></span>
										
										<input class="hide" type="text" id="center_tiles_hit3_x1" name="center_tiles_hit3_x1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_y2" name="center_tiles_hit3_y2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_z3" name="center_tiles_hit3_z3" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>	
								</td>
							</tr>
							
						</form>	
						<center><input type="text" class="hide" id="demo2" name="demo2" onClick='javascript:showTable3();' style="font-size:50px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" disabled></center>					
						</tbody>
					</table>
					</form>		
				</body>
              <!-- page end-->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

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
 <script>
	$(document).ready(function() { 
		
			/* var number5 = document.getElementById("code_number").value;
			var number6 = document.getElementById("exterior_denki").value;
			if(number5 == ''){
				alert('try');
				document.getElementById("exterior_denki").disabled = true;
			}else if (number6 != ''){
				alert('try1');
				document.getElementById("exterior_denki").disabled = false;
			} 
		 */
    	});	
	function myFunction0() {
    document.getElementById("myForm0").reset();   
	}
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

  </body>
</html>

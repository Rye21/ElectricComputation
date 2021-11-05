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
				//document.getElementById("demo1").value = '';	 
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
				if(number4 != ''){
					setTimeout(check_contract(),500);
					setTimeout(kva_check(),500);
					setTimeout(check_OptionPicking(),500);
					setTimeout(check_PlanNumber(),500);
					//setTimeout(check_powercon(),2000);
				}else{
					document.getElementById("demo").value = '';
					document.getElementById("demo1").value = '';
					
					document.getElementById('electric_company').style.backgroundColor = "";
				}
			
				////////////////////////////////////////////////////////////////////////
				if(number4== 3){
					document.getElementById("electric_company").value = 'TOHOUKU(東北電力)';
					$("#electric_company").css('background-color','green');
					
				}else if(number4== 6){
					document.getElementById("electric_company").value = 'CHUBU(中部電力)';
					$("#electric_company").css('background-color','red');
					
				}else if(number4== 4){
					document.getElementById("electric_company").value = 'TOKYOU(東京電力)';
					$("#electric_company").css('background-color','blue');
					
				}else if(number4== 5){
					document.getElementById("electric_company").value = 'HOKURIKU(北陸電力)';
					$("#electric_company").css('background-color','violet');
					
				}else if(number4== 7){
					document.getElementById("electric_company").value = 'KANSAI(関西電力)';
					$("#electric_company").css('background-color','yellow');
					
				}else if(number4== 8){
					document.getElementById("electric_company").value = 'CHUGOKU(中国電力)';
					$("#electric_company").css('background-color','brown');
					
				}else if(number4== 9){
					document.getElementById("electric_company").value = 'SHIKOKU(四国電力)';
					$("#electric_company").css('background-color','pink');
					
				}else if(number4== 10){
					document.getElementById("electric_company").value = 'KYUUSHU(九州電力)';
					$("#electric_company").css('background-color','#66ffff');
					
				}else if(number4== 2){
					document.getElementById("electric_company").value = 'HOKKAIDOU(北海道電力)';
					$("#electric_company").css('background-color','#009999');					
				}
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
					//alert('NO NEED TO COMPUTE !! ITS 10kW ( below ) !!');
					//document.getElementById("contract_kind").disabled = true;
					//document.getElementById("code_number").disabled = true;
					//document.getElementById("electric_contract").disabled = true;
					//document.getElementById("powercon_1").disabled = true;
					//document.getElementById("powercon_2").disabled = true;
					document.getElementById("demo1").value = judge1;
					document.getElementById("demo1").style.color = "red";
				 /* else{
					document.getElementById("electric_contract").disabled = false;
					document.getElementById("powercon_1").disabled = false;
					document.getElementById("powercon_2").disabled = false;		
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";	
				} */
				} else if (number6 != '' && number7 !=''){
					//alert ('try');
					//document.getElementById("electric_contract").disabled = true;
					document.getElementById("powercon_1").disabled = true;
					document.getElementById("powercon_2").disabled = true;
					//document.getElementById("code_number").disabled = true;
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";
				}else if (number6 != '' && number7 !='' && number8 != '' ){
					//alert('x');
					document.getElementById("electric_contract").disabled = true;
					document.getElementById("powercon_1").disabled = true;
					document.getElementById("powercon_2").disabled = true;
					document.getElementById("code_number").disabled = true;
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";
				}else{
					//alert('y');
					document.getElementById("electric_contract").disabled = false;
					document.getElementById("powercon_1").disabled = false;
					document.getElementById("powercon_2").disabled = false;		
					document.getElementById("demo1").value = judge;
					document.getElementById("demo1").style.color = "green";
					/* document.getElementById("electric_contract").disabled = false;
					document.getElementById("powercon_1").disabled = false;
					document.getElementById("powercon_2").disabled = false;	 */
				}	 
				//document.getElementById("contract_kind").value = number5;
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
				
				checkemailAvailability();
				var number9 = document.getElementById("code_number").value;
				
				//document.getElementById("contract_kind").value = number5;
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
				var D = $('#demo').val();
				var option = 'OK(✔)';
				var option1 = 'NOT TALLY(✘)';
				var results = 'Pattern A No Need Shuudenban=(✘)';
				var results1 = 'Pattern B Need Shuudenban=(✔)';
				var results2 = 'Pattern A Need Shuudenban=(✔)';
				var results7 = 'NO SHUUDENBAN';
				setTimeout(500);
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
									
				
				//setTimeout(checkemailAvailability2(),500); 
				
				
				//document.getElementById("option_p").value = B;
				//setTimeout(check_powercon(),2000);
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
				
				//setTimeout(checkemailAvailability2(),500); 
				
				
				document.getElementById("plan_number").value = D;
				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
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
		</style>
		
	<script src="controller/select.js" type="text/javascript"></script>
	<script src="index.js"></script>
	<section id="main-content">			
        <section class="wrapper"><br>
			<center><label style="font-size:35px;font-family: arial black">SHUUDENBAN COMPUTATION</label></center>
			<ul class="nav nav-tabs" style="font-size:20px">
				<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Shuudenban Computation for Each Electric Company</a></li>
							
			</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>Shuudenban for Each Electric Company</h1></th>					
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
								<td style="text-align:center;vertical-align:middle;background-color:">
								<p>* Press<span style="color:red"> ENTER </span>after you put the Customer Code *</p>
								<label style="font-size:25px;color:black">Customer Code:</label>
									<input type="" name="code_number" id="code_number" onkeypress="kva_check1()" onkeyup="kva_check1()" onblur="kva_check1()" onmousemove="kva_check1()"   style="font-size:20px;width:200px;text-align:center;color:red;" maxlength="12"   />
									
								<label style="font-size:25px;color:black">Plan Number:</label>		
									<input type="" name="plan_number" id="plan_number"   style="font-size:20px;width:200px;text-align:center;color:red"  readonly="readonly"  />
									<span class="hidden" id="email6-availability-status"></span><br>
									<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">
									<p>Plan Number : <select id="plan_sp_number"></select></p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
								<label style="font-size:25px;color:black">Electric Company:</label>	
									<input type="text" name="electric_company1" id="electric_company1"  style="font-size:20px;width:300px;text-align:center;color:black"  class="hide" />
									<select type="" name="electric_company" id="electric_company"  onchange="kva_check1()" style="font-size:20px;width:300px;text-align:center;color:black;height:50px;" >
										<option value=""></option>
										<option style="width:50px;height:20px;background-color:red;" value="CHUBU(中部電力)"><span style="color:red;">CHUBU(中部電力)</span></option>
										<option style="width:50px;height:20px;background-color:green;" value="TOHOUKU(東北電力)">TOHOUKU(東北電力)</option>
										<option style="width:50px;height:20px;background-color:#3333ff;" value="TOKYOU(東京電力)">TOKYOU(東京電力)</option>
										<option style="width:50px;height:20px;background-color:violet;" value="HOKURIKU(北陸電力)">HOKURIKU(北陸電力)</option>
										<option style="width:50px;height:20px;background-color:#009999;" value="HOKKAIDOU(北海道電力)">HOKKAIDOU(北海道電力)</option>
										<option style="width:50px;height:20px;background-color:yellow;"value="KANSAI(関西電力)">KANSAI(関西電力)</option>
										<option style="width:50px;height:20px;background-color:brown;" value="CHUGOKU(中国電力)">CHUGOKU(中国電力)</option>
										<option style="width:50px;height:20px;background-color:pink;" value="SHIKOKU(四国電力)">SHIKOKU(四国電力)</option>
										<option style="width:50px;height:20px;background-color:#66ffff;"value="KYUUSHU(九州電力)">KYUUSHU(九州電力)</option>
									</select>
									<span class="hidden" id="email3-availability-status"></span>
								<!--<label style="font-size:25px;color:black">Contract kind:</label>-->	
									<input type="hidden" name="contract_kind" id="contract_kind"  style="font-size:20px;width:300px;text-align:center;color:black"   />									
									<!--<input type="" name="option_p" id="option_p"  style="font-size:20px;width:300px;text-align:center;color:black;color:red" readonly="readonly"  />-->									
									<input type="text" id="demo1"  style="width:350px;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									<span class="hidden" id="email4-availability-status"></span>	
									
								</td>
							</tr>
							<tr>
							
								<td style="text-align:center;vertical-align:middle;background-color:">
								<label style="font-size:25px;color:black">KVA</label>
									<input class="hidden" type="text" name="KVA" id="KVA"  onkeyup="checkemailAvailability2()"style="font-size:25px;width:200px;text-align:center"  />
									<span class="hidden" id="email2-availability-status"></span>	
									<label style="font-size:18px;color:black"></label>&nbsp;
										<select  style="font-size:25px;text-align:center" id="electric_contract"  name="electric_contract" onchange="checkemailAvailability3(),check_OptionPicking()" required="required">
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['electric_contract']?>"><?php echo $row['electric_contract']?></option>
											<?php } ?>
										</select>
									<label style="font-size:25px;color:red">Main Breaker =</label>
									<input type="" name="main_breaker" id="main_breaker" style="font-size:30px;width:100px;text-align:center;color:blue"  disabled />	
									<span class="hidden" id="email-availability-status"></span>	
								</td>
							</form>
							<!--<div id="content"></div>-->
							
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT DISTINCT powercon_1 FROM shudenban limit 6";
										$result= $db_connect->query($query);
									?>
							</tr>
								
								<td style="text-align:center;vertical-align:middle;margin:auto;">
									<label style="font-size:18px;color:black">PowerCon 1</label>&nbsp;
										<select  style="font-size:25px;text-align:center" id="powercon_1"  name="powercon_1" onchange="checkemailAvailability()" required="required">
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['powercon_1']?>"><?php echo $row['powercon_1']?></option>
											<?php } ?>
										</select> 
										<?php	
										include_once 'include/dbcon.php';
										$query="SELECT DISTINCT powercon_2 FROM shudenban limit 6";
										$result= $db_connect->query($query);
									?>
									<label style="font-size:18px;color:black">PowerCon 2</label>&nbsp;
										<select   style="font-size:25px;text-align:center" id="powercon_2"  name="powercon_2" onchange="checkemailAvailability()" required="required">
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['powercon_2']?>"><?php echo $row['powercon_2']?></option>
											<?php } ?>
										</select><br>	
									<label style="font-size:25px;color:red">Solar Breaker =</label>
										<input type="" name="solar_breaker" id="solar_breaker" value="" style="font-size:30px;width:100px;text-align:center;color:blue" disabled  />	
										<span class="hidden" id="email-availability-status"></span>									
								</td>
							</tr><tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;">										  					 											
							
									<label style="font-size:25px;color:black;" class="space">		Result:</label>									
										<input type="text" id="demo" name="demo"  style="width:520px;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;" disabled>
											
								</td>												
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;margin:auto;">
								<label align="center" style="font-size:25px;color:black;" class="space">		Status:</label>
								<input align="center" type="text" id="demo2" name="demo2"   style="width:200px;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >
								<label align="center" style="font-size:25px;color:black;" class="space">		O.P:</label>
								<input type="" name="option_p" id="option_p"  style="font-size:20px;width:300px;text-align:center;color:black;color:red" readonly="readonly"  />		
										<span class="hidden" id="email5-availability-status"></span>
												
								</td>
							</tr>
							<tr>
								<td>
									<input class="hidden" type="text" name="Inverter55Qty" id="Inverter55Qty"  style="font-size:25px;width:200px;text-align:center"  />
									<input class="hidden" type="text" name="Inverter80Qty" id="Inverter80Qty" style="font-size:25px;width:200px;text-align:center"  />
									<input class="hidden" type="text" name="Inverter99Qty" id="Inverter99Qty"  style="font-size:25px;width:200px;text-align:center"  />
									<span class="hidden" id="email6-availability-status"></span>
								</td>
							</tr>
						</tbody>
					</table>	
				</form>
				<div class="col-sm-3">
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
					
				</div>
			
			</div>
			
		</div>								
	</section>								
</section>
								

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
	 function compute() {
              var res = document.getElementById("solar_breaker").value;
              var res2 = parseInt(res);
			  var res3 = document.getElementById("main_breaker").value;
			  var res4 = parseInt(res3);
			  var electric_company = $('#electric_company').val();
			  var contract_kind = $('#contract_kind').val();
			  var powercon_1 = $('#powercon_1').val();
			  var powercon_2 = $('#powercon_2').val();
			  var plan_number = $('#plan_number').val();
			  var control_number = $('#control_number').val();
			  var option_p = $('#option_p').val();
			  
			  var KVA = $('#KVA').val();

				var results = 'Pattern A No Need Shuudenban=(✘)';
				var results1 = 'Pattern B Need Shuudenban=(✔)';
	 
				var results2 = 'Pattern A Need Shuudenban=(✔)';
				var results6 = 'NO SOLAR';
				var results7 = 'NO SHUUDENBAN';
				
				
				var option = 'OK(✔)';
				var option1 = 'NOT TALLY';
				
				
				if (KVA == '' && electric_company == '' && powercon_1 == '' && powercon_2 == '' && option_p == ''  ){
					alert('NO SOLAR !! Please Check !!');
					document.getElementById("demo").value = results7;
					document.getElementById("demo2").value = option;
					document.getElementById("demo").style.color = "red";
					document.getElementById("demo2").style.color = "blue";
					//document.getElementById("demo2").value = '';
				} else if (contract_kind != 1 ){
				 document.getElementById("demo").value = results7;
				 document.getElementById("demo").style.color = "red";
				} else if ((electric_company == 'KANSAI(関西電力)'  || electric_company == 'SHIKOKU(四国電力)' || electric_company == 'CHUGOKU(中国電力)' || electric_company == 'KYUUSHU(九州電力)'  ) 
				&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW') && contract_kind != 1 ){
				//alert ('try1');
				document.getElementById("demo").value = results7;
				//document.getElementById("demo").style.color = "green";
				} else if ((electric_company == 'KANSAI(関西電力)' || electric_company == 'SHIKOKU(四国電力)' || electric_company == 'CHUGOKU(中国電力)' || electric_company == 'KYUUSHU(九州電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW')&& contract_kind == 1)  {
					//alert ('Pattern A No need Shuudenban=(✘)');
					document.getElementById("demo").value = results;
					document.getElementById("demo").style.color = "green";
				} else if ((electric_company == 'KANSAI(関西電力)' || electric_company == 'SHIKOKU(四国電力)' || electric_company == 'CHUGOKU(中国電力)' || electric_company == 'KYUUSHU(九州電力)'  ) 
					&& (powercon_2 == '8.0kW' || powercon_2 == '9.9kW' )){
					//alert ('Pattern B need Shuudenban=(✔)');
					document.getElementById("demo").value = results1;
					document.getElementById("demo").style.color = "red";
				//////////////////////////////////////////////
				} else if ((electric_company == 'HOKKAIDOU(北海道電力)' || electric_company == 'TOHOUKU(東北電力)' || electric_company == 'TOKYOU(東京電力)' || electric_company == 'HOKURIKU(北陸電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW')&& contract_kind != 1 ){
					//alert ('try4');
					document.getElementById("demo").value = results7;
					document.getElementById("demo").style.color = "red";
				} else if ((electric_company == 'HOKKAIDOU(北海道電力)' || electric_company == 'TOHOUKU(東北電力)' || electric_company == 'TOKYOU(東京電力)' || electric_company == 'HOKURIKU(北陸電力)'  ) 
					&& (powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW') && contract_kind == 1 ){
					//alert ('Pattern A No need Shuudenban=(✘)');
					document.getElementById("demo").value = results;
					document.getElementById("demo").style.color = "green";
				} else if ((electric_company == 'HOKKAIDOU(北海道電力)' || electric_company == 'TOHOUKU(東北電力)' || electric_company == 'TOKYOU(東京電力)' || electric_company == 'HOKURIKU(北陸電力)' ) 
					&& (powercon_2 == '8.0kW' || powercon_2 == '9.9kW' )){
					//alert ('Pattern A Need Shuudenban=(✔)');
					document.getElementById("demo").value = results2;
					document.getElementById("demo").style.color = "red";
				} else if (electric_company == 'CHUBU(中部電力)' && res2 > res4 && contract_kind != 1)   {
					//alert ('try7');
					document.getElementById("demo").value = results7;
					document.getElementById("demo").style.color = "red";
						//////////////////////////////////////////////
				} else if (electric_company == 'CHUBU(中部電力)' && res2 > res4 && contract_kind == 1 )   {
					//alert ('Pattern B Need Shuudenban=(✔)');
					document.getElementById("demo").value = results1 ;
					document.getElementById("demo").style.color = "red";
				} else if(electric_company == 'CHUBU(中部電力)' && res4 == res2 && (powercon_1 == '8.0kW' || powercon_1 == '9.9kW') && powercon_2 != '8.0kW'){
					//alert ('Pattern B Need Shuudenban=(✔)');
					document.getElementById("demo").value = results1;
					document.getElementById("demo").style.color = "red";
				} else if(electric_company == 'CHUBU(中部電力)' && res4 == res2 ){
					//alert ('Pattern A No Need Shuudenban=(✘)');
					document.getElementById("demo").value = results;
					document.getElementById("demo").style.color = "green";
				} else if (electric_company == 'CHUBU(中部電力)' && res2 < res4)  {
					//alert ('Pattern A No Need Shuudenban=(✘)');
					document.getElementById("demo").value = results;
					document.getElementById("demo").style.color = "green";
					///////////////For PDR//////////////
				} else if(KVA == '' && electric_company == '' && powercon_1 != '' && powercon_2 != '' ){						
					document.getElementById("demo").value = results7;
					document.getElementById("demo").style.color = "red";	
				} else if(powercon_2 == '8.0kW' || powercon_2 == '9.9kW' ){
					//alert ('Pattern B need Shuudenban=(✔)');
					document.getElementById("demo").value = results1;
					document.getElementById("demo").style.color = "red";
				} else if(KVA == '' && electric_company == 'CHUBU(中部電力)' && powercon_1 == '5.5kW' && powercon_2 == '5.5kW' || powercon_1 == '5.5kW' && powercon_2 == '8.0kW' || powercon_1 == '5.5kW' && powercon_2 == '9.9kW' || powercon_1 == '8.0kW' && powercon_2 == '8.0kW' ){
					//alert ('Pattern B need Shuudenban=(✔)');	
					document.getElementById("demo").value = results1;
					document.getElementById("demo").style.color = "red";
				}	
					
				//集電盤	
			} 
</script>


<?php include ('footer.php'); ?>


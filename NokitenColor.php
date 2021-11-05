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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 12";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 12";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
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

	<title>INTERPHONE COMPOSITION CHECKING</title>

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
			background-color: rgba(0, 0, 0, 0.3);
			position: absolute;
			top: 0;
			width: 100%;
			height: 100%;
			left: 0px;
			z-index: 10000;
			background-image: url(tp.png);
			/* required by MSIE to prevent actions on lower z-index elements */
		}

		#alertBox {
			position: relative;
			width: 33%;
			min-height: 100px;
			max-height: 400px;
			margin-top: 50px;
			border: 1px solid #fff;
			background-color: #fff;
			background-repeat: no-repeat;
			top: 30%;
		}

		#modalContainer>#alertBox {
			position: fixed;
		}

		#alertBox h1 {
			margin: 0;
			font: bold 1em Raleway, arial;
			background-color: red;
			color: #FFF;
			border-bottom: 1px solid #f97352;
			padding: 10px 0 10px 5px;
		}

		#alertBox p {
			height: 120px;
			padding-left: 5px;
			padding-top: 30px;
			text-align: center;
			vertical-align: middle;
			font-size: 30px;
			color: black;
		}

		#alertBox #closeBtn {
			display: block;
			position: relative;
			margin: 10px auto 10px auto;
			padding: 7px;
			border: 0 none;
			width: 70px;
			text-transform: uppercase;
			text-align: center;
			color: #FFF;
			background-color: red;
			border-radius: 0px;
			text-decoration: none;
			outline: 0 !important;
		}

		/* unrelated styles */

		#mContainer {
			position: relative;
			width: 600px;
			margin: auto;
			padding: 5px;
			border-top: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}

		h1,
		h2 {
			margin: 0;
			padding: 4px;
		}

		code {
			font-size: 1.2em;
			color: #069;
		}

		#credits {
			position: relative;
			margin: 25px auto 0px auto;
			width: 350px;
			font: 0.7em verdana;
			border-top: 1px solid #000;
			border-bottom: 1px solid #000;
			height: 90px;
			padding-top: 4px;

		}

		#credits img {
			float: left;
			margin: 5px 10px 5px 0px;
			border: 1px solid #000000;
			width: 80px;
			height: 79px;
		}

		.important {
			background-color: #F5FCC8;
			padding: 2px;

		}

		@media (max-width: 600px) {
			#alertBox {
				position: relative;
				width: 90%;
				top: 30%;
			}
		}
	</style>
	<script>
		var ALERT_TITLE = "Attention!!";
		var ALERT_BUTTON_TEXT = "Ok";

		if (document.getElementById) {
			window.alert = function(txt) {
				createCustomAlert(txt);
			}
		}

		function createCustomAlert(txt) {
			d = document;

			if (d.getElementById("modalContainer")) return;

			mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
			mObj.id = "modalContainer";
			//mObj.style.height = d.documentElement.scrollHeight + "px";

			alertObj = mObj.appendChild(d.createElement("div"));
			alertObj.id = "alertBox";
			if (d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
			alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth) / 2 + "px";
			alertObj.style.visiblity = "visible";

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
			btn.onclick = function() {
				removeCustomAlert();
				return false;
			}

			alertObj.style.display = "block";

		}

		function removeCustomAlert() {
			document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
		}

		function ful() {
			alert('NO NEED TO COMPUTE !! ITS 10kW ( below ) !!');
		}
	</script>
	<script>
		//集電盤


		//////////////////////kva_check1/////////////////////


		function shio_code() {

			if (!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {

				//alert('Please Input Control Number..!')
				return false
			}
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_code.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var number3 = document.getElementById("code_number").value = document.getElementById("email-availability-status").innerHTML;


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			jQuery.ajax({
				url: "check/check_shio_plan_number.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var C = document.getElementById("plan_number").value = document.getElementById("email-availability-status").innerHTML;

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			jQuery.ajax({
				url: "check/check_shio_kanabakari.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var kanabakari = document.getElementById("kanabakari").value = document.getElementById("email-availability-status").innerHTML;

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			////////houseTypes///////
			jQuery.ajax({
				url: "check/check_houseTypes.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var houseTypes = document.getElementById("houseTypes").value = document.getElementById("email-availability-status").innerHTML;
					var houses = document.getElementById("houseTypes").value;
					if (houses == '0010' || houses == '0030' || houses == '0040') {
						document.getElementById("houseTypes").value = 'JIKU';
					} else {
						document.getElementById("houseTypes").value = 'WAKU';
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			////colorShanai//////
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_colorShanai.php",
				data: 'code_number=' + $("#code_number").val() +
					'&colorShanai=' + $("#colorShanai").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var colorShanai = document.getElementById("colorShanai").value = document.getElementById("email-availability-status").innerHTML;
					var colorShanai = document.getElementById("colorShanai").value;
					var colorShanaiOthers = document.getElementById("colorShanaiOthers").value;
					//console.log(colorShanaiOthers);

					if (colorShanai == '外壁色合せ' || colorShanai == '外壁同色') {
						document.getElementById("outDoorLightColor").value = '-';
						colorShanai2();
					} else if (colorShanai == '') {

						document.getElementById("outDoorLightColor").value = 'white';
						document.getElementById("colorShanai").value = '-';
					}
					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			////colorShanai//////
			var colorShanai = document.getElementById("colorShanai").value;
			if (colorShanai == '外壁色合せ' || colorShanai == '外壁同色' || colorShanai == '') {
				dataPath1 = 'colorShanai1=' + $("#colorShanaiOthers").val();
				dataPath2 = 'colorShanai2=' + $("#colorShanaiOthers2").val();
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "check/check_outDoorLight1.php",
					data: dataPath1,
					type: "POST",
					success: function(data) {
						$("#email-availability-status").html(data);
						var outDoorLightColor = document.getElementById("outDoorLightColor1").value = document.getElementById("email-availability-status").innerHTML;
						var outDoorLightColor = document.getElementById("outDoorLightColor1").value;

						//setTimeout(check_powercon(),2000);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "check/check_outDoorLight2.php",
					data: dataPath2,
					type: "POST",
					success: function(data) {
						$("#email-availability-status").html(data);
						var outDoorLightColor = document.getElementById("outDoorLightColor2").value = document.getElementById("email-availability-status").innerHTML;
						var outDoorLightColor = document.getElementById("outDoorLightColor2").value;

						//setTimeout(check_powercon(),2000);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			} else {
				dataPath = 'colorShanai1=' + $("#colorShanai").val();
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "check/check_outDoorLight.php",
					data: dataPath,
					type: "POST",
					success: function(data) {
						$("#email-availability-status").html(data);
						var outDoorLightColor = document.getElementById("outDoorLightColor").value = document.getElementById("email-availability-status").innerHTML;
						var outDoorLightColor = document.getElementById("outDoorLightColor").value;


						//setTimeout(check_powercon(),2000);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			}



		}

		function colorShanai2() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_colorShanai2.php",
				data: 'code_number=' + $("#code_number").val() +
					'&colorShanai=' + $("#colorShanai").val() +
					'&outDoorLightColor1=' + $("#outDoorLightColor1").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var colorShanaiOthers = document.getElementById("colorShanaiOthers").value = document.getElementById("email-availability-status").innerHTML;
					var colorShanaiOthers = document.getElementById("colorShanaiOthers").value;
					var strArrayComma = colorShanaiOthers.split(",");
					var strArrayPlus = colorShanaiOthers.split("+");
					var strArray2 = colorShanaiOthers.includes("+");
					//console.log(colorShanaiOthers);
					if (strArray2) {
						for (var i = 0; i < strArrayComma.length; i++) {

							document.getElementById("colorShanaiOthers").value = strArrayPlus[0];
							var a = strArrayPlus[1];
							var b = a.split(",");
							document.getElementById("colorShanaiOthers2").value = b[0];
							document.getElementById("demo").innerHTML = "PLEASE CHECK TILE INDICATION FOR PORCH AREA !";
							//"PLEASE CHECK TD COLOR IN PORCH AREA"
						}
					} else if (colorShanaiOthers == '') {
						colorShanai3();
					} else {
						for (var i = 0; i < strArrayComma.length; i++) {

							document.getElementById("colorShanaiOthers").value = strArrayComma[0];

						}
					}

					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function colorShanai3() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_colorShanai3.php",
				data: 'code_number=' + $("#code_number").val() +
					'&colorShanai=' + $("#colorShanai").val() +
					'&colorShanaiOthers=' + $("#colorShanaiOthers").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var colorShanaiOthers = document.getElementById("colorShanaiOthers").value = document.getElementById("email-availability-status").innerHTML;
					var colorShanaiOthers = document.getElementById("colorShanaiOthers").value;
					var strArrayComma = colorShanaiOthers.split(",");
					var strArrayPlus = colorShanaiOthers.split("+");
					var strArray2 = colorShanaiOthers.includes("+");
					//console.log(strArray2);
					if (strArray2) {
						for (var i = 0; i < strArrayComma.length; i++) {

							document.getElementById("colorShanaiOthers").value = strArrayPlus[0];
							var a = strArrayPlus[1];
							var b = a.split(",");
							document.getElementById("colorShanaiOthers2").value = b[0];
							document.getElementById("demo").innerHTML = "PLEASE CHECK TILE INDICATION FOR PORCH AREA !";
							//"PLEASE CHECK TD COLOR IN PORCH AREA"
						}
					} else {
						for (var i = 0; i < strArrayComma.length; i++) {

							document.getElementById("colorShanaiOthers").value = strArrayComma[0];

						}
					}

					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
	</script>
	<style>
		.space {
			white-space: pre;
		}

		h1 {
			background: #68dff0;
			font: bold normal 210% 'arial black', Times, serif;
			letter-spacing: 0.2em;
			margin: 0;
			padding: 10px 10px 10px 60px;
			text-align: center;
			color: #424242;
		}

		td {
			border-style: solid;
			border-color: black;
		}

		p {
			vertical-align: middle;
		}

		label {
			font-style: normal;
		}

		select {
			text-align-last: center;
		}

		.blink_me {
			animation: blinker 2s linear infinite;
		}

		@keyframes blinker {
			50% {
				opacity: 0;
			}

			span {
				display: block;

			}
		}

		.inputfield {
			display: inline-block;
		}
	</style>
</head>

<body>

	<section id="container">
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
			<div id="sidebar" class="nav-collapse ">
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
						<a href="firealarm_new.php">
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
						<a href="bracket_light_kaidan_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>DENKI ITEM AT OPEN AREA</span>
						</a>
					</li>
					<li class="sub-menu">
						<a href="window_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>WINDOW AND WINDOW SILL</span>
						</a>
					</li>
					<li class="sub-menu">
						<a href="hitting_of_items_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>HITTING ITEMS</span>
						</a>
					</li>
					<li class="sub-menu">
						<a href="socket_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>AC SOCKET(KONSENTO)</span>
						</a>
					</li>
					<li class="sub-menu">
						<a href="bundenban_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>SHUUDENBAN, SOLAR SOCKET & BUNDENBAN CHECKING</span>
						</a>

					</li>
					<li class="sub-menu">
						<a href="exterior_item_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>EXTERIOR ITEM HEIGHT</span>
						</a>
					</li>
					<li class="sub-menu">
						<a href="interphone.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>INTERPHONE</span>
						</a>
					</li>
					<li class="sub-menu">
						<a class="active" href="NokitenColor.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>NOKITEN COLOR</span>
						</a>
						<ul class="sub">
							<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Nokiten Color</a></li>
						</ul>
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

				<div class="tab-content">
					<div id="tab1" class="tab-pane fade in active">
						<form id="myForm" method="POST">
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
								<thead>
									<div data-role="header" class="" id="FireAlarmAboveWindow">
										<th colspan="6">
											<h1>NOKITEN COLOR CHECKING SYSTEM</h1>
										</th>
									</div>
								</thead>
								<tbody>

									<tr>
										<td align="center">

											<p>* Press<span style="color:red;font-weight:bold"> ENTER </span>after you put the Customer Code *</p>
											<label style="font-size:20px;color:black;" class="space">Customer Code:</label>
											<input type="text" name="code_number" id="code_number" class="code_number" onkeypress="setTimeout(shio_code, 10)" onKeyup="setTimeout(shio_code, 10)" onblur="setTimeout(shio_code, 10)" onmousemove="setTimeout(shio_code, 10)" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12" />
											<input type="button" class="btn btn-info" value="Enter" style="color:black;font-weight:bold;margin-bottom:10px;" onclick="setTimeout(shio_code, 10)">
											<input class="btn btn-danger" type="button" onclick="myFunction()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold;margin-bottom:10px;"><br>
											<label style="font-size:20px;color:black" class="space">Plan Shio #: </label>
											<input type="text" name="plan_number" id="plan_number" class="plan_number" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />

											<label style="font-size:20px;color:black" class="space">Kanabakari: </label>
											<input type="text" name="kanabakari" id="kanabakari" class="kanabakari" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />

											<label style="font-size:20px;color:black" class="space">House Types: </label>
											<input type="text" name="houseTypes" id="houseTypes" class="houseTypes" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
										</td>
									</tr>
									<tr>
										<td align="center">
											<br>
											<br>
											<label style="font-size:20px;color:black;margin-left:40px;" class="space">Nokiten Color: </label>
											<input type="text" name="colorShanai" id="colorShanai" class="colorShanai" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
											<label style="font-size:20px;color:black" class="space">OutDoorLight Color: </label>
											<input type="text" name="outDoorLightColor" id="outDoorLightColor" class="outDoorLightColor" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
											<br>
											<label style="font-size:20px;color:black" class="space">Exterior Wall Color1: </label>
											<input type="text" name="colorShanaiOthers" id="colorShanaiOthers" class="colorShanaiOthers" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
											<label style="font-size:20px;color:black" class="space">OutDoorLight Color1: </label>
											<input type="text" name="outDoorLightColor1" id="outDoorLightColor1" class="outDoorLightColor1" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
											<br>
											<label style="font-size:20px;color:black" class="space">Exterior Wall Color2: </label>
											<input type="text" name="colorShanaiOthers2" id="colorShanaiOthers2" class="colorShanai" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
											<label style="font-size:20px;color:black" class="space">OutDoorLight Color2: </label>
											<input type="text" name="outDoorLightColor2" id="outDoorLightColor2" class="outDoorLightColor2" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
											<!--<p style="color:blue;font-size:15px;"><span style="color:red">NOTE:</span> ALWAYS CHECK TILE INDICATION FOR PORCH AREA</p>-->
										</td>
									</tr>
									<tr>
										<td>
											<p id="demo" style="color:red;font-size:30px;" align="center"></p>

										</td>
									</tr>
									<span class="hidden" id="email-availability-status"></span>




								</tbody>

							</table>
							<div id="image_guide" align="center"></div>
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
			</section>
			<! --/wrapper -->
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


	<!--common script for all pages-->
	<script src="assets/js/common-scripts.js"></script>

	<!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>
	<script>
		$(document).ready(function() {

			$(window).keydown(function(event) {

				if (event.keyCode == 13) {
					shio_code();
					/* event.preventDefault();

					return false; */

				}

			});

		});

		function myFunction() {
			document.getElementById("myForm").reset();
			document.getElementById("demo").innerHTML = "";
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
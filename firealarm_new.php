<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "ryanpelaez";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE views SET visits = visits+1 WHERE id = 1";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 1";
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

	<title>FIRE ALARM</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<link rel="icon" href="http://hrdapps33/DenkiComputation/assets/img/images.png" type="image/x-icon" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">
	<link href="select2.min.css" rel="stylesheet">
	<link href="http://hrdapps33/bootstrap/css/shake.css" rel="stylesheet">
	<link rel="stylesheet" href="http://hrdapps33/bootstrap/font-awesome/css/font-awesome.min.css">

	<script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
	<script src="http://hrdapps33/bootstrap/js/select2.full.js"></script>
	<script src="http://hrdapps33/bootstrap/js/bootstrap.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<script>
	function selectCompute() {
		var number1 = parseFloat($('input[name=number1]').val() || 0);
		var number2 = parseFloat($('input[name=number2]').val() || 0);
		var number3 = parseFloat($('input[name=number3]').val() || 0);
		var ch = parseFloat($('select[name=ch]').val() || 0);
		var rh = parseFloat($('input[name=rh]').val() || 0);

		var results = 'HIT';
		var results1 = 'NOT HIT';

		/*  var total2 = ch-(number1 * number3 + number2) ;
		 var total = rh-(number1 * number3 + number2); */
		var total2 = ch - (number1 + number2);
		var total = rh - (number1 + number2);

		if (rh != '') {
			$('#total').val(total);
			document.getElementById("demo").value = results1;
			document.getElementById("demo").style.color = "green";
			if (total < 50) {
				document.getElementById("demo").value = results;
				document.getElementById("demo").style.color = "#ff0000";
			}
		} else if (ch != '') {
			$('#total').val(total2);
			document.getElementById("demo").value = results1;
			document.getElementById("demo").style.color = "green";
			if (total2 < 50) {
				document.getElementById("demo").value = results;
				document.getElementById("demo").style.color = "#ff0000";
			}
		} else {
			$('#total').val(total2);
			document.getElementById("demo").value = results1;
			document.getElementById("demo").style.color = "green";



		}
	}
	$(document).ready(function() {
		function compute() {
			var number1 = parseFloat($('input[name=number1]').val() || 0);
			var number2 = parseFloat($('input[name=number2]').val() || 0);
			var number3 = parseFloat($('input[name=number3]').val() || 0);
			var ch = parseFloat($('select[name=ch]').val() || 0);
			var rh = parseFloat($('input[name=rh]').val() || 0);

			var results = 'HIT';
			var results1 = 'NOT HIT';

			/*  var total2 = ch-(number1 * number3 + number2) ;
			 var total = rh-(number1 * number3 + number2); */
			var total2 = ch - (number1 + number2);
			var total = rh - (number1 + number2);

			if (rh != '') {
				$('#total').val(total);
				document.getElementById("demo").value = results1;
				document.getElementById("demo").style.color = "green";
				if (total < 50) {
					document.getElementById("demo").value = results;
					document.getElementById("demo").style.color = "#ff0000";
				}
			} else if (ch != '') {
				$('#total').val(total2);
				document.getElementById("demo").value = results1;
				document.getElementById("demo").style.color = "green";
				if (total2 < 50) {
					document.getElementById("demo").value = results;
					document.getElementById("demo").style.color = "#ff0000";
				}
			} else {
				$('#total').val(total2);
				document.getElementById("demo").value = results1;
				document.getElementById("demo").style.color = "green";



			}

		}
		$('#number1, #number2, #number3, #ch, #rh, #results').change(compute);

	});

	$(document).ready(function() {
		function compute1() {
			var a = parseFloat($('input[name=a]').val() || 0);
			var tp = parseFloat($('select[name=tp]').val() || 0);
			var sr = parseFloat($('select[name=sr]').val() || 0);
			var grh = parseFloat($('input[name=grh]').val() || 0);
			var r = tp + grh - a;
			var r2 = tp + (sr - a);
			if (grh != '') {
				$('#r').val(r);

			} else if (tp != '') {
				$('#r').val(r2);

			}
		}
		$(' #a, #tp, #sr, #grh ').change(compute1);

	});

	function selectCompute2() {
		var ws = parseFloat($('input[name=ws]').val() || 0);

		var sash = parseFloat($('input[name=sash]').val() || 0);
		var oa = parseFloat($('select[name=oa]').val() || 0);
		var sh = parseFloat($('select[name=sh]').val() || 0);
		var sub = $('#sub').val();
		var resultA = 'HIT TO WINDOW';
		var resultB = 'NOT HIT TO WINDOW';

		//var result2 = ws * sub + sash ;
		var result2 = ws + sash;
		var result3 = sh - oa;
		var result4 = result3 - result2;
		$('#result').val(result2);
		$('#result3').val(result3);


		if (ws && sash && oa && sh !== "") {
			$('#result4').val(result4);
			document.getElementById("demo1").value = resultB;
			document.getElementById("demo1").style.color = "green";
			if (result4 < 50) {
				document.getElementById("demo1").value = resultA;
				document.getElementById("demo1").style.color = "#ff0000";
			} else if (result4 < 50) {
				$('#result4').val(result4);
				document.getElementById("demo1").value = resultA;
				document.getElementById("demo1").style.color = "#ff0000";
			}
		}
	}
	$(document).ready(function() {
		function compute2() {
			var ws = parseFloat($('input[name=ws]').val() || 0);
			var sash = parseFloat($('input[name=sash]').val() || 0);
			var oa = parseFloat($('select[name=oa]').val() || 0);
			var sh = parseFloat($('select[name=sh]').val() || 0);
			var sub = $('#sub').val();
			var resultA = 'HIT TO WINDOW';
			var resultB = 'NOT HIT TO WINDOW';

			//var result2 = ws * sub + sash ;
			var result2 = ws + sash;
			var result3 = sh - oa;
			var result4 = result3 - result2;
			$('#result').val(result2);
			$('#result3').val(result3);


			if (ws && sash && oa && sh !== "") {
				$('#result4').val(result4);
				document.getElementById("demo1").value = resultB;
				document.getElementById("demo1").style.color = "green";
				if (result4 < 50) {
					document.getElementById("demo1").value = resultA;
					document.getElementById("demo1").style.color = "#ff0000";
				} else if (result4 < 50) {
					$('#result4').val(result4);
					document.getElementById("demo1").value = resultA;
					document.getElementById("demo1").style.color = "#ff0000";
				}
			}

		}
		$('#ws, #sash, #sub,#resultA').keyup(compute2);
		$(' #oa, #sh').change(compute2);
	});

	$(document).ready(function() {
		function compute3() {
			var sch = parseFloat($('select[name=sch]').val() || 0);
			var grids = parseFloat($('input[name=grids]').val() || 0);
			var pitch = parseFloat($('input[name=pitch]').val() || 0);
			var sub1 = $('#sub1').val();
			var sa = $('#sa').val();

			var sum = (sch - (grids * pitch * sub1)) - sa;
			var sum3 = sum - (sum % 10);

			$('#sum').val(sum3);

		}
		$('#sch, #grids, #pitch, #sub1, #sa').change(compute3);

	});

	$(document).ready(function() {
		function compute4() {
			var openA = parseFloat($('select[name=openA]').val() || 0);
			var ngrids = parseFloat($('input[name=ngrids]').val() || 0);
			var pitch1 = parseFloat($('input[name=pitch1]').val() || 0);
			var sub2 = $('#sub2').val();
			var da = $('#da').val();

			var sum1 = (openA + (ngrids * pitch1 * sub2)) - da;
			var sum2 = sum1 - (sum1 % 10);


			$('#sum1').val(sum2);
			//document.getElementById("demo9").value = Math.floor(sum1);	
		}
		$('#openA, #ngrids, #pitch1, #sub2, #da').change(compute4);

	});


	$(document).ready(function() {
		function compute5() {


			var givenCH = parseFloat($('input[name=givenCH]').val() || 0);
			var STD = $('#STD').val();


			var sum2 = givenCH - STD;


			$('#sum2').val(sum2);

		}
		$('#givenCH, #STD').keyup(compute5);

	});

	$(document).ready(function() {
		function compute6() {
			var STD_CH = $('#STD_CH').val();
			var rqh = parseFloat($('input[name=rqh]').val() || 0);

			var res = 'HIT';
			var res2 = 'NOT HIT';

			var sum3 = STD_CH - rqh;


			if (STD_CH && rqh != "") {
				if (sum3 < 150) {
					document.getElementById("demo3").value = res;
					document.getElementById("demo3").style.color = "#ff0000";
				} else if (sum3 >= 150) {
					document.getElementById("demo3").value = res2;
					document.getElementById("demo3").style.color = "green";
				}
				$('#sum3').val(sum3);
			}

		}
		$('#STD_CH, #rqh').change(compute6);

	});

	$(document).ready(function() {
		function compute7() {

			var Given_Ceiling_Height = parseFloat($('input[name=Given_Ceiling_Height]').val() || 0);
			var Requested_Height = parseFloat($('input[name=Requested_Height]').val() || 0);

			var resu = 'HIT';
			var resu2 = 'NOT HIT';
			var sum4 = Given_Ceiling_Height - Requested_Height;


			if (Given_Ceiling_Height && Requested_Height != "") {
				if (sum4 < 150) {
					document.getElementById("demo4").value = resu;
					document.getElementById("demo4").style.color = "#ff0000";
				} else if (sum4 >= 150) {
					document.getElementById("demo4").value = resu2;
					document.getElementById("demo4").style.color = "green";
				}
				$('#sum4').val(sum4);
			}
		}
		$(' #Given_Ceiling_Height,#Requested_Height').change(compute7);

	});

	$(document).ready(function() {
		function compute8() {

			var Open_area = parseFloat($('select[name=Open_area]').val() || 0);
			var std_cei_light = parseFloat($('select[name=std_cei_light]').val() || 0);
			var Requested_Height1 = parseFloat($('input[name=Requested_Height1]').val() || 0);
			var resul = 'HIT';
			var resul2 = 'NOT HIT';
			var sum5 = Open_area + std_cei_light - Requested_Height1;

			if (Open_area && std_cei_light && Requested_Height1 != "") {

				if (sum5 < 150) {
					document.getElementById("demo5").value = resul;
					document.getElementById("demo5").style.color = "#ff0000";
				} else if (sum5 >= 150) {
					document.getElementById("demo5").value = resul2;
					document.getElementById("demo5").style.color = "green";
				}
				$('#sum5').val(sum5);
			}
		}
		$('#Open_area,#std_cei_light,#Requested_Height1').change(compute8);

	});
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
</style>

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
						<a class="active" href="firealarm_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>FIRE ALARM (KEMURI)</span>
						</a>
						<ul class="sub">
							<!--<li><a  href="general.html">General</a></li>
                          <li class="active"><a  href="firealarm_new.php">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>-->
							<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Above Window</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Installed in Hukinuke</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Installed Above Window in Hukinuke</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under (Fukisage)</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under (Fukiage)</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>
						</ul>
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
						<a href="shuudenban_new.php">
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
						<a href="NokitenColor.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>NOKITEN COLOR</span>
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
				<center><label class="head">FIRE ALARM HEIGHT COMPUTATION</label></center>
				<ul class="nav nav-tabs" style="font-size:20px">
					<!--<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Above Window</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Installed in Hukinuke</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Installed Above Window in Hukinuke</a></li>			
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>-->
				</ul>

				<div class="tab-content">
					<div id="tab1" class="tab-pane fade in active">
						<form id="myForm">
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
								<thead>
									<div data-role="header" class="" id="FireAlarmAboveWindow">
										<th colspan="6">
											<h1>Fire Alarm Above Window<br><span style="font-size:18px">(Need 50 D.A from Window)</span><br><span style="font-size:18px">If Requested, atleast 50mm D.A is POSSIBLE</span></h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="6" style="border-style:solid"><br>
											<p style="color:blue;font-size:18px" class="space">Formula: H = Height of Alarm/Requested Height - Window Serial + Sash Height</p>
										</td>
										<?php
										include_once 'include/dbcon.php';
										$query = "SELECT * FROM computation limit 6";
										$result = $db_connect->query($query);
										?>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Standard Height of Fire Alarm:</label>&nbsp;
											<select style="font-size:20px;text-align:center" id="ch" name="ch" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['height'] ?>"><?php echo $row['alarm'] ?></option>
												<?php } ?>
											</select> <br>
											<label style="font-size:18px;color:black"><span style="color:red">OR</span> Requested Height:</label>&nbsp;
											<input type="number" name="rh" id="rh" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center"> -
										</td>
										<?php
										function room()
										{
											try {
												$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
												$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
												$pdo->query("SET NAMES utf8");
												$stmt = $pdo->prepare("SELECT window1 FROM computation_");
												$flag = $stmt->execute();
												if (!$flag) {
													$info = $stmt->errorInfo();
													exit($info[2]);
												}
												$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
											} catch (PDOException $e) {
												echo $e->getMessage();
											}
											$pdo = null;
											return $array;
										}
										/////////////////////////////////////////////////////////////////////////////////
										$option = '';
										foreach (room() as $value) {
											$option .= '<option value="' . $value["window1"] . '">' . $value["window1"] . '</option>';
										}
										?>
										<td style="text-align:center;vertical-align:middle">
											<label style="font-size:18px;color:black">Window Serial:</label>
											<select class="select2_single" style="font-size:25px;text-align:center;height:40px;width:300px;color:blue;margin:auto;" id="window" name="window" required="required" onchange="setTimeout(selectCompute, 100)" onkeypress="setTimeout(selectCompute, 100)" />
											<option value=""></option>
											<option><?php echo $option; ?></option>
											</select>
											<textarea id="windowValue" name="windowValue" class="windowValue hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
											<input type="text" name="number1" id="number1" value="" class="hide" style="font-size:20px;width:100px;text-align:center" />
											<!--<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center"> x 30.3
								</td>-->
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="color:black;font-size:18px">SASH Height:</label><br>
											<input type="number" name="number2" id="number2" value="" style="font-size:20px;width:100px;text-align:center" />
											<input type="hidden" name="number3" id="number3" value="30.3" />
										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Height =</label>
											<input type="" name="total" id="total" value="" style="font-size:20px;width:100px;text-align:center" disabled />
											<br>
											<label style="font-size:25px;color:black;" class="space"> Result:</label>
											<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
											<input type="text" id="demo" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;" disabled>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div id="tab2" class="tab-pane fade">
						<form id="myForm1">
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
								<thead>
									<div data-role="header" class="" id="FireAlarmInstalledinHukinuke">
										<th colspan="7">
											<h1>FireAlarm Installed in Hukinuke</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="7" border="2"><br>
											<span style="color:red;font-size:18px" class="space">Formula: For Standard Height of Kemuri In Hukinuke</span>
											<span style="color:red;font-size:18px" class="space"> For Height Of Kemuri in Hukinuke If with G.Ceiling Height Indication</span>
											<span style="color:blue;font-size:18px" class="space">H= OpenArea + STD.CH - 300 H= OpenArea + Given Ceiling Hight + STD.CH - 300</span>
											<?php
											include_once 'include/dbcon.php';
											$query = "SELECT * FROM computation limit 11";
											$result = $db_connect->query($query);
											?>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Type of plan(OpenArea):</label>
											<select style="font-size:20px" id="tp" name="tp" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['open'] ?>"><?php echo $row['kanabakari'] ?></option>
												<?php } ?>
											</select>
											<?php
											include_once 'include/dbcon.php';
											$query = "SELECT * FROM computation limit 88 ";
											$result = $db_connect->query($query);
											?>
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Select Room(STD.CH):</label>
											<select style="font-size:20px" id="sr" name="sr" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['std'] ?>"><?php echo $row['room'] ?></option>
												<?php } ?>
											</select>


										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Given Requested Height:</label>
											<input type="number" name="grh" id="grh" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Allowance:</label>
											<input type="" name="a" id="a" value="300" style="font-size:20px;width:100px;text-align:center" />
										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;"><br>
											<label style="font-size:25px;color:black">Height=</label>
											<input type="" name="r" id="r" value="" style="font-size:20px;width:100px;text-align:center" disabled /></center>
											<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div id="tab3" class="tab-pane fade">
						<?php
						include_once 'include/dbcon.php';
						$query = "SELECT * FROM computation limit 8 ";
						$result = $db_connect->query($query);
						?>
						<form id="myForm2">
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
								<thead>
									<div data-role="header" class="" id="FireAlarmInstalledAboveWindowinHukinuke">
										<th colspan="5">
											<h1>FireAlarm Installed Above Window in Hukinuke<br><span style="font-size:18px">(Need 50 D.A from Window)</span><br><span style="font-size:18px">If Requested, atleast 50mm D.A is POSSIBLE</span></h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="6" border="2"><br>
											<p style="color:blue;font-size:18px" class="space">Step 1:Formula: H= Window Serial + Sash Height</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black"> Window Serial:</label>
											<select class="select2_single" style="font-size:25px;text-align:center;height:40px;width:300px;color:blue;margin:auto;" id="window2" name="window2" required="required" onchange="setTimeout(selectCompute2, 100)" onkeypress="setTimeout(selectCompute2, 100)" />
											<option value=""></option>
											<option><?php echo $option; ?></option>
											</select>
											<textarea id="windowValue2" name="windowValue2" class="windowValue2 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
											<input type="text" name="ws" id="ws" class="hide" value="" style="font-size:20px;width:100px;text-align:center;text-align:center" />
											<input type="hidden" name="sub" id="sub" value="30.3" />
										</td>
										<td style="vertical-align:middle;font-size:20px;font-weight:bold;text-align:center;color:red"> + </td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">SASH Height:</label>
											<input type="number" name="sash" id="sash" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">Window Height=</label>
											<input type="" name="result" id="result" value="" style="font-size:20px;width:100px;text-align:center" disabled />
										</td>
									</tr>
									<tr>
										<td colspan="5" border="2"><br>
											<p style="color:blue;font-size:18px" class="space">Step 2:Formula: H= Type of plan(STD HEIGHT) - Type of plan(OPEN AREA)</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">(STD HEIGHT):</label>
											<select style="font-size:20px" id="sh" name="sh" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['open2'] ?>"><?php echo $row['type'] ?></option>
												<?php } ?>
											</select>
											<?php
											include_once 'include/dbcon.php';
											$query = "SELECT * FROM computation limit 11";
											$result = $db_connect->query($query);
											?>
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">(OPEN AREA):</label>
											<select style="font-size:20px" id="oa" name="oa" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['open'] ?>"><?php echo $row['kanabakari'] ?></option>
												<?php } ?>
											</select>
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">Height of FireAlarm from 2FFL=</label>
											<input type="" name="result3" id="result3" value="" style="font-size:20px;width:100px;text-align:center" disabled />
										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;"><br>
											<p style="color:blue;font-size:18px" class="space">Step 3:Formula: H= Height Of Fire Alarm from 2FFL - Window Height</p>
											<center><label style="font-size:25px;color:black">Height=</label>
												<input type="" name="result4" id="result4" value="" style="font-size:20px;width:100px;text-align:center" disabled />
												<br>
												<center><label style="font-size:25px;color:black" class="space"> Result:</label>
													<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
													<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;" disabled>

										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div id="tab4" class="tab-pane fade">
						<form id="myForm3">
							<?php
							include_once 'include/dbcon.php';
							$query = "SELECT * FROM computation limit 86 ";
							$result = $db_connect->query($query);
							?>
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
								<thead>
									<div data-role="header" class="" id="FireAlarmInstalledatKoubaiUnderFukisage">
										<th colspan="8">
											<h1>FireAlarm Installed at Koubai Under Fukisage</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="8" border="2"><br>
											<p style="color:blue;font-size:18px" class="space">Formula: H= STD.Ceiling Height - (No.Of Grids x Pitch x 910) - STD Allowance From Ceiling</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">STD.Ceiling Height:</label>
											<select style="font-size:20px" id="sch" name="sch" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['std'] ?>"><?php echo $row['room'] ?></option>
												<?php } ?>
											</select>
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">#Grids:</label>
											<input type="number" name="grids" id="grids" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> x
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">Pitch:</label>
											<input type="number" name="pitch" id="pitch" value="" style="font-size:20px;width:100px;text-align:center" />
											<input type="hidden" name="sub1" id="sub1" value="910" />
											<input type="hidden" name="sa" id="sa" value="150" />
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> x 910
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> -150</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;"><br>
											<center><label style="font-size:25px;color:black">Height=</label>
												<input type="" name="sum" id="sum" value="" style="font-size:20px;width:100px;text-align:center" disabled />
												<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div id="tab5" class="tab-pane fade">
						<form id="myForm4">
							<?php
							include_once 'include/dbcon.php';
							$query = "SELECT * FROM computation limit 11 ";
							$result = $db_connect->query($query);
							?>
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
								<thead>
									<div data-role="header" class="" id="FireAlarmInstalledatKoubaiUnderFukiage">
										<th colspan="9">
											<h1>FireAlarm Installed at Koubai Under Fukiage</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="8" border="2"><br>
											<p style="color:blue;font-size:18px" class="space">Formula: H= Open Area + (No.Of Grids x Pitch x 910) - STD D.A From Ceiling</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">Open Area:</label>
											<select style="font-size:20px" id="openA" name="openA" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['open'] ?>"><?php echo $row['kanabakari'] ?></option>
												<?php } ?>
											</select>
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">#Grids:</label>
											<input type="number" name="ngrids" id="ngrids" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> x
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">pitch:</label>
											<input type="number" name="pitch1" id="pitch1" value="" style="font-size:20px;width:100px;text-align:center" />
											<input type="hidden" name="sub2" id="sub2" value="910" />
											<?php
											include_once 'include/dbcon.php';
											$query = "SELECT * FROM computation limit 3 ";
											$result = $db_connect->query($query);
											?>
										</td>
										<td style="vertical-align:middle;font-size:20px;font-weight:bold;text-align:center;color:red"> x 910
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:20px;color:black">D.A From Ceiling Height:</label>
											<select style="font-size:20px" id="da" name="da" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['allowance'] ?>"><?php echo $row['type2'] ?></option>
												<?php } ?>
											</select>
										</td>
									<tr>
										<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
											<label style="font-size:25px;color:black">Height=</label>
											<input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
											<input type="" name="sum1" id="sum1" value="" style="font-size:20px;width:100px;text-align:center" disabled />
											<p style="color:blue;font-size:15px;text-align:left" class="space"><span style="color:red;">Note:</span>"If Computed Height Ends w/ Whole Number Possible To Use As Height Of Fire Alarm, Example: 3652, But If Computed Height Ends w/ Decimal Points<br> Last Digit Should Be Ended in 0,Example 3652.15 change to 3650.</p>
										</td>
									</tr>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div id="tab6" class="tab-pane fade">
						<form id="myForm5">
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
								<thead>
									<div data-role="header" class="" id="FireAlarmInstalledinRoomwithGivenCeilingHeight">
										<th colspan="4">
											<h1>FireAlarm Installed in Room with Given Ceiling Height</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="4" border="2"><br>
											<p style="color:blue;font-size:18px" class="space">Formula: Given Ceiling Height - STD Ceiling Height(300)</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Given Ceiling Height:</label>
											<input type="number" name="givenCH" id="givenCH" value="" style="font-size:20px;width:100px;text-align:center" />
											<input type="hidden" name="STD" id="STD" value="300" />
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;text-align:center;color:red"> - 300
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Height=</label>
											<input type="" name="sum2" id="sum2" value="" style="font-size:20px;width:100px;text-align:center" disabled />
										</td>
									<tr>
										<td colspan="3">
											<input class="bg-danger" type="button" onclick="myFunction5()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
										</td>
									</tr>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div id="tab7" class="tab-pane fade">

						<?php
						include_once 'include/dbcon.php';
						$query = "SELECT * FROM computation limit 87 ";
						$result = $db_connect->query($query);
						?>
						<form id="myForm6">
							<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
								<thead>
									<div data-role="header">
										<th colspan="8">
											<h1>With Requested Height For Fire Alarm</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="6" border="2"><br>

											<p style="color:blue;font-size:18px" class="space"><span style="color:red">*For Standard Ceiling Height*</span> Formula: STD.CH - Requested Height</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">STD_CH:</label>
											<select style="font-size:20px" id="STD_CH" name="STD_CH" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['std'] ?>"><?php echo $row['room'] ?></option>
												<?php } ?>
											</select>
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Requested Height:</label>
											<input type="number" name="rqh" id="rqh" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:30px;font-weight:bold;text-align:center;color:red"> =
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Height=</label>
											<input type="" name="sum3" id="sum3" value="" style="font-size:20px;width:100px;text-align:center" disabled />
											<br><label style="font-size:25px;color:black">Result:</label>
											<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
										</td>
									</tr>
									<tr>
										<td colspan="6" border="2"><br>
											<p style="color:blue;font-size:18px" class="space"><span style="color:red">*If with Given Ceiling Height*</span> Formula: Given Ceiling Height - Requested Height</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">G.Ceiling Height:</label>
											<input type="number" name="Given_Ceiling_Height" id="Given_Ceiling_Height" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Requested Height:</label>
											<input type="number" name="Requested_Height" id="Requested_Height" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:30px;font-weight:bold;text-align:center;color:red"> =
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Height=</label>
											<input type="" name="sum4" id="sum4" value="" style="font-size:20px;width:100px;text-align:center" disabled />
											<br><label style="font-size:25px;color:black">Result:</label>
											<input type="text" id="demo4" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
										</td>
									</tr>
									<?php
									include_once 'include/dbcon.php';
									$query = "SELECT * FROM computation limit 11 ";
									$result = $db_connect->query($query);
									?>
									<tr>
										<td colspan="6" border="2"><br>
											<p style="color:blue;font-size:18px" class="space"><span style="color:red">*For Kemuri w/ Requested Height in Hukinuke*</span> Formula: Open Area + STD. Ceiling Height - Requested Height</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Open area:</label>
											<select style="font-size:20px" id="Open_area" name="Open_area" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['open'] ?>"><?php echo $row['kanabakari'] ?></option>
												<?php } ?>
											</select>
										</td>
										<?php
										include_once 'include/dbcon.php';
										$query = "SELECT * FROM computation limit 87 ";
										$result = $db_connect->query($query);
										?>
										</td>
										<td style="vertical-align:middle;font-size:25px;font-weight:bold;text-align:center;color:red"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">STD Ceiling Height:</label>
											<select style="font-size:20px" id="std_cei_light" name="std_cei_light" required="required">
												<option value=""></option>
												<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['std'] ?>"><?php echo $row['room'] ?></option>
												<?php } ?>
											</select>
										</td>
										<td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:25px;color:black">Requested Height :</label>
											<input type="number" name="Requested_Height1" id="Requested_Height1" value="" style="font-size:20px;width:100px;text-align:center" /></center>
										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
											<label style="font-size:25px;color:black">Height=</label>
											<input type="" name="sum5" id="sum5" value="" style="font-size:20px;width:100px;text-align:center" disabled /><br>
											<label style="font-size:25px;color:black" class="space"> Result:</label>
											<input class="bg-danger" type="button" onClick="myFunction6()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
											<input type="text" id="demo5" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
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
		$(function() {
			$(document).on('change', '#window', function() {
				$.ajax({
					type: 'post',
					url: 'add/window_height_new.php',
					data: {
						id: $(this).val()
					}
				}).done(function(data) {
					$("#windowValue").text(data)
					document.getElementById("number1").value = document.getElementById("windowValue").value;

				}).fail(function(data) {
					alert('Failed')
				})
			})
		});
		$(function() {
			$(document).on('change', '#window2', function() {
				$.ajax({
					type: 'post',
					url: 'add/window_height_new.php',
					data: {
						id: $(this).val()
					}
				}).done(function(data) {
					$("#windowValue2").text(data)
					document.getElementById("ws").value = document.getElementById("windowValue2").value;

				}).fail(function(data) {
					alert('Failed')
				})
			})
		});
		$(document).ready(function() {
			$(".select2_single").select2({
				placeholder: "Please select serial..",
				allowClear: true
			});
		});

		function myFunction() {
			document.getElementById("myForm").reset();
		}

		function myFunction1() {
			document.getElementById("myForm1").reset();
		}

		function myFunction2() {
			document.getElementById("myForm2").reset();
		}

		function myFunction3() {
			document.getElementById("myForm3").reset();
		}

		function myFunction4() {
			document.getElementById("myForm4").reset();
		}

		function myFunction5() {
			document.getElementById("myForm5").reset();
		}

		function myFunction6() {
			document.getElementById("myForm6").reset();
		}
	</script>


</body>

</html>
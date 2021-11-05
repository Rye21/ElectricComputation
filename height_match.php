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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 10";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 10";
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

	<title>HEIGHT CHECKING</title>

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
						<a class="active" href="height_match.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>Height Checking</span>
						</a>
						<ul class="sub">
							<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Height Checking</a></li>
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

						<tr>
							<td>
								<div class="form-inline" style="width:100%;margin-top:20px;">


									<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="myForm">
										<?php
										$code = @$_POST['codes'];
										$teams = @$_POST['teams'];
										?>
										<label style="font-size:15px;color:blue;font-weight:bold;">&emsp;Code to Extract:&nbsp;</label>
										<input type="text" class="form-control input-sm" id="codes" name="codes" onblur="this.form.submit()" value="<?php echo @$_POST['codes'] ?>" placeholder="" style="font-size:20px;width:200px;height:30px;padding: 0px 0px 0px 0px;cursor: pointer;">
										<input type="radio" id="PDR" name="PDR" class="PDR" onclick="check(1),go(),this.form.submit()">
										<label style="font-size:15px;color:blue;font-weight:bold;" id="pdrplan" class="pdrplan">PDR</label> |
										<input type="radio" id="FBW" name="FBW" class="FBW" onclick="check(0),go(),this.form.submit()">
										<label style="font-size:15px;color:blue;font-weight:bold;" id="blackwall" class="blackwall">FBW</label> |
										<input type="radio" id="SUJI" name="SUJI" class="SUJI" onclick="check(2),go(),this.form.submit()">
										<label style="font-size:15px;color:blue;font-weight:bold;" id="sujikai" class="sujikai">SUJIKAI</label> |
										<input type="text" id="teams" name="teams" class="teams hide" onchange="go()" value="<?php echo @$_POST['teams'] ?>">

										<label style="font-size:15px;color:blue;font-weight:bold;">&emsp;Filename to Extract:&nbsp;</label>
										<select id="fileName" name="fileName" class="form-control" style="font-size:15px;width:400px;height:30px;padding: 0px 0px 0px 0px;cursor: pointer;" onchange="go()">
											<option value=""></option>
											<?php if ($code) foreach (glob("../denkifinished/$teams/$code/*.xls") as $key => $value) { ?>

												<option value="<?php echo basename($value) ?>"><?php echo basename($value) ?></option>
											<?php } ?>
										</select>
										<br>
										<br>
										<label style="font-size:15px;color:blue;font-weight:bold;">&emsp;Search for:&nbsp;</label>
										<input type="text" class="form-control input-sm" id="searchstr" name="searchstr" placeholder="filter as you type.." style="font-size:15px;width:250px;height:30px;padding: 0px 0px 0px 0px;cursor: pointer;">
										<select class="form-control input-sm" id="filterstr" name="filterstr" style="font-size:15px;width:200px;height:30px;padding: 0px 0px 0px 0px;cursor: pointer;">

											<option value=""></option>
											<option value="OKAY">GOOD</option>
											<option value="NOT GOOD">NOT GOOD</option>

										</select>
										<span class="space"><input class="bg-danger" type="button" onclick="myFunction()" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
									</form>
								</div>

							</td>
						</tr>
						<br>
						<div id="content" style="width:100%;font-size:15px;margin-top:-5px;"></div>
						<center>
							<div id="loading" style="margin-top:250px;"></div>
						</center>
						<script src="myscript.js"></script>


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
		$(document).ready(setTimeout(check, 10));

		function check(type) {
			var a = document.getElementById("teams").value;
			//document.getElementById("PDR").checked = true;  
			if (type == 0) {
				document.getElementById("PDR").checked = false;
				document.getElementById("SUJI").checked = false;
				document.getElementById("teams").value = 'FBW';
			} else if (type == 1) {
				document.getElementById("FBW").checked = false;
				document.getElementById("SUJI").checked = false;
				document.getElementById("teams").value = 'PDR';
			} else if (type == 2) {
				document.getElementById("FBW").checked = false;
				document.getElementById("PDR").checked = false;
				document.getElementById("teams").value = 'SUJI';
			}
			if (a == 'PDR') {
				document.getElementById("PDR").checked = true;
				document.getElementById("FBW").checked = false;
				document.getElementById("SUJI").checked = false;
				$('#pdrplan').css("color", "red");
				$('#pdrplan').css("font-size", "20px");
			} else if (a == 'FBW') {
				document.getElementById("PDR").checked = false;
				document.getElementById("FBW").checked = true;
				document.getElementById("SUJI").checked = false;
				$('#blackwall').css("color", "red");
				$('#blackwall').css("font-size", "20px");
			} else if (a == 'SUJI') {
				document.getElementById("PDR").checked = false;
				document.getElementById("FBW").checked = false;
				document.getElementById("SUJI").checked = true;
				$('#sujikai').css("color", "red");
				$('#sujikai').css("font-size", "20px");
			}

		}

		function myFunction() {
			window.location.href = 'http://hrdapps33/denkicomputation/height_match.php';
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
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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 8";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 8";
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


	<!--<script src="http://hrdapps33/CountingSheet/js/select2.full.js"></script>-->


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
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
			mObj.style.height = d.documentElement.scrollHeight + "px";

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
		//GrandSaison Condition For MeterBox and Fukakiso
		function fukakisoShow() {
			var img = document.getElementById('fukakiso');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme").show();
			});
		}

		function fukakisoHide() {
			$(document).ready(function() {
				$(".hideme").hide();
			});
		}

		function fukakisoShowGS2() {
			var img = document.getElementById('fukakisoGS2');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeGS2").show();
			});
		}

		function fukakisoHideGS2() {
			$(document).ready(function() {
				$(".hidemeGS2").hide();
			});
		}

		function meterboxShow() {
			var img = document.getElementById('meterboxGS');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox").show();
			});
		}

		function meterboxHide() {
			$(document).ready(function() {
				$(".hidemeterbox").hide();
			});
		}

		function meterboxShowGS() {
			var img = document.getElementById('meterboxGS2');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterboxGS").show();
			});
		}

		function meterboxHideGS() {
			$(document).ready(function() {
				$(".hidemeterboxGS").hide();
			});
		}
		//240+ Condition For MeterBox and Fukakiso
		function fukakisoShow240() {
			var img = document.getElementById('fukakiso240');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme240").show();
			});
		}

		function fukakisoHide240() {
			$(document).ready(function() {
				$(".hideme240").hide();
			});
		}

		function fukakisoShow2402() {
			var img = document.getElementById('fukakiso2402');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme2402").show();
			});
		}

		function fukakisoHide2402() {
			$(document).ready(function() {
				$(".hideme2402").hide();
			});
		}

		function meterboxShow240() {
			var img = document.getElementById('meterbox240');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox240").show();
			});
		}

		function meterboxHide240() {
			$(document).ready(function() {
				$(".hidemeterbox240").hide();
			});
		}

		function meterboxShow2402() {
			var img = document.getElementById('meterbox2402');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox2402").show();
			});
		}

		function meterboxHide2402() {
			$(document).ready(function() {
				$(".hidemeterbox2402").hide();
			});
		}
		//240+T Condition For MeterBox and Fukakiso
		function fukakisoShow240T() {
			var img = document.getElementById('fukakiso240T');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme240T").show();
			});
		}

		function fukakisoHide240T() {
			$(document).ready(function() {
				$(".hideme240T").hide();
			});
		}

		function fukakisoShow240T2() {
			var img = document.getElementById('fukakiso240T2');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme240T2").show();
			});
		}

		function fukakisoHide240T2() {
			$(document).ready(function() {
				$(".hideme240T2").hide();
			});
		}

		function meterboxShow240T() {
			var img = document.getElementById('meterbox240t');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox240T").show();
			});
		}

		function meterboxHide240T() {
			$(document).ready(function() {
				$(".hidemeterbox240T").hide();
			});
		}

		function meterboxShow240T2() {
			var img = document.getElementById('meterbox240t2');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox240T2").show();
			});
		}

		function meterboxHide240T2() {
			$(document).ready(function() {
				$(".hidemeterbox240T2").hide();
			});
		}
		//260+ Condition For MeterBox and Fukakiso
		function fukakisoShow260() {
			var img = document.getElementById('fukakiso260');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme260").show();
			});
		}

		function fukakisoHide260() {
			$(document).ready(function() {
				$(".hideme260").hide();
			});
		}

		function fukakisoShow2602() {
			var img = document.getElementById('fukakiso2602');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme2602").show();
			});
		}

		function fukakisoHide2602() {
			$(document).ready(function() {
				$(".hideme2602").hide();
			});
		}

		function meterboxShow260() {
			var img = document.getElementById('meterbox260');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox260").show();
			});
		}

		function meterboxHide260() {
			$(document).ready(function() {
				$(".hidemeterbox260").hide();
			});
		}

		function meterboxShow2602() {
			var img = document.getElementById('meterbox2602');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hidemeterbox2602").show();
			});
		}

		function meterboxHide2602() {
			$(document).ready(function() {
				$(".hidemeterbox2602").hide();
			});
		}

		function ShowTouketsu() {
			var img = document.getElementById('touketsuImg');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideTouketsu").show();
			});
		}

		function HideTouketsu() {
			$(document).ready(function() {
				$(".hideTouketsu").hide();
			});
		}


		//GrandSaison FirstItem
		function computeGS() {

			var std_heightGS = parseFloat($('input[name=std_heightGS]').val()) || 0;
			var R_heightGS = parseFloat($('input[name=R_heightGS]').val()) || 0;
			var standardGS = document.getElementById("standardGS").value;
			var std_height1GS = document.getElementById("std_heightGS").value;
			var exterior_denkiGS = document.getElementById("exterior_denkiGS").value;
			var top_heightGS = document.getElementById("top_heightGS").value;
			var bottom_height = document.getElementById("bottom_heightGS").value;
			var center_tilesGS = document.getElementById("center_tilesGS").value;
			var kanabakari = document.getElementById("kanabakari").value;
			var houseTypes = document.getElementById("houseTypes").value;
			var minimum_heightGS = document.getElementById("minimum_heightGS").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;

			setTimeout(combineGS, 40);
			setTimeout(centerholeGS(), 400);
			setTimeout(checkemailAGS(), 500);

			var center_tilesGS = (std_heightGS - R_heightGS) / 49;
			var center_tiles1GS = (R_heightGS - std_heightGS) / 49;
			var num = Number.isInteger(center_tiles1GS);

			var Result = Math.ceil(center_tilesGS);
			var Result1 = Math.floor(center_tiles1GS);

			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_heightGS - Result2;
			var Result5 = std_heightGS - Result2 + 49;

			var judge = 'Use Maximum Height then send FYI';
			var judge2 = 'Send FYI';
			$('#center_tilesGS').val('H=FL+' + Result4);
			// meterbox condition
			if (exterior_denkiGS == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denkiGS").val(exterior_denkiGS);
				} else {
					alert('not possible');
					$("#exterior_denkiGS").val("");
				}
			} else if (exterior_denkiGS == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denkiGS").val("");
				} else {
					$("#exterior_denkiGS").val(exterior_denkiGS);
				}
			}
			/////////////////////////////////////////////////////////////////////////////////////////
			//cases and condition

			if (R_heightGS >= std_heightGS) {
				if (R_heightGS != '') {
					if (minimum_heightGS >= R_heightGS) {
						//document.getElementById("notfollowGS").value = 'NOT FOLLOW';
						//document.getElementById("useGS").value = 'Use Standard Height';
					}
					if (R_heightGS >= minimum_heightGS) {
						document.getElementById("notfollowGS").value = '';
						document.getElementById("useGS").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollowGS").value = '';
					document.getElementById("useGS").value = 'Item Height to Use';
				}
				//document.getElementById("notfollowGS").value = ''; 
				if (num == true) {
					var Result5 = std_heightGS + Result3;
					if (exterior_denkiGS == 'meterbox' && R_heightGS != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterboxGS').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterboxGS').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS').val('+634');
						} else {
							$('#center_tilesGS').val('H=FL+' + Result5);
						}
					} else {
						meterboxHide();
						$('#meterboxGS').val('');
					}
					$('#center_tilesGS').val('H=FL+' + Result5);
					if (houseTypes == 'GType' && kanabakari == '２６５' && exterior_denkiGS == 'wireless camera' && standardGS == 'balcony_2f') {
						if (Result5 > std_heightGS) {
							alert('NOT POSSIBLE !');
						}
					}
				}
				if (num == false) {
					var Result6 = std_heightGS + Result3 + 49;
					if (exterior_denkiGS == 'meterbox' && R_heightGS != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterboxGS').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterboxGS').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS').val('+634');
						} else {
							$('#center_tilesGS').val('H=FL+' + Result6);
						}
					} else {
						meterboxHide();
						$('#meterboxGS').val('');
						$('#plusMeterboxGS').val('');
					}
					$('#center_tilesGS').val('H=FL+' + Result6);
					if (houseTypes == 'GType' && kanabakari == '２６５' && exterior_denkiGS == 'wireless camera' && standardGS == 'balcony_2f') {
						if (Result6 > std_heightGS) {
							alert('NOT POSSIBLE !');
						}
					} else if (houseTypes == 'GType' && kanabakari == '２４０' && exterior_denkiGS == 'wireless camera' && (standardGS == 'doma' || standardGS == 'wooddeck' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f')) {
						if (Result6 > std_heightGS) {
							alert('NOT POSSIBLE !');
						}
					}
				}

				if (((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWH_2f') ||
					((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWL_2f') ||
					((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWH_3f') ||
					((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWL_3f') &&
					Result5 > std_heightGS) {
					alert(judge);
				} else if (std_height1GS == '') {
					//alert('NOT');
				}
				fukakisoHide();
			} else if (std_heightGS >= R_heightGS) {
				//fukakiso restriction
				if (R_heightGS) {
					if (std_heightGS != minimum_heightGS) {

						if (exterior_denkiGS == 'bousui socket') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShow();
							} else {
								//fukakisoHide();
							}
						} else if (exterior_denkiGS == 'EV PHEV socket') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShow();
							} else {
								//fukakisoHide();
							}
						} else if (exterior_denkiGS == 'SHOURAI EV socket') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShow();
							} else {
								//fukakisoHide();
							}
						} else if (exterior_denkiGS == 'joint box') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShow();
							} else {
								//fukakisoHide();
							}
						}

					}
				} else {
					//fukakisoHide();
				}

				if (exterior_denkiGS == 'meterbox' && R_heightGS != '') {
					if (planTypes == '夢の家Ⅳ') {
						meterboxShow();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterboxGS').val('OFFSET IN ELEVATION ' + y);
						$('#plusMeterboxGS').val('+614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterboxGS').val('OFFSET IN ELEVATION ' + y);
						$('#plusMeterboxGS').val('+634');
					} else {
						$('#center_tilesGS').val('H=FL+' + Result4);
					}
				} else {
					meterboxHide();
					$('#meterboxGS').val('');
					$('#plusMeterboxGS').val('');
				}
				$('#center_tiles_GS').val(Result4);
				if (R_heightGS != '') {
					if (minimum_heightGS >= R_heightGS) {

						//document.getElementById("notfollowGS").value = 'NOT FOLLOW';
						//document.getElementById("useGS").value = 'Use Standard Height';
						$('#center_tilesGS').val('H=FL+' + minimum_heightGS);
						//$('#center_tilesGS').val('H=FL+' + Result5);
					}
					if (R_heightGS >= minimum_heightGS) {
						document.getElementById("notfollowGS").value = '';
						document.getElementById("useGS").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollowGS").value = '';
					document.getElementById("useGS").value = 'Item Height to Use';
				}
			}

			if (R_heightGS == '') {
				var x = document.getElementById("center_tilesGS").value = 'H=FL+' + std_heightGS;
			}
			setTimeout(myequalGS, 100);
		}
		// GrandSaison SecondItem
		function compute_1GS() {
			var std_heightGS = parseFloat($('input[name=std_height_1GS]').val()) || 0;
			var R_heightGS = parseFloat($('input[name=R_height_1GS]').val()) || 0;
			var standardGS = document.getElementById("standard_1GS").value;
			var std_height1GS = document.getElementById("std_height_1GS").value;
			var exterior_denkiGS = document.getElementById("exterior_denki_1GS").value;
			var kanabakari = document.getElementById("kanabakari").value;
			var houseTypes = document.getElementById("houseTypes").value;
			var minimum_height_1GS = document.getElementById("minimum_height_1GS").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;

			//setTimeout(checkemailAvailability_1(),500);
			/* setTimeout(checkemailAvailabilityA_1(),500);
			setTimeout(checkemailAvailabilityB_1(),500);
			setTimeout(checkemailAvailabilityC_1(),500);  */
			setTimeout(combineGS, 40);
			setTimeout(centerhole_1GS(), 500);
			var center_tiles_1GS = (std_heightGS - R_heightGS) / 49;
			var center_tiles1GS = (R_heightGS - std_heightGS) / 49;
			var num = Number.isInteger(center_tiles1GS);
			var Result = Math.ceil(center_tiles_1GS);
			var Result1 = Math.floor(center_tiles1GS);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_heightGS - Result2;

			/* var Result5 = std_height + Result3 + 49;
			var Result6 = std_height + Result3; */
			var judge = 'Use Maximum Height then send FYI ';
			var judge2 = 'Send FYI';
			//alert(standard);


			$('#center_tiles_1GS').val('H=FL+' + Result4);
			if (exterior_denkiGS == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki_1GS").val(exterior_denkiGS);
				} else {
					alert('not possible');
					$("#exterior_denki_1GS").val("");
				}
			} else if (exterior_denkiGS == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki_1GS").val("");
				} else {
					$("#exterior_denki_1GS").val(exterior_denkiGS);
				}
			}


			if (R_heightGS >= std_heightGS) {
				if (R_heightGS != '') {
					if (minimum_height_1GS >= R_heightGS) {
						//document.getElementById("notfollowGS2").value = 'NOT FOLLOW';
						//document.getElementById("useGS2").value = 'Use Standard Height';
					}
					if (R_heightGS >= minimum_height_1GS) {
						document.getElementById("notfollowGS2").value = '';
						document.getElementById("useGS2").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollowGS2").value = '';
					document.getElementById("useGS2").value = 'Item Height to Use';
				}
				//document.getElementById("notfollowGS2").value = '';
				//$('#center_tiles_1').val(Result5);
				if (num == true) {
					var Result5 = std_heightGS + Result3;
					if (exterior_denkiGS == 'meterbox' && R_heightGS != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShowGS();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterboxGS2').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS2').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShowGS();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterboxGS2').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS2').val('+634');
						} else {
							$('#center_tiles_1GS').val('H=FL+' + Result5);
						}
					} else {
						meterboxHideGS();
						$('#meterboxGS2').val('');
						$('#plusMeterboxGS2').val('');
					}
					$('#center_tiles_1GS').val('H=FL+' + Result5);
				}
				if (num == false) {
					var Result6 = std_heightGS + Result3 + 49;
					if (exterior_denkiGS == 'meterbox' && R_heightGS != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShowGS();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterboxGS2').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS2').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShowGS();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterboxGS2').val('OFFSET IN ELEVATION ' + y);
							$('#plusMeterboxGS2').val('+634');
						} else {
							$('#center_tiles_1GS').val('H=FL+' + Result6);
						}
					} else {
						meterboxHideGS();
						$('#meterboxGS2').val('');
						$('#plusMeterboxGS2').val('');
					}
					$('#center_tiles_1GS').val('H=FL+' + Result6);
					if (houseTypes == 'GType' && kanabakari == '２６５' && exterior_denkiGS == 'wireless camera' && standardGS == 'balcony_2f') {
						if (Result6 > std_heightGS) {
							alert('NOT POSSIBLE !');
						}
					} else if (houseTypes == 'GType' && kanabakari == '２４０' && exterior_denkiGS == 'wireless camera' && (standardGS == 'doma' || standardGS == 'wooddeck' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f')) {
						if (Result6 > std_heightGS) {
							alert('NOT POSSIBLE !');
						}
					}
				}

				if (((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWH_2f') ||
					((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWL_2f') ||
					((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWH_3f') ||
					((exterior_denkiGS == 'Wall Mounted Light' || exterior_denkiGS == 'WSPS(Spotlight)') && standardGS == 'EWL_3f') &&
					Result5 > std_heightGS) {
					alert(judge);
				} else if (std_height1GS == '') {

				}
				fukakisoHideGS2();
			} else if (std_heightGS >= R_heightGS) {
				$('#center_tiles_1GS').val('H=FL+' + Result4);
				//fukakiso restriction
				if (R_heightGS) {

					if (std_heightGS != minimum_height_1GS) {

						if (exterior_denkiGS == 'bousui socket') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShowGS2();
							} else {
								//fukakisoHideGS2();
							}
						} else if (exterior_denkiGS == 'EV PHEV socket') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShowGS2();
							} else {
								//fukakisoHideGS2();
							}
						} else if (exterior_denkiGS == 'SHOURAI EV socket') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShowGS2();
							} else {
								//fukakisoHideGS2();
							}
						} else if (exterior_denkiGS == 'joint box') {
							if (standardGS == 'wooddeck' || standardGS == 'doma' || standardGS == 'balcony_2f' || standardGS == 'balcony_3f') {
								//fukakisoShowGS2();
							} else {
								//fukakisoHideGS2();
							}
						}
					}
				} else {
					fukakisoHideGS2();
				}
				if (exterior_denkiGS == 'meterbox' && R_heightGS != '') {
					if (planTypes == '夢の家Ⅳ') {
						meterboxShowGS();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterboxGS2').val('OFFSET IN ELEVATION ' + y);
						$('#plusMeterboxGS2').val('FL + 614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShowGS();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterboxGS2').val('OFFSET IN ELEVATION ' + y);
						$('#plusMeterboxGS2').val('+634');
					} else {
						$('#center_tiles_1GS').val('H=FL+' + Result4);
					}
				} else {
					meterboxHideGS();
					$('#meterboxGS2').val('');
					$('#plusMeterboxGS2').val('');
				}
				if (R_heightGS != '') {
					if (minimum_height_1GS >= R_heightGS) {
						//document.getElementById("notfollowGS2").value = 'NOT FOLLOW';
						//document.getElementById("useGS2").value = 'Use Standard Height';
						$('#center_tiles1GS').val('H=FL+' + minimum_heightGS);
					}
					if (R_heightGS >= minimum_height_1GS) {
						document.getElementById("notfollowGS2").value = '';
						document.getElementById("useGS2").value = 'Item Height To Use';
					}
				} else {
					document.getElementById("notfollowGS2").value = '';
					document.getElementById("useGS2").value = 'Item Height To Use';
				}
			}

			if (R_heightGS == '') {
				document.getElementById("center_tiles_1GS").value = 'H=FL+' + std_heightGS;
			}

			setTimeout(myequal_1GS, 10);
		}

		function hittingGS() {
			var center = document.getElementById("center_tilesGS").value;
			var center_tilesGS = center.slice(5);
			//var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0 ;
			var top_heightGS = parseFloat($('input[name=top_heightGS]').val()) || 0;
			var bottom_heightGS = parseFloat($('input[name=bottom_heightGS]').val()) || 0;
			var R_heightGS = parseFloat($('input[name=R_heightGS]').val()) || 0;
			var ans = parseFloat(center_tilesGS) + top_heightGS;
			var ans2 = parseFloat(center_tilesGS) - bottom_heightGS;
			var x = document.getElementById("center_tiles_hit").value = ans;
			var y = document.getElementById("center_tiles_hit2").value = ans2;
			var center_tiles_hitGS = parseFloat($('input[name=center_tiles_hitGS]').val()) || 0;
			var center_tiles_hit2GS = parseFloat($('input[name=center_tiles_hit2GS]').val()) || 0;
			var z = center_tiles_hitGS - center_tiles_hit2GS;
			var calc = document.getElementById("center_tiles_hit3GS").value = z;

			//alert(center_tiles);
		}

		function checkemailAvailabilityGS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_heightGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailGS-availability-status").html(data);
					var number1 = document.getElementById("std_heightGS").value = document.getElementById("emailGS-availability-status").innerHTML;
					//var std_height = parseFloat($('select[name=std_height]').val()) || 0 ;
					var number6 = document.getElementById("standardGS").value;
					var number7 = document.getElementById("R_heightGS").value;
					var number8 = document.getElementById("center_tilesGS").value;
					if (number6 == 'Choose Type') {
						document.getElementById("std_heightGS").value = '';
					} else if (number6 != '') {
						document.getElementById("standard_1GS").value = number6;
						setTimeout(checkemailAvailability_1GS, 300);
					}


					setTimeout(computeGS, 100);
					setTimeout(hittingGS, 200);
					setTimeout(combineGS, 300);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});

		}

		function centerholeGS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_holeGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailGS-availability-status").html(data);
					var number1 = document.getElementById("top_heightGS").value = document.getElementById("emailGS-availability-status").innerHTML;
					var number2 = document.getElementById("top_heightGS").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_heightGS").value = strArray[0];
						document.getElementById("bottom_heightGS").value = strArray[1];
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		/////////////////////////////////
		function hitting_1GS() {
			var center = document.getElementById("center_tiles_1GS").value;
			var center_tilesGS = center.slice(5);
			//var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0 ;
			var top_heightGS = parseFloat($('input[name=top_height_1GS]').val()) || 0;
			var bottom_heightGS = parseFloat($('input[name=bottom_height_1GS]').val()) || 0;
			var R_heightGS = parseFloat($('input[name=R_height_1GS]').val()) || 0;
			var ans = parseFloat(center_tilesGS) + top_heightGS;
			var ans2 = parseFloat(center_tilesGS) - bottom_heightGS;
			var x = document.getElementById("center_tiles_hit_1GS").value = ans;
			var y = document.getElementById("center_tiles_hit2_1GS").value = ans2;
			var center_tiles_hitGS = parseFloat($('input[name=center_tiles_hit_1GS]').val()) || 0;
			var center_tiles_hit2GS = parseFloat($('input[name=center_tiles_hit2_1GS]').val()) || 0;
			var z = center_tiles_hitGS - center_tiles_hit2GS;
			var calc = document.getElementById("center_tiles_hit3_1").value = z;

		}

		function checkemailAvailability_1GS() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_height_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email_1GS-availability-status").html(data);
					var number1 = document.getElementById("std_height_1GS").value = document.getElementById("email_1GS-availability-status").innerHTML;
					//var std_height = parseFloat($('select[name=std_height]').val()) || 0 ;
					var number6 = document.getElementById("standard_1GS").value;
					var number7 = document.getElementById("R_height_1GS").value;
					var number8 = document.getElementById("center_tiles_1GS").value;
					if (number6 == 'Choose Type') {
						document.getElementById("std_height_1GS").value = '';
					} else {

					}
					setTimeout(compute_1GS, 100);
					setTimeout(hitting_1GS, 200);
					setTimeout(combineGS, 300);


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function centerhole_1GS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email_1GS-availability-status").html(data);
					var number1 = document.getElementById("top_height_1GS").value = document.getElementById("email_1GS-availability-status").innerHTML;
					var number2 = document.getElementById("top_height_1GS").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height_1GS").value = strArray[0];
						document.getElementById("bottom_height_1GS").value = strArray[1];
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function combineGS() {
			var item1 = parseFloat($('input[name=center_tiles_hitGS]').val()) || 0;
			var item2 = parseFloat($('input[name=center_tiles_hit_1GS]').val()) || 0;
			var item3 = parseFloat($('input[name=center_tiles_hit3GS]').val()) || 0;
			var item4 = parseFloat($('input[name=center_tiles_hit3_1GS]').val()) || 0;
			var exterior_denki_1GS = document.getElementById("exterior_denki_1GS").value;
			var exterior_denkiGS = document.getElementById("exterior_denkiGS").value;
			var R_heightGS = document.getElementById("R_heightGS").value;
			var R_height_1GS = document.getElementById("R_height_1GS").value;
			var standardGS = document.getElementById("standardGS").value;
			var standard_1GS = document.getElementById("standard_1GS").value;
			var result = item1 - item2;
			var result1 = -result;
			var equal = Math.ceil(result1);
			var equal2 = Math.abs(equal);
			var judge = document.getElementById("hittingsGS").value = equal2;
			if (exterior_denki_1GS != '' && exterior_denkiGS != '') {
				if (judge > item3 || judge > item4 || (exterior_denkiGS == 'interphone' || exterior_denkiGS == 'joint box') && standardGS == standard_1GS && R_heightGS == R_height_1GS && (exterior_denki_1GS == 'interphone' || exterior_denki_1GS == 'joint box')) {

					document.getElementById("good_hitGS").value = '	P O S S I B L E';
					document.getElementById("good_hitGS").style.color = "white";
					document.getElementById("good_hitGS").style.background = "black";
				} else {
					document.getElementById("good_hitGS").value = ' PROHIBITED !! IT WILL HIT !!';
					document.getElementById("good_hitGS").style.color = "white";
					document.getElementById("good_hitGS").style.background = "red";
				}
			}

		}
		////////////////////minimum/////////////////
		function checkemailAvailabilityAGS() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimumGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&minimum_heightGS=' + $("#minimum_heightGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailAGS-availability-status").html(data);
					var number1 = document.getElementById("minimum_heightGS").value = document.getElementById("emailAGS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_heightGS = parseFloat($('input[name=R_heightGS]').val()) || 0;
					var f1 = $('#minimum_heightGS').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailabilityA_1GS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&minimum_height_1GS=' + $("#minimum_height_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailA_1GS-availability-status").html(data);
					var number1 = document.getElementById("minimum_height_1GS").value = document.getElementById("emailA_1GS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_heightGS = parseFloat($('input[name=R_height_1GS]').val()) || 0;
					var f1 = $('#minimum_height_1GS').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////low/////////////////
		function checkemailAvailabilityBGS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_lowGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&low_nokitenGS=' + $("#low_nokitenGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailBGS-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten").value = document.getElementById("emailBGS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0;
					var low_nokitenGS = parseFloat($('input[name=low_nokitenGS]').val()) || 0;
					var f1 = $('#minimum_heightGS').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailabilityB_1GS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1").val() +
					'&low_nokiten_1GS=' + $("#low_nokiten_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailB_1GS-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten_1GS").value = document.getElementById("emailB_1GS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0;
					var low_nokitenGS = parseFloat($('input[name=low_nokiten_1GS]').val()) || 0;
					var f1 = $('#minimum_height_1GS').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		////////////////////high/////////////////
		function checkemailAvailabilityCGS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_highGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&high_nokitenGS=' + $("#high_nokitenGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailC-availability-status").html(data);
					var number1 = document.getElementById("high_nokitenGS").value = document.getElementById("emailCGS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0;
					var high_nokitenGS = parseFloat($('input[name=high_nokitenGS]').val()) || 0;
					var f3 = $('#high_nokitenGS').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailabilityC_1GS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&high_nokiten_1GS=' + $("#high_nokiten_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailC_1GS-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten_1GS").value = document.getElementById("emailC_1GS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0;
					var high_nokitenGS = parseFloat($('input[name=high_nokiten_1GS]').val()) || 0;
					var f3 = $('#high_nokiten_1GS').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAGS() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimumGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&minimum_heightGS=' + $("#minimum_heightGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailAGS-availability-status").html(data);
					var number1 = document.getElementById("minimum_heightGS").value = document.getElementById("emailAGS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_heightGS = parseFloat($('input[name=R_heightGS]').val()) || 0;
					var f1 = $('#minimum_heightGS').val();

					var tru = '✔';
					var fals = '✘';

					if (center_tilesGS >= minimum_heightGS) {
						document.getElementById("ansGS").value = tru;
						document.getElementById("ansGS").style.color = "green";
					} else if (center_tilesGS < minimum_heightGS) {
						document.getElementById("ansGS").value = fals;
						document.getElementById("ansGS").style.color = "red";
						//alert('Height is below minimum Please Check');
					} else if (f1 > R_heightGS) {
						//alert ('try');
						//document.getElementById("center_tiles").value = f1 ;
						document.getElementById("ansGS").value = tru;
						document.getElementById("ansGS").style.color = "green";
					} else if (f1 == '') {
						document.getElementById("ansGS").value = '';
					} else {
						document.getElementById("ansGS").value = tru;
						document.getElementById("ansGS").style.color = "green";
					}
					//$('#center_tiles').val(Result4);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////
			jQuery.ajax({
				url: "check/check_lowGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&low_nokitenGS=' + $("#low_nokitenGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailBGS-availability-status").html(data);
					var number1 = document.getElementById("low_nokitenGS").value = document.getElementById("emailBGS-availability-status").innerHTML;
					//var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0 ;		
					var center_tilesGSS = document.getElementById("center_tilesGS").value;
					var center_tilesGS = center_tilesGSS.slice(5);
					var low_nokitenGS = parseFloat($('input[name=low_nokitenGS]').val()) || 0;
					var f1 = $('#minimum_heightGS').val();
					var tru = '✔';
					var fals = '✘';
					var judge = "Item 1:Height Exceeds Please Check if with load above";


					if (center_tilesGS <= low_nokitenGS) {
						document.getElementById("ans2GS").value = tru;
						document.getElementById("ans2GS").style.color = "green";
						//document.getElementById("demosGS").value = '';

					} else if (center_tilesGS >= low_nokitenGS) {
						document.getElementById("ans2GS").value = fals;
						document.getElementById("ans2GS").style.color = "red";
						//document.getElementById("demosGS").value = judge ;

					} else {
						document.getElementById("ans2GS").value = tru;
						document.getElementById("ans2GS").style.color = "green";
						//document.getElementById("demosGS").value = '';
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////////////////////
			jQuery.ajax({
				url: "check/check_highGS.php",
				data: 'exterior_denkiGS=' + $("#exterior_denkiGS").val() +
					'&standardGS=' + $("#standardGS").val() +
					'&high_nokitenGS=' + $("#high_nokitenGS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailCGS-availability-status").html(data);
					var number1 = document.getElementById("high_nokitenGS").value = document.getElementById("emailCGS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tilesGS]').val()) || 0;
					var high_nokitenGS = parseFloat($('input[name=high_nokitenGS]').val()) || 0;
					var f3 = $('#high_nokitenGS').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tilesGS <= high_nokitenGS) {
						document.getElementById("ans3GS").value = tru;
						document.getElementById("ans3GS").style.color = "green";
					} else if (center_tilesGS >= high_nokitenGS) {
						document.getElementById("ans3GS").value = fals;
						document.getElementById("ans3GS").style.color = "red";
					} else {
						document.getElementById("ans3GS").value = tru;
						document.getElementById("ans3GS").style.color = "green";
					}
					setTimeout(myequalGS, 100);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailA_1GS() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&minimum_height_1GS=' + $("#minimum_height_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailA_1GS-availability-status").html(data);
					var number1 = document.getElementById("minimum_height_1GS").value = document.getElementById("emailA_1GS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_heightGS = parseFloat($('input[name=R_height_1GS]').val()) || 0;
					var f1 = $('#minimum_height_1GS').val();

					var tru = '✔';
					var fals = '✘';

					if (center_tilesGS >= minimum_heightGS) {
						document.getElementById("ans_1GS").value = tru;
						document.getElementById("ans_1GS").style.color = "green";
					} else if (center_tilesGS < minimum_heightGS) {
						document.getElementById("ans_1GS").value = fals;
						document.getElementById("ans_1GS").style.color = "red";
						//alert('Height is below minimum Please Check');
					} else if (f1 > R_heightGS) {
						//alert ('try');
						//document.getElementById("center_tiles").value = f1 ;
						document.getElementById("ans_1GS").value = tru;
						document.getElementById("ans_1GS").style.color = "green";
					} else if (f1 == '') {
						document.getElementById("ans_1GS").value = '';
					} else {
						document.getElementById("ans_1GS").value = tru;
						document.getElementById("ans_1GS").style.color = "green";
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////
			jQuery.ajax({
				url: "check/check_low_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&low_nokiten_1GS=' + $("#low_nokiten_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailB_1GS-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten_1GS").value = document.getElementById("emailB_1GS-availability-status").innerHTML;
					//var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0 ;		
					var center_tilesGSS = document.getElementById("center_tiles_1GS").value;
					var center_tilesGS = center_tilesGSS.slice(5);
					var low_nokitenGS = parseFloat($('input[name=low_nokiten_1GS]').val()) || 0;
					var f1 = $('#minimum_height_1GS').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Item 2:Height Exceeds Please Check if with load aboves';


					if (center_tilesGS <= low_nokitenGS) {
						document.getElementById("ans2_1GS").value = tru;
						document.getElementById("ans2_1GS").style.color = "green";
						document.getElementById("demos_1GS").value = '';

					} else if (center_tilesGS >= low_nokitenGS) {
						document.getElementById("ans2_1GS").value = fals;
						document.getElementById("ans2_1GS").style.color = "red";
						//document.getElementById("demos_1GS").value = judge ;
						//alert('Height Exceeds Please Check if with load above');
						//setTimeout(compute(),100);
					} else {
						document.getElementById("ans2_1GS").value = tru;
						document.getElementById("ans2_1GS").style.color = "green";
						document.getElementById("demos_1GS").value = '';
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////////////////////
			jQuery.ajax({
				url: "check/check_high_1GS.php",
				data: 'exterior_denki_1GS=' + $("#exterior_denki_1GS").val() +
					'&standard_1GS=' + $("#standard_1GS").val() +
					'&high_nokiten_1GS=' + $("#high_nokiten_1GS").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#emailCGS-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten_1GS").value = document.getElementById("emailCGS-availability-status").innerHTML;
					var center_tilesGS = parseFloat($('input[name=center_tiles_1GS]').val()) || 0;
					var high_nokitenGS = parseFloat($('input[name=high_nokiten_1GS]').val()) || 0;
					var f3 = $('#high_nokiten_1GS').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tilesGS <= high_nokitenGS) {
						document.getElementById("ans3_1GS").value = tru;
						document.getElementById("ans3_1GS").style.color = "green";
					} else if (center_tiles >= high_nokiten) {
						document.getElementById("ans3_1GS").value = fals;
						document.getElementById("ans3_1GS").style.color = "red";
					} else {
						document.getElementById("ans3_1GS").value = tru;
						document.getElementById("ans3_1GS").style.color = "green";
					}

					setTimeout(myequal_1GS, 100);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function myequalGS() {
			var R_heightGS = parseFloat($('input[name=R_heightGS]').val()) || 0;
			var center_tilesGS = document.getElementById("center_tilesGS").value;
			var judge2 = 'SEND FYI';
			//alert(R_height);
			if (R_heightGS == 0 || R_heightGS == '') {
				//alert(R_height);
				//alert(center_tiles); 
				document.getElementById("demossGS").value = '';
			} else if (R_heightGS != center_tilesGS) {
				//alert(R_height);
				document.getElementById("demossGS").value = judge2;
			} else {
				document.getElementById("demossGS").value = '';
			}
			var standardGS = document.getElementById("standardGS").value;
			var exterior_denkiGS = document.getElementById("exterior_denkiGS").value;
			if (exterior_denkiGS == 'joint box' || exterior_denkiGS == 'bousui socket') {
				if (standardGS == 'balcony_2f' || standardGS == 'EWH_2f' || standardGS == 'EWL_2f') {
					//document.getElementById("minimum_heightGS").value = '419';
				} else if (standardGS == 'balcony_3f' || standardGS == 'EWH_3f' || standardGS == 'EWL_3f') {
					//document.getElementById("minimum_heightGS").value = '431';
				}
			}
			setTimeout(10);
		}

		function myequal_1GS() {
			var R_heightGS = parseFloat($('input[name=R_height_1GS]').val()) || 0;
			var center_tilesGS = document.getElementById("center_tiles_1GS").value;
			var judge2 = 'SEND FYI';

			if (R_heightGS == 0 || R_heightGS == '') {
				document.getElementById("demoss_1GS").value = '';
			} else if (R_heightGS != center_tilesGS) {
				//alert(R_height);
				document.getElementById("demoss_1GS").value = judge2;
			} else {
				document.getElementById("demoss_1GS").value = '';
			}
			var standard = document.getElementById("standard_1GS").value;
			var exterior_denkiGS = document.getElementById("exterior_denki_1GS").value;
			if (exterior_denkiGS == 'joint box' || exterior_denkiGS == 'bousui socket') {
				if (standardGS == 'balcony_2f' || standardGS == 'EWH_2f' || standardGS == 'EWL_2f') {
					//document.getElementById("minimum_height_1GS").value = '419';
				} else if (standardGS == 'balcony_3f' || standardGS == 'EWH_3f' || standardGS == 'EWL_3f') {
					//document.getElementById("minimum_height_1GS").value = '431';
				}
			}

			setTimeout(10);
		}

		function compute() {
			var std_height = parseFloat($('input[name=std_height]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height]').val()) || 0;
			var standard = document.getElementById("standard").value;
			//var std_height1 = document.getElementById("std_height").value;	
			var exterior_denki = document.getElementById("exterior_denki").value;
			var top_height = document.getElementById("top_height").value;
			var bottom_height = document.getElementById("bottom_height").value;
			var center_tiles = document.getElementById("center_tiles").value;
			var minimum_height = document.getElementById("minimum_height").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;

			/* setTimeout(checkemailAvailabilityA(),100);
			setTimeout(checkemailAvailabilityB(),200);
			setTimeout(checkemailAvailabilityC(),300);  */
			setTimeout(combine, 40);
			setTimeout(centerhole(), 400);
			setTimeout(checkemailA(), 500);
			//setTimeout(checkemailAvailability(),500);

			//setTimeout(hitting(),500);
			var center_tiles = (std_height - R_height) / 49;
			var center_tiles1 = (R_height - std_height) / 49;
			var num = Number.isInteger(center_tiles1);
			//console.log(num)
			//alert(num);
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			//alert(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;


			//alert(Result3);
			var judge = 'Use Maximum Height then send FYI';
			var judge2 = 'Send FYI';



			$('#center_tiles').val('H=FL+' + Result4);

			if (exterior_denki == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki").val(exterior_denki);
				} else {
					alert('not possible');
					$("#exterior_denki").val("");
				}
			} else if (exterior_denki == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki").val("");
				} else {
					$("#exterior_denki").val(exterior_denki);
				}
			}


			if (R_height >= std_height) {
				if (R_height != '') {
					if (minimum_height >= R_height) {
						//document.getElementById("notfollow240+").value = 'NOT FOLLOW';
						//document.getElementById("use240").value = 'Use Standard Height';
					}
					if (R_height >= minimum_height) {
						document.getElementById("notfollow240+").value = '';
						document.getElementById("use240").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow240+").value = '';
					document.getElementById("use240").value = 'Item Height to Use';
				}
				if (num == true) {
					var Result5 = std_height + Result3;
					if (exterior_denki == 'meterbox' && R_height != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow240();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterbox240').val('OFFSET IN ELEVATION ' + y);
							$('#plus240').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow240();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterbox240').val('OFFSET IN ELEVATION' + y);
							$('#plus240').val('+634');
						} else {
							$('#center_tiles').val(Result5);
						}
					} else {
						meterboxHide240();
						$('#meterbox240').val('');
						$('#plus240').val('');
					}
					/* 
					console.log('a') 
					 //alert(Result5);*/
					$('#center_tiles').val('H=FL+' + Result5);
				}
				if (num == false) {
					var Result6 = std_height + Result3 + 49;

					if (exterior_denki == 'meterbox' && R_height != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow240();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterbox240').val('OFFSET IN ELEVATION' + y);
							$('#plus240').val('614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow240();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterbox240').val('OFFSET IN ELEVATION ' + y);
							$('#plus240').val('+634');
						} else {
							$('#center_tiles').val('H=FL+' + Result6);
						}
					} else {
						meterboxHide240();
						$('#meterbox240').val('');
						$('#plus240').val('');
					}
					$('#center_tiles').val('H=FL+' + Result6);
				}


				//setTimeout(hitting(),500);
				//if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
				if ((exterior_denki == 'Wall Mounted Light' && standard == 'EWH_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWH_3f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_3f')

					&&
					Result5 > std_height) {
					alert(judge);
				} else if (std_height == '') {
					//alert('NOT');
				}
				fukakisoHide240();
			} else if (std_height >= R_height) {
				/* console.log(std_height);			
				console.log(minimum_height); */
				if (R_height) {

					if (std_height != minimum_height) {

						if (exterior_denki == 'bousui socket') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow240();
							} else {
								fukakisoHide240();
							}
						} else if (exterior_denki == 'EV PHEV socket') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow240();
							} else {
								fukakisoHide240();
							}
						} else if (exterior_denki == 'SHOURAI EV socket') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow240();
							} else {
								fukakisoHide240();
							}
						} else if (exterior_denki == 'joint box') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow240();
							} else {
								fukakisoHide240();
							}
						}
					}
				} else {
					fukakisoHide240();
				}
				if (exterior_denki == 'meterbox' && R_height != '') {
					if (planTypes == '夢の家Ⅳ') {
						meterboxShow240();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterbox240').val('OFFSET IN ELEVATION ' + y);
						$('#plus240').val('+614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow240();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterbox240').val('OFFSET IN ELEVATION ' + y);
						$('#plus240').val('+634');
					} else {
						$('#center_tiles').val('H=FL+' + Result4);
					}
				} else {
					meterboxHide240();
					$('#meterbox240').val('');
					$('#plus240').val('');
				}
				$('#center_tiles').val('H=FL+' + Result4);
				if (R_height != '') {
					if (minimum_height >= R_height) {
						//document.getElementById("notfollow240+").value = 'NOT FOLLOW';
						//document.getElementById("use240").value = 'Use Standard Height';
						$('#center_tiles').val('H=FL+' + minimum_height);
					}
					if (R_height >= minimum_height) {
						/* if(R_height >= minimum_height && Result4 <= minimum_height ){
										$('#center_tiles').val(minimum_height); 
									 } else { */
						document.getElementById("notfollow240+").value = '';
						document.getElementById("use240").value = 'Item Height to Use';
						/* $('#center_tiles').val(Result4); 
										console.log('2') 
									 } */

					}

				} else {
					document.getElementById("notfollow240+").value = '';
					document.getElementById("use240").value = 'Item Height to Use';
				}
			}


			if (R_height == '') {
				var x = document.getElementById("center_tiles").value = 'H=FL+' + std_height;
			}

			setTimeout(myequal, 100);
		}

		function compute_1() {
			var std_height = parseFloat($('input[name=std_height_1]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height_1]').val()) || 0;
			var standard = document.getElementById("standard_1").value;
			var std_height1 = document.getElementById("std_height_1").value;
			var exterior_denki = document.getElementById("exterior_denki_1").value;
			var minimum_height_1 = document.getElementById("minimum_height_1").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;

			//setTimeout(checkemailAvailability_1(),500);
			/* setTimeout(checkemailAvailabilityA_1(),500);
			setTimeout(checkemailAvailabilityB_1(),500);
			setTimeout(checkemailAvailabilityC_1(),500);  */
			setTimeout(combine, 40);
			setTimeout(centerhole_1(), 500);
			var center_tiles_1 = (std_height - R_height) / 49;
			var center_tiles1 = (R_height - std_height) / 49;
			var num = Number.isInteger(center_tiles1);
			var Result = Math.ceil(center_tiles_1);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height - Result2;

			/* var Result5 = std_height + Result3 + 49;
			var Result6 = std_height + Result3; */
			var judge = 'Use Maximum Height then send FYI ';
			var judge2 = 'Send FYI';
			//alert(standard);


			$('#center_tiles_1').val('H=FL+' + Result4);
			/* $('#center_tiles_1').val(Result5);
			$('#center_tiles_1').val(Result6); */

			/*  if (R_height != Result5){
				//alert('try'); 
				document.getElementById("demoss").value = judge2 ;
			}  else if(R_height == Result5 ) {
				
				document.getElementById("demoss").value = '' ;
			} else if (R_height == '')  {
				document.getElementById("demoss").value = '' ;
			} */
			if (exterior_denki == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki_1").val(exterior_denki);
				} else {
					alert('not possible');
					$("#exterior_denki_1").val("");
				}
			} else if (exterior_denki == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki_1").val("");
				} else {
					$("#exterior_denki_1").val(exterior_denki);
				}
			}
			/* if (exterior_denki == 'meterbox1' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				
				$("#exterior_denki_1").val(exterior_denki);
			} else if (exterior_denki == 'meterbox2' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				alert('not possible');
				$("#exterior_denki_1").val("");
			} */
			if (std_height1 == '') {

			}
			if (R_height >= std_height) {
				//$('#center_tiles_1').val(Result5);
				if (R_height != '') {
					if (minimum_height_1 >= R_height) {
						//document.getElementById("notfollow240+2").value = 'NOT FOLLOW';
						//document.getElementById("use2402").value = 'Use Standard Height';
					}
					if (R_height >= minimum_height_1) {
						document.getElementById("notfollow240+2").value = '';
						document.getElementById("use2402").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow240+2").value = '';
					document.getElementById("use2402").value = 'Item Height to Use';
				}
				if (num == true) {
					var Result5 = std_height + Result3 + 49;
					if (exterior_denki == 'meterbox' && R_height != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow2402();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterbox2402').val('OFFSET IN ELEVATION ' + y);
							$('#plus2402').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow2402();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterbox2402').val('OFFSET IN ELEVATION ' + y);
							$('#plus2402').val('+634');
						} else {
							$('#center_tiles_1').val('H=FL+' + Result5);
						}
					} else {
						meterboxHide2402();
						$('#meterbox2402').val('');
						$('#plus2402').val('');
					}
					$('#center_tiles_1').val('H=FL+' + Result5);
				}
				if (num == false) {
					var Result6 = std_height + Result3 + 49;

					if (exterior_denki == 'meterbox' && R_height != '') {

						if (planTypes == '夢の家Ⅳ') {
							meterboxShow2402();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterbox2402').val('OFFSET IN ELEVATION ' + y);
							$('#plus2402').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow2402();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterbox2402').val('OFFSET IN ELEVATION ' + y);
							$('#plus2402').val('+634');
						} else {
							$('#center_tiles_1').val('H=FL+' + Result6);
						}
					} else {
						meterboxHide2402();
						$('#meterbox2402').val('');
						$('#plus2402').val('');
					}
					// alert(Result6);
					$('#center_tiles_1').val('H=FL+' + Result6);
				}
				//if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
				if ((exterior_denki == 'Wall Mounted Light' && standard == 'EWH_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_2f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWH_3f') || (exterior_denki == 'Wall Mounted Light' && standard == 'EWL_3f')

					&&
					Result5 > std_height) {
					alert(judge);
				} else if (std_height1 == '') {
					//alert('NOT');
				}
				fukakisoHide2402();
			} else if (std_height >= R_height) {
				if (R_height) {

					if (std_height != minimum_height_1) {

						if (exterior_denki == 'bousui socket') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow2402();
							} else {
								fukakisoHide2402();
							}
						} else if (exterior_denki == 'EV PHEV socket') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow2402();
							} else {
								fukakisoHide2402();
							}
						} else if (exterior_denki == 'SHOURAI EV socket') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow2402();
							} else {
								fukakisoHide2402();
							}
						} else if (exterior_denki == 'joint box') {
							if (standard == 'wooddeck' || standard == 'doma' || standard == 'balcony_2f' || standard == 'balcony_3f') {
								fukakisoShow2402();
							} else {
								fukakisoHide2402();
							}
						}
					}
				} else {
					fukakisoHide2402();
				}
				//$('#center_tiles_1').val(Result4);
				if (exterior_denki == 'meterbox' && R_height != '') {
					if (planTypes == '夢の家Ⅳ') {
						meterboxShow2402();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterbox2402').val('OFFSET IN ELEVATION ' + y);
						$('#plus2402').val('+614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow2402();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterbox2402').val('OFFSET IN ELEVATION ' + y);
						$('#plus2402').val('+634');
					} else {
						$('#center_tiles_1').val('H=FL+' + Result4);
					}
				} else {
					meterboxHide2402();
					$('#meterbox2402').val('');
					$('#plus2402').val('');
				}
				$('#center_tiles_1').val('H=FL+' + Result4);
				if (R_height != '') {
					if (minimum_height_1 >= R_height) {
						//document.getElementById("notfollow240+2").value = 'NOT FOLLOW';
						//document.getElementById("use2402").value = 'Use Standard Height';
						$('#center_tiles_1').val('H=FL+' + minimum_height_1);
					}
					if (R_height >= minimum_height_1) {
						document.getElementById("notfollow240+2").value = '';
						document.getElementById("use2402").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow240+2").value = '';
					document.getElementById("use2402").value = 'Item Height to Use';
				}
				/*  if(standard == 'EWH_2f' || standard == 'EWL_2f' || standard == 'EWH_3f' || standard == 'EWL_3f'  && Result5 > std_height){
					alert(judge);
				}	 */
			}

			if (R_height == '') {
				document.getElementById("center_tiles_1").value = 'H=FL+' + std_height;
			}

			setTimeout(myequal_1, 10);
		}

		function hitting() {
			var center = document.getElementById("center_tiles").value;
			var center_tiles = center.slice(5);
			//var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height]').val()) || 0;
			var bottom_height = parseFloat($('input[name=bottom_height]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height]').val()) || 0;
			var ans = parseFloat(center_tiles) + top_height;
			var ans2 = parseFloat(center_tiles) - bottom_height;
			var x = document.getElementById("center_tiles_hit").value = ans;
			var y = document.getElementById("center_tiles_hit2").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit]').val()) || 0;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2]').val()) || 0;
			var z = center_tiles_hit - center_tiles_hit2;
			var calc = document.getElementById("center_tiles_hit3").value = z;

			//alert(center_tiles);
		}

		function checkemailAvailability() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_height.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var number1 = document.getElementById("std_height").value = document.getElementById("email-availability-status").innerHTML;
					//var std_height = parseFloat($('select[name=std_height]').val()) || 0 ;
					var number6 = document.getElementById("standard").value;
					var number7 = document.getElementById("R_height").value;
					var number8 = document.getElementById("center_tiles").value;
					if (number6 == 'Choose Type') {
						document.getElementById("std_height").value = '';
					} else if (number6 != '') {
						document.getElementById("standard_1").value = number6;
						setTimeout(checkemailAvailability_1, 300);
					}
					//alert(number1);

					setTimeout(compute, 100);
					setTimeout(hitting, 200);
					setTimeout(combine, 300);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});

		}

		function centerhole() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					var number1 = document.getElementById("top_height").value = document.getElementById("email-availability-status").innerHTML;
					var number2 = document.getElementById("top_height").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height").value = strArray[0];
						document.getElementById("bottom_height").value = strArray[1];
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		/////////////////////////////////
		function hitting_1() {
			var center = document.getElementById("center_tiles_1").value;
			var center_tiles = center.slice(5);
			//var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height_1]').val()) || 0;
			var bottom_height = parseFloat($('input[name=bottom_height_1]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height_1]').val()) || 0;
			var ans = parseFloat(center_tiles) + top_height;
			var ans2 = parseFloat(center_tiles) - bottom_height;
			var x = document.getElementById("center_tiles_hit_1").value = ans;
			var y = document.getElementById("center_tiles_hit2_1").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit_1]').val()) || 0;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2_1]').val()) || 0;
			var z = center_tiles_hit - center_tiles_hit2;
			var calc = document.getElementById("center_tiles_hit3_1").value = z;

		}

		function checkemailAvailability_1() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_height_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&standard_1=' + $("#standard_1").val(),
				type: "POST",
				success: function(data) {
					$("#email_1-availability-status").html(data);
					var number1 = document.getElementById("std_height_1").value = document.getElementById("email_1-availability-status").innerHTML;
					//var std_height = parseFloat($('select[name=std_height]').val()) || 0 ;
					var number6 = document.getElementById("standard_1").value;
					var number7 = document.getElementById("R_height_1").value;
					var number8 = document.getElementById("center_tiles_1").value;
					if (number6 == 'Choose Type') {
						document.getElementById("std_height_1").value = '';
					} else {

					}
					setTimeout(compute_1, 100);
					setTimeout(hitting_1, 200);
					setTimeout(combine, 300);


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function centerhole_1() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val(),
				type: "POST",
				success: function(data) {
					$("#email_1-availability-status").html(data);
					var number1 = document.getElementById("top_height_1").value = document.getElementById("email_1-availability-status").innerHTML;
					var number2 = document.getElementById("top_height_1").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height_1").value = strArray[0];
						document.getElementById("bottom_height_1").value = strArray[1];
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function combine() {
			var item1 = parseFloat($('input[name=center_tiles_hit]').val()) || 0;
			var item2 = parseFloat($('input[name=center_tiles_hit_1]').val()) || 0;
			var item3 = parseFloat($('input[name=center_tiles_hit3]').val()) || 0;
			var item4 = parseFloat($('input[name=center_tiles_hit3_1]').val()) || 0;
			var exterior_denki_1 = document.getElementById("exterior_denki_1").value;
			var exterior_denki = document.getElementById("exterior_denki").value;
			var R_height = document.getElementById("R_height").value;
			var R_height_1 = document.getElementById("R_height_1").value;
			var standard = document.getElementById("standard").value;
			var standard_1 = document.getElementById("standard_1").value;
			var result = item1 - item2;
			var result1 = -result;
			var equal = Math.ceil(result1);
			var equal2 = Math.abs(equal);
			var judge = document.getElementById("hittings").value = equal2;
			if (exterior_denki_1 != '' && exterior_denki != '') {
				console.log(item1);
				if (judge > item3 || judge > item4 || (exterior_denki == 'interphone' || exterior_denki == 'joint box') && standard == standard_1 && R_height == R_height_1 && (exterior_denki_1 == 'interphone' || exterior_denki_1 == 'joint box')) {

					document.getElementById("good_hit").value = '	P O S S I B L E';
					document.getElementById("good_hit").style.color = "white";
					document.getElementById("good_hit").style.background = "black";
				} else {
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
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&minimum_height=' + $("#minimum_height").val(),
				type: "POST",
				success: function(data) {
					$("#emailA-availability-status").html(data);
					var number1 = document.getElementById("minimum_height").value = document.getElementById("emailA-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_height = parseFloat($('input[name=R_height]').val()) || 0;
					var f1 = $('#minimum_height').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailabilityA_1() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val() +
					'&minimum_height_1=' + $("#minimum_height_1").val(),
				type: "POST",
				success: function(data) {
					$("#emailA_1-availability-status").html(data);
					var number1 = document.getElementById("minimum_height_1").value = document.getElementById("emailA_1-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_height = parseFloat($('input[name=R_height_1]').val()) || 0;
					var f1 = $('#minimum_height_1').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////low/////////////////
		function checkemailAvailabilityB() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&low_nokiten=' + $("#low_nokiten").val(),
				type: "POST",
				success: function(data) {
					$("#emailB-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten").value = document.getElementById("emailB-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0;
					var low_nokiten = parseFloat($('input[name=low_nokiten]').val()) || 0;
					var f1 = $('#minimum_height').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailabilityB_1() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val() +
					'&low_nokiten_1=' + $("#low_nokiten_1").val(),
				type: "POST",
				success: function(data) {
					$("#emailB_1-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten_1").value = document.getElementById("emailB_1-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0;
					var low_nokiten = parseFloat($('input[name=low_nokiten_1]').val()) || 0;
					var f1 = $('#minimum_height_1').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		////////////////////high/////////////////
		function checkemailAvailabilityC() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&high_nokiten=' + $("#high_nokiten").val(),
				type: "POST",
				success: function(data) {
					$("#emailC-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten").value = document.getElementById("emailC-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0;
					var high_nokiten = parseFloat($('input[name=high_nokiten]').val()) || 0;
					var f3 = $('#high_nokiten').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailabilityC_1() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val() +
					'&high_nokiten_1=' + $("#high_nokiten_1").val(),
				type: "POST",
				success: function(data) {
					$("#emailC_1-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten_1").value = document.getElementById("emailC_1-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0;
					var high_nokiten = parseFloat($('input[name=high_nokiten_1]').val()) || 0;
					var f3 = $('#high_nokiten_1').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailA() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&minimum_height=' + $("#minimum_height").val(),
				type: "POST",
				success: function(data) {
					$("#emailA-availability-status").html(data);
					var number1 = document.getElementById("minimum_height").value = document.getElementById("emailA-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_height = parseFloat($('input[name=R_height]').val()) || 0;
					var f1 = $('#minimum_height').val();

					var tru = '✔';
					var fals = '✘';

					if (center_tiles >= minimum_height) {
						document.getElementById("ans").value = tru;
						document.getElementById("ans").style.color = "green";
					} else if (center_tiles < minimum_height) {
						document.getElementById("ans").value = fals;
						document.getElementById("ans").style.color = "red";
						//alert('Height is below minimum Please Check');
					} else if (f1 > R_height) {
						//alert ('try');
						//document.getElementById("center_tiles").value = f1 ;
						document.getElementById("ans").value = tru;
						document.getElementById("ans").style.color = "green";
					} else if (f1 == '') {
						document.getElementById("ans").value = '';
					} else {
						document.getElementById("ans").value = tru;
						document.getElementById("ans").style.color = "green";
					}
					//$('#center_tiles').val(Result4);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////
			jQuery.ajax({
				url: "check/check_low.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&low_nokiten=' + $("#low_nokiten").val(),
				type: "POST",
				success: function(data) {
					$("#emailB-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten").value = document.getElementById("emailB-availability-status").innerHTML;
					//var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0 ;		
					var center_tiless = document.getElementById("center_tiles").value;
					var center_tiles = center_tiless.slice(5);
					var low_nokiten = parseFloat($('input[name=low_nokiten]').val()) || 0;
					var f1 = $('#minimum_height').val();
					var tru = '✔';
					var fals = '✘';
					var judge = "Item 1:Height Exceeds Please Check if with load above";


					if (center_tiles <= low_nokiten) {
						document.getElementById("ans2").value = tru;
						document.getElementById("ans2").style.color = "green";
						document.getElementById("demos").value = '';

					} else if (center_tiles >= low_nokiten) {
						document.getElementById("ans2").value = fals;
						document.getElementById("ans2").style.color = "red";
						document.getElementById("demos").value = judge;

					} else {
						document.getElementById("ans2").value = tru;
						document.getElementById("ans2").style.color = "green";
						document.getElementById("demos").value = '';
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////////////////////
			jQuery.ajax({
				url: "check/check_high.php",
				data: 'exterior_denki=' + $("#exterior_denki").val() +
					'&standard=' + $("#standard").val() +
					'&high_nokiten=' + $("#high_nokiten").val(),
				type: "POST",
				success: function(data) {
					$("#emailC-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten").value = document.getElementById("emailC-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles]').val()) || 0;
					var high_nokiten = parseFloat($('input[name=high_nokiten]').val()) || 0;
					var f3 = $('#high_nokiten').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles <= high_nokiten) {
						document.getElementById("ans3").value = tru;
						document.getElementById("ans3").style.color = "green";
					} else if (center_tiles >= high_nokiten) {
						document.getElementById("ans3").value = fals;
						document.getElementById("ans3").style.color = "red";
					} else {
						document.getElementById("ans3").value = tru;
						document.getElementById("ans3").style.color = "green";
					}
					setTimeout(myequal, 100);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailA_1() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val() +
					'&minimum_height_1=' + $("#minimum_height_1").val(),
				type: "POST",
				success: function(data) {
					$("#emailA_1-availability-status").html(data);
					var number1 = document.getElementById("minimum_height_1").value = document.getElementById("emailA_1-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0;
					//var minimum_height = parseFloat($('input[name=minimum_height]').val()) || 0 ;		
					var R_height = parseFloat($('input[name=R_height_1]').val()) || 0;
					var f1 = $('#minimum_height_1').val();

					var tru = '✔';
					var fals = '✘';

					if (center_tiles >= minimum_height) {
						document.getElementById("ans_1").value = tru;
						document.getElementById("ans_1").style.color = "green";
					} else if (center_tiles < minimum_height) {
						document.getElementById("ans_1").value = fals;
						document.getElementById("ans_1").style.color = "red";
						//alert('Height is below minimum Please Check');
					} else if (f1 > R_height) {
						//alert ('try');
						//document.getElementById("center_tiles").value = f1 ;
						document.getElementById("ans_1").value = tru;
						document.getElementById("ans_1").style.color = "green";
					} else if (f1 == '') {
						document.getElementById("ans_1").value = '';
					} else {
						document.getElementById("ans_1").value = tru;
						document.getElementById("ans_1").style.color = "green";
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////
			jQuery.ajax({
				url: "check/check_low_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val() +
					'&low_nokiten_1=' + $("#low_nokiten_1").val(),
				type: "POST",
				success: function(data) {
					$("#emailB_1-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten_1").value = document.getElementById("emailB_1-availability-status").innerHTML;
					//var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0 ;	
					var center_tiless = document.getElementById("center_tiles_1").value;
					var center_tiles = center_tiless.slice(5);
					var low_nokiten = parseFloat($('input[name=low_nokiten_1]').val()) || 0;
					var f1 = $('#minimum_height_1').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Item 2:Height Exceeds Please Check if with load above';


					if (center_tiles <= low_nokiten) {
						document.getElementById("ans2_1").value = tru;
						document.getElementById("ans2_1").style.color = "green";
						document.getElementById("demos_1").value = '';

					} else if (center_tiles >= low_nokiten) {
						document.getElementById("ans2_1").value = fals;
						document.getElementById("ans2_1").style.color = "red";
						document.getElementById("demos_1").value = judge;
						//alert('Height Exceeds Please Check if with load above');
						//setTimeout(compute(),100);
					} else {
						document.getElementById("ans2_1").value = tru;
						document.getElementById("ans2_1").style.color = "green";
						document.getElementById("demos_1").value = '';
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			//////////////////////////////////
			jQuery.ajax({
				url: "check/check_high_1.php",
				data: 'exterior_denki_1=' + $("#exterior_denki_1").val() +
					'&standard_1=' + $("#standard_1").val() +
					'&high_nokiten_1=' + $("#high_nokiten_1").val(),
				type: "POST",
				success: function(data) {
					$("#emailC-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten_1").value = document.getElementById("emailC-availability-status").innerHTML;
					var center_tiles = parseFloat($('input[name=center_tiles_1]').val()) || 0;
					var high_nokiten = parseFloat($('input[name=high_nokiten_1]').val()) || 0;
					var f3 = $('#high_nokiten_1').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles <= high_nokiten) {
						document.getElementById("ans3_1").value = tru;
						document.getElementById("ans3_1").style.color = "green";
					} else if (center_tiles >= high_nokiten) {
						document.getElementById("ans3_1").value = fals;
						document.getElementById("ans3_1").style.color = "red";
					} else {
						document.getElementById("ans3_1").value = tru;
						document.getElementById("ans3_1").style.color = "green";
					}

					setTimeout(myequal_1, 100);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function myequal() {
			var R_height = parseFloat($('input[name=R_height]').val()) || 0;
			var center_tiles = document.getElementById("center_tiles").value;
			var judge2 = 'SEND FYI';
			//alert(R_height);
			if (R_height == 0 || R_height == '') {
				//alert(R_height);
				//alert(center_tiles); 
				document.getElementById("demoss").value = '';
			} else if (R_height != center_tiles) {
				//alert(R_height);
				document.getElementById("demoss").value = judge2;
			} else {
				document.getElementById("demoss").value = '';
			}
			var standard = document.getElementById("standard").value;
			var exterior_denki = document.getElementById("exterior_denki").value;
			if (exterior_denki == 'joint box' || exterior_denki == 'bousui socket') {
				if (standard == 'balcony_2f' || standard == 'EWH_2f' || standard == 'EWL_2f') {
					//document.getElementById("minimum_height").value = '419';
				} else if (standard == 'balcony_3f' || standard == 'EWH_3f' || standard == 'EWL_3f') {
					//document.getElementById("minimum_height").value = '431';
				}
			}
			setTimeout(10);
		}

		function myequal_1() {
			var R_height = parseFloat($('input[name=R_height_1]').val()) || 0;
			var center_tiles = document.getElementById("center_tiles_1").value;
			var judge2 = 'SEND FYI';

			if (R_height == 0 || R_height == '') {
				document.getElementById("demoss_1").value = '';
			} else if (R_height != center_tiles) {
				//alert(R_height);
				document.getElementById("demoss_1").value = judge2;
			} else {
				document.getElementById("demoss_1").value = '';
			}
			var standard = document.getElementById("standard_1").value;
			var exterior_denki = document.getElementById("exterior_denki_1").value;
			if (exterior_denki == 'joint box' || exterior_denki == 'bousui socket') {
				if (standard == 'balcony_2f' || standard == 'EWH_2f' || standard == 'EWL_2f') {
					//document.getElementById("minimum_height_1").value = '419';
				} else if (standard == 'balcony_3f' || standard == 'EWH_3f' || standard == 'EWL_3f') {
					//document.getElementById("minimum_height_1").value = '431';
				}
			}

			setTimeout(10);
		}

		///////////////////////////240+T 140 DODAI//////////////////////////////////////////////////////
		function compute2() {

			var std_height1 = parseFloat($('input[name=std_height1]').val()) || 0;
			var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0;
			var standard1 = document.getElementById("standard1").value;
			var std_height4 = document.getElementById("std_height1").value;
			var exterior_denki1 = document.getElementById("exterior_denki1").value;
			var minimum_height1 = document.getElementById("minimum_height1").value;
			var wtight = document.getElementById("wtight").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;
			var floor = document.getElementById("floor").value;
			setTimeout(checkemailAvailability1A(), 500);
			setTimeout(checkemailAvailability1B(), 500);
			setTimeout(checkemailAvailability1C(), 500);
			setTimeout(combine2, 300);
			setTimeout(centerhole1(), 500);
			//setTimeout(hitting1(),700);
			var center_tiles = (std_height1 - R_height1) / 49;
			var center_tiles1 = (R_height1 - std_height1) / 49;
			var num = Number.isInteger(center_tiles1);
			//alert(num);
			var Result = Math.ceil(center_tiles);
			var Result1 = Math.floor(center_tiles1);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height1 - Result2;
			var Resultwt = std_height1 - Result2 + 49;

			/* var Result5 = std_height1 + Result3 + 49;
			var Result6 = std_height1 + Result3; */
			var judge = 'Use Maximum Height then send FYI ';

			$('#center_tiles1').val('H=FL+' + Result4);
			/* $('#center_tiles1').val(Result5);
			$('#center_tiles1').val(Result6); */
			if (exterior_denki1 == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki1").val(exterior_denki1);
				} else {
					alert('not possible');
					$("#exterior_denki1").val("");
				}
			} else if (exterior_denki1 == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki1").val("");
				} else {
					$("#exterior_denki1").val(exterior_denki1);
				}
			}
			/* if (exterior_denki1 == 'meterbox1' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				$("#exterior_denki1").val(exterior_denki1);
			} else if (exterior_denki1 == 'meterbox2' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				alert('not possible');
				$("#exterior_denki1").val("");
			} else {
				//$("#exterior_denki1").val(exterior_denki1);
			} */

			if (R_height1 >= std_height1) {
				if (R_height1 != '') {
					if (minimum_height1 >= R_height1) {
						//document.getElementById("notfollow").value = 'NOT FOLLOW';
						//document.getElementById("use240t").value = 'Use Standard Height';
					}
					if (R_height1 >= minimum_height1) {
						document.getElementById("notfollow").value = '';
						document.getElementById("use240t").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow").value = '';
					document.getElementById("use240t").value = 'Item Height to Use';
				}
				if (num == true) {
					var Result5 = std_height1 + Result3;
					if (exterior_denki1 == 'meterbox' && R_height1 != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow240T();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterbox240t').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow240T();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterbox240t').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T').val('+634');
						} else if (exterior_denki1 == 'KANSEN HIKIKOMI (幹線引込)' && R_height1 != '') {
							if (R_height1 >= std_height1) {
								$('#center_tiles1').val('H=FL+' + std_height1);
							} else if (minimum_height1 >= R_height1) {
								if (floor == '２Ｆ') {
									$('#center_tiles1').val('H=FL+' + minimum_height1);
								} else if (floor == '１Ｆ') {
									$('#center_tiles1').val('H=FL+' + Result6);
								}
							}
						} else {
							$('#center_tiles1').val('H=FL+' + Result5);
						}
					} else {
						meterboxHide240T();
						$('#meterbox240t').val('');
						$('#plus240T').val('');
						$('#center_tiles1').val('H=FL+' + Result5);
					}
					$('#center_tiles1').val('H=FL+' + Result5);
				}
				if (num == false) {

					//2021-04-16
					var Result6 = std_height1 + Result3 + 49;

					if (exterior_denki1 == 'meterbox' && R_height1 != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow240T();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterbox240t').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T').val('FL + 614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow240T();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterbox240t').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T').val('+634');
						} else {
							$('#center_tiles1').val('H=FL+' + Result6);
						}
						// console.log(Result6)
					} else if (exterior_denki1 == 'KANSEN HIKIKOMI (幹線引込)' && R_height1 != '') {
						if (R_height1 >= std_height1) {
							$('#center_tiles1').val('H=FL+' + std_height1);
						} else if (minimum_height1 >= R_height1) {
							if (floor == '２Ｆ') {
								$('#center_tiles1').val('H=FL+' + minimum_height1);
							} else if (floor == '１Ｆ') {
								$('#center_tiles1').val('H=FL+' + Result6);
							}
						}
					} else {
						meterboxHide240T();
						$('#meterbox240t').val('');
						$('#plus240T').val('');
						$('#center_tiles1').val('H=FL+' + Result6);
					}

				}

				if ((exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWH_2f') || (exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWL_2f') || (exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWH_3f') || (exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWL_3f') &&
					Result5 > std_height4) {
					alert(judge);
				} else if (std_height4 == '') {
					//alert('NOT');
				}

				fukakisoHide240T();
			} else if (std_height1 > R_height1) {
				//$('#center_tiles1').val(Result4);
				if (R_height1) {

					if (std_height1 != minimum_height1) {

						if (exterior_denki1 == 'bousui socket') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T();
							} else {
								fukakisoHide240T();
							}
						} else if (exterior_denki1 == 'EV PHEV socket') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T();
							} else {
								fukakisoHide240T();
							}
						} else if (exterior_denki1 == 'SHOURAI EV socket') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T();
							} else {
								fukakisoHide240T();
							}
						} else if (exterior_denki1 == 'joint box') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T();
							} else {
								fukakisoHide240T();
							}
						}
					}
				} else {
					fukakisoHide240T();
				}
				if (exterior_denki1 == 'meterbox' && R_height1 != '') {
					if (planTypes == '夢の家Ⅳ') {
						meterboxShow240T();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterbox240t').val('OFFSET IN ELEVATION ' + y);
						$('#plus240T').val('FL + 614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow240T();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterbox240t').val('OFFSET IN ELEVATION ' + y);
						$('#plus240T').val('+634');
					} else {
						$('#center_tiles1').val('H=FL+' + Result4);
					}
				} else {
					meterboxHide240T();
					$('#meterbox240t').val('');
				}
				$('#center_tiles1').val('H=FL+' + Result4);
				if (R_height1 != '') {
					if (minimum_height1 >= R_height1) {
						//document.getElementById("notfollow").value = 'NOT FOLLOW';
						//document.getElementById("use240t").value = 'Use Standard Height';
						$('#center_tiles1').val('H=FL+' + minimum_height1);
					}
					if (R_height1 >= minimum_height1) {
						document.getElementById("notfollow").value = '';
						document.getElementById("use240t").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow").value = '';
					document.getElementById("use240t").value = 'Item Height to Use';
				}

			}
			if (R_height1 == '') {
				var x = document.getElementById("center_tiles1").value = 'H=FL+' + std_height1;
			}

			setTimeout(myequal2, 100);

		}

		function compute2_2() {

			var std_height1 = parseFloat($('input[name=std_height1_2]').val()) || 0;
			var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0;
			var standard1 = document.getElementById("standard1_2").value;
			var std_height4 = document.getElementById("std_height1_2").value;
			var exterior_denki1 = document.getElementById("exterior_denki1_2").value;
			var minimum_height1_2 = document.getElementById("minimum_height1_2").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;
			setTimeout(checkemailAvailability1A_2, 10);
			setTimeout(checkemailAvailability1B_2, 10);
			setTimeout(checkemailAvailability1C_2, 10);
			setTimeout(combine2, 300);
			setTimeout(centerhole1_2(), 500);
			var center_tiles1_ = (std_height1 - R_height1) / 49;
			var center_tiles1_2 = (R_height1 - std_height1) / 49;
			var num = Number.isInteger(center_tiles1_2);
			var Result = Math.ceil(center_tiles1_);
			var Result1 = Math.floor(center_tiles1_2);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height1 - Result2;
			var judge = 'Use Maximum Height then send FYI ';

			$('#center_tiles1_2').val('H=FL+' + Result4);
			if (exterior_denki1 == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki1_2").val(exterior_denki1);
				} else {
					alert('not possible');
					$("#exterior_denki1_2").val("");
				}
			} else if (exterior_denki1 == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki1_2").val("");
				} else {
					$("#exterior_denki1_2").val(exterior_denki1);
				}
			}
			/* if (exterior_denki1 == 'meterbox1' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				$("#exterior_denki1_2").val(exterior_denki1);
				} else if (exterior_denki1 == 'meterbox2' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
					alert('not possible');
					$("#exterior_denki1_2").val("");
				} */

			if (R_height1 >= std_height1) {
				if (R_height1 != '') {
					if (minimum_height1_2 >= R_height1) {
						//document.getElementById("notfollow2").value = 'NOT FOLLOW';
						//document.getElementById("use240t2").value = 'Use Standard Height';
					}
					if (R_height1 >= minimum_height1_2) {
						document.getElementById("notfollow2").value = '';
						document.getElementById("use240t2").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow2").value = '';
					document.getElementById("use240t2").value = 'Item Height to Use';
				}
				if (num == true) {
					var Result5 = std_height1 + Result3;
					if (exterior_denki1 == 'meterbox' && R_height1 != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow240T2();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterbox240t2').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T2').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow240T2();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterbox240t2').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T2').val('+634');
						} else {
							$('#center_tiles1_2').val(Result5);
						}
					} else {
						meterboxHide240T2();
						$('#meterbox240t2').val('');
						$('#plus240T2').val('');
					}
					$('#center_tiles1_2').val('H=FL+' + Result5);
				}
				if (num == false) {
					var Result6 = std_height1 + Result3;
					if (exterior_denki1 == 'meterbox' && R_height1 != '') {
						if (planTypes == '夢の家Ⅳ') {
							meterboxShow240T2();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterbox240t2').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T2').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow240T2();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterbox240t2').val('OFFSET IN ELEVATION ' + y);
							$('#plus240T2').val('+634');
						} else {
							$('#center_tiles1_2').val('H=FL+' + Result6);
						}
					} else {
						meterboxHide240T2();
						$('#meterbox240t2').val('');
						$('#plus240T2').val('');
					}
					$('#center_tiles1_2').val('H=FL+' + Result6);
				}
				if ((exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWH_2f') || (exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWL_2f') || (exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWH_3f') || (exterior_denki1 == 'Wall Mounted Light' && standard1 == 'EWL_3f') &&
					Result5 > std_height4) {
					alert(judge);
				} else if (std_height4 == '') {
					//alert('NOT');
				}
				fukakisoHide240T2();
			} else if (std_height1 > R_height1) {
				//$('#center_tiles1_2').val(Result4);
				if (R_height1) {

					if (std_height1 != minimum_height1_2) {

						if (exterior_denki1 == 'bousui socket') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T2();
							} else {
								fukakisoHide240T2();
							}
						} else if (exterior_denki1 == 'EV PHEV socket') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T2();
							} else {
								fukakisoHide240T2();
							}
						} else if (exterior_denki1 == 'SHOURAI EV socket') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T2();
							} else {
								fukakisoHide240T2();
							}
						} else if (exterior_denki1 == 'joint box') {
							if (standard1 == 'wooddeck' || standard1 == 'doma' || standard1 == 'balcony_2f' || standard1 == 'balcony_3f') {
								fukakisoShow240T2();
							} else {
								fukakisoHide240T2();
							}
						}
					}
				} else {
					fukakisoHide240T2();
				}
				if (exterior_denki1 == 'meterbox' && R_height1 != '') {
					if (planTypes == '夢の家Ⅳ') {
						meterboxShow240T2();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterbox240t2').val('OFFSET IN ELEVATION ' + y);
						$('#plus240T2').val('+614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow240T2();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterbox240t2').val('OFFSET IN ELEVATION ' + y);
						$('#plus240T2').val('+634');
					} else {
						$('#center_tiles1_2').val(Result4);
					}
				} else {
					meterboxHide240T2();
					$('#meterbox240t2').val('');
					$('#plus240T2').val('');
				}
				$('#center_tiles1_2').val('H=FL+' + Result4);
				if (R_height1 != '') {
					if (minimum_height1_2 >= R_height1) {
						//document.getElementById("notfollow2").value = 'NOT FOLLOW';
						//document.getElementById("use240t2").value = 'Use Standard Height';
						$('#center_tiles1_2').val('H=FL+' + minimum_height1_2);
					}
					if (R_height1 >= minimum_height1_2) {
						document.getElementById("notfollow2").value = '';
						document.getElementById("use240t2").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow2").value = '';
					document.getElementById("use240t2").value = 'Item Height to Use';
				}
			}
			if (R_height1 == '') {

				var x = document.getElementById("center_tiles1_2").value = 'H=FL+' + std_height1;
			}
			setTimeout(myequal2_2, 100);

		}

		function hitting1() {
			var center = document.getElementById("center_tiles1").value;
			var center_tiles = center.slice(5);
			//var center_tiles = parseFloat($('input[name=center_tiles1]').val()) || 0 ;
			//var center_tiles = parseFloat($('input[name=std_height1]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height1]').val()) || 0;
			var bottom_height = parseFloat($('input[name=bottom_height1]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height1]').val()) || 0;
			var ans = parseFloat(center_tiles) + top_height;
			var ans2 = parseFloat(center_tiles) - bottom_height;
			var x = document.getElementById("center_tiles_hit1_2").value = ans;
			var y = document.getElementById("center_tiles_hit2_2").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit1_2]').val()) || 0;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2_2]').val()) || 0;
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
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1-availability-status").html(data);
					var number1 = document.getElementById("std_height1").value = document.getElementById("email1-availability-status").innerHTML;
					var number6 = document.getElementById("standard1").value;
					var number7 = document.getElementById("R_height1").value;
					//alert(number1);
					if (number6 == 'Choose Type') {
						document.getElementById("std_height1").value = '';
					} else if (number6 != '') {
						document.getElementById("standard1_2").value = number6;
						setTimeout(checkemailAvailability1_2, 100);
					}
					setTimeout(compute2, 10);
					setTimeout(hitting1, 20);
					setTimeout(combine2, 30);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function centerhole1() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole1.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val(),
				type: "POST",
				success: function(data) {
					$("#email1A-availability-status").html(data);
					var number1 = document.getElementById("top_height1").value = document.getElementById("email1A-availability-status").innerHTML;
					var number2 = document.getElementById("top_height1").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height1").value = strArray[0];
						document.getElementById("bottom_height1").value = strArray[1];
					}
					setTimeout(hitting1(), 10);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function hitting1_2() {
			var center = document.getElementById("center_tiles1_2").value;
			var center_tiles = center.slice(5);
			//var center_tiles = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height1_2]').val()) || 0;
			var bottom_height = parseFloat($('input[name=bottom_height1_2]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height1_2]').val()) || 0;
			var ans = parseFloat(center_tiles) + top_height;
			var ans2 = parseFloat(center_tiles) - bottom_height;
			var x = document.getElementById("center_tiles_hit1_21").value = ans;
			var y = document.getElementById("center_tiles_hit2_22").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit1_21]').val()) || 0;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit2_22]').val()) || 0;
			var z = center_tiles_hit - center_tiles_hit2;
			var calc = document.getElementById("center_tiles_hit3_23").value = z;

			//alert(center_tiles);
		}

		function checkemailAvailability1_2() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_height2_2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1_2-availability-status").html(data);
					var number1 = document.getElementById("std_height1_2").value = document.getElementById("email1_2-availability-status").innerHTML;
					var number6 = document.getElementById("standard1_2").value;
					var number7 = document.getElementById("R_height1_2").value;

					if (number6 == 'Choose Type') {
						document.getElementById("std_height1_2").value = '';
					} else {
						//alert('s'); 
						//setTimeout(compute2,2000);					
					}
					setTimeout(compute2_2, 10);
					setTimeout(hitting1_2, 20);
					setTimeout(combine2, 30);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function centerhole1_2() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole1_2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val(),
				type: "POST",
				success: function(data) {
					$("#email1A_2-availability-status").html(data);
					var number1 = document.getElementById("top_height1_2").value = document.getElementById("email1A_2-availability-status").innerHTML;
					var number2 = document.getElementById("top_height1_2").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height1_2").value = strArray[0];
						document.getElementById("bottom_height1_2").value = strArray[1];
					}
					setTimeout(hitting1_2(), 10);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function combine2() {
			var item1 = parseFloat($('input[name=center_tiles_hit1_2]').val()) || 0;
			var item2 = parseFloat($('input[name=center_tiles_hit1_21]').val()) || 0;
			var item3 = parseFloat($('input[name=center_tiles_hit3_2]').val()) || 0;
			var item4 = parseFloat($('input[name=center_tiles_hit3_23]').val()) || 0;
			var exterior_denki_1 = document.getElementById("exterior_denki1_2").value;
			var exterior_denki1 = document.getElementById("exterior_denki1").value;
			var R_height1 = document.getElementById("R_height1").value;
			var R_height1_2 = document.getElementById("R_height1_2").value;
			var standard1 = document.getElementById("standard1").value;
			var standard1_2 = document.getElementById("standard1_2").value;
			var result = item1 - item2;
			var result1 = -result;
			var equal = Math.floor(result1);
			var equal2 = Math.abs(equal);
			var judge = document.getElementById("hittings2").value = equal2;
			if (exterior_denki_1 != '' && exterior_denki1 != '') {
				if (judge > item3 || judge > item4 || (exterior_denki1 == 'interphone' || exterior_denki1 == 'joint box') && standard1 == standard1_2 && R_height1 == R_height1_2 && (exterior_denki_1 == 'interphone' || exterior_denki_1 == 'joint box')) {
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
				//url: "check/check_height2.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&minimum_height=' + $("#minimum_height1").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1A-availability-status").html(data);
					var number1 = document.getElementById("minimum_height1").value = document.getElementById("email1A-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0;
					var minimum_height1 = parseFloat($('input[name=minimum_height1]').val()) || 0;
					var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0;
					var f2 = $('#minimum_height1').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailability1A_2() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum1_2.php",
				//url: "check/check_height2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&minimum_height=' + $("#minimum_height1_2").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1A_2-availability-status").html(data);
					var number1 = document.getElementById("minimum_height1_2").value = document.getElementById("email1A_2-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0;
					var minimum_height1 = parseFloat($('input[name=minimum_height1_2]').val()) || 0;
					var R_height1 = parseFloat($('input[name=R_height1-2]').val()) || 0;
					var f2 = $('#minimum_height1_2').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////low/////////////////
		function checkemailAvailability1B() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low1.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&low_nokiten=' + $("#low_nokiten1").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&houseTypes=' + $("#houseTypes").val(),

				type: "POST",
				success: function(data) {
					$("#email1B-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten1").value = document.getElementById("email1B-availability-status").innerHTML;
					//var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0 ;
					var center_tiless1 = document.getElementById("center_tiles1").value;
					var center_tiles1 = center_tiless1.slice(5);
					var low_nokiten1 = parseFloat($('input[name=low_nokiten1]').val()) || 0;
					var f3 = $('#low_nokiten1').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Height Exceeds Please Check if with load above';
					if (center_tiles1 <= low_nokiten1) {
						document.getElementById("ans5").value = tru;
						document.getElementById("ans5").style.color = "green";
						document.getElementById("demos2").value = '';
					} else if (center_tiles1 >= low_nokiten1) {
						document.getElementById("ans5").value = fals;
						document.getElementById("ans5").style.color = "red";
						document.getElementById("demos2").value = judge;
					} else {
						document.getElementById("ans5").value = tru;
						document.getElementById("ans5").style.color = "green";
						document.getElementById("demos2").value = '';
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailability1B_2() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low1_2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&low_nokiten=' + $("#low_nokiten1_2").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&houseTypes=' + $("#houseTypes").val(),

				type: "POST",
				success: function(data) {
					$("#email1B_2-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten1_2").value = document.getElementById("email1B_2-availability-status").innerHTML;
					//var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;	
					var center_tiless1 = document.getElementById("center_tiles1_2").value;
					var center_tiles1 = center_tiless1.slice(5);
					var low_nokiten1 = parseFloat($('input[name=low_nokiten1_2]').val()) || 0;
					var f3 = $('#low_nokiten1_2').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Height Exceeds Please Check if with load above';


					if (center_tiles1 <= low_nokiten1) {
						document.getElementById("ans5_2").value = tru;
						document.getElementById("ans5_2").style.color = "green";
						document.getElementById("demos2_2").value = '';
					} else if (center_tiles1 >= low_nokiten1) {
						document.getElementById("ans5_2").value = fals;
						document.getElementById("ans5_2").style.color = "red";
						document.getElementById("demos2_2").value = judge;
					} else {
						document.getElementById("ans5_2").value = tru;
						document.getElementById("ans5_2").style.color = "green";
						document.getElementById("demos2_2").value = '';
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////high/////////////////
		function checkemailAvailability1C() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high1.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&high_nokiten=' + $("#high_nokiten1").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&houseTypes=' + $("#houseTypes").val(),

				type: "POST",
				success: function(data) {
					$("#email1C-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten1").value = document.getElementById("email1C-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0;
					var high_nokiten1 = parseFloat($('input[name=high_nokiten1]').val()) || 0;
					var f4 = $('#high_nokiten1').val();
					setTimeout(myequal2, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailability1C_2() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high1_2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&high_nokiten=' + $("#high_nokiten1_2").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&dodai=' + $("#dodai3").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1C_2-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten1_2").value = document.getElementById("email1C_2-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0;
					var high_nokiten1 = parseFloat($('input[name=high_nokiten1_2]').val()) || 0;
					var f4 = $('#high_nokiten1_2').val();
					setTimeout(myequal2_2, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////////////////////////////
		function checkemail1A() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum1.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&minimum_height=' + $("#minimum_height1").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1A-availability-status").html(data);
					var number1 = document.getElementById("minimum_height1").value = document.getElementById("email1A-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0;
					//var minimum_height1 = parseFloat($('input[name=minimum_height1]').val()) || 0 ;		
					var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0;
					var f2 = $('#minimum_height1').val();

					var tru = '✔';
					var fals = '✘';


					if (center_tiles1 >= minimum_height1) {
						document.getElementById("ans4").value = tru;
						document.getElementById("ans4").style.color = "green";
					} else if (center_tiles1 < minimum_height1) {
						document.getElementById("ans4").value = fals;
						document.getElementById("ans4").style.color = "red";
					} else if (f2 > R_height1) {
						//alert ('try');
						//document.getElementById("center_tiles1").value = f2 ;
						document.getElementById("ans4").value = tru;
						document.getElementById("ans4").style.color = "green";
					} else if (f2 == '') {
						document.getElementById("ans4").value = '';
					} else {
						document.getElementById("ans4").value = tru;
						document.getElementById("ans4").style.color = "green";
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			jQuery.ajax({
				url: "check/check_low1.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&low_nokiten=' + $("#low_nokiten1").val(),

				type: "POST",
				success: function(data) {
					$("#email1B-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten1").value = document.getElementById("email1B-availability-status").innerHTML;
					//var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0 ;	
					var center_tiless1 = document.getElementById("center_tiles1").value;
					var center_tiles1 = center_tiless1.slice(5);
					var low_nokiten1 = parseFloat($('input[name=low_nokiten1]').val()) || 0;
					var f3 = $('#low_nokiten1').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Height Exceeds Please Check if with load above';


					if (center_tiles1 <= low_nokiten1) {
						document.getElementById("ans5").value = tru;
						document.getElementById("ans5").style.color = "green";
						document.getElementById("demos2").value = '';
					} else if (center_tiles1 >= low_nokiten1) {
						document.getElementById("ans5").value = fals;
						document.getElementById("ans5").style.color = "red";
						document.getElementById("demos2").value = judge;
					} else {
						document.getElementById("ans5").value = tru;
						document.getElementById("ans5").style.color = "green";
						document.getElementById("demos2").value = '';
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			jQuery.ajax({
				url: "check/check_high1.php",
				data: 'exterior_denki=' + $("#exterior_denki1").val() +
					'&standard=' + $("#standard1").val() +
					'&high_nokiten=' + $("#high_nokiten1").val(),
				type: "POST",
				success: function(data) {
					$("#email1C-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten1").value = document.getElementById("email1C-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1]').val()) || 0;
					var high_nokiten1 = parseFloat($('input[name=high_nokiten1]').val()) || 0;
					var f4 = $('#high_nokiten1').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles1 <= high_nokiten1) {
						document.getElementById("ans6").value = tru;
						document.getElementById("ans6").style.color = "green";
					} else if (center_tiles1 >= high_nokiten1) {
						document.getElementById("ans6").value = fals;
						document.getElementById("ans6").style.color = "red";
					} else {
						document.getElementById("ans6").value = tru;
						document.getElementById("ans6").style.color = "green";
					}

					setTimeout(myequal2, 100);

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemail1A_2() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum1_2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&minimum_height=' + $("#minimum_height1_2").val() +
					'&kanabakari=' + $("#kanabakari").val() +
					'&floor=' + $("#floor").val() +
					'&wtight=' + $("#wtight").val() +
					'&houseTypes=' + $("#houseTypes").val(),
				type: "POST",
				success: function(data) {
					$("#email1A_2-availability-status").html(data);
					var number1 = document.getElementById("minimum_height1_2").value = document.getElementById("email1A_2-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0;
					//var minimum_height1 = parseFloat($('input[name=minimum_height1]').val()) || 0 ;		
					var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0;
					var f2 = $('#minimum_height1_2').val();

					var tru = '✔';
					var fals = '✘';


					if (center_tiles1 >= minimum_height1) {
						document.getElementById("ans4_2").value = tru;
						document.getElementById("ans4_2").style.color = "green";
					} else if (center_tiles1 < minimum_height1) {
						document.getElementById("ans4_2").value = fals;
						document.getElementById("ans4_2").style.color = "red";
					} else if (f2 > R_height1) {
						//alert ('try');
						//document.getElementById("center_tiles1_2").value = f2 ;
						document.getElementById("ans4-2").value = tru;
						document.getElementById("ans4_2").style.color = "green";
					} else if (f2 == '') {
						document.getElementById("ans4_2").value = '';
					} else {
						document.getElementById("ans4_2").value = tru;
						document.getElementById("ans4_2").style.color = "green";
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			jQuery.ajax({
				url: "check/check_low1_2.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&low_nokiten=' + $("#low_nokiten1_2").val(),

				type: "POST",
				success: function(data) {
					$("#email1B_2-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten1_2").value = document.getElementById("email1B_2-availability-status").innerHTML;
					//var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0 ;	
					var center_tiless1 = document.getElementById("center_tiles1_2").value;
					var center_tiles1 = center_tiless1.slice(5);
					var low_nokiten1 = parseFloat($('input[name=low_nokiten1_2]').val()) || 0;
					var f3 = $('#low_nokiten1_2').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Height Exceeds Please Check if with load above';


					if (center_tiles1 <= low_nokiten1) {
						document.getElementById("ans5_2").value = tru;
						document.getElementById("ans5_2").style.color = "green";
						document.getElementById("demos2_2").value = '';
					} else if (center_tiles1 >= low_nokiten1) {
						document.getElementById("ans5_2").value = fals;
						document.getElementById("ans5_2").style.color = "red";
						document.getElementById("demos2_2").value = judge;
					} else {
						document.getElementById("ans5_2").value = tru;
						document.getElementById("ans5_2").style.color = "green";
						document.getElementById("demos2_2").value = '';
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			jQuery.ajax({
				url: "check/check_high1.php",
				data: 'exterior_denki=' + $("#exterior_denki1_2").val() +
					'&standard=' + $("#standard1_2").val() +
					'&high_nokiten=' + $("#high_nokiten1_2").val(),
				type: "POST",
				success: function(data) {
					$("#email1C_2-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten1_2").value = document.getElementById("email1C_2-availability-status").innerHTML;
					var center_tiles1 = parseFloat($('input[name=center_tiles1_2]').val()) || 0;
					var high_nokiten1 = parseFloat($('input[name=high_nokiten1_2]').val()) || 0;
					var f4 = $('#high_nokiten1_2').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles1 <= high_nokiten1) {
						document.getElementById("ans6_2").value = tru;
						document.getElementById("ans6_2").style.color = "green";
					} else if (center_tiles1 >= high_nokiten1) {
						document.getElementById("ans6_2").value = fals;
						document.getElementById("ans6_2").style.color = "red";
					} else {
						document.getElementById("ans6_2").value = tru;
						document.getElementById("ans6_2").style.color = "green";
					}
					setTimeout(myequal2_2, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function myequal2() {
			var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0;
			var center_tiles1 = document.getElementById("center_tiles1").value;
			var judge2 = 'SEND FYI';
			//alert(R_height);
			if (R_height1 == 0 || R_height1 == '') {
				//alert(R_height);
				//alert(center_tiles); 
				document.getElementById("demoss2").value = '';
			} else if (R_height1 != center_tiles1) {
				//alert(R_height);
				document.getElementById("demoss2").value = judge2;
			} else {
				document.getElementById("demoss2").value = '';
			}
			var standard1 = document.getElementById("standard1").value;
			var exterior_denki1 = document.getElementById("exterior_denki1").value;
			if (exterior_denki1 == 'joint box' || exterior_denki1 == 'bousui socket') {
				if (standard1 == 'balcony_2f' || standard1 == 'EWH_2f' || standard1 == 'EWL_2f') {
					//document.getElementById("minimum_height1").value = '417';
				} else if (standard1 == 'balcony_3f' || standard1 == 'EWH_3f' || standard1 == 'EWL_3f') {
					//document.getElementById("minimum_height1").value = '';
				}
			}
			setTimeout(10);

		}

		function myequal2_2() {
			var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0;
			var center_tiles1 = document.getElementById("center_tiles1_2").value;
			var judge2 = 'SEND FYI';
			//alert(R_height);
			if (R_height1 == 0 || R_height1 == '') {
				//alert(R_height);
				//alert(center_tiles); 
				document.getElementById("demoss2_2").value = '';
			} else if (R_height1 != center_tiles1) {
				//alert(R_height);
				document.getElementById("demoss2_2").value = judge2;
			} else {
				document.getElementById("demoss2_2").value = '';
			}
			var standard1 = document.getElementById("standard1_2").value;
			var exterior_denki1 = document.getElementById("exterior_denki1_2").value;
			if (exterior_denki1 == 'joint box' || exterior_denki1 == 'bousui socket') {
				if (standard1 == 'balcony_2f' || standard1 == 'EWH_2f' || standard1 == 'EWL_2f') {
					//document.getElementById("minimum_height1_2").value = '417';
				} else if (standard1 == 'balcony_3f' || standard1 == 'EWH_3f' || standard1 == 'EWL_3f') {
					//document.getElementById("minimum_height1_2").value = '';
				}
			}
			setTimeout(10);
		}
		//////////////////////////260 140 DODAI//////////////////////////////
		function compute3() {

			var std_height2 = parseFloat($('input[name=std_height2]').val()) || 0;
			var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0;
			var standard2 = document.getElementById("standard2").value;
			var std_height3 = document.getElementById("std_height2").value;
			var exterior_denki2 = document.getElementById("exterior_denki2").value;
			var minimum_height2 = document.getElementById("minimum_height2").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;
			/* setTimeout(checkemailAvailability2A(),500);
			setTimeout(checkemailAvailability2B(),500);
			setTimeout(checkemailAvailability2C(),500); */
			setTimeout(hitting2(), 400);
			setTimeout(centerhole3(), 500);

			var center_tiles1 = (std_height2 - R_height2) / 49;
			var center_tiles2 = (R_height2 - std_height2) / 49;
			var num = Number.isInteger(center_tiles2);
			var Result = Math.ceil(center_tiles1);
			var Result1 = Math.floor(center_tiles2);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height2 - Result2;
			/* var Result5 = std_height2 + Result3 + 49;
			var Result6 = std_height2 + Result3; */
			var judge = 'Use Maximum Height then send FYI ';


			$('#center_tiles2').val('H=FL+' + Result4);
			if (exterior_denki2 == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki2").val(exterior_denki2);
				} else {
					alert('not possible');
					$("#exterior_denki2").val("");
				}
			} else if (exterior_denki2 == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki2").val("");
				} else {
					$("#exterior_denki2").val(exterior_denki2);
				}
			}
			/* if (exterior_denki2 == 'meterbox1' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				$("#exterior_denki2").val(exterior_denki2);
			} else if (exterior_denki2 == 'meterbox2' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				alert('not possible');
				$("#exterior_denki2").val("");
			} */
			//$('#center_tiles2').val(Result5);


			if (R_height2 >= std_height2) {

				if (R_height2 != '') {
					if (minimum_height2 >= R_height2) {
						//document.getElementById("notfollow260").value = 'NOT FOLLOW';
						//document.getElementById("use260").value = 'Use Standard Height';
					}
					if (R_height2 >= minimum_height2) {
						document.getElementById("notfollow260").value = '';
						document.getElementById("use260").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow260").value = '';
					document.getElementById("use260").value = 'Item Height to Use';
				}
				if (num == true) {

					var Result5 = std_height2 + Result3;
					if (exterior_denki2 == 'meterbox' && R_height2 != '') {

						if (planTypes == '夢の家Ⅳ') {
							meterboxShow260();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterbox260').val('OFFSET IN ELEVATION ' + y);
							$('#plus260').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow260();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterbox260').val('OFFSET IN ELEVATION ' + y);
							$('#plus260').val('+634');
						} else {
							$('#center_tiles2').val('H=FL+' + Result5);
						}
					} else {
						meterboxHide260();
						$('#meterbox260').val('');
						$('#plus260').val('');
					}
					//alert(Result5);
					$('#center_tiles2').val('H=FL+' + Result5);
				}
				if (num == false) {
					var Result6 = std_height2 + Result3 + 49;
					console.log(Result6)
					if (exterior_denki2 == 'meterbox' && R_height2 != '') {

						if (planTypes == '夢の家Ⅳ') {
							meterboxShow260();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterbox260').val('OFFSET IN ELEVATION ' + y);
							$('#plus260').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow260();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterbox260').val('OFFSET IN ELEVATION ' + y);
							$('#plus260').val('+634');
						} else {
							$('#center_tiles2').val('H=FL+' + Result6);

						}
					} else {
						meterboxHide260();
						$('#meterbox260').val('');
						$('#plus260').val('');
					}
					$('#center_tiles2').val('H=FL+' + Result6);
					// $('#center_tiles2').val();
				}
				if ((exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWH_2f') || (exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWL_2f') || (exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWH_3f') || (exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWL_3f') &&
					Result5 > std_height3) {
					alert(judge);
				} else if (std_height3 == '') {
					//alert('NOT');
				}
				fukakisoHide260();
			} else if (std_height2 > R_height2) {
				if (R_height2) {

					if (std_height2 != minimum_height2) {

						if (exterior_denki2 == 'bousui socket') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow260();
							} else {
								fukakisoHide260();
							}
						} else if (exterior_denki2 == 'EV PHEV socket') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow260();
							} else {
								fukakisoHide260();
							}
						} else if (exterior_denki2 == 'SHOURAI EV socket') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow260();
							} else {
								fukakisoHide260();
							}
						} else if (exterior_denki2 == 'joint box') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow260();
							} else {
								fukakisoHide260();
							}
						}
					}
				} else {
					fukakisoHide260();
				}
				if (exterior_denki2 == 'meterbox' && R_height2 != '') {

					if (planTypes == '夢の家Ⅳ') {
						meterboxShow260();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterbox260').val('OFFSET IN ELEVATION ' + y);
						$('#plus260').val('+614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow260();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterbox260').val('OFFSET IN ELEVATION ' + y);
						$('#plus260').val('+634');
					} else {
						$('#center_tiles2').val('H=FL+' + Result4);
					}
				} else {
					meterboxHide260();
					$('#meterbox260').val('');
					$('#plus260').val('');
				}
				$('#center_tiles2').val('H=FL+' + Result4);
				if (R_height2 != '') {
					if (minimum_height2 >= R_height2) {
						//document.getElementById("notfollow260").value = 'NOT FOLLOW';
						//document.getElementById("use260").value = 'Use Standard Height';
						$('#center_tiles2').val('H=FL+' + minimum_height2);
					}
					if (R_height2 >= minimum_height2) {
						document.getElementById("notfollow260").value = '';
						document.getElementById("use260").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow260").value = '';
					document.getElementById("use260").value = 'Item Height to Use';
				}
			}
			if (R_height2 == '') {
				document.getElementById("center_tiles2").value = 'H=FL+' + std_height2;
			}

			setTimeout(myequal3, 100);
		}

		function compute3_3() {

			var std_height2 = parseFloat($('input[name=std_height2_3]').val()) || 0;
			var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0;
			var standard2 = document.getElementById("standard2_3").value;
			var std_height3 = document.getElementById("std_height2_3").value;
			var exterior_denki2 = document.getElementById("exterior_denki2_3").value;
			var minimum_height2_3 = document.getElementById("minimum_height2_3").value;
			var ecompany = document.getElementById("ecompany").value;
			var planTypes = document.getElementById("planTypes").value;
			/* setTimeout(checkemailAvailability2A_3(),500);
			setTimeout(checkemailAvailability2B_3(),500);
			setTimeout(checkemailAvailability2C_3(),500); */
			setTimeout(hitting2_1(), 400);
			setTimeout(centerhole3_3(), 500);

			var center_tiles2_ = (std_height2 - R_height2) / 49;
			var center_tiles2_3 = (R_height2 - std_height2) / 49;
			var num = Number.isInteger(center_tiles2_3);
			var Result = Math.ceil(center_tiles2_);
			var Result1 = Math.floor(center_tiles2_3);
			var Result2 = Result * 49;
			var Result3 = Result1 * 49;
			var Result4 = std_height2 - Result2;
			var Result5 = std_height2 + Result3 + 49;
			var Result6 = std_height2 + Result3;
			var judge = 'Use Maximum Height then send FYI ';


			$('#center_tiles2_3').val('H=FL+' + Result4);
			/* if (exterior_denki2 == 'meterbox1' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
			$("#exterior_denki2_3").val(exterior_denki2);
			} else if (exterior_denki2 == 'meterbox2' && (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)')){
				alert('not possible');
				$("#exterior_denki2_3").val("");
			} */
			if (exterior_denki2 == 'meterbox1') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					$("#exterior_denki2_3").val(exterior_denki2);
				} else {
					alert('not possible');
					$("#exterior_denki2_3").val("");
				}
			} else if (exterior_denki2 == 'meterbox2') {
				if (ecompany == 'HOKKAIDOU(北海道電力)' || ecompany == 'TOHOUKU(東北電力)' || ecompany == 'CHUBU(中部電力)') {
					alert('not possible');
					$("#exterior_denki2_3").val("");
				} else {
					$("#exterior_denki2_3").val(exterior_denki2);
				}
			}
			/* $('#center_tiles2_3').val(Result5);
			$('#center_tiles2_3').val(Result6); */


			if (R_height2 >= std_height2) {
				if (R_height2 != '') {
					if (minimum_height2_3 >= R_height2) {
						//document.getElementById("notfollow260+2").value = 'NOT FOLLOW';
						//document.getElementById("use2602").value = 'Use Standard Height';
					}
					if (R_height2 >= minimum_height2_3) {
						document.getElementById("notfollow260+2").value = '';
						document.getElementById("use2602").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow260+2").value = '';
					document.getElementById("use2602").value = 'Item Height to Use';

				}
				document.getElementById("notfollow260+2").value = '';
				if (num == true) {
					var Result5 = std_height2 + Result3;
					if (exterior_denki2 == 'meterbox' && R_height2 != '') {

						if (planTypes == '夢の家Ⅳ') {
							meterboxShow2602();
							var x = Result5 + 614;
							var y = 'GL+' + x;
							$('#meterbox2602').val('OFFSET IN ELEVATION ' + y);
							$('#plus2602').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow2602();
							var x = Result5 + 634;
							var y = 'GL+' + x;
							$('#meterbox2602').val('OFFSET IN ELEVATION ' + y);
							$('#plus2602').val('+634');
						} else {
							$('#center_tiles2_3').val('H=FL+' + Result5);
						}
					} else {
						meterboxHide2602();
						$('#meterbox2602').val('');
						$('#plus2602').val('');
					}
					//alert(Result5);
					$('#center_tiles2_3').val(Result5);
				}
				if (num == false) {
					var Result6 = std_height2 + Result3 + 49;
					if (exterior_denki2 == 'meterbox' && R_height2 != '') {

						if (planTypes == '夢の家Ⅳ') {
							meterboxShow2602();
							var x = Result6 + 614;
							var y = 'GL+' + x;
							$('#meterbox2602').val('OFFSET IN ELEVATION ' + y);
							$('#plus2602').val('+614');
						} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
							meterboxShow2602();
							var x = Result6 + 634;
							var y = 'GL+' + x;
							$('#meterbox2602').val('OFFSET IN ELEVATION ' + y);
							$('#plus2602').val('+634');
						} else {
							$('#center_tiles2_3').val('H=FL+' + Result6);
						}
					} else {
						meterboxHide2602();
						$('#meterbox2602').val('');
						$('#plus2602').val('');
					}
					// alert(Result6);
					$('#center_tiles2_3').val('H=FL+' + Result6);
				}
				if ((exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWH_2f') || (exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWL_2f') || (exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWH_3f') || (exterior_denki2 == 'Wall Mounted Light' && standard2 == 'EWL_3f') &&
					Result5 > std_height3) {
					alert(judge);
				} else if (std_height3 == '') {
					//alert('NOT');
				}
				fukakisoHide2602();
			} else if (std_height2 > R_height2) {
				if (R_height2) {

					if (std_height2 != minimum_height2_3) {

						if (exterior_denki2 == 'bousui socket') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow2602();
							} else {
								fukakisoHide2602();
							}
						} else if (exterior_denki2 == 'EV PHEV socket') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow2602();
							} else {
								fukakisoHide2602();
							}
						} else if (exterior_denki2 == 'SHOURAI EV socket') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow2602();
							} else {
								fukakisoHide2602();
							}
						} else if (exterior_denki2 == 'joint box') {
							if (standard2 == 'wooddeck' || standard2 == 'doma' || standard2 == 'balcony_2f' || standard2 == 'balcony_3f') {
								fukakisoShow2602();
							} else {
								fukakisoHide2602();
							}
						}
					}
				} else {
					fukakisoHide2602();
				}

				if (exterior_denki2 == 'meterbox' && R_height2 != '') {

					if (planTypes == '夢の家Ⅳ') {
						meterboxShow2602();
						var x = Result4 + 614;
						var y = 'GL+' + x;
						$('#meterbox2602').val('OFFSET IN ELEVATION ' + y);
						$('#plus2602').val('+614');
					} else if (planTypes.includes("i-smart") || planTypes.includes("i-smile") || planTypes.includes("i-cube")) {
						meterboxShow2602();
						var x = Result4 + 634;
						var y = 'GL+' + x;
						$('#meterbox2602').val('OFFSET IN ELEVATION ' + y);
						$('#plus2602').val('+634');
					} else {
						$('#center_tiles2_3').val('H=FL+' + Result4);
					}
				} else {
					meterboxHide2602();
					$('#meterbox2602').val('');
					$('#plus2602').val('');
				}
				$('#center_tiles2_3').val('H=FL+' + Result4);
				if (R_height2 != '') {
					if (minimum_height2_3 >= R_height2) {
						//document.getElementById("notfollow260+2").value = 'NOT FOLLOW';
						//document.getElementById("use2602").value = 'Use Standard Height';
						$('#center_tiles2_3').val('H=FL+' + minimum_height2_3);
					}
					if (R_height2 >= minimum_height2_3) {
						document.getElementById("notfollow260+2").value = '';
						document.getElementById("use2602").value = 'Item Height to Use';
					}
				} else {
					document.getElementById("notfollow260+2").value = '';
					document.getElementById("use2602").value = 'Item Height to Use';

				}
			} else if (std_height2 == R_height2) {
				$('#center_tiles2_3').val('H=FL+' + Result6);
			}
			if (R_height2 == '') {
				document.getElementById("center_tiles2_3").value = 'H=FL+' + std_height2;
			}

			setTimeout(myequal3_3, 100);
		}

		function hitting2() {
			var center = document.getElementById("center_tiles2").value;
			var center_tiles = center.slice(5);
			//var center_tiles = parseFloat($('input[name=center_tiles2]').val()) || 0 ;
			//var center_tiles = parseFloat($('input[name=std_height1]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height2_1]').val()) || 0;
			var bottom_height = parseFloat($('input[name=bottom_height2_1]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height2]').val()) || 0;
			var ans = parseFloat(center_tiles) + top_height;
			var ans2 = parseFloat(center_tiles) - bottom_height;
			var x = document.getElementById("center_tiles_hit3_x").value = ans;
			var y = document.getElementById("center_tiles_hit3_y").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit3_x]').val()) || 0;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit3_y]').val()) || 0;
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
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&standard=' + $("#standard2").val(),
				type: "POST",
				success: function(data) {
					$("#email2-availability-status").html(data);
					var number1 = document.getElementById("std_height2").value = document.getElementById("email2-availability-status").innerHTML;
					var number6 = document.getElementById("standard2").value;
					var number7 = document.getElementById("R_height2").value;

					if (number6 == 'Choose Type') {
						document.getElementById("std_height2").value = '';
					} else if (number6 != '') {
						document.getElementById("standard2_3").value = number6;
						setTimeout(checkemailAvailability2_3, 100);
					}
					setTimeout(compute3, 100);
					setTimeout(hitting2(), 200);
					setTimeout(combine3(), 300);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function centerhole3() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole2.php",
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val(),
				type: "POST",
				success: function(data) {
					$("#email2A-availability-status").html(data);
					var number1 = document.getElementById("top_height2_1").value = document.getElementById("email2A-availability-status").innerHTML;
					var number2 = document.getElementById("top_height2_1").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height2_1").value = strArray[0];
						document.getElementById("bottom_height2_1").value = strArray[1];
					}
					setTimeout(hitting2(), 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function hitting2_1() {
			var center = document.getElementById("center_tiles2_3").value;
			var center_tiles = center.slice(5);
			//var center_tiles = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;
			//var center_tiles = parseFloat($('input[name=std_height1]').val()) || 0 ;
			var top_height = parseFloat($('input[name=top_height2_3]').val()) || 0;
			var bottom_height = parseFloat($('input[name=bottom_height2_3]').val()) || 0;
			var R_height = parseFloat($('input[name=R_height2_3]').val()) || 0;
			var ans = parseFloat(center_tiles) + top_height;
			var ans2 = parseFloat(center_tiles) - bottom_height;
			var x = document.getElementById("center_tiles_hit3_x1").value = ans;
			var y = document.getElementById("center_tiles_hit3_y2").value = ans2;
			var center_tiles_hit = parseFloat($('input[name=center_tiles_hit3_x1]').val()) || 0;
			var center_tiles_hit2 = parseFloat($('input[name=center_tiles_hit3_y2]').val()) || 0;
			var z = center_tiles_hit - center_tiles_hit2;
			var calc = document.getElementById("center_tiles_hit3_z3").value = z;
			//alert(center_tiles);
			//alert(center_tiles);
		}

		function checkemailAvailability2_3() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_height3_3.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&ecompany=' + $("#ecompany").val() +
					'&standard=' + $("#standard2_3").val(),
				type: "POST",
				success: function(data) {
					$("#email2-availability-status").html(data);
					var number1 = document.getElementById("std_height2_3").value = document.getElementById("email2-availability-status").innerHTML;
					var number6 = document.getElementById("standard2_3").value;
					var number7 = document.getElementById("R_height2_3").value;

					if (number6 == 'Choose Type') {
						document.getElementById("std_height2_3").value = '';
					} else {
						//alert('s'); 
						//setTimeout(compute3,2000);					
					}
					setTimeout(compute3_3, 100);
					setTimeout(hitting2_1, 200);
					setTimeout(combine3, 300);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function centerhole3_3() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_hole2_3.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val(),
				type: "POST",
				success: function(data) {
					$("#email2A_3-availability-status").html(data);
					var number1 = document.getElementById("top_height2_3").value = document.getElementById("email2A_3-availability-status").innerHTML;
					var number2 = document.getElementById("top_height2_3").value;
					var strArray = number2.split(",");
					for (var i = 0; i < strArray.length; i++) {
						document.getElementById("top_height2_3").value = strArray[0];
						document.getElementById("bottom_height2_3").value = strArray[1];
					}
					setTimeout(hitting2_1, 200);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function combine3() {
			var item1 = parseFloat($('input[name=center_tiles_hit3_x]').val()) || 0;
			var item2 = parseFloat($('input[name=center_tiles_hit3_x1]').val()) || 0;
			var item3 = parseFloat($('input[name=center_tiles_hit3_z]').val()) || 0;
			var item4 = parseFloat($('input[name=center_tiles_hit3_z3]').val()) || 0;
			var exterior_denki_1 = document.getElementById("exterior_denki2_3").value;
			var exterior_denki2 = document.getElementById("exterior_denki2").value;
			var R_height2 = document.getElementById("R_height2").value;
			var R_height2_3 = document.getElementById("R_height2_3").value;
			var standard2 = document.getElementById("standard2").value;
			var standard2_3 = document.getElementById("standard2_3").value;
			var result = item1 - item2;
			var result1 = -result;
			var equal = Math.floor(result1);
			var equal2 = Math.abs(equal);
			var judge = document.getElementById("hittings3").value = equal2;
			if (exterior_denki_1 != '' && exterior_denki2 != '') {
				if (judge > item3 || judge > item4 || (exterior_denki2 == 'interphone' || exterior_denki2 == 'joint box') && standard2 == standard2_3 && R_height2 == R_height2_3 && (exterior_denki_1 == 'interphone' || exterior_denki_1 == 'joint box')) {
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
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val() +
					'&minimum_height=' + $("#minimum_height2").val(),
				type: "POST",
				success: function(data) {
					$("#email2A-availability-status").html(data);
					var number1 = document.getElementById("minimum_height2").value = document.getElementById("email2A-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0;
					var minimum_height2 = parseFloat($('input[name=minimum_height2]').val()) || 0;
					var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0;
					var f3 = $('#minimum_height2').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailability2A_3() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum2_3.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val() +
					'&minimum_height=' + $("#minimum_height2_3").val(),
				type: "POST",
				success: function(data) {
					$("#email2A_3-availability-status").html(data);
					var number1 = document.getElementById("minimum_height2_3").value = document.getElementById("email2A-3-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0;
					var minimum_height2 = parseFloat($('input[name=minimum_height2_3]').val()) || 0;
					var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0;
					var f3 = $('#minimum_height2_3').val();


					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////low/////////////////
		function checkemailAvailability2B() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low2.php",
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val() +
					'&low_nokiten=' + $("#low_nokiten2").val(),

				type: "POST",
				success: function(data) {
					$("#email2B-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten2").value = document.getElementById("email2B-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0;
					var low_nokiten2 = parseFloat($('input[name=low_nokiten2]').val()) || 0;
					var f4 = $('#low_nokiten2').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailability2B_3() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_low2_3.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val() +
					'&low_nokiten=' + $("#low_nokiten2_3").val(),

				type: "POST",
				success: function(data) {
					$("#email2B_3-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten2_3").value = document.getElementById("email2B_3-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0;
					var low_nokiten2 = parseFloat($('input[name=low_nokiten2_3]').val()) || 0;
					var f4 = $('#low_nokiten2_3').val();

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////high/////////////////
		function checkemailAvailability2C() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high2.php",
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val() +
					'&high_nokiten=' + $("#high_nokiten2").val(),
				type: "POST",
				success: function(data) {
					$("#email2C-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten2").value = document.getElementById("email2C-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0;
					var high_nokiten2 = parseFloat($('input[name=high_nokiten2]').val()) || 0;
					var f5 = $('#high_nokiten2').val();
					setTimeout(myequal3, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemailAvailability2C_3() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_high2_3.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val() +
					'&high_nokiten=' + $("#high_nokiten2_3").val(),
				type: "POST",
				success: function(data) {
					$("#email2C_3-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten2_3").value = document.getElementById("email2C_3-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0;
					var high_nokiten2 = parseFloat($('input[name=high_nokiten2_3]').val()) || 0;
					var f5 = $('#high_nokiten2_3').val();
					setTimeout(myequal3_3, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		////////////////////////////

		function checkemail2A() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum2.php",
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val() +
					'&minimum_height=' + $("#minimum_height2").val(),
				type: "POST",
				success: function(data) {
					$("#email2A-availability-status").html(data);
					var number1 = document.getElementById("minimum_height2").value = document.getElementById("email2A-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0;
					//var minimum_height2 = parseFloat($('input[name=minimum_height2]').val()) || 0 ;		
					var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0;
					var f3 = $('#minimum_height2').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles2 >= minimum_height2) {
						document.getElementById("ans7").value = tru;
						document.getElementById("ans7").style.color = "green";
					} else if (center_tiles2 < minimum_height2) {
						document.getElementById("ans7").value = fals;
						document.getElementById("ans7").style.color = "red";
					} else if (f3 > R_height2) {
						//alert ('try');
						//document.getElementById("center_tiles2").value = f3 ;
						document.getElementById("ans7").value = tru;
						document.getElementById("ans7").style.color = "green";
					} else if (f3 == '') {
						document.getElementById("ans7").value = '';
					} else {
						document.getElementById("ans7").value = tru;
						document.getElementById("ans7").style.color = "green";
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			////////////////////////
			jQuery.ajax({
				url: "check/check_low2.php",
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val() +
					'&low_nokiten=' + $("#low_nokiten2").val(),

				type: "POST",
				success: function(data) {
					$("#email2B-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten2").value = document.getElementById("email2B-availability-status").innerHTML;
					//var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0 ;		
					var center_tiless2 = document.getElementById("center_tiles2").value;
					var center_tiles2 = center_tiless2.slice(5);
					var low_nokiten2 = parseFloat($('input[name=low_nokiten2]').val()) || 0;
					var f4 = $('#low_nokiten2').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Height Exceeds Please Check if with load above';


					if (center_tiles2 <= low_nokiten2) {
						document.getElementById("ans8").value = tru;
						document.getElementById("ans8").style.color = "green";
						document.getElementById("demos3").value = '';
					} else if (center_tiles2 >= low_nokiten2) {
						document.getElementById("ans8").value = fals;
						document.getElementById("ans8").style.color = "red";
						document.getElementById("demos3").value = judge;
					} else {
						document.getElementById("ans8").value = tru;
						document.getElementById("ans8").style.color = "green";
						document.getElementById("demos3").value = '';
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			///////////////
			jQuery.ajax({
				url: "check/check_high2.php",
				data: 'exterior_denki=' + $("#exterior_denki2").val() +
					'&standard=' + $("#standard2").val() +
					'&high_nokiten=' + $("#high_nokiten2").val(),
				type: "POST",
				success: function(data) {
					$("#email2C-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten2").value = document.getElementById("email2C-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2]').val()) || 0;
					var high_nokiten2 = parseFloat($('input[name=high_nokiten2]').val()) || 0;
					var f5 = $('#high_nokiten2').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles2 <= high_nokiten2) {
						document.getElementById("ans9").value = tru;
						document.getElementById("ans9").style.color = "green";
					} else if (center_tiles2 >= high_nokiten2) {
						document.getElementById("ans9").value = fals;
						document.getElementById("ans9").style.color = "red";
					} else {
						document.getElementById("ans9").value = tru;
						document.getElementById("ans9").style.color = "green";
					}
					setTimeout(myequal3, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function checkemail2A_3() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_minimum2.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val() +
					'&minimum_height=' + $("#minimum_height2_3").val(),
				type: "POST",
				success: function(data) {
					$("#email2A_3-availability-status").html(data);
					var number1 = document.getElementById("minimum_height2_3").value = document.getElementById("email2A_3-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0;
					//var minimum_height2 = parseFloat($('input[name=minimum_height2]').val()) || 0 ;		
					var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0;
					var f3 = $('#minimum_height2_3').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles2 >= minimum_height2) {
						document.getElementById("ans7_3").value = tru;
						document.getElementById("ans7_3").style.color = "green";
					} else if (center_tiles2 < minimum_height2) {
						document.getElementById("ans7_3").value = fals;
						document.getElementById("ans7_3").style.color = "red";
					} else if (f3 > R_height2) {
						//alert ('try');
						//document.getElementById("center_tiles2").value = f3 ;
						document.getElementById("ans7_3").value = tru;
						document.getElementById("ans7_3").style.color = "green";
					} else if (f3 == '') {
						document.getElementById("ans7_3").value = '';
					} else {
						document.getElementById("ans7_3").value = tru;
						document.getElementById("ans7_3").style.color = "green";
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			////////////////////////
			jQuery.ajax({
				url: "check/check_low2.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val() +
					'&low_nokiten=' + $("#low_nokiten2_3").val(),

				type: "POST",
				success: function(data) {
					$("#email2B_3-availability-status").html(data);
					var number1 = document.getElementById("low_nokiten2_3").value = document.getElementById("email2B_3-availability-status").innerHTML;
					//var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0 ;		
					var center_tiless2 = document.getElementById("center_tiles2_3").value;
					var center_tiles2 = center_tiless2.slice(5);
					var low_nokiten2 = parseFloat($('input[name=low_nokiten2_3]').val()) || 0;
					var f4 = $('#low_nokiten2_3').val();
					var tru = '✔';
					var fals = '✘';
					var judge = 'Height Exceeds Please Check if with load above';


					if (center_tiles2 <= low_nokiten2) {
						document.getElementById("ans8_3").value = tru;
						document.getElementById("ans8_3").style.color = "green";
						document.getElementById("demos3_3").value = '';
					} else if (center_tiles2 >= low_nokiten2) {
						document.getElementById("ans8_3").value = fals;
						document.getElementById("ans8_3").style.color = "red";
						document.getElementById("demos3_3").value = judge;
					} else {
						document.getElementById("ans8_3").value = tru;
						document.getElementById("ans8_3").style.color = "green";
						document.getElementById("demos3_3").value = '';
					}
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
			///////////////
			jQuery.ajax({
				url: "check/check_high2.php",
				data: 'exterior_denki=' + $("#exterior_denki2_3").val() +
					'&standard=' + $("#standard2_3").val() +
					'&high_nokiten=' + $("#high_nokiten2_3").val(),
				type: "POST",
				success: function(data) {
					$("#email2C_3-availability-status").html(data);
					var number1 = document.getElementById("high_nokiten2_3").value = document.getElementById("email2C_3-availability-status").innerHTML;
					var center_tiles2 = parseFloat($('input[name=center_tiles2_3]').val()) || 0;
					var high_nokiten2 = parseFloat($('input[name=high_nokiten2_3]').val()) || 0;
					var f5 = $('#high_nokiten2_3').val();
					var tru = '✔';
					var fals = '✘';


					if (center_tiles2 <= high_nokiten2) {
						document.getElementById("ans9_3").value = tru;
						document.getElementById("ans9_3").style.color = "green";
					} else if (center_tiles2 >= high_nokiten2) {
						document.getElementById("ans9_3").value = fals;
						document.getElementById("ans9_3").style.color = "red";
					} else {
						document.getElementById("ans9_3").value = tru;
						document.getElementById("ans9_3").style.color = "green";
					}
					setTimeout(myequal3_3, 100);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function myequal3() {
			var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0;
			var center_tiles2 = document.getElementById("center_tiles2").value;
			var judge2 = 'SEND FYI';
			//alert(R_height);
			if (R_height2 == 0 || R_height2 == '') {
				//alert(R_height);
				//alert(center_tiles); 
				document.getElementById("demoss3").value = '';
			} else if (R_height2 != center_tiles2) {
				//alert(R_height);
				document.getElementById("demoss3").value = judge2;
			} else {
				document.getElementById("demoss3").value = '';
			}
			var standard2 = document.getElementById("standard2").value;
			var exterior_denki2 = document.getElementById("exterior_denki2").value;
			if (exterior_denki2 == 'joint box' || exterior_denki2 == 'bousui socket') {
				if (standard2 == 'balcony_2f' || standard2 == 'EWH_2f' || standard2 == 'EWL_2f') {
					//document.getElementById("minimum_height2").value = '418';
				} else if (standard2 == 'balcony_3f' || standard2 == 'EWH_3f' || standard2 == 'EWL_3f') {
					//document.getElementById("minimum_height2").value = '430';
				}
			}
			setTimeout(10);
		}

		function myequal3_3() {
			var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0;
			var center_tiles2 = document.getElementById("center_tiles2_3").value;
			var judge2 = 'SEND FYI';
			//alert(R_height);
			if (R_height2 == 0 || R_height2 == '') {
				//alert(R_height);
				//alert(center_tiles); 
				document.getElementById("demoss3_3").value = '';
			} else if (R_height2 != center_tiles2) {
				//alert(R_height);
				document.getElementById("demoss3_3").value = judge2;
			} else {
				document.getElementById("demoss3_3").value = '';
			}
			var standard2 = document.getElementById("standard2_3").value;
			var exterior_denki2 = document.getElementById("exterior_denki2_3").value;
			if (exterior_denki2 == 'joint box' || exterior_denki2 == 'bousui socket') {
				if (standard2 == 'balcony_2f' || standard2 == 'EWH_2f' || standard2 == 'EWL_2f') {
					//document.getElementById("minimum_height2_3").value = '418';
				} else if (standard2 == 'balcony_3f' || standard2 == 'EWH_3f' || standard2 == 'EWL_3f') {
					//document.getElementById("minimum_height2_3").value = '430';
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
			setTimeout(disable(), 500);

			function disable() {
				//document.getElementById("exterior_denki").disabled=true;			
				//document.getElementById("exterior_denki1").disabled=true;			
				//document.getElementById("exterior_denki2").disabled=true;			
			}

			function computeGS() {

				var std_heightGS = parseFloat($('input[name=std_heightGS]').val()) || 0;
				var R_heightGS = parseFloat($('input[name=R_heightGS]').val()) || 0;
				setTimeout(checkemailAvailabilityAGS(), 100);
				setTimeout(checkemailAvailabilityBGS(), 200);
				setTimeout(checkemailAvailabilityCGS(), 300);
				setTimeout(hittingGS, 400);
				var center_tilesGS = (std_heightGS - R_heightGS) / 49;
				var center_tiles1GS = (R_heightGS - std_heightGS) / 49;
				var Result = Math.ceil(center_tilesGS);
				var Result1 = Math.floor(center_tiles1GS);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_heightGS - Result2;
				var Result5 = std_heightGS + Result3;


				//$('#center_tiles').val(Result4);
				//$('#center_tiles').val(Result5);

				if (R_heightGS > std_heightGS) {
					$('#center_tilesGS').val(Result5);
					//alert('try1');
				} else if (std_heightGS > R_heightGS) {
					$('#center_tilesGS').val(Result4);
					//alert('try2');
				}

			}

			$('#std_heightGS,#R_heightGS,#exterior_denkiGS').change(computeGS, 10);

			function compute_1GS() {
				var std_heightGS = parseFloat($('input[name=std_height_1GS]').val()) || 0;
				var R_heightGS = parseFloat($('input[name=R_height_1GS]').val()) || 0;
				setTimeout(checkemailAvailabilityA_1GS(), 100);
				setTimeout(checkemailAvailabilityB_1GS(), 200);
				setTimeout(checkemailAvailabilityC_1GS(), 300);
				setTimeout(hitting_1GS, 400);
				var center_tiles_1GS = (std_heightGS - R_heightGS) / 49;
				var center_tiles1_1GS = (R_heightGS - std_heightGS) / 49;
				var Result = Math.ceil(center_tiles_1GS);
				var Result1 = Math.floor(center_tiles1_1GS);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_heightGS - Result2;
				var Result5 = std_heightGS + Result3;



				//$('#center_tiles_1').val(Result4);
				//$('#center_tiles_1').val(Result5);

				if (R_heightGS > std_heightGS) {
					$('#center_tiles_1GS').val(Result5);
					//alert('try1');
				} else if (std_heightGS > R_heightGS) {
					$('#center_tiles_1GS').val(Result4);
					//alert('try2');
				}
			}
			$('#std_height_1GS,#R_height_1GS,#exterior_denki_1GS').change(compute_1GS, 10);

			//////////////////////////////////////////////

			function compute() {

				var std_height = parseFloat($('input[name=std_height]').val()) || 0;
				var R_height = parseFloat($('input[name=R_height]').val()) || 0;
				setTimeout(checkemailAvailabilityA(), 100);
				setTimeout(checkemailAvailabilityB(), 200);
				setTimeout(checkemailAvailabilityC(), 300);
				setTimeout(hitting, 400);
				var center_tiles = (std_height - R_height) / 49;
				var center_tiles1 = (R_height - std_height) / 49;
				var Result = Math.ceil(center_tiles);
				var Result1 = Math.floor(center_tiles1);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height - Result2;
				var Result5 = std_height + Result3;



				//$('#center_tiles').val(Result4);
				//$('#center_tiles').val(Result5);

				if (R_height > std_height) {
					$('#center_tiles').val(Result5);
					//alert('try1');
				} else if (std_height > R_height) {
					$('#center_tiles').val(Result4);
					//alert('try2');
				}

			}

			$('#std_height,#R_height,#exterior_denki').change(compute, 10);

			function compute_1() {
				var std_height = parseFloat($('input[name=std_height_1]').val()) || 0;
				var R_height = parseFloat($('input[name=R_height_1]').val()) || 0;
				setTimeout(checkemailAvailabilityA_1(), 100);
				setTimeout(checkemailAvailabilityB_1(), 200);
				setTimeout(checkemailAvailabilityC_1(), 300);
				setTimeout(hitting_1, 400);
				var center_tiles_1 = (std_height - R_height) / 49;
				var center_tiles1_1 = (R_height - std_height) / 49;
				var Result = Math.ceil(center_tiles_1);
				var Result1 = Math.floor(center_tiles1_1);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height - Result2;
				var Result5 = std_height + Result3;



				//$('#center_tiles_1').val(Result4);
				//$('#center_tiles_1').val(Result5);

				if (R_height > std_height) {
					$('#center_tiles_1').val(Result5);
					//alert('try1');
				} else if (std_height > R_height) {
					$('#center_tiles_1').val(Result4);
					//alert('try2');
				}
			}
			$('#std_height_1,#R_height_1,#exterior_denki_1').change(compute_1, 10);
		});
		//////////////////////////////////////////////
		$(document).ready(function() {
			function compute2() {

				var std_height1 = parseFloat($('input[name=std_height1]').val()) || 0;
				var R_height1 = parseFloat($('input[name=R_height1]').val()) || 0;
				/* setTimeout(checkemailAvailability1A(),100);
				setTimeout(checkemailAvailability1B(),200);
				setTimeout(checkemailAvailability1C(),300); */
				setTimeout(hitting1(), 400);
				var center_tiles = (std_height1 - R_height1) / 49;
				var center_tiles1 = (R_height1 - std_height1) / 49;
				var Result = Math.ceil(center_tiles);
				var Result1 = Math.floor(center_tiles1);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height1 - Result2;
				var Result5 = std_height1 + Result3;

				/*   $('#center_tiles1').val(Result4);
				 $('#center_tiles1').val(Result5);  */


				if (R_height1 > std_height1) {
					$('#center_tiles1').val(Result5);
				} else if (std_height1 > R_height1) {
					$('#center_tiles1').val(Result4);
				}

			}

			$('#std_height1,#R_height1').change(compute2, 10);

			function compute2_2() {

				var std_height1 = parseFloat($('input[name=std_height1_2]').val()) || 0;
				var R_height1 = parseFloat($('input[name=R_height1_2]').val()) || 0;
				/* setTimeout(checkemailAvailability1A_2(),100);
				setTimeout(checkemailAvailability1B_2(),200);
				setTimeout(checkemailAvailability1C_2(),300); */
				setTimeout(hitting1_2, 400);
				var center_tiles = (std_height1 - R_height1) / 49;
				var center_tiles1 = (R_height1 - std_height1) / 49;
				var Result = Math.ceil(center_tiles);
				var Result1 = Math.floor(center_tiles1);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height1 - Result2;
				var Result5 = std_height1 + Result3;

				/*  $('#center_tiles1_2').val(Result4);
				 $('#center_tiles1_2').val(Result5); */


				if (R_height1 > std_height1) {
					$('#center_tiles1_2').val(Result5);
				} else if (std_height1 > R_height1) {
					$('#center_tiles1_2').val(Result4);
				}

			}

			$('#std_height1_2,#R_height1_2').change(compute2_2, 10);
		});

		//////////////////////////////////////////////
		$(document).ready(function() {
			function compute3() {

				var std_height2 = parseFloat($('input[name=std_height2]').val()) || 0;
				var R_height2 = parseFloat($('input[name=R_height2]').val()) || 0;
				setTimeout(checkemailAvailability2A(), 500);
				setTimeout(checkemailAvailability2B(), 500);
				setTimeout(checkemailAvailability2C(), 500);

				var center_tiles2 = (std_height2 - R_height2) / 49;
				var center_tiles2 = (R_height2 - std_height2) / 49;
				var Result = Math.ceil(center_tiles2);
				var Result1 = Math.floor(center_tiles2);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height2 - Result2;
				var Result5 = std_height2 + Result3;


				$('#center_tiles2').val(Result4);
				$('#center_tiles2').val(Result5);


				if (R_height2 > std_height2) {
					$('#center_tiles2').val(Result5);
				} else if (std_height2 > R_height2) {
					$('#center_tiles2').val(Result4);
				}


			}

			$('#std_height2,#R_height2').change(compute3);

			function compute3_3() {

				var std_height2 = parseFloat($('input[name=std_height2_3]').val()) || 0;
				var R_height2 = parseFloat($('input[name=R_height2_3]').val()) || 0;
				setTimeout(checkemailAvailability2A_3(), 500);
				setTimeout(checkemailAvailability2B_3(), 500);
				setTimeout(checkemailAvailability2C_3(), 500);

				var center_tiles2_3 = (std_height2 - R_height2) / 49;
				var center_tiles2_3 = (R_height2 - std_height2) / 49;
				var Result = Math.ceil(center_tiles2_3);
				var Result1 = Math.floor(center_tiles2_3);
				var Result2 = Result * 49;
				var Result3 = Result1 * 49;
				var Result4 = std_height2 - Result2;
				var Result5 = std_height2 + Result3;


				$('#center_tiles2_3').val(Result4);
				$('#center_tiles2_3').val(Result5);


				if (R_height2 > std_height2) {
					$('#center_tiles2_3').val(Result5);
				} else if (std_height2 > R_height2) {
					$('#center_tiles2_3').val(Result4);
				}


			}

			$('#std_height2_3,#R_height2_3').change(compute3_3);
		});
		/////////////////////////////
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
					$("#email4-availability-status").html(data);
					var number3 = document.getElementById("code_number").value = document.getElementById("email3-availability-status").innerHTML;
					//setTimeout(check_PlanNumber(),500);				


					/*setTimeout(check_kanabakari(),500); */

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function check_PlanNumber() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_plan_number.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var C = document.getElementById("plan_number").value = document.getElementById("email6-availability-status").innerHTML;
					var number4 = document.getElementById("code_number").value;
					var number5 = document.getElementById("dodai3").value;
					var number6 = document.getElementById("kanabakari").value;
					var number7 = document.getElementById("houseTypes").value;
					var number8 = document.getElementById("wtight").value;
					var result2 = 'NO NEED TO COMPUTE';
					//alert(number6);

					if (number4 != '' && number6 == '２４０＋' && number5 == '140 dodai') {
						document.getElementById("show").click();
					} else if (number4 != '' && number6 == '２４０+□' && number5 == '140 dodai' && (number8 == '' || number8 == 'なし')) {
						document.getElementById("show").click();
					} else if (number4 != '' && (number6 == '２４０+□' || number6 == '２４０+Ｔ□' || number6 == '２４０＋Ｔ') && number5 == '140 dodai' && number8 == 'スタンダードタイプ') {
						document.getElementById("show1").click();
					} else if (number4 != '' && (number6 == '２４０+Ｔ□Ｆ' || number6 == '２４０+□Ｆ' || number6 == '２４０+ＴＦ' || number6 == '２４０＋Ｆ') && number5 == '140 dodai' && number8 == '浮上タイプ') {
						document.getElementById("show1").click();
					} else if (number4 != '' && number6 == '２４０+Ｔ□' && number5 == '140 dodai') {
						document.getElementById("show1").click();
					} else if (number4 != '' && number6 == '２４０＋Ｔ' && number5 == '140 dodai') {
						document.getElementById("show1").click();
					} else if (number4 != '' && number6 == '２６０+□' && number5 == '140 dodai') {
						document.getElementById("show2").click();
					} else if (number4 != '' && number6 == '２６０＋' && number5 == '140 dodai') {
						document.getElementById("show2").click();
					} else if (number4 != '' && number6 == '２４０＋' && number5 == '89 dodai') {
						//document.getElementById("show").click();				
					} else if (number4 != '' && number7 == 'GType' && (number5 == '' || number5 == '140 dodai') && (number6 == '２６５' || number6 == '２４０')) {
						document.getElementById("showGS").click();
					} else if (number4 != '' && number6 == '２４０' && number5 == '') {
						document.getElementById("demo2").value = result2;
						document.getElementById("show3").click();
					} else if (number4 == '') {
						document.getElementById("hide").click();
					}

					if (number4 != "" && number5 != "") {
						document.getElementById("code_number").disabled = true;
					} else {
						document.getElementById("code_number").disabled = false;
					}

					setTimeout(check_kanabakari(), 300);
					setTimeout(check_houseType(), 400);
					setTimeout(check_wtight(), 500);
					setTimeout(check_wtightFloor(), 600);
					setTimeout(check_dodai(), 700);
					setTimeout(ecompany(), 800);
					setTimeout(check_planTypes(), 900);
					setTimeout(check_touketsu(), 1000);
					//setTimeout(check_prefec(),500);

					//
					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
		//		
		function check_kanabakari() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_kanabakari.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var kanabakari = document.getElementById("kanabakari").value = document.getElementById("email6-availability-status").innerHTML;
					var dodai = document.getElementById("dodai3").value;


					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function check_planTypes() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_planTypes.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var planTypes = document.getElementById("planTypes").value = document.getElementById("email6-availability-status").innerHTML;
					var planTypes = document.getElementById("planTypes").value;


					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function check_houseType() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_granDsaison.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var houseTypes = document.getElementById("houseTypes").value = document.getElementById("email6-availability-status").innerHTML;
					var houseTypes = document.getElementById("houseTypes").value;
					var kanabakari = document.getElementById("kanabakari").value;
					if (houseTypes == '1') {
						document.getElementById("houseTypes").value = 'GType';
						//setInterval(function(){ document.getElementById('post-btn').click(); }, 10);
					}
					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function check_wtight() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_watertight.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var wtight = document.getElementById("wtight").value = document.getElementById("email6-availability-status").innerHTML;
					var wtight = document.getElementById("wtight").value;

					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function check_wtightFloor() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_floor.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var floor = document.getElementById("floor").value = document.getElementById("email6-availability-status").innerHTML;
					var floor = document.getElementById("floor").value;

					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}


		function check_dodai() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_dodai.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var dodai = document.getElementById("dodai").value = document.getElementById("email6-availability-status").innerHTML;
					var dodai2 = document.getElementById("dodai2").value;
					var exterior = document.getElementById("exterior_denki").value;
					var pow = dodai.substr(0, 2);
					var pow2 = dodai.substr(2, 7);

					var powv1 = document.getElementById("dodai").value = pow;
					var powv2 = document.getElementById("dodai2").value = pow2;

					var dodai_140 = '140 dodai';
					var dodai_89 = '89 dodai';

					if (powv1 == '土台' && (powv2 == '0200016' || powv2 == '0200018')) {
						document.getElementById("dodai3").value = dodai_140;
					} else if (powv1 == '土台' && powv2 == '0200007' || powv1 == '土台' && powv2 == '0200008' || powv1 == '土台' && powv2 == '0200009') {
						document.getElementById("dodai3").value = dodai_89;
					}
					/* /* else if(powv2 == dodai_140 ) {
					alert(powv2);
					document.getElementById("exterior").disabled = true; 
				} */
					else {
						document.getElementById("dodai3").value = '';
					}
					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function check_touketsu() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check/check_shio_touketsu.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var touketsu = document.getElementById("touketsu").value = document.getElementById("email6-availability-status").innerHTML;
					var touketsu = document.getElementById("touketsu").value;
					var wfloat = document.getElementById("wtight").value;;
					//console.log(wfloat);
					if (wfloat == 'スタンダードタイプ' || wfloat == '浮上タイプ') {
						if (touketsu == '寒冷Ａ' || touketsu == '寒冷Ｂ' || touketsu == '準寒冷Ｂ２' || touketsu == '準寒冷Ｃ' || touketsu == '準寒冷Ｅ２') {
							document.getElementById("touket").innerHTML = "This Plan is Touketsu Boushi ! Please Check Height and Location if Correct !!";
							$('#touket').css("color", "red");
							$('#touket').css("font-size", "25px");
							ShowTouketsu();
						} else {
							HideTouketsu();
						}
					}

					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function ecompany() {

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check1/check_kva1.php",
				data: 'code_number=' + $("#code_number").val(),
				type: "POST",
				success: function(data) {
					$("#email6-availability-status").html(data);
					var ecompany = document.getElementById("ecompany").value = document.getElementById("email6-availability-status").innerHTML;
					var ecompany = document.getElementById("ecompany").value;
					if (ecompany == '東北電力') {
						document.getElementById("ecompany").value = 'TOHOUKU(東北電力)';
						//$("#electric_company").css('background-color','green');

					} else if (ecompany == '中部電力') {
						document.getElementById("ecompany").value = 'CHUBU(中部電力)';
						//$("#electric_company").css('background-color','red');

					} else if (ecompany == '東京電力') {
						document.getElementById("ecompany").value = 'TOKYOU(東京電力)';
						//$("#electric_company").css('background-color','blue');

					} else if (ecompany == '北陸電力') {
						document.getElementById("ecompany").value = 'HOKURIKU(北陸電力)';
						//$("#electric_company").css('background-color','violet');

					} else if (ecompany == '関西電力') {
						document.getElementById("ecompany").value = 'KANSAI(関西電力)';
						//$("#electric_company").css('background-color','yellow');

					} else if (ecompany == '中国電力') {
						document.getElementById("ecompany").value = 'CHUGOKU(中国電力)';
						//$("#electric_company").css('background-color','brown');

					} else if (ecompany == '四国電力') {
						document.getElementById("ecompany").value = 'SHIKOKU(四国電力)';
						//$("#electric_company").css('background-color','pink');

					} else if (ecompany == '九州電力') {
						document.getElementById("ecompany").value = 'KYUUSHU(九州電力)';
						//$("#electric_company").css('background-color','#66ffff');

					} else if (ecompany == '北海道電力') {
						document.getElementById("ecompany").value = 'HOKKAIDOU(北海道電力)';
						//$("#electric_company").css('background-color','#009999');					
					}

					//setTimeout(check_powercon(),2000);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}

		function calculateGS() {

			//setTimeout(compute,100);
			setTimeout(checkemailAvailabilityGS, 10);
			setTimeout(checkemailAGS, 20);
			setTimeout(hittingGS, 30);
			setTimeout(combineGS, 40);
			//setTimeout(items,500);		
		}

		function calculate_1GS() {

			//setTimeout(compute_1,100);
			setTimeout(checkemailAvailability_1GS, 10);
			setTimeout(checkemailA_1GS, 20);
			setTimeout(hitting_1GS, 30);
			setTimeout(combineGS, 40);
			//combine();

		}

		function calculate() {

			//setTimeout(compute,100);
			setTimeout(checkemailAvailability, 10);
			setTimeout(checkemailA, 20);
			setTimeout(hitting, 30);
			setTimeout(combine, 40);
			//setTimeout(items,500);		
		}

		function calculate_1() {

			//setTimeout(compute_1,100);
			setTimeout(checkemailAvailability_1, 10);
			setTimeout(checkemailA_1, 20);
			setTimeout(hitting_1, 30);
			setTimeout(combine, 40);
			//combine();

		}

		function calculate1() {

			//setTimeout(compute,100);
			setTimeout(checkemailAvailability1, 10);
			//setTimeout(checkemail1A,20);
			setTimeout(hitting1, 30);
			setTimeout(combine2, 40);
			//setTimeout(items,500);		
		}

		function calculate1_2() {

			//setTimeout(compute,100);
			setTimeout(checkemailAvailability1_2, 10);
			//setTimeout(checkemail1A_2,20);
			setTimeout(hitting1_2, 30);
			setTimeout(combine2, 40);
			//setTimeout(items,500);		
		}

		function calculate2() {

			//setTimeout(compute,100);
			setTimeout(checkemailAvailability2, 10);
			setTimeout(checkemail2A, 20);
			setTimeout(hitting2, 30);
			setTimeout(combine3, 40);
			//setTimeout(items,500);		
		}

		function calculate2_1() {

			//setTimeout(compute,100);
			setTimeout(checkemailAvailability2_3, 10);
			setTimeout(checkemail2A_3, 20);
			setTimeout(hitting2_1, 30);
			setTimeout(combine3, 40);
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
		function showTableGS() {

			document.getElementById('tableGS').style.visibility = "visible";
			document.getElementById('tableGS').style.display = "inline-table";

		}

		function showTable() {

			document.getElementById('table').style.visibility = "visible";
			document.getElementById('table').style.display = "inline-table";

		}

		function showTable1() {
			document.getElementById('table2').style.visibility = "visible";
			document.getElementById('table2').style.display = "inline-table";
		}

		function showTable2() {
			document.getElementById('table3').style.visibility = "visible";
			document.getElementById('table3').style.display = "inline-table";
		}

		function showTable3() {
			document.getElementById('demo2').style.visibility = "visible";
			document.getElementById('demo2').style.display = "inline-table";
		}

		function showTableGS2() {
			document.getElementById('itemsGS').style.visibility = "visible";
			document.getElementById('itemsGS').style.display = "";
		}

		function showTable4() {
			document.getElementById('items').style.visibility = "visible";
			document.getElementById('items').style.display = "";
		}

		function showTable5() {
			document.getElementById('items2').style.visibility = "visible";
			document.getElementById('items2').style.display = "";
		}

		function showTable6() {
			document.getElementById('items3').style.visibility = "visible";
			document.getElementById('items3').style.display = "";
		}

		function hideTable() {
			//var g = document.getElementById('houseTypes').value;  
			document.getElementById('itemsGS').style.display = "none";
			document.getElementById('items').style.display = "none";
			document.getElementById('items2').style.display = "none";
			document.getElementById('items3').style.display = "none";
			document.getElementById('table').style.display = "none";
			document.getElementById('table2').style.display = "none";
			document.getElementById('table3').style.display = "none";
			document.getElementById('tableGS').style.display = "none";
			document.getElementById('demo2').style.display = "none";
		}

		function KansenMax() {
			var x = document.getElementById("max");
			var y = document.getElementById("exterior_denki1").value;
			console.log(y);
			if (y == 'KANSEN HIKIKOMI (幹線引込)') {
				x.innerHTML = "Maximum height";
			} else {
				x.innerHTML = "Standard height";
			}
		}
	</script>
	<script src="controller/select.js" type="text/javascript"></script>
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

		#table #table2 #table3 {
			display: block;
		}

		select {
			width: 400px;
			text-align-last: center;
		}

		.blink_me {
			animation: blinker 7s linear infinite;
		}

		@keyframes blinker {
			60% {
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
	<script src="controller/select.js" type="text/javascript"></script>
	<script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
	<script src="http://hrdapps33/bootstrap/js/bootstrap.min.js"></script>
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
						<a href="shuudenban_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>SHUUDENBAN, SOLAR SOCKET & BUNDENBAN CHECKING</span>
						</a>

					</li>
					<li class="sub-menu">
						<a class="active" href="exterior_item_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>EXTERIOR ITEM HEIGHT</span>
						</a>
						<ul class="sub">
							<!--<li class="active"><a href="exterior_item_new_back.php">EXTERIOR ITEMS CENTERING OF TILE<span style="color:red;">( Single Item )</span></a></li>-->
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">EXTERIOR ITEMS CENTERING OF TILE
									<!--with <span style="color:orange;">( Two Items )-->
								</a></li>
						</ul>
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
				<center><label class="head">EXTERIOR ITEM HEIGHT
						<!--<span style="color:orange;">( HITTING ITEMS )</span>--> COMPUTATION
					</label></center>
				<ul class="nav nav-tabs" style="font-size:20px">


				</ul>

				<form method="post" enctype="multipart/form-data" class="form-horizontal">

					<!--sample<br>
						9953459-2018 - 240+<br>
						5520458-2018 - 240+T<br>
						4750394-2017 - 260+-->
					<span>
						<td style="text-align:center;vertical-align:middle;">
							<p>* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Computation *</p>
							<p class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * *<span class="blink_me" style="color:red;font-size:15px">Check Plan Shio # if Latest/Not Tally</span>*</p>
							<div class="row">
								<div class="col-sm-2" style="width:180px;">
									<label style="font-size:15px;color:black" class="space">Customer Code: </label>
									<input type="" name="code_number" id="code_number" onkeypress="check_PlanNumber()" onkeyup="check_PlanNumber()" onblur="check_PlanNumber()" onmouseout="check_PlanNumber()" style="font-size:20px;width:170px;text-align:center;color:red;" maxlength="12" value="<?php echo @$_POST['code_number']; ?>" />
									<!--</div>
									<div class="col-sm-1" style="width:180px;">-->
									<label style="font-size:15px;color:black" class="space"> Plan Shio #: </label>
									<input type="" name="plan_number" id="plan_number" style="font-size:20px;width:170px;text-align:center;color:red" value="<?php echo @$_POST['plan_number']; ?>" readonly />
								</div>
								<div class="col-sm-2" style="width:180px;">
									<label style="font-size:15px;color:black" class="space"> Kanabakari: </label>
									<input type="" name="kanabakari" id="kanabakari" style="font-size:20px;width:170px;text-align:center;color:red" value="<?php echo @$_POST['kanabakari']; ?>" readonly />
									<label style="font-size:15px;color:black" class="space"> PlanTypes: </label>
									<input type="text" name="planTypes" id="planTypes" style="font-size:20px;width:170px;text-align:center;color:red" value="" readonly />
								</div>
								<div class="col-sm-2" style="width:180px;">
									<label style="font-size:15px;color:black" class="space"> SezonG: </label>
									<input type="text" name="houseTypes" id="houseTypes" value="<?php echo @$_POST['houseTypes']; ?>" style="font-size:20px;width:170px;text-align:center;color:red" readonly />
									<!--</div>
									<div class="col-sm-2" style="width:180px;">-->
									<label style="font-size:15px;color:black" class="space"> Dodai: </label><br>
									<input type="hidden" name="dodai" id="dodai" value="<?php echo @$_POST['dodai']; ?>" style="font-size:20px;width:200px;text-align:center;color:red" />
									<input type="hidden" name="dodai2" id="dodai2" value="<?php echo @$_POST['dodai2']; ?>" style="font-size:20px;width:200px;text-align:center;color:red" />
									<input type="text" name="dodai3" id="dodai3" value="<?php echo @$_POST['dodai3']; ?>" style="font-size:20px;width:170px;text-align:center;color:red" readonly />
								</div>
								<div class="col-sm-4">
									<label style="font-size:15px;color:black" class="space">Watertight: </label><br>
									<input type="text" name="wtight" id="wtight" value="" style="font-size:20px;width:190px;text-align:center;color:red" readonly />
									<input type="text" name="floor" id="floor" value="" style="font-size:20px;width:50px;text-align:center;color:red" readonly /> <br>
									<label style="font-size:15px;color:black" class="space"> Electric Company: </label><br>
									<input type="text" name="ecompany" id="ecompany" value="" style="font-size:20px;width:250px;text-align:center;color:red" readonly />
									<input type="text" name="touketsu" class="hide" id="touketsu" value="" style="font-size:20px;width:250px;text-align:center;color:red" readonly />
									<!--<input type="text" name="fukakisoUsed" id="fukakisoUsed" value=""  style="font-size:20px;width:100px;text-align:center;color:red"  readonly />-->
								</div>

							</div>
							<span class="hidden" id="email6-availability-status"></span><br>

							<!--<button type="submit" id="post-btn" class="hide">$.Post Submit</button>-->
							<!--<label style="font-size:20px;color:black" class="space">	Prefec Code:</label>		
									<input type="text" name="prefec" id="prefec"   style="font-size:20px;width:200px;text-align:center;color:red"  readonly />	-->


						</td>
					</span>
				</form>
				<form id="myForm0">
					<span class="space"><input class="bg-danger" type="button" onclick="window.location.href=window.location.href" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>

					<body onload="javascript:hideTable()">
						<input type='button' class="hide" id="showGS" name="showGS" onClick='javascript:showTableGS();' value='showGS'>
						<input type='button' class="hide" id="show" name="show" onClick='javascript:showTable();' value='show'>
						<input type='button' class="hide" id="show1" name="show1" onClick='javascript:showTable1();' value='show1'>
						<input type='button' class="hide" id="show2" name="show2" onClick='javascript:showTable2();' value='show2'>
						<input type='button' class="hide" id="show3" name="show3" onClick='javascript:showTable3();' value='show3'>
						<input type='button' class="hide" id="hide" name="hide" onClick='javascript:hideTable();' value='hide'>
						<table id="table" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
							<thead>
								<div data-role="header" class="" id="">
									<th colspan="6">
										<h1>240 + (140 土台)</h1>
									</th>
								</div>
							</thead>
							<tbody>
								<tr>

									<?php

									function exterior_denki()
									{
										try {
											$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$pdo->query("SET NAMES utf8");
											$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240_back ORDER BY exterior_denki asc");
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
									foreach (exterior_denki() as $value) {
										$option .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
									}
									?>
								</tr>
								<form id="myForm">
									<tr height="250px">
										<div class="col-sm-4">
											<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
												<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->
												<span>
													<label style="font-size:18px;color:black;float:left;">Exterior Denki Items:</label>
													<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue" onchange="setTimeout(calculate,10)" id="exterior_denki" name="exterior_denki" required="required">
														<option value=""></option>
														<option><?php echo $option; ?></option>
													</select>
													<?php

													include_once 'include/dbcon.php';
													$query = "SELECT * FROM centering_240_back WHERE exterior_denki = 'exterior_denki' ";
													$result = $db_connect->query($query);
													?>
													<br>
													<br>
													<label style="font-size:18px;color:black;float:left;" class="space">Location:</label>
													<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate,10)" id="standard" name="standard" required="required">
														<option disabled selected>Choose Type</option>

														<option value="gl">gl</option>
														<option value="doma">Genkan doma</option>
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
													<label style="font-size:20px;color:black;float:left;" class="space">Requested Height:</label>
													<input type="text" id="R_height" name="R_height" onkeyup="setTimeout(calculate,10)" onkeypress="setTimeout(calculate,20)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"><br><br>
													<span class="hidden" id="email-availability-status"></span>
													<input class="bg-danger" type='button' class="" id="view" name="view" onClick='javascript:showTable4();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">

												</span>
											</td>
										</div>
										<!--<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
										<div class="col-sm-4">
											<span>
												<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
													<span class="hideme240"><img src="images/fukakiso2.PNG" id="fukakiso240" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
													<span class="hidemeterbox240">
														<textarea type="text" value="" name="meterbox240" id="meterbox240" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none;" disabled></textarea><br>
													</span>

													<input type="text" value="" name="notfollow240+" id="notfollow240+" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
													<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles" name="center_tiles" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
													<input type="text" value="" name="use240" id="use240" style="color:red;width:80%;font-size:15px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
													<input align="center" type="text" id="demoss" name="demoss" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
													<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
										<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
										<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->

												</td>
											</span>
										</div>
										<div class="col-sm-4">
											<span>
												<td style="width:500px;overflow: hidden;">
													<b style="font-size:20px" class="space">Half Size </b>
													top <input type="text" id="top_height" name="top_height" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
													bottom <input type="text" id="bottom_height" name="bottom_height" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<b style="font-size:20px" class="space">Standard height </b>
													<input type="text" id="std_height" name="std_height" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
													<br><br>
													<b style="font-size:20px" class="space">Minimum height </b>
													<input type="text" id="minimum_height" name="minimum_height" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans" name="ans" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													<b style="font-size:20px" class="space">GL to FL height for meter </b>
													<input type="text" id="plus240" name="plus240" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
													<span class="hidden" id="emailA-availability-status"></span>
													<hr>
													<b style="font-size:20px" class="space">Low Nokiten </b>
													<input type="text" id="low_nokiten" name="low_nokiten" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans2" name="ans2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													<span class="hidden" id="emailB-availability-status"></span>
													<b style="font-size:20px" class="space">High Nokiten </b>
													<input type="text" id="high_nokiten" name="high_nokiten" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
													<input type="text" id="ans3" name="ans3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
													<span class="hidden" id="emailC-availability-status"></span>
													Reminder:
													<textarea align="center" type="text" id="demos" name="demos" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>

												</td>
											</span>
										</div>
									</tr>



							</tbody>
							<tbody id="items">
								<tr>
									<td colspan="3" style="height:10px;">
										<input class="hide" type="text" id="center_tiles_hit" name="center_tiles_hit" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="center_tiles_hit2" name="center_tiles_hit2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="center_tiles_hit3" name="center_tiles_hit3" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="hittings" name="hittings" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input align="center" type="text" id="good_hit" name="good_hit" class="" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;text-align:center;background-color:none;" disabled>
									</td>
								</tr>
								<tr style="border-top:2pt solid black;">

									<?php
									function exterior_denki_1()
									{
										try {
											$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$pdo->query("SET NAMES utf8");
											$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240_back ORDER BY exterior_denki asc");
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
									$option1 = '';
									foreach (exterior_denki_1() as $value) {
										$option1 .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
									}
									?>
								</tr>
								<form id="myFormS">
									<tr height="250px">
										<div class="col-sm-4">
											<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
												<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->
												<span>
													<label style="font-size:18px;color:black;float:left">Exterior Denki Items:</label>
													<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate_1,10)" id="exterior_denki_1" name="exterior_denki_1" required="required">
														<option value=""></option>
														<option><?php echo $option1; ?></option>
													</select>
													<?php
													include_once 'include/dbcon.php';
													$query = "SELECT * FROM centering_240_back WHERE exterior_denki = 'exterior_denki' ";
													$result = $db_connect->query($query);
													?>
													<br>
													<br>
													<label style="font-size:18px;color:black;float:left;" class="space">Location:</label>
													<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate_1,10)" id="standard_1" name="standard_1" required="required">
														<option disabled selected>Choose Type</option>

														<option value="gl">gl</option>
														<option value="doma">Genkan doma</option>
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
													<label style="font-size:20px;color:black;float:left;" class="space">Requested Height:</label>
													<input type="text" id="R_height_1" name="R_height_1" onkeyup="setTimeout(calculate_1,10)" onkeypress="setTimeout(calculate_1,10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center">
													<span class="hidden" id="email_1-availability-status"></span>
												</span>
												<br>
												<br>
												<!--<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
											</td>
										</div>
										<div class="col-sm-4">
											<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
												<span class="hideme2402"><img src="images/fukakiso2.PNG" id="fukakiso2402" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
												<span class="hidemeterbox2402">
													<textarea type="text" value="" name="meterbox2402" id="meterbox2402" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none;" disabled></textarea><br>
												</span>

												<input type="text" value="" name="notfollow240+2" id="notfollow240+2" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
												<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles_1" name="center_tiles_1" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
												<input type="text" value="" name="use2402" id="use2402" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
												<input align="center" type="text" id="demoss_1" name="demoss_1" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
												<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->

											</td>
										</div>
										<div class="col-sm-4">
											<td style="width:500px;overflow: hidden;">
												<b style="font-size:20px" class="space">Half Size </b>
												top <input type="text" id="top_height_1" name="top_height_1" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
												bottom <input type="text" id="bottom_height_1" name="bottom_height_1" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<b style="font-size:20px" class="space">Standard height </b>
												<input type="text" id="std_height_1" name="std_height_1" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
												<br><br>
												<b style="font-size:20px" class="space">Minimum height </b>
												<input type="text" id="minimum_height_1" name="minimum_height_1" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<input type="text" id="ans_1" name="ans_1" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
												<b style="font-size:20px" class="space">GL to FL height for meter </b>
												<input type="text" id="plus2402" name="plus2402" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
												<span class="hidden" id="emailA_1-availability-status"></span>
												<hr>
												<b style="font-size:20px" class="space">Low Nokiten </b>
												<input type="text" id="low_nokiten_1" name="low_nokiten_1" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<input type="text" id="ans2_1" name="ans2_1" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
												<span class="hidden" id="emailB_1-availability-status"></span>
												<b style="font-size:20px" class="space">High Nokiten </b>
												<input type="text" id="high_nokiten_1" name="high_nokiten_1" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<input type="text" id="ans3_1" name="ans3_1" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
												<span class="hidden" id="emailC_1-availability-status"></span>
												Reminder:
												<textarea align="center" type="text" id="demos_1" name="demos_1" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>

											</td>
											<input class="hide type=" text" id="center_tiles_hit_1" name="center_tiles_hit_1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
											<input class="hide type=" text" id="center_tiles_hit2_1" name="center_tiles_hit2_1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
											<input class="hide type=" text" id="center_tiles_hit3_1" name="center_tiles_hit3_1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										</div>
									</tr>
								</form>
							</tbody>
						</table>

						<table id="table2" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
							<thead>
								<div data-role="header" class="" id="FireAlarmAboveWindow">
									<th colspan="6">
										<h1>２４０＋Ｔ (140 土台)</h1>
									</th>
								</div>
							</thead>
							<tbody>
								<tr>

									<?php
									function exterior_denki1()
									{
										try {
											$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$pdo->query("SET NAMES utf8");
											$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240t_back ORDER BY exterior_denki asc");
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
									foreach (exterior_denki1() as $value) {
										$option .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
									}
									?>
								</tr>
								<form id="myForm2">
									<tr>
										<div class="col-sm-4">
											<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
												<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->
												<!--<span class="hideme" style="text-align:center"><textarea id="socket2" width="60%" height="50" value="" style="visibility:hidden;left:"/></textarea></span>
									<span>-->
												<p id="touket"></p>
												<span class="hideTouKetsu" style="text-align:center"><img src="images/AddTouketsu.PNG" id="touketsuImg" width="100%" height="100" style="visibility:hidden;" /></span><br>
												<label style="font-size:18px;color:black;float:left;">Exterior Denki Items:</label>
												<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate1, 10),KansenMax()" id="exterior_denki1" name="exterior_denki1" required="required">
													<option value=""></option>
													<option><?php echo $option; ?></option>
												</select>
												<?php
												include_once 'include/dbcon.php';
												$query = "SELECT * FROM centering_240t_back WHERE exterior_denki = 'exterior_denki' ";
												$result = $db_connect->query($query);
												?>
												<br>
												<br>
												<label style="font-size:18px;color:black;float:left;" class="space">Location: </label>
												<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate1, 10),KansenMax()" id="standard1" name="standard1" required="required">
													<option disabled selected>Choose Type</option>

													<option value="gl">gl</option>
													<option value="doma">Genkan doma</option>
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
												<label style="font-size:20px;color:black;float:left;" class="space">Requested Height: </label>
												<input type="text" id="R_height1" name="R_height1" onkeyup="setTimeout(calculate1, 10),setTimeout(hitting1,20);" onkeypress="setTimeout(calculate1, 10),setTimeout(hitting1,20);" onchange="setTimeout(calculate1, 10),setTimeout(hitting1,20);" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center">
												<span class="hidden" id="email1-availability-status"></span><br>
												<br>
												<input class="bg-danger" type='button' class="" id="view2" name="view2" onClick='javascript:showTable5();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">
												<br>
												<br>
												</span>

												<!--<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->

											</td>
										</div>
										<div class="col-sm-4">
											<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
												<span class="hideme240T"><img src="images/fukakiso2.PNG" id="fukakiso240T" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
												<span class="hidemeterbox240T">
													<textarea type="text" value="" name="meterbox240t" id="meterbox240t" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none;" disabled></textarea><br>
												</span>

												<input type="text" value="" name="notfollow" id="notfollow" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
												<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles1" name="center_tiles1" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
												<input type="text" value="" name="use240t" id="use240t" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
												<input align="center" type="text" id="demoss2" name="demoss2" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
												<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
											</td>
										</div>
										<div class="col-sm-4">
											<td style="width:500px;max-height: 150px;overflow: hidden;">
												<b style="font-size:20px" class="space">Half Size </b>
												top <input type="text" id="top_height1" name="top_height1" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
												bottom <input type="text" id="bottom_height1" name="bottom_height1" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<label style="font-size:20px;font-weight:bold;" class="space" id="max">Standard height </label>
												<input type="text" id="std_height1" name="std_height1" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<b style="font-size:20px" class="space">Minimum height </b>
												<input type="text" id="minimum_height1" name="minimum_height1" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<input type="text" id="ans4" name="ans4" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
												<b style="font-size:20px" class="space">GL to FL height for meter </b>
												<input type="text" id="plus240T" name="plus240T" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
												<span class="hidden" id="email1A-availability-status"></span>
												<hr>
												<b style="font-size:20px" class="space">Low Nokiten </b>
												<input type="text" id="low_nokiten1" name="low_nokiten1" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<input type="text" id="ans5" name="ans5" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
												<span class="hidden" id="email1B-availability-status"></span>
												<b style="font-size:20px" class="space">High Nokiten </b>
												<input type="text" id="high_nokiten1" name="high_nokiten1" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
												<input type="text" id="ans6" name="ans6" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
												<span class="hidden" id="email1C-availability-status"></span>
												Reminder:
												<textarea align="center" type="text" id="demos2" name="demos2" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>
												<input class="hide" type="text" id="center_tiles_hit1_2" name="center_tiles_hit1_2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
												<input class="hide" type="text" id="center_tiles_hit2_2" name="center_tiles_hit2_2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
												<input class="hide" type="text" id="center_tiles_hit3_2" name="center_tiles_hit3_2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
												<input class="hide" type="text" id="hittings2" name="hittings2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
											</td>
										</div>
									</tr>
									<br>
							</tbody>
							<tbody id="items2">
								<tr>
									<td colspan="3">
										<input align="center" type="text" id="good_hit2" name="good_hit2" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									</td>
								</tr>
								<tr style="border-top:2pt solid black;">

									<?php
									function exterior_denki1_2()
									{
										try {
											$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$pdo->query("SET NAMES utf8");
											$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_240t_back ORDER BY exterior_denki asc");
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
									foreach (exterior_denki1_2() as $value) {
										$option .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
									}
									?>
								</tr>

								<tr>
									<div class="col-sm-4">
										<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
											<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->

											<span>
												<label style="font-size:18px;color:black;float:left;">Exterior Denki Items:</label>
												<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate1_2, 10)" id="exterior_denki1_2" name="exterior_denki1_2" required="required">
													<option value=""></option>
													<option><?php echo $option; ?></option>
												</select>
												<?php
												include_once 'include/dbcon.php';
												$query = "SELECT * FROM centering_240t_back WHERE exterior_denki = 'exterior_denki' ";
												$result = $db_connect->query($query);
												?>
												<br>
												<br>
												<label style="font-size:18px;color:black;float:left" class="space">Location:</label>
												<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate1_2, 10)" id="standard1_2" name="standard1_2" required="required">
													<option disabled selected>Choose Type</option>

													<option value="gl">gl</option>
													<option value="doma">Genkan doma</option>
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
												<label style="font-size:20px;color:black;float:left;" class="space">Requested Height: </label>
												<input type="text" id="R_height1_2" name="R_height1_2" onkeyup="setTimeout(calculate1_2, 10)" onkeypress="setTimeout(calculate1_2, 10)" onchange="setTimeout(calculate1_2, 10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center">
												<span class="hidden" id="email1_2-availability-status"></span>
												<br>
												<br>
											</span>

											<!--<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->

										</td>
									</div>
									<div class="col-sm-4">
										<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
											<span class="hideme240T2"><img src="images/fukakiso2.PNG" id="fukakiso240T2" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
											<span class="hidemeterbox240T2">
												<textarea type="text" value="" name="meterbox240t2" id="meterbox240t2" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none;" disabled></textarea><br>
											</span>

											<input type="text" value="" name="notfollow2" id="notfollow2" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
											<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles1_2" name="center_tiles1_2" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
											<input type="text" value="" name="use240t2" id="use240t2" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
											<input align="center" type="text" id="demoss2_2" name="demoss2_2" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
											<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
										</td>
									</div>
									<div class="col-sm-4">
										<td style="width:500px;max-height: 150px;overflow: hidden;">
											<b style="font-size:20px" class="space">Half Size </b>
											top <input type="text" id="top_height1_2" name="top_height1_2" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
											bottom <input type="text" id="bottom_height1_2" name="bottom_height1_2" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<b style="font-size:20px" class="space">Standard height </b>
											<input type="text" id="std_height1_2" name="std_height1_2" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
											<br><br>
											<b style="font-size:20px" class="space">Minimum height </b>
											<input type="text" id="minimum_height1_2" name="minimum_height1_2" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<input type="text" id="ans4_2" name="ans4_2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
											<b style="font-size:20px" class="space">GL to FL height for meter </b>
											<input type="text" id="plus240T2" name="plus240T2" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
											<span class="hidden" id="email1A_2-availability-status"></span>
											<hr>

											<b style="font-size:20px" class="space">Low Nokiten </b>
											<input type="text" id="low_nokiten1_2" name="low_nokiten1_2" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<input type="text" id="ans5_2" name="ans5_2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
											<span class="hidden" id="email1B_2-availability-status"></span>
											<b style="font-size:20px" class="space">High Nokiten </b>
											<input type="text" id="high_nokiten1_2" name="high_nokiten1_2" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<input type="text" id="ans6_2" name="ans6_2" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
											<span class="hidden" id="email1C_2-availability-status"></span>
											Reminder:
											<textarea align="center" type="text" id="demos2_2" name="demos2_2" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>
											<input class="hide" type="text" id="center_tiles_hit1_21" name="center_tiles_hit1_21" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
											<input class="hide" type="text" id="center_tiles_hit2_22" name="center_tiles_hit2_22" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
											<input class="hide" type="text" id="center_tiles_hit3_23" name="center_tiles_hit3_23" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										</td>
								</tr>
								</div>

				</form>
				<br>
				</tbody>
				</table>


				<table id="table3" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
					<thead>
						<div data-role="header" class="" id="FireAlarmAboveWindow">
							<th colspan="6">
								<h1>260 + (140 土台)</h1>
							</th>
						</div>
					</thead>
					<tbody>
						<tr>

							<?php
							function exterior_denki2()
							{
								try {
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$pdo->query("SET NAMES utf8");
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_260_back ORDER BY exterior_denki asc");
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
							foreach (exterior_denki2() as $value) {
								$option .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
							}
							?>
						</tr>
						<form id="myForm3">
							<tr>
								<div class="col-sm-4">
									<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
										<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->

										<label style="font-size:18px;color:black;float:left">Exterior Denki Items:</label>
										<span>
											<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate2, 10)" id="exterior_denki2" name="exterior_denki2" required="required">
												<option value=""></option>
												<option><?php echo $option; ?></option>
											</select>
											<br>
											<br>
											<?php
											include_once 'include/dbcon.php';
											$query = "SELECT * FROM centering_260_back WHERE exterior_denki = 'exterior_denki' ";
											$result = $db_connect->query($query);
											?>
											<label style="font-size:18px;color:black;float:left" class="space">Location: </label>
											<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate2, 10)" id="standard2" name="standard2" required="required">
												<option disabled selected>Choose Type</option>

												<option value="gl">gl</option>
												<option value="doma">Genkan doma</option>
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
											<label style="font-size:20px;color:black;float:left" class="space">Requested Height: </label>
											<input type="text" id="R_height2" name="R_height2" onkeyup="setTimeout(calculate2, 10)" onkeypress="setTimeout(calculate2, 10)" onchange="setTimeout(calculate2, 10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center">
											<span class="hidden" id="email2-availability-status"></span>
											<br>
											<br>
											<input class="bg-danger" type='button' class="" id="view3" name="view3" onClick='javascript:showTable6();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">
											<!--<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
										</span>
								</div>
								</td>
								</div>
								<div class="col-sm-4">
									<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
										<span class="hideme260"><img src="images/fukakiso2.PNG" id="fukakiso260" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
										<span class="hidemeterbox260">
											<textarea type="text" value="" name="meterbox260" id="meterbox260" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none;" disabled></textarea><br>
										</span>

										<input align="center" type="text" id="notfollow260" name="notfollow260" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>

										<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles2" name="center_tiles2" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
										<input type="text" value="" name="use260" id="use260" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
										<input align="center" type="text" id="demoss3" name="demoss3" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
										<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
									</td>
								</div>
								<div class="col-sm-4">
									<td style="width:500px;overflow: hidden;">
										<b style="font-size:20px" class="space">Half Size </b>
										top <input type="text" id="top_height2_1" name="top_height2_1" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
										bottom <input type="text" id="bottom_height2_1" name="bottom_height2_1" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<b style="font-size:20px" class="space">Standard height </b>
										<input type="text" id="std_height2" name="std_height2" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
										<br><br>
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height2" name="minimum_height2" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<input type="text" id="ans7" name="ans7" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
										<b style="font-size:20px" class="space">GL to FL height for meter </b>
										<input type="text" id="plus260" name="plus260" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
										<span class="hidden" id="email2A-availability-status"></span>
										<hr>

										<b style="font-size:20px" class="space">Low Nokiten </b>
										<input type="text" id="low_nokiten2" name="low_nokiten2" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<input type="text" id="ans8" name="ans8" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
										<span class="hidden" id="email2B-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten </b>
										<input type="text" id="high_nokiten2" name="high_nokiten2" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<input type="text" id="ans9" name="ans9" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
										<span class="hidden" id="email2C-availability-status"></span>
										Reminder:
										<textarea align="center" type="text" id="demos3" name="demos3" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>
										<input class="hide" type="text" id="center_tiles_hit3_x" name="center_tiles_hit3_x" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="center_tiles_hit3_y" name="center_tiles_hit3_y" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="center_tiles_hit3_z" name="center_tiles_hit3_z" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
										<input class="hide" type="text" id="hittings3" name="hittings3" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									</td>
								</div>
							</tr>


							<center><input type="text" class="hide" id="demo2" name="demo2" onClick='javascript:showTable3();' style="font-size:50px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" disabled></center>
					</tbody>
					<tbody id="items3">
						<tr>
							<td colspan="3">
								<input align="center" type="text" id="good_hit3" name="good_hit3" class="" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
							</td>
						</tr>
						<tr style="border-top:2pt solid black;">

							<?php
							function exterior_denki2_3()
							{
								try {
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$pdo->query("SET NAMES utf8");
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_260_back ORDER BY exterior_denki asc");
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
							foreach (exterior_denki2_3() as $value) {
								$option .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
							}
							?>
						</tr>

						<tr>
							<div class="col-sm-4">
								<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
									<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->

									<span>
										<label style="font-size:18px;color:black;float:left">Exterior Denki Items:</label>
										<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate2_1, 10)" id="exterior_denki2_3" name="exterior_denki2_3" required="required">
											<option value=""></option>
											<option><?php echo $option; ?></option>
										</select>
										<br>
										<br>
										<?php
										include_once 'include/dbcon.php';
										$query = "SELECT * FROM centering_260_back WHERE exterior_denki = 'exterior_denki' ";
										$result = $db_connect->query($query);
										?>
										<label style="font-size:18px;color:black;float:left" class="space">Location:</label>
										<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate2_1, 10)" id="standard2_3" name="standard2_3" required="required">
											<option disabled selected>Choose Type</option>

											<option value="gl">gl</option>
											<option value="doma">Genkan doma</option>
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
										<label style="font-size:20px;color:black;float:left" class="space">Requested Height: </label>
										<input type="text" id="R_height2_3" name="R_height2_3" onkeyup="setTimeout(calculate2_1, 10)" onkeypress="setTimeout(calculate2_1, 10)" onchange="setTimeout(calculate2_1, 10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center">
										<span class="hidden" id="email2-availability-status"></span>
										<br>
										<br>
									</span>
							</div>
							<!--<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
							</td>
							</div>
							<div class="col-sm-4">
								<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
									<span class="hideme2602"><img src="images/fukakiso2.PNG" id="fukakiso2602" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
									<span class="hidemeterbox2602">
										<textarea type="text" value="" name="meterbox2602" id="meterbox2602" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none;" disabled></textarea><br>
									</span>

									<input align="center" type="text" id="notfollow260+2" name="notfollow260+2" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
									<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles2_3" name="center_tiles2_3" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
									<input type="text" value="" name="use2602" id="use2602" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
									<input align="center" type="text" id="demoss3_3" name="demoss3_3" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
									<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->
								</td>
							</div>
							<div class="col-sm-4">
								<td style="width:500px;max-height: 150px;overflow: hidden;">
									<b style="font-size:20px" class="space">Half Size </b>
									top <input type="text" id="top_height2_3" name="top_height2_3" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
									bottom <input type="text" id="bottom_height2_3" name="bottom_height2_3" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
									<b style="font-size:20px" class="space">Standard height </b>
									<input type="text" id="std_height2_3" name="std_height2_3" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
									<br><br>
									<b style="font-size:20px" class="space">Minimum height </b>
									<input type="text" id="minimum_height2_3" name="minimum_height2_3" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
									<input type="text" id="ans7_3" name="ans7_3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly><br><br>
									<b style="font-size:20px" class="space">GL to FL height for meter </b>
									<input type="text" id="plus2602" name="plus2602" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
									<span class="hidden" id="email2A_3-availability-status"></span>
									<hr>

									<b style="font-size:20px" class="space">Low Nokiten </b>
									<input type="text" id="low_nokiten2_3" name="low_nokiten2_3" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
									<input type="text" id="ans8_3" name="ans8_3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
									<span class="hidden" id="email2B_3-availability-status"></span>
									<b style="font-size:20px" class="space">High Nokiten </b>
									<input type="text" id="high_nokiten2_3" name="high_nokiten2_3" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
									<input type="text" id="ans9_3" name="ans9_3" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
									<span class="hidden" id="email2C_3-availability-status"></span>
									Reminder:
									<textarea align="center" type="text" id="demos3_3" name="demos3_3" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>
									<input class="hide" type="text" id="center_tiles_hit3_x1" name="center_tiles_hit3_x1" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_y2" name="center_tiles_hit3_y2" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
									<input class="hide" type="text" id="center_tiles_hit3_z3" name="center_tiles_hit3_z3" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								</td>
							</div>
						</tr>

						</form>
						<center><input type="text" class="hide" id="demo2" name="demo2" onClick='javascript:showTable3();' style="font-size:50px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" disabled></center>
					</tbody>
				</table>
				<!--grandsaison------------------------------------------------------------------------------->
				<table id="tableGS" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
					<thead>
						<div data-role="header" class="" id="">
							<th colspan="6">
								<h1>240/265 GrandSaison</h1>
							</th>
						</div>
					</thead>
					<tbody>
						<tr>

							<?php

							function exterior_denkiGS()
							{
								try {
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$pdo->query("SET NAMES utf8");
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_265_back ORDER BY exterior_denki asc");
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
							foreach (exterior_denkiGS() as $value) {
								$option .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
							}
							?>
						</tr>
						<form id="myForm">

							<tr height="250px">
								<div class="col-sm-4">
									<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
										<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->

										<span>
											<label style="font-size:18px;color:black;float:left;">Exterior Denki Items:</label><br>
											<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculateGS,10)" id="exterior_denkiGS" name="exterior_denkiGS" required="required">
												<option value=""></option>
												<option><?php echo $option; ?></option>
											</select>
											<?php

											include_once 'include/dbcon.php';
											$query = "SELECT * FROM centering_265_back WHERE exterior_denki = 'exterior_denki' ";
											$result = $db_connect->query($query);
											?>
											<br>
											<br>
											<label style="font-size:18px;color:black;float:left;" class="space">Location:</label><br>
											<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculateGS,10)" id="standardGS" name="standardGS" required="required">
												<option disabled selected>Choose Type</option>

												<option value="gl">gl</option>
												<option value="doma">Genkan doma</option>
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
											<label style="font-size:20px;color:black;float:left;" class="space">Requested Height:</label><br>
											<input type="text" id="R_heightGS" name="R_heightGS" onkeyup="setTimeout(calculateGS,10)" onkeypress="setTimeout(calculateGS,20)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center"><br><br>
											<span class="hidden" id="emailGS-availability-status"></span>
											<input class="bg-danger" type='button' class="" id="view" name="view" onClick='javascript:showTableGS2();' value='Click here !! If with 2nd item !!' style="font-size:15px;color:blue;font-weight:bold">

										</span>

										<!--<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
									</td>
								</div>
								<div class="col-sm-4">
									<span>
										<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
											<span class="hideme"><img src="images/fukakiso2.PNG" id="fukakiso" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
											<span class="hidemeterbox">
												<textarea type="text" value="" name="meterboxGS" id="meterboxGS" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none" disabled></textarea><br>
											</span>
											<input align="center" type="text" id="notfollowGS" name="notfollowGS" class="" style="color:red;width:70%;font-size:20px;font-weight:bold;background-color:#F0F8FF;text-align:center;border:none;" disabled><br>
											<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tilesGS" name="center_tilesGS" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
											<input align="center" type="text" id="useGS" name="useGS" class="" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
											<input align="center" type="text" id="demossGS" name="demossGS" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
											<!--<span style="font-size:11px;color:blue;float:left">*Check if exceeding to <span style="color:red;font-weight:bold">LOW NOKITEN & HIGH NOKITEN</span> height.</span><br>	
										<span style="font-size:11px;color:blue;float:left">*If exceeds check location of item if with  <span style="color:red;font-weight:bold">LOAD</span> above the item.</span><br>	
										<span style="font-size:11px;color:blue;float:left">*Height should not be lower than <span style="color:red;font-weight:bold">MINIMUM HEIGHT</span>.</span>-->

										</td>
									</span>
								</div>
								<div class="col-sm-4">
									<span>
										<td style="width:500px;overflow: hidden;">
											<b style="font-size:20px" class="space">Half Size </b>
											top <input type="text" id="top_heightGS" name="top_heightGS" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
											bottom <input type="text" id="bottom_heightGS" name="bottom_heightGS" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<b style="font-size:20px" class="space">Standard height </b>
											<input type="text" id="std_heightGS" name="std_heightGS" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
											<br><br>
											<b style="font-size:20px" class="space">Minimum height </b>
											<input type="text" id="minimum_heightGS" name="minimum_heightGS" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<input type="text" id="ansGS" name="ansGS" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
											<b style="font-size:20px" class="space">GL to FL height for meter </b>
											<input type="text" id="plusMeterboxGS" name="plusMeterboxGS" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
											<!--<input align="center" type="text" id="plusMeterboxGS" name="plusMeterboxGS" class=""    style="color:#d72be3;width:40%;font-size:25px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled >-->
											<span class="hidden" id="emailAGS-availability-status"></span>
											<hr>

											<b style="font-size:20px" class="space">Low Nokiten </b>
											<input type="text" id="low_nokitenGS" name="low_nokitenGS" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<input type="text" id="ans2GS" name="ans2GS" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
											<span class="hidden" id="emailBGS-availability-status"></span>
											<b style="font-size:20px" class="space">High Nokiten </b>
											<input type="text" id="high_nokitenGS" name="high_nokitenGS" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
											<input type="text" id="ans3GS" name="ans3GS" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
											<span class="hidden" id="emailCGS-availability-status"></span>
											Reminder:
											<textarea align="center" type="text" id="demosGS" name="demosGS" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>

										</td>
									</span>
								</div>
							</tr>



					</tbody>
					<tbody id="itemsGS">
						<tr>
							<td colspan="3" style="height:10px;">
								<input class="hide" type="text" id="center_tiles_hitGS" name="center_tiles_hitGS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								<input class="hide" type="text" id="center_tiles_hit2GS" name="center_tiles_hit2GS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								<input class="hide" type="text" id="center_tiles_hit3GS" name="center_tiles_hit3GS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								<input class="hide" type="text" id="hittingsGS" name="hittingsGS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								<input align="center" type="text" id="good_hitGS" name="good_hitGS" class="" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;text-align:center;background-color:none;" disabled>
							</td>
						</tr>
						<tr style="border-top:2pt solid black;">

							<?php
							function exterior_denki_1GS()
							{
								try {
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$pdo->query("SET NAMES utf8");
									$stmt = $pdo->prepare("SELECT exterior_denki FROM centering_265_back ORDER BY exterior_denki asc");
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
							$option1 = '';
							foreach (exterior_denki_1GS() as $value) {
								$option1 .= '<option value="' . $value["exterior_denki"] . '">' . $value["exterior_denki"] . '</option>';
							}
							?>
						</tr>
						<form id="myFormS">
							<tr height="250px">
								<div class="col-sm-4">
									<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
										<!--<div class="col-sm-4">
										<label style="font-size:18px;color:black">Exterior Denki Items:</label>&nbsp;
										<label style="font-size:18px;color:black" class="space">Location:    		   </label>&nbsp;
										<label style="margin-top:20px;font-size:20px;color:black;" class="space">Requested Height:  </label>
									</div>-->

										<span>
											<label style="font-size:18px;color:black;float:left;">Exterior Denki Items:</label><br>
											<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate_1GS,10)" id="exterior_denki_1GS" name="exterior_denki_1GS" required="required">
												<option value=""></option>
												<option><?php echo $option1; ?></option>
											</select>
											<?php
											include_once 'include/dbcon.php';
											$query = "SELECT * FROM centering_265_back WHERE exterior_denki = 'exterior_denki' ";
											$result = $db_connect->query($query);
											?>
											<br>
											<br>
											<label style="font-size:18px;color:black;float:left;" class="space">Location:</label>
											<select style="height:50px;width:100%;font-size:25px;text-align:center;color:blue;" onchange="setTimeout(calculate_1GS,10)" id="standard_1GS" name="standard_1GS" required="required">
												<option disabled selected>Choose Type</option>

												<option value="gl">gl</option>
												<option value="doma">Genkan doma</option>
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
											<label style="font-size:20px;color:black;float:left;" class="space">Requested Height: </label>
											<input type="text" id="R_height_1GS" name="R_height_1GS" onkeyup="setTimeout(calculate_1GS,10)" onkeypress="setTimeout(calculate_1GS,10)" style="height:50px;width:100%;font-size:25px;color:blue;text-align:center">
											<span class="hidden" id="email_1GS-availability-status"></span>
										</span>
								</div>
								<br>
								<br>
								<!--<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:15px;color:black;font-weight:bold">-->
								</td>
								</div>
								<div class="col-sm-4">
									<td style="text-align:center;vertical-align:middle;width:500px;max-height: 150px;overflow: hidden;">
										<span class="hidemeGS2"><img src="images/fukakiso2.PNG" id="fukakisoGS2" width="400" height="150" style="visibility:hidden;left:100px;top:500px " /></span>
										<span class="hidemeterboxGS">
											<textarea type="text" value="" name="meterboxGS2" id="meterboxGS2" style="resize: none;color:#d72be3;width:90%;font-size:25px;font-weight:bold;background-color:#F0F8FF;text-align:center;visibility:hidden;border:none" disabled></textarea><br>
										</span>
										<input align="center" type="text" id="notfollowGS2" name="notfollowGS2" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
										<span style="color:red;font-size:20px;position:absolute;">CENTER OF TILE: </span><input type="text" id="center_tiles_1GS" name="center_tiles_1GS" align="center" style="height:150px;width:300px;font-size:50px;color:red;text-align:center" readonly><br>
										<input align="center" type="text" id="useGS2" name="useGS2" class="" style="color:red;width:80%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled><br>
										<input align="center" type="text" id="demoss_1GS" name="demoss_1GS" class="" style="color:red;width:50%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>


									</td>
								</div>
								<div class="col-sm-4">
									<td style="width:500px;overflow: hidden;">
										<b style="font-size:20px" class="space">Half Size </b>
										top <input type="text" id="top_height_1GS" name="top_height_1GS" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly>
										bottom <input type="text" id="bottom_height_1GS" name="bottom_height_1GS" align="center" style="width:60px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<b style="font-size:20px" class="space">Standard height </b>
										<input type="text" id="std_height_1GS" name="std_height_1GS" style="width:100px;font-size:25px;color:blue;text-align:center" readonly>
										<br><br>
										<b style="font-size:20px" class="space">Minimum height </b>
										<input type="text" id="minimum_height_1GS" name="minimum_height_1GS" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<input type="text" id="ans_1GS" name="ans_1GS" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
										<b style="font-size:20px" class="space">GL to FL height for meter</b>
										<input type="text" id="plusMeterboxGS2" name="plusMeterboxGS2" align="center" style="width:100px;font-size:25px;color:#d72be3;text-align:center" readonly>
										<span class="hidden" id="emailA_1GS-availability-status"></span>
										<hr>
										<b style="font-size:20px" class="space">Low Nokiten </b>
										<input type="text" id="low_nokiten_1GS" name="low_nokiten_1GS" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<input type="text" id="ans2_1GS" name="ans2_1GS" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
										<span class="hidden" id="emailB_1GS-availability-status"></span>
										<b style="font-size:20px" class="space">High Nokiten </b>
										<input type="text" id="high_nokiten_1GS" name="high_nokiten_1GS" align="center" style="width:100px;font-size:25px;color:blue;text-align:center" readonly><br><br>
										<input type="text" id="ans3_1GS" name="ans3_1GS" class="hide" align="center" style="height:50px;width:40px;border:none;font-size:30px;color:red;text-align:center" readonly>
										<span class="hidden" id="emailC_1GS-availability-status"></span>
										Reminder:
										<textarea align="center" type="text" id="demos_1GS" name="demos_1GS" class="blink_me" style="height:50px;color:red;width:100%;font-size:20px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;resize: none;" disabled></textarea>
									</td>
								</div>
								<input class="hide type=" text" id="center_tiles_hit_1GS" name="center_tiles_hit_1GS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								<input class="hide type=" text" id="center_tiles_hit2_1GS" name="center_tiles_hit2_1GS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
								<input class="hide type=" text" id="center_tiles_hit3_1GS" name="center_tiles_hit3_1GS" align="center" style="height:50px;width:200px;font-size:60px;color:red;text-align:center" readonly>
							</tr>
						</form>
					</tbody>
				</table>
				<!--grandsaison------------------------------------------------------------------------------->
				</form>
</body>
<!-- page end-->
</section>

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
</section>
</body>

</html>

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
	$(document).ready(function() {
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
			// (string | optional) the class name you want to  to that specific message
			class_name: 'my-sticky-class'
		});

		return false;
	});
	$(document).ready(function() {
		//$(".hideTouKetsu").hide(); //or $(".hideme").remove();
		$(".hideme").hide(); //or $(".hideme").remove();
		$(".hidemeGS2").hide(); //or $(".hideme").remove();
		$(".hideme240").hide(); //or $(".hideme").remove();
		$(".hideme2402").hide(); //or $(".hideme").remove();
		$(".hideme240T").hide(); //or $(".hideme").remove();
		$(".hideme240T2").hide(); //or $(".hideme").remove();
		$(".hideme260").hide(); //or $(".hideme").remove();
		$(".hideme2602").hide(); //or $(".hideme").remove();
		$(".hidemeterbox").hide(); //or $(".hideme").remove();
		$(".hidemeterboxGS").hide(); //or $(".hideme").remove();
		$(".hidemeterbox240").hide(); //or $(".hideme").remove();
		$(".hidemeterbox2402").hide(); //or $(".hideme").remove();
		$(".hidemeterbox240T").hide(); //or $(".hideme").remove();
		$(".hidemeterbox240T2").hide(); //or $(".hideme").remove();
		$(".hidemeterbox260").hide(); //or $(".hideme").remove();
		$(".hidemeterbox2602").hide(); //or $(".hideme").remove();
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

	function myFunction(e) {
		document.getElementById("std_height").value = e.target.value;
	}
</script>
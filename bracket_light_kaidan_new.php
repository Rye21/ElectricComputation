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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 3";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 3";
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

	<title>WALL MOUNTED BRACKET LIGHT AND KAIDAN</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<link rel="icon" href="http://hrdapps33/DenkiComputation/assets/img/images.png" type="image/x-icon" />
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
	$(document).ready(function() {
		function compute() {
			var f1 = $('#f1').val();
			var c1 = 2775;
			var c2 = 2972;
			var c3 = 2737;
			//var b1 = 2524  ;
			//var b2 = 2775  ;
			//var b3 = 2776  ;			   
			var f2 = $('#f2').val();
			var cts = parseFloat($('select[name=cts]').val() || 0);
			var OA = parseFloat($('select[name=OA]').val() || 0);
			var ns = parseFloat($('input[name=ns]').val() || 0);
			var ii = parseFloat($('input[name=ii]').val() || 0);
			var gh = parseFloat($('input[name=gh]').val() || 0);

			var f1 = ns * cts + gh;
			var f2 = (ns * cts + gh) - c1;
			var f3 = (ns * cts + gh) - c2;
			var ii = '1F';
			var ii2 = 'HIT TO BEAM';
			var ii3 = '2F';
			$('#f1').val(f1);
			if (cts == 185.8) {
				$('#f2').val(f3);
			} else {
				$('#f2').val(f2);
			}
			if (f1 <= 2524) {
				document.getElementById("demo").value = ii;
				document.getElementById("demo").style.color = "green";
			} else if (f1 <= 2775.9) {
				document.getElementById("demo").value = ii2;
				document.getElementById("demo").style.color = "#ff0000";
			} else if (f1 >= 2776) {
				document.getElementById("demo").value = ii3;
				document.getElementById("demo").style.color = "green";
			}

		}
		$('#f1, #f2, #cts, #ns, #ii, #gh, #ii2, #ii3').keyup(compute);
		$('#f1, #f2, #cts, #ns, #ii, #gh, #ii2, #ii3').change(compute);

	});

	$(document).ready(function() {
		function compute0() {
			var f1a = $('#f1a').val();
			var c1 = 2775;
			var c2 = 2972;
			//var b1 = 2524  ;
			//var b2 = 2775  ;
			//var b3 = 2776  ;			   
			var f2a = $('#f2a').val();
			var ctsa = parseFloat($('select[name=ctsa]').val() || 0);
			var OA2 = parseFloat($('select[name=OA2]').val() || 0);
			var nsa = parseFloat($('input[name=nsa]').val() || 0);
			var iia = parseFloat($('input[name=iia]').val() || 0);
			var gha = parseFloat($('input[name=gha]').val() || 0);
			var f1a = nsa * ctsa + gha;
			var f2a = (nsa * ctsa + gha) - c1;
			var f3a = (nsa * ctsa + gha) - c2;
			var iia = '1F';
			var ii2a = 'HIT TO BEAM';
			var ii3a = '2F';
			$('#f1a').val(f1a);
			if (ctsa == 185.8) {
				$('#f2a').val(f3a);
			} else {
				$('#f2a').val(f2a);
			}
			if (f1a <= 2685) {
				document.getElementById("demo1").value = iia;
				document.getElementById("demo1").style.color = "green";
			} else if (f1a <= 2985.9) {
				document.getElementById("demo1").value = ii2a;
				document.getElementById("demo1").style.color = "#ff0000";

			} else if (f1a >= 2986) {
				document.getElementById("demo1").value = ii3a;
				document.getElementById("demo1").style.color = "green";
			}

		}
		$('#f1a, #f2a, #ctsa, #nsa, #iia, #gha, #ii2a, #ii3a ').keyup(compute0);
		$('#f1a, #f2a, #ctsa, #nsa, #iia, #gha, #ii2a, #ii3a ').change(compute0);

	});

	$(document).ready(function() {
		function compute1() {
			var f1b = $('#f1b').val();

			var c1 = 2826;
			var c2 = 2972;
			var c3 = 2737;
			//var b1 = 2524  ;
			//var b2 = 2775  ;
			//var b3 = 2776  ;			   
			var f2b = $('#f2b').val();
			var ctsb = parseFloat($('select[name=ctsb]').val() || 0);
			var OA = parseFloat($('select[name=OA]').val() || 0);
			var nsb = parseFloat($('input[name=nsb]').val() || 0);
			var iib = parseFloat($('input[name=iib]').val() || 0);
			var ghb = parseFloat($('input[name=ghb]').val() || 0);

			var f1b = nsb * ctsb + ghb;
			var f2b = (nsb * ctsb + ghb) - c1;
			var f3b = (nsb * ctsb + ghb) - c2;
			var iib = '1F';
			var ii2b = 'HIT TO BEAM';
			var ii3b = '2F';
			$('#f1b').val(f1b);
			if (ctsb == 200) {
				$('#f2b').val(f3b);
			} else {
				$('#f2b').val(f2b);
			}
			if (f1b <= 2486) {
				document.getElementById("demo2").value = iib;
				document.getElementById("demo2").style.color = "green";
			} else if (f1b <= 2825.9) {
				document.getElementById("demo2").value = ii2b;
				document.getElementById("demo2").style.color = "#ff0000";
			} else if (f1b >= 2826) {
				document.getElementById("demo2").value = ii3b;
				document.getElementById("demo2").style.color = "green";
			}

		}
		$('#f1b, #f2b, #ctsb, #nsb, #iib, #ghb, #ii2b, #ii3b').keyup(compute1);
		$('#f1b, #f2b, #ctsb, #nsb, #iib, #ghb, #ii2b, #ii3b').change(compute1);

	});

	//////////////////////////////////WML//////////////////////////////////////////

	$(document).ready(function() {
		function compute3() {

			var openArea = parseFloat($('select[name=openArea]').val() || 0);
			var reqHeight = parseFloat($('input[name=reqHeight]').val() || 0);
			var elevHeight = parseFloat($('input[name=elevHeight]').val() || 0);
			var allowance = parseFloat($('input[name=allowance]').val() || 0);
			var reqAllowance = document.getElementById("reqAllowance").value;
			var halfSizeLight = parseFloat($('input[name=halfSizeLight]').val() || 0);
			var fixHeight = parseFloat($('input[name=fixHeight]').val() || 0);
			var windowToWML = document.getElementById("windowToWML").value;
			//console.log(windowToWML , reqAllowance);
			var x = openArea - reqHeight;
			var a = document.getElementById("allowance").value = Math.abs(x);
			var y = elevHeight - a;
			var b = document.getElementById("windowToWML").value = Math.abs(y);
			var z = halfSizeLight + fixHeight;
			document.getElementById("reqAllowance").value = Math.abs(z);
			if (halfSizeLight) {
				if (b >= z) {
					document.getElementById("demo3").value = 'Possible';
					$("#demo3").css("color", "black");
					document.getElementById("demo3").style.background = "green";
				} else {
					document.getElementById("demo3").value = 'Not Possible';
					$("#demo3").css("color", "black");
					document.getElementById("demo3").style.background = "red";
				}
			}


		}
		$('#openArea, #reqHeight ,#elevHeight ,#halfSizeLight').keyup(compute3);
		$('#openArea, #reqHeight ,#elevHeight ,#halfSizeLight').change(compute3);

	});
	//$(document).ready(function() {
	function compute4() {

		var openArea2 = parseFloat($('select[name=openArea2]').val() || 0);
		var reqHeight2 = parseFloat($('input[name=reqHeight2]').val() || 0);
		var elevHeight2 = parseFloat($('input[name=elevHeight2]').val() || 0);
		var allowance2 = parseFloat($('input[name=allowance2]').val() || 0);
		var reqAllowance2 = document.getElementById("reqAllowance2").value;
		var halfSizeLight2 = parseFloat($('input[name=halfSizeLight2]').val() || 0);
		var fixHeight2 = parseFloat($('input[name=fixHeight2]').val() || 0);
		var windowHeight2 = parseFloat($('input[name=windowHeight2]').val() || 0);
		var windowToWML2 = parseFloat($('input[name=windowToWML2]').val() || 0);

		//console.log(windowToWML , reqAllowance);
		var x = openArea2 - reqHeight2;
		var a = document.getElementById("allowance2").value = Math.abs(x);
		var y = elevHeight2 + windowHeight2;
		var b = document.getElementById("windowToWML2").value = Math.abs(y);
		var z = halfSizeLight2;
		var c = document.getElementById("reqAllowance2").value = Math.abs(z);
		if (reqHeight2 >= b) {
			var xy = b + fixHeight2 + c;
			var d = document.getElementById("SpacefromWindowWML").value = Math.abs(xy);
			if (halfSizeLight2) {

				if (d >= reqHeight2) {
					document.getElementById("demo4").value = 'Not Possible';
					$("#demo4").css("color", "black");
					document.getElementById("demo4").style.background = "red";
				} else {
					document.getElementById("demo4").value = 'Possible';
					$("#demo4").css("color", "black");
					document.getElementById("demo4").style.background = "green";
				}
			}

		} else if (reqHeight2 <= b) {
			var xy = b - fixHeight2 - c;
			var d = document.getElementById("SpacefromWindowWML").value = Math.abs(xy);
			if (halfSizeLight2) {

				if (reqHeight2 >= d) {
					document.getElementById("demo4").value = 'Not Possible';
					$("#demo4").css("color", "black");
					document.getElementById("demo4").style.background = "red";
				} else {
					document.getElementById("demo4").value = 'Possible';
					$("#demo4").css("color", "black");
					document.getElementById("demo4").style.background = "green";
				}
			}
		}
		if (windowHeight2 != '') {
			$("#elevHeight2").prop("disabled", false);
		}



	}

	/*  $('#openArea2, #reqHeight2 ,#elevHeight2 ,#halfSizeLight2 ,#window ,#windowHeight2').keyup(compute4);
            $('#openArea2, #reqHeight2 ,#elevHeight2 ,#halfSizeLight2 ,#window ,#windowHeight2').change(compute4);
            $('#openArea2, #reqHeight2 ,#elevHeight2 ,#halfSizeLight2 ,#window ,#windowHeight2').click(compute4);
			setTimeout(function(){
                compute4();
            },10);
    	 });  */
	////////////////////////////////////////////////////////////////////////////////

	$(document).ready(function() {
		$(".hideme").hide();

		function socketShow() {
			var img = document.getElementById('socket');
			img.style.visibility = 'visible';
			$(document).ready(function() {
				$(".hideme").show();
			});
		}

		function socketHide() {
			$(document).ready(function() {
				$(".hideme").hide();
			});
		}
		document.getElementById("position").disabled = true;

		function compute5() {
			var kanabakari = document.getElementById("kanabakari").value;
			var kan = kanabakari.substring(0, 3)
			var position = document.getElementById("position").value;
			var requestHeight = document.getElementById("requestHeight").value;
			//console.log(kanabakari);
			if ((kanabakari == '２４０＋Ｔ' || kanabakari == '２４０+Ｔ□') && requestHeight != '') {
				if (position == '1' || position == '2' || position == '6') {
					if (requestHeight >= 2489 && requestHeight <= 2826) {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					} else {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						if (requestHeight <= 2488) {
							document.getElementById("fpPresent").value = '1F';
							$('#fpPresent').css("color", "red");
						} else if (requestHeight >= 2827) {
							document.getElementById("fpPresent").value = '2F';
							$('#fpPresent').css("color", "red");
						} else {
							document.getElementById("fpPresent").value = '';
						}
					}
				} else if (position == '3' || position == '4') {
					if (requestHeight >= 2230 && requestHeight <= 2488) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '1F';
						$('#fpPresent').css("color", "red");
					} else if (requestHeight >= 2827) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '2F';
						$('#fpPresent').css("color", "red");
					} else {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					}
				} else if (position == '5') {
					if (requestHeight >= 2410 && requestHeight <= 2488) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						if (requestHeight >= 2410 && requestHeight <= 2488) {
							document.getElementById("fpPresent").value = '1F';
							$('#fpPresent').css("color", "red");
						} else if (requestHeight <= 2489) {
							document.getElementById("fpPresent").value = '2F';
							$('#fpPresent').css("color", "red");
						} else {
							document.getElementById("fpPresent").value = '';
						}
					} else {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					}
				}
			} else if (kan == '２４０' && requestHeight != '') {
				if (position == '1' || position == '2') {
					if (requestHeight >= 2489 && requestHeight <= 2787) {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					} else {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						if (requestHeight <= 2488) {
							document.getElementById("fpPresent").value = '1F';
							$('#fpPresent').css("color", "red");
						} else if (requestHeight >= 2788) {
							document.getElementById("fpPresent").value = '2F';
							$('#fpPresent').css("color", "red");
						} else {
							document.getElementById("fpPresent").value = '';
						}
					}
				} else if (position == '3' || position == '4') {
					if (requestHeight >= 2230 && requestHeight <= 2488) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '1F';
						$('#fpPresent').css("color", "red");
					} else if (requestHeight >= 2788) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '2F';
						$('#fpPresent').css("color", "red");
					} else {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					}
				} else if (position == '5') {
					if (requestHeight >= 2410 && requestHeight <= 2488) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						if (requestHeight >= 2410 && requestHeight <= 2488) {
							document.getElementById("fpPresent").value = '1F';
							$('#fpPresent').css("color", "red");
						} else if (requestHeight <= 2489) {
							document.getElementById("fpPresent").value = '2F';
							$('#fpPresent').css("color", "red");
						} else {
							document.getElementById("fpPresent").value = '';
						}
					} else {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					}
				} else if (position == '6') {
					if (requestHeight <= 2397) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '1F';
						$('#fpPresent').css("color", "red");
						socketShow();
					} else if (requestHeight >= 2848) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '2F';
						$('#fpPresent').css("color", "red");
						socketShow();
					} else if (requestHeight >= 2398 && requestHeight <= 2847) {
						//console.log('Not Possible');
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'NOT FOLLOW USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
						socketHide();
					} else {
						socketHide();
					}
				}
			} else if (kan == '２６０' && requestHeight != '') {
				if (position == '1' || position == '2') {
					if (requestHeight >= 2686 && requestHeight <= 2984) {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					} else {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						if (requestHeight <= 2685) {
							document.getElementById("fpPresent").value = '1F';
							$('#fpPresent').css("color", "red");
						} else if (requestHeight >= 2985) {
							document.getElementById("fpPresent").value = '2F';
							$('#fpPresent').css("color", "red");
						} else {
							document.getElementById("fpPresent").value = '';
						}
					}
				} else if (position == '3' || position == '4') {
					if (requestHeight >= 2230 && requestHeight <= 2450) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '1F';
						$('#fpPresent').css("color", "red");
					} else if (requestHeight >= 2985) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '2F';
						$('#fpPresent').css("color", "red");
					} else {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
					}
				} else if (position == '5') {
					if (requestHeight >= 2608 && requestHeight <= 2685) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						if (requestHeight >= 2608 && requestHeight <= 2684) {
							document.getElementById("fpPresent").value = '1F';
							$('#fpPresent').css("color", "red");
						} else if (requestHeight <= 2685) {
							document.getElementById("fpPresent").value = '2F';
							$('#fpPresent').css("color", "red");
						} else {
							document.getElementById("fpPresent").value = '';
						}
					} else {
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
					}
				} else if (position == '6') {
					if (requestHeight <= 2390) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '1F';
						$('#fpPresent').css("color", "red");
						socketShow();
					} else if (requestHeight >= 3045) {
						document.getElementById("result").value = 'POSSIBLE';
						$('#result').css("color", "blue");
						document.getElementById("action").value = 'FOLLOW REQUEST !!';
						$('#action').css("color", "blue");
						document.getElementById("fpPresent").value = '2F';
						$('#fpPresent').css("color", "red");
						socketShow();
					} else if (requestHeight >= 2391 && requestHeight <= 3044) {
						//console.log('Not Possible');
						document.getElementById("result").value = 'HIT TO BEAM';
						$('#result').css("color", "red");
						document.getElementById("action").value = 'NOT FOLLOW USE H= & SEND FYI';
						$('#action').css("color", "red");
						document.getElementById("fpPresent").value = '';
						socketHide();
					} else {
						socketHide();
					}
				}
			} else {
				document.getElementById("result").value = '';
				document.getElementById("action").value = '';
				document.getElementById("fpPresent").value = '';
				$(".hideme").hide();
			}
		}
		//$('#position').keyup(compute5);
		$('#position,#requestHeight').change(compute5);
		$('#position,#requestHeight').keyup(compute5);

		function compute6() {
			if (!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {

				alert('Please Input Control Number..!')
				//return false
			} else {
				//document.getElementById("position").disabled=false;
			}
			var kanabakari = document.getElementById("kanabakari").value;
			var kan = kanabakari.substring(0, 3)
			var position = document.getElementById("position").value;
			var socketrequestHeight = document.getElementById("socketrequestHeight").value;
			//console.log(socketrequestHeight);
			if (kan == '２４０' && socketrequestHeight != '') {
				if (socketrequestHeight <= 2397) {
					document.getElementById("socketresult").value = 'POSSIBLE';
					$('#socketresult').css("color", "blue");
					document.getElementById("socketaction").value = 'FOLLOW REQUEST !!';
					$('#socketaction').css("color", "blue");
					document.getElementById("socketfpPresent").value = '1F';
					$('#socketfpPresent').css("color", "red");
					socketShow();
				} else if (socketrequestHeight >= 2848) {
					document.getElementById("socketresult").value = 'POSSIBLE';
					$('#socketresult').css("color", "blue");
					document.getElementById("socketaction").value = 'FOLLOW REQUEST !!';
					$('#socketaction').css("color", "blue");
					document.getElementById("socketfpPresent").value = '2F';
					$('#socketfpPresent').css("color", "red");
					socketShow();
				} else if (socketrequestHeight >= 2398 && socketrequestHeight <= 2847) {
					//console.log('Not Possible');
					document.getElementById("socketresult").value = 'HIT TO BEAM';
					$('#socketresult').css("color", "red");
					document.getElementById("socketaction").value = 'NOT FOLLOW USE H= & SEND FYI';
					$('#socketaction').css("color", "red");
					document.getElementById("socketfpPresent").value = '';
					socketHide();
				}
			} else if (kan == '２６０' && requestHeight != '') {
				if (socketrequestHeight <= 2390) {
					document.getElementById("socketresult").value = 'POSSIBLE';
					$('#socketresult').css("color", "blue");
					document.getElementById("socketaction").value = 'FOLLOW REQUEST !!';
					$('#socketaction').css("color", "blue");
					document.getElementById("socketfpPresent").value = '1F';
					$('#socketfpPresent').css("color", "red");
					socketShow();
				} else if (socketrequestHeight >= 3045) {
					document.getElementById("socketresult").value = 'POSSIBLE';
					$('#socketresult').css("color", "blue");
					document.getElementById("socketaction").value = 'FOLLOW REQUEST !!';
					$('#socketaction').css("color", "blue");
					document.getElementById("socketfpPresent").value = '2F';
					$('#socketfpPresent').css("color", "red");
					socketShow();
				} else if (socketrequestHeight >= 2391 && socketrequestHeight <= 3044) {
					//console.log('Not Possible');
					document.getElementById("socketresult").value = 'HIT TO BEAM';
					$('#socketresult').css("color", "red");
					document.getElementById("socketaction").value = 'NOT FOLLOW USE H= & SEND FYI';
					$('#socketaction').css("color", "red");
					document.getElementById("socketfpPresent").value = '';
					socketHide();
				}
			}
		}
		$('#socketrequestHeight').change(compute6);
		$('#socketrequestHeight').keyup(compute6);

	})

	function shio_code() {

		if (!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {

			//alert('Please Input Control Number..!')
			return false
		} else {
			document.getElementById("position").disabled = false;
		}
		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check/check_shio_code.php",
			data: 'code_number=' + $("#code_number").val(),
			type: "POST",
			success: function(data) {
				$("#email-availability-status").html(data);
				var number3 = document.getElementById("code_number").value = document.getElementById("email-availability-status").innerHTML;

				//setTimeout(check_PlanNumber(),500);				


				/*setTimeout(check_kanabakari(),500); */

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


				/* setTimeout(check_kanabakari(),500);
				setTimeout(check_dodai(),500);  */
				//setTimeout(check_prefec(),500);


				//setTimeout(check_powercon(),2000);
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
				var number4 = document.getElementById("code_number").value;
				var number6 = document.getElementById("kanabakari").value;
				var selectCat = document.getElementById("selectCat").value;
				var results = 'NO NEED TO COMPUTE';
				//alert(selectCat);
				if (selectCat == 1) {
					if (number4 != '' && number6 == '２４０＋') {
						document.getElementById("show").click();
					} else if (number4 != '' && number6 == '２４０+□') {
						document.getElementById("show").click();
					} else if (number4 != '' && number6 == '２４０+Ｔ□') {
						document.getElementById("show2").click();
					} else if (number4 != '' && number6 == '２４０+□Ｆ') {
						document.getElementById("show2").click();
					} else if (number4 != '' && number6 == '２４０＋Ｔ') {
						document.getElementById("show2").click();
					} else if (number4 != '' && number6 == '２６０+□') {
						document.getElementById("show1").click();
					} else if (number4 != '' && number6 == '２６０＋') {
						document.getElementById("show1").click();
					} else if (number4 != '' && number6 == '２４０＋') {
						document.getElementById("show1").click();
					} else if (number4 != '' && number6 == '２６５') {
						document.getElementById("show3").click();
						document.getElementById("no_need").value = results;
						document.getElementById("position").disabled = true;
					} else if (number4 != '' && number6 == '２４０') {
						document.getElementById("show").click();
					} else if (number4 == '' && number6 == '') {
						document.getElementById("hide").click();
					}
				}
				if (number4 != "") {
					document.getElementById("code_number").disabled = true;
				} else {
					document.getElementById("code_number").disabled = false;
				}

				//setTimeout(shio_code(),2000);
				$("#loaderIcon").hide();
			},
			error: function() {}
		});
		////floor//////
		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check/check_shio_floor.php",
			data: 'code_number=' + $("#code_number").val(),
			type: "POST",
			success: function(data) {
				$("#email-availability-status").html(data);
				var floor = document.getElementById("floor").value = document.getElementById("email-availability-status").innerHTML;
				var floor = document.getElementById("floor").value;

				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
			},
			error: function() {}
		});
	}

	function showTable() {
		document.getElementById('table').style.visibility = "visible";
		document.getElementById('table').style.display = "inline-table";

	}

	function showTable1() {
		document.getElementById('table1').style.visibility = "visible";
		document.getElementById('table1').style.display = "inline-table";
	}

	function showTable2() {
		document.getElementById('table2').style.visibility = "visible";
		document.getElementById('table2').style.display = "inline-table";
	}

	function showTable3() {
		document.getElementById('no_need').style.visibility = "visible";
		document.getElementById('no_need').style.display = "inline-table";
	}

	function showTable4() {
		document.getElementById('table5').style.visibility = "visible";
		document.getElementById('table5').style.display = "inline-table";
	}

	function showTable5() {
		document.getElementById('table6').style.visibility = "visible";
		document.getElementById('table6').style.display = "inline-table";
	}

	function hideTable() {
		document.getElementById('table').style.display = "none";
		document.getElementById('table1').style.display = "none";
		document.getElementById('table2').style.display = "none";
		document.getElementById('table5').style.display = "none";
		document.getElementById('table6').style.display = "none";
		document.getElementById('no_need').style.display = "none";
	}
	$(document).ready(function() {
		var index = 0;
		$('ul.sub li').click(function() {
			/*  $('ul.sub li').removeClass("active"); */
			//$(this).addClass("active"); 
			var res = $("ul.sub li.active").index() > index ? 'after' : $("ul.sub li.active").index() == index ? 'same' : 'before';
			index = $(this).index();
			var tabSelect = document.getElementById("selectCat").value = index;
			//console.log(tabSelect);
			if (tabSelect == 2) {
				hideTable();
				document.getElementById('table3').style.display = "none";
				document.getElementById('table4').style.display = "none";
				document.getElementById('table5').style.display = "none";
				document.getElementById("show4").click();
			} else if (tabSelect == 3) {
				hideTable();
				document.getElementById('table3').style.display = "none";
				document.getElementById('table4').style.display = "none";
				document.getElementById('table5').style.display = "none";
				document.getElementById("show5").click();
			} else if (tabSelect == 1) {
				hideTable();
				shio_code();
			} else if (tabSelect == 0) {
				hideTable();
				document.getElementById('table3').style.display = "visible";
				document.getElementById('table4').style.display = "visible";
				// document.getElementById('table5').style.display = "visible";
				document.getElementById('table3').style.display = "inline-table";
				document.getElementById('table4').style.display = "inline-table";
				// document.getElementById('table5').style.display = "inline-table";
			} else {
				hideTable();
			}
		})
	})
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

	div.sticky {
		position: -webkit-sticky;
		position: sticky;
		top: 0;
		background-color: rgba(0, 0, 0, .5);
		padding: 2.5%;
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
						<a class="active" href="bracket_light_kaidan_new.php">
							<!--<i class="fa fa-dashboard"></i>-->
							<span>DENKI ITEM AT OPEN AREA</span>
						</a>
						<ul class="sub">
							<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Bracket light in Window at Open Area</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light In Kaidan</a></li>
							<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Denki items in Open Area(Combine socket in Kaidan Steps and WML Presentation)</a></li>
							<!--<li><a  data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Socket(UnderConstruction)</a></li>-->

						</ul>
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
		<br>
		<section id="main-content">
			<div class="sticky">
				<form id="clearData">
					<td style="text-align:center;vertical-align:middle;">
						<p style="color:white">* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Needed Computation *</p>
						<p style="color:white" class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * </p>
						<label style="font-size:20px;color:#ffff33;font-style:italic;" class="space">Customer Code: </label>
						<input type="text" name="code_number" id="code_number" onkeypress="setTimeout(shio_code, 10)" onkeyup="setTimeout(shio_code, 10)" onblur="setTimeout(shio_code, 10)" onmouseout="setTimeout(shio_code, 10)" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" maxlength="12" />
						<label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> Plan Shio #: </label>
						<input type="text" name="plan_number" id="plan_number" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />
						<label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> Kanabakari: </label>
						<input type="text" name="kanabakari" id="kanabakari" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />
						<!--<label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> House Type: </label>		
									<input type="text" name="houseTypes" id="houseTypes"  style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)"  readonly />-->
						<label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> Storey: </label>
						<input type="text" name="floor" id="floor" value="" style="font-size:20px;width:50px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />

						<span class="hidden" id="email-availability-status"></span>
						<span class="space"><input class="bg-danger" type="button" onclick="myFunction0()" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
					</td>
				</form>
			</div>
			<section class="wrapper">
				<!--<center><label class="head">WALL MOUNTED </label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">JB-DA Kabe Fukasu</a></li> -->
				<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Bundeban Kabe Fukasu</a></li> -->
				<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			
		</ul>-->
				<input type="text" name="selectCat" id="selectCat" class="selectCat hide" value="" style="font-size:20px;width:50px;text-align:center;color:red" readonly />
				<div class="tab-content">
					<!--<form id="clearData">
			<td style="text-align:center;vertical-align:middle;background-color:">		
				<p>* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Needed Computation *</p>
				<p class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * 			</p>	
				<label style="font-size:20px;color:black" class="space">Customer Code: </label>
					<input type="text" name="code_number" id="code_number" onkeypress="setTimeout(shio_code, 10)" onkeyup="setTimeout(shio_code, 10)" onblur="setTimeout(shio_code, 10)" onmouseout="setTimeout(shio_code, 10)"    style="font-size:20px;width:170px;text-align:center;color:red;" maxlength="12"   />
				<label style="font-size:20px;color:black" class="space"> Plan Shio #: </label>							
					<input type="text" name="plan_number" id="plan_number"   style="font-size:20px;width:170px;text-align:center;color:red"  readonly />
				<label style="font-size:20px;color:black" class="space"> Kanabakari: </label>		
					<input type="text" name="kanabakari" id="kanabakari"  style="font-size:20px;width:170px;text-align:center;color:red"  readonly />
				<label style="font-size:20px;color:black" class="space"> Storey: </label>			
				<input type="text" name="floor" id="floor" value=""  style="font-size:20px;width:50px;text-align:center;color:red"  readonly />	
								
				<span class="hidden" id="email-availability-status"></span>		
				<span class="space"><input class="bg-danger" type="button" onclick="myFunction0()" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
			</td>	
			<br>
			</form>-->
					<div id="tab1" class="tab-pane fade ">
						<form id="myForm">

							<body onload="javascript:hideTable()">
								<input type='button' class="hide" id="show" name="show" onClick='javascript:showTable();' value='show'>
								<input type='button' class="hide" id="show1" name="show1" onClick='javascript:showTable1();' value='show1'>
								<input type='button' class="hide" id="show2" name="show2" onClick='javascript:showTable2();' value='show2'>
								<input type='button' class="hide" id="show3" name="show3" onClick='javascript:showTable3();' value='show3'>
								<input type='button' class="hide" id="show4" name="show4" onClick='javascript:showTable4();' value='show4'>
								<input type='button' class="hide" id="show5" name="show5" onClick='javascript:showTable5();' value='show5'>
								<input type='button' class="hide" id="hide" name="hide" onClick='javascript:hideTable();' value='hide'>



								<table id="table" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
									<thead>
										<div data-role="header">
											<th colspan="7">
												<h1> Computation For Bracket Light In Kaidan</h1>
											</th>
										</div>
									</thead>
									<tbody>
										<tr>
											<td colspan="7" style="border-style:solid"><br>
												<p style="color:blue;font-size:20px;" class="space">Formula: Number of steps * choose type of stairs + given height </p>
											</td>
										</tr>
										<tr>

											<td style="text-align:center;vertical-align:middle;">
												<label style="font-size:18px;color:black">Choose Types Of Stairs:</label>
												<select style="font-size:20px;text-align:center;width:80px" id="cts" name="cts" required="required">
													<option value=""></option>
													<option value="198.2">14</option>
													<option value="185.4">15</option>
												</select>
											</td>
											<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x
											</td>
											<td style="text-align:center;vertical-align:middle;">
												<label style="font-size:18px;color:black">Number Of Steps:</label>
												<input type="number" name="ns" id="ns" value="" style="font-size:20px;width:100px;text-align:center" />
											</td>
											<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
											</td>
											<td style="text-align:center;vertical-align:middle;">
												<label style="font-size:18px;color:black">Given Height:</label>
												<input type="number" name="gh" id="gh" value="" style="font-size:20px;width:100px;text-align:center" />
											</td>
											<!--<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>-->

										</tr>
										<tr>
											<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
												<label style="font-size:18px;color:black">1F:</label>
												<input type="" name="f1" id="f1" value="" style="font-size:20px;width:150px;text-align:center" disabled />
												<label style="font-size:18px;color:black">2F:</label>
												<input type="" name="f2" id="f2" value="" style="font-size:20px;width:150px;text-align:center" disabled />
											</td>
										</tr>
										<tr>
											<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
												<label style="font-size:18px;color:black" class="space"> Item Installation: </label>

												<input type="text" id="demo" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>

											</td>
										</tr>
										<tr>
											<td class="form-inline" colspan="7" style="vertical-align:middle;">

												<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
											</td>
										</tr>
									</tbody>
								</table>
						</form>
						<form id="myForm1">
							<table id="table1" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
								<thead>
									<div data-role="header">
										<th colspan="7">
											<h1> Computation For Bracket Light In Kaidan</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="7" style="border-style:solid"><br>
											<p style="color:blue;font-size:20px;" class="space">Formula: Number of steps * choose type of stairs + given height</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Choose Types Of Stairs:</label>
											<select style="font-size:20px;text-align:center;width:80px" id="ctsa" name="ctsa" required="required">
												<option value=""></option>
												<option value="198.2">14</option>
												<option value="185.4">15</option>
												<option value="185.8">16</option>
											</select>
										</td>
										<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Number Of Steps:</label>
											<input type="number" name="nsa" id="nsa" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Given Height:</label>
											<input type="number" name="gha" id="gha" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<!--<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>-->
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">1F:</label>
											<input type="" name="f1a" id="f1a" value="" style="font-size:20px;width:150px;text-align:center" disabled />
											<label style="font-size:18px;color:black">2F:</label>
											<input type="" name="f2a" id="f2a" value="" style="font-size:20px;width:150px;text-align:center" disabled />
										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black" class="space"> Item Installation: </label>
											<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>

										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="vertical-align:middle;">

											<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
										</td>
									</tr>
								</tbody>
							</table>
						</form>
						<form id="myForm2">
							<table id="table2" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
								<thead>
									<div data-role="header">
										<th colspan="7">
											<h1>Computation For Bracket Light In Kaidan</h1>
										</th>
									</div>
								</thead>
								<tbody>
									<tr>
										<td colspan="7" style="border-style:solid"><br>
											<p style="color:blue;font-size:20px;" class="space">Formula: Number of steps * choose type of stairs + given height</p>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Choose Types Of Stairs:</label>
											<select style="font-size:20px;text-align:center;width:80px" id="ctsb" name="ctsb" required="required">
												<option value=""></option>
												<option value="202">14</option>
												<option value="189">15</option>

											</select>
										</td>
										<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Number Of Steps:</label>
											<input type="number" name="nsb" id="nsb" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
										</td>
										<td style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">Given Height:</label>
											<input type="number" name="ghb" id="ghb" value="" style="font-size:20px;width:100px;text-align:center" />
										</td>
										<!--<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>-->
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black">1F:</label>
											<input type="" name="f1b" id="f1b" value="" style="font-size:20px;width:150px;text-align:center" disabled />
											<label style="font-size:18px;color:black">2F:</label>
											<input type="" name="f2b" id="f2b" value="" style="font-size:20px;width:150px;text-align:center" disabled />
										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
											<label style="font-size:18px;color:black" class="space"> Item Installation: </label>
											<input type="text" id="demo2" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>

										</td>
									</tr>
									<tr>
										<td class="form-inline" colspan="7" style="vertical-align:middle;">

											<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
										</td>
									</tr>
								</tbody>
							</table>

						</form>
						<center><input type="text" id="no_need" name="no_need" onClick='javascript:showTable3();' style="font-size:50px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red;" disabled></center>
</body>
</div>
<!--  TAB2  -->
<div id="tab2" class="tab-pane fade in active">
	<form id="myForm3">
		<table id="table3" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
			<thead>
				<div data-role="header">
					<th colspan="7">
						<h1>WML installed <span style="color:red;">BOTTOM</span> of window</h1>
					</th>
				</div>
			</thead>
			<tbody>
				<?php
				include_once 'include/dbcon.php';
				$query = "SELECT * FROM computation limit 11";
				$result = $db_connect->query($query);
				?>
				<tr>
					<td style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Open Area Height:</label>
						<select style="font-size:20px;text-align:center;width:350px" id="openArea" name="openArea" required="required">
							<option value=""></option>
							<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['open'] ?>"><?php echo $row['kanabakari'] ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
					</td>
					<td style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Requested Height:</label>
						<input type="text" name="reqHeight" id="reqHeight" value="" style="font-size:20px;width:100px;text-align:center" />
					</td>
					<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> =
					</td>
					<td style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Allowance:</label>
						<input type="text" name="allowance" id="allowance" value="" style="font-size:20px;width:100px;color:black;;text-align:center;background-color:gray;" readonly />
					</td>
					<!--<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>-->

				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Elevated Height:</label>
						<input type="text" name="elevHeight" id="elevHeight" value="" style="font-size:20px;width:150px;text-align:center" /><span style="color:red"> =</span>
						<label style="font-size:18px;color:black">Space From Window to WML height:</label>
						<input type="text" name="windowToWML" id="windowToWML" value="" style="font-size:20px;width:150px;color:black;text-align:center;background-color:gray;" readonly />
					</td>
				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Half Size Of Light:</label>
						<input type="text" name="halfSizeLight" id="halfSizeLight" value="" style="font-size:20px;width:150px;text-align:center" /><span style="color:red"> =</span>
						<label style="font-size:18px;color:black">Required Allowance:</label>
						<input type="text" name="reqAllowance" id="reqAllowance" class="reqAllowance" value="" style="font-size:20px;width:150px;color:black;text-align:center;background-color:gray;" readonly />
						<input type="text" name="fixHeight" id="fixHeight" class="hide" value="38" style="font-size:20px;width:150px;color:black;text-align:center" readonly />
					</td>
				</tr>
				<?php
				function window()
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
				foreach (window() as $value) {
					$option .= '<option value="' . $value["window1"] . '">' . $value["window1"] . '</option>';
				}
				?>
				<tr>
					<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
						<input align="center" type="text" id="demo3" name="demo3" class="" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;text-align:center;" disabled>
					</td>
				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="vertical-align:middle;">
						<span style="color:red;font-weight:bold;font-size:30px" class="space">BOTTOM</span>
						<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<form id="myForm4">
		<table id="table4" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
			<thead>
				<div data-role="header">
					<th colspan="7">
						<h1>WML installed <span style="color:red;">TOP</span> of window</h1>
					</th>
				</div>
			</thead>
			<tbody>
				<?php
				include_once 'include/dbcon.php';
				$query = "SELECT * FROM computation limit 11";
				$result = $db_connect->query($query);
				?>
				<tr>
					<td style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Open Area Height:</label>
						<select style="font-size:20px;text-align:center;width:350px" id="openArea2" name="openArea2" required="required" onchange="setTimeout(compute4,50)" onblur="setTimeout(compute4,50)">
							<option value=""></option>
							<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['open'] ?>"><?php echo $row['kanabakari'] ?></option>
							<?php } ?>
						</select>
					</td>
					<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
					</td>
					<td style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Requested Height:</label>
						<input type="text" name="reqHeight2" id="reqHeight2" value="" style="font-size:20px;width:100px;text-align:center" onkeyup="setTimeout(compute4,50)" />
					</td>
					<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> =
					</td>
					<td style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Allowance:</label>
						<input type="text" name="allowance2" id="allowance2" value="" style="font-size:20px;width:100px;color:black;text-align:center;background-color:gray;" readonly />
					</td>
					<!--<td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>-->

				</tr>
				<?php
				function window2()
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
				foreach (window2() as $value) {
					$option .= '<option value="' . $value["window1"] . '">' . $value["window1"] . '</option>';
				}
				?>
				<tr>
				<tr>
					<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Window Serial:</label>
						<select class="select2_single" style="font-size:25px;text-align:center;height:40px;width:300px;color:blue;margin:auto;" id="window" name="window" class="window" onchange="setTimeout(compute4,50)" onblur="setTimeout(compute4,50)" />
						<option value=""></option>
						<option><?php echo $option; ?></option>
						</select>
						<textarea id="windowValue" name="windowValue" class="windowValue hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
						<input type="text" name="windowHeight2" id="windowHeight2" value="" class="windowHeight2 hide" style="font-size:20px;width:100px;text-align:center" />
						<span style="color:red;font-size:20px;"> + </span>
						<label style="font-size:18px;color:black">Elevated Height:</label>
						<input type="text" name="elevHeight2" id="elevHeight2" value="" style="font-size:20px;width:150px;text-align:center" onkeyup="setTimeout(compute4,50)" disabled /><span style="color:red"> =</span>
						<!--<label style="font-size:18px;color:black">Sash Height:</label>	-->
						<input type="text" name="windowToWML2" id="windowToWML2" value="" style="font-size:20px;width:150px;color:black;text-align:center;background-color:gray;" readonly />
					</td>
				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
						<label style="font-size:18px;color:black">Half Size Of Light:</label>
						<input type="text" name="halfSizeLight2" id="halfSizeLight2" value="" style="font-size:20px;width:150px;text-align:center" onkeyup="setTimeout(compute4,50)" /><span style="color:red"> =</span>
						<label style="font-size:18px;color:black">Required Allowance:</label>
						<input type="text" name="reqAllowance2" id="reqAllowance2" class="reqAllowance" value="" style="font-size:20px;width:150px;color:black;text-align:center;background-color:gray;" readonly />
						<input type="text" name="fixHeight2" id="fixHeight2" class="hide" value="38" style="font-size:20px;width:150px;text-align:center" readonly />
					</td>
				</tr>

				<tr>
					<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
						<input type="text" name="SpacefromWindowWML" id="SpacefromWindowWML" style="text-align:center;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
						<input align="center" type="text" id="demo4" name="demo4" class="" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;text-align:center;" disabled>
					</td>
				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="vertical-align:middle;">
						<span style="color:red;font-weight:bold;font-size:30px" class="space">TOP</span>
						<input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
					</td>
				</tr>
			</tbody>
		</table>
	</form>

</div>
<form id="myForm6">
	<div id="tab4" class="tab-pane fade">
		<table id="table6" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
			<thead>
				<div data-role="header">
					<th colspan="7">
						<h1>Socket in Kaidan Steps</h1>
					</th>
				</div>
			</thead>
			<tbody>

				<tr>

					<td style="width:40%">
						<center>
							<div class="col-sm-12">
								<br>
								<label style="font-size:20px;color:black">Requested Height:</label>
								<span style="color:red">H=FL+</span><input type="text" name="socketrequestHeight" id="socketrequestHeight" value="" style="font-size:25px;width:200px;text-align:center;color:blue;" /><br><br>
							</div>
						</center>
					</td>
					<td>
						<div class="col-sm-4">
							<label style="font-size:20px;color:black;">Result: </label><br><br>
							<label style="font-size:20px;color:black">Floor Plan Presentation: </label>
						</div>

						<input type="text" name="socketresult" id="socketresult" value="" style="font-size:25px;width:200px;text-align:center;font-weight:bold;" readonly /><br><br>

						<input type="text" name="socketfpPresent" id="socketfpPresent" value="" style="font-size:25px;width:200px;text-align:center;" readonly />
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height:10px;">
						<input align="center" type="text" id="socketaction" name="socketaction" class="" value="" style="color:red;width:100%;font-size:50px;font-weight:bold;border:none;text-align:center;" readonly>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<center>
							<span class="hideme2" style="text-align:center"><img src="images/socket.PNG" id="socket2" width="60%" height="50" style="visibility:hidden;" /></span>
						</center>
					</td>
				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="vertical-align:middle;">
						<input class="bg-danger" type="button" onclick="myFunction6()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</form>
<form id="myForm5">
	<div id="tab3" class="tab-pane fade">
		<table id="table5" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
			<thead>
				<div data-role="header">
					<th colspan="7">
						<h1>Installed at Kaidan / Under Koubai / Hukinuke</h1>
					</th>
				</div>
			</thead>
			<tbody>

				<tr>

					<td style="width:60%">
						<div class="col-sm-4">
							<label style="font-size:20px;color:black;">Installation Position:</label><br><br>
							<label style="font-size:20px;color:black">Requested Height:</label><br><br>
						</div>
						<div class="col-sm-4">
							<select style="font-size:19px;text-align:center;width:400px;color:blue;" id="position" name="position" required="required">
								<option value="0"></option>
								<option value="1">Installed in Wall(Inside)</option>
								<option value="2">Installed in Wall(Facing outside)</option>
								<option value="3">Installed in Door and S-Tarekabe</option>
								<option value="4">Installed in Sash/Window(Facing outside)</option>
								<option value="5">Installed in Handrail</option>
								<option value="6">Installed in Socket In Kaidan Steps</option>
							</select><br><br>

							<input type="text" name="requestHeight" id="requestHeight" value="" style="font-size:25px;width:200px;text-align:center;color:blue;" /><br><br>
							<!--<select  style="font-size:19px;text-align:center;width:200px;color:blue;" id="location"  name="location" class="location" required="required" >
										<option value="0"></option>
										<option value="1">Top</option>
										<option value="2">Bottom</option>																	
																										
									</select>-->
						</div>

					</td>
					<td>
						<div class="col-sm-4">
							<label style="font-size:20px;color:black;">Result: </label><br><br>
							<label style="font-size:20px;color:black">Floor Plan Presentation: </label>
						</div>

						<input type="text" name="result" id="result" value="" style="font-size:25px;width:200px;text-align:center;font-weight:bold;" readonly /><br><br>

						<input type="text" name="fpPresent" id="fpPresent" value="" style="font-size:25px;width:200px;text-align:center;" readonly />
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height:10px;">
						<input align="center" type="text" id="action" name="action" class="" value="" style="color:red;width:100%;font-size:50px;font-weight:bold;border:none;text-align:center;" readonly>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<center>
							<span class="hideme" style="text-align:center"><img src="images/socket.PNG" id="socket" width="60%" height="50" style="visibility:hidden;" /></span>
						</center>
					</td>
				</tr>
				<tr>
					<td class="form-inline" colspan="7" style="vertical-align:middle;">
						<input class="bg-danger" type="button" onclick="myFunction5()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</form>


</div>
</div>
</section>
<! --/wrapper -->
	</section><!-- /MAIN CONTENT -->

	<!--main content end-->
	<!--footer start-->

	<!--footer end-->
	</section>
	<footer class="site-footer">
		<div class="text-center">
			Poweredby Syscom
			<a href="#" class="go-top">
				<i class="fa fa-angle-double-up fa-1x"></i>
			</a>
		</div>
	</footer>
	<script>
		$(document).ready(function() {
			$(".select2_single").select2({
				placeholder: "Please select serial..",
				allowClear: true
			});
		});
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
					document.getElementById("windowHeight2").value = document.getElementById("windowValue").value;

				}).fail(function(data) {
					alert('Failed')
				})
			})
		});

		function myFunction0() {
			document.getElementById("clearData").reset();
			document.getElementById("myForm").reset();
			document.getElementById("myForm1").reset();
			document.getElementById("myForm2").reset();
			document.getElementById("myForm3").reset();
			document.getElementById("myForm4").reset();
			document.getElementById("myForm5").reset();
			document.getElementById("myForm6").reset();
			//document.getElementById("hide").click();
			document.getElementById("code_number").disabled = false;
			$(".hideme").hide();
		}

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
			document.getElementById("demo3").style.background = "none";
		}

		function myFunction4() {
			document.getElementById("myForm4").reset();
			document.getElementById("demo4").style.background = "none";
			$("#elevHeight2").prop("disabled", true);
		}

		function myFunction5() {
			document.getElementById("myForm5").reset();
			$(".hideme").hide();
		}

		function myFunction6() {
			document.getElementById("myForm6").reset();
		}
		/* function checkClicked(tab) {
			console.log(tab);
			if(tab == 3){
				document.getElementById("show4").click();
				document.getElementById('table').style.display = "none";
				document.getElementById('table1').style.display = "none";
				document.getElementById('table2').style.display = "none";
			} else {
				document.getElementById('table5').style.display = "none";
			}
			
		}  */
	</script>
	<!-- js placed at the end of the document so the pages load faster 
	<script src="assets/js/jjquery-1.8.3.min.js"></script>
	-->
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


	<!--common script for all pages-->
	<script src="assets/js/common-scripts.js"></script>

	<!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>

	<!--script for this page-->

	<script>
		//custom select box

		/*  $(function(){
          $('select.styled').customSelect();
      });
 */
	</script>

	</body>

</html>
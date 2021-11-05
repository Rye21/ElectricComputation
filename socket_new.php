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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 6";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 6";
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

    <title>AC SOCKET</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="icon" href="http://hrdapps33/DenkiComputation/assets/img/images.png" type="image/x-icon" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<script>
    function compute() {


        var SCH = parseFloat($('input[name=SCH]').val() || 0);
        var DACH = parseFloat($('input[name=DACH]').val() || 0);
        var GRID = parseFloat($('input[name=GRID]').val() || 0);
        var PITCH = parseFloat($('input[name=PITCH]').val() || 0);
        var CONSTANT = parseFloat($('input[name=CONSTANT]').val() || 0);
        var ash1 = parseFloat($('input[name=ash1]').val() || 0);
        var tile1 = parseFloat($('input[name=tile1]').val() || 1);

        var HEIGHT1 = (SCH - (GRID * PITCH * CONSTANT)) - DACH;
        var HEIGHT2 = (ash1 - HEIGHT1) / tile1;
        var f = Math.ceil(HEIGHT2);
        var g = f * tile1 - ash1;
        var h = -g;
        var i = k * tile1 - ash1;
        var j = document.getElementById('point').value;
        var k = Math.floor(HEIGHT2);
        var m = k * tile1 - ash1;
        var l = -m;

        $('#HEIGHT1').val(HEIGHT1);
        $('#point').val(HEIGHT2);

        if (j < 1) {
            $('#HEIGHT2').val(l);
        } else {
            $('#HEIGHT2').val(h);
        }
    }



    //////////////////////////////////SAGARU TENJOU////////////////////////////////////////////		
    //$(document).ready(function() { 04022018
    function compute2() {


        var SCH1 = parseFloat($('input[name=SCH1]').val() || 0);

        var GRID1 = parseFloat($('input[name=GRID1]').val() || 0);
        var PITCH1 = parseFloat($('input[name=PITCH1]').val() || 0);
        var CONSTANT1 = parseFloat($('input[name=CONSTANT1]').val() || 0);

        var ash3 = parseFloat($('input[name=ash3]').val() || 0);

        var tile2 = parseFloat($('input[name=tile2]').val() || 1);

        var HEIGHT13 = SCH1 - (GRID1 * PITCH1 * CONSTANT1);
        var HEIGHT14 = (ash3 - HEIGHT13) / tile2;
        var v = Math.ceil(HEIGHT14);
        var w = v * tile2 - ash3;
        var s = -w;

        $('#HEIGHT3').val(HEIGHT13);
        $('#HEIGHT4').val(s);



    }


    ///////////////////////////////////////////ch indication//////////////////////////////////////////////////////////// 		 



    function compute4() {


        var STDSOCKET1 = parseFloat($('input[name=STDSOCKET1]').val() || 0);

        var STDCEILING1 = parseFloat($('input[name=STDCEILING1]').val() || 0);
        var GCH1 = parseFloat($('input[name=GCH1]').val() || 0);
        var STDHEIGHT1 = parseFloat($('input[name=STDHEIGHT1]').val() || 0);
        var tile3 = parseFloat($('input[name=tile3]').val() || 1);


        var HEIGHT5 = STDSOCKET1 - (STDCEILING1 - GCH1);
        var m = (STDHEIGHT1 - HEIGHT5) / tile3;
        var n = Math.ceil(m);
        var o = n * tile3 - STDHEIGHT1;
        var p = -o;


        $('#HEIGHT5').val(HEIGHT5);
        $('#HEIGHT6').val(p);



    }



    //////////////////////////////////WITH REQUESTED////////////////////////////////////////////	
    $(document).ready(function() {
        function compute6() {

            var AC = parseFloat($('input[name=AC]').val()) || 0;
            var RAC = parseFloat($('input[name=RAC]').val()) || 0;
            var tile4 = parseFloat($('input[name=tile4]').val()) || 1;


            var HEIGHT7 = (AC - RAC) / tile4;
            var z = Math.ceil(HEIGHT7);
            var y = z * tile4 - AC;
            var x = -y;

            $('#HEIGHT7').val(x);



        }

        $('#RAC,#AC,#tile4,#SRKF3,#tdtc3').change(compute6);
    });
    $(document).ready(function() {
        function compute7() {

            var AC1 = parseFloat($('input[name=AC1]').val()) || 0;
            var RAC1 = parseFloat($('input[name=RAC1]').val()) || 0;
            var tile5 = parseFloat($('input[name=tile5]').val()) || 1;


            /* var HEIGHT8 = Math.ceil(AC1 / tile5) ;
            
            var s = (HEIGHT8 * 0.1) * 5;		
            //var t = Math.ceil(s * 10) / 10;
            var r = s * tile5;
            var v = r + AC1; */
            var HEIGHT8 = (RAC1 - AC1) / tile5;
            var r = Math.floor(HEIGHT8);
            var s = tile5 * r;
            var v = AC1 + s;

            $('#HEIGHT8').val(v);



        }

        $('#RAC1,#AC1,#tile5,#SRKF4,#tdtc4').change(compute7);
    });

    function computeSleeve() {
        if (!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {

            alert('Please Input Control Number..!')
            //return false
        } else {
            //document.getElementById("position").disabled=false;
        }
        var koubaiTenjou = parseFloat(document.getElementById("HEIGHT2").value) || 0;
        var TenjouSagaru = parseFloat(document.getElementById("HEIGHT4").value) || 0;
        var withCeiling = parseFloat(document.getElementById("HEIGHT6").value) || 0;
        var BSH = parseFloat(document.getElementById("HEIGHT7").value) || 0;
        var ASH = parseFloat(document.getElementById("HEIGHT8").value) || 0;
        var htype = document.getElementById("houseTypes").value;
        var kanabakari = document.getElementById("kanabakari").value;
        var kan = kanabakari.substring(0, 3);
        var acFloor = document.getElementById("acFloor").value;
        if (koubaiTenjou) {
            height = koubaiTenjou;
        }
        if (TenjouSagaru) {
            height = TenjouSagaru;
        }
        if (withCeiling) {
            height = withCeiling;
        }
        if (BSH) {
            height = BSH;
        }
        if (ASH) {
            height = ASH;
        }
        if (kan == '２４０') {
            if (htype == 'WAKU' && acFloor == '1F') {
                offset = height + 170 + 634;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'WAKU' && acFloor == '2F') {
                offset = height + 180 + 2775 + 634;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'WAKU' && acFloor == '3F') {
                offset = height + 180 + 2775 + 2775 + 634;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'JIKU' && acFloor == '1F') {
                offset = height + 170 + 614;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'JIKU' && acFloor == '2F') {
                offset = height + 170 + 614 + 2842;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'JIKU' && acFloor == '3F') {
                offset = height + 170 + 614 + 2842 + 2841;
                document.getElementById("acSleeve").value = offset;
            } else {
                document.getElementById("acSleeve").value = '';
            }
        } else if (kan == '２６０') {
            if (htype == 'WAKU' && acFloor == '2F') {
                offset = height + 180 + 2972 + 634;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'WAKU' && acFloor == '3F') {
                document.getElementById("acSleeve").value = 'NOT APPLICABLE';
            } else {
                document.getElementById("acSleeve").value = '';
            }
        } else if (kan == '２６５') {
            if (htype == 'JIKU' && acFloor == '1F') {
                offset = height + 170 + 614;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'JIKU' && acFloor == '2F') {
                offset = height + 170 + 614 + 3161;
                document.getElementById("acSleeve").value = offset;
            } else if (htype == 'JIKU' && acFloor == '3F') {
                document.getElementById("acSleeve").value = 'NOT APPLICABLE';
            } else {
                document.getElementById("acSleeve").value = '';
            }
        } else {
            document.getElementById("acSleeve").value = '';
        }
        /*if(htype == 'WAKU' && acFloor == '1F'){
        	offset = height + 170 + 634 ;
        	document.getElementById("acSleeve").value = offset ;
        } else if(htype == 'WAKU' && acFloor == '2F'){
        	offset = height + 180 + 2775 + 634 ;
        	document.getElementById("acSleeve").value = offset ;
        }  else if(htype == 'JIKU' && acFloor == '1F'){
        	offset = height + 170 + 614 ;
        	document.getElementById("acSleeve").value = offset ;
        } else if(htype == 'JIKU' && acFloor == '2F'){
        	offset = height + 170 + 614 + 3161 ;
        	document.getElementById("acSleeve").value = offset ;
        } else {
        	document.getElementById("acSleeve").value = ''; 
        } */
        //console.log($('#HEIGHT8').val());
    }

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
</script>
<style>
    .space {
        white-space: pre;
    }

    h1 {
        background: #68dff0;
        font: bold normal 215% 'arial black', Times, serif;
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

    input,
    select {
        color: blue;
        font-weight: bold;
    }

    #overlay {
        background: rgba(0, 0, 0, .5);
        position: fixed;
        width: 100%;
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
                        <a href="bracket_light_kaidan_new.php">
                            <!--<i class="fa fa-dashboard"></i>-->
                            <span>DENKI ITEM AT OPEN AREA</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>
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
                        <a class="active" href="socket_new.php">
                            <!--<i class="fa fa-dashboard"></i>-->
                            <span>AC SOCKET(KONSENTO)</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">AC Machine Installed In Koubai Tenjou Under Fukisage</a></li>
                            <li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">AC Machine Located At Tenjou Sagaru w/o Height Indication Under Fukisage</a></li>
                            <li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">AC Machine Located At Tenjou Sagaru w/ CH Indication And Room w/ Given Ceiling Height</a></li>
                            <li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">With Requested AC Socket Height(AC ス And AC Ordinary)</a></li>
                        </ul>
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




        <!--<section id="main-content">
	  
			<section class="wrapper">
					<div id='overlay'>
						<form id="clearData">
							<td style="text-align:center;vertical-align:middle;">		
								<p style="color:white">* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Needed Computation *</p>
								<p style="color:white" class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * 			</p>	
								<label style="font-size:20px;color:#ddffcc;font-style:italic;" class="space">Customer Code: </label>
									<input type="text" name="code_number" id="code_number" onkeypress="setTimeout(shio_code, 10)" onkeyup="setTimeout(shio_code, 10)" onblur="setTimeout(shio_code, 10)" onmouseout="setTimeout(shio_code, 10)"    style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" maxlength="12"   />
								<label style="font-size:20px;color:#ddffcc;font-style:italic;" class="space"> Plan Shio #: </label>							
									<input type="text" name="plan_number" id="plan_number"   style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)"  readonly />
								<label style="font-size:20px;color:#ddffcc;font-style:italic;" class="space"> Kanabakari: </label>		
									<input type="text" name="kanabakari" id="kanabakari"  style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)"  readonly />
								<label style="font-size:20px;color:#ddffcc;font-style:italic;" class="space"> House Type: </label>		
									<input type="text" name="houseTypes" id="houseTypes"  style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)"  readonly />
								<label style="font-size:20px;color:#ddffcc;font-style:italic;" class="space"> Storey: </label>			
								<input type="text" name="floor" id="floor" value=""  style="font-size:20px;width:50px;text-align:center;color:red;background: rgba(0,0,0,.5)"  readonly />	
												
								<span class="hidden" id="email-availability-status"></span>		
								<span class="space"><input class="bg-danger" type="button" onclick="myFunction0()" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
							</td>
							<br>
							
						</form>
					</div>	
			  </section>
	   </section>-->

        <br>
        <section id="main-content">
            <div class="sticky">
                <form id="clearData">
                    <td style="text-align:center;vertical-align:middle;">
                        <!--<p style="color:white">* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Needed Computation *</p>-->
                        <p style="color:white" class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * </p>
                        <label style="font-size:20px;color:#ffff33;font-style:italic;" class="space">Customer Code: </label>
                        <input type="text" name="code_number" id="code_number" onkeypress="setTimeout(shio_code, 10)" onkeyup="setTimeout(shio_code, 10)" onblur="setTimeout(shio_code, 10)" onmouseout="setTimeout(shio_code, 10)" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" maxlength="12" />
                        <label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> Plan Shio #: </label>
                        <input type="text" name="plan_number" id="plan_number" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />
                        <label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> Kanabakari: </label>
                        <input type="text" name="kanabakari" id="kanabakari" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />
                        <label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> House Type: </label>
                        <input type="text" name="houseTypes" id="houseTypes" style="font-size:20px;width:170px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />
                        <label style="font-size:20px;color:#ffff33;font-style:italic;" class="space"> Storey: </label>
                        <input type="text" name="floor" id="floor" value="" style="font-size:20px;width:50px;text-align:center;color:red;background: rgba(0,0,0,.5)" readonly />

                        <span class="hidden" id="email-availability-status"></span>
                        <span class="space"><input class="bg-danger" type="button" onclick="myFunction0()" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
                    </td>
                </form>
            </div>
            <section class="wrapper">
                <!--<center><label class="head">AC SOCKET  HEIGHT COMPUTATION</label></center>
				<ul class="nav nav-tabs" style="font-size:20px">
								
					<!--<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Denki Rimokon KI/Interface Unit Located in Lowered Ceiling</a></li>
					<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
					<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			
				</ul>-->


                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <form id="myForm">

                            <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                <thead>
                                    <div data-role="header">
                                        <th colspan="8">
                                            <h1>AC Machine Installed In Koubai Tenjou Under Fukisage</h1>
                                        </th>
                                    </div>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="9" style="border-style:solid;">
                                            <center>
                                                <p style="color:blue;font-size:20px;text-align:center" class="space">Formula: STD Ceiling Height - No.of grids x pitch x 910 - STD. D.A From Ceiling </p>
                                            </center>
                                        </td>
                                    </tr>

                                    <?php
                                    function room()
                                    {
                                        try {
                                            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
                                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $pdo->query("SET NAMES utf8");
                                            $stmt = $pdo->prepare("SELECT room FROM computation limit 86");
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
                                        $option .= '<option value="' . $value["room"] . '">' . $value["room"] . '</option>';
                                    }
                                    ?>

                                    <tr>
                                        <td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
                                            <select style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF" name="SRKF" onchange="setTimeout(compute, 100)" onclick="setTimeout(compute, 100)" />
                                            <option value=""></option>
                                            <option><?php echo $option; ?></option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">STD Ceiling Height:</label>
                                            <textarea id="std1" name="std1" class="hide std1" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                            <input type="text" class="SCH" name="SCH" id="SCH" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                        </td>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">#grids:</label><br>
                                            <!--<textarea id="GRIDS" name="GRIDS" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:150px"></textarea>-->
                                            <input type="number" name="GRID" id="GRID" value="" style="font-size:20px;width:150px;text-align:center" onchange="compute()" onkeyup="compute()" />
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x
                                        </td>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">pitch:</label>
                                            <!--<textarea id="PITCH1" name="PITCH1" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px"></textarea>-->

                                            <br><input type="number" name="PITCH" id="PITCH" value="" style="font-size:20px;width:150px;text-align:center" onchange="compute()" onkeyup="compute()" />
                                            <input type="hidden" name="CONSTANT" id="CONSTANT" value="910" style="font-size:20px;width:150px;text-align:center" />
                                        </td>
                                        <td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center;"> x 910
                                            <textarea id="CON" name="CON" class="hide" value="910"></textarea>
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                        </td>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">STD D.A from Ceiling Height:</label>
                                            <textarea id="DA" name="DA" class="hide DA" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px"></textarea>
                                            <input type="" class="DACH" name="DACH" id="DACH" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">Height:</label>
                                            <input type="number" name="HEIGHT1" id="HEIGHT1" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Slanted Ceiling Height</span>
                                            <input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <form id="myForm1">
                            <center>
                                <table class="table table-condensed" border="2" style="background-color:aliceblue;width:60%;border-style:solid">
                                    <tr>
                                        <thead>
                                            <div data-role="header">
                                                <td colspan="3" style="border-style:solid;background-color:#68dff0;text-align:center"><label style="color:maroon;font-size:18px;" class="space">Centering Of Tiles</label></td>
                                            </div>
                                        </thead>
                                    </tr>
                                    <tbody>
                                        <?php
                                        include_once 'include/dbcon.php';
                                        $query = "SELECT * FROM computation limit 5";
                                        $result = $db_connect->query($query);
                                        ?>
                                        <tr>
                                            <td class="form-inline" colspan="3" style="text-align:center;vertical-align:middle;"><br>
                                                <label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
                                                <select style="font-size:20px;text-align:center;width:100px" id="tdtc" name="tdtc" required="required" onchange="compute()" onclick="compute()" />
                                                <option value=""></option>

                                                <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                    <option value="<?php echo $row['td_tc'] ?>"><?php echo $row['tile'] ?></option>
                                                <?php } ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="1" style="text-align:center;vertical-align:middle;">
                                                <label style="font-size:18px;color:black">STD AC Socket Height:</label>
                                                <textarea id="ash" name="ash" class="hide ash" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px" disabled></textarea>
                                                <input type="text" name="ash1" id="ash1" style="font-size:20px;width:150px;text-align:center" disabled />
                                            </td>
                                            <td colspan="1" style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
                                            </td>
                                            <td colspan="1" style="text-align:center;vertical-align:middle;">
                                                <label style="font-size:18px;color:black">TD/TC Tile:</label>
                                                <input type="" name="tile1" id="tile1" value="" style="font-size:20px;width:150px;text-align:center" disabled />


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
                                                <label style="font-size:18px;color:black">Height:</label>
                                                <input type="number" name="HEIGHT2" id="HEIGHT2" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Height Of AC Socket</span>
                                                <input type="hidden" name="point" id="point" value="" style="font-size:20px;width:150px;text-align:center" />
                                                <input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </center>
                        </form>
                    </div>
                    <!---////////////////////////////////////////////////////////////////////////////////-->
                    <div id="tab2" class="tab-pane fade">
                        <form id="myForm2">
                            <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                <thead>
                                    <div data-role="header">
                                        <th colspan="8">
                                            <h1>AC Machine Located At Tenjou Sagaru w/o Height Indication Under Fukisage</h1>
                                        </th>
                                    </div>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="9" style="border-style:solid;">
                                            <center>
                                                <p style="color:blue;font-size:20px;text-align:center" class="space">Formula: STD Ceiling Height - No.of grids x pitch x 910 </p>
                                            </center>
                                        </td>
                                    </tr>


                                    <?php
                                    include_once 'include/dbcon.php';
                                    $query = "SELECT * FROM computation limit 86";
                                    $result = $db_connect->query($query);
                                    ?>

                                    <tr>
                                        <td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
                                            <select style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF1" name="SRKF1" onchange="compute2()" onclick="compute2()" />
                                            <option value=""></option>
                                            <!--<option><?php echo $option; ?></option> -->
                                            <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                <option value="<?php echo $row['Socket_height'] ?>"><?php echo $row['room'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">STD Ceiling Height:</label>
                                            <!--<textarea id="std12" name="std12" class="hide std12" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>-->
                                            <input type="text" class="SCH1" name="SCH1" id="SCH1" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                        </td>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">#grids:</label><br>
                                            <!--<textarea id="GRIDS" name="GRIDS" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:150px"></textarea>-->
                                            <input type="text" name="GRID1" id="GRID1" value="" style="font-size:20px;width:150px;text-align:center" onkeyup="compute2()" />
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x
                                        </td>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">pitch:</label>
                                            <!--<textarea id="PITCH1" name="PITCH1" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px"></textarea>-->

                                            <br><input type="text" name="PITCH1" id="PITCH1" value="" style="font-size:20px;width:150px;text-align:center" onkeyup="compute2()" />
                                            <input type="hidden" name="CONSTANT1" id="CONSTANT1" value="910" style="font-size:20px;width:150px;text-align:center" />
                                        </td>
                                        <td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center;"> x 910
                                            <textarea id="CON1" name="CON1" class="hide" value="910"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">Height:</label>
                                            <input type="text" name="HEIGHT3" id="HEIGHT3" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Slanted Ceiling Height</span>
                                            <input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <form id="myForm3">
                            <center>
                                <table class="table table-condensed" border="2" style="background-color:aliceblue;width:60%;border-style:solid">
                                    <tr>
                                        <thead>
                                            <div data-role="header">
                                                <td colspan="3" style="border-style:solid;background-color:#68dff0;text-align:center"><label style="color:maroon;font-size:18px;" class="space">Centering Of Tiles</label></td>
                                            </div>
                                        </thead>
                                    </tr>
                                    <tbody>
                                        <?php
                                        include_once 'include/dbcon.php';
                                        $query = "SELECT * FROM computation limit 5";
                                        $result = $db_connect->query($query);
                                        ?>
                                        <tr>
                                            <td class="form-inline" colspan="3" style="text-align:center;vertical-align:middle;"><br>
                                                <label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
                                                <select style="font-size:20px;text-align:center;width:100px" id="tdtc1" name="tdtc1" required="required" onchange="compute2()" onclick="compute2()" />
                                                <option value=""></option>

                                                <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                    <option value="<?php echo $row['td_tc'] ?>"><?php echo $row['tile'] ?></option>
                                                <?php } ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="1" style="text-align:center;vertical-align:middle;">
                                                <label style="font-size:18px;color:black">STD AC Socket Height:</label>
                                                <textarea id="ash2" name="ash2" class="hide ash2" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"></textarea>
                                                <input type="text" name="ash3" id="ash3" style="font-size:20px;width:150px;text-align:center" disabled />
                                            </td>
                                            <td colspan="1" style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                            </td>
                                            <td colspan="1" style="text-align:center;vertical-align:middle;">
                                                <label style="font-size:18px;color:black">TD/TC Tile:</label>
                                                <input type="text" name="tile2" id="tile2" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                                <input type="hidden" name="constant1" id="constant1" value="15" style="font-size:20px;width:150px;text-align:center" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
                                                <label style="font-size:18px;color:black">Height:</label>
                                                <input type="text" name="HEIGHT4" id="HEIGHT4" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Height Of AC Socket</span>
                                                <input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </center>
                        </form>
                    </div>
                    <!--/////////////////////////////////////////////////////////////////-->
                    <div id="tab3" class="tab-pane fade">
                        <form id="myForm4">
                            <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                <thead>
                                    <div data-role="header">
                                        <th colspan="8">
                                            <h1>AC Machine Located At Tenjou Sagaru w/ CH Indication And Room w/ Given Ceiling Height</h1>
                                        </th>
                                    </div>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="9" style="border-style:solid;;">
                                            <center>
                                                <p style="color:blue;font-size:20px;text-align:center" class="space">Formula: STD AC Ceiling Height - Given Ceiling Height - STD AC Socket Height </p>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php
                                    function room2()
                                    {
                                        try {
                                            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
                                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $pdo->query("SET NAMES utf8");
                                            $stmt = $pdo->prepare("SELECT room FROM computation limit 86");
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
                                    foreach (room2() as $value) {
                                        $option .= '<option value="' . $value["room"] . '">' . $value["room"] . '</option>';
                                    }
                                    ?>
                                    <?php
                                    include_once 'include/dbcon.php';
                                    $query = "SELECT * FROM computation limit 86";
                                    $result = $db_connect->query($query);
                                    ?>

                                    <tr>
                                        <td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
                                            <select style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF2" name="SRKF2" onchange="setTimeout(compute4, 100)" onclick="setTimeout(compute4, 500)" />
                                            <option value=""></option>
                                            <option><?php echo $option; ?></option>
                                            <!--<?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['Socket_height'] ?>"><?php echo $row['room'] ?></option>
												
											<?php } ?> -->

                                            </select>
                                        </td>

                                    </tr>


                                    <tr>

                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">STD Ceiling Height:</label>
                                            <textarea id="STDCEILING" name="STDCEILING" class="hide STDCEILING" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                            <input type="text" class="STDCEILING1" name="STDCEILING1" id="STDCEILING1" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -</td>
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">Given Ceiling Height:</label>
                                            <!--<textarea id="GCH" name="GCH" class="GCH" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
                                            <input type="text" name="GCH1" id="GCH1" style="font-size:20px;width:150px;text-align:center" onkeyup="compute4()" />
                                        </td>
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                        <td style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black">STD AC Socket Height:</label>
                                            <textarea id="STDSOCKET" name="STDSOCKET" class="hide STDSOCKET" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"></textarea>
                                            <input type="text" name="STDSOCKET1" id="STDSOCKET1" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">Height:</label>
                                            <input type="text" name="HEIGHT5" id="HEIGHT5" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Lowered Ceiling</span>
                                            <input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <form id="myForm5">
                            <center>
                                <table class="table table-condensed" border="2" style="background-color:aliceblue;width:60%;border-style:solid">
                                    <tr>
                                        <thead>
                                            <div data-role="header">
                                                <td colspan="3" style="border-style:solid;background-color:#68dff0;text-align:center"><label style="color:maroon;font-size:18px;" class="space">Centering Of Tiles</label></td>
                                            </div>
                                        </thead>
                                    </tr>
                                    <tbody>
                                        <?php
                                        include_once 'include/dbcon.php';
                                        $query = "SELECT * FROM computation limit 5";
                                        $result = $db_connect->query($query);
                                        ?>
                                        <tr>
                                            <td class="form-inline" colspan="3" style="text-align:center;vertical-align:middle;"><br>
                                                <label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
                                                <select style="font-size:20px;text-align:center;width:100px" id="tdtc2" name="tdtc2" required="required" onchange="compute4()" onclick="compute4()">
                                                    <option value=""></option>

                                                    <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                        <option value="<?php echo $row['td_tc'] ?>"><?php echo $row['tile'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="1" style="text-align:center;vertical-align:middle;">
                                                <label style="font-size:18px;color:black">STD AC Socket Height:</label>
                                                <textarea id="STDHEIGHT" name="STDHEIGHT" class="hide STDHEIGHT" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"></textarea>
                                                <input type="text" name="STDHEIGHT1" id="STDHEIGHT1" style="font-size:20px;width:150px;text-align:center" disabled />
                                            </td>
                                            <td colspan="1" style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                            </td>
                                            <td colspan="1" style="text-align:center;vertical-align:middle;">
                                                <label style="font-size:18px;color:black">TD/TC Tile:</label>
                                                <input type="text" name="tile3" id="tile3" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                                <input type="hidden" name="constant1" id="constant1" value="15" style="font-size:20px;width:150px;text-align:center" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
                                                <label style="font-size:18px;color:black">Height:</label>
                                                <input type="text" name="HEIGHT6" id="HEIGHT6" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Height Of AC Socket</span>
                                                <input class="bg-danger" type="button" onclick="myFunction5()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </center>
                        </form>
                    </div>
                    <!--/////////////////////////////////////////////////////////////////-->
                    <div id="tab4" class="tab-pane fade">
                        <form id="myForm6">
                            <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                <thead>
                                    <div data-role="header">
                                        <th colspan="5">
                                            <h1>With Requested AC Socket Height (AC ス And AC Ordinary)</h1>
                                        </th>
                                    </div>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="5" style="border-style:solid;background-color:#4EE2EC">
                                            <center>
                                                <p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">Centering of Tiles</p>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="border-style:solid;background-color:#4EE2EC">
                                            <center>
                                                <p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">If Requested Height is Below Standard Socket Height</p>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="9" style="border-style:solid;;">
                                            <center>
                                                <p style="color:blue;font-size:20px;text-align:center" class="space">Formula: STD Socket Height - TD/TC Tile </p>
                                            </center>
                                        </td>
                                    </tr>



                                    <?php
                                    include_once 'include/dbcon.php';
                                    $query = "SELECT * FROM computation limit 86";
                                    $result = $db_connect->query($query);
                                    ?>

                                    <tr>
                                        <td class="form-inline" colspan="5" style="text-align:center;vertical-align:middle;">
                                            <label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
                                            <select style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF3" name="SRKF3" />
                                            <option value=""></option>
                                            <!--<option><?php echo $option; ?></option>-->
                                            <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                <option value="<?php echo $row['Socket_height'] ?>"><?php echo $row['room'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td style="width:48%;text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">Requested AC Socket Height:</label>
                                            <!--<textarea id="STDSOCKET" name="STDSOCKET" class="hide STDSOCKET" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
                                            <input type="text" name="RAC" id="RAC" style="font-size:20px;width:150px;text-align:center" />
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;">
                                        </td>
                                        <?php
                                        include_once 'include/dbcon.php';
                                        $query = "SELECT * FROM computation limit 5";
                                        $result = $db_connect->query($query);
                                        ?>

                                        <td colspan="2" style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
                                            <select style="font-size:20px;text-align:center;width:100px;" id="tdtc3" name="tdtc3" required="required">
                                                <option value=""></option>

                                                <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                    <option value="<?php echo $row['td_tc'] ?>"><?php echo $row['tile'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">STD AC Socket Height:</label>
                                            <!--<textarea id="STDCEILING" name="STDCEILING" class="hide STDCEILING" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>-->
                                            <input type="text" class="AC" name="AC" id="AC" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                        </td>
                                        <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
                                        </td>
                                        <td style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">TD/TC Tile:</label>
                                            <!--<textarea id="GCH" name="GCH" class="GCH" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
                                            <input type="text" name="tile4" id="tile4" style="font-size:20px;width:150px;text-align:center" disabled />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;"><br>
                                            <label style="font-size:18px;color:black">Height:</label>
                                            <input type="text" name="HEIGHT7" id="HEIGHT7" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Height Of AC Socket</span>
                                            <input class="bg-danger" type="button" onclick="myFunction6()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">

                                        </td>
                                    </tr>
                                    <!--//////////////////////////////////////////////////////////////////-->
                        </form>

                        <form id="myForm7">
                            <tr>
                                <td colspan="5" style="border-style:solid;background-color:#4EE2EC">
                                    <center>
                                        <p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">If Requested Height is Above Standard Socket Height</p>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="9" style="border-style:solid;;">
                                    <center>
                                        <p style="color:blue;font-size:20px;text-align:center" class="space">Formula: STD Socket Height + TD/TC Tile </p>
                                    </center>
                                </td>
                            </tr>

                            <?php
                            include_once 'include/dbcon.php';
                            $query = "SELECT * FROM computation limit 86";
                            $result = $db_connect->query($query);
                            ?>

                            <tr>
                                <td class="form-inline" colspan="5" style="text-align:center;vertical-align:middle;">
                                    <label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
                                    <select style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF4" name="SRKF4" />
                                    <option value=""></option>
                                    <!--<option><?php echo $option; ?></option>-->
                                    <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $row['Socket_height'] ?>"><?php echo $row['room'] ?></option>
                                    <?php } ?>
                                    </select>
                                </td>

                            </tr>

                            <tr>
                                <td style="width:48%;text-align:center;vertical-align:middle;"><br>
                                    <label style="font-size:18px;color:black">Requested AC Socket Height:</label>
                                    <!--<textarea id="STDSOCKET" name="STDSOCKET" class="hide STDSOCKET" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
                                    <input type="text" name="RAC1" id="RAC1" style="font-size:20px;width:150px;text-align:center" />
                                </td>
                                <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;">
                                </td><?php
                                        include_once 'include/dbcon.php';
                                        $query = "SELECT * FROM computation limit 5";
                                        $result = $db_connect->query($query);
                                        ?>


                                <td colspan="2" style="text-align:center;vertical-align:middle;"><br>
                                    <label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
                                    <select style="font-size:20px;text-align:center;width:100px" id="tdtc4" name="tdtc4" required="required">
                                        <option value=""></option>

                                        <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                            <option value="<?php echo $row['td_tc'] ?>"><?php echo $row['tile'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>

                            </tr>
                            <tr>

                                <td style="text-align:center;vertical-align:middle;"><br>
                                    <label style="font-size:18px;color:black">STD AC Socket Height:</label>
                                    <!--<textarea id="STDCEILING" name="STDCEILING" class="hide STDCEILING" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>-->
                                    <input type="text" class="AC1" name="AC1" id="AC1" value="" style="font-size:20px;width:150px;text-align:center" disabled />
                                </td>
                                </td>
                                <td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
                                </td>
                                <td style="text-align:center;vertical-align:middle;"><br>
                                    <label style="font-size:18px;color:black">TD/TC Tile:</label>
                                    <!--<textarea id="GCH" name="GCH" class="GCH" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
                                    <input type="text" name="tile5" id="tile5" style="font-size:20px;width:150px;text-align:center" disabled />
                                </td>
                            </tr>

                            <tr>
                                <td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;"><br>
                                    <label style="font-size:18px;color:black">Height:</label>
                                    <input type="text" name="HEIGHT8" id="HEIGHT8" value="" style="font-size:20px;width:150px;text-align:center" disabled /><span style="color:blue;font-size:18px">Height Of AC Socket</span>
                                    <input class="bg-danger" type="button" onclick="myFunction7()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5" style="border-style:solid;background-color:#4EE2EC">
                                    <p style="color:black;font-size:20px" class="space"><span style="font-weight:bold;color:maroon;font-size:20px">Note:</span><br>1. If planner request height for AC Socket - AC (ス) and AC Ordinary, need to check if w/in Centering of Tiles.<br>2. Open Centering of tiles sheet then search requested height if w/in the table depends on room, kanabakari, floor and tile.<br> If not w/in the Centering of Tiles, use computation for Centering of Tiles beside.<br>3. For AC (セ), no need to check Centering of Tiles, Ok to follow request.</p>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                            <center>

                        </form>

                    </div>
                </div>

                <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                    <form id="myForm8">
                        <tr>
                            <td colspan="5" style="border-style:solid;background-color:#4EE2EC">
                                <center>
                                    <p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">AC SLEEVE CAP/SLIM DUCT OFFSET TO GL</p>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" align="center">
                                <label style="font-size:20px;color:black"> AC Floor Location :</label>
                                <select style="font-size:20px;text-align:center;width:100px" id="acFloor" name="acFloor" required="required" onchange="computeSleeve()">
                                    <option value=""></option>
                                    <option value="1F">1F</option>
                                    <option value="2F">2F</option>
                                    <option value="3F">3F</option>
                                </select><br><br>
                                <label style="font-size:25px;color:black">Height:</label>
                                <input type="text" name="acSleeve" id="acSleeve" value="" style="font-size:25px;width:250px;text-align:center" disabled /><br>
                                <span style="font-weight:bold;color:red;font-size:20px;">AC SLEEVE OFFSET FROM GL (ELEVATION)</span>
                                <input class="bg-danger" type="button" onclick="myFunction8()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
                            </td>
                        </tr>
                    </form>
                </table>

            </section>
            <?php
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez', 'root', 'admin');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $pdo->query('SET NAMES UTF8');
                $stmt = $pdo->prepare(
                    "SELECT * FROM centering_tiles"
                );

                //$stmt->bindValue(':1F TO 3F ','%'.$_REQUEST["1F TO 3F "].'%',PDO::PARAM_STR);
                $stmt->execute();
                @$total = $stmt->rowCount();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    @$tbody .= '<tr>';

                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["1F TO 3F"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["1F TO 3F_A"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["真壁和室_A"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["真壁和室_B"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["書斎_A"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["書斎_B"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["1F_A"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["2F_B"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["真壁和室_C"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["書斎_C"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["1F_C"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["1F_D"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["2F_C"] . '</td>';
                    @$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["2F_D"] . '</td>';

                    @$tbody .= '</tr>';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            ?>
            <?php
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez', 'root', 'admin');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $pdo->query('SET NAMES UTF8');
                $stmt = $pdo->prepare(
                    "SELECT * FROM centering_tiles1"
                );

                //$stmt->bindValue(':1F TO 3F ','%'.$_REQUEST["1F TO 3F "].'%',PDO::PARAM_STR);
                $stmt->execute();
                @$total = $stmt->rowCount();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    @$tbody1 .= '<tr>';

                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["1F TO 3F"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["1F TO 3F_A"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["真壁和室_A"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["真壁和室_B"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["書斎_A"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">' . $row["書斎_B"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["1F_A"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["2F_B"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["真壁和室_C"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">' . $row["書斎_C"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["1F_C"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["1F_D"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["2F_C"] . '</td>';
                    @$tbody1 .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">' . $row["2F_D"] . '</td>';

                    @$tbody1 .= '</tr>';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            ?>


            <table class="table table-stripped table-bordered table-hovered">
                <thead style="background-color:#990012">
                    <tr>
                        <th colspan="14" style="font-weight:bold;font-size:25px;vertical-align:middle;text-align:center;color:white">CENTERING OF TILES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color:lightblue">
                        <td colspan="6" style="font-weight:bold;font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">240 KANABAKARI</td>
                        <td colspan="4" style="font-weight:bold;font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">265 KANABAKARI</td>
                        <td colspan="4" style="font-weight:bold;font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">260 KANABAKARI</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">1F TO 3F</td>
                        <td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">真壁和室</td>
                        <td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">書斎</td>


                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">1F</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">2F</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">真壁和室</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">書斎</td>

                        <td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">1F</td>
                        <td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">2F</td>
                    </tr>
                    <tr>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TD(49)</td>

                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TD(49)</td>

                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TD(49)</td>

                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>

                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TD(49)</td>

                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TC(70)</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TD(49)</td>




                    </tr>
                    <tr>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*2150*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*2150*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*2100*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*1950*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*2150*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*1850*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*2050*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*2050*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*1850*</td>
                        <td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*1850*</td>
                        <?php echo @$tbody; ?>
                    </tr>
                    <tr>
                        <td colspan="14" style="background-color:#990012">
                            <p style="font-size:15px;color:white">IN CASE REQUESTED HEIGHT IS ABOVE AC SOCKET STANDARD HEIGHT (STD. AC SOCKET HEIGHT+TD/TC), IF NOT W/IN CENTERING OF TILES HEIGHT THAT IS LOWER THAN REQUESTED SHOULD BE USE AS AC SOCKET HEIGHT
                                (EX. YOUSHITSU 2F, 240K, REQUEST IS H=2000 USE 1990, STILL NEED TO CHECK HITTING OF AC SOCKET TO CEILING BASED ON HALF SIZE)</p>
                        </td>
                        <?php echo @$tbody1; ?>
                    </tr>
                </tbody>
            </table>
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
        function myFunction0() {

            document.getElementById("clearData").reset();
            document.getElementById("myForm").reset();
            document.getElementById("myForm1").reset();
            document.getElementById("myForm2").reset();
            document.getElementById("myForm3").reset();
            document.getElementById("myForm4").reset();
            document.getElementById("myForm5").reset();
            document.getElementById("myForm6").reset();
            document.getElementById("myForm7").reset();
            document.getElementById("myForm8").reset();
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

        function myFunction7() {
            document.getElementById("myForm7").reset();
        }

        function myFunction8() {
            document.getElementById("myForm8").reset();
        }
    </script>
    <script>
        ////////////////////////////////////////////////////////////////////////////////////
        $("#SRKF1").change(function() {
            document.getElementById("SCH1").value = document.getElementById("SRKF1").value;
            document.getElementById("ash3").value = document.getElementById("SRKF1").value;
            var SRKF1 = parseFloat($('input[name=SRKF1]').val() || 0);
        });
        /* $("#SRKF2").change(function(){
        	document.getElementById("STDSOCKET1").value=document.getElementById("SRKF2").value;	
        	document.getElementById("STDHEIGHT1").value=document.getElementById("SRKF2").value;	
        	document.getElementById("STDCEILNG1").value=document.getElementById("SRKF2").value;	
        	var SRKF2 =  parseFloat($('input[name=SRKF2]').val() || 0);	
        });  */
        $("#tdtc").change(function() {
            document.getElementById("tile1").value = document.getElementById("tdtc").value;
            var tdtc = parseFloat($('input[name=tdtc]').val() || 0);
        });
        $("#tdtc1").change(function() {
            document.getElementById("tile2").value = document.getElementById("tdtc1").value;
            var tdtc = parseFloat($('input[name=tdtc1]').val() || 0);
        });
        $("#tdtc2").change(function() {
            document.getElementById("tile3").value = document.getElementById("tdtc2").value;
            var tdtc2 = parseFloat($('input[name=tdtc2]').val() || 0);
        });
        $("#tdtc3").change(function() {
            document.getElementById("tile4").value = document.getElementById("tdtc3").value;
            var tdtc3 = parseFloat($('input[name=tdtc3]').val() || 0);
        });
        $("#tdtc4").change(function() {
            document.getElementById("tile5").value = document.getElementById("tdtc4").value;
            var tdtc4 = parseFloat($('input[name=tdtc4]').val() || 0);
        });

        $("#SRKF3").change(function() {
            document.getElementById("AC").value = document.getElementById("SRKF3").value;
            var SRKF3 = parseFloat($('input[name=SRKF3]').val() || 0);

        });
        $("#SRKF4").change(function() {
            document.getElementById("AC1").value = document.getElementById("SRKF4").value;
            var SRKF4 = parseFloat($('input[name=SRKF4]').val() || 0);

        });
    </script>

    <script>
        $(function() {
            $(document).on('change', '#SRKF', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/room.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#std1").text(data)
                    document.getElementById("SCH").value = document.getElementById("std1").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        })
        $(function() {
            $(document).on('change', '#SRKF', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/DA.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#DA").text(data)
                    document.getElementById("DACH").value = document.getElementById("DA").value;


                }).fail(function(data) {
                    alert('Failed')
                })
            })
        })
        $(function() {
            $(document).on('change', '#SRKF', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/socket_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#ash").text(data)
                    document.getElementById("ash1").value = document.getElementById("ash").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        })



        ///////////////////////////////tenjou sagaru ch indication////////////////////////////////////////////////
        $(function() {
            $(document).on('change', '#SRKF2', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/ACS1.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#STDSOCKET").text(data)
                    document.getElementById("STDSOCKET1").value = document.getElementById("STDSOCKET").value;


                }).fail(function(data) {
                    alert('Failed')
                })
            })
        })
        $(function() {
            $(document).on('change', '#SRKF2', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/room2.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#STDCEILING").text(data)
                    document.getElementById("STDCEILING1").value = document.getElementById("STDCEILING").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        })
        $(function() {
            $(document).on('change', '#SRKF2', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/ACS2.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#STDHEIGHT").text(data)
                    var z = document.getElementById("STDHEIGHT1").value = document.getElementById("STDHEIGHT").value;


                }).fail(function(data) {
                    alert('Failed')
                })
            })
        })
    </script>


    <!-- js placed at the end of the document so the pages load faster
	<script src="assets/js/jjquery-1.8.3.min.js"></script>
	-->
    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

    <script>
        //custom select box

        /* $(function(){
            $('select.styled').customSelect();
        }); */
    </script>

</body>

</html>
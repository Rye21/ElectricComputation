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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 9";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 9";
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


        function kva_check1() {
            if (!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {
                //alert('Please Input Control Number..!')
                return false
            }
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check1/check_interphone.php",
                data: 'code_number=' + $("#code_number").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number3 = document.getElementById("interphone").value = document.getElementById("email-availability-status").innerHTML;
                    var B = document.getElementById("interphone").value;
                    var str = B;
                    var str1 = str.substring(0, str.length - 1);
                    var C = document.getElementById("interphone").value = str1;
                    var strArray = C.split("+");

                    for (var i = 0; i < strArray.length; i++) {
                        document.getElementById("interphone").value = strArray[0];
                        document.getElementById("qty").value = strArray[1];
                        document.getElementById("interphone2").value = strArray[2];
                        document.getElementById("qty2").value = strArray[3];
                        document.getElementById("interphone3").value = strArray[4];
                        document.getElementById("qty3").value = strArray[5];
                        document.getElementById("interphone4").value = strArray[6];
                        document.getElementById("qty4").value = strArray[7];
                    }
                    var interphone = document.getElementById("interphone").value;
                    var qty = document.getElementById("qty").value;
                    var interphone2 = document.getElementById("interphone2").value;
                    var qty2 = document.getElementById("qty2").value;
                    var interphone3 = document.getElementById("interphone3").value;
                    var qty3 = document.getElementById("qty3").value;
                    var interphone4 = document.getElementById("interphone4").value;
                    var qty4 = document.getElementById("qty4").value;

                    if (interphone == 'undefined' && qty == 'undefined') {
                        document.getElementById("interphone").value = '-';
                        document.getElementById("qty").value = '-';
                    } else if (interphone == '') {
                        alert('Please Check If Interphone type is Setteigai !!');
                        document.getElementById("qty").value = '-';
                        document.getElementById("demo").value = '-';
                    }

                    if (interphone2 == 'undefined' && qty2 == 'undefined') {
                        document.getElementById("interphone2").value = '-';
                        document.getElementById("qty2").value = '-';
                    }

                    if (interphone3 == 'undefined' && qty3 == 'undefined') {
                        document.getElementById("interphone3").value = '-';
                        document.getElementById("qty3").value = '-';
                    }

                    if (interphone4 == 'undefined' && qty4 == 'undefined') {
                        document.getElementById("interphone4").value = '-';
                        document.getElementById("qty4").value = '-';
                    }

                    /* var strArray = C.split("+");		
                    for(var i = 0; i < strArray.length; i++){
                    		document.getElementById("interphone").value = strArray[0];
                    		document.getElementById("qty").value = strArray[1];
                    		//document.getElementById("serial4").value = strArray[0];
                    		}  */

                    //alert(number2);

                    setTimeout(check_PlanNumber(), 100);
                    setTimeout(check_OptionPicking(), 200);
                    setTimeout(checkemailAvailability1(), 300);

                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }


        /////////////////////check_PlanNumber///////////////////
        function check_PlanNumber() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check1/check_PlanNumber_interphone.php",
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
                url: "check1/check_joutou.php",
                data: 'code_number=' + $("#code_number").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var C = document.getElementById("joutou").value = document.getElementById("email-availability-status").innerHTML;
                    var number2 = C.substring(0, 10);
                    var number3 = document.getElementById("joutou").value = number2;


                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }
        /////////////////////check_OptionPicking///////////////////
        function check_OptionPicking() {

            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check1/check_interphone_composition.php",
                data: 'code_number=' + $("#code_number").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var A = document.getElementById("composition").value = document.getElementById("email-availability-status").innerHTML;
                    var B = document.getElementById("composition").value;
                    var str = B;
                    var str1 = str.substring(0, str.length - 1);
                    var C = document.getElementById("composition").value = str1;
                    var D = document.getElementById("item_name").value;
                    //alert(D);

                    if (D == C) {
                        document.getElementById("demo").value = 'GOOD';
                        $("#demo").css('color', 'blue');
                    } else if (D == '') {
                        document.getElementById("demo").value = '-';
                    } else {
                        document.getElementById("demo").value = 'NOT GOOD';
                        $("#demo").css('color', 'maroon');
                    }
                    var joutou = document.getElementById("joutou").value;
                    var interphone = document.getElementById("interphone").value;
                    var x = document.getElementById("demo").value;
                    var date = '2019-08-01';
                    var confirm = 'PROBLEM : Need to send confirmation to planner due to obsolete !!';
                    if (joutou > date &&
                        (interphone == 'MT61' || interphone == 'MT62' || interphone == 'MT63' ||
                            interphone == 'MT71' || interphone == 'MT72' || interphone == 'MT73' || interphone == 'MT74' || interphone == 'MT75' || interphone == 'MT76' ||
                            interphone == 'MT81' || interphone == 'MT82' || interphone == 'MT83'

                        )) {
                        document.getElementById("demo").value = 'OBSOLETE';
                        document.getElementById("demo3").value = confirm;
                        document.getElementById("image_guide").innerHTML = '<img src="denkilogo/interphone_guide.PNG" style="height:80%px;width:100%;"/>';
                    }
                    if (x == 'OBSOLETE') {

                    }


                    $("#loaderIcon").hide();
                },
                error: function() {}
            });

            jQuery.ajax({
                url: "check1/check_gaibu.php",
                data: 'code_number=' + $("#code_number").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var C = document.getElementById("gaibu").value = document.getElementById("email-availability-status").innerHTML;
                    var gaibu = document.getElementById("gaibu").value;
                    var D = '外部';
                    var E = 'ポーチ';
                    //alert(D);
                    if (gaibu == D) {
                        alert('Please Check if  " WITH "  Box Dome !!');
                    } else if (gaibu == E) {
                        alert('Please Check if  " WITHOUT "  Box Dome !!');
                    }


                    $("#loaderIcon").hide();
                },
                error: function() {}
            });

        }

        function checkemailAvailability1() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check1/check_composition.php",
                data: 'interphone=' + $("#interphone").val() +
                    '&interphone2=' + $("#interphone2").val() +
                    '&qty=' + $("#qty").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number1 = document.getElementById("item_name").value = document.getElementById("email-availability-status").innerHTML;
                    var number2 = document.getElementById("item_name").value;
                    var number3 = document.getElementById("qty").value;
                    var str = number2;
                    var str1 = str.substring(0, str.length - 1);
                    var C = document.getElementById("item_name").value = str1;
                    //var strArray = C.split(",");
                    //alert(number3);

                    /////////////////////////////////////////////////////////////
                    var strArray = C.split(",");
                    var t = document.getElementById("demo").innerHTML = strArray;
                    var y = t.sort();
                    var x = document.getElementById("item_name").value = y;
                    ////////////////////////////////////////////////////////

                    $("#loaderIcon").hide();
                },
                error: function() {}
            });

            jQuery.ajax({
                url: "check1/check_pattern2.php",
                data: 'interphone=' + $("#interphone").val() +
                    '&interphone2=' + $("#interphone2").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number1 = document.getElementById("pattern_name").value = document.getElementById("email-availability-status").innerHTML;
                    //alert(number1);
                    var B = document.getElementById("pattern_name").value;
                    var str = B;
                    var str1 = str.substring(0, str.length - 1);
                    var C = document.getElementById("pattern_name").value = str1;
                    var strArray = C.split("+");
                    //alert(number1);
                    for (var i = 0; i < strArray.length; i++) {
                        document.getElementById("pattern_name").value = strArray[0];
                        document.getElementById("pattern_name2").value = strArray[1];
                        //document.getElementById("pattern_name3").value = strArray[2];
                        //document.getElementById("pattern_name4").value = strArray[3];

                    }

                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
            jQuery.ajax({
                url: "check1/check_pattern.php",
                data: 'interphone=' + $("#interphone").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number1 = document.getElementById("pattern").value = document.getElementById("email-availability-status").innerHTML;
                    var number2 = document.getElementById("pattern").value;
                    var number3 = document.getElementById("pattern_name").value;
                    var number4 = document.getElementById("interphone").value;
                    var number5 = document.getElementById("interphone2").value;
                    var number6 = document.getElementById("pattern2").value = number5;
                    var number7 = document.getElementById("pattern_name2").value;
                    if (number2 == number6) {
                        //alert('Same serial')
                        document.getElementById("imageDiv").innerHTML = '<img src="interphone_pattern/' + number3 + '" style="height:150px;width:300px;"/>';
                        document.getElementById("imageDiv2").innerHTML = '<img src="interphone_pattern/' + number3 + '" style="height:150px;width:300px;"/>';

                    } else {
                        //alert('try');
                        //alert('Different serial')
                        document.getElementById("imageDiv").innerHTML = '<img src="interphone_pattern/' + number3 + '" style="height:150px;width:300px;"/>';
                        document.getElementById("imageDiv2").innerHTML = '<img src="interphone_pattern/' + number7 + '" style="height:150px;width:300px;"/>';


                    }


                    /* if (number2 == number4){
                    	document.getElementById("imageDiv").innerHTML = '<img src="interphone_pattern/' + number3 + '" style="height:150px;width:300px;"/>';
                    }  */
                    if (number4 == '') {
                        document.getElementById("imageDiv").innerHTML = '<img src="interphone_pattern/serial.PNG" style="height:150px;width:300px;"/>';
                    }

                    /* if (number5 == number6){
                    	document.getElementById("imageDiv2").innerHTML = '<img src="interphone_pattern/' + number7 + '" style="height:150px;width:300px;"/>';
                    } */
                    if (number5 == '-') {
                        document.getElementById("imageDiv2").style.display = "none";
                    }

                    var E = document.getElementById("demo").value;
                    var F = 'Please Check if with problem or confirmation !!! ';
                    if (E == 'NOT GOOD') {
                        document.getElementById("demo2").innerHTML = F;
                    }


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
                        <a class="active" href="interphone.php">
                            <!--<i class="fa fa-dashboard"></i>-->
                            <span>INTERPHONE</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Checking Interphone Composition</a></li>
                        </ul>
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
                <center><label class="head">INTERPHONE COMPOSITION CHECKING SYSTEM</label></center>
                <ul class="nav nav-tabs" style="font-size:20px">


                </ul>

                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <form id="myForm" method="POST">
                            <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                <thead>
                                    <div data-role="header" class="" id="FireAlarmAboveWindow">
                                        <th colspan="6">
                                            <h1>INTERPHONE COMPOSITION CHECKING SYSTEM</h1>
                                        </th>
                                    </div>
                                </thead>
                                <tbody>
                                    <tr>


                                    </tr>
                                    <tr>

                                        <td>

                                            <div class="container-fluid ">
                                                <span>
                                                    <div class="col-sm-4">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <p>* Press<span style="color:red;font-weight:bold"> ENTER </span>after you put the Customer Code *</p>
                                                        <label style="font-size:20px;color:black;" class="space">Customer Code:</label>
                                                        <input type="text" name="code_number" id="code_number" onkeypress="setTimeout(kva_check1, 10)" onKeyup="setTimeout(kva_check1, 10)" onblur="setTimeout(kva_check1, 10)" onmousemove="setTimeout(kva_check1, 10)" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12" />
                                                        <br>
                                                        <label style="font-size:20px;color:black" class="space">Plan Number: </label>
                                                        <input type="" name="plan_number" id="plan_number" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
                                                        <label style="font-size:20px;color:black" class="space">Joutou Plan: </label>
                                                        <input type="text" name="joutou" id="joutou" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input class="hide" type="text" name="gaibu" id="gaibu" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" readonly="readonly" />
                                                        <span class="hidden" id="email-availability-status"></span><br>
                                                        <span> <span class="blink_me" style="color:red;font-size:15px;font-weight:bold">*Check Plan number if Latest/Not Tally</span></span>
                                                    </div>
                                                </span>
                                                <span>
                                                    <div class="col-sm-3">
                                                        <br>
                                                        <br>
                                                        <label style="font-size:18px;color:black">Interphone Serial & Quantity:</label><br>
                                                        <input type="text" name="interphone" id="interphone" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input type="text" name="qty" id="qty" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <br>
                                                        <input type="text" name="interphone2" id="interphone2" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input type="text" name="qty2" id="qty2" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <br>
                                                        <input type="text" name="interphone3" id="interphone3" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input type="text" name="qty3" id="qty3" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <br>
                                                        <input type="text" name="interphone4" id="interphone4" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input type="text" name="qty4" id="qty4" value="" style="font-size:30px;width:100px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <br>

                                                    </div>
                                                </span>
                                                <span>
                                                    <div class="col-sm-4">
                                                        <br>
                                                        <div id="imageDiv" align="center"></div>
                                                        <div id="imageDiv2" align="center"></div>
                                                        <div id="imageDiv3" align="center"></div>
                                                        <div id="imageDiv4" align="center"></div>
                                                        <input type="text" class="hide" name="item_name" id="item_name" value="" style="font-size:30px;width:400px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input type="text" class="hide" name="item_name2" id="item_name2" value="" style="font-size:30px;width:400px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" />
                                                        <input type="text" class="hide" name="composition" id="composition" value="" style="font-size:30px;width:400px;text-align:center;color:black;font-weight:bold;background-color:#b6bdc6;" readonly="readonly" /><br>
                                                        <br><label style="font-size:25px;color:black;" class="space">Result:</label>
                                                        <input type="text" id="demo" name="demo" value="" style="text-align:center;width:200px;font-size:30px;font-weight:bold;background-color:#b6bdc6;" disabled>
                                                        <span class="hidden" id="email5-availability-status"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <input class="bg-danger" type="button" onclick="window.location.href='http://hrdapps33/denkicomputation/interphone.php'" value="Clear Form" style="font-size:25px;color:black;font-weight:bold;float:left;">
                                            <hr>

                                            <center>
                                                <p id="demo2" name="demo2" class="blink_me" style="width:800px;font-size:30px;font-weight:bold;border:none;color:red;text-align:center;" disabled></p>
                                            </center>
                                            <input align="center" type="text" id="demo3" name="demo3" class="blink_me" style="color:red;width:100%;font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
                                            <input type="text" name="pattern" id="pattern" class="hide">
                                            <input type="text" name="pattern_name" id="pattern_name" class="hide">
                                            <input type="text" name="pattern2" id="pattern2" class="hide">
                                            <input type="text" name="pattern_name2" id="pattern_name2" class="hide">
                                            <input type="text" name="pattern3" id="pattern3" class="hide">
                                            <input type="text" name="pattern_name3" id="pattern_name3" class="hide">
                                            <input type="text" name="pattern4" id="pattern4" class="hide">
                                            <input type="text" name="pattern_name4" id="pattern_name4" class="hide">

                                            <?php
                                            /* $var =  '<input type="text" name="pattern" id="pattern">';
										$var2 =  '<input type="image" src="img_submit.gif" alt="Submit" width="48" height="48">';
										echo $var2;	
										echo "<img src='.$var2.' >"; */
                                            //$serial = $_POST["pattern"];
                                            /*  echo $var;
										   try {
												$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
												$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
												$stmt=$pdo->prepare(
													"SELECT * FROM `interphone` WHERE `item_name` = '$var'" 
												);
												//$stmt->bindValue(':item_name',$item_name,PDO::PARAM_INT);
												$flag = $stmt->execute();
												if (!$flag) { 
													$info = $stmt->errorInfo();
													exit($info[2]);
												}
												//$tbody = '';
												while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
													$item_name = $row["item_name"];
													$composition = $row["composition"];
													$pattern = $row["pattern"];
													echo $pattern;
													
													
												}
											 

											} catch (PDOException $e){
											  var_dump($e->getMessage());
											}
											$pdo = null;  */

                                            ?>


                                            <div class="container-fluid">


                                                <!--<center class="space">							<input type="text" id="demoA" name="demoA" style="width:580px;font-size:25px;font-weight:bold;border:none;background-color:#F0F8FF;color:blue" disabled></center>
							</div>
							<hr style="color:gray">
							<span  style="font-size:15px">*For <span style="color:red;font-weight:bold">Autocad USERS</span> checking <span class="blink_me" style="color:red;font-weight:bold">only</span> !!</span><br>
							<div class="col-sm-4">
							<label align="center" style="font-size:25px;color:black;" class="space">REMARKS:</label>
								<input align="center" type="text" id="demo2" name="demo2"    style="width:200px;font-size:30px;font-weight:bold;border:none;background-color:#b6bdc6;text-align:center" disabled >
							</div>
							<div class="col-sm-4">
							<label align="center" style="font-size:20px;color:black;" class="space">Option Picking:</label>
								<input type="" name="option_p" id="option_p"  style="font-size:30px;width:150px;text-align:center;color:red;font-weight:bold;background-color:#b6bdc6;" readonly="readonly"  />		
										<span class="hidden" id="email5-availability-status"></span>
							</div>
							<div class="col-sm-5">	
								<span style="font-size:15px;">*For Pattern A,OK to follow Request to <span style="color:red;font-weight:bold">ADD SHUUDENBAN</span>.</span>						
								<br><span style="font-size:15px;">*For Pattern B,if Request to Delete <span style="color:red;font-weight:bold">SHUUDENBAN not follow</span></span>
							</div>-->
                                        </td>


                                        <span class="hidden" id="email6-availability-status"></span>

                                    </tr>

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
        function myFunction() {
            document.getElementById("myForm").reset();
            document.getElementById("imageDiv").innerHTML = '';
            document.getElementById("imageDiv2").innerHTML = '';

            /* document.getElementById('electric_company').style.backgroundColor = "";	
            document.getElementById("electric_contract").disabled = false;
            document.getElementById("electric_company").disabled = false;
            document.getElementById("powercon_1").disabled = false;
            document.getElementById("powercon_2").disabled = false;
            document.getElementById("code_number").disabled = false; */
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
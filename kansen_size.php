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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 11";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 11";
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

    <title>KANSEN CHECKING</title>

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


        //////////////////////kva_check1/////////////////////5530097-2021 2770036-2020


        function kva_check1() {
            if (!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {
                //alert('Please Input Control Number..!')
                return false
            }
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check1/check_kva.php",
                data: 'code_number=' + $("#code_number").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number3 = document.getElementById("kva").value = document.getElementById("email-availability-status").innerHTML;
                    var kva = document.getElementById("kva").value;
                    setTimeout(mBreaker, 10);
                    document.getElementById("ElectrictContract").value = kva;

                    $("#loaderIcon").hide();
                },
                error: function() {}
            });

        }

        function mBreaker() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "../Hacchu_Plan_Monitoring/HacchuChecklist/check/mainBreaker.php",
                data: 'kva=' + $("#kva").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number1 = document.getElementById("mbreaker").value = document.getElementById("email-availability-status").innerHTML;
                    var number2 = document.getElementById("mbreaker").value;
                    var mb = number2.slice(0, -1);
                    var kva = document.getElementById("kva").value;
                    var cvt = document.getElementById("cvt").value;
                    var location = document.getElementById("location").value;
                    var len = document.getElementById("length").value;
                    var deduct = len - 5;
                    var divide = 17.8 * deduct * mb / (1000 * cvt);
                    var equal = divide.toFixed(2);
                    /* if(kva){
                    	var kvatocvt = 	kva.match(/\d/g);
                    	kvatocvt = kvatocvt.join(""); */
                    if (mb >= 75) {
                        document.getElementById("cvt").value = '22';
                    }
                    //}
                    //console.log(mb);
                    if (cvt != '' && len != '') {
                        if (equal >= 2) {
                            var a = document.getElementById("result").innerHTML = "PROBLEM";
                            if (a == 'PROBLEM' && cvt == 14) {
                                $("#result").css("color", "red");
                                document.getElementById("cvt").value = '22';

                            } else if (a == 'PROBLEM' && cvt == 22) {
                                $("#result").css("color", "red");
                                document.getElementById("cvt").value = '38';
                            }
                        } else {
                            var b = document.getElementById("result").innerHTML = "NO PROBLEM";
                            if (b == 'NO PROBLEM' && cvt == 14) {
                                $("#result").css("color", "blue");
                                document.getElementById("cvt").value = '14';

                            } else if (b == 'NO PROBLEM' && cvt == 22) {
                                $("#result").css("color", "blue");
                                document.getElementById("cvt").value = '22';

                            } else if (b == 'NO PROBLEM' && cvt == 38) {
                                $("#result").css("color", "blue");
                                document.getElementById("cvt").value = '38';

                            }
                        }
                        if (location == 1) {
                            if (cvt == '14') {
                                document.getElementById("itemcode").value = '100';
                                document.getElementById("lengthUse").value = '1.5m';
                            } else if (cvt == '22') {
                                document.getElementById("itemcode").value = '110';
                                document.getElementById("lengthUse").value = '1.5m';
                            } else if (cvt == '38') {
                                document.getElementById("itemcode").value = '120';
                                document.getElementById("lengthUse").value = '1.5m';
                            } else {
                                document.getElementById("itemcode").value = '';
                                document.getElementById("lengthUse").value = '';
                            }
                        } else if (location == 2) {
                            if (cvt == '14') {
                                document.getElementById("itemcode").value = '130';
                                document.getElementById("lengthUse").value = '2.0m';
                            } else if (cvt == '22') {
                                document.getElementById("itemcode").value = '140';
                                document.getElementById("lengthUse").value = '2.0m';
                            } else if (cvt == '38') {
                                document.getElementById("itemcode").value = '150';
                                document.getElementById("lengthUse").value = '2.0m';
                            } else {
                                document.getElementById("itemcode").value = '';
                                document.getElementById("lengthUse").value = '';
                            }
                        } else if (location == 3) {
                            if (cvt == '14') {
                                document.getElementById("itemcode").value = '160';
                                document.getElementById("lengthUse").value = '3.5m';
                            } else if (cvt == '22') {
                                document.getElementById("itemcode").value = '170';
                                document.getElementById("lengthUse").value = '3.5m';
                            } else if (cvt == '38') {
                                document.getElementById("itemcode").value = '180';
                                document.getElementById("lengthUse").value = '3.5m';
                            } else {
                                document.getElementById("itemcode").value = '';
                                document.getElementById("lengthUse").value = '';
                            }
                        }
                    }


                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }

        function eContract() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "../Hacchu_Plan_Monitoring/HacchuChecklist/check/ElectricContract.php",
                data: 'ElectrictContract=' + $("#ElectrictContract").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                    var number1 = document.getElementById("mbreaker").value = document.getElementById("email-availability-status").innerHTML;
                    var number2 = document.getElementById("mbreaker").value;
                    var mb = number2.slice(0, -1);
                    var kva = document.getElementById("kva").value;
                    var ElectrictContract = document.getElementById("ElectrictContract").value;
                    var cvt = document.getElementById("cvt").value;
                    var location = document.getElementById("location").value;
                    var len = document.getElementById("length").value;
                    var deduct = len - 5;
                    var divide = 17.8 * deduct * mb / (1000 * cvt);
                    var equal = divide.toFixed(2);

                    if (mb >= 75) {
                        document.getElementById("cvt").value = '22';
                    }

                    //console.log(mb)
                    if (cvt != '' && len != '') {
                        if (equal >= 2) {
                            var a = document.getElementById("result").innerHTML = "PROBLEM";
                            if (a == 'PROBLEM' && cvt == 14) {
                                $("#result").css("color", "red");
                                document.getElementById("cvt").value = '22';

                            } else if (a == 'PROBLEM' && cvt == 22) {
                                $("#result").css("color", "red");
                                document.getElementById("cvt").value = '38';
                            }
                        } else {
                            var b = document.getElementById("result").innerHTML = "NO PROBLEM";
                            if (b == 'NO PROBLEM' && cvt == 14) {
                                $("#result").css("color", "blue");
                                document.getElementById("cvt").value = '14';

                            } else if (b == 'NO PROBLEM' && cvt == 22) {
                                $("#result").css("color", "blue");
                                document.getElementById("cvt").value = '22';

                            } else if (b == 'NO PROBLEM' && cvt == 38) {
                                $("#result").css("color", "blue");
                                document.getElementById("cvt").value = '38';

                            }
                        }
                        if (location == 1) {
                            if (cvt == '14') {
                                document.getElementById("itemcode").value = '100';
                                document.getElementById("lengthUse").value = '1.5m';
                            } else if (cvt == '22') {
                                document.getElementById("itemcode").value = '110';
                                document.getElementById("lengthUse").value = '1.5m';
                            } else if (cvt == '38') {
                                document.getElementById("itemcode").value = '120';
                                document.getElementById("lengthUse").value = '1.5m';
                            } else {
                                document.getElementById("itemcode").value = '';
                                document.getElementById("lengthUse").value = '';
                            }
                        } else if (location == 2) {
                            if (cvt == '14') {
                                document.getElementById("itemcode").value = '130';
                                document.getElementById("lengthUse").value = '2.0m';
                            } else if (cvt == '22') {
                                document.getElementById("itemcode").value = '140';
                                document.getElementById("lengthUse").value = '2.0m';
                            } else if (cvt == '38') {
                                document.getElementById("itemcode").value = '150';
                                document.getElementById("lengthUse").value = '2.0m';
                            } else {
                                document.getElementById("itemcode").value = '';
                                document.getElementById("lengthUse").value = '';
                            }
                        } else if (location == 3) {
                            if (cvt == '14') {
                                document.getElementById("itemcode").value = '160';
                                document.getElementById("lengthUse").value = '3.5m';
                            } else if (cvt == '22') {
                                document.getElementById("itemcode").value = '170';
                                document.getElementById("lengthUse").value = '3.5m';
                            } else if (cvt == '38') {
                                document.getElementById("itemcode").value = '180';
                                document.getElementById("lengthUse").value = '3.5m';
                            } else {
                                document.getElementById("itemcode").value = '';
                                document.getElementById("lengthUse").value = '';
                            }
                        }
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
                        <a class="active" href="kansen_size.php">
                            <!--<i class="fa fa-dashboard"></i>-->
                            <span>Kansen Size</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Kansen Size</a></li>
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
                <center><label class="head">KANSEN SIZE</label></center>
                <ul class="nav nav-tabs" style="font-size:20px">


                </ul>

                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <form id="myForm" method="POST">
                            <table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                <thead>
                                    <div data-role="header" class="" id="FireAlarmAboveWindow">
                                        <th colspan="6">
                                            <h1>ESTIMATING WIRE FROM SWITCHBOARD TO BB UNDER HACCHU 658</h1>
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
                                                    <center>
                                                        <form="myForm">
                                                            <div class="col-sm-3">
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <!--<p>* Press<span style="color:red;font-weight:bold"> ENTER </span>after you put the Customer Code *</p>-->
                                                                <label style="font-size:20px;color:black;" class="space">Customer Code:</label>
                                                                <input type="text" name="code_number" id="code_number" onkeypress="setTimeout(kva_check1, 10)" onKeyup="setTimeout(kva_check1, 10)" onblur="setTimeout(kva_check1, 10)" onmousemove="setTimeout(kva_check1, 10)" style="font-size:20px;width:150px;text-align:center;color:red;background-color:#b6bdc6;" maxlength="12" />

                                                            </div>
                                                            <div class="col-sm-4">
                                                                <br><br><br>
                                                                <span>
                                                                    <?php        /* $str = '318 W/ EXIXTING ITEM CODE';
															preg_match_all('!\d+!', $str, $matches);
															print_r($matches); */
                                                                    include_once 'include/hrdapps57.php';
                                                                    $query = "SELECT DISTINCT ElectrictContract FROM kva_references ";
                                                                    $result = $db_connect->query($query);
                                                                    ?>
                                                                    KVA:
                                                                    <input type="text" id="kva" name="kva" class="kva hide">
                                                                    <select id="ElectrictContract" name="ElectrictContract" onchange="setTimeout(eContract,20),setTimeout(mBreaker,10)" required="required" style="font-size:30px;color:blue;">
                                                                        <option value=""></option>
                                                                        <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                                                            <option value="<?php echo $row['ElectrictContract'] ?>"><?php echo $row['ElectrictContract'] ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    CVT:
                                                                    <select id="cvt" name="cvt" class="cvt" onclick="setTimeout(mBreaker,10),setTimeout(eContract,20)" onchange="setTimeout(mBreaker,10),setTimeout(eContract,20)" placeholder="CVT" style="font-size:30px;color:blue;" required="required">
                                                                        <option value=""></option>
                                                                        <option value="14">CVT14</option>
                                                                        <option value="22">CVT22</option>
                                                                        <option value="38">CVT38</option>
                                                                        <option value="60">CVT60</option>
                                                                    </select>
                                                                    <input type="text" id="mbreaker" name="mbreaker" class="mbreaker hide">
                                                                    <label>657:</label>
                                                                    <input type="text" id="length" name="length" class="length" onkeyup="setTimeout(mBreaker,10),setTimeout(eContract,20)" placeholder="Length" style="font-size:30px;width:100px;color:blue;text-align:center;" required="required"><br>
                                                                    <span style="color:red;font-size:20px">IF 15KVA (75A) above - USE CVT22</span>

                                                                </span>
                                                                <p id="result" class="result hide" style="font-size:50px;"></p>
                                                                <span class="hidden" id="email-availability-status"></span>

                                                            </div>
                                                            <div class="col-sm-4">
                                                                <br><br><br>
                                                                <center>
                                                                    <label style="font-size:15px;">Location of BB & SB:</label>
                                                                    <select id="location" name="location" class="location" onclick="setTimeout(mBreaker,10),setTimeout(eContract,20)" onchange="setTimeout(mBreaker,10),setTimeout(eContract,20)" placeholder="CVT" style="font-size:20px;color:blue;" required="required">
                                                                        <option value="0"></option>
                                                                        <option value="1">TOP & BOTTOM / BACK TO BACK</option>
                                                                        <option value="2">SIDE BY SIDE W/ KABE FUKASU</option>
                                                                        <option value="3">SIDE BY SIDE W/O KABE FUKASU</option>

                                                                    </select><br><br>

                                                                    <label style="font-size:20px;color:Red">Item Code : </label>
                                                                    <input type="text" id="itemcode" name="itemcode" class="itemcode" style="font-size:30px;width:100px;color:red;text-align:center;" readonly>
                                                                    <label style="font-size:20px;color:Red">Length : </label>
                                                                    <input type="text" id="lengthUse" name="lengthUse" class="lengthUse" style="font-size:30px;width:100px;color:red;text-align:center;" readonly>
                                                                    <br><br><br>

                                                            </div>
                        </form>
                        </center>
                        </span>

                        </td>
                        <tr>
                            <td class="form-inline" colspan="7" style="vertical-align:middle;">

                                <input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
                            </td>
                        </tr>
                        </tr>

                        </tbody>

                        </table>
                        <div id="image_guide" align="center"></div>
                        </form>


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
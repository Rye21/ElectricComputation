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

$sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 4";
$conn->query($sql);

$sql = "SELECT visits FROM views WHERE id = 4";
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

    <title>WINDOW AND WINDOW SILL</title>

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
    //$(document).ready(function() {
    function compute() {


        var ws = parseFloat($('input[name=ws]').val() || 0);
        var wh = parseFloat($('input[name=wh]').val() || 0);
        //var wc= $('#wc').val();
        var cons = parseFloat($('input[name=cons]').val() || 0);
        var sh = parseFloat($('input[name=sh]').val() || 0);
        var heightitem4 = parseFloat($('select[name=heightitem4]').val() || 0);
        var heightitem2B = parseFloat($('input[name=heightitem2B]').val() || 0);
        var st_hp2 = parseFloat($('input[name=st_hp2]').val() || 0);
        var heights3 = parseFloat($('input[name=heights3]').val() || 0);
        var result8 = 'POSSIBLE';
        var result9 = 'NOT POSSIBLE';
        var standa = 300;

        //var Total = wh + sh + cons + heightitem4 * ws ;
        var Total = ((ws * wh) + sh + cons + heightitem2B);


        $('#Total').val(Total);

        if (heights3 != '') {
            if (heights3 >= Total) {
                document.getElementById("demo3").value = result8;
                document.getElementById("demo3").style.color = "green";
            } else if (heights3 <= Total) {
                document.getElementById("demo3").value = result9;
                document.getElementById("demo3").style.color = "red";
            }
        } else if (heights3 == "" && ws != '') {
            if (st_hp2 >= Total) {
                document.getElementById("demo3").value = result8;
                document.getElementById("demo3").style.color = "green";
            } else if (st_hp2 <= Total) {
                document.getElementById("demo3").value = result9;
                document.getElementById("demo3").style.color = "#ff0000";
            }
        }
        setTimeout(compute, 500);

    }
    /*  $('#ws, #wc,#sh,#cons,#heightitem4,#heights3').change(compute);
    		
    	 }); */

    function compute1() {
        if (!$("#height1").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)) {
            //alert('Please Input Control Number..!')

        }
        var ws1 = parseFloat($('input[name=ws1]').val() || 0);
        var wh1 = parseFloat($('input[name=wh1]').val() || 0);
        var sashheight = parseFloat($('input[name=sashheight]').val() || 0);
        var windowconstant = parseFloat($('input[name=windowconstant]').val() || 0);
        var heightitemB = parseFloat($('input[name=heightitemB]').val() || 0);
        var st_hp = parseFloat($('input[name=st_hp]').val() || 0);
        var demo1 = document.getElementById("demo1").value;
        var demo12 = document.getElementById("demo12").value;
        var demo13 = document.getElementById("demo12").value;
        var height1 = parseFloat($('input[name=height1]').val() || 0);
        var result = 'POSSIBLE';
        var result1 = 'NOT POSSIBLE';
        var stand = 300;

        //var height =   sashheight + windowconstant + heightitemB  ;
        var height = ((ws1 * wh1) + sashheight + windowconstant + heightitemB);
        var heightplus = ((ws1 * wh1) + sashheight + windowconstant + heightitemB);
        var heightminus = ((ws1 * wh1) + sashheight - windowconstant - heightitemB);
        $('#height').val(height);
        if (demo1 == result && demo12 == result1) {
            document.getElementById("demo13").value = result1;
            document.getElementById("demo13").style.color = "#ff0000";
        } else if (demo1 == result && demo12 == result) {
            document.getElementById("demo13").value = result;
            document.getElementById("demo13").style.color = "green";
        } else if (demo1 == result1 && demo12 == result) {
            document.getElementById("demo13").value = result1;
            document.getElementById("demo13").style.color = "#ff0000";
        } else if (demo1 == result1) {
            document.getElementById("demo13").value = result1;
            document.getElementById("demo13").style.color = "#ff0000";
        } else if (demo1 == result) {
            document.getElementById("demo13").value = result;
            document.getElementById("demo13").style.color = "green";
        } else if (demo1 == result1) {
            document.getElementById("demo13").value = result1;
            document.getElementById("demo13").style.color = "#ff0000";
        } else if (demo12 == result1) {
            document.getElementById("demo13").value = result1;
            document.getElementById("demo13").style.color = "#ff0000";
        } else if (demo12 == result) {
            document.getElementById("demo13").value = result;
            document.getElementById("demo13").style.color = "green";
        } else if (demo1 == "" && demo12 == "") {
            document.getElementById("demo13").value = '';
        }


        if (demo1 == result1) {
            document.getElementById("ws1").disabled = true;
        } else if (height1 != '') {
            document.getElementById("ws1").disabled = false;
        } else if (demo1 == result) {
            document.getElementById("ws1").disabled = false;
        } else if (demo1 == "" && demo12 == "") {
            document.getElementById("ws1").disabled = false;
        }

        if (height1 == "") {
            document.getElementById("demo12").value = '';
        }
        if (ws1 == "") {
            //document.getElementById("demo13").value = '';
            document.getElementById("demo1").value = '';
        }

        if (height1 != "") {
            if (height1 >= height) {
                //alert(heightplus)	;							
                document.getElementById("demo12").value = result1;
                document.getElementById("demo12").style.color = "#ff0000";
                $('#height').val(heightplus);
                if (height1 == heightplus) {
                    //alert(heightplus)	;							
                    document.getElementById("demo12").value = result;
                    document.getElementById("demo12").style.color = "green";
                    //$('#height').val(heightplus);				
                } else if (height1 > heightplus) {
                    //alert(heightplus)	;							
                    document.getElementById("demo12").value = result;
                    document.getElementById("demo12").style.color = "green";
                    //$('#height').val(heightplus);				
                }
            } else if (height1 <= height) {
                document.getElementById("demo12").value = result1;
                document.getElementById("demo12").style.color = "#ff0000";
                $('#height').val(heightminus);

                if (height1 == heightminus) {
                    document.getElementById("demo12").value = result;
                    document.getElementById("demo12").style.color = "green";
                } else if (height1 <= heightminus) {
                    document.getElementById("demo1").value = result;
                    document.getElementById("demo12").value = result;
                    document.getElementById("demo12").style.color = "green";
                }
                /* document.getElementById("demo12").value = result1;
                document.getElementById("demo12").style.color = "#ff0000"; */

                //alert(height);
            } else if (height1 == '' && ws1 == '') {
                document.getElementById("demo12").value = '';
            }
        } else if (sashheight != "") {
            if (st_hp >= height) {
                document.getElementById("demo1").value = result;
                document.getElementById("demo1").style.color = "green";
            } else if (st_hp <= height) {
                //alert(st_hp);
                document.getElementById("demo1").value = result1;
                document.getElementById("demo1").style.color = "#ff0000";
            }
        }
        /* } else if  (height1 == "" && ws1 != ''){
        	if (st_hp >= height){
        		document.getElementById("demo1").value = result;
        		document.getElementById("demo1").style.color = "green";	
        	}else if(st_hp <= height ){
        		//alert(st_hp);
        		document.getElementById("demo1").value = result1;
        		document.getElementById("demo1").style.color = "#ff0000";
        	} 
        }  */

        setTimeout(compute1, 500);
    }
    /* $('#sashheight,#windowconstant,#heightitem,#height1').change(compute1);
    		
    	 }); */
    ////////////////////////////////////////////////////////////////////////
    //$(document).ready(function() {
    function compute2() {


        var sashheight1 = parseFloat($('input[name=sashheight1]').val() || 0);
        var windowconstant1 = parseFloat($('input[name=windowconstant1]').val() || 0);
        //var heightitem1= parseFloat($('select[name=heightitem1]').val() || 0 );
        var heightitem1B = parseFloat($('input[name=heightitem1B]').val() || 0);
        var st_hp1 = parseFloat($('input[name=st_hp1]').val() || 0);
        var heights = parseFloat($('input[name=heights]').val() || 0);
        var result2 = 'POSSIBLE';
        var result3 = 'NOT POSSIBLE';
        var stan = 300;



        var height2 = sashheight1 - windowconstant1 - heightitem1B;
        //var height2 =   sashheight + windowconstant + heightitem  ;

        //if(sashheight && windowconstant && heightitem  !==  "" ) {
        $('#height2').val(height2);
        if (heightitem1B == '') {
            document.getElementById("demo2").value = '';
        }
        if (heights != "") {
            if (heights <= height2) {
                document.getElementById("demo2").value = result2;
                document.getElementById("demo2").style.color = "green";
            } else if (heights >= height2) {
                document.getElementById("demo2").value = result3;
                document.getElementById("demo2").style.color = "#ff0000";
            }
        } else if (heights == "" && sashheight1 != '') {
            if (st_hp1 <= height2) {
                document.getElementById("demo2").value = result2;
                document.getElementById("demo2").style.color = "green";
            } else if (st_hp1 >= height2) {
                document.getElementById("demo2").value = result3;
                document.getElementById("demo2").style.color = "#ff0000";
            }
        }
        setTimeout(compute2, 500);
    }
    /*  $('#sashheight1,#windowconstant1,#heightitem1,#heights').change(compute2);
    		
    	 }); */
    /* $(document).ready(function() {
			 function compute3() {
             
             
					var windowheight2 = parseFloat($('input[name=windowheight2]').val() || 0 );
					var windowconstant2 = parseFloat($('input[name=windowconstant2]').val() || 0 );
					var heightitem2= parseFloat($('select[name=heightitem2]').val() || 0 );
					var heights3 = parseFloat($('input[name=heights3]').val() || 0 );
					var result4 = 'POSSIBLE';		
					var result5 = 'NOT POSSIBLE';	
					var standa = 300;
					
					var height3 =   windowheight2 + windowconstant2 + heightitem2  ;
					
					$('#height3').val(height3);
						
					if(heights3 != ""){
						if (heights3 >= height3){
							document.getElementById("demo3").value = result4;
							document.getElementById("demo3").style.color = "green"; 
						 }else if(heights3 <= height3 ){
							document.getElementById("demo3").value = result5;
							document.getElementById("demo3").style.color = "#ff0000";
						}
					} else if (heights3 == "" && windowheight2 != ''){
						if (standa >= height3){
							document.getElementById("demo3").value = result4;
							document.getElementById("demo3").style.color = "green"; 
						 }else if(standa <= height3 ){
							document.getElementById("demo3").value = result5;
							document.getElementById("demo3").style.color = "#ff0000";
						 } 
					} 
				}          
            $('#windowheight2,#windowconstant2,#heightitem2,#heights3').change(compute3);
    		
    	 }); */
    //$(document).ready(function() {
    function compute4() {


        var windowheight3 = parseFloat($('input[name=windowheight3]').val() || 0);
        var windowconstant3 = parseFloat($('input[name=windowconstant3]').val() || 0);
        var heightitem3 = parseFloat($('select[name=heightitem3]').val() || 0);
        var heightitem3B = parseFloat($('input[name=heightitem3B]').val() || 0);
        var st_hp3 = parseFloat($('input[name=st_hp3]').val() || 0);
        var heights4 = parseFloat($('input[name=heights4]').val() || 0);
        var result6 = 'POSSIBLE';
        var result7 = 'NOT POSSIBLE';
        var standar = 300;

        var height4 = windowheight3 - windowconstant3 - heightitem3B;

        $('#height4').val(height4);

        if (heights4 != "") {
            if (heights4 <= height4) {
                document.getElementById("demo4").value = result6;
                document.getElementById("demo4").style.color = "green";
            } else if (heights4 >= height4) {
                document.getElementById("demo4").value = result7;
                document.getElementById("demo4").style.color = "#ff0000";
            }
        } else if (heights4 == "" && windowheight3 != '') {
            if (st_hp3 <= height4) {
                document.getElementById("demo4").value = result6;
                document.getElementById("demo4").style.color = "green";
            } else if (st_hp3 >= height4) {
                document.getElementById("demo4").value = result7;
                document.getElementById("demo4").style.color = "#ff0000";
            }
        }
        setTimeout(compute4, 500);
    }
    /*  $('#windowheight3,#windowconstant3,#heightitem3,#heights4').change(compute4);
    		
    	 }); */

    function showTable() {
        document.getElementById('table2').style.visibility = "visible";
        document.getElementById('table2').style.display = "inline-table";
        document.getElementById('show1').style.display = "none";
        document.getElementById('show2').style.display = "none";
        document.getElementById('show3').style.display = "none";
    }

    function showTable1() {
        document.getElementById('table').style.visibility = "visible";
        document.getElementById('table').style.display = "inline-table";
        document.getElementById('show').style.display = "none";
        document.getElementById('show1').style.display = "none";
        document.getElementById('show2').style.display = "none";
        document.getElementById('show3').style.display = "none";
    }

    function showTable2() {
        document.getElementById('table4').style.visibility = "visible";
        document.getElementById('table4').style.display = "inline-table";
        document.getElementById('show').style.display = "none";
        document.getElementById('show1').style.display = "none";
        document.getElementById('show3').style.display = "none";
    }

    function showTable3() {
        document.getElementById('table3').style.visibility = "visible";
        document.getElementById('table3').style.display = "inline-table";
        document.getElementById('show').style.display = "none";
        document.getElementById('show1').style.display = "none";
        document.getElementById('show2').style.display = "none";
    }


    /* function showTable2(){
    document.getElementById('table3').style.visibility = "visible";
    document.getElementById('table3').style.display = "inline-table";
    }
    function showTable3(){
    document.getElementById('demo2').style.visibility = "visible";
    document.getElementById('demo2').style.display = "inline-table";
    } */
    function hideTable() {
        document.getElementById('table').style.display = "none";
        //document.getElementById('table2').style.display = "none";
        document.getElementById('table3').style.display = "none";
        document.getElementById('table4').style.display = "none";

        /* document.getElementById('table3').style.display = "none";
        document.getElementById('demo2').style.display = "none";  */
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

    .column {

        padding: 15px;
    }

    select {
        width: 400px;
        text-align-last: center;
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
                    </li>
                    <li class="sub-menu">
                        <a class="active" href="window_new.php">
                            <!--<i class="fa fa-dashboard"></i>-->
                            <span>WINDOW AND WINDOW SILL</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Window</a></li>
                        </ul>
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
                <center><label class="head">WINDOW AND WINDOW SILL COMPUTATION</label></center>
                <ul class="nav nav-tabs" style="font-size:20px">
                    <!--<li ><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Window Height</a></li>-->

                </ul>

                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade">
                        <!--<form id="myForm">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							  <div data-role="header">
								<th colspan="5"><h1>Window Height Computation</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="5" style="border-style:solid"><br>
									<center><p style="color:blue;font-size:20px;" class="space">Formula:   Last Two Digit of Window Serial  x  Window Constant  +  Sash Height </p></center>	
								</td>									
							</tr>
							<tr>
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Last 2 Digit of Window Serial:</label>
									<input type="number" name="ws" id="ws" value="" style="font-size:20px;width:100px;color;text-align:center" />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x 30.3  
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +  
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Elevated Height:</label>
										<input type="number" name="sh" id="sh" value="" style="font-size:20px;width:100px;color;text-align:center" />
										<input type="hidden" name="wc" id="wc" value="30.3"  />								
							</tr>
							<tr>
								<td class="form-inline" colspan="5" style="text-align:center;vertical-align:middle;"><br>
									<center><label style="font-size:18px;color:black" class="space">                      Total:</label>
										<input type="" name="Total" id="Total" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
										<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold"></center>
								</td>
							</tr>	
						</tbody>							
					</table>					
				</form>-->
                    </div>
                    <!----------------------------------------------WINDOW SILL------------------------->


                    <body onload="javascript:hideTable()">
                        <!--<input type='button' class="" id="show1"  name="show1" onClick='javascript:showTable1();' value='show1'>
			<input type='button' class="" id="show" name="show" onClick='javascript:showTable();' value='show'>-->

                        <input type='button' class="hide" id="hide" name="hide" onClick='javascript:hideTable();' value='hide'>


                        <div id="tab2" class="tab-pane fade in active">

                            <center>
                                <div class="row">
                                    <div class="column">
                                        <!--<button style=";border-radius:20%;border-color:gray" type='button' id="show"  name="show" onClick='javascript:showTable();' value='show'><img src="assets/img/high.PNG" id="sample" alt="" style="width:250px;height:250px;border-radius:20%;" /></button>
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="http://hrdapps33/denkicomputation/window_new_case2.php"><button style=";border-radius:20%;border-color:gray" type='button' id="show1" name="show1" ><img src="assets/img/low.PNG" id="sample" alt="" style="width:250px;height:250px;border-radius:20%;" /></button></a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button style=";border-radius:20%;border-color:gray" type='button' id="show2" name="show2" onClick='javascript:showTable2();' value='show2'><img src="assets/img/high2.PNG" id="sample" alt="" style="width:250px;height:250px;border-radius:20%;" /></button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button style=";border-radius:20%;border-color:gray" type='button' id="show3" name="show3" onClick='javascript:showTable3();' value='show3'><img src="assets/img/low2.PNG" id="sample" alt="" style="width:250px;height:250px;border-radius:20%;" /></button>
							<br>-->

                                    </div>

                                </div>
                            </center>

                            <center>
                                <table id="table" class="table table-condensed" border="2" style="background-color:aliceblue;width:80%;border-style:solid">
                                    <!--<thead>
							<div data-role="header">
								<th colspan="6"><h1>Window Computation</h1></th>
							</div>	
						</thead>-->
                                    <tbody>



                                </table>

                            </center>
                            </form>

                            <center>
                                <table id="table2" class="table table-condensed" border="2" style="background-color:aliceblue;width:100%;border-style:solid">
                                    <thead>
                                        <div data-role="header">
                                            <th colspan="6">
                                                <h1>Window Computation Case #1</h1>
                                            </th>
                                        </div>
                                    </thead>
                                    <!--<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red">Formula 1: ELEVATED HEIGHT IS HIGHER THAN ITEM HEIGHT </span><br> Elevated Height  <span style="color:red;">-</span>  38  <span style="color:red;">-</span>  Item Half Size = RESULT  </p>	
								</td>									
							</tr>-->
                                    <tr>
                                        <?php
                                        function room2()
                                        {
                                            try {
                                                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
                                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $pdo->query("SET NAMES utf8");
                                                $stmt = $pdo->prepare("SELECT window_sill FROM computation limit 12");
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
                                        foreach (room2() as $value) {
                                            $option1 .= '<option value="' . $value["window_sill"] . '">' . $value["window_sill"] . '</option>';
                                        }
                                        ?>

                                        <td style="vertical-align:middle;width:500px">
                                            <div class="container-fluid">
                                                <form id="myForm1" method="post" enctype="multipart/form-data">
                                                    *<span style="color:red;font-size:15px;">Please Input first 2 or 3 digit window serial</span>
                                                    <input style="height:50px;width:40%;font-size:20px;text-align:center;color:blue" class="form-control" id="selectme" name='selectme' value="<?php echo @$_POST['selectme']; ?>" onblur="this.form.submit()" placeholder="Serial"><br>
                                                    <label style="font-size:18px;color:black" class="space">Item: </label>
                                                    <select style="height:50px;width:60%;font-size:20px;text-align:center;color:blue" class="heightitem1" id="heightitem1" name="heightitem1" required="required" onchange="setTimeout(compute2, 10)" onkeypress="setTimeout(compute2, 10)">
                                                        <option value=""></option>
                                                        <option><?php echo $option1; ?></option>
                                                    </select>
                                                    <textarea id="heightitem1A" name="heightitem1A" class="heightitem1A hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                                    <input type="text" name="heightitem1B" id="heightitem1B" class="heightitem1B hide" />
                                                    <textarea id="st_h1" name="st_h1" class="st_h1 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                                    <input type="text" name="st_hp1" id="st_hp1" class="st_hp1 hide" />
                                                    <br>
                                                    <br>
                                                    <label style="font-size:18px;color:black" class="space">Elevated Height: </label>
                                                    <input type="number" name="sashheight1" id="sashheight1" value="" style="height:50px;width:60%;font-size:25px;color:blue;text-align:center" />
                                                    <input type="hidden" name="windowconstant1" id="windowconstant1" value="38" />
                                                    <br>
                                                    <br>

                                                    <label style="font-size:18px;color:black" class="space">Requested Height:</label>
                                                    <input type="" name="heights" id="heights" value="" style="height:50px;width:60%;font-size:25px;color:blue;text-align:center" /><br><br>
                                                    <label style="font-size:35px;color:red;font-weight:bold;" class="space">Result:</label><br>
                                                    <input type="hidden" name="height2" id="height2" value="" style="font-size:20px;width:150px;text-align:center" class="space" disabled />
                                                    <input type="text" id="demo2" style="width:400px;height:150px;font-size:45px;font-weight:bold;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled>
                                                    <a href="http://hrdapps33/denkicomputation/window_new_case1.php">
                                                        <input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="font-size:18px;color:black;font-weight:bold">
                                                    </a>
                                                    <a href="http://hrdapps33/denkicomputation/window_new.php">
                                                        <input type="button" value="BACK TO MENU" class="bg-success" style="font-size:18px;color:black;font-weight:bold">
                                                    </a>
                                            </div>
                                        </td>
                                        <td colspan="5" style="text-align:center;width:500%;">

                                            <iframe style="width:100%;height:600px;overflow:visible" src="<?php
                                                                                                            /*  $files = glob("../FYI/MANUAL/*.pdf");
										print_r($files) ;  */
                                                                                                            $files = glob("docsupport/" . @$_POST['selectme'] . "*.pdf");
                                                                                                            $nums = count($files);

                                                                                                            //echo $hello;
                                                                                                            if ($nums == 1) {
                                                                                                                echo 'http://hrdapps33/denkicomputation/docsupport/' . @$_POST["selectme"] . '.pdf';
                                                                                                            } else if ($nums == 0) {
                                                                                                                echo 'http://hrdapps33/denkicomputation/denkilogo/nofound.png';
                                                                                                            } else {
                                                                                                                echo 'http://hrdapps33/denkicomputation/denkilogo/showhere.png';
                                                                                                            }


                                                                                                            ?>">

                                            </iframe>
                                            <input type="hidden" value="<?= $nums; ?>" id="nums" name="nums" style="font-size:18px;color:black;font-weight:bold">
                                        </td>
                                    </tr>
                                </table>
                            </center>
                            </form>

                            <form id="myForm3">
                                <center>
                                    <table id="table3" class="table table-condensed" border="2" style="background-color:aliceblue;width:80%;border-style:solid">
                                        <thead>
                                            <div data-role="header">
                                                <th colspan="6">
                                                    <h1>Window Computation</h1>
                                                </th>
                                            </div>
                                        </thead>

                                        <!--<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;">Formula 1: ELEVATED HEIGHT IS LOWER THAN ITEM HEIGHT </span><br> (( Last 2 Digit Window Serial  <span style="color:red;">x</span>  30.3)  <span style="color:red;">+</span>  Item <span style="color:red;">+</span> Elevated Height <span style="color:red;">+</span> 38 ) = RESULT </p>	
								</td>									
							</tr>-->

                                        <tr>
                                            <?php
                                            function room3()
                                            {
                                                try {
                                                    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
                                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    $pdo->query("SET NAMES utf8");
                                                    $stmt = $pdo->prepare("SELECT window_sill FROM computation limit 12");
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
                                            $option2 = '';
                                            foreach (room3() as $value) {
                                                $option2 .= '<option value="' . $value["window_sill"] . '">' . $value["window_sill"] . '</option>';
                                            }
                                            ?>

                                            <td style="vertical-align:middle;width:500px">
                                                <div class="container-fluid">
                                                    <label style="font-size:18px;color:black" class="space">Item: </label>
                                                    <select style="height:50px;width:60%;font-size:20px;text-align:center;color:blue" class="heightitem4" id="heightitem4" name="heightitem4" required="required" onchange="setTimeout(compute, 10)" onkeypress="setTimeout(compute, 10)">
                                                        <option value=""></option>
                                                        <option><?php echo $option2; ?></option>
                                                    </select>
                                                    <textarea id="heightitem2A" name="heightitem2A" class="heightitem2A hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                                    <input type="text" name="heightitem2B" id="heightitem2B" class="heightitem2B hide" />
                                                    <textarea id="st_h2" name="st_h2" class="st_h2 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                                    <input type="text" name="st_hp2" id="st_hp2" class="st_hp2 hide" />
                                                    <br>
                                                    <br>
                                                    <label style="font-size:18px;color:black" class="space">Elevated Height: </label>
                                                    <input type="number" name="sh" id="sh" value="" style="height:50px;width:60%;font-size:25px;color:blue;text-align:center" />
                                                    <input type="hidden" name="cons" id="cons" value="38" />
                                                    <br>
                                                    <br>
                                                    <label style="font-size:18px;color:black">Last 2 Digit of Window Serial:</label>
                                                    <input type="number" name="ws" id="ws" value="" style="height:50px;width:42%;font-size:25px;color:blue;text-align:center" />
                                                    <input type="hidden" name="wh" id="wh" value="30.3" />
                                                    <br>
                                                    <br>
                                                    <label style="font-size:18px;color:black" class="space">Requested Height:</label>
                                                    <input type="" name="heights3" id="heights3" value="" style="height:50px;width:60%;font-size:25px;color:blue;text-align:center" /><br><br>
                                                    <input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="font-size:18px;color:black;font-weight:bold">
                                                    <input type="button" value="BACK TO MENU" class="bg-success" onClick="window.location.href=window.location.href" style="font-size:18px;color:black;font-weight:bold">
                                                </div>
                                            </td>
                                            <td class="" colspan="5" style="text-align:center;">
                                                <label style="font-size:35px;color:red;font-weight:bold;" class="space">Result:</label><br>
                                                <input type="hidden" name="Total" id="Total" value="" style="font-size:20px;width:150px;text-align:center" class="space" disabled />
                                                <input type="text" id="demo3" style="width:400px;height:150px;font-size:45px;font-weight:bold;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </form>

                            <form id="myForm4">


                                <center>
                                    <table id="table4" class="table table-condensed" border="2" style="background-color:aliceblue;width:80%;border-style:solid">
                                        <thead>
                                            <div data-role="header">
                                                <th colspan="6">
                                                    <h1>Window Computation</h1>
                                                </th>
                                            </div>
                                        </thead>
                                        <!--<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red">Formula 1: ELEVATED HEIGHT IS HIGHER THAN ITEM HEIGHT </span><br> Elevated Height  <span style="color:red;">-</span>  38  <span style="color:red;">-</span>  Item Half Size = RESULT  </p>	
								</td>									
							</tr>-->
                                        <tr>
                                            <?php
                                            function room4()
                                            {
                                                try {
                                                    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez', 'root', 'admin');
                                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    $pdo->query("SET NAMES utf8");
                                                    $stmt = $pdo->prepare("SELECT window_sill FROM computation limit 12");
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
                                            $option3 = '';
                                            foreach (room4() as $value) {
                                                $option3 .= '<option value="' . $value["window_sill"] . '">' . $value["window_sill"] . '</option>';
                                            }
                                            ?>


                                            <td style="vertical-align:middle;width:500px">
                                                <div class="container-fluid">
                                                    <label style="font-size:18px;color:black" class="space">Item: </label>
                                                    <select style="height:50px;width:60%;font-size:20px;text-align:center;color:blue" class="heightitem3" id="heightitem3" name="heightitem3" required="required" onchange="setTimeout(compute4, 10)" onkeypress="setTimeout(compute4, 10)">
                                                        <option value=""></option>
                                                        <option><?php echo $option3; ?></option>
                                                    </select>
                                                    <textarea id="heightitem3A" name="heightitem3A" class="heightitem3A hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                                    <input type="text" name="heightitem3B" id="heightitem3B" class="heightitem3B hide" />
                                                    <textarea id="st_h3" name="st_h3" class="st_h3 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;"></textarea>
                                                    <input type="text" name="st_hp3" id="st_hp3" class="st_hp3 hide" />
                                                    <br>
                                                    <br>
                                                    <label style="font-size:18px;color:black" class="space">Elevated Height: </label>
                                                    <input type="number" name="windowheight3" id="windowheight3" value="" style="height:50px;width:60%;font-size:25px;color:blue;text-align:center" />
                                                    <input type="hidden" name="windowconstant3" id="windowconstant3" value="38" />
                                                    <br>
                                                    <br>
                                                    <label style="font-size:18px;color:black" class="space">Requested Height:</label>
                                                    <input type="" name="heights4" id="heights4" value="" style="height:50px;width:60%;font-size:25px;color:blue;text-align:center" /><br><br>
                                                    <input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="font-size:18px;color:black;font-weight:bold">
                                                    <input type="button" value="BACK TO MENU" class="bg-success" onClick="window.location.href=window.location.href" style="font-size:18px;color:black;font-weight:bold">
                                                </div>
                                            </td>
                                            <td class="" colspan="5" style="text-align:center;">
                                                <label style="font-size:35px;color:red;font-weight:bold;" class="space">Result:</label><br>
                                                <input type="" name="height4" id="height4" value="" style="font-size:20px;width:150px;text-align:center" class="space" disabled />
                                                <input type="text" id="demo4" style="width:400px;height:150px;font-size:45px;font-weight:bold;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </form>
                    </body>
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


            ///////////////////////////////////////////
            $('#heightitem1').click(function() {
                // alert( $('#selectme').val());
                var one = $('#selectme').val();
                var two = $('#heightitem1').val();
                var three = $('#nums').val();

                if (three == '0') {
                    alert('No Results Found..!')
                    document.getElementById("heightitem1").value = '';

                }
                // if(!$("#selectme").val().match(/^[0-9]{6}$/i)){
                if (!$("#selectme").val().match(/^[0-9]{2,3}$/i)) {
                    alert('Please Input Correct Serial..!')
                    document.getElementById("heightitem1").value = '';
                    return false
                }
                // document.getElementById("selectme").value =  1;
            });
            $('#sashheight1').click(function() {

                var one = $('#selectme').val();
                var two = $('#heightitem1').val();
                if (two == '') {
                    alert('Please Input Item');
                    document.getElementById("sashheight1").value = '';
                }


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

        $(function() {
            $(document).on('change', '#heightitem', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/std_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#st_h").text(data)
                    document.getElementById("st_hp").value = document.getElementById("st_h").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        $(function() {
            $(document).on('change', '#heightitem', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/item_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#heightitemA").text(data)
                    document.getElementById("heightitemB").value = document.getElementById("heightitemA").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        ///////////////////////////////////////////////////////
        $(function() {
            $(document).on('change', '#heightitem1', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/std_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#st_h1").text(data)
                    document.getElementById("st_hp1").value = document.getElementById("st_h1").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        $(function() {
            $(document).on('change', '#heightitem1', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/item_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#heightitem1A").text(data)
                    document.getElementById("heightitem1B").value = document.getElementById("heightitem1A").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        ///////////////////////////////////////////////////////
        $(function() {
            $(document).on('change', '#heightitem4', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/std_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#st_h2").text(data)
                    document.getElementById("st_hp2").value = document.getElementById("st_h2").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        $(function() {
            $(document).on('change', '#heightitem4', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/item_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#heightitem2A").text(data)
                    document.getElementById("heightitem2B").value = document.getElementById("heightitem2A").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        ///////////////////////////////////////////////////////
        $(function() {
            $(document).on('change', '#heightitem3', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/std_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#st_h3").text(data)
                    document.getElementById("st_hp3").value = document.getElementById("st_h3").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
        $(function() {
            $(document).on('change', '#heightitem3', function() {
                $.ajax({
                    type: 'post',
                    url: 'add/item_height.php',
                    data: {
                        id: $(this).val()
                    }
                }).done(function(data) {
                    $("#heightitem3A").text(data)
                    document.getElementById("heightitem3B").value = document.getElementById("heightitem3A").value;

                }).fail(function(data) {
                    alert('Failed')
                })
            })
        });
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

        /*   $(function(){
              $('select.styled').customSelect();
          }); */
    </script>

</body>

</html>
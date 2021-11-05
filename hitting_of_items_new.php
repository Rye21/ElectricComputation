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

    $sql = "UPDATE views SET visits = visits+1,date_updated = '$dateUpdate' WHERE id = 5";
    $conn->query($sql);

    $sql = "SELECT visits FROM views WHERE id = 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
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

    <title>HITTING OF ITEMS</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
	<link rel="icon" href="http://hrdapps33/DenkiComputation/assets/img/images.png" type="image/x-icon" /> 
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter0.css" />    
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
		
    	 $(document).ready(function() {
			 document.getElementById("tan").disabled = true;
			 document.getElementById("tan2").disabled = true;
		
    	  function compute() {
      
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
			  var lh3 = document.getElementById("rda").value; 
			  var tan = document.getElementById("tan").value;
			  var tan2 = document.getElementById("tan2").value;
			  var hh = document.getElementById("hh").value;
			  var lh = document.getElementById("lh").value;

              var a = 'Possible';
              var b = 'Not Possible';
			  var da = hh2 - lh2;
			  var da2 = hh2 - lh2 - 60;
			  var da3 = hh2 - lh2 + 60;
			  var jyoutan_highrange = 150;
			  var jyoutan_highrange_int = 200;
			  var katan_highrange = 150;
			  var jyoutan_lowrange = 150;
			  var katan_lowrange = 150;
				$('#da').val(da);
				
					if (da < lh3){
						document.getElementById("demo").value = b;
						document.getElementById("demo").style.color = "#ff0000";
					} else if(da >= lh3 ){
						document.getElementById("demo").value = a;
						document.getElementById("demo").style.color = "green"; 
					}
					////////////JYOUTAN HEIGHT////////////////////////	
					
					if (tan == 'Jyoutan_high' ){
						$('#da').val(da2);
						var rdah = hh1 + lh1 + 30;
						$('#rda').val(rdah);
								if(da2 >= jyoutan_highrange ){
										document.getElementById("demo").value = a;
										document.getElementById("demo").style.color = "green"; 
								} else if(da2 < jyoutan_highrange){ 
										document.getElementById("demo").value = b;
										document.getElementById("demo").style.color = "#ff0000";  	
								} 
							if (hh == 'INTERPHONE' || hh == '増設 INTERPHONE'){
								var rdas = rdah + 50;
								$('#rda').val(rdas);
										if(da2 >= 200 ){
												document.getElementById("demo").value = a;
												document.getElementById("demo").style.color = "green"; 
										} else if(da2 < 200){ 
												document.getElementById("demo").value = b;
												document.getElementById("demo").style.color = "#ff0000"; 											
										}	
							}
							if (lh == 'INTERPHONE' || lh == '増設 INTERPHONE'){
								var rdas2 = rdah + 50;
								$('#rda').val(rdas2);
							}			
					} else if (tan2 == 'Jyoutan_low' ){
						$('#da').val(da3);
						var rdal = hh1 + lh1 + 30;
						$('#rda').val(rdal);
							
								if(da3 >= jyoutan_lowrange ){
										document.getElementById("demo").value = a;
										document.getElementById("demo").style.color = "green"; 
								} else if(da3 < jyoutan_lowrange){ 
										document.getElementById("demo").value = b;
										document.getElementById("demo").style.color = "#ff0000";  
								}
							if (hh == 'INTERPHONE' || hh == '増設 INTERPHONE'){
								var rdas = rdal + 50;
								$('#rda').val(rdas);
							}
							if (lh == 'INTERPHONE' || lh == '増設 INTERPHONE'){
								var rdas2 = rdal + 50;
								$('#rda').val(rdas2);
										if(da3 >= 200 ){
												document.getElementById("demo").value = a;
												document.getElementById("demo").style.color = "green"; 
										} else if(da3 < 200){ 
												document.getElementById("demo").value = b;
												document.getElementById("demo").style.color = "#ff0000";  	
										} 
							}
					}  else if (tan == '' || tan2 == ''){
						higher();
						lower();
					}
				////////////////////////////Katan Height//////////////////////////////////	
					if (tan == 'Katan_high' ){
						$('#da').val(da3);
						var rda1 = hh1 + lh1 + 30;
						$('#rda').val(rda1);

								if(da3 >= katan_lowrange ){
										document.getElementById("demo").value = a;
										document.getElementById("demo").style.color = "green"; 
								} else if(da3 < katan_lowrange){ 
										document.getElementById("demo").value = b;
										document.getElementById("demo").style.color = "#ff0000";   	
								} 
							if (hh == 'INTERPHONE' || hh == '増設 INTERPHONE'){
								var rdas = rda1 + 50;
								$('#rda').val(rdas);
										if(da3 >= 200 ){
												document.getElementById("demo").value = a;
												document.getElementById("demo").style.color = "green"; 
										} else if(da3 < 200){ 
												document.getElementById("demo").value = b;
												document.getElementById("demo").style.color = "#ff0000";  	
										} 
							}
							if (lh == 'INTERPHONE' || lh == '増設 INTERPHONE'){
								var rdas = rda1 + 50;
								$('#rda').val(rdas);		
							}
					} else if (tan2 == 'Katan_low' ){
						$('#da').val(da2);
						var rda1 = hh1 + lh1 + 30;
						$('#rda').val(rda1);
							
								if(da2 >= katan_highrange ){
										document.getElementById("demo").value = a;
										document.getElementById("demo").style.color = "green"; 
								} else if(da2 < katan_highrange){ 
										document.getElementById("demo").value = b;
										document.getElementById("demo").style.color = "#ff0000";  
								}
							
							if (hh == 'INTERPHONE' || hh == '増設 INTERPHONE'){
								var rdas = rda1 + 50;
								$('#rda').val(rdas);
							}
							if (lh == 'INTERPHONE' || lh == '増設 INTERPHONE'){
								var rdas = rda1 + 50;
								$('#rda').val(rdas);
										if(da2 >= 200 ){
												document.getElementById("demo").value = a;
												document.getElementById("demo").style.color = "green"; 
										} else if(da2 < 200){ 
												document.getElementById("demo").value = b;
												document.getElementById("demo").style.color = "#ff0000";  
										}
							}
							if (da2 < 0){
								alert('WRONG ASSESMENT IN HIGHER HEIGHT AND LOWER HEIGHT !! Need to Interchange in system !!');
							}
					}  
            }
           
            $('#hh2, #lh2, #tan, #tan2').change(compute); 
    		
    	 });

		    $(document).ready(function() {
    	   function compute1() {
     
              var ihh = parseFloat($('input[name=ihh]').val() || 0 );
              var ilh = parseFloat($('input[name=ilh]').val() || 0 );
			   
              var a1 = 'Possible';
              var b1 = 'Not Possible';
			  var da1 = ihh - ilh ;
				$('#da1').val(da1);
				 if (da1 <	 150){
					document.getElementById("demo1").value = b1;
					document.getElementById("demo1").style.color = "#ff0000";
					
				}else if(da1 >= 150 ){
					document.getElementById("demo1").value = a1;
					document.getElementById("demo1").style.color = "green"; 
				}
			
            }
            $('#ihh, #ilh').keyup(compute1); 
    		
    	 });
		  
		   $(document).ready(function() {
    	   function compute2() {
  
              var ihh1 = parseFloat($('input[name=ihh1]').val() || 0 );
              var ilh1 = parseFloat($('input[name=ilh1]').val() || 0 );
			   
              var a2 = 'Possible';
              var b2 = 'Not Possible';
			  var da2 = ihh1 - ilh1 ;
				$('#da2').val(da2);
				 if (da2 < 200){
					document.getElementById("demo2").value = b2;
					document.getElementById("demo2").style.color = "#ff0000";
					
				}else if(da2 >= 200 ){
					document.getElementById("demo2").value = a2;
					document.getElementById("demo2").style.color = "green";
				}
			
            }
            $('#ihh1, #ilh1').keyup(compute2); 
    		
    	  });
		  
		  ////////////////////////////////////////////////////////////////////////////////////////
		  
		  $(document).ready(function() {
			 function compute3() {
              var SCH = parseFloat($('select[name=SCH]').val() || 0 );
              var GRIDS =  parseFloat($('input[name=GRIDS]').val() || 0 ); 
			  var PITCH = parseFloat($('input[name=PITCH]').val() || 0 );
			  var SUB= $('#SUB').val();
			  var JBDA = parseFloat($('input[name=JBDA]').val() || 0 );
			  var g = 'Possible';
			  var h = 'Not possible';
			  
              var TOTAL = (SCH-(GRIDS * SUB ) * PITCH ) - JBDA;
              
					
					$('#TOTAL').val(TOTAL);
					if (TOTAL < 185){
					document.getElementById("demo5").value = h;
					document.getElementById("demo5").style.color = "#ff0000";
							 
				}else if(TOTAL >= 185  ){
					document.getElementById("demo5").value = g;
					document.getElementById("demo5").style.color = "green"; 
				}
				
				}          
            $('#SCH, #GRIDS, #PITCH, #SUB, #JBDA').change(compute3);
    		
    	 }); 
	/////////////////////////////////////////////////////////////////////////////////////	    

		 $(document).ready(function() {
    	   function compute4() {
      
              var LCH = parseFloat($('input[name=LCH]').val() || 0 );
              var DR = parseFloat($('input[name=DR]').val() || 0 );
			   
              var h = 'Possible';
              var i = 'Not Possible';
			  var SUM = LCH - DR ;
				
				if(LCH && DR != ""){
					
				 if (SUM < 165){
					document.getElementById("demo6").value = i;
					document.getElementById("demo6").style.color = "#ff0000";		 
				}else if(SUM >= 165 ){
					document.getElementById("demo6").value = h;
					document.getElementById("demo6").style.color = "green";
				}
				$('#SUM').val(SUM);
				}
			
            }
            $('#LCH, #DR').change(compute4); 
    		
    	 });
		 /////////////////////////////////////////////////////////////////////////////////////	    

		 $(document).ready(function() {
    	   function compute5() {
				
			  var SCH = parseFloat($('input[name=SCH]').val() || 0 );	
              var LCH1 = parseFloat($('input[name=LCH1]').val() || 0 );
              var DR1 = parseFloat($('input[name=DR1]').val() || 0 );
			   
              
			  var SUM1 = SCH - (LCH1 - DR1) ;
				
				
				$('#SUM1').val(SUM1);
				
			
            }
            $('#SCH, #LCH1, #DR1').change(compute5); 
    		
    	 });
		 
</script>
	<style>
			.space{
				white-space:pre;				
			}
			h1 {
					background: #68dff0;					
					font: bold normal 215% 'arial black', Times, serif;
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

  <body>

  <section id="container" >
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
          <div id="sidebar"  class="nav-collapse ">
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
                      <a href="firealarm_new.php" >
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
                      <a href="bracket_light_kaidan_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>DENKI ITEM AT OPEN AREA</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="window_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>WINDOW AND WINDOW SILL</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  class="active"  href="hitting_of_items_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>HITTING ITEMS</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Items Hit To Each Other</a></li>
						  <li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Hitting Of Remote and Interphone w/ Jyoutan Height Indication</a></li>
						  <li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Bundeban/JB-DA Hitting QCTB/CTB w/ Height</a></li>			
						  <li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">JB/DA Installed Inside Koubai Tenjou Under Fukisage</a></li>			
						  <li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Denki Rimokon KI/Interface Unit Located in Lowered Ceiling</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="socket_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>AC SOCKET(KONSENTO)</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="shuudenban_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                            <span>SHUUDENBAN, SOLAR SOCKET & BUNDENBAN CHECKING</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="exterior_item_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>EXTERIOR ITEM HEIGHT</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="interphone.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>INTERPHONE</span>
                      </a>
                  </li>	
				  <li class="sub-menu">
                      <a href="NokitenColor.php" >
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
				<center><label class="head">HITTING OF ITEMS</label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			-->
		</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							  <div data-role="header">
								<th colspan="8"><h1>Items Hit To Each Other</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;text-align:center" class="space">Formula:    Higher Height    +    Lower Height</p>	
								</td>									
							</tr>
							<tr>
									<?php	
										/* include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 25";
										$result= $db_connect->query($query); */
										function items() {
											  try{
												$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
												$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
													$pdo->query( "SET NAMES utf8" );
													$stmt = $pdo->prepare("SELECT items FROM computation limit 26");
												$flag = $stmt->execute();
												if( !$flag ) {
											  $info = $stmt->errorInfo();
												  exit( $info[2] );
												}
												$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
											  }catch( PDOException $e ){
												echo $e->getMessage();
											}
											  $pdo = null;
											  return $array;
											}
											/////////////////////////////////////////////////////////////////////////////////
											$option = ''; 
											foreach( items() as $value ) {
											  $option .= '<option value="'.$value["items"].'">'.$value["items"].'</option>';
											}
									?>
								<td style="text-align:center;vertical-align:middle;background-color:">
								
									<label style="font-size:18px;color:black">Higher Height:</label>
										<select  style="font-size:20px;text-align:center;width:200px" id="hh"  name="hh" required="required" >
											
											<option><?php echo $option; ?></option>	
											<?php //while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<!--<option value="<?php// echo $row['fixture']?>"><?php //echo $row['items']?></option>-->
											<?php //} ?>							
										</select><br>	
										<select style="font-size:20px;text-align:center;width:150px;color:red;border:1px solid blue;" id="tan" name="tan" >
											<option value=""></option>
											<option value="Jyoutan_high">Jyoutan (上端)</option>
											<option value="Katan_high">Katan (下端)</option>
										</select>
										<textarea id="h1" name="h1" class="h1 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										
								
								</td>
									<?php	
										/* include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 25";
										$result= $db_connect->query($query); */
										function items2() {
											  try{
												$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
												$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
													$pdo->query( "SET NAMES utf8" );
													$stmt = $pdo->prepare("SELECT items FROM computation limit 26");
												$flag = $stmt->execute();
												if( !$flag ) {
											  $info = $stmt->errorInfo();
												  exit( $info[2] );
												}
												$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
											  }catch( PDOException $e ){
												echo $e->getMessage();
											}
											  $pdo = null;
											  return $array;
											}
											/////////////////////////////////////////////////////////////////////////////////
											$option = ''; 
											foreach( items2() as $value ) {
											  $option .= '<option value="'.$value["items"].'">'.$value["items"].'</option>';
											}
									?>
								<td style="text-align:center;vertical-align:middle;background-color:"><label style="font-size:15px;color:black">Denki Item<br>CAD Fixture</label></td>									
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Lower Height:</label>
									<select  style="font-size:20px;text-align:center;width:200px" id="lh"  name="lh" required="required" >
											
											<option><?php echo $option; ?></option>	
											<?php //while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<!--<option value="<?php //echo $row['fixture']?>"><?php //echo $row['items']?></option>-->
											<?php //} ?>							
									</select><br>
									<select style="font-size:20px;text-align:center;width:150px;color:red;border:1px solid blue;" id="tan2" name="tan2" >
											<option value=""></option>
											<option value="Jyoutan_low">Jyoutan (上端)</option>
											<option value="Katan_low">Katan (下端)</option>
										</select>
										<textarea id="h2" name="h2" class="h2 hide" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
								</td>
							</tr>	
							<tr>
								<td colspan="6" style="border-style:solid;background-color:#68dff0;">
									<center><label style="color:maroon;font-size:20px;font-weight:bold" class="space">Half Size of Item</label></center>	
								</td>									
							</tr>
								
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black"></label>
										<input type="text" name="hh1" id="hh1" value="" style="font-size:20px;width:150px;color;text-align:center" readonly  />								
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">	
									<label style="font-size:18px;color:black"></label>	
										<input type="text" name="lh1" id="lh1" value="" style="font-size:20px;width:150px;color;text-align:center" readonly   />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Required Distance Allowance:</label>
										<input type="" name="rda" id="rda" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />
										
											
								</td>
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Higher Height     -     Lower Height</p>	
								</td>									
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:#68dff0;">
									<center><label style="color:maroon;font-size:20px;font-weight:bold" class="space">Input Height of Item/CAD Fixture</label></center>	
								</td>									
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black"></label>
										<input type="number" name="hh2" id="hh2" value=""  style="font-size:20px;width:150px;color;text-align:center" required="required"  />								
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">	
									<label style="font-size:18px;color:black"></label>	
										<input type="number" name="lh2" id="lh2" value=""  style="font-size:20px;width:150px;color;text-align:center"   />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">					Distance Allowance:</label>
										<input type="" name="da" id="da" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />									
										<input type="text" id="demo" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
										<!--<span style="font-size:30px;color:red;font-weight:bold" id="demo"></span>-->
										<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">	
								</td>
							</tr>	
						</tbody>							
					</table>					
				</form>
			</div>	
			<div id="tab2" class="tab-pane fade">
				<form id="myForm1">
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>	
							  <div data-role="header">
								<th colspan="8"><h1>Hitting Of Remote and Interphone w/ Jyoutan Height Indication</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:#68dff0;">
									<center><label style="color:maroon;font-size:20px;font-weight:bold" class="space">If Remote To Remote</label></center>	
								</td>									
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Item w/ Higher Height     -     Item w/ Lower Height</p></center>	
								</td>									
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
								<select style="font-size:20px;color:maroon;font-weight:bold" id=""  name="">
									<option value=""></option>
									<option value="">MR</option>
									<option value="">SR</option>
									<option value="">YR</option>
									<option value="">YRD</option>
									<option value="">CV</option>
									<option value="">CVD</option>
									<option value="">PVR w/ LAN</option>									
								<select>
									<label style="font-size:18px;color:black">Item w/ Higher Height</label>
										<input type="number" name="ihh" id="ihh" value="" style="font-size:20px;width:150px;color;text-align:center"  />								
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">	
									<input type="number" name="ilh" id="ilh" value="" style="font-size:20px;width:150px;color;text-align:center"   />
									<label style="font-size:18px;color:black">Item w/ Lower Height</label>											
									<select style="font-size:20px;color:maroon;font-weight:bold" id=""  name="">
										<option value=""></option>
										<option value="">MR</option>
										<option value="">SR</option>
										<option value="">YR</option>
										<option value="">YRD</option>
										<option value="">CV</option>
										<option value="">CVD</option>
										<option value="">PVR w/ LAN</option>									
									<select>
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Distance Allowance:</label>
										<input type="" name="da1" id="da1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />
																						
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;">
									<label style="font-size:15px;color:black;color:blue;font-weight:bold" class="space">					Need to Secure 150 D.A =	</label>
									<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
									<!--<span style="font-size:30px;color:red;font-weight:bold" id="demo1"></span>-->
									<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>
								
							</tr>
				</form>
				<form id="myForm2">	
							<tr>
								<td colspan="6" style="border-style:solid;background-color:#68dff0;">
									<center><label style="color:maroon;font-size:20px;font-weight:bold" class="space">If Remote To Interphone</label></center>	
								</td>									
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Item w/ Higher Height     -     Item w/ Lower Height</p></center>	
								</td>									
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Item w/ Higher Height</label>
										<input type="number" name="ihh1" id="ihh1" value="" style="font-size:20px;width:150px;color;text-align:center"  />								
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">	
									<label style="font-size:18px;color:black">Item w/ Lower Height</label>	
										<input type="number" name="ilh1" id="ilh1" value="" style="font-size:20px;width:150px;color;text-align:center"   />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Distance Allowance:</label>
										<input type="" name="da2" id="da2" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />
										
											
								</td>
							</tr>
							
							
							<tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;">
									<label style="font-size:15px;color:black;color:blue;font-weight:bold" class="space">					Need to Secure 200 D.A =	</label>
									<input type="text" id="demo2" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
									<!--<span style="font-size:30px;color:red;font-weight:bold" id="demo2"></span>-->
									<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>
							</tr>
						</form>		
						</tbody>											
					</table>				
								
			</div>
			<div id="tab3" class="tab-pane fade">
				<form id="myForm3">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="8"><h1>Bundeban/JB-DA Hitting QCTB/CTB w/ Height</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="8" style="border-style:solid;background-color:#68dff0;">
									<center><label style="color:maroon;font-size:20px;font-weight:bold" class="space">If Height Of Bundenban/JB-DA is Higher than QCTB/CTB</label></center>	
								</td>									
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Height Of QCTB/CTB     +    Half Size Of Item   +   15</p></center>	
								</td>									
							</tr>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
									?>
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Select Item:</label>
										<select  style="font-size:20px;text-align:center;width:450px" id="si"  name="si" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['half_size_item']?>"><?php echo $row['bundenban']?></option>
											<?php } ?>
										</select>
								</td>
							</tr>
							
							<tr>	
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height Of QCTB/CTB:</label>
										<input type="number" name="hoq" id="hoq" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Half Size Of Item:</label>
										<input type="" name="hsi" id="hsi" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
										<input type="hidden" name="constant" id="constant" value="15" style="font-size:20px;width:150px;color;text-align:center"   />										
								</td>
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 15
								
							</tr>
							<tr>	
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="number" name="height" id="height" value="" style="font-size:20px;width:150px;color;text-align:center" disabled   /><span style="color:blue">And Above(Possible Height Range)</span>
								</td>
							</tr>
							<tr>	
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height Of Item:</label>
										<input type="number" name="hoi" id="hoi" value="" style="font-size:20px;width:150px;color;text-align:center"    />
								</td>
								<td  colspan="3" style="vertical-align:middle;">
									<label style="font-size:18px;color:black">Result:</label>
									<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
									
							</tr>
							
							<tr>
								<td colspan="8" style="border-style:solid;background-color:#68dff0;">
									<center><label style="color:maroon;font-size:20px;font-weight:bold" class="space">If Height Of Bundenban/JB-DA is Lower than QCTB/CTB</label></center>	
								</td>									
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Height Of QCTB/CTB     -    Half Size Of Item   -   15</p></center>	
								</td>									
							</tr>
								
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
									?>
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Select Item:</label>
										<select  style="font-size:20px;text-align:center;width:450px" id="si1"  name="si1" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['half_size_item']?>"><?php echo $row['bundenban']?></option>
											<?php } ?>
										</select>
								</td>
							</tr>
							
							<tr>	
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height Of QCTB/CTB:</label>
										<input type="number" name="hoq1" id="hoq1" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Half Size Of Item:</label>
										<input type="" name="hsi1" id="hsi1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
										<input type="hidden" name="constant1" id="constant1" value="15" style="font-size:20px;width:150px;color;text-align:center"   />										
								</td>
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> - 15
								
							</tr>
							<tr>	
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="number" name="height1" id="height1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled   /><span style="color:blue">And Below(Possible Height Range)</span>
								</td>
							</tr>
							<tr>	
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height Of Item:</label>
										<input type="number" name="hoi1" id="hoi1" value="" style="font-size:20px;width:150px;color;text-align:center"    />
								</td>
								<td  colspan="3" style="vertical-align:middle;">
									<label style="font-size:18px;color:black">Result:</label>
									<input type="text" id="demo4" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
									<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
									<!--<button onclick=location=URL>Refresh</button>-->
								</td>
							</tr>
						</tbody>												
					</table>					
				</form>
			</div>
			<div id="tab4" class="tab-pane fade">
				<form id="myForm4">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="8"><h1>JB/DA Installed Inside Koubai Tenjou Under Fukisage</h1></th>
							</div>	
						</thead>
						 <tbody>
							<tr>
								<td colspan="8" style="border-style:solid"><br>
									<center><p style="color:blue;font-size:20px;" class="space">Formula 1:   STD Ceiling Height   -   #grids   x   910   x   Pitch</p></center>
								</td>
							</tr>
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 25";
										$result= $db_connect->query($query);
									?>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD Ceiling Height:</label>
										<select  style="font-size:20px;text-align:center;width:200px" id="SCH"  name="SCH" required="required" >
											<option value=""></option>
												<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
												<?php } ?>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">#grids:</label>
										<input type="number" name="GRIDS" id="GRIDS" value="" style="font-size:20px;width:150px;color;text-align:center"    />
										<input type="hidden" name="SUB" id="SUB" value="910" style="font-size:20px;width:150px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x 910
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Pitch:</label>
										<input type="number" name="PITCH" id="PITCH" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td>
							</tr>
							<tr>
								<td colspan="8" style="border-style:solid"><br>
									<center><p style="color:blue;font-size:20px;" class="space">Formula 2:   Lowered Ceiling Height   -   Height Of JB-DA</p></center>
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Height:</label>
										<input type="" name="TOTAL" id="TOTAL" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  /><span style="color:blue;font-size:15px">Lowered Ceiling Height</span>										
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -</td>								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height Of JB-DA:</label>
										<input type="number" name="JBDA" id="JBDA" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td>
							
								<td class="form-inline" colspan="7" style="vertical-align:middle;">
									<label style="font-size:13px;color:black;color:blue" class="space">D.A From Lowered Ceiling:<br>Need to Secure 185 D.A</label>
									<input type="text" id="demo5" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
									<input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>	
							</tr>
						</tbody>												
					</table>					
				</form>
			</div>
			<div id="tab5" class="tab-pane fade">	
				<form id="myForm5">
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>Denki Rimokon KI/Interface Unit Located in Lowered Ceiling</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="8" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space">Formula 1:   Lowered Ceiling Height  -   Height of Denki Rimokon KI/ Interface Unit</p>
								</td>
							</tr>
								
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Lowered Ceiling Height:</label>
										<input type="number" name="LCH" id="LCH" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td colspan="4" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height of Denki Rimokon KI/ Interface Unit:</label><br>
										<input type="number" name="DR" id="DR" value="" style="font-size:20px;width:150px;color;text-align:center"    />								
								</td>
							</tr>
							<tr>							
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Height:</label>
										<input type="" name="SUM" id="SUM" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  /><span style="color:blue" class="space">  Need 165 D.A</span>																		
									<label style="font-size:18px;color:black" class="space">         Result:</label>
										<input type="text" id="demo6" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
										
								</td>
							</tr>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space">Formula 2: STD Ceiling Height  -  Lowered Ceiling Height  -   Height of Denki Rimokon KI/ Interface Unit</p>
								</td>
							</tr>
								
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD Ceiling Height:</label><br>
										<input type="number" name="SCH" id="SCH" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -								
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Lowered Ceiling Height:</label>
										<input type="number" name="LCH1" id="LCH1" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Height of Denki Rimokon KI/ Interface Unit:</label>
										<input type="number" name="DR1" id="DR1" value="" style="font-size:20px;width:150px;color;text-align:center"    />								
								</td>
							</tr>
							<tr>							
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;background-color:"><br>
									 <label style="font-size:18px;color:black" class="space">						Height:</label>
										<input type="" name="SUM1" id="SUM1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  /><span style="color:blue" class="space">	Height of Denki Rimokon KI/ Interface Unit</span>																		
										<input class="bg-danger" type="button" onclick="myFunction5()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>
							</tr>
							
						</tbody>												
					</table>
				</form>				
			</div>
		</div>	
          </section><! --/wrapper -->
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

</script>
<script>
	$("#tan").change(function(){
		document.getElementById("tan2").value = '';	
		
	}); 
	$("#tan2").change(function(){
		document.getElementById("tan").value = '';		
	}); 
	$("#hh,#lh").change(function(){
		var hh = document.getElementById("hh").value ;	
		var lh = document.getElementById("lh").value ;	
		//alert(hh);
		if (lh != ''){
			if (hh == 'YR/YRD' || hh == 'CV/CVD' || hh == 'MR' || hh == 'SR' || hh == 'INTERPHONE' || hh == '増設 INTERPHONE' || hh == 'PVR LAN'){
						document.getElementById("tan").disabled = false;
						document.getElementById("tan2").value = '';
						//compute();
					} else {
						document.getElementById("tan").disabled = true;
						document.getElementById("tan").value = '';
						
					} 
		}		
	});
	$("#lh,#hh").change(function(){
		var lh = document.getElementById("lh").value ;	
		var hh = document.getElementById("hh").value ;	
		//alert(hh);
		if (hh != ''){
			if (lh == 'YR/YRD' || lh == 'CV/CVD' || lh == 'MR' || lh == 'SR' || lh == 'INTERPHONE' || lh == '増設 INTERPHONE' || lh == 'PVR LAN'){
						document.getElementById("tan2").disabled = false;
						document.getElementById("tan").value = '';
						//compute();
					} else {
						document.getElementById("tan2").disabled = true;
						document.getElementById("tan2").value = '';
						
					} 
		}	
	});
function higher(){
		//document.getElementById("hh1").value=document.getElementById("hh").value;	
		var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var lh =  parseFloat($('select[name=lh]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
              
			var rda = hh1 + lh1 ;
		
				$('#rda').val(rda);
		
	}
	/* $("#hh").change(function(){
		//document.getElementById("hh1").value=document.getElementById("hh").value;	
		var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var lh =  parseFloat($('select[name=lh]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
              
			var rda = hh1 + lh1 ;
		
				$('#rda').val(rda);
		
	}); */	
	function lower(){
		//document.getElementById("lh1").value=document.getElementById("lh").value;	
		 var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var lh =  parseFloat($('select[name=lh]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
			  
			var rda = hh1 + lh1 ;
				
			$('#rda').val(rda);
				
	}
	/* $("#lh").change(function(){
		//document.getElementById("lh1").value=document.getElementById("lh").value;	
		 var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var lh =  parseFloat($('select[name=lh]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
			  
			var rda = hh1 + lh1 ;
				
			$('#rda').val(rda);
				
	}); */
	/* function hello(){
		//alert('try');
		var tans = document.getElementById("tan").value=document.getElementById("tan").value;	
		 var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var tan =  parseFloat($('select[name=tan]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
              var da = parseFloat($('input[name=da]').val() || 0 );
			  var a = 'Possible';
              var b = 'Not Possible';
			  var jyoutan = 30 ;
			  var katan = 30 ;
			  jyoutan_highrange = 210;
			  jyoutan_lowrange = 90;
				//alert(tans);
				var rda = hh1 + lh1 + 30;
				$('#rda').val(rda);
				if (tan = 'Jyoutan') {
					var rda2 = hh2 - 210;
						if(da >= jyoutan_highrange){
							 //alert('pass');
							 document.getElementById("demo").value = a;
							 document.getElementById("demo").style.color = "green"; 
						} else if(da < jyoutan_highrange){ 
							//alert('not');
							 document.getElementById("demo").value = b;
							 document.getElementById("demo").style.color = "#ff0000";  
						}
				} 	
	} */
	////////////////////////////////////////////////////////////////////////////////////
	 $("#si").change(function(){
		document.getElementById("hsi").value=document.getElementById("si").value;	
		var si =  parseFloat($('select[name=si]').val() || 0 ); 
             
               var hoq = parseFloat($('input[name=hoq]').val() || 0 );
              var hsi = parseFloat($('input[name=hsi]').val() || 0 );
              var constant= parseFloat($('#constant').val() || 0 );
			  var lh4 = document.getElementById("hoi").value; 
              var c = 'Possible';
              var d = 'Not possible';
              
			var height = si + hoq + constant ;
		
				$('#height').val(height); 
		
	});	
	
	$("#hoq").change(function(){
		document.getElementById("hsi").value=document.getElementById("si").value;	
		var si =  parseFloat($('select[name=si]').val() || 0 ); 
             
               var hoq = parseFloat($('input[name=hoq]').val() || 0 );
              var hsi = parseFloat($('input[name=hsi]').val() || 0 );
              var constant= parseFloat($('#constant').val() || 0 );
			  var lh4 = document.getElementById("hoi").value; 
              var c = 'Possible';
              var d = 'Not possible';
              
			var height = si + hoq + constant ;
			
			
				$('#height').val(height); 

	}); 
	
	 $("#hoi").change(function(){
        
			  var lh5 = document.getElementById("hoi").value;;
			  var lh4 = document.getElementById("height").value; 
              var c = 'Possible';
              var d = 'Not possible';
			 
				 if (lh5 < lh4){
					document.getElementById("demo3").value = d;
					document.getElementById("demo3").style.color = "#ff0000";	 
				}else if(lh5 > lh4 ){
					document.getElementById("demo3").value = c;
					document.getElementById("demo3").style.color = "green";
				}
	 
	}); 
	//////////////////////////////////////////////////////////////////////////////////
	$("#si1").change(function(){
		document.getElementById("hsi1").value=document.getElementById("si1").value;	
		var si1 =  parseFloat($('select[name=si1]').val() || 0 ); 
             
               var hoq1 = parseFloat($('input[name=hoq1]').val() || 0 );
              var hsi1 = parseFloat($('input[name=hsi1]').val() || 0 );
              var constant1= parseFloat($('#constant1').val() || 0 );
			  var lh41 = document.getElementById("hoi1").value; 
              var e = 'Possible';
              var f = 'Not possible';
              
			var height1 = hoq1 - si1 - constant1 ;
		
				$('#height1').val(height1); 
		
	});	
	
 	$("#hoq1").change(function(){
		document.getElementById("hsi1").value=document.getElementById("si1").value;	
		var si1 =  parseFloat($('select[name=si1]').val() || 0 ); 
				//alert(height1);
               var hoq1 = parseFloat($('input[name=hoq1]').val() || 0 );
              var hsi1 = parseFloat($('input[name=hsi1]').val() || 0 );
              var constant1= parseFloat($('#constant1').val() || 0 );
			  var lh41 = document.getElementById("hoi1").value; 
              var e = 'Possible';
              var f = 'Not possible';
              
			var height1 = hoq1 - si1 - constant1  ;
			
			
				$('#height1').val(height1); 

	});  
	
	 $("#hoi1").change(function(){
        
			  var lh51 = document.getElementById("hoi1").value;
			  var lh41 = document.getElementById("height1").value; 
              var e = 'Possible';
              var f = 'Not possible';
			  
					///400 > 1900
				 if (parseInt(lh51) > parseInt(lh41)){
					document.getElementById("demo4").value = f;
					document.getElementById("demo4").style.color = "#ff0000";	 
				}else {
					document.getElementById("demo4").value = e;
					document.getElementById("demo4").style.color = "green";	
				}
	 
	});
	///////////////////////////////////////////////////////////////////////
	$(function(){
   $(document).on('change','#hh',function(){
     $.ajax({
       type: 'post',
       url: 'add/fixture.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#h1").text(data)
		document.getElementById("hh1").value = document.getElementById("h1").value;
		setTimeout(higher,100);
     }).fail(function(data){
       alert('Failed')
     })
   })
 });
 $(function(){
   $(document).on('change','#lh',function(){
     $.ajax({
       type: 'post',
       url: 'add/fixture2.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#h2").text(data)
		document.getElementById("lh1").value = document.getElementById("h2").value;
		setTimeout(lower,100);
     }).fail(function(data){
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
	<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
<script type="text/javascript">
       $(document).ready(function () {
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
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        }); 
	</script>
    <!--script for this page-->
    
  <script>
      //custom select box

      /* $(function(){
          $('select.styled').customSelect();
      }); */

  </script>

  </body>
</html>

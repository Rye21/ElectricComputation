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
    	   function compute() {
      
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
			   var lh3 = document.getElementById("rda").value; 
              var a = 'Possible';
              var b = 'Not Possible';
			  var da = hh2 - lh2 ;
				$('#da').val(da);
				 if (da < lh3){
					document.getElementById("demo").value = b;
					document.getElementById("demo").style.color = "#ff0000";
				}else if(da > lh3 ){
					document.getElementById("demo").value = a;
					document.getElementById("demo").style.color = "green"; 
				}
            }
            $('#hh2, #lh2').change(compute); 
    		
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
                          <span>WALL MOUNTED BRACKET LIGHT AND KAIDAN</span>
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
                           <span>SHUUDENBAN AND SOLAR SOCKET CHECKING</span>
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
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 25";
										$result= $db_connect->query($query);
									?>
								<td style="text-align:center;vertical-align:middle;background-color:">
								
									<label style="font-size:18px;color:black">Higher Height:</label>
										<select  style="font-size:20px;text-align:center;width:200px" id="hh"  name="hh" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['fixture']?>"><?php echo $row['items']?></option>
											<?php } ?>							
										</select>	
								
								</td>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 25";
										$result= $db_connect->query($query);
									?>
								<td style="text-align:center;vertical-align:middle;background-color:"><label style="font-size:15px;color:black">Denki Item<br>CAD Fixture</label></td>									
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Lower Height:</label>
									<select  style="font-size:20px;text-align:center;width:200px" id="lh"  name="lh" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['fixture']?>"><?php echo $row['items']?></option>
											<?php } ?>							
										</select>
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
										<input type="number" name="hh1" id="hh1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />								
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">	
									<label style="font-size:18px;color:black"></label>	
										<input type="number" name="lh1" id="lh1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled   />
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
										<input type="number" name="hh2" id="hh2" value="" style="font-size:20px;width:150px;color;text-align:center" required="required"  />								
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">	
									<label style="font-size:18px;color:black"></label>	
										<input type="number" name="lh2" id="lh2" value="" style="font-size:20px;width:150px;color;text-align:center"   />
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
	$("#hh").change(function(){
		document.getElementById("hh1").value=document.getElementById("hh").value;	
		var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var lh =  parseFloat($('select[name=lh]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
              
			var rda = hh1 + lh1 ;
		
				$('#rda').val(rda);
		
	});	
	$("#lh").change(function(){
		document.getElementById("lh1").value=document.getElementById("lh").value;	
		 var hh =  parseFloat($('select[name=hh]').val() || 0 ); 
              var lh =  parseFloat($('select[name=lh]').val() || 0 ); 
              var hh1 = parseFloat($('input[name=hh1]').val() || 0 );
              var lh1 = parseFloat($('input[name=lh1]').val() || 0 );
              var hh2 = parseFloat($('input[name=hh2]').val() || 0 );
              var lh2 = parseFloat($('input[name=lh2]').val() || 0 );
			  
			var rda = hh1 + lh1 ;
				
			$('#rda').val(rda);
				
	});
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
        
			  var lh51 = document.getElementById("hoi1").value;;
			  var lh41 = document.getElementById("height1").value; 
              var e = 'Possible';
              var f = 'Not possible';
			 
				 if (lh51 > lh41){
					document.getElementById("demo4").value = f;
					document.getElementById("demo4").style.color = "#ff0000";	 
				}else if(lh51 < lh41 ){
					document.getElementById("demo4").value = e;
					document.getElementById("demo4").style.color = "green";	
				}
	 
	});
	///////////////////////////////////////////////////////////////////////
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

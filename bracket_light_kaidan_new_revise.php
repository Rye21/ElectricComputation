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
              var f1 = $('#f1').val();
			   
			   var c1 = 2775  ;
			   var c2 = 2972  ;
			   var c3 = 2737  ;
			   //var b1 = 2524  ;
			   //var b2 = 2775  ;
			   //var b3 = 2776  ;			   
              var f2 = $('#f2').val();
              var cts =  parseFloat($('select[name=cts]').val() || 0 ); 
              var OA =  parseFloat($('select[name=OA]').val() || 0 ); 
              var ns = parseFloat($('input[name=ns]').val() || 0 );
              var ii = parseFloat($('input[name=ii]').val() || 0 );
              var gh = parseFloat($('input[name=gh]').val() || 0 );
			  
              var f1 = ns * cts + gh + 30  ;
			  var f2 = (ns * cts + gh + 30) - c1;
			  var f3 = (ns * cts + gh + 30) - c2;
			  var ii = '1F';
			  var ii2 = 'HIT TO BEAM';							  
			  var ii3 = '2F';
			  $('#f1').val(f1);
             if(cts == 185.8 ){
				 $('#f2').val(f3);
			 } else {
				$('#f2').val(f2); 
			 }
             if (f1 <= 2524){
				document.getElementById("demo").value = ii;
				document.getElementById("demo").style.color = "green"; 
			 }else if(f1 <= 2775.9){
				document.getElementById("demo").value = ii2;
				document.getElementById("demo").style.color = "#ff0000";
			 }else if(f1 >= 2776){
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
			   var c1 = 2775  ;
			   var c2 = 2972  ;
			   //var b1 = 2524  ;
			   //var b2 = 2775  ;
			   //var b3 = 2776  ;			   
              var f2a = $('#f2a').val();
              var ctsa =  parseFloat($('select[name=ctsa]').val() || 0 ); 
              var OA2 =  parseFloat($('select[name=OA2]').val() || 0 ); 
              var nsa = parseFloat($('input[name=nsa]').val() || 0 );
              var iia = parseFloat($('input[name=iia]').val() || 0 );
              var gha = parseFloat($('input[name=gha]').val() || 0 );
              var f1a = nsa * ctsa + gha + 30  ;
			  var f2a = (nsa * ctsa + gha + 30) - c1;
			  var f3a = (nsa * ctsa + gha + 30) - c2;
			  var iia = '1F';
			  var ii2a = 'HIT TO BEAM';
			  var ii3a = '2F';
			  $('#f1a').val(f1a);
             if(ctsa == 185.8 ){
				 $('#f2a').val(f3a);
			 } else {
				$('#f2a').val(f2a); 
			 }
             if (f1a <= 2685){
				document.getElementById("demo1").value = iia;
				document.getElementById("demo1").style.color = "green";	
			 } else if(f1a <= 2985.9){
				document.getElementById("demo1").value = ii2a;
				document.getElementById("demo1").style.color = "#ff0000";
					  
			 } else if(f1a >= 2986){
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
			  
			   var c1 = 2775  ;
			   var c2 = 2972  ;
			   var c3 = 2737  ;
			   //var b1 = 2524  ;
			   //var b2 = 2775  ;
			   //var b3 = 2776  ;			   
              var f2b = $('#f2b').val();
              var ctsb =  parseFloat($('select[name=ctsb]').val() || 0 ); 
              var OA =  parseFloat($('select[name=OA]').val() || 0 ); 
              var nsb = parseFloat($('input[name=nsb]').val() || 0 );
              var iib = parseFloat($('input[name=iib]').val() || 0 );
              var ghb = parseFloat($('input[name=ghb]').val() || 0 );
			  
              var f1b = nsb * ctsb + ghb + 30  ;
			  var f2b = (nsb * ctsb + ghb + 30) - c1;
			  var f3b = (nsb * ctsb + ghb + 30) - c2;
			  var iib = '1F';
			  var ii2b = 'HIT TO BEAM';							  
			  var ii3b = '2F';
			  $('#f1b').val(f1b);
             if(ctsb == 200 ){
				 $('#f2b').val(f3b);
			 } else {
				$('#f2b').val(f2b); 
			 }
             if (f1b <= 2486){
				document.getElementById("demo2").value = iib;
				document.getElementById("demo2").style.color = "green"; 
			 }else if(f1b <= 2825.9){
				document.getElementById("demo2").value = ii2b;
				document.getElementById("demo2").style.color = "#ff0000";
			 }else if(f1b >= 2826){
				document.getElementById("demo2").value = ii3b;
				document.getElementById("demo2").style.color = "green";
			 }
		
            }
            $('#f1b, #f2b, #ctsb, #nsb, #iib, #ghb, #ii2b, #ii3b').keyup(compute1);
            $('#f1b, #f2b, #ctsb, #nsb, #iib, #ghb, #ii2b, #ii3b').change(compute1);
    		
    	 });
		
		 function shio_code() {
			
					if(!$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)){
					//alert('Please Input Control Number..!')
					return false
					}
				  $("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_shio_code.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var number3 = document.getElementById("code_number").value = document.getElementById("email-availability-status").innerHTML;
				
				//setTimeout(check_PlanNumber(),500);				
				
				
				/*setTimeout(check_kanabakari(),500); */
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				jQuery.ajax({
				url: "check/check_shio_plan_number.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var C = document.getElementById("plan_number").value = document.getElementById("email-availability-status").innerHTML;
				
				
				/* setTimeout(check_kanabakari(),500);
				setTimeout(check_dodai(),500);  */
				//setTimeout(check_prefec(),500);
				
				
				//setTimeout(check_powercon(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				jQuery.ajax({
				url: "check/check_shio_kanabakari.php",
				data:'code_number='+$("#code_number").val(),
				type: "POST",
				success:function(data){
				$("#email-availability-status").html(data);
				var kanabakari = document.getElementById("kanabakari").value = document.getElementById("email-availability-status").innerHTML;
				var number4 = document.getElementById("code_number").value;		
				var number6 = document.getElementById("kanabakari").value;
				var results = 'NO NEED TO COMPUTE';
				//alert(number6);
				if (number4 != '' && number6 == '２４０＋'){
					document.getElementById("show").click();
				} else if (number4 != '' && number6 == '２４０+□'){
					document.getElementById("show").click();
				} else if (number4 != '' && number6 == '２４０+Ｔ□'){
					document.getElementById("show2").click();
				} else if (number4 != '' && number6 == '２４０＋Ｔ' ){
					document.getElementById("show2").click();
				} else if (number4 != '' && number6 == '２６０+□' ){
					document.getElementById("show1").click();
				} else if (number4 != '' && number6 == '２６０＋'){
					document.getElementById("show1").click();				
				} else if (number4 != '' && number6 == '２４０＋'){
					document.getElementById("show1").click();				
				} else if (number4 != '' && number6 == '２６５' ){	
					document.getElementById("show3").click();	
					document.getElementById("no_need").value = results;
				} else if (number4 != '' && number6 == '２４０' ){
					document.getElementById("show").click();	
				} else if (number4 == '' && number6 == '') {	
					document.getElementById("hide").click();
				}
				 if (number4 != "" ){
						document.getElementById("code_number").disabled=true;
					} else {
						document.getElementById("code_number").disabled=false;
					}
				
				
				//setTimeout(shio_code(),2000);
				$("#loaderIcon").hide();
				},
				error:function (){}
				}); 
				}  
		 
function showTable(){
document.getElementById('table').style.visibility = "visible";
document.getElementById('table').style.display = "inline-table";

}
function showTable1(){
document.getElementById('table1').style.visibility = "visible";
document.getElementById('table1').style.display = "inline-table";
}
function showTable2(){
document.getElementById('table2').style.visibility = "visible";
document.getElementById('table2').style.display = "inline-table";
}
function showTable3(){
document.getElementById('no_need').style.visibility = "visible";
document.getElementById('no_need').style.display = "inline-table";
}

function hideTable(){
document.getElementById('table').style.display = "none";
document.getElementById('table1').style.display = "none";
document.getElementById('table2').style.display = "none";
document.getElementById('no_need').style.display = "none"; 
}
		 
		 
</script>
	<style>
			.space{
				white-space:pre;				
			}
			h1 {
					background: #68dff0;					
					font: bold normal 210% 'arial black', Times, serif;
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
                      <a  class="active" href="bracket_light_kaidan_new.php" >
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
                      <a href="hitting_of_items_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>HITTING ITEMS</span>
                      </a>
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
                          <span>SHUUDENBAN CHECKING</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="exterior_item_new.php" >
                          <!--<i class="fa fa-dashboard"></i>-->
                          <span>EXTERIOR ITEM HEIGHT</span>
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
				<center><label class="head">WALL MOUNTED BRACKET LIGHT AND KAIDAN</label></center>
		<!--<ul class="nav nav-tabs" style="font-size:20px">
			<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">JB-DA Kabe Fukasu</a></li> -->
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Bundeban Kabe Fukasu</a></li> -->			
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			
		</ul>-->
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
			<td style="text-align:center;vertical-align:middle;background-color:">		
				<p>* Please Input <span style="color:red"> FIRST </span>the Customer Code to show the Needed Computation *</p>
				<p class="space">* Press<span style="color:red"> ENTER </span>after you put the Customer Code * 			</p>	
				<label style="font-size:20px;color:black" class="space">Customer Code: </label>
					<input type="text" name="code_number" id="code_number" onkeypress="setTimeout(shio_code, 10)" onkeyup="setTimeout(shio_code, 10)" onblur="setTimeout(shio_code, 10)" onmouseout="setTimeout(shio_code, 10)"    style="font-size:20px;width:170px;text-align:center;color:red;" maxlength="12"   />
				<!--<label style="font-size:20px;color:black" class="space"> Plan Shio #: </label>							
					<input type="text" name="plan_number" id="plan_number"   style="font-size:20px;width:170px;text-align:center;color:red"  readonly />-->
				<label style="font-size:20px;color:black" class="space"> Kanabakari: </label>		
					<input type="text" name="kanabakari" id="kanabakari"  style="font-size:20px;width:170px;text-align:center;color:red"  readonly />	
				<span class="hidden" id="email-availability-status"></span>		
			</td>	
				<body onload="javascript:hideTable()">
				<input type='button' class="hide" id="show"  name="show" onClick='javascript:showTable();' value='show'>
				<input type='button' class="hide" id="show1" name="show1" onClick='javascript:showTable1();' value='show1'>
				<input type='button' class="hide" id="show2" name="show2" onClick='javascript:showTable2();' value='show2'>
				<input type='button' class="hide" id="show3" name="show3" onClick='javascript:showTable3();' value='show3'>
				<input type='button' class="hide" id="hide"  name="hide" onClick='javascript:hideTable();' value='hide'>
				<span class="space"><input class="bg-danger" type="button" onclick="myFunction0()" value="Clear ALL" style="font-size:15px;color:black;font-weight:bold"><br></span>
					
					
					<table id="table" class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							  <div data-role="header">
								<th colspan="7"><h1>240 Computation For Bracket Light And Kaidan</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space">Formula:   Number of steps  *  choose type of stairs  +  given height  +  30</p>	
								</td>									
							</tr>
							<tr>
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Choose Types Of Stairs:</label>
										<select  style="font-size:20px;text-align:center;width:80px" id="cts"  name="cts" required="required" >
											<option value=""></option>
											<option value="198.2">14</option>
											<option value="185.4">15</option>																		
										</select>	
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x 
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Number Of Steps:</label>
										<input type="number" name="ns" id="ns" value="" style="font-size:20px;width:100px;color;text-align:center" />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Given Height:</label>
										<input type="number" name="gh" id="gh" value="" style="font-size:20px;width:100px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>
								
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">1F:</label>
										<input type="" name="f1" id="f1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />								
									<label style="font-size:18px;color:black">2F:</label>	
										<input type="" name="f2" id="f2" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black" class="space">						Item Installation:	</label>
										
										<input type="text" id="demo" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
										
								</td>
							</tr>
							<tr>	
								<td class="form-inline" colspan="7" style="vertical-align:middle;">	
										<span style="color:red;font-weight:bold;font-size:30px" class="space">NOTE:   For 240k Only</span>
										<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">	
								</td>
							</tr>	
						</tbody>							
					</table>					
				</form>
				<form id="myForm1">
					<table id="table1" class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>	
							  <div data-role="header">
								<th colspan="7"><h1>260 Computation For Bracket Light And Kaidan</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space">Formula:   Number of steps  *  choose type of stairs  +  given height  +  30</p>	
								</td>									
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Choose Types Of Stairs:</label>
										<select  style="font-size:20px;text-align:center;width:80px" id="ctsa"  name="ctsa" required="required" >
											<option value=""></option>
											<option value="198.2">14</option>
											<option value="185.4">15</option>
											<option value="185.8">16</option>							
										</select>	
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x 
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Number Of Steps:</label>
										<input type="number" name="nsa" id="nsa" value="" style="font-size:20px;width:100px;color;text-align:center" />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Given Height:</label>
										<input type="number" name="gha" id="gha" value="" style="font-size:20px;width:100px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">1F:</label>
										<input type="" name="f1a" id="f1a" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />								
									<label style="font-size:18px;color:black">2F:</label>	
										<input type="" name="f2a" id="f2a" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black" class="space">						Item Installation:	</label>
										<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
											
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="vertical-align:middle;">
								<span style="color:red;font-weight:bold;font-size:30px" class="space">NOTE:   For 260k Only</span>
										<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>
							</tr>	
						</tbody>											
					</table>				
				</form>
				<form id="myForm2">
					<table id="table2" class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>	
							  <div data-role="header">
								<th colspan="7"><h1>２４０+Ｔ□ Computation For Bracket Light And Kaidan</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space">Formula:   Number of steps  *  choose type of stairs  +  given height  +  30</p>	
								</td>									
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Choose Types Of Stairs:</label>
										<select  style="font-size:20px;text-align:center;width:80px" id="ctsb"  name="ctsb" required="required" >
											<option value=""></option>
											<option value="202">14</option>
											<option value="189">15</option>
																		
										</select>	
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x 
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Number Of Steps:</label>
										<input type="number" name="nsb" id="nsb" value="" style="font-size:20px;width:100px;color;text-align:center" />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Given Height:</label>
										<input type="number" name="ghb" id="ghb" value="" style="font-size:20px;width:100px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 30								
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">1F:</label>
										<input type="" name="f1b" id="f1b" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />								
									<label style="font-size:18px;color:black">2F:</label>	
										<input type="" name="f2b" id="f2b" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black" class="space">						Item Installation:	</label>
										<input type="text" id="demo2" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
											
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="vertical-align:middle;">
								<span style="color:red;font-weight:bold;font-size:30px" class="space">NOTE:   For ２４０+Ｔ Only</span>
										<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>
							</tr>	
						</tbody>											
					</table>
					
				</form>
				<center><input type="text" id="no_need" name="no_need" onClick='javascript:showTable3();' style="font-size:50px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center;color:red" disabled></center>
				</body>	
			</div>
						
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
function myFunction0() {
    document.getElementById("myForm").reset(); 
	document.getElementById("hide").click();
	document.getElementById("code_number").disabled=false;	
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

     /*  $(function(){
          $('select.styled').customSelect();
      });
 */
  </script>

  </body>
</html>

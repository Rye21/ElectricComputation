<?php include ('header.php'); ?>

    	<script>
    	 $(document).ready(function() {
    	   function compute() {
              var number1 = $('#number1').val();
              var number2 =  parseFloat($('input[name=number2]').val() || 0 ); 
              var number3 = $('#number3').val();
              var ch = parseFloat($('select[name=ch]').val() || 0 );
              var rh = parseFloat($('input[name=rh]').val() || 0 );

			    var results = 'HIT';
			    var results1 = 'NOT HIT';
	 
              var total2 = ch-(number1 * number3 + number2) ;
              var total = rh-(number1 * number3 + number2);
              
			  if (rh != '') {
					$('#total').val(total);
					document.getElementById("demo").value = results1;	
					document.getElementById("demo").style.color = "green";
				if(total < 100 ) {
					document.getElementById("demo").value = results;	
					document.getElementById("demo").style.color = "#ff0000";
				}
				}  else if (ch != '')  {
					$('#total').val(total2);
					document.getElementById("demo").value = results1;
					document.getElementById("demo").style.color = "green";
					if(total2 < 100 ) {
					document.getElementById("demo").value = results;					
					document.getElementById("demo").style.color = "#ff0000";
				}
				} else {
					$('#total').val(total2);
					document.getElementById("demo").value = results1;
					document.getElementById("demo").style.color = "green";
					
					
					
				} 
				
            }
            $('#number1, #number2, #number3, #ch, #rh, #results').change(compute);
    		
    	 });
		 $(document).ready(function() {
    	   function compute1() {  
              var a =  parseFloat($('input[name=a]').val() || 0 ); 
              var tp = parseFloat($('select[name=tp]').val() || 0 );
              var sr = parseFloat($('select[name=sr]').val() || 0 );
			  var grh = parseFloat($('input[name=grh]').val() || 0 );
              var r =  tp + grh - a ;
			  var r2 = tp + (sr - a) ;
			   if (grh != '') {
					$('#r').val(r);

            } else if (tp != '')  {
					$('#r').val(r2);
					
			 }	
			 }	
            $(' #a, #tp, #sr, #grh ').change(compute1);
    		
    	 });
		 $(document).ready(function() {
    	   function compute2() {
				var ws = $('#ws').val();
				var sash =  parseFloat($('input[name=sash]').val() || 0 ); 
				var oa = parseFloat($('select[name=oa]').val() || 0 );
				var sh = parseFloat($('select[name=sh]').val() || 0 );
				var sub = $('#sub').val();
				var resultA = 'HIT TO WINDOW';
				var resultB = 'NOT HIT TO WINDOW';
				
				var result2 = ws * sub + sash ;
				var result3 =  sh - oa ;
				var result4 =  result3-result2; 
				$('#result').val(result2);
				$('#result3').val(result3);
				
				
				if(ws && sash && oa && sh  !== "" ) {
					$('#result4').val(result4);
						document.getElementById("demo1").value = resultB;
						document.getElementById("demo1").style.color = "green";
					if(result4 < 100 ) {
						document.getElementById("demo1").value = resultA;	
						document.getElementById("demo1").style.color = "#ff0000";
					}else if(result4 < 100 ){
						$('#result4').val(result4);
						document.getElementById("demo1").value = resultA;
						document.getElementById("demo1").style.color = "#ff0000";
					}
				}

            }
            $('#ws, #sash, #sub,#resultA').keyup(compute2);
			 $(' #oa, #sh').change(compute2);
			});
			
			 $(document).ready(function() {
			 function compute3() {
              var sch = parseFloat($('select[name=sch]').val() || 0 );
              var grids =  parseFloat($('input[name=grids]').val() || 0 ); 
			  var pitch = parseFloat($('input[name=pitch]').val() || 0 );
			  var sub1= $('#sub1').val();
			  var sa= $('#sa').val();
			  
              var sum = (sch-(grids * pitch * sub1)) - sa ;
               var sum3 = sum - (sum % 10);
					
					$('#sum').val(sum3);
				
				}          
            $('#sch, #grids, #pitch, #sub1, #sa').change(compute3);
    		
    	 }); 
		 
		  $(document).ready(function() {
			 function compute4() {
              var openA = parseFloat($('select[name=openA]').val() || 0 );
              var ngrids =  parseFloat($('input[name=ngrids]').val() || 0 ); 
			  var pitch1 = parseFloat($('input[name=pitch1]').val() || 0 );
			  var sub2= $('#sub2').val();
			  var da= $('#da').val();
			  
              var sum1 = (openA+(ngrids * pitch1 * sub2)) - da ;
              var sum2 = sum1 - (sum1 % 10);
              
					
					 $('#sum1').val(sum2);
					//document.getElementById("demo9").value = Math.floor(sum1);	
				}          
            $('#openA, #ngrids, #pitch1, #sub2, #da').change(compute4);
    		
    	 }); 
		 
		 
		 $(document).ready(function() {
			 function compute5() {
             
             
			  var givenCH = parseFloat($('input[name=givenCH]').val() || 0 );
			  var STD= $('#STD').val();
			  
			  
              var sum2 = givenCH - STD ;
              
					
					$('#sum2').val(sum2);
				
				}          
            $('#givenCH, #STD').keyup(compute5);
    		
    	 });
		 
		 $(document).ready(function() {
    	   function compute6() {
				var STD_CH = $('#STD_CH').val();
				var rqh =  parseFloat($('input[name=rqh]').val() || 0 ); 
				
				var res = 'HIT';
			    var res2 = 'NOT HIT';
				
				var sum3 = STD_CH - rqh ;
				
				
				if(STD_CH && rqh != ""){
					if(sum3 < 150 ) {
						document.getElementById("demo3").value = res;
						document.getElementById("demo3").style.color = "#ff0000";
					}else if(sum3 >= 150 ){						
						document.getElementById("demo3").value = res2;
						document.getElementById("demo3").style.color = "green";
					}
					$('#sum3').val(sum3);
				}	
			
            }
            $('#STD_CH, #rqh').change(compute6);
			 
			});
			
			$(document).ready(function() {
    	   function compute7() {
				
				var Given_Ceiling_Height = parseFloat($('input[name=Given_Ceiling_Height]').val() || 0 );
				var Requested_Height = parseFloat($('input[name=Requested_Height]').val() || 0 );
				
				var resu = 'HIT';
			    var resu2 = 'NOT HIT';
				var sum4 =  Given_Ceiling_Height - Requested_Height;
				
				
					if(Given_Ceiling_Height && Requested_Height != ""){
							if(sum4 < 150 ) {
							document.getElementById("demo4").value = resu;
							document.getElementById("demo4").style.color = "#ff0000";
					}else if(sum4 >= 150 ){						
							document.getElementById("demo4").value = resu2;
							document.getElementById("demo4").style.color = "green";
					}
					$('#sum4').val(sum4);
				}	
			 }
            $(' #Given_Ceiling_Height,#Requested_Height').change(compute7);
			 
			});
			
			$(document).ready(function() {
    	   function compute8() {
				
				var Open_area = parseFloat($('select[name=Open_area]').val() || 0 );
				var std_cei_light = parseFloat($('select[name=std_cei_light]').val() || 0 );
				var Requested_Height1 = parseFloat($('input[name=Requested_Height1]').val() || 0 );
				var resul = 'HIT';
			    var resul2 = 'NOT HIT';
				var sum5 =  Open_area + std_cei_light - Requested_Height1;
		
					if(Open_area && std_cei_light && Requested_Height1 != ""){	
						
				if(sum5 < 150 ) {						
						document.getElementById("demo5").value = resul;
						document.getElementById("demo5").style.color = "#ff0000";
				}else if(sum5 >= 150 ){						
						document.getElementById("demo5").value = resul2;
						document.getElementById("demo5").style.color = "green";
					}
					$('#sum5').val(sum5);
				}	
            }
            $('#Open_area,#std_cei_light,#Requested_Height1').change(compute8);
			 
			});
			
			
 
			
			
			 
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
		
	
	<section id="main-content">			
        <section class="wrapper"><br>
			<center><label style="font-size:35px;font-family: arial black">FIRE ALARM HEIGHT COMPUTATION</label></center>
			<ul class="nav nav-tabs" style="font-size:20px">
				<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Above Window</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Installed in Hukinuke</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Installed Above Window in Hukinuke</a></li>			
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			
			</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
					<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header" class="" id="FireAlarmAboveWindow">
								<th colspan="6"><h1>Fire Alarm Above Window<br><span style="font-size:18px">(Need 100 D.A from Window)</span></h1></th>					
							</div>
						</thead>
						<tbody>
							<tr>	
								<td colspan="6" style="border-style:solid"><br>	
									<p style="color:blue;font-size:18px" class="space">Formula: H = Height of Alarm/Requested Height    -   Last two digits of Window Serial    x    30.3   +    Sash Height</p>												
								</td>
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 6";
										$result= $db_connect->query($query);
									?>
							</tr><tr>	
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Standard 	Height of Fire Alarm:</label>&nbsp;
										<select  style="font-size:20px;text-align:center" id="ch"  name="ch" required="required">
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['height']?>"><?php echo $row['alarm']?></option>
											<?php } ?>
										</select> <br>								
									<label style="font-size:18px;color:black"><span style="color:red">OR</span> Requested Height:</label>&nbsp;
										<input type="number" name="rh" id="rh" value="" style="font-size:20px;width:100px;color;text-align:center"/>									
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
								</td><td style="text-align:center;vertical-align:middle">
										<label style="font-size:18px;color:black">Last two digits of Window Serial:</label>
										<input type="number" name="number1" id="number1" value="" style="font-size:20px;width:100px;text-align:center" />
								<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center"> x 30.3
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="color:black;font-size:18px">SASH Height:</label><br>
									<input type="number" name="number2" id="number2" value="" style="font-size:20px;width:100px;text-align:center"  />
									<input type="hidden" name="number3" id="number3" value="30.3"  />
								</td>
							</tr><tr>
								<td class="form-inline" colspan="6" style="text-align:center;vertical-align:middle;">										  					 											
									<label style="font-size:25px;color:black">Height =</label>
									<input type="" name="total" id="total" value="" style="font-size:20px;width:100px;text-align:center" disabled  />	
									<br>
									<label style="font-size:25px;color:black;" class="space">						Result:</label>
									<input class="bg-danger" type="button" onclick="myFunction()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
										<input type="text" id="demo" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;" disabled>			
								</td>												
							</tr>
						</tbody>
					</table>	
				</form>
			</div>
			<div id="tab2" class="tab-pane fade">
				<form id="myForm1">	
					<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
						<thead>		
							<div data-role="header" class="" id="FireAlarmInstalledinHukinuke">
								<th colspan="7"><h1>FireAlarm Installed in Hukinuke</h1></th>
							  </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="7" border="2"><br>
									<span style="color:red;font-size:18px" class="space">Formula:   For Standard Height of Kemuri In Hukinuke</span>
									<span style="color:red;font-size:18px" class="space">          For Height Of Kemuri in Hukinuke If with G.Ceiling Height Indication</span>
									<span style="color:blue;font-size:18px" class="space">H= OpenArea  +  STD.CH  -  300 									H= OpenArea  +  Given Ceiling Hight  +  STD.CH  -  300</span>	
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 9";
										$result= $db_connect->query($query);
									?>	
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Type of plan(OpenArea):</label>
										<select  style="font-size:20px" id="tp"  name="tp" required="required">
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
											<?php } ?>
										</select>
										<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation ";
										$result= $db_connect->query($query);
										?>	
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Select Room(STD.CH):</label>
										<select  style="font-size:20px" id="sr"  name="sr" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
													<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
												<?php } ?>	
										</select>
											
											
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Given Requested Height:</label>
										<input type="number" name="grh" id="grh" value="" style="font-size:20px;width:100px;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Allowance:</label>
										<input type="" name="a" id="a" value="300" style="font-size:20px;width:100px;text-align:center"  />
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:25px;color:black">Height=</label>
									<input type="" name="r" id="r" value="" style="font-size:20px;width:100px;text-align:center" disabled  /></center>
									<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
								</td>
							</tr>
						</tbody>								
					</table>
				</form>
			</div>
			<div id="tab3" class="tab-pane fade">
				<?php	
					include_once 'include/dbcon.php';
					$query="SELECT * FROM computation limit 8 ";
					$result= $db_connect->query($query);
				?>	
				<form id="myForm2">	
					<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
						<thead>
							<div data-role="header" class="" id="FireAlarmInstalledAboveWindowinHukinuke">
								<th colspan="5"><h1>FireAlarm Installed Above Window in Hukinuke<br><span style="font-size:18px">(Need 100 D.A from Window)</span></h1></th>
							</div>
						</thead>
						<tbody>
							<tr>
								<td colspan="6" border="2"><br>
									<p style="color:blue;font-size:18px" class="space">Step 1:Formula: H=   Last two digits of Window Serial   x   30.3   +   Sash Height</p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Last two digits of Window Serial:</label>
									<input type="number" name="ws" id="ws" value="" style="font-size:20px;width:100px;text-align:center;text-align:center"  />
									<input type="hidden" name="sub" id="sub" value="30.3"  />
								</td><td style="vertical-align:middle;font-size:20px;font-weight:bold;text-align:center;color:red"> x 30.3 +
								</td>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">SASH Height:</label>
									<input type="number" name="sash" id="sash" value="" style="font-size:20px;width:100px;text-align:center"  />
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">Window Height=</label>
									<input type="" name="result" id="result" value="" style="font-size:20px;width:100px;text-align:center" disabled  />	
								</td>
							</tr>
							<tr>
								<td colspan="5" border="2"><br>
									<p style="color:blue;font-size:18px" class="space">Step 2:Formula: H=   Type of plan(STD HEIGHT)  -  Type of plan(OPEN AREA)</p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">(STD HEIGHT):</label>
										<select  style="font-size:20px" id="sh"  name="sh" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
														<option value="<?php echo $row['open2']?>"><?php echo $row['type']?></option>
													<?php } ?>	
										</select>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 9";
										$result= $db_connect->query($query);
									?>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -									
								</td><td style="text-align:center;vertical-align:middle;">
										<label style="font-size:18px;color:black">(OPEN AREA):</label>
										<select  style="font-size:20px" id="oa"  name="oa" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
														<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
													<?php } ?>																		
										</select>
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">Height of FireAlarm from 2FFL=</label>
									<input type="" name="result3" id="result3" value="" style="font-size:20px;width:100px;text-align:center" disabled  />	
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;"><br>
									<p style="color:blue;font-size:18px" class="space">Step 3:Formula: H=  Height Of Fire Alarm from 2FFL   -   Window Height</p>
									<center><label style="font-size:25px;color:black">Height=</label>
										<input type="" name="result4" id="result4" value="" style="font-size:20px;width:100px;text-align:center" disabled  />
										<br>
									<center><label style="font-size:25px;color:black" class="space">						Result:</label>
										<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
										<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;" disabled>
										
								</td>
							</tr>								
						</tbody>										
					</table>
				</form>
			</div>
			<div id="tab4" class="tab-pane fade">
				<form id="myForm3">
					<?php	
						include_once 'include/dbcon.php';
						$query="SELECT * FROM computation limit 86 ";
						$result= $db_connect->query($query);
					?>
					<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
						<thead>
							<div data-role="header" class="" id="FireAlarmInstalledatKoubaiUnderFukisage">							  
								<th colspan="8"><h1>FireAlarm Installed at Koubai Under Fukisage</h1></th>
							</div>	
						</thead>
						<tbody>									
							<tr>
								<td colspan="8" border="2"><br>	
									<p style="color:blue;font-size:18px" class="space">Formula: H=  STD.Ceiling Height  -  (No.Of Grids  x Pitch  x  910)  -  STD Allowance From Ceiling</p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label  style="font-size:20px;color:black">STD.Ceiling Height:</label>
										<select  style="font-size:20px" id="sch"  name="sch" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
											<?php } ?>	
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">#Grids:</label>
										<input type="number" name="grids" id="grids" value="" style="font-size:20px;width:100px;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> x
								</td>
									<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">Pitch:</label>
										<input type="number" name="pitch" id="pitch" value="" style="font-size:20px;width:100px;text-align:center"  />
										<input type="hidden" name="sub1" id="sub1" value="910"  />
										<input type="hidden" name="sa" id="sa" value="150"  />
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> x 910
								<td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> -150</td>
							</tr>	
							<tr>	
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;"><br>
									<center><label style="font-size:25px;color:black">Height=</label>
									<input type="" name="sum" id="sum" value="" style="font-size:20px;width:100px;text-align:center" disabled  />
									<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">	
								</td>									
							</tr>
						</tbody>										  			
					</table>
				</form>
			</div>			
			<div id="tab5" class="tab-pane fade">
				<form id="myForm4">
					<?php	
						include_once 'include/dbcon.php';
						$query="SELECT * FROM computation limit 9 ";
						$result= $db_connect->query($query);
					?>	
					<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
						<thead>
								<div data-role="header" class="" id="FireAlarmInstalledatKoubaiUnderFukiage">
									<th colspan="9"><h1>FireAlarm Installed at Koubai Under Fukiage</h1></th>
								</div>
						</thead>
						<tbody>
							<tr>
								<td colspan="8" border="2"><br>	
										<p style="color:blue;font-size:18px" class="space">Formula: H=  Open Area  +  (No.Of Grids  x Pitch  x  910)  -  STD D.A From Ceiling</p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">Open Area:</label>
										<select  style="font-size:20px" id="openA"  name="openA" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
											<?php } ?>	
										</select>																	
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> +
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">#Grids:</label>
										<input type="number" name="ngrids" id="ngrids" value="" style="font-size:20px;width:100px;text-align:center" />
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red"> x
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">pitch:</label>
									  <input type="number" name="pitch1" id="pitch1" value="" style="font-size:20px;width:100px;text-align:center"  />
									  <input type="hidden" name="sub2" id="sub2" value="910"  />
											<?php	
											include_once 'include/dbcon.php';
											$query="SELECT * FROM computation limit 3 ";
											$result= $db_connect->query($query);
											?>
								</td><td style="vertical-align:middle;font-size:20px;font-weight:bold;text-align:center;color:red"> x 910
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red"> -
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:20px;color:black">D.A From Ceiling Height:</label>
									<select  style="font-size:20px" id="da"  name="da" required="required" >
										<option value=""></option>
										<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['allowance']?>"><?php echo $row['type2']?></option>
											<?php } ?>	
									</select>	
								</td>
								<tr>
									<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
										<label style="font-size:25px;color:black">Height=</label>
											<input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
											<input type="" name="sum1" id="sum1" value="" style="font-size:20px;width:100px;text-align:center" disabled  />													
											<p style="color:blue;font-size:15px;text-align:left" class="space"><span style="color:red;">Note:</span>"If Computed Height Ends w/ Whole Number Possible To Use As Height Of Fire Alarm, Example: 3652, But If Computed Height	Ends w/ Decimal Points<br>	     Last Digit Should Be Ended in 0,Example 3652.15 change to 3650.</p>
									</td>											
								</tr>									
							</tr>							
						</tbody>									
					</table>				
				</form>
			</div>
			<div id="tab6" class="tab-pane fade">
				<form id="myForm5">
					<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
						<thead>
							<div data-role="header" class="" id="FireAlarmInstalledinRoomwithGivenCeilingHeight">
								<th colspan="4"><h1>FireAlarm Installed in Room with Given Ceiling Height</h1></th>
						    </div>
						</thead>
						<tbody>
							<tr>
								<td colspan="4" border="2"><br>	
									<p style="color:blue;font-size:18px" class="space">Formula:   Given Ceiling Height   -   STD Ceiling Height(300)</p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Given Ceiling Height:</label>
										<input type="number" name="givenCH" id="givenCH" value="" style="font-size:20px;width:100px;text-align:center"  />
										<input type="hidden" name="STD" id="STD" value="300"  />
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;text-align:center;color:red"> - 300
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Height=</label>
										<input type="" name="sum2" id="sum2" value="" style="font-size:20px;width:100px;text-align:center" disabled  />
								</td>
								<tr>
									<td colspan="3">
										<input class="bg-danger" type="button" onclick="myFunction5()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
									</td>
								</tr>
							</tr>
						</tbody>														
					</table>				
				</form>
			</div>	
			<div id="tab7" class="tab-pane fade">
				
					<?php	
						include_once 'include/dbcon.php';
						$query="SELECT * FROM computation ";
						$result= $db_connect->query($query);
					?>
				<form id="myForm6">	
					<table class="table table-condensed" border="2" style="background-color:aliceblue;width:100%">
						<thead>
							<div data-role="header">
								<th colspan="8"><h1>With Requested Height For Fire Alarm</h1></th>
							</div>
						</thead>
						<tbody>	
							<tr>
								<td colspan="6" border="2"><br>
									
									<p style="color:blue;font-size:18px" class="space"><span style="color:red">*For Standard Ceiling Height*</span>	Formula:   STD.CH   -   Requested Height</p>
								</td>
							</tr>	
							<tr>	
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">STD_CH:</label>
										<select  style="font-size:20px" id="STD_CH"  name="STD_CH" required="required" >
											<option value=""></option>
										<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
											<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
										<?php } ?>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Requested Height:</label>
										<input type="number" name="rqh" id="rqh" value="" style="font-size:20px;width:100px;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;text-align:center;color:red"> =
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Height=</label>
										<input type="" name="sum3" id="sum3" value="" style="font-size:20px;width:100px;text-align:center" disabled  />
									<br><label style="font-size:25px;color:black">Result:</label>	
										<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
								</td>
							</tr>
							<tr>
								<td colspan="6" border="2"><br>
									<p style="color:blue;font-size:18px" class="space"><span style="color:red">*If with Given Ceiling Height*</span>	Formula:   Given Ceiling Height   -   Requested Height</p>	
								</td>
							</tr>	
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">G.Ceiling Height:</label>
									<input type="number" name="Given_Ceiling_Height" id="Given_Ceiling_Height" value="" style="font-size:20px;width:100px;text-align:center" />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Requested Height:</label>
									<input type="number" name="Requested_Height" id="Requested_Height" value="" style="font-size:20px;width:100px;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;text-align:center;color:red"> =
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Height=</label>
									<input type="" name="sum4" id="sum4" value="" style="font-size:20px;width:100px;text-align:center" disabled  />
									<br><label style="font-size:25px;color:black">Result:</label>
										<input type="text" id="demo4" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
								</td>
							</tr>
								<?php	
									include_once 'include/dbcon.php';
									$query="SELECT * FROM computation limit 9 ";
									$result= $db_connect->query($query);
								?>
							<tr>
								<td colspan="6" border="2"><br>
									<p style="color:blue;font-size:18px" class="space"><span style="color:red">*For Kemuri w/ Requested Height in Hukinuke*</span>		Formula:   Open Area   +   STD. Ceiling Height  -  Requested Height</p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Open area:</label>
										<select  style="font-size:20px" id="Open_area"  name="Open_area" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
											<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
											<?php } ?>
										</select>
								</td>
								<?php	
									include_once 'include/dbcon.php';
									$query="SELECT * FROM computation ";
									$result= $db_connect->query($query);
								?>
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;text-align:center;color:red"> +				
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">STD Ceiling Height:</label>
										<select  style="font-size:20px" id="std_cei_light"  name="std_cei_light" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
											<?php } ?>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;text-align:center;color:red"> -		
								</td><td style="text-align:center;vertical-align:middle;">
									<label style="font-size:25px;color:black">Requested Height :</label>
										<input type="number" name="Requested_Height1" id="Requested_Height1" value="" style="font-size:20px;width:100px;text-align:center"  /></center>
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:25px;color:black">Height=</label>
										<input type="" name="sum5" id="sum5" value="" style="font-size:20px;width:100px;text-align:center" disabled  /><br>															
									<label style="font-size:25px;color:black" class="space">						Result:</label>
										<input class="bg-danger" type="button" onClick="myFunction6()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">	
										<input type="text" id="demo5" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF" disabled>
								</td>
							</tr>	
						</tbody>									
					</table>				
				</form>
			</div>	
		</div>								
	</section>								
</section>								

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
function myFunction6() {
    document.getElementById("myForm6").reset();   
}


</script>
<script>

    function goToByScroll(id){
          // Reove "link" from the ID
        id = id.replace("link", "");
          // Scroll
        $('html,body').animate({
            scrollTop: $("#"+id).offset().top-80},
            'slow');
    }

    $("#selection > ul > li > a").click(function(e) { 
          // Prevent a page reload when a link is pressed
        e.preventDefault(); 
          // Call the scroll function
        goToByScroll($(this).attr("id"));
	window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

    });
</script>
<?php include ('footer.php'); ?>


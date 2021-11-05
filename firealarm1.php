<?php include ('header.php'); ?>

    	<script>
		
    	 $(document).ready(function() {
    	   function compute() {
              var number1 = $('#number1').val();
              var number2 =  parseFloat($('input[name=number2]').val() || 0 ); 
              var number3 = $('#number3').val();
              var ch = parseFloat($('select[name=ch]').val() || 0 );
              var rh = parseFloat($('input[name=rh]').val() || 0 );
			  
			  
			  
			  //var result = parseFloat($('input[name=result]').val() || 0 );
			    var results = 'HIT';
			    var results1 = 'NOT HIT';
    
			  
			 
              var total2 = ch-(number1 * number3 + number2) ;
              var total = rh-(number1 * number3 + number2);
              if (rh != '') {
					$('#total').val(total);
					 document.getElementById("demo").innerHTML = results1;	
					
				if(total < 100 ) {
					document.getElementById("demo").innerHTML = results;	
				}
				}  else if (ch != '')  {
					$('#total').val(total2);
					document.getElementById("demo").innerHTML = results1;
					if(total2 < 100 ) {
					 document.getElementById("demo").innerHTML = results;					
				}
				} else {
					$('#total').val(total2);
					document.getElementById("demo").innerHTML = results1;
				
					
					
					
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
				
				
				if(ws && sash && sh && oa !== "" ) {
					$('#result4').val(result4);
					document.getElementById("demo1").innerHTML = resultB;
					
					if(result4 < 100 ) {
					 document.getElementById("demo1").innerHTML = resultA;	
					 
					}else if(result4 < 100 ){
						$('#result4').val(result4);
						  document.getElementById("demo1").innerHTML = resultA;
					 
					}
				}

            }
            $('#ws, #sash, #sub,#resultA').change(compute2);
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
              
					
					$('#sum').val(sum);
				
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
              
					
					$('#sum1').val(sum1);
				
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
            $('#givenCH, #STD').change(compute5);
    		
    	 });
		 
		 $(document).ready(function() {
    	   function compute6() {
				var STD_CH = $('#STD_CH').val();
				var rqh =  parseFloat($('input[name=rqh]').val() || 0 ); 
				
				var res = 'HIT';
			    var res2 = 'NOT HIT';
				
				var sum3 = STD_CH - rqh ;
						$('#sum3').val(sum3);
						document.getElementById("demo3").innerHTML = res2;
							if(sum3 < 150 ) {
							document.getElementById("demo3").innerHTML = res;
					}else if(sum3 < 150 ){
						$('#sum3').val(sum3);
						 document.getElementById("demo3").innerHTML = res;
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
						$('#sum4').val(sum4);
						document.getElementById("demo4").innerHTML = resu2;
							if(sum4 < 150 ) {
							document.getElementById("demo4").innerHTML = resu;

					}else if(sum4 < 150 ){
						$('#sum4').val(sum4);
						 document.getElementById("demo4").innerHTML = resu;
					 
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
		
						$('#sum5').val(sum5);
						document.getElementById("demo5").innerHTML = resul2;
							if(sum5 < 150 ) {
							document.getElementById("demo5").innerHTML = resul;
				 }else if(sum5 < 150 ){
						$('#sum5').val(sum5);
						  document.getElementById("demo5").innerHTML = resul;
					 
					}
            }
            $('#Open_area,#std_cei_light,#Requested_Height1').change(compute8);
			 
			});
			
			
 
			
			
			 
    	</script>
		<style>
			
			.space{
				white-space:pre;				
			}
		</style>
<div class="container-fluid">	
	<section id="main-content">
        <section class="wrapper">
              <div class="row">
				<div data-role="page" id="irr">
				<div id="selection">
					<ul>
						<li><a id="FireAlarmAboveWindowlink" href="#" style="font-size:20px">Fire Alarm Above Window</a></li>
						<li><a id="FireAlarmInstalledinHukinukelink" href="#" style="font-size:20px">FireAlarm Installed in Hukinuke</a></li>
						<li><a id="FireAlarmInstalledAboveWindowinHukinukelink" href="#" style="font-size:20px">FireAlarm Installed Above Window in Hukinuke</a></li>						
						<li><a id="FireAlarmInstalledatKoubaiUnderFukisagelink" href="#" style="font-size:20px">FireAlarm Installed at Koubai Under Fukisage</a></li>						
						<li><a id="FireAlarmInstalledatKoubaiUnderFukisage2link" href="#" style="font-size:20px">FireAlarm Installed at Koubai Under Fukisage2</a></li>						
						<li><a id="FireAlarmInstalledinRoomwithGivenCeilingHeightlink" href="#" style="font-size:20px">FireAlarm Installed in Room with Given Ceiling Height</a></li>						
						<li><a id="FireAlarmInstalledinRoomwithGivenCeilingHeightlink" href="#" style="font-size:20px">With Requested Height For Fire Alarm </a></li>						
					</ul>
				</div>
			<table border="2" style="background-color:lightblue;width:100%">
				<td>	
						<div data-role="header" class="" id="FireAlarmAboveWindow">
							<h1 style="color:green">FireAlarm Above Window</h1>						
						</div>			
				  <div data-role="content">
						<div data-role="fieldcontain">								
							<div class="container-fluid">
								<p style="color:blue;font-size:18px" class="space">Formula: H= Height of Alarm/Requested Height    -   Last two digits of Window Serial    x    30.3   +    Sash Height</p>		
								<div class="row">	
									<div class="col-sm-4">
											<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">												
												<td>									
														<label style="font-size:120%;color:black">Height of FireAlarm:</label>&nbsp;
															<select  style="width:150px;height:25px" id="ch"  name="ch" required="required">
																<option value=""></option>
																<option value="2350">2650 1F</option>	
																<option value="2300">2600 1F</option>
																<option value="2200">2500</option>
																<option value="2175">2475</option>
																<option value="2100">2400 (240)</option>
																<option value="2250">2400 (265)</option>
															</select><br>								
														<label style="font-size:130%;color:black">Requested Height:</label>&nbsp;
															<input type="text" name="rh" id="rh" value=""  style="width:150px;height:25px"/>									
												</td>													
											</table>
								</div>												
								<div class="col-sm-4">		
											<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
												
												<td>
										<center><label style="font-size:120%;color:black">Last two digits of Window Serial:</label>
													<input type="number" name="number1" id="number1" value="" style="width:80%;height:25px" /></center>
												</td>
											</table>	
								</div>							
								<div class="col-sm-4">			
											<table class="table table-striped table-condensed table-hover table-bordered" style="width:50%">
												<td>
													<center><label style="font-size:130%;color:black">SASH Height:</label>
													<input type="number" name="number2" id="number2" value="" style="width:160px;height:25px"  />
													<input type="hidden" name="number3" id="number3" value="30.3"  /></center>
												</td>
											</table>														
								</div>									
							</div>
														
									<br>
							<div class="container-fluid">											
								<div class="row">
									<div class="col-sm-3">											  					 											
											<p style="color:maroon;font-size:130%" class="space">                             D.A Of Fire Alarm<br>	  			From Window</p>																				
									</div>
									<div class="col-sm-3">
										<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">	  					  
											<td>
											<label style="font-size:130%;color:black">H =</label>
												<input type="text" name="total" id="total" value="" style="width:160px;height:25px"  />												
											</td>				
										</table>
									</div>		
									<div class="col-sm-3">
										<p style="font-size:25px;color:red;font-weight:bold" id="demo"></p>
									</div>
																	
								</div>									
							</div>							
						</div>			  
					</div>
				  </div>
				</td>  
			</table>	  
        </section>
	</section>
	
			
<div class="container-fluid">
	<section id="main-content">
		<section class="">
				<div class="row">
					<div data-role="page" id="irr">
						<table border="2" style="background-color:lightblue;width:100%">
								<td>		
										<div data-role="header" class="" id="FireAlarmInstalledinHukinuke">
											<h1 style="color:green">FireAlarm Installed in Hukinuke</h1>
										  </div>
										  <div data-role="content">
											<div data-role="fieldcontain">
											<div class="container-fluid">
												<div class="row">	
													<div class="col-sm-6">
														<p style="color:red;font-size:120%" class="space">Formula:   For Standard Height of Kemuri In Hukinuke</p>
														<p style="color:blue;font-size:20px" class="space">H= OpenArea  +  STD.CH  -  300</p>
														
													</div>
													<div class="col-sm-6">
														<p style="color:red;font-size:120%" class="space">For Height Of Kemuri in Hukinuke If with G.Ceiling Height Indication</p>
														<p style="color:blue;font-size:20px" class="space">H= OpenArea  +  Given Ceiling Hight  +  STD.CH  -  300</p>
													</div>
												</div>
												<?php	
													include_once 'include/dbcon.php';
													$query="SELECT * FROM computation limit 10";
													$result= $db_connect->query($query);
												?>	
													<div class="row">
														<div class="col-sm-3">
															<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
																<td>
																<center>
																	<label style="font-size:120%;color:black">Type of plan(OpenArea):</label>
																	<select  style="width:160px;height:25px" id="tp"  name="tp" required="required">
																		<option value=""></option>
																		<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
																		<?php } ?>
																	</select>
																</center>	
																</td>	
															</table>	
														</div>
												<?php	
													include_once 'include/dbcon.php';
													$query="SELECT * FROM computation ";
													$result= $db_connect->query($query);
												?>	
													<div class="col-sm-3">
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:80%">
															<td>
															<center>
																<label style="font-size:120%;color:black">Select Room(STD.CH):</label>
																<select  style="width:160px;height:25px" id="sr"  name="sr" required="required" >
																	<option value=""></option>
																	<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
																		<?php } ?>	
																</select>
															</center>	
															</td>
														</table>
													</div>
													<div class="col-sm-3">
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">
															<td>
															<center>
																<label style="font-size:120%;color:black">Given Requested Height:</label>
																<input type="text" name="grh" id="grh" value="" style="width:160px;height:25px"  />
															</td>
															</center>
														</table>
													</div>
													<div class="col-sm-1">
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:80%">
															<td>
															<center>
																<label style="font-size:120%;color:black">Allowance:</label>
																<input type="" name="a" id="a" value="300" style="width:160px;height:25px"  />
															</center>	
															</td>
														</table>
													</div>
												</div>
												<br>
										<div class="col-sm-5">
														<p style="color:maroon;font-size:130%" class="space">				        	                   Height Of Fire Alarm<br>   							                     in Hukinuke</p>
													</div>					
													<div class="col-sm-3">
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">	
															<td>	
															<center><label style="font-size:130%;color:black">H=</label>
																<input type="" name="r" id="r" value="" style="width:160px;height:25px"  /></center>
															</td>	
														</table>
													</div>								
												</div>
												</div>											
										  </div>													
										</div>
								</td>
						</table>
					</div>
							  
				</section>
			</section>	
<br>				
<section id="main-content">
		<?php	
			include_once 'include/dbcon.php';
			$query="SELECT * FROM computation limit 8 ";
			$result= $db_connect->query($query);
		?>	
        <section class="">
            <div class="row">
					<div data-role="page" id="irr">
					<table border="2" style="background-color:lightblue;width:100%">
						<td>
							  <div data-role="header" class="" id="FireAlarmInstalledAboveWindowinHukinuke">
								<h1 style="color:green">FireAlarm Installed Above Window in Hukinuke</h1>
							  </div>
							<div data-role="content">
								<div data-role="fieldcontain">
									<div class="container-fluid">
										<p style="color:blue;font-size:18px" class="space">Step 1:Formula: H=   Last two digits of Window Serial   x   30.3   +   Sash Height</p>
										<div class="row">
											<div class="col-sm-5">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
													<td>
															<label style="font-size:120%;color:black">Last two digits of Window Serial:</label>
															<input type="text" name="ws" id="ws" value="" style="width:150px;height:25px"  />
															<input type="hidden" name="sub" id="sub" value="30.3"  />
													</td>
												</table>	
											</div>
										<div class="col-sm-4">
											<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">
												<td>
													<label style="font-size:120%;color:black">SASH Height:</label>
														<input type="text" name="sash" id="sash" value="" style="width:150px;height:25px"  />
												</td>
											</table>	
										</div>	
										<div class="col-sm-3">
											<table class="table table-striped table-condensed table-hover table-bordered" style="width:85%">
												<td>										
														<label style="font-size:120%;color:black">H=</label>
														<input type="text" name="result" id="result" value="" style="width:150px;height:25px"  />
														<center><p style="color:maroon;font-size:15px">Window Height</p></center>
												</td>
											</table>	
										</div>								
									</div>									
										<p style="color:blue;font-size:18px" class="space">Step 2:Formula: H=   Type of plan(STD HEIGHT)  -  Type of plan(OPEN AREA)</p>
										<div class="row">
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
													<td>
													<label style="font-size:120%;color:black">(STD HEIGHT):</label>
															<select  style="width:180px;height:25px" id="sh"  name="sh" required="required" >
																<option value=""></option>
																<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['open2']?>"><?php echo $row['type']?></option>
																		<?php } ?>	
															</select>
													</td>
												</table>
											</div>		
											<?php	
														include_once 'include/dbcon.php';
														$query="SELECT * FROM computation ";
														$result= $db_connect->query($query);
											?>												
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
													<td>
														<label style="font-size:120%;color:black">(OPEN AREA):</label>
															<select  style="width:180px;height:25px" id="oa"  name="oa" required="required" >
																<option value=""></option>
																<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
																		<?php } ?>	
																	
															</select>
													</td>
												</table>
											</div>
											
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:60%;">
													<td>
														<label style="font-size:120%;color:black">H=</label>
																<input type="text" name="result3" id="result3" value=""  />
																<center><p style="color:maroon;font-size:15px">Height Of Fire Alarm<br>from 2FFL</p></center>
															
													</td>
												</table>
											</div>						
										</div>
										
										<div class="row">
											<div class="col-sm-7">
											<p style="color:blue;font-size:18px" class="space">Step 3:Formula: H=  Height Of Fire Alarm from 2FFL   -   Window Height</p>
											</div>
											<div class="col-sm-3">
													<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
														<td>									
															<center><label style="font-size:120%;color:black">H=</label>
																	<input type="text" name="result4" id="result4" value="" style="width:160px;height:25px"  />
																	<p style="color:maroon;font-size:15px">D.A Of FireAlarm From Window</p></center>
																		
														</td>
													</table>
											</div>
											<div class="col-sm-2">
												<p style="font-size:25px;color:red;font-weight:bold" id="demo1"></p>
											</div>
										</div>			
									</div>
								</div>
							</div>
						</td>
					</table>
				</div>					
			</div>			
        </section>
</section>
<br>
<section id="main-content">
		<?php	
			include_once 'include/dbcon.php';
			$query="SELECT * FROM computation ";
			$result= $db_connect->query($query);
		?>	
        <section class="">
              <div class="row">
					<div data-role="page" id="irr">
						<table border="2" style="background-color:lightblue;width:100%">
							<td>
								<div data-role="header" class="" id="FireAlarmInstalledatKoubaiUnderFukisage">							  
									<h1 style="color:green">FireAlarm Installed at Koubai Under Fukisage</h1>
								</div>
								
										<div data-role="content">
											<div data-role="fieldcontain">
												<div class="container-fluid">
												<p style="color:blue;font-size:18px" class="space">Formula: H=  STD.Ceiling Height  -  (No.Of Grids  x Pitch  x  910)  -  STD Allowance From Ceiling</p>
													<div class="row">
														<div class="col-sm-5">
															<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">
																<td>
																 <label  style="font-size:120%;color:black">STD.Ceiling Height:</label>&nbsp;
																	<select  style="width:180px;height:25px" id="sch"  name="sch" required="required" >
																		<option value=""></option>
																		<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
																		<?php } ?>	
																	</select>
																</td>
															</table>	
														</div>	
														<div class="col-sm-3">
															<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">
																<td>
																	<label style="font-size:120%;color:black">#Grids:</label>
																	<input type="text" name="grids" id="grids" value="" style="width:160px;height:25px"  />
																</td>
															</table>	
														</div>	
														<div class="col-sm-4">
															<table class="table table-striped table-condensed table-hover table-bordered" style="width:75%">
																<td>
																  <label style="font-size:120%;color:black">Pitch:</label>
																		<input type="text" name="pitch" id="pitch" value="" style="width:160px;height:25px"  />
																		<input type="hidden" name="sub1" id="sub1" value="910"  />
																		<input type="hidden" name="sa" id="sa" value="150"  />
																</td>
															</table>	
														</div>
													</div>	
															<center>
																<table class="table table-striped table-condensed table-hover table-bordered" style="width:20%">
																	<td>
																		<label style="font-size:120%;color:black">H=</label>
																		<input type="text" name="sum" id="sum" value="" style="width:160px;height:25px"  />
																		<center><p style="color:maroon;font-size:15px" class="space">Height Of Alarm In Koubai<br>  Tenjou Under Fukisage</p></center>
																	</td>
																</table>	
															</center>
															
												</div>	  
											</div>	  
										</div>
					</div>		
							</td>			
						</table>
															
					</div><! --/row -->
				</div>
		</section>
</section>
<br>
<section id="main-content">
	<?php	
		include_once 'include/dbcon.php';
		$query="SELECT * FROM computation ";
		$result= $db_connect->query($query);
		?>	
        <section class="">
            <div class="row">
					<div data-role="page" id="irr">
						<table border="2" style="background-color:lightblue;width:100%">
							<td>
									<div data-role="header" class="" id="FireAlarmInstalledatKoubaiUnderFukisage2">
										<h1 style="color:green">FireAlarm Installed at Koubai Under Fukisage2</h1>
									</div>
									<div data-role="content">
										<div data-role="fieldcontain">
											<div class="container-fluid">
											<p style="color:blue;font-size:18px" class="space">Formula: H=  Open Area  +  (No.Of Grids  x Pitch  x  910)  -  STD D.A From Ceiling</p>
												<div class="row">
													<div class="col-sm-3">
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:70%">
															<td>																										
																 <center><label style="font-size:120%;color:black">Open Area:</label>
																	<select  style="width:160px;height:25px" id="openA"  name="openA" required="required" >
																		<option value=""></option>
																		<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
																		<?php } ?>	
																	</select></center>																													
															</td>
														</table>
													</div>
													<?php	
														include_once 'include/dbcon.php';
														$query="SELECT * FROM computation ";
														$result= $db_connect->query($query);
														?>
													<div class="col-sm-3">	
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">
															<td>																												
																<center><label style="font-size:120%;color:black">D.A From Ceiling Height:</label>
																<select  style="width:170px;height:25px" id="da"  name="da" required="required" >
																	<option value=""></option>
																	<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['allowance']?>"><?php echo $row['type2']?></option>
																		<?php } ?>	
																</select></center>																															
															</td>
														</table>
													</div>	
													<div class="col-sm-3">	
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">											
															<td>
																<label style="font-size:120%;color:black">#Grids:</label>
																<input type="text" name="ngrids" id="ngrids" value="" style="width:160px;height:25px"  />
															</td>															
														</table>
													</div>	
													<div class="col-sm-3">
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">														
															<td>
															  <label style="font-size:120%;color:black">pitch:</label>
															  <input type="text" name="pitch1" id="pitch1" value="" style="width:160px;height:25px"  />
															  <input type="hidden" name="sub2" id="sub2" value="910"  />
															</td>														
														</table>
													</div>
												</div>
													<center>
														<table class="table table-striped table-condensed table-hover table-bordered" style="width:20%">														
															<td>
																  <label style="font-size:120%;color:black">H=</label>
																  <input type="text" name="sum1" id="sum1" value="" style="width:160px;height:25px"  />
																  <center><p style="color:maroon;font-size:15px" class="space">Height Of Alarm In Koubai<br>  Tenjou Under Fukisage</p></center>
															</td>																												
														</table>
													</center>
													<p style="color:red;font-size:20px">Note:</p>
													<p style="color:blue;font-size:15px">If Computed Height Ends w/ Whole Number Possible To Use As Height Of Fire Alarm, Example: 3652, But If Computed Height	Ends w/ Decimal Points<br>Last Digit Should Be Ended in 0,Example 3652.15 change to 3650.</p>
											</div>			
										</div>
									</div>
							</td>
						</table>
					</div>
			</div>
			
		</section>	
</section>
<br>
<section id="main-content">
          <section class="">
            <div class="row">
				<div data-role="page" id="irr">
					<table border="2" style="background-color:lightblue;width:100%">
						<td>
						    <div data-role="header" class="" id="FireAlarmInstalledinRoomwithGivenCeilingHeight">
								<h1 style="color:green">FireAlarm Installed in Room with Given Ceiling Height</h1>
						    </div>
									<div data-role="content">
										<div data-role="fieldcontain">
											<div class="container-fluid">	
											<p style="color:blue;font-size:18px" class="space">Formula:   Given Ceiling Height   -   STD Ceiling Height(300)</p>	
												<div class="row">													
														<div class="col-sm-6">	
															<table class="table table-striped table-condensed table-hover table-bordered" style="width:70%">											
																<td>
																	<label style="font-size:120%;color:black">Given Ceiling Height:</label>
																		<input type="text" name="givenCH" id="givenCH" value="" style="width:160px;height:25px"  />
																	<input type="hidden" name="STD" id="STD" value="300"  />
																</td>
															</table>
														</div>
														<div class="col-sm-3">	
															<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">											
																<td>
																  <label style="font-size:120%;color:black">H=</label>
																  <input type="" name="sum2" id="sum2" value="" style="width:160px;height:25px"  />
																  <center><p style="color:maroon;font-size:15px" class="space">Height Of Fire Alarm</p></center>
																</td>
															</table>
														</div>											
												</div>
											</div>
										</div>			
									</div>										  
						</td>										
					</table>				 
                </div>
            </div>
    </section>
</section>
<br>
<section id="main-content">
	<?php	
		include_once 'include/dbcon.php';
		$query="SELECT * FROM computation ";
		$result= $db_connect->query($query);
	?>
    <section class="">
        <div class="row">
			<div data-role="page" id="irr">
				<table border="2" style="background-color:lightblue;width:100%">
						<td>
							<div data-role="header">
							<h1 style="color:green">With Requested Height For Fire Alarm</h1>
							</div>
								
						<div data-role="content">
							<div data-role="fieldcontain">
								<div class="container-fluid">
									<p style="color:red;font-size:15px">*For Standard Ceiling Height*</p>
									<p style="color:blue;font-size:18px" class="space">Formula:   STD.CH   -   Requested Height</p>
										<div class="row">
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">											
													<td>
														<label style="font-size:120%;color:black">STD_CH:</label>
															<select  style="width:170px;height:25px" id="STD_CH"  name="STD_CH" required="required" >
																<option value=""></option>
																<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
																		<?php } ?>
															</select>
													</td>
												</table>	
											</div>	
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">											
													<td>
														<label style="font-size:120%;color:black">Requested Height:</label>
														<input type="text" name="rqh" id="rqh" value="" style="width:160px;height:25px"  />
													</td>
												</table>
											</div>	
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:65%">											
													<td>	
														<label style="font-size:120%;color:black">H=</label>
														<input type="text" name="sum3" id="sum3" value="" style="width:160px;height:25px"  />
														<center><p style="color:maroon;font-size:15px" class="space">D.A From Ceiling</p></center>
														
														<p style="font-size:25px;color:red;font-weight:bold" id="demo3"></p>
											
													</td>
												</table>
											</div>
										</div>
										<p style="color:red;font-size:15px">*If with Given Ceiling Height*</p>
										<p style="color:blue;font-size:18px" class="space">Formula:   Given Ceiling Height   -   Requested Height</p>	
										<div class="row">												
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">											
													<td>														
														<label style="font-size:120%;color:black">G.Ceiling Height:</label>
														<input type="text" name="Given_Ceiling_Height" id="Given_Ceiling_Height" value="" style="width:160px;height:25px"  />
													</td>
												</table>
											</div>	
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:100%">											
													<td>	
														<label style="font-size:120%;color:black">Requested Height:</label>
														<input type="text" name="Requested_Height" id="Requested_Height" value="" style="width:160px;height:25px"  />
													</td>
												</table>
											</div>
											<div class="col-sm-4">
												<table class="table table-striped table-condensed table-hover table-bordered" style="width:65%">											
													<td>
														<label style="font-size:120%;color:black">H=</label>
														<input type="text" name="sum4" id="sum4" value="" style="width:160px;height:25px"  />
														<center><p style="color:maroon;font-size:15px" class="space">D.A From Ceiling</p></center>
														<p style="font-size:25px;color:red;font-weight:bold" id="demo4"></p>
													</td>
												</table>
											</div>
										</div>
										<?php	
											include_once 'include/dbcon.php';
											$query="SELECT * FROM computation ";
											$result= $db_connect->query($query);
										?>
										<p style="color:red;font-size:15px">*For Kemuri w/ Requested Height in Hukinuke*</p>
										<p style="color:blue;font-size:18px" class="space">Formula:   Open Area   +   STD. Ceiling Height  -  Requested Height</p>
										<div class="row">												
												<div class="col-sm-3">
													<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">											
														<td>	
															<center><label style="font-size:120%;color:black">Open area:</label>
																<select  style="width:170px;height:25px" id="Open_area"  name="Open_area" required="required" >
																<option value=""></option>
																<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['open']?>"><?php echo $row['kanabakari']?></option>
																		<?php } ?>
															</select></center>
														</td>
													</table>
												</div>
												<?php	
													include_once 'include/dbcon.php';
													$query="SELECT * FROM computation ";
													$result= $db_connect->query($query);
												?>
												<div class="col-sm-3">
													<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">											
														<td>
														<center><label style="font-size:120%;color:black">STD Ceiling Height:</label>
																<select  style="width:170px;height:25px" id="std_cei_light"  name="std_cei_light" required="required" >
																<option value=""></option>
																<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
																			<option value="<?php echo $row['std']?>"><?php echo $row['room']?></option>
																		<?php } ?>
															</select></center>
														</td>
													</table>
												</div>
												<div class="col-sm-3">
													<table class="table table-striped table-condensed table-hover table-bordered" style="width:80%">											
														<td>
															<center><label style="font-size:120%;color:black">Requested Height :</label>
															<input type="text" name="Requested_Height1" id="Requested_Height1" value="" style="width:160px;height:25px"  /></center>	
														</td>
													</table>
												</div>
												<div class="col-sm-3">
													<table class="table table-striped table-condensed table-hover table-bordered" style="width:90%">											
														<td>
														<label style="font-size:120%;color:black">H=</label>
															<input type="text" name="sum5" id="sum5" value="" style="width:160px;height:25px"  />
															<center><p style="color:maroon;font-size:15px" class="space">D.A From Ceiling</p></center>
															<p style="font-size:25px;color:red;font-weight:bold" id="demo5"></p>
														</td>
													</table>
												</div>	
										</div>		
								</div>
							</div>
						</div>
					</td>
				</table>
			</div>
		</div>						
    </section>
</section>
<br>
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
    });
</script>
<?php include ('footer.php'); ?>
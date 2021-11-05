<?php include ('header.php'); ?>

<script>
		 /* 	function sum(){
	
		var SRKF = document.getElementById('SRKF').value || 0;
		var SCH = document.getElementById('SCH').value || 0;
		var DACH = document.getElementById('DACH').value || 0;
		var PITCH =document.getElementById('PITCH').value || 0;
		var CONSTANT = document.getElementById('CONSTANT').value || 0;
		var HEIGHT1 = (parseFloat(SCH)-(parseFloat(GRID) * parseFloat(PITCH) * parseFloat(CONSTANT)))-parseFloat(DACH) ;
		 document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
	 }
	 
	 $('#sum').change(function(){
	$('#HEIGHT1').val('');
	});   */  
    /*  $(document).ready(function() {
    	   function compute() {
      
		
         var SCH = parseFloat($('input[name=SCH]').val() || 0 );
		var DACH = parseFloat($('input[name=DACH]').val() || 0 );
		var GRID = parseFloat($('input[name=GRID]').val() || 0 );
		var PITCH =parseFloat($('input[name=PITCH]').val() || 0 );
		var CONSTANT = parseFloat($('input[name=CONSTANT]').val() || 0 );
		//var tdtc = parseFloat($('input[name=tdtc]').val() || 0 );
		var HEIGHT1 = (SCH-(GRID * PITCH * CONSTANT))-DACH; 
		//document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
			   
            $('#HEIGHT1').val(HEIGHT1);
			 
				
			
            }
            $('#GRID,#PITCH,#CONSTANT,#SCH,#DACH,#SRKF').change(compute); 
    		
    	}); 
		
		$(document).ready(function() {
    	   function compute1() {
      
		 var ash = document.getElementById('ash').value;
		var tile1 = document.getElementById('tile1').value;
		var tdtc = document.getElementById('tdtc').value;
		var lh1 = document.getElementById("HEIGHT1").value;
		var HEIGHT2 = (parseFloat(ash) - parseFloat(lh1)) / parseFloat(tile1)  ;
		//var height123 = (parseFloat(height12) / 10) * 10;
		//document.getElementById('height12').value = parseFloat(height12).toFixed(1); 
			   
           $('#HEIGHT2').val(HEIGHT2);
			 
	 
            }
            $('#ash, #tile1,#GRID,#lh1,#SRKF,#tdtc').change(compute1); 
    		
    	 });  */
//////////////////////////////////SAGARU TENJOU////////////////////////////////////////////		
		  $(document).ready(function() {
    	   function compute2() {
      
		
         var SCH1 = parseFloat($('input[name=SCH1]').val() || 0 );
	
		var GRID1 = parseFloat($('input[name=GRID1]').val() || 0 );
		var PITCH1 =parseFloat($('input[name=PITCH1]').val() || 0 );
		var CONSTANT1 = parseFloat($('input[name=CONSTANT1]').val() || 0 );
		
		var ash3 = parseFloat($('input[name=ash3]').val() || 0 );
	
		var tile2 = parseFloat($('input[name=tile2]').val() || 1 );
		
		var HEIGHT3 = SCH1-(GRID1* PITCH1 * CONSTANT1); 
		var HEIGHT4 = (ash3 - HEIGHT3) / tile2 ;
		
		//document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
			   
            $('#HEIGHT3').val(HEIGHT3);
            $('#HEIGHT4').val(HEIGHT4);
			 
				
			
            }
            $('#GRID1,#PITCH1,#CONSTANT1,#SCH1,#HEIGHT4,#lh3,#SRKF1').keyup(compute2); 
            $('#GRID1,#PITCH1,#SCH1,#SRKF1,#HEIGHT4').change(compute2); 
    		
    	}); 
		 /*  $(document).ready(function() {
    	   function compute3() {
      
		
         
		var lh3 = document.getElementById("HEIGHT3").value;
		
		var HEIGHT4 = (ash3 - lh3) / tile2 ; 
		//document.getElementById('HEIGHT4').value = parseFloat(HEIGHT4);
			   
            $('#HEIGHT4').val(HEIGHT4);
			 
				
			
            }
            $('#ash3,#tile2,#lh3,#tdtc1,#HEIGHT3,#SRKF1,#HEIGHT4').change(compute3); 
    		
    	});   */
 
 /* $(document).ready(function() {
    	   function compute4() {
      
		 var ash3 = document.getElementById('ash3').value;
		var tile2 = document.getElementById('tile2').value;
		
		var lh2 = document.getElementById("HEIGHT4").value;
		var HEIGHT4 = (parseFloat(ash3) - parseFloat(lh2)) / parseFloat(tile2)  ;
		//var height123 = (parseFloat(height12) / 10) * 10;
		//document.getElementById('height12').value = parseFloat(height12).toFixed(1); 
			   
           $('#HEIGHT4').val(HEIGHT4);
			 
				
			
            }
            $('#ash3, #tile2,#GRID1,#lh2,#PITCH1,#SCH1,#SRKF1,#tdtc1').change(compute4); 
    		
    	 });  */ 		 

		 
		 
	  	 function sum(){
		
		var SRKF = document.getElementById('SRKF').value || 0;
		var std1 = document.getElementById('std1').value || 0;
		var DA = document.getElementById('DA').value || 0;
		var GRID = document.getElementById('GRID').value || 0;
		var PITCH =document.getElementById('PITCH').value || 0;
		var CONSTANT = document.getElementById('CONSTANT').value || 0;
		var HEIGHT1 = (parseFloat(std1)-(parseFloat(GRID) * parseFloat(PITCH) * parseFloat(CONSTANT)))-parseFloat(DA) ;
		 document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
	 }
	 
	 $('#sum,#GRID,#PITCH,#std1,#SRKF').change(function(){
	$('#HEIGHT1').val('');
	});  
	 	  /* function sum(){
	
		var ash = document.getElementById('ash').value;
		var tile1 = document.getElementById('tile1').value;
		var lh1 = document.getElementById("HEIGHT1").value;
		var height12 =(parseFloat(ash) - parseFloat(lh1)) / parseFloat(tile1) ;
		var height123 = (parseFloat(height12) / 10) * 10;
		
		 document.getElementById('height12').value = (parseFloat(height123).toFixed(1)) || 0;
	 }
	 $('#').change(function(){
	$('#').val('');
	});  */  
	///////////////////////////////////////////////////////////
	 
			$(document).ready(function() {
    	   function compute4() {
      
		
         var STDSOCKET1 = parseFloat($('input[name=STDSOCKET1]').val() || 0 );
	
		var STDCEILING1 = parseFloat($('input[name=STDCEILING1]').val() || 0 );
		var GCH1 = parseFloat($('input[name=GCH1]').val() || 0 );
		//var GC = document.getElementById("HEIGHT3").value;
		
		var HEIGHT5 = STDSOCKET1 - (STDCEILING1 - GCH1) ; 
		//document.getElementById('HEIGHT5').value = parseFloat(HEIGHT5);
			   
            $('#HEIGHT5').val(HEIGHT5);
			 
				  
			
            }
          
    		 $('#STDSOCKET,#STDCEILING,#GCH1,#SRKF2').change(compute4);
    	});  
		$(document).ready(function() {
    	   function compute5() {
      
		  var STDHEIGHT1 = parseFloat($('input[name=STDHEIGHT1]').val() || 0 );
		  var tile3 = parseFloat($('input[name=tile3]').val() || 0 );
		
		
		var lh5 = $('#HEIGHT5').val();
		var HEIGHT6 = (parseFloat(STDHEIGHT1) - parseFloat(lh5)) / parseFloat(tile3)  ;
		/* var HEIGHT6 = (parseFloat(HEIGHT6) * 10) / 10;
		document.getElementById('HEIGHT6').value = parseFloat(HEIGHT6).toFixed(1);  */
			   
           $('#HEIGHT6').val(HEIGHT6);
			 
	 
            }
            $('#STDHEIGHT1,#tile3,#lh5,#tdtc2,#HEIGHT6').change(compute5); 
    		
    	 }); 
		 /* function sum(){
	
		var STDSOCKET1 = document.getElementById('STDSOCKET1').value || 0;
		var STDCEILING1 = document.getElementById('STDCEILING1').value || 0;
		var GCH1 = document.getElementById('GCH1').value || 0;
		
		var HEIGHT5 = STDSOCKET1 - (STDCEILING1 - GCH1) ; 
		 document.getElementById('HEIGHT5').value = parseFloat(HEIGHT5);
	 }
	 
	  $('#GCH1').keyup(function(){
	$('#HEIGHT5').val(''); 
	});  */   
	
	//////////////////////////////////WITH REQUESTED////////////////////////////////////////////	
	$(document).ready(function() {
    	   function compute6() {
      
		var AC = parseFloat($('input[name=AC]').val()) || 0 ;
        var RAC = parseFloat($('input[name=RAC]').val()) || 0 ;	
		var tile4 = parseFloat($('input[name=tile4]').val()) || 1 ;
		//var GC = document.getElementById("HEIGHT3").value;
		
		var HEIGHT7 = (AC - RAC) / tile4 ; 
		//document.getElementById('HEIGHT7').value = parseFloat(HEIGHT7);
		var z = Math.ceil(HEIGHT7) ;
		var y = z * tile4 - AC;	
		var x = -y;
		
            $('#HEIGHT7').val(x);
			 
				  
			
            }
          
    		 $('#RAC,#AC,#tile4,#SRKF3,#tdtc3').change(compute6);
    	});
		$(document).ready(function() {
    	   function compute7() {
      
		var AC1 = parseFloat($('input[name=AC1]').val()) || 0 ;
        var RAC1 = parseFloat($('input[name=RAC1]').val()) || 0 ;	
		var tile5 = parseFloat($('input[name=tile5]').val()) || 1 ;
		
		
		var HEIGHT8 = Math.ceil(AC1 / tile5) ;
		 
		var s = (HEIGHT8 * 0.1) * 5;		
		//var t = Math.ceil(s * 10) / 10;
		var r = s * tile5;
		var v = r + AC1;
		
		
		
         $('#HEIGHT8').val(v);
			 
				  
			
            }
          
    		 $('#RAC1,#AC1,#tile5,#SRKF4,#tdtc4').change(compute7);
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
			input,select{
				color:blue;
				font-weight:bold;
			}
	</style>


<section id="main-content">			
	<section class="wrapper"><br>
		<center><label style="font-size:35px;font-family: arial black">AC SOCKET  HEIGHT COMPUTATION</label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">AC Machine Installed In Koubai Tenjou Under Fukisage</a></li>
			<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">AC Machine Located At Tenjou Sagaru w/o Height Indication Under Fukisage</a></li>
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">AC Machine Located At Tenjou Sagaru w/ CH Indication And Room w/ Given Ceiling Height</a></li>			
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">With Requested AC Socket Height(AC ス And AC Ordinary)</a></li>			
			<!--<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Denki Rimokon KI/Interface Unit Located in Lowered Ceiling</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			-->
		</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade">
				<form id="myForm2">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="8"><h1>AC Machine Installed In Koubai Tenjou Under Fukisage</h1></th>
							</div>	
						</thead>
						<tbody>
							
							<tr>
								<td colspan="9" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Height Of QCTB/CTB     +    Half Size Of Item   +   15</p></center>	
								</td>									
							</tr>
							 		<?php
							 function room() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT room FROM computation");
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
							foreach( room() as $value ) {
							  $option .= '<option value="'.$value["room"].'">'.$value["room"].'</option>';
							}
							?>
							
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF"  name="SRKF" onClick="" onchange="sum()" onblur="" />
											<option value=""></option>
											<option><?php echo $option; ?></option>
											
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">STD Ceiling Height:</label>
										<textarea id="std1" name="std1" class="hide std1" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" class="SCH" name="SCH" id="SCH" value="" style="font-size:20px;width:150px;color;text-align:center" onchange="sum()" />																												
								</td></td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">#grids:</label><br>
										<!--<textarea id="GRIDS" name="GRIDS" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:150px"></textarea>-->
										<input type="number" name="GRID" id="GRID" value="" style="font-size:20px;width:150px;color;text-align:center"  onchange="sum()"/>
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x								
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">pitch:</label>
										<!--<textarea id="PITCH1" name="PITCH1" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px"></textarea>-->	
										
										<input type="number" name="PITCH" id="PITCH" value="" style="font-size:20px;width:150px;color;text-align:center"   onchange="sum()" />
										<input type="hidden" name="CONSTANT" id="CONSTANT" value="910" style="font-size:20px;width:150px;color;text-align:center"   />
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center;"> x 910
								<textarea id="CON" name="CON" class="hide" value="910"></textarea>
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -	
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD D.A from Ceiling Height:</label>
										<textarea id="DA" name="DA" class="hide DA" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px" ></textarea>
										<input type="" class="DACH" name="DACH" id="DACH" value="" style="font-size:20px;width:150px;color;text-align:center"   />
								</td>
							</tr>
							
							<tr>	
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="number" name="HEIGHT1" id="HEIGHT1" value="" style="font-size:20px;width:150px;color;text-align:center"    />
									<!--<input type="button" class="btn btn-sm btn-primary" name="" onClick="sum()"  id="MonchuuInstallation" value="✔">-->
								</td>		
							</tr>
						</tbody>
					</table>	
					<center>
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:60%;border-style:solid">							
							<tr>
								<thead>
									<div data-role="header">
										<td colspan="3" style="border-style:solid;background-color:#68dff0;text-align:center"><label style="color:maroon;font-size:18px;" class="space">Centering Of Tiles</label></td>									</div>	
								</thead>									
							</tr>
						<tbody>
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
									?>
							<tr>
								<td class="form-inline" colspan="3"  style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="tdtc"  name="tdtc" required="required"  />
											<option value=""></option>
											
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['td_tc']?>"><?php echo $row['tile']?></option>
											<?php } ?>
										</select>
								</td>
							</tr>
							
							<tr>	
								<td colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD AC Socket Height:</label>
										<textarea id="ash" name="ash" class="hide ash" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  disabled></textarea>
										<input type="text" name="ash1" id="ash1"  style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td  colspan="1" style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">TD/TC Tile:</label>
										<input type="" name="tile1" id="tile1" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
										<input type="hidden" name="constant1" id="constant1" value="15" style="font-size:20px;width:150px;color;text-align:center"   />										
								</td>							
							</tr>
							<tr>	
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="number" name="HEIGHT2" id="HEIGHT2" value="" style="font-size:20px;width:150px;color;text-align:center" disabled   /><span style="color:blue">Height Of AC Socket Height</span>
										<input type="button" class="btn btn-sm btn-primary" name="" onClick="sum()" id="MonchuuInstallation" value="✔">
								</td>
							</tr>
							
						</tbody>												
					</table></center>					
				</form>
			</div>
				<!---////////////////////////////////////////////////////////////////////////////////-->						
		<div id="tab2" class="tab-pane fade in active">	
			<form id="myForm2">
				<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="8"><h1>AC Machine Located At Tenjou Sagaru w/o Height Indication Under Fukisage</h1></th>
							</div>	
						</thead>
						<tbody>
							
							<tr>
								<td colspan="9" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Height Of QCTB/CTB     +    Half Size Of Item   +   15</p></center>	
								</td>									
							</tr>
							 		<?php
							 function room1() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT room FROM computation");
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
							foreach( room1() as $value ) {
							  $option .= '<option value="'.$value["room"].'">'.$value["room"].'</option>';
							}
							?>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 86";
										$result= $db_connect->query($query);
									?>
							
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF1"  name="SRKF1"   />
											<option value=""></option>
											<!--<option><?php echo $option; ?></option> -->
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['Socket_height']?>"><?php echo $row['room']?></option>
											<?php } ?>
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">STD Ceiling Height:</label>
										<!--<textarea id="std12" name="std12" class="hide std12" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>-->
										<input type="text" class="SCH1" name="SCH1" id="SCH1" value="" style="font-size:20px;width:150px;color;text-align:center"  />																												
								</td></td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">#grids:</label><br>
										<!--<textarea id="GRIDS" name="GRIDS" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:150px"></textarea>-->
										<input type="text" name="GRID1" id="GRID1" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x								
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">pitch:</label>
										<!--<textarea id="PITCH1" name="PITCH1" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px"></textarea>-->	
										
										<input type="text" name="PITCH1" id="PITCH1" value="" style="font-size:20px;width:150px;color;text-align:center"    />
										<input type="hidden" name="CONSTANT1" id="CONSTANT1" value="910" style="font-size:20px;width:150px;color;text-align:center"   />
								</td><td style="vertical-align:middle;font-size:25px;font-weight:bold;color:red;text-align:center;"> x 910
								<textarea id="CON1" name="CON1" class="hide" value="910"></textarea>
								</td>
							</tr>
							
							<tr>	
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="text" name="HEIGHT3" id="HEIGHT3" value="" style="font-size:20px;width:150px;color;text-align:center"    />
									<input type="button" class="btn btn-sm btn-primary" name="" onClick=""  id="MonchuuInstallation" value="✔">
								</td>		
							</tr>
						</tbody>
					</table>	
					<center>
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:60%;border-style:solid">							
							<tr>
								<thead>
									<div data-role="header">
										<td colspan="3" style="border-style:solid;background-color:#68dff0;text-align:center"><label style="color:maroon;font-size:18px;" class="space">Centering Of Tiles</label></td>									</div>	
								</thead>									
							</tr>
						<tbody>
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
									?>
							<tr>
								<td class="form-inline" colspan="3"  style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="tdtc1"  name="tdtc1" required="required"  />
											<option value=""></option>
											
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['td_tc']?>"><?php echo $row['tile']?></option>
											<?php } ?>
										</select>
								</td>
							</tr>
							
							<tr>	
								<td colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD AC Socket Height:</label>
										<textarea id="ash2" name="ash2" class="hide ash2" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>
										<input type="text" name="ash3" id="ash3"  style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td  colspan="1" style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">TD/TC Tile:</label>
										<input type="text" name="tile2" id="tile2" value="" style="font-size:20px;width:150px;color;text-align:center"  />										
										<input type="hidden" name="constant1" id="constant1" value="15" style="font-size:20px;width:150px;color;text-align:center"   />										
								</td>							
							</tr>
							<tr>	
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="text" name="HEIGHT4" id="HEIGHT4" value="" style="font-size:20px;width:150px;color;text-align:center"    /><span style="color:blue">Height Of AC Socket Height</span>
										<!--<input type="button" class="btn btn-sm btn-primary" name="" onClick="sum()" id="MonchuuInstallation" value="✔">-->
								</td>
							</tr>
							
						</tbody>												
					</table></center>
			</form>
		</div>
									<!--/////////////////////////////////////////////////////////////////-->
		<div id="tab3" class="tab-pane fade">	
			<form id="myForm2">
				<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="8"><h1>AC Machine Located At Tenjou Sagaru w/ CH Indication And Room w/ Given Ceiling Height</h1></th>
							</div>	
						</thead>
						<tbody>
							
							<tr>
								<td colspan="9" style="border-style:solid;background-color:;">
									<center><p style="color:blue;font-size:20px;text-align:center" class="space">Formula:   Height Of QCTB/CTB     +    Half Size Of Item   +   15</p></center>	
								</td>									
							</tr>
							 		<?php
							 function room2() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT room FROM computation");
								$flag = $stmt->execute();
								if( !$flag ) {
							  $info = $stmt->errorInfo();
								  exit ($info[2]);
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
							foreach( room2() as $value ) {
							  $option .= '<option value="'.$value["room"].'">'.$value["room"].'</option>';
							}
							?>
							
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF2"  name="SRKF2"     />
											<option value=""></option>
											<option><?php echo $option; ?></option>
											
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD AC Socket Height:</label>
										<textarea id="STDSOCKET" name="STDSOCKET" class="hide STDSOCKET" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>
										<input type="text" name="STDSOCKET1" id="STDSOCKET1"  style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -</td>
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">STD Ceiling Height:</label>
										<textarea id="STDCEILING" name="STDCEILING" class="hide STDCEILING" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" class="STDCEILING1" name="STDCEILING1" id="STDCEILING1" value="" style="font-size:20px;width:150px;color;text-align:center"  />																												
								</td></td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Given Ceiling Height:</label>
										<!--<textarea id="GCH" name="GCH" class="GCH" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
										<input type="text" name="GCH1" id="GCH1"  style="font-size:20px;width:150px;color;text-align:center"   />
								</td>
							</tr>
							
							<tr>	
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="text" name="HEIGHT5" id="HEIGHT5" value="" style="font-size:20px;width:150px;color;text-align:center"    />
									<input type="button" class="btn btn-sm btn-primary" name="" onClick=""  id="MonchuuInstallation" value="✔">
								</td>		
							</tr>
						</tbody>
					</table>	
					<center>
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:60%;border-style:solid">							
							<tr>
								<thead>
									<div data-role="header">
										<td colspan="3" style="border-style:solid;background-color:#68dff0;text-align:center"><label style="color:maroon;font-size:18px;" class="space">Centering Of Tiles</label></td>									</div>	
								</thead>									
							</tr>
						<tbody>
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
									?>
							<tr>
								<td class="form-inline" colspan="3"  style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="tdtc2"  name="tdtc2" required="required"  >
											<option value=""></option>
											
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['td_tc']?>"><?php echo $row['tile']?></option>
											<?php } ?>
										</select>
								</td>
							</tr>
							
							<tr>	
								<td colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">STD AC Socket Height:</label>
										<textarea id="STDHEIGHT" name="STDHEIGHT" class="hide STDHEIGHT" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>
										<input type="STDHEIGHT1" name="STDHEIGHT1" id="STDHEIGHT1"  style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td  colspan="1" style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td colspan="1" style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">TD/TC Tile:</label>
										<input type="text" name="tile3" id="tile3" value="" style="font-size:20px;width:150px;color;text-align:center"  />										
										<input type="hidden" name="constant1" id="constant1" value="15" style="font-size:20px;width:150px;color;text-align:center"   />										
								</td>							
							</tr>
							<tr>	
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="text" name="HEIGHT6" id="HEIGHT6" value="" style="font-size:20px;width:150px;color;text-align:center"    /><span style="color:blue">Height Of AC Socket Height</span>
										<!--<input type="button" class="btn btn-sm btn-primary" name="" onClick="sum()" id="MonchuuInstallation" value="✔">-->
								</td>
							</tr>
							
						</tbody>												
					</table></center>
			</form>
		</div>
				<!--/////////////////////////////////////////////////////////////////-->
		<div id="tab4" class="tab-pane fade">	
			<form id="myForm3">
				<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="5"><h1>With Requested AC Socket Height (AC ス And AC Ordinary)</h1></th>
							</div>	
						</thead>
						<tbody>
							
							<tr>
								<td colspan="5" style="border-style:solid;background-color:#4EE2EC">
									<center><p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">Centering of Tiles</p></center>	
								</td>									
							</tr>
							<tr>
								<td colspan="5" style="border-style:solid;background-color:#4EE2EC">
									<center><p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">If Requested Height is Below Standard Socket Height</p></center>	
								</td>									
							</tr>
							 		
							<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 86";
										$result= $db_connect->query($query);
									?>
							
							<tr>
								<td class="form-inline" colspan="5" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF3"  name="SRKF3"     />
											<option value=""></option>
											<!--<option><?php echo $option; ?></option>-->
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['Socket_height']?>"><?php echo $row['room']?></option>
											<?php } ?>
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="width:48%;text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Requested AC Socket Height:</label>
										<!--<textarea id="STDSOCKET" name="STDSOCKET" class="hide STDSOCKET" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
										<input type="text" name="RAC" id="RAC"  style="font-size:20px;width:150px;color;text-align:center" onkeypress="compute6()" />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td>
								<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
								?>
						
								<td colspan="2" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
										<select  style="font-size:20px;text-align:center;width:100px;" id="tdtc3"  name="tdtc3" required="required"  >
											<option value=""></option>
											
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['td_tc']?>"><?php echo $row['tile']?></option>
											<?php } ?>
										</select>
								</td>
							
							</tr>	
							<tr>	
								
								<td style="text-align:center;vertical-align:middle;background-color:"><br>
									 <label style="font-size:18px;color:black">STD AC Socket Height:</label>
										<!--<textarea id="STDCEILING" name="STDCEILING" class="hide STDCEILING" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>-->
										<input type="text" class="AC" name="AC" id="AC" value="" style="font-size:20px;width:150px;color;text-align:center"  />																												
								</td></td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">TD/TC Tile:</label>
										<!--<textarea id="GCH" name="GCH" class="GCH" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
										<input type="text" name="tile4" id="tile4"  style="font-size:20px;width:150px;color;text-align:center"   />
								</td>
							</tr>
							
							<tr>	
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="text" name="HEIGHT7" id="HEIGHT7" value="" style="font-size:20px;width:150px;color;text-align:center"    />
									
									<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
								</td>		
							</tr>
							<!--//////////////////////////////////////////////////////////////////-->
					</form>
					
					<form id="myForm4">	
						<tr>
								<td colspan="5" style="border-style:solid;background-color:#4EE2EC">
									<center><p style="color:maroon;font-size:25px;text-align:center;font-weight:bold" class="space">If Requested Height is Above Standard Socket Height</p></center>	
								</td>									
							</tr>
							 		
							<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 86";
										$result= $db_connect->query($query);
									?>
							
							<tr>
								<td class="form-inline" colspan="5" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF4"  name="SRKF4"     />
											<option value=""></option>
											<!--<option><?php echo $option; ?></option>-->
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['Socket_height']?>"><?php echo $row['room']?></option>
											<?php } ?>
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="width:48%;text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Requested AC Socket Height:</label>
										<!--<textarea id="STDSOCKET" name="STDSOCKET" class="hide STDSOCKET" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
										<input type="text" name="RAC1" id="RAC1"  style="font-size:20px;width:150px;color;text-align:center" onkeypress="compute6()" />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 5";
										$result= $db_connect->query($query);
								?>
								
						
								<td colspan="2" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black;">Select TD/TC Tile:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="tdtc4"  name="tdtc4" required="required"  >
											<option value=""></option>
											
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['td_tc']?>"><?php echo $row['tile']?></option>
											<?php } ?>
										</select>
								</td>
							
							</tr>	
							<tr>	
								
								<td style="text-align:center;vertical-align:middle;background-color:"><br>
									 <label style="font-size:18px;color:black">STD AC Socket Height:</label>
										<!--<textarea id="STDCEILING" name="STDCEILING" class="hide STDCEILING" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>-->
										<input type="text" class="AC1" name="AC1" id="AC1" value="" style="font-size:20px;width:150px;color;text-align:center"  />																												
								</td></td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td>
								<td style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">TD/TC Tile:</label>
										<!--<textarea id="GCH" name="GCH" class="GCH" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:120px"  ></textarea>-->
										<input type="text" name="tile5" id="tile5"  style="font-size:20px;width:150px;color;text-align:center"   />
								</td>
							</tr>
							
							<tr>	
								<td class="form-inline" colspan="9" style="text-align:center;vertical-align:middle;background-color:"><br>
									<label style="font-size:18px;color:black">Height:</label>
										<input type="text" name="HEIGHT8" id="HEIGHT8" value="" style="font-size:20px;width:150px;color;text-align:center"    />								
									<input class="bg-danger" type="button" onclick="myFunction4()" value="Clear Form" style="float:right;font-size:15px;color:black;font-weight:bold">
								</td>		
							</tr>
							<tr>
								<td colspan="5" style="border-style:solid;background-color:#4EE2EC">
									<p style="color:black;font-size:20px" class="space"><span style="font-weight:bold;color:maroon;font-size:20px">Note:</span><br>1. If planner request height for AC Socket - AC (ス)  and AC Ordinary,  need to check if w/in Centering of Tiles.<br>2. Open Centering of tiles sheet then search requested height if w/in the table depends on room, kanabakari, floor and tile.<br>  	If not w/in the Centering of Tiles, use computation for Centering of Tiles beside.<br>3. For AC (セ), no need to check Centering of Tiles, Ok to follow request.</p>	
								</td>
							</tr>
						</tbody>
					</table>	
					<center>
					
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
</script>
<script>
	
	////////////////////////////////////////////////////////////////////////////////////
	$("#SRKF1").change(function(){
		document.getElementById("SCH1").value=document.getElementById("SRKF1").value;	
		document.getElementById("ash3").value=document.getElementById("SRKF1").value;	
		var SRKF1 =  parseFloat($('input[name=SRKF1]').val() || 0);
	}); 
 	$("#tdtc").change(function(){
		document.getElementById("tile1").value=document.getElementById("tdtc").value;	
		var tdtc =  parseFloat($('input[name=tdtc]').val() || 0 ); 
	});
	$("#tdtc1").change(function(){
		document.getElementById("tile2").value=document.getElementById("tdtc1").value;	
		var tdtc =  parseFloat($('input[name=tdtc1]').val() || 0 ); 	
	});
	 $("#tdtc2").change(function(){
		document.getElementById("tile3").value=document.getElementById("tdtc2").value;	
		var tdtc2 =  parseFloat($('input[name=tdtc2]').val() || 0 ); 	
	}); 
	$("#tdtc3").change(function(){
		document.getElementById("tile4").value=document.getElementById("tdtc3").value;	
		var tdtc3 =  parseFloat($('input[name=tdtc3]').val() || 0 ); 	
	}); 
	$("#tdtc4").change(function(){
		document.getElementById("tile5").value=document.getElementById("tdtc4").value;	
		var tdtc4 =  parseFloat($('input[name=tdtc4]').val() || 0 ); 	
	});
	
	$("#SRKF3").change(function(){
		document.getElementById("AC").value=document.getElementById("SRKF3").value;	
		var SRKF3 =  parseFloat($('input[name=SRKF3]').val() || 0 ); 
			
	}); 
	$("#SRKF4").change(function(){
		document.getElementById("AC1").value=document.getElementById("SRKF4").value;	
		var SRKF4 =  parseFloat($('input[name=SRKF4]').val() || 0 ); 
			
	});
  
</script>

<script>	
	
 $(function(){
   $(document).on('change','#SRKF',function(){
     $.ajax({
       type: 'post',
       url: 'add/room.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#std1").text(data)
		var sample = document.getElementById("SCH").value = document.getElementById("std1").value;
	/* 	
		
		
		
		var sample6 = (sample - (sample2 * sample3 * sample4))- sample5;
		var sample7 = document.getElementById("HEIGHT1").value = sample6;
	 	var sample8 = document.getElementById("ash").value;
		var sample9 = document.getElementById("tile1").value;
		var sample10 = (sample7-sample8) / sample9; 
		var sample11 = document.getElementById("HEIGHT2").value = sample10;  */
		/* var sample2 =document.getElementById("GRID").value;
		var sample3 =document.getElementById("PITCH").value;
		var sample4 =document.getElementById("CONSTANT").value;
		var sample5 =document.getElementById("DACH").value; 
		var samples = (parseFloat(sample) - (parseFloat(sample2) * parseFloat(sample3) * parseFloat(sample4)) ) - parseFloat(sample5                                                                   );
		$('#HEIGHT1').val(samples); */
     }).fail(function(data){
       alert('Failed')
     })
   })
 })
$(function(){
   $(document).on('change','#SRKF',function(){
     $.ajax({
       type: 'post',
       url: 'add/DA.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#DA").text(data)
	    var sample5 = document.getElementById("DACH").value = document.getElementById("DA").value;
		/* var sample =document.getElementById("SCH").value;
		var sample2 =document.getElementById("GRID").value;
		var sample3 =document.getElementById("PITCH").value;
		var sample4 =document.getElementById("CONSTANT").value;
		var sample5 =document.getElementById("DACH").value; 
		var sample6 = (sample - (sample2 * sample3 * sample4))- sample5;
		var sample7 = document.getElementById("HEIGHT1").value = sample6;
	 	var sample8 = document.getElementById("ash").value;
		var sample9 = document.getElementById("tile1").value;
		var sample10 = (sample7-sample8) / sample9; 
		var sample11 = document.getElementById("HEIGHT2").value = sample10;  */
		
     }).fail(function(data){
       alert('Failed')
     })
   })
 })
$(function(){
   $(document).on('change','#SRKF',function(){
     $.ajax({
       type: 'post',
       url: 'add/socket_height.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#ash").text(data)
		document.getElementById("ash1").value = document.getElementById("ash").value;
		
	 }).fail(function(data){
       alert('Failed')
     })
   })
 }) 



///////////////////////////////tenjou sagaru ch indication////////////////////////////////////////////////
$(function(){
   $(document).on('change','#SRKF2',function(){
     $.ajax({
       type: 'post',
       url: 'add/ACS1.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#STDSOCKET").text(data)
		document.getElementById("STDSOCKET1").value = document.getElementById("STDSOCKET").value;
		/*  //document.getElementById("HEIGHT5").value = '';
		 var b = document.getElementById("STDCEILING1").value = document.getElementById("STDCEILING").value;
		var c = document.getElementById("GCH1").value = document.getElementById("GCH1").value;
		var ab = b;
	
		
		//var HEIGHT5 = ab;
		document.getElementById("HEIGHT5").value = b;   */
		
		/* var sample7 = document.getElementById("HEIGHT1").value = sample6;
	 	var sample8 = document.getElementById("ash").value;
		var sample9 = document.getElementById("tile1").value;
		var sample10 = (sample7-sample8) / sample9; 
		var sample11 = document.getElementById("HEIGHT2").value = sample10; */
	  
     }).fail(function(data){
       alert('Failed')
     })
   })
 })
$(function(){
   $(document).on('change','#SRKF2',function(){
     $.ajax({
       type: 'post',
       url: 'add/room2.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#STDCEILING").text(data)
	    document.getElementById("STDCEILING1").value = document.getElementById("STDCEILING").value;
		
     }).fail(function(data){
       alert('Failed')
     })
   })
 })
$(function(){
   $(document).on('change','#SRKF2',function(){
     $.ajax({
       type: 'post',
       url: 'add/ACS2.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#STDHEIGHT").text(data)
		document.getElementById("STDHEIGHT1").value = document.getElementById("STDHEIGHT").value;
		/* document.getElementById("HEIGHT6").value = '';
		document.getElementById("tile3").value = ''; */
		  
	 }).fail(function(data){
       alert('Failed')
     })
   })
 }) 


 
</script>
<?php include ('footer.php'); ?>
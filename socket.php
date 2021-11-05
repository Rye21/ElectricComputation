<?php include ('header.php'); ?>

<script>
		 	/*  function sum(){
	
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
	}); */  
   $(document).ready(function() {
    	   function compute() {
      
		
         var SCH = parseFloat($('input[name=SCH]').val() || 0 );
		var DACH = parseFloat($('input[name=DACH]').val() || 0 );
		var GRID = parseFloat($('input[name=GRID]').val() || 0 );
		var PITCH =parseFloat($('input[name=PITCH]').val() || 0 );
		var CONSTANT = parseFloat($('input[name=CONSTANT]').val() || 0 );
		var tdtc = parseFloat($('input[name=tdtc]').val() || 0 );
		var HEIGHT1 = (SCH-(GRID * PITCH * CONSTANT))-DACH; 
		//document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
			   
            $('#HEIGHT1').val(HEIGHT1);
			 
				
			
            }
            $('#GRID,#PITCH,#CONSTANT,#SCH,#DACH').change(compute); 
    		
    	}); 
		  $(document).ready(function() {
    	   function compute2() {
      
		
         var SCH1 = parseFloat($('input[name=SCH1]').val() || 0 );
	
		var GRID1 = parseFloat($('input[name=GRID1]').val() || 0 );
		var PITCH1 =parseFloat($('input[name=PITCH1]').val() || 0 );
		var CONSTANT1 = parseFloat($('input[name=CONSTANT1]').val() || 0 );
		
		var HEIGHT3 = SCH1-(GRID1* PITCH1 * CONSTANT1); 
		
		//document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
			   
            $('#HEIGHT3').val(HEIGHT3);
			 
				
			
            }
            $('#GRID1,#PITCH1,#CONSTANT1,#SCH1,#tdtc1,#HEIGHT4,#lh3').change(compute2); 
    		
    	});
		 $(document).ready(function() {
    	   function compute3() {
      
		
         var ash3 = parseFloat($('input[name=ash3]').val() || 0 );
	
		var tile2 = parseFloat($('input[name=tile2]').val() || 0 );
		var lh3 = document.getElementById("HEIGHT3").value;
		
		var HEIGHT4 = (ash3 - lh3) / tile2 ; 
		document.getElementById('HEIGHT4').value = parseFloat(HEIGHT4);
			   
            //$('#HEIGHT4').val(HEIGHT4);
			 
				
			
            }
            $('#ash3,#tile2,#lh3,#tdtc1,#HEIGHT3,#SRKF1').change(compute3); 
    		
    	}); 
 /* $(document).ready(function() {
    	   function compute1() {
      
		 var ash = document.getElementById('ash').value;
		var tile1 = document.getElementById('tile1').value;
		var tdtc = document.getElementById('tdtc').value;
		var lh1 = document.getElementById("HEIGHT1").value;
		var height12 = (parseFloat(ash) - parseFloat(lh1)) / parseFloat(tile1)  ;
		//var height123 = (parseFloat(height12) / 10) * 10;
		//document.getElementById('height12').value = parseFloat(height12).toFixed(1); 
			   
           $('#height12').val(height12);
			 
				
			
            }
            $('#ash, #tile1,#GRID,#lh1,#PITCH,#SCH,#SRKF,#std1,#height123,#tdtc').change(compute1); 
    		
    	 });  		 */ 

		 
		 
	 /* 	 function sum(){
	
		var std1 = document.getElementById('std1').value || 0;
		var DA = document.getElementById('DA').value || 0;
		var GRID = document.getElementById('GRID').value || 0;
		var PITCH =document.getElementById('PITCH').value || 0;
		var CONSTANT = document.getElementById('CONSTANT').value || 0;
		var HEIGHT1 = (parseFloat(std1)-(parseFloat(GRID) * parseFloat(PITCH) * parseFloat(CONSTANT)))-parseFloat(DA) ;
		 document.getElementById('HEIGHT1').value = parseFloat(HEIGHT1);
	 }
	 
	 $('#sum').keyup(function(){
	$('#HEIGHT1').val('');
	});  */
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
	</style>


<section id="main-content">			
	<section class="wrapper"><br>
		<center><label style="font-size:35px;font-family: arial black">AC SOCKET  HEIGHT COMPUTATION</label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">AC Machine Installed In Koubai Tenjou Under Fukisage</a></li>
			<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">AC Machine Located At Tenjou Sagaru w/o Height Indication Under Fukisage</a></li>
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Bundeban/JB-DA Hitting QCTB/CTB w/ Height</a></li>			
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">JB/DA Installed Inside Koubai Tenjou Under Fukisage</a></li>			
			<li class=""><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Denki Rimokon KI/Interface Unit Located in Lowered Ceiling</a></li>
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
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
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF"  name="SRKF"  >
											<option value=""></option>
											<option><?php echo $option; ?></option>
											
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">STD Ceiling Height:</label>
										<textarea id="std1" name="std1" class="hide std1" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
										<input type="text" class="SCH" name="SCH" id="SCH" value="" style="font-size:20px;width:150px;color;text-align:center"  />																												
								</td></td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">#grids:</label><br>
										<!--<textarea id="GRIDS" name="GRIDS" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;width:150px"></textarea>-->
										<input type="number" name="GRID" id="GRID" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> x								
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">pitch:</label>
										<!--<textarea id="PITCH1" name="PITCH1" class="" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px"></textarea>-->	
										
										<input type="number" name="PITCH" id="PITCH" value="" style="font-size:20px;width:150px;color;text-align:center"    />
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
										<select  style="font-size:20px;text-align:center;width:100px" id="tdtc"  name="tdtc" required="required"  >
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
										<!--<input type="button" class="btn btn-sm btn-primary" name="" onClick="sum()" id="MonchuuInstallation" value="✔">-->
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
							
							<tr>
								<td class="form-inline" colspan="8" style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black;text-align:center">Select Room/Kanabakari/Floor:</label><br>
										<select  style="font-size:20px;text-align:center;width:450px;height:50px" id="SRKF1"  name="SRKF1"   >
											<option value=""></option>
											<option><?php echo $option; ?></option>
											
										</select>
								</td>
								
							</tr>
							
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">STD Ceiling Height:</label>
										<textarea id="std12" name="std12" class="hide std12" style="font-size:1.9em;text-align:center;vertical-align:middle;height:35px;" ></textarea>
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
										<select  style="font-size:20px;text-align:center;width:100px" id="tdtc1"  name="tdtc1" required="required"  >
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
 
 	$("#tdtc").change(function(){
		document.getElementById("tile1").value=document.getElementById("tdtc").value;	
		var tdtc =  parseFloat($('input[name=tdtc]').val() || 0 ); 
             
       /*  var std1 = document.getElementById('std1').value || 0;
		var ash = document.getElementById('ash').value || 0;
		var tile = document.getElementById('tile').value || 0;
		var lh1 = document.getElementById("HEIGHT1").value;
		var HEIGHT12 = (parseFloat(ash)-parseFloat(lh1)) / parseFloat(tile1)  ;
		 document.getElementById('HEIGHT2').value = parseFloat(HEIGHT12);
			   
            $('#HEIGHT2').val(HEIGHT2);  */
		
	});
	$("#tdtc1").change(function(){
		document.getElementById("tile2").value=document.getElementById("tdtc1").value;	
		var tdtc =  parseFloat($('input[name=tdtc1]').val() || 0 ); 
             
              /*  var std1 = document.getElementById('std1').value || 0;
		var ash3 = document.getElementById('ash3').value || 0;
		var tile2 = document.getElementById('tile2').value || 0;
		var lh2 = document.getElementById("HEIGHT2").value;
		var height13 = (parseFloat(ash3)-parseFloat(lh2)) / parseFloat(tile2)  ;
		 document.getElementById('height13').value = parseFloat(height13);
			   
            $('#height13').val(height13);  */
		
	});
 /* $("#tile1").change(function(){
		document.getElementById("tile").value=document.getElementById("tile1").value;	
		var PITCH =  parseFloat($('input[name=PITCH]').val() || 0 ); 
             
        var std1 = document.getElementById('std1').value || 0;
		var ash = document.getElementById('ash').value || 0;
		var tile1 = document.getElementById('tile1').value || 0;
		var lh1 = document.getElementById("HEIGHT1").value;
		var height12 = (parseFloat(ash) - parseFloat(lh1)) / parseFloat(tile1)  ;
		 document.getElementById('height12').value = parseFloat(height12);
			   
            $('#height12').val(height12);
		
	}); */	  
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
		 var sample2 =document.getElementById("GRID").value;
		var sample3 =document.getElementById("PITCH").value;
		var sample4 =document.getElementById("CONSTANT").value;
		var sample5 =document.getElementById("DACH").value; 
		var sample6 = (sample - (sample2 * sample3 * sample4)- sample5);
		var sample7 = document.getElementById("HEIGHT1").value = sample6;
	 	/*  var sample8 = document.getElementById("ash").value;
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
       url: 'add/DA.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#DA").text(data)
	    document.getElementById("DACH").value = document.getElementById("DA").value;
		
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
///////////////////////////////////////////////////////////////////////////////
$(function(){
   $(document).on('change','#SRKF1',function(){
     $.ajax({
       type: 'post',
       url: 'add/socket_height2.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#std12").text(data)
		var SCH1 = document.getElementById("SCH1").value = document.getElementById("std12").value;
		  var GRID1 =document.getElementById("GRID1").value;
		var PITCH1 =document.getElementById("PITCH1").value;
		var CONSTANT1 =document.getElementById("CONSTANT1").value;
		//var sample5 =document.getElementById("DACH").value; 
		var HEIGHT3 = SCH1 - (GRID1 * PITCH1 * CONSTANT1);
		document.getElementById("HEIGHT3").value = HEIGHT3;
	 	/* var ash3 = document.getElementById("ash3").value;
		var tile2 = document.getElementById("tile2").value;
		var HEIGHT4 = (HEIGHT3-ash3) / tile2; 
		document.getElementById("HEIGHT4").value = HEIGHT4;  */
		
		
		 /*var sample13 =document.getElementById("GRID1").value;
		var sample14 =document.getElementById("PITCH1").value;
		var sample15 =document.getElementById("CONSTANT1").value;
		
		var sample16 = sample12 - (sample13 * sample14 * sample15);
		var sample17 = document.getElementById("HEIGHT3").value = sample16;
	 	 var sample18 = document.getElementById("ash3").value;
		var sample19 = document.getElementById("tile2").value;
		var sample20 = sample19 - sample17 ; 
		var sample21 = document.getElementById("HEIGHT4").value = sample20; */
	  
     }).fail(function(data){
       alert('Failed')
     })
   })
 })
$(function(){
   $(document).on('change','#SRKF1',function(){
     $.ajax({
       type: 'post',
       url: 'add/socket_height1.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#ash2").text(data)
		document.getElementById("ash3").value = document.getElementById("ash2").value;
		
	 }).fail(function(data){
       alert('Failed')
     })
   })
 }) 



 
</script>
<?php include ('footer.php'); ?>
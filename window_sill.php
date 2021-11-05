<?php include ('header.php'); ?>
<script>
	$(document).ready(function() {
			 function compute() {
             
             
			  var ws = parseFloat($('input[name=ws]').val() || 0 );
			  var wc= $('#wc').val();
			  var sh = parseFloat($('input[name=sh]').val() || 0 );
			  
			  
              var Total = ws * wc + sh ;
              
					
					$('#Total').val(Total);
				
				}          
            $('#ws, #wc,#sh').keyup(compute);
    		
    	 });
	$(document).ready(function() {
			 function compute1() {
             
             
					var sashheight = parseFloat($('input[name=sashheight]').val() || 0 );
					var windowconstant = parseFloat($('input[name=windowconstant]').val() || 0 );
					var heightitem= parseFloat($('select[name=heightitem]').val() || 0 );
					var height1 = parseFloat($('input[name=height1]').val() || 0 );
					var result = 'Possible';		
					var result1 = 'NOT Possible';	
					
					
					var height =   sashheight + windowconstant + heightitem  ;
			
					$('#height').val(height);
					
					if(height1 != ""){
						if (height1 >= height){
							document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";	
						 }else if(height1 <= height ){
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
						} 
					}          
				}          
            $('#sashheight,#windowconstant,#heightitem,#height1').change(compute1);
    		
    	 });
	$(document).ready(function() {
			 function compute2() {
             
             
					var sashheight1 = parseFloat($('input[name=sashheight1]').val() || 0 );
					var windowconstant1 = parseFloat($('input[name=windowconstant1]').val() || 0 );
					var heightitem1= parseFloat($('select[name=heightitem1]').val() || 0 );
					var heights = parseFloat($('input[name=heights]').val() || 0 );
					var result2 = 'Possible';		
					var result3 = 'NOT Possible';	
					
					
					var height2 =   sashheight1 - windowconstant1 - heightitem1  ;
					//var height2 =   sashheight + windowconstant + heightitem  ;
					
					//if(sashheight && windowconstant && heightitem  !==  "" ) {
					$('#height2').val(height2);
						
					if(heights != ""){
						if (heights < height2){
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green"; 
						 }else if(heights > height2 ){
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
					}
				}          
            $('#sashheight1,#windowconstant1,#heightitem1,#heights').change(compute2);
    		
    	 });
	$(document).ready(function() {
			 function compute3() {
             
             
					var windowheight2 = parseFloat($('input[name=windowheight2]').val() || 0 );
					var windowconstant2 = parseFloat($('input[name=windowconstant2]').val() || 0 );
					var heightitem2= parseFloat($('select[name=heightitem2]').val() || 0 );
					var heights3 = parseFloat($('input[name=heights3]').val() || 0 );
					var result4 = 'Possible';		
					var result5 = 'NOT Possible';	
					
					
					var height3 =   windowheight2 + windowconstant2 + heightitem2  ;
					
					$('#height3').val(height3);
						
					if(heights3 != ""){
						if (heights3 > height3){
							document.getElementById("demo3").value = result4;
							document.getElementById("demo3").style.color = "green"; 
						 }else if(heights3 < height3 ){
							document.getElementById("demo3").value = result5;
							document.getElementById("demo3").style.color = "#ff0000";
						}
					}
				}          
            $('#windowheight2,#windowconstant2,#heightitem2,#heights3').change(compute3);
    		
    	 });
	$(document).ready(function() {
			 function compute4() {
             
             
					var windowheight3 = parseFloat($('input[name=windowheight3]').val() || 0 );
					var windowconstant3 = parseFloat($('input[name=windowconstant3]').val() || 0 );
					var heightitem3 = parseFloat($('select[name=heightitem3]').val() || 0 );
					var heights4 = parseFloat($('input[name=heights4]').val() || 0 );
					var result6 = 'Possible';		
					var result7 = 'NOT Possible';	
					
					
					var height4 =   windowheight3 - windowconstant3 - heightitem3  ;
					
					$('#height4').val(height4);
						
					if(heights4 != ""){
						if (heights4 < height4){
							document.getElementById("demo4").value = result6;
							document.getElementById("demo4").style.color = "green";  
						 }else if(heights4 > height4 ){
							document.getElementById("demo4").value = result7;
							document.getElementById("demo4").style.color = "#ff0000"; 
						}
					}
				}          
            $('#windowheight3,#windowconstant3,#heightitem3,#heights4').change(compute4);
    		
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
	<section id="main-content">			
        <section class="wrapper"><br>
			<center><label style="font-size:35px;font-family: arial black">WINDOW AND WINDOW SILL COMPUTATION</label></center>
			<ul class="nav nav-tabs" style="font-size:20px">
				<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Window Height</a></li>
				<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Window Sill </a></li>		
			</ul>
			
		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<form id="myForm">	
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
									<label style="font-size:18px;color:black">Sash Height:</label>
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
				</form>
			</div>
			<div id="tab2" class="tab-pane fade">
				<form id="myForm1">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="6"><h1>Window Sill Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="6" style="border-style:solid;background-color:#68dff0;text-align:center">
									<p style="color:maroon;font-size:25px;font-weight:bold;text-align:center;" class="space">      ITEMS WITH ABOVE OR BELOW WINDOW SASH HEIGHT</p>
								</td>	
							</tr>	
							<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;">Formula 1: 		IF HEIGHT OF ITEM IS ABOVE WINDOW SASH HEIGHT  (For items located in wall of window only)</span><br>									Sash Height  +  Window Constant  +  Half Size of Item  </p>	
								</td>									
							</tr>
							<tr>
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Sash Height:</label>
										<input type="number" name="sashheight" id="sashheight" value="" style="font-size:20px;width:100px;color;text-align:center" />
										<input type="hidden" name="windowconstant" id="windowconstant" value="38"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 38  
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +  
								</td>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 18";
										$result= $db_connect->query($query);
									?>
								
								<td style="text-align:center;vertical-align:middle;background-color:">									
									<label style="font-size:18px;color:black">Half Size Of Item:</label>
										<select  style="font-size:20px" id="heightitem"  name="heightitem" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['half_size']?>"><?php echo $row['window_sill']?></option>
											<?php } ?>
										</select>	
							</tr>
							<tr>
								<td class="" colspan="5" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Height:</label>
										<input type="" name="height" id="height" value="" style="font-size:20px;width:150px;color;text-align:center" class="space" disabled  /><span style="color:blue">  	And Above (Possible Height Range)</span>									
									<label style="font-size:18px;color:black" class="space">    Height of Item:</label>
										<input type="" name="height1" id="height1" value="" style="font-size:20px;width:150px;color;text-align:center"   /><br>																			
										<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
									<span class="space">					<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled></span>
								</td>
							</tr>
					</form>			
					<form id="myForm2">						
							<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red">Formula 2: 		IF HEIGHT OF ITEM IS BELOW WINDOW SASH HEIGHT </span><br>									Sash Height  +  Window Constant  +  Half Size of Item  </p>	
								</td>									
							</tr>
							<tr>
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Sash Height:</label>
										<input type="number" name="sashheight1" id="sashheight1" value="" style="font-size:20px;width:100px;color;text-align:center" />
										<input type="hidden" name="windowconstant1" id="windowconstant1" value="38"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> - 38  
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -  
								</td>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 18";
										$result= $db_connect->query($query);
									?>
								
								<td style="text-align:center;vertical-align:middle;background-color:">									
									<label style="font-size:18px;color:black">Half Size Of Item:</label>
										<select  style="font-size:20px" id="heightitem1"  name="heightitem1" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['half_size']?>"><?php echo $row['window_sill']?></option>
											<?php } ?>
										</select>	
							</tr>
							<tr>
								<td class="" colspan="5" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Height:</label>
										<input type="" name="height2" id="height2" value="" style="font-size:20px;width:150px;color;text-align:center" class="space" disabled  /><span style="color:blue">  	And Below (Possible Height Range)</span>									
									<label style="font-size:18px;color:black" class="space">    Height of Item:</label>
										<input type="" name="heights" id="heights" value="" style="font-size:20px;width:150px;color;text-align:center"   /><br>																			
										<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
										<span class="space">					<input type="text" id="demo2" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled></span>
								</td>
							</tr>
					</form>	
					<form id="myForm3">	
							<tr>
								<td colspan="6" style="border-style:solid;background-color:#68dff0">
									<p style="color:maroon;font-size:25px;font-weight:bold;text-align:center" class="space">	ITEMS WITH HEIGHT ABOVE OR BELOW WINDOW HEIGHT</p>
								</td>	
							</tr>
							<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;">Formula 1: 		IF HEIGHT OF ITEM IS ABOVE WINDOW HEIGHT </span><br>									Window Height  +  Window Constant  +  Half Size of Item  </p>	
								</td>									
							</tr>
							<tr>								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Height:</label>
										<input type="number" name="windowheight2" id="windowheight2" value="" style="font-size:20px;width:100px;color;text-align:center" />
										<input type="hidden" name="windowconstant2" id="windowconstant2" value="38"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> + 38  
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> +  
								</td>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 18";
										$result= $db_connect->query($query);
									?>
								<td style="text-align:center;vertical-align:middle;background-color:">									
									<label style="font-size:18px;color:black">Half Size Of Item:</label>
										<select  style="font-size:20px" id="heightitem2"  name="heightitem2" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['half_size']?>"><?php echo $row['window_sill']?></option>
											<?php } ?>
										</select>	
							</tr>
							<tr>
								<td class="" colspan="5" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Height:</label>
										<input type="" name="height3" id="height3" value="" style="font-size:20px;width:150px;color;text-align:center" class="space" disabled  /><span style="color:blue">  	And Above(Possible Height Range)</span>									
									<label style="font-size:18px;color:black" class="space">    Height of Item:</label>
										<input type="" name="heights3" id="heights3" value="" style="font-size:20px;width:150px;color;text-align:center"   /><br>																			
										<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
										<span class="space">					<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled></span>
								</td>
							</tr>
					</form>	
					<form id="myForm4">	
							<tr>
								<td colspan="6" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red">Formula 2: 		IF HEIGHT OF ITEM IS BELOW WINDOW HEIGHT  (For items located in wall of window only) </span><br>									Window Height  +  Window Constant  +  Half Size of Item  </p>	
								</td>									
							</tr>
							<tr>
								
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Height:</label>
										<input type="number" name="windowheight3" id="windowheight3" value="" style="font-size:20px;width:100px;color;text-align:center" />
										<input type="hidden" name="windowconstant3" id="windowconstant3" value="38"  />
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> - 38  
								</td><td style="vertical-align:middle;font-size:30px;font-weight:bold;color:red;text-align:center;"> -  
								</td>
									<?php	
										include_once 'include/dbcon.php';
										$query="SELECT * FROM computation limit 18";
										$result= $db_connect->query($query);
									?>
								<td style="text-align:center;vertical-align:middle;background-color:">									
									<label style="font-size:18px;color:black">Half Size Of Item:</label>
										<select  style="font-size:20px" id="heightitem3"  name="heightitem3" required="required" >
											<option value=""></option>
											<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
												<option value="<?php echo $row['half_size']?>"><?php echo $row['window_sill']?></option>
											<?php } ?>
										</select>	
							</tr>
							<tr>
								<td class="" colspan="5" style="text-align:center;vertical-align:middle;"><br>
									<label style="font-size:18px;color:black" class="space">Height:</label>
										<input type="" name="height4" id="height4" value="" style="font-size:20px;width:150px;color;text-align:center" class="space" disabled  /><span style="color:blue">  	And Above(Possible Height Range)</span>									
									<label style="font-size:18px;color:black" class="space">    Height of Item:</label>
										<input type="" name="heights4" id="heights4" value="" style="font-size:20px;width:150px;color;text-align:center"   /><br>																			
										<input class="bg-danger" type="button" onclick="myFunction4()" id="demos" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
										<span class="space">					<input type="text" id="demo4" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;vertical-align:middle;text-align:center" disabled></span>
										
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
}function myFunction3() {
    document.getElementById("myForm3").reset();   
}function myFunction4() {
    document.getElementById("myForm4").reset(); 		
}
/* //$(document).ready(function(){
    $("demos").click(function(){
        $("#demo4").remove();
    });
//}); */
</script>
<?php include ('footer.php'); ?>
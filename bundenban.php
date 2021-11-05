<?php include ('header.php'); ?>

<script>
		
    	
		 
		 $(document).ready(function() {
			 function compute1() {
             
				
			  var CH = parseFloat($('select[name=CH]').val() || 0 );
			  var wdh = parseFloat($('input[name=wdh]').val() || 0 );
			  //var woh = parseFloat($('input[name=woh]').val() || 0 );
			  var result = parseFloat($('input[name=result]').val() || 0 );
				var c1 = 489  ;
			 	var result = 'GOOD';		
			 	var result1 = 'NOT GOOD';		
				var sum = CH - wdh  ;
              
					$('#sum').val(sum);	
					
				if(CH && wdh != ""){
					
						 if (sum >= c1){
							document.getElementById("demo1").value = result;
							document.getElementById("demo1").style.color = "green";
						 }else if(sum <= c1 ){
							document.getElementById("demo1").value = result1;
							document.getElementById("demo1").style.color = "#ff0000";
						}
					}
				}          
            $('#CH, #wdh,#result,#result1').change(compute1);
    		
    	 });
		 
		 $(document).ready(function() {
			 function compute2() {
             
				
			  var CH1 = parseFloat($('select[name=CH1]').val() || 0 );
			  var wdh1 = parseFloat($('input[name=wdh1]').val() || 0 );
			  //var woh1 = parseFloat($('input[name=woh1]').val() || 0 );
			  var result2 = parseFloat($('input[name=result2]').val() || 0 );
				var c2 = 293.5  ;
			 	var result2 = 'GOOD';		
			 	var result3 = 'NOT GOOD';		
				var sum2 = CH1 - wdh1 ;
              
				$('#sum2').val(sum2);
				
				if(CH1 && wdh1 != ""){
						 if (sum2 >= c2){
							document.getElementById("demo2").value = result2;
							document.getElementById("demo2").style.color = "green";	
						 }else if(sum2 <= c2 ){
							document.getElementById("demo2").value = result3;
							document.getElementById("demo2").style.color = "#ff0000";
						}
					}
				}          
            $('#CH1, #wdh1,#result2,#result3').change(compute2);
    		
    	 });
		 
		 $(document).ready(function() {
			 function compute3() {
             
				
			  var CH2 = parseFloat($('select[name=CH2]').val() || 0 );
			  var wdh2 = parseFloat($('input[name=wdh2]').val() || 0 );
			  //var woh2 = parseFloat($('input[name=woh2]').val() || 0 );
			  var result5 = parseFloat($('input[name=result5]').val() || 0 );
				var c3 = 340.5  ;
			 	var result5 = 'GOOD';		
			 	var result6 = 'NOT GOOD';		
				var sum3 = CH2 - wdh2  ;
              
				$('#sum3').val(sum3);
				
					if(CH2 && wdh2 != ""){
						 if (sum3 >= c3){
							document.getElementById("demo3").value = result5;
							document.getElementById("demo3").style.color = "green";
						 }else if(sum3 <= c3 ){
							document.getElementById("demo3").value = result6;
							document.getElementById("demo3").style.color = "#ff0000";
						}
					}
				}          
            $('#CH2, #wdh2,#result5,#result6').change(compute3);
    		
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
	</style>


<section id="main-content">			
	<section class="wrapper"><br>
		<center><label style="font-size:35px;font-family: arial black">BUNDENBAN COMPUTATION</label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			<!--<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>-->
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">JB-DA Kabe Fukasu</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Bundenban Kabe Fukasu</a></li>			
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			-->
		</ul>
			
		<div class="tab-content">
			<div id="tab2" class="tab-pane fade in active">
				<form id="myForm2">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>JB-DA Kabe Fukasu Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;font-size:20px;">*(Kabe Fukasu Size: 489)*</span>      	Formula:   Ceiling Height   -   Window/Door/Opening Height </p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Ceiling Height:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="CH"  name="CH" required="required" >
											<option value=""></option>
											<option value="2430">2430</option>
											<option value="2330">2330</option>
											<option value="2230">2230</option>
											<option value="2627">2627</option>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window/Door/Opening Height:</label>
										<input type="number" name="wdh" id="wdh" value="" style="font-size:20px;width:150px;color;text-align:center"    />
								</td><!--<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Opening Height:</label>
										<input type="number" name="woh" id="woh" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td>--><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Total:</label>
										<input type="" name="sum" id="sum" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Result:</label>
									<input type="text" id="demo1" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>	
							</tr>
						</tbody>												
					</table>					
				</form>
			</div>
			<div id="tab3" class="tab-pane fade">
				<form id="myForm3">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>240+ Bundenban Kabe Fukasu Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;font-size:20px;">*240+(Kabe Fukasu Size: 293.5)*</span>      	Formula:   Ceiling Height   -   Window/Door/Opening Height  </p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Ceiling Height:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="CH1"  name="CH1" required="required" >
											<option value=""></option>
												<option value="2430">2430</option>
												<option value="2330">2330</option>
												<option value="2230">2230</option>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window/Door/Opening Height:</label>
										<input type="number" name="wdh1" id="wdh1" value="" style="font-size:20px;width:150px;color;text-align:center"    />
								</td><!--<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Opening Height:</label>
										<input type="number" name="woh1" id="woh1" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td>--><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Total:</label>
										<input type="" name="sum2" id="sum2" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Result:</label>
									<input type="text" id="demo2" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									<input class="bg-danger" type="button" onclick="myFunction2()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>	
							</tr>
						</tbody>												
					</table>					
				</form>
				<form id="myForm4">
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="7"><h1>260+ Bundenban Kabe Fukasu Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr>
								<td colspan="7" style="border-style:solid"><br>
									<p style="color:blue;font-size:20px;" class="space"><span style="color:red;font-size:20px;">*260+(Kabe Fukasu Size: 340.5)*</span>      	Formula:   Ceiling Height   -   Window/Door/Opening Height  </p>
								</td>
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Ceiling Height:</label>
										<select  style="font-size:20px;text-align:center;width:100px" id="CH2"  name="CH2" required="required" >
											<option value=""></option>
											<option value="2430">2430</option>
											<option 2627="2627">2627</option>
										</select>
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window/Door/Opening Height:</label>
										<input type="number" name="wdh2" id="wdh2" value="" style="font-size:20px;width:150px;color;text-align:center"    />
								</td><!--<td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									<label style="font-size:18px;color:black">Window Opening Height:</label>
										<input type="number" name="woh2" id="woh2" value="" style="font-size:20px;width:150px;color;text-align:center"  />
								</td>--><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="text-align:center;vertical-align:middle;background-color:">
									 <label style="font-size:18px;color:black">Total:</label>
										<input type="" name="sum3" id="sum3" value="" style="font-size:20px;width:150px;color;text-align:center" disabled  />										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="7" style="text-align:center;vertical-align:middle;">
									<label style="font-size:18px;color:black">Result:</label>
									<input type="text" id="demo3" style="font-size:30px;font-weight:bold;border:none;background-color:#F0F8FF;text-align:center" disabled>
									<input class="bg-danger" type="button" onclick="myFunction3()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
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

function myFunction1() {
    document.getElementById("myForm2").reset();   
}
function myFunction2() {
    document.getElementById("myForm3").reset();   
}
function myFunction3() {
    document.getElementById("myForm4").reset();   
}

</script>
<?php include ('footer.php'); ?>
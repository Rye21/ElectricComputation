<?php include ('header.php'); ?>

<script>
		
    	
		 
		 $(document).ready(function() {
			 function compute1() {
             
				
			  var price = parseFloat($('input[name=price]').val() || 0 );
			  var H1 = parseFloat($('input[name=H1]').val() || 0 );
			  var H2 = parseFloat($('input[name=H2]').val() || 0 );
			  var EV = parseFloat($('input[name=EV]').val() || 0 );
			  var EV3 = parseFloat($('input[name=EV3]').val() || 0 );
			  var hacchu_price_1 = 	price +	H1 + H2 + EV + EV3;
				
              
					$('#hacchu_price_1').val(hacchu_price_1);	
					
				
				}          
            $('#price, #H1,#H2,#EV,#EV3').keyup(compute1);
    		
    	 });
		 
		 $(document).ready(function() {
			 function compute2() {
             
				
			  var price2 = parseFloat($('input[name=price2]').val() || 0 );
			  var H1A = parseFloat($('input[name=H1A]').val() || 0 );
			  var H2A = parseFloat($('input[name=H2A]').val() || 0 );
			  var EVA = parseFloat($('input[name=EVA]').val() || 0 );
			  var EV3A = parseFloat($('input[name=EV3A]').val() || 0 );
			  var hacchu_price_2 = 	price2 - H1A - H2A - EVA - EV3A;
				
              
					$('#hacchu_price_2').val(hacchu_price_2);	
					
				
				}          
            $('#price2, #H1A,#H2A,#EVA,#EV3A').keyup(compute2);
    		
    	 });;
		 
		 $(document).ready(function() {
			 function compute3() {
             
				
			  var nitto = parseFloat($('input[name=nitto]').val() || 0 );
						
				var HP = nitto * 0.268 ;
              
				$('#HP').val(HP);
			
				}          
            $('#nitto,#HP').keyup(compute3);
    		
    	 });
		 $(document).ready(function() {
			 function compute4() {
             
				
			  var catalogue = parseFloat($('input[name=catalogue]').val() || 0 );
						
				var HP1 = catalogue * 0.34 ;
              
				$('#HP1').val(HP1);
			
				}          
            $('#catalogue,#HP1').keyup(compute4);
    		
    	 });
		  $(document).ready(function() {
			 function compute5() {
             
				
			  var panasonic = parseFloat($('input[name=panasonic]').val() || 0 );
						
				var HP2 = panasonic * 0.5 ;
              
				$('#HP2').val(HP2);
			
				}          
            $('#panasonic,#HP2').keyup(compute5);
    		
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
		<center><label style="font-size:35px;font-family: arial black">BUNDENBAN ESTIMATION COMPUTATION</label></center>
		<ul class="nav nav-tabs" style="font-size:20px">
			<!--<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab1">Bracket Light And Kaidan</a></li>-->
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab2">Main Bundenban</a></li>
			<li class="active"><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab3">Additional Serial</a></li>			
			<!--<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab4">Installed at Koubai Under Fukisage</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab5">Installed at Koubai Under Fukiage</a></li>
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab6">Installed in Room with Given Ceiling Height</a></li>			
			<li><a data-toggle="tab" href="https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&amp;stacked=h#tab7">With Requested Height</a></li>			-->
		</ul>
			
		<div class="tab-content">
			<div id="tab2" class="tab-pane fade">
				<form id="myForm2">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="12"><h1>Main Bundenban Computation</h1></th>
							</div>	
						</thead>
						<tbody>
							
							<tr>
								<td colspan="12" style="border-style:solid">
									<p style="color:blue;font-size:20px;text-align:center" class="space"><span style="color:red;font-size:20px;"></span>With Special Item</p>
								</td>
							</tr>
							
							<tr class="bg-primary">
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Price From Excel</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">+ H1 (250)</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">+ H2 (500</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">+ EV (1,930)</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">+ EV3 (2,190)</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">HACCHU PRICE</td>
							</tr>
							<th>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="price" id="price" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="H1" id="H1" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="H2" id="H2" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="EV" id="EV" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> +
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="EV3" id="EV3" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="" name="hacchu_price_1" id="hacchu_price_1" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center" disabled  />										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="12" style="text-align:center;vertical-align:middle;">
									
									<input class="bg-danger" type="button" onclick="myFunction1()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>	
							</tr>
					</form>		
					<form id="myForm3">			
							<tr>
								<td colspan="12" style="border-style:solid">
									<p style="color:blue;font-size:20px;text-align:center" class="space"><span style="color:red;font-size:20px;"></span>With Special Item</p>
								</td>
							</tr>
							<tr class="bg-primary">
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Price From Excel</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">- H1 (250)</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">- H2 (500</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">- EV (1,930)</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">- EV3 (2,190)</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:"></td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">HACCHU PRICE</td>
							</tr>
							<th>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="price2" id="price2" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="H1A" id="H1A" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="H2A" id="H2A" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="EVA" id="EVA" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> -
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="EV3A" id="EV3A" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center"  />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> =
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="" name="hacchu_price_2" id="hacchu_price_2" value="" style="font-size:50px;width:150px;height:200px;color;text-align:center" disabled  />										
								</td>
							</tr>
							<tr>
								<td class="form-inline" colspan="12" style="text-align:center;vertical-align:middle;">
									
									<input class="bg-danger" type="button" onclick="myFunction2	()" value="Clear Form" style="float:right;font-size:18px;color:black;font-weight:bold">
								</td>	
							</tr>
						</tbody>												
					</table>					
				</form>
			</div>
			<div id="tab3" class="tab-pane fade in active">
				<form id="myForm3">	
					<table class="table table-condensed" border="2"	 style="background-color:aliceblue;width:100%;border-style:solid">
						<thead>
							<div data-role="header">
								<th colspan="4"><h1>Additional Serial</h1></th>
							</div>	
						</thead>
						<tbody>
							<tr colspan="5" class="bg-primary">
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Nitto's Reply</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Multiply</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Hacchu Price</td>
								
							</tr>
							
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="nitto" id="nitto" value="" style="font-size:25px;width:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> x 0.268
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="HP" id="HP" value="" style="font-size:25px;width:200px;color;text-align:center"   disabled />
								</td>
									
							</tr>
							<tr colspan="5" class="bg-primary">
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Catalogue Price</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Multiply</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Hacchu Price</td>
								
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="catalogue" id="catalogue" value="" style="font-size:25px;width:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> x 0.34
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="HP1" id="HP1" value="" style="font-size:25px;width:200px;color;text-align:center"   disabled />
								</td>
									
							</tr>
							<tr colspan="5" class="bg-primary">
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Panasonic Price</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Multiply</td>
								<td style="font-size:25px;color:black;text-align:center;vertical-align:middle;background-color:">Hacchu Price</td>
								
							</tr>
							<tr>
								<td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="panasonic" id="panasonic" value="" style="font-size:25px;width:200px;color;text-align:center"    />
								</td><td style="vertical-align:middle;font-size:35px;font-weight:bold;color:red;text-align:center;"> x 0.5
								</td><td style="text-align:center;vertical-align:middle;background-color:">
									
										<input type="number" name="HP2" id="HP2" value="" style="font-size:25px;width:200px;color;text-align:center"   disabled />
								</td>
								
									
							</tr>
							<tr>
								<td colspan="4">
									<center><p><span style="color:blue;font-size:30px">NOTE:</span> <span style="color:red;font-size:20px">Hacchu Price Always End "0"</span></p></center>
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
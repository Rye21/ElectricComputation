<?php include ('header.php'); ?>

<script>
		
    	 $(document).ready(function() {
    	   function compute() {
              var f1 = $('#f1').val();
			   var c1 = 2775  ;
			   var c2 = 2972  ;
			   //var b1 = 2524  ;
			   //var b2 = 2775  ;
			   //var b3 = 2776  ;			   
              var f2 = $('#f2').val();
              var cts =  parseFloat($('select[name=cts]').val() || 0 ); 
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
				  $('#ii').val(ii);
				 
			 }else if(f1 <= 2775 ){
				  $('#ii').val(ii2);
			 }else if(f1 >= 2276){
				  $('#ii').val(ii3);
			 }
		
            }
            $('#f1, #f2, #cts, #ns, #ii, #gh').change(compute);
    		
    	 });
</script>

<section id="main-content">
        <section class="wrapper">
              <div class="row">
				<div data-role="page" id="irr">
				  <div data-role="header">
					<h1 style="color:green">Computation For Bracket Light And Kaidan</h1>
				  </div>
				  <div data-role="content">
					<div data-role="fieldcontain">
					 <label for="Choose Types Of Stairs">Choose Types Of Stairs:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select  style="width:135px" id="cts"  name="cts" required="required" >
							<option value=""></option>
							<option value="198.2">14</option>
							<option value="185">15</option>
							<option value="185.8">16</option>							
						</select>
						<label for="number">1F:</label>
						  <input type="number" name="f1" id="f1" value=""  />
						 <label for="number">2F:</label>
						  <input type="number" name="f2" id="f2" value=""  /> 
						</div>
						
						<div data-role="fieldcontain">
						<label for="Number Of Steps">Number Of Steps:</label>
						<input type="text" name="ns" id="ns" value=""  />
						<label for="number">Item Installation:</label>
						  <input type="number" name="ii" id="ii" value=""  />
						</div>
						<div data-role="fieldcontain">
						  <label for="Given Height">Given Height:</label>
						  <input type="text" name="gh" id="gh" value=""  />
						  </div>	
						  <label for="total">H=</label>
						  <input type="text" name="sum" id="sum" value=""  />
					</div>
				  </div>
				 </div>
              </div>
        </section>
</section>	
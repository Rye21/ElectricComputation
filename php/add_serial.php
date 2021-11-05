
		
	
		<script src="../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
		<script>
			function checkemailAvailabilityA() {
					
				$("#loaderIcon").show();
				jQuery.ajax({
				url: "check/check_team.php",
				data:'LeaderName='+$("#LeaderName").val()+
				
				'&team='+$("#team").val(),	
				type: "POST",
				success:function(data){
				$("#emailA-availability-status").html(data);
				var number1 = document.getElementById("team").value = document.getElementById("emailA-availability-status").innerHTML;
				var strArray = number1.split("+");
				for(var i = 0; i < strArray.length; i++){
						
						document.getElementById("team").value = strArray[0];
						document.getElementById("email").value = strArray[1];
										
							
						}	
				
				$("#loaderIcon").hide();
				},
				error:function (){}
				});
				} 	
		</script>
		<style>
		input[type="submit"] {
			background-color: #555;
			color: #fff;
			border-radius: 10px;
			font-weight:bold;
			font-size:20px;
		}	
		input[type="file"] {
				
			color: black;
			border-radius: 10px;
			font-weight:bold;
			font-size:20px;
		}
		
		label{
			font-size:20px;
		}
	
		</style>
		
		
		<div class="container-fluid">
			<div class="row">
				<form method="post" id="uploadForm" enctype="multipart/form-data" >
				<div class="col-sm-6">
				<label>Serial:</label>
					<input type="text" class="form-control" id="serial" name="serial" style="font-size:25px;" required><br>
				</div>
				<div class="col-sm-6">
				<label>Plan Code:</label>
					<input type="text" class="form-control" id="pcode" name="pcode" style="font-size:25px;" required><br>	
				</div>
								<?php	
											
											/* include_once '../include/dbcon2.php';
											
											$query="SELECT  EmployeeName FROM masterlist WHERE designation = 'Team Head Trainee' 
											OR designation = 'Team Head' 
											OR designation = 'Team In-Charge' 
											AND Status = 'Active' ";
											$result= $db_connect->query($query);
											 $team = $row['TeamName'];
											echo $team; */
										?>
				<?php
							 function exterior_denki() {
							  try{
								$pdo = new PDO('mysql:host=localhost;port=3306;dbname=d_masterlist','root','admin');
								$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									$pdo->query( "SET NAMES utf8" );
									$stmt = $pdo->prepare("SELECT  LeaderName FROM department WHERE department = 'Denki' 
											");
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
							foreach( exterior_denki() as $value ) {
							  $option .= '<option value="'.$value["LeaderName"].'">'.$value["LeaderName"].'</option>';
							}
							?>	
					<center>			
					<label>Regards By:</label>	
					<select class="form-control" id="LeaderName" name="LeaderName" onchange="checkemailAvailabilityA()" style="height:45px;font-weight:bold;width:80%;font-size:25px;" required>
					<option value=""></option>
					<option><?php echo $option; ?></option>	
					</select>
					</center>
					<br>	
					<br>	
					<center><input type="file" name="item_photos[]" id="item_photos"   multiple>
					<span style="color:red;">PDF file Only are accepted !!</span>
					<input type="hidden" id="team" name="team"  align="center" style="width:250px;font-size:15px;color:blue;text-align:center"  readonly>				
					<input type="hidden" id="email" name="email"  align="center" style="width:250px;font-size:15px;color:blue;text-align:center"  readonly><br>				
					<span class="hidden" id="emailA-availability-status"></span>
					<input type="submit" id="submit" formaction="http://hrdapps33/denkicomputation/window_new_test_mail.php" name="submit" value="Send Email"/></center>
					
				</form>	
			</div>
					
		</div>
		<script>
$(document).ready(function() {
$("#submit").prop( "disabled", true )	
	$(document).on('change','#item_photos',function(){
		 $("#submit").prop( "disabled", false )		
				

	})		
	
})
</script>
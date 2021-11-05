		<link href="http://hrdapps33/QCC/css/style1.css" rel="stylesheet">
		<link href="http://hrdapps33/bootstrap/css/csshake.min.css" rel="stylesheet">		
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
		
		<style>
		input[type="submit"] {
			background-color: #555;
			color: #fff;
			border-radius: 10px;
			font-weight:bold;
			font-size:20px;
}
		</style>
		
		<div class="container-fluid">
			<div class="row">
				<form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
				<div class="col-sm-6">
				<label>Question</label>
					<textarea class="form-control" id="description" name="description"></textarea><br>
				</div>
				<div class="col-sm-6">
				<label>Answer</label>
					<textarea class="form-control" id="answer" name="answer"></textarea><br>	
				</div>
								<?php	
											
											include_once '../db_connect.php';
											 
											$query="SELECT DISTINCT category FROM qcc_category";
											$result= $con->query($query);
											
										?>
				<label>Category</label>	
					<select class="form-control" id="category" name="category" style="background:transparent;font-weight:bold">
					<option value=""></option>
					<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
											<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
											
									<?php } ?>	
					</select>
					<br>	
					<center><input type="file" name="item_photos[]" id="item_photos" multiple ><br>
					<input type="submit" name="submit" value="UPLOAD TRIVIA"/></center>
				
				</form>	
			</div>
					
		</div>
		
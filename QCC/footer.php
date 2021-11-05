 <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to ppen the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

 <?php
 include ('../ip_access_rights/rights.php');
 $id = $_REQUEST["id"];

 @$tbodyA.='<footer class="site-footer">
			<div class="container-fluid">
			  <div class="text-center" style="float:left">
			 
				<a type="button" class="btn navbar-btn btn-warning btn-md shake-opacity" style="font-family: Georgia;font-weight:bold" href="index.php"><i class="glyphicon glyphicon-home">HOME</i></a>&nbsp';					
	if(@$rightsqcc){
				@$tbodyA.='<a type="button" class="btn navbar-btn btn-success edit btn-md shake-opacity" style="font-family: Georgia;font-weight:bold" id="'.$id.'"><i class="glyphicon glyphicon-edit">EDIT TRIVIA</i></a>&nbsp;
				<a type="button" class="btn navbar-btn btn-danger delete btn-md shake-opacity" style="font-family: Georgia;font-weight:bold" id="delete-'.$id.'"><i class="glyphicon glyphicon-trash">DELETE TRIVIA</i></a>&nbsp';
				}
			@$tbodyA.='	<!--<button class="open-button" onclick="openForm()">Open Form</button>
			 </div>
				<div class="form-popup" id="myForm">
				  <form action="login.php" class="form-container">
					<h1>Login</h1>

					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="user" required>

					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pass" required>

					<button type="submit" class="btn">Login</button>
					<button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
				  </form>
				</div>-->
			</div>
				
      </footer>';
	 
	  echo @$tbodyA;
?>
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
		<link href="http://hrdapps33/QCC/css/style1.css" rel="stylesheet">
		<link href="http://hrdapps33/bootstrap/css/csshake.min.css" rel="stylesheet">		
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
	
		<div class="modal fade">
			       <div class="modal-dialog modal-lg">
			         <div class="modal-content">
			           <div class="modal-header bg-primary">
			             <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			             <h4 class="modal-title">Modal title</h4>
			           </div>
			           <div class="modal-body"></div>
			           <div class="modal-footer">
						
			            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			           </div>
			         </div><!-- /.modal-content -->
			       </div><!-- /.modal-dialog -->
			     </div><!-- /.modal -->
				<!-- script -->
<script src="controller.js"></script>
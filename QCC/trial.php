<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>QCC</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap 
		<link rel="icon" href="http://hrdapps33/ps5/images/index.jpg" type="image/x-icon" />
		<link href="http://hrdapps33/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="http://hrdapps33/ps52/css1/style3.css" rel="stylesheet">-->
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		
		
		<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
		<link href="http://hrdapps33/QCC/css/header.css" rel="stylesheet">
		<link href="http://hrdapps33/bootstrap/css/csshake.min.css" rel="stylesheet">		
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script src="../bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	
	</head>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
}

#London {background-color:red;}
#Paris {background-color:green;}
#Tokyo {background-color:blue;}
#Oslo {background-color:orange;}
</style>
 <style>
		#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#captions {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 0px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
 .content {
    position: absolute; /* Position the background text */
    bottom: 0; /* At the bottom. Use top:0 to append it to the top */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color: #f1f1f1; /* Grey text */
    width: 100%; /* Full width */
    padding: 20px; /* Some padding */
}

	</style>

 <!--<button class="tablink" onclick="openPage('Home', this, '#e6fff2')" id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('News', this, '#f2f2f2')" >Trivia</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">About</button>-->

<div id="London" class="tabcontent">
 <center><img src="img/QCC-Logo-No-Title.png" style="height:90px;width:400px">
  <p style="font-weight:bold">QUALITY CONTROL CIRCLE</p>
  <h3 style="font-weight:bold;font-size:50px;">DENKI DEPARTMENT</h3></center>

</div>

<div id="Paris" class="tabcontent">
  <div class="container-fluid">
			<div class="row">
					<!--<div class="col-sm-3">
						<label>Search</label>
						<input type="text" id="keyword" class="form-control" placeholder="keyword">
						<input type="hidden" value="view" id="view">
						<input type="hidden" value="csv" id="csv">
					</div>
					<div class="col-sm-3">
						<label>Perpage</label>
						<select id="perpage" class="form-control">
							<option value="30">30</option>
							<option value="50">50</option>
							<option value="100">100</option>
							<option value="200">200</option>
						</select>
					</div>
					<div class="col-sm-3">
						<label>Column</label>
						<select id="column" class="form-control">
							<?php require_once 'columns.php'; ?>
						</select>
					</div>-->
					<?php	
											
											include_once 'db_connect.php';
											 
											$query="SELECT DISTINCT category FROM qcc_category";
											$result= $con->query($query);
											
										?>
					<div class="col-sm-3">
						<label>Category</label>
						<input type="hidden" value="view" id="view">
						<select class="form-control" id="category" name="category" style="background:transparent;color:black;font-weight:bold">
						
					<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
											<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
											
									<?php } ?>	
						</select>
					</div>
			
			
									
			
			<div class="col-sm-4" style="float:right;padding-top:23px">
			<a type="button" class="btn navbar-btn btn-success btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right"  id="add"><i class="glyphicon glyphicon-plus"> ADD CATEGORY</i></a>&nbsp;
			<a type="button" class="btn navbar-btn btn-warning btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right"  id="addtrivia"><i class="glyphicon glyphicon-plus"> ADD TRIVIA</i></a>&nbsp;
			</div>
			</div>
			<!--<form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
								
								<input type="file" name="item_name[]" id="id" multiple >
								<input type="submit" name="submit" value="UPLOAD"/>
								
							</form>	-->
		</div>
	
	<main>
		<center><div id="loading" width=300px></div></center>
		<div id="images"></div>
	</main>
	
	</body>
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
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="Oslo" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div> 

<button class="tablink" onclick="openCity('London', this, 'red')" id="defaultOpen">London</button>
<button class="tablink" onclick="openCity('Paris', this, 'green')">Paris</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'blue')">Tokyo</button>
<button class="tablink" onclick="openCity('Oslo', this, 'orange')">Oslo</button>

<script>
function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</html>
<!--<script>
	function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click(); 
</script>-->

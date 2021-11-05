<?php
//include 'session.php';
?>
<html lang="ja">

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
		
		
		<link href="http://hrdapps33/QCC/css/font.css" rel="stylesheet">
		
		
		<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
		<link href="http://hrdapps33/QCC/css/header.css" rel="stylesheet">
		<link href="http://hrdapps33/bootstrap/css/csshake.min.css" rel="stylesheet">		
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script src="../bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
	
	
	</head>
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
	<style>
	.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 background: transparent;
 color: orange;
 border: none;
}
.scroll-left p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-left 15s linear infinite;
 -webkit-animation: scroll-left 15s linear infinite;
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}
</style>
	<body  class="bg">

<!-- display upload status -->
	
						
				
	<header>
		<div class="container-fluid row">
			<!--<nav> Defines navigation links-->
			<!--<nav class="navbar navbar-inverse" style="height:15%;background: rgba(0, 0, 095, 0.6);">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><img src="img/QCC-Logo-No-Title.png" style="height:70px;width:200px"></a>
					</div>

					<!--<ul> defines unordered list>
					<ul class="nav navbar-nav navbar">-->
						<!--<li> defines list item
						<li class="active"><a href="index.php" style="color:white;margin-left:170px">Trivia</a></li>-->
						<!--<li><a href="editor/question.php" style="color:white">Questions</a></li>			
						<li><a href="php/board.php" style="color:white">QCC Board</a></li>-->	
						<!--<li><a href="http://hrdapps33/qcc/question2answer" style="color:white">Ask a Question</a></li>
					</ul>-->
							
					<!--form data(static)
					<form class="navbar-form navbar-left">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="search...">
							<div class="input-group-btn">
								<button type="submit" class="form-control">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</div>
						</div>
					</form>-->
					<!--unordered list for right navigation links-->
					<!--<ul class="nav navbar-nav navbar-right">
						<li><a href="#" style="color:white"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
						<li><a href="#" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					
					</ul>
					
					
				</div>
			</nav>-->
			<nav class="navbar navbar-inverse" style="height:10%;background: rgba(0, 0, 095, 0.6);">
				<div class="container-fluid">
					
					<ul class="nav navbar-nav navbar">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php"><img src="img/QCC-Logo-No-Title.png" style="height:50px;width:100px"></a>
						</div>
						<li><a href="#">Home</a></li>
						<li class="active"><a href="index.php">Trivia</a></li>
						<li class=""><a href="http://hrdapps28:8080/019811April/terminologies/mainpage/" target="_blank">Japanese Terminologies</a></li>
						<!--<li><a href="php/board.php">QCC Board</a></li>-->
						
						
						<!--<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							  </ul>
						</li>-->
						<li><a href="help.php">Help<span class="glyphicon glyphicon-question-sign"></span></a></li>
						<a type="button" class="btn navbar-btn btn-success btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;margin-top:30px"  id="add"><i class="glyphicon glyphicon-plus"> ADD CATEGORY</i></a>&nbsp;
						<a type="button" class="btn navbar-btn btn-warning btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;margin-left:300px;margin-top:30px"  id="addtrivia"><i class="glyphicon glyphicon-plus"> ADD TRIVIA</i></a>&nbsp;
						
					</ul>
				</div>
			</nav>
		
	</header>
		<div class="scroll-left" style="width:50%;float:right">
			<p style="color:red;font-size:13px;float:right">Reminder: Please use Google Chrome or Mozilla Firefox as your browser for better usage of this system.</p>			
		</div>
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
					
			
			
									
			
			<!--<div class="col-sm-4" style="float:right;padding-top:23px">
			<a type="button" class="btn navbar-btn btn-success btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;"  id="add"><i class="glyphicon glyphicon-plus"> ADD CATEGORY</i></a>&nbsp;
			<a type="button" class="btn navbar-btn btn-warning btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;margin-right:10px"  id="addtrivia"><i class="glyphicon glyphicon-plus"> ADD TRIVIA</i></a>&nbsp;
			</div>-->
			</div>
			<!--<form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
								
								<input type="file" name="item_name[]" id="id" multiple >
								<input type="submit" name="submit" value="UPLOAD"/>
								
							</form>	-->
		</div>
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
</html>	
<script>
$(document).ready(function(){
  $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');          
    
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    })
});
</script>



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
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../../bootstrap/js/bootstrap.min.js"></script>
		
		<script src="../../bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
	
	
	</head>
	<style>
	.editable{
				background-color:lightyellow;
				
			}
		.title{
			text-align:center;
			font-family: Georgia;
		}
.accordion {
    background-color: transparent;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 80%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 20px;
    transition: 0.4s;
	
}

.active1, .accordion:hover {
    background-color:transparent; 
     
}

.panel {
   
    display: none;
    background-color: transparent;
    overflow: hidden;
	width:80%;
	font-size: 30px;
	
}
.accordion:after {
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    font-size: 15px;
    color: #777;
    float: right;
    margin-left: 5px;
}

.active1:after {
    content: "\2796"; /* Unicode character for "minus" sign (-) */
}
textarea{
	border:none;
	width:100%;
	height:10%;
	background-color: white;
	font-size: 20px;
}
.boxed {
  border: 2px solid black ;
  padding:10px; 
  padding-left:300px;
  padding-right:300px;
  background-color:#cceeff;
  color:black; 
  font-family:Georgia;
  letter-spacing:10px;
  border-radius: 25px;

  } 
	</style>
	<body  class="bg">

<!-- display upload status -->
	
	<header>
		<div class="container-fluid row">
			
			<nav class="navbar navbar-inverse" style="height:10%;background: rgba(0, 0, 095, 0.6);">
				<div class="container-fluid">
					
					<ul class="nav navbar-nav navbar">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php"><img src="../img/QCC-Logo-No-Title.png" style="height:50px;width:100px"></a>
						</div>
						<li ><a href="../index.php">Home</a></li>
						<li><a href="../index.php">Trivia</a></li>
						<li class="active"><a href="#">QCC Board</a></li>
						
						<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							  </ul>
						</li>
						
					</ul>
					
				</div>
			</nav>
		
	</header>
			<div class="title">
				<h1>Steps of Problem Solving</h1>
			</div>
<center><button class="accordion"><a class="boxed">MOTTO</a></button>
<div class="panel">
	<table>
	<tr>
		<td style="height:100px;width:100px" class="editable" id="motto"></td>
	</tr>
	</table>
	<textarea class="editable" id="motto"></textarea>
</div>

<button class="accordion"><a class="boxed">TARGET</a></button>
<div class="panel">
  <textarea class="" id=""></textarea>
</div>

<button class="accordion"><a class="boxed">THEME SELECTION</a></button>
<div class="panel">
  <table class="table table-stripped table-hover table-condensed" style="border:1px">
	<div class="container-fluid row">
		<div class="row">
			<div class="col-sm-4">
				<img src="../img/brainstorm-word-cloud-concept-white-background-d-rendering-brainstorm-word-cloud-111401014.jpg" style="height:200px;width:320px">
				<!--<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>--> 
			</div>
			<div class="col-sm-4">
				<img src="../img/images.png" style="height:200px;width:320px">
				<!--<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>-->
			</div>
			<div class="col-sm-4">
				<img src="../img/images1.png" style="height:200px;width:320px">
				<!--<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>-->
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<img src="../img/index1.jpg" style="height:200px;width:320px">
				<!--<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>-->
			</div>
			<div class="col-sm-4">
				<img src="../img/index1.jpg" style="height:200px;width:320px">
				<!--<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>-->
			</div>
			<div class="col-sm-4">
				<img src="../img/index1.jpg" style="height:200px;width:320px">
				<!--<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>-->
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>
			</div>
			<div class="col-sm-4">
				<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>
			</div>
			<div class="col-sm-4">
				<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>
			</div>
			<div class="col-sm-4">
				<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>
			</div>
			<div class="col-sm-4">
				<textarea class="" id="" name="" style="height:200px;width:320px"></textarea>
			</div>
		</div>		
	</div>
	<br>
  </table>
</div>
<button class="accordion"><a class="boxed">MINUTES</a></button>
	<div class="panel">
	  <textarea class="" id="" ></textarea>
	</div></center>
	</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active1");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
<script src="controller.js"></script>

			
				
</html>	



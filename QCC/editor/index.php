<!DOCTYPE html>
<!--
Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Ask a Question</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
	<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
	<link href="http://hrdapps33/bootstrap/css/csshake.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../../bootstrap/js/jquery-1.11.3.js"></script>
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<script src="ckeditor.js"></script>
	
</head>
<body class="bg">
<header>
		<div class="container-fluid row">
			<!--<nav> Defines navigation links-->
			<nav class="navbar navbar-inverse" style="height:15%;background: rgba(0, 0, 095, 0.6);">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="../index.php"><img src="../img/QCC-Logo-No-Title.png" style="height:70px;width:200px"><span style="font-size:20px;color:white;font-family:Georgia">Quality Control Circle</span></a>
					</div>
					<!--<ul> defines unordered list>-->
					<ul class="nav navbar-nav">
						<!--<li> defines list item-->
						<li><a href="../index.php" style="color:white;margin-left:170px">Trivia</a></li>
						<li><a href="../editor/question.php" style="color:white">Questions</a></li>						
						<li><a href="../20171030/inline.html" style="color:white">Unanswered</a></li>
						<li class="active"><a href="index.php" style="color:white">Ask a Question</a></li>
					</ul>
							
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
					<!--unordered list for right navigation links
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" style="color:white"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
						<li><a href="#" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					
					</ul>-->
					
					
				</div>
			</nav>
		</div>
	</header>


	
		<div class="grid-container">
			<div class="grid-width-100">				
				<form method="post" id="" enctype="multipart/form-data" action="save.php">	
					<textarea id="editor" name="editor"></textarea>
					<input type="submit" name="submit" value="ASK A QUESTION"/>
					<input type="hidden" name="date" value="<?php echo date('Y-m-d_H:i:s')?>"/>
					
				</form>	
			</div>
		</div>
		
	</div>

	
</main>

<!--<footer class="footer-a grid-container">
	<div class="grid-container">
		<p class="grid-width-100">
			CKEditor &ndash; The text editor for the Internet &ndash; <a class="samples" href="https://ckeditor.com/">https://ckeditor.com</a>
		</p>
		<p class="grid-width-100" id="copy">
			Copyright &copy; 2003-2018, <a class="samples" href="https://cksource.com/">CKSource</a> &ndash; Frederico Knabben. All rights reserved.
		</p>
	</div>
</footer>-->
<script>
	initSample();
</script>

</body>
</html>
 <script>
	CKEDITOR.replace('editor');
</script>
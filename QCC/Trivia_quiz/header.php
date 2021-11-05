<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<!--<table border="0" width="100%" cellspacing="0" cellpadding="0" background="image/topbkg.jpg">
  <tr>
    <td width="90%" valign="top">
<!--You can modify the text, color, size, number of loops and more on the flash header by editing the text file (fence.txt) included in the zip file.
<div align="left"><object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000
codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,2,0
width=500
height=68>
<param name=movie value=image/fence.swf>
<param name=quality value=high>
<param name=BGCOLOR value=#000000>
<param name=SCALE value=showall>
<param name=wmode value=transparent> 
<embed src=image/fence.swf
quality=high
pluginspage=http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash type=application/x-shockwave-flash
width=1365
height=68
bgcolor=#1d91d0;
scale= showall>
</embed>
</object></div></td>
    <td width="100%">
     
  </tr>
</table>-->
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
							<a class="navbar-brand" href="index.php"><img src="../img/imageedit_24_4871139716.png" style="height:65px;width:120px;margin-top:-10px"></a>
						</div>
						
							<li><a href="../index.php">Trivia</a></li>
						<!--<li class="active"><a href="index.php">Quiz Trivia</a></li>-->
						
						<li class=""><a href="http://hrdapps28:8080/019811April/terminologies/mainpage/" target="_blank">Japanese Terminologies</a></li>
						<!--<li><a href="php/board.php">QCC Board</a></li>-->
						
						<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Others<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="http://hrdapps33/qcc/trivia_quiz/">Trivia Quiz</a></li>
								<li><a href="http://hrdapps33/qcc/trivia_quiz/admin/">Add Trivia Quiz</a></li>
								
							  </ul>
						</li> 
						<li><a href="help.php" style=";margin-top:-4px">Help<span class="glyphicon glyphicon-question-sign"></span></a></li>
						
						
							 
								
							
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
					 <?php @$_SESSION['login']; 
							
							  error_reporting(1);
							  ?>
							 
								<?php
								if(isset($_SESSION['login']))
								{
								 echo "<li style='float'><a href=\"index.php\"> Home </a></li><li><a href=\"signout.php\">Signout</a></strong></li>";
								 }
								 else
								 {
									echo "&nbsp;";
								 }
								?>
					</ul>
				</div>
			</nav>
		
	</header>
  

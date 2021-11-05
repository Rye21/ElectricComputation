

<?php
include 'db_config.php';
$sNum = 1;
//$id = $_REQUEST["id"];
//$date = $_REQUEST["date"];
 try {
	 
    
 
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$pdo->prepare(
		"SELECT * FROM `editor`"
	);
	//$stmt->bindValue(':date',$date,PDO::PARAM_INT);
	$flag = $stmt->execute();
	if (!$flag) { 
		$info = $stmt->errorInfo();
		exit($info[2]);
	}
	$tbody = '';

	while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
		
		$tbody.='<table class="table table-condensed table-hover table-striped"  style="width:50%;border-color: coral;">';			
		$tbody.='<tr>';		
		//$tbody .= '<td>'.$row["title"].'</td>';
		$tbody .= '<td style="background: #e6fff7;font-size:30px;font-weight:bold;font-family: Bilbo Swash Caps;">'.$row["body"].'</td>';
		//$tbody .= '<td>'.$row["date"].'</td>';
		$tbody.='</tr>';	
		$tbody.='</table>';
	
	$sNum = $sNum + 1;
	}
} catch (PDOException $e){
  var_dump($e->getMessage());
}
$pdo = null; 

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Question & Answer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'>
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>	
		<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
		<link href="http://hrdapps33/bootstrap/css/csshake.min.css" rel="stylesheet">		
		
		<link href="http://hrdapps33/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
	</head>
	<style>
	table{
		align:center;
		margin:15px;
		padding:1px;		
	}
	br {
    display: block;
    margin: 2px 0;
	}

</style>
			
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
					<div class="nav navbar-nav">
						<!--<li> defines list item-->
						<li><a href="../index.php" style="color:white;margin-left:170px">Trivia</a></li>
						<li class="active"><a href="../editor/question.php" style="color:white">Questions</a></li>				
						<li><a href="summernote/index.php" style="color:white">Unanswered</a></li>
						<li><a href="../editor/index.php" style="color:white">Ask a Question</a></li>
					</div>
							
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
					
					</ul>-->
					
					
				</div>
			</nav>
		
	</header>	
				<?php echo $tbody;?>
	</body>
</html>


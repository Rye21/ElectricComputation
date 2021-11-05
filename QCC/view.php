<meta charset="utf-8">
<title>Did you know?</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">		
<link href="http://hrdapps33/QCC/css/style.css" rel="stylesheet">
<link href="http://hrdapps33/QCC/css/font.css" rel="stylesheet">
<!--<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>-->

<link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
<style type="text/css">


img.center {
 
	display: block;
    margin-left: auto;
    margin-right: auto;
  height:400px;
  width:500px;
 
}
textarea{
	display: block;
    margin-left: auto;
    margin-right: auto;
	font-weight:bold;
	text-align:center;
	
	font-family: 'Bilbo Swash Caps';
}
#zoom:hover {
    transform: scale(1.3); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.typewriter h3,p {
	
  color: #fff;
  font-family: monospace;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  //margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 40% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: none }
}


</style>
<style>
footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #ccffff;
    color: black;
    text-align: center;
}
span:hover {
    background-color: gray;
	opacity: 10;
}
span{
	 text-decoration: none;
    display: inline-block;
    padding: 8px 8px;
}
</style>

 


<body class="bg">
<div class="container-fluid">
	<div class="row">
		<!--<a type="button" class="btn navbar-btn btn-warning btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;margin-right:30px;" href="./."><i class="glyphicon glyphicon-home">HOME</i></a>&nbsp;
		<a type="button" class="btn navbar-btn btn-danger btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;margin-right:30px;" id="delete"><i class="glyphicon glyphicon-delete">DELETE</i></a>&nbsp;-->
	</div>
	<br>	
	<!--<div class="container-fluid row">
		<div class="typewriter">
			<p style="font-size:40px;color:black;font-family: Times New Roman, Times, serif;font-weight:bold;">DID YOU KNOW...?</p>		
		</div>
	</div>-->
</div>
<?php
//include 'db_connect.php';
$id = $_REQUEST["id"];
//$id2 = $id + 1;

$id2 = $_GET["id"];

 try {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$pdo->prepare(
		"SELECT * FROM `qcc` WHERE `id` = :id" 
	);
	$stmt->bindValue(':id',$id,PDO::PARAM_INT);
	$flag = $stmt->execute();
	if (!$flag) { 
		$info = $stmt->errorInfo();
		exit($info[2]);
	}
	//$tbody = '';
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$id = $row["id"];
		$item_photos = $row["item_photos"];
		$description = $row["description"];
		$answer = $row["answer"];
		$name =$row["id"];
		
		
	}
 

} catch (PDOException $e){
  var_dump($e->getMessage());
}
$pdo = null; 
	include("db_connect.php"); //Connect to db mysqli
		$sql = "SELECT MAX(id) as id FROM qcc";  
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
		$idt = $id;
		$id2 = $id++;
		$lid = $row['id'];
		 if($idt == $lid){
			$id2 = 1;
		}else{
			$id2 = $id++;
		} 
		$id3 = $idt -1;
		 if($id3 == 0){
			$id3 = $lid;
		}else{
			$id3 = $id3;
		} 
	echo "<a href='view.php?id=$id2' style='color:black'><span class='glyphicon glyphicon-chevron-right' style='font-size:30px;float:right;margin-top:250px'></span></a>";
	echo "<a href='view.php?id=$id3' style='color:black'><span class='glyphicon glyphicon-chevron-left' style='font-size:30px;float:left;margin-top:260px'></span></a>";

	//
echo '<br>';
echo '<br>';
//echo "<a href='view.php?id=$id3'>Post2</a>";
echo '<img src="'.$item_photos.'"class="center" id="zoom">';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<div class="container-fluid row"> 
		<div class="typewriter" align="center">
			<p style="font-size:40px;color:#00FFFF;font-family: Andalus, Times, serif;font-weight:bold;">DID YOU KNOW...?</p>		
		</div>
	</div>';
echo '<center><textarea class="form-control"   style="font-weight:bold;font-family:Andalus, Times, serif;font-size:40px;color:khaki;width:1050px;height:330px;border:none;background-color:transparent;" disabled>'.$description.''.$answer.'</textarea></center>';
//echo '<a type="button" class="btn navbar-btn btn-danger delete btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right;margin-right:30px;" id="delete-'.$id.'"><i class="glyphicon glyphicon-delete">DELETE</i></a>&nbsp;';
	

?>

</body>

<script src="../bootstrap/js/jquery-1.11.3.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="controller.js"></script>
<?php include ('footer.php'); ?>

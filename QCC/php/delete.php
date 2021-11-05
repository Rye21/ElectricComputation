<?php
/* $id = $_GET["id"];
 echo $id;

 $host = 'localhost';
$port = 3306;
$db = 'ryanpelaez';
$user = 'root';
$pass ='admin';
//Constant...
define( 'DSN', "mysql:host=$host;port=$port;dbname=$db" );
define( 'DB_USR', $user );
define( 'DB_PWD', $pass );


try{
	$pdo = new PDO(DSN,DB_USR,DB_PWD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$pdo->prepare("
		delete from 'qcc'
		where
		id=:id
		");
  
  $stmt=$pdo->prepare("
		delete from `qcc`
		where
		id=:id
		");
	$stmt->bindValue(':id',$_POST["id"],PDO::PARAM_INT);
	$stmt->execute();
}catch(PDOExeption $e){
	var_dump($e->getMessage());
}

$pdo=null;  */


$host = 'localhost';
$port = 3306;
$db = 'ryanpelaez';
$user = 'root';
$pass ='admin';
//Constant...
define( 'DSN', "mysql:host=$host;port=$port;dbname=$db" );
define( 'DB_USR', $user );
define( 'DB_PWD', $pass );


try{
	$pdo = new PDO(DSN,DB_USR,DB_PWD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$pdo->prepare("
		delete from 'qcc'
		where
		id=:id
		");
  
  $stmt=$pdo->prepare("
		delete from `qcc`
		where
		id=:id
		");
	$stmt->bindValue(':id',$_POST["id"],PDO::PARAM_INT);
	$stmt->execute();
}catch(PDOExeption $e){
	var_dump($e->getMessage());
}

$pdo=null;

?>

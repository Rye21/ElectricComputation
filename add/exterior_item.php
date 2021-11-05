<?php
try{
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->query( "SET NAMES utf8" );
		$stmt = $pdo->prepare(
		"SELECT * FROM centering1 WHERE exterior_denki = :exterior_denki"
	);
  $stmt->bindValue( ':exterior_denki', $_REQUEST["id"], PDO::PARAM_STR );
  
  $flag = $stmt->execute();
  if( !$flag ) {
    $info = $stmt->errorInfo();
    exit( $info[2] );
  }
  $japs  = '';
  while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    $japs = $row["EWH_2f"];
  }
}catch( PDOException $e ){
  echo $e->getMessage();
}
$pdo = null;

echo $japs;

?> 


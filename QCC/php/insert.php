<?php

//print_r($_REQUEST);

try{
	$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	$stmt = $pdo->prepare(
		"INSERT IGNORE qcc_category
		(category)
		VALUES
		(:category)"
	);
	
	$stmt->bindValue(':category',$_REQUEST["category"],PDO::PARAM_STR);

	
	$stmt->execute();
		
	
} catch (PDOException $e) {
	echo $e->getMessage();
}
$pdo = null;
//include ('../HRDSQLauto.php'); 

?>
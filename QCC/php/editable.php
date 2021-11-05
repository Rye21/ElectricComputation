<?php

//print_r($_REQUEST);



try{
	$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	$stmt = $pdo->query(
		"
		UPDATE qcc
		SET
		".$_REQUEST["column"]." = '".$_REQUEST["value"]."'
		WHERE
		id = ".$_REQUEST["id"]."
		"
	);
	/* $stmt->bindValue(':id',$_REQUEST["id"],PDO::PARAM_INT);
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$id = $row["id"];
		
		$remarks = $row["remarks"];
	} */
} catch (PDOException $e) {
	echo $e->getMessage();
}
 

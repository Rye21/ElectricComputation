<?php
$host = 'localhost';
$port = 3306;
$db = 'information_schema';
$user = 'root';
$pass ='admin';
print_r($_REQUEST);
define( 'DSN', "mysql:host=$host;port=$port;dbname=$db" );
define( 'DB_USR', $user );
define( 'DB_PWD', $pass );


try{
	$pdo = new PDO(DSN,DB_USR,DB_PWD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->query( "SET NAMES utf8" );
	$stmt = $pdo->prepare(
		"SELECT COLUMN_NAME FROM COLUMNS
		WHERE
		TABLE_SCHEMA = 'ryanpelaez'
		AND
		TABLE_NAME = 'qcc'
		"
	);
	$flag = $stmt->execute();
	if( !$flag ) {
		$info = $errorInfo();
		exit($info[2]);
	}
	$columns = $stmt->fetchAll();
} catch ( PDOException $e ) {
	var_dump( $e->getMessage() );
}
$pdo = null;

$options = '';
foreach( $columns as $column ) {
	$options .= '<option value="'.$column["COLUMN_NAME"].'">'.$column["COLUMN_NAME"].'</option>';
}

echo $options;

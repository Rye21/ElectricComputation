<?php
/* try{
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->query( "SET NAMES utf8" );
		$stmt = $pdo->prepare(
		"SELECT * FROM interphone WHERE item_name = 'MT102'"
	);
  $stmt->bindValue( ':item_name', $item_name, PDO::PARAM_STR );
  
  $flag = $stmt->execute();
  if( !$flag ) {
    $info = $stmt->errorInfo();
    exit( $info[2] );
  }
  $japs  = '';
  while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    $japs = $row["item_name"];
  }
}catch( PDOException $e ){
  echo $e->getMessage();
}
$pdo = null;

echo $japs; */
?> 
<script>
		window.location.href='http://hrdapps33/denkicomputation/interphone.php';
	</script>


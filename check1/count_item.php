<?php


error_reporting(0);
  $DSN        = "HRDSQL4";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

     if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"];   

	$itemName1 = mb_convert_encoding( 'int-03', "sjis-win", "utf-8" );
	
    $query = "SELECT * FROM UnitWiring.dbo.OptionPickingItemsEx
	
	
	
	WHERE ConstructionCode = '$code_number' AND Floor IS NOT NULL AND RoomCode IS NOT NULL AND RoomName IS NOT NULL  and ItemName NOT LIKE '照明%';";
    $show = odbc_exec($con, $query);
	//echo odbc_result ($show,'ItemName');
	$array = array();
	while($row = odbc_fetch_array( $show )){ 
		
		$hello = mb_convert_encoding(odbc_result ($show,'DrawingItemQuantity'),"utf-8","sjis-win");
		$sample +=  round($hello);	
	}
	echo $sample;		
   }
   

?>


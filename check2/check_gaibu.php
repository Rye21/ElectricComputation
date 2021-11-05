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
	
	
	
	WHERE ConstructionCode = '$code_number' AND 
	
	   ItemName LIKE '%$itemName1%' AND RoomName != 'NULL'
	
	ORDER BY ItemName  ASC";
    $show = odbc_exec($con, $query);
	//echo odbc_result ($show,'ItemName');
	$array = array();
	while($row = odbc_fetch_array( $show )){ 
		//$hello =  odbc_result($show,'ItemName');
		//$hello =  odbc_result($show,'ItemName');
		$hello = mb_convert_encoding(odbc_result ($show,'RoomName'),"utf-8","sjis-win");
		
		/* $hello2 =  substr(odbc_result($show,'DrawingItemQuantity'),0,1);
		if($hello2 == 2){
			$int =  $hello.','.$hello.',';
		}else{
			$int =  $hello.',';
		} */
		
		
		echo $hello;
	}
	

   }
   

?>


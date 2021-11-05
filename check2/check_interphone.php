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

	$itemName1 = mb_convert_encoding( 'MT', "sjis-win", "utf-8" );
	$itemName2 = mb_convert_encoding( 'MT82', "sjis-win", "utf-8" );
	$itemName3 = mb_convert_encoding( 'MT83', "sjis-win", "utf-8" );
	$itemName4 = mb_convert_encoding( 'MT91', "sjis-win", "utf-8" );
	$itemName5 = mb_convert_encoding( 'MT92', "sjis-win", "utf-8" );
	$itemName6 = mb_convert_encoding( 'MT101', "sjis-win", "utf-8" );
	$itemName7 = mb_convert_encoding( 'MT102', "sjis-win", "utf-8" );
	$itemName8 = mb_convert_encoding( 'MT103', "sjis-win", "utf-8" );
	$itemName9 = mb_convert_encoding( 'MT104', "sjis-win", "utf-8" );
	$itemName10 = mb_convert_encoding( 'MT105', "sjis-win", "utf-8" );
	$itemName11 = mb_convert_encoding( 'MT71', "sjis-win", "utf-8" );
	$itemName12 = mb_convert_encoding( 'MT73', "sjis-win", "utf-8" );
	$itemName13 = mb_convert_encoding( 'MT74', "sjis-win", "utf-8" );
	$itemName14 = mb_convert_encoding( 'MT72', "sjis-win", "utf-8" );
    $query = "SELECT * FROM UnitWiring.dbo.OptionPickingItemsEx 
	
	
	
	WHERE ConstructionCode = '$code_number' AND 
	(
	   ItemName LIKE '%$itemName1%'
	
	) 
	
	ORDER BY ItemName  ASC";
    $show = odbc_exec($con, $query);
	$array = array();
	while($row = odbc_fetch_array( $show )){ 
		$hello =  odbc_result($show,'ItemName');
		$hello2 =  odbc_result($show,'DrawingItemQuantity');
		$int =  $hello.'+';
		$int2 =  $hello2.'+';
		echo $int;
		echo $int2;
	}
	//$row = odbc_exec($result);
	 
	
	//echo odbc_result($show,'ItemName');
	//echo mb_convert_encoding(odbc_result ($show,'ItemName'),"utf-8","sjis-win");

   }
   

?>


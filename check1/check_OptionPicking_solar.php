<?php

error_reporting(0);

  $DSN        = "HRDSQL4";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connec2t to Access database");
	
  }

    if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"];   
	
	$itemName = mb_convert_encoding( '一般-29', "sjis-win", "utf-8" );
	//$itemName2 = mb_convert_encoding( '一般-30', "sjis-win", "utf-8" );
	//$itemName3 = mb_convert_encoding( '一般-37', "sjis-win", "utf-8" );

    $query = "SELECT * FROM UnitWiring.dbo.OptionPickingItemsEx
	
	

	WHERE ConstructionCode = '$code_number' AND ItemName = '$itemName'   ORDER BY UpdatedDateTime DESC ";
    $show = odbc_exec($con, $query);
	$array = array();
	while($row = odbc_fetch_array( $show )){ 
		
		$hello2 +=  mb_convert_encoding(odbc_result ($show,'DrawingItemQuantity'),"utf-8","sjis-win");
		//echo $hello.'+';
		
	}
	echo $hello2;
	//$row = odbc_exec($result);
	 
	//echo odbc_result($show,'ItemName');


    }
   

?>


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
	
	$itemName = mb_convert_encoding( '集電盤', "sjis-win", "utf-8" );

    $query = "SELECT * FROM UnitWiring.dbo.OptionPickingItemsEx
	
	

	WHERE ConstructionCode = '$code_number' AND ItemName = '$itemName'  ";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	 
	//echo odbc_result($show,'ItemName');
	echo mb_convert_encoding(odbc_result ($show,'ItemName'),"utf-8","sjis-win");

    }
   

?>


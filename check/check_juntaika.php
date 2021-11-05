<?php



 $DSN        = "HRDSQL2";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

    if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"]; 
	$itemName2 = mb_convert_encoding( '防耐火仕様', "sjis-win", "utf-8" );

    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_kihon 
	
	WHERE  
	siyoDataBroker.dbo.tbl_siyo_kihon.customerCode = '$code_number' AND kihonsiyoName = '$itemName2'
	
	 
	ORDER BY siyoCode DESC ";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	echo mb_convert_encoding(odbc_result ($show,'siyoDetailName'),"utf-8","sjis-win"); 
	
	
	//echo odbc_result($show,'shohinCd');
	//echo odbc_result($show,'Inverter80Qty');
	//echo odbc_result($show,'Inverter99Qty');
	

   }
   

?>


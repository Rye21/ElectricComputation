<?php

error_reporting(0);

 $DSN        = "HRDSQL2";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

   if(!empty($_POST["code_number"]) ){
	//$code_number = $_POST["code_number"];  
	$code_number = $_POST["code_number"]; 


    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_kihon

	
	
	WHERE  customerCode = '$code_number' AND  kihonsiyoCd  = '0090' ORDER BY siyoCode  DESC   ";
    $show = odbc_exec($con, $query);
	 
	echo mb_convert_encoding(odbc_result ($show,'siyoDetailName'),"utf-8","sjis-win"); 
	
  }
   

?>


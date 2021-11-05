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
	//$code_number = '0940091-2020';  
	$code_number = $_POST["code_number"]; 
	$query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_boss
	WHERE  customerCode = '$code_number'  ORDER BY siyoCode DESC";
	$show = odbc_exec($con, $query);
		 
	$LatestSiyo = mb_convert_encoding(odbc_result ($show,'siyoCode'),"utf-8","sjis-win"); 
	//////////////////////////////////////////////////////////////////////////////////////
    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_kihon
	WHERE  customerCode = '$code_number' AND siyoCode = '$LatestSiyo' AND  kihonsiyoCd  = '0112'    ";
    $show = odbc_exec($con, $query);
	 
	echo mb_convert_encoding(odbc_result ($show,'siyoDetailName'),"utf-8","sjis-win"); 
	
  }
   

?>


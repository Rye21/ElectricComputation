<?php



 $DSN        = "HRDSQL2";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

 if(!empty(@$_POST["code_number"]) ){
	$code_number = @$_POST["code_number"];  


    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_boss
	
	
	
	WHERE customerCode = '$code_number' ORDER BY siyoCode DESC";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	 
	echo odbc_result($show,'zumenCode');
	echo '-';
	echo odbc_result($show,'siyoNo');
	//echo odbc_result($show,'Inverter80Qty');
	//echo odbc_result($show,'Inverter99Qty');
	//echo mb_convert_encoding(odbc_result ($show,'ContractKind'),"utf-8","sjis-win");

   }
   

?>


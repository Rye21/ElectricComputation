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


    $query = "SELECT customerCode,shohinCd,komokuName2,shohinCd FROM siyoDataBroker.dbo.tbl_siyo_syohin
	
	WHERE  
	siyoDataBroker.dbo.tbl_siyo_syohin.customerCode = '$code_number' AND shohinCd = '0200016'
	OR	
	siyoDataBroker.dbo.tbl_siyo_syohin.customerCode = '$code_number' AND shohinCd = '0200018'
	OR	
	siyoDataBroker.dbo.tbl_siyo_syohin.customerCode = '$code_number' AND shohinCd = '0200007'
	OR	
	siyoDataBroker.dbo.tbl_siyo_syohin.customerCode = '$code_number' AND shohinCd = '0200008'
	OR	
	siyoDataBroker.dbo.tbl_siyo_syohin.customerCode = '$code_number' AND shohinCd = '0200009'
	 
	ORDER BY siyoCode DESC ";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	echo mb_convert_encoding(odbc_result ($show,'komokuName2'),"utf-8","sjis-win"); 
	echo odbc_result($show,'shohinCd');
	//echo odbc_result($show,'Inverter80Qty');
	//echo odbc_result($show,'Inverter99Qty');
	

   }
   

?>


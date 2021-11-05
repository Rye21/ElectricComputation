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


    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_kanri

	
	
	WHERE  customerCode = '$code_number' ORDER BY siyoCode  DESC   ";
    $show = odbc_exec($con, $query);
	 
	$GSaison =  odbc_result($show,'typeCd');
	if ($GSaison == '070'){
		echo '1';
	} else {
		echo '';
	}
	
  }
   

?>


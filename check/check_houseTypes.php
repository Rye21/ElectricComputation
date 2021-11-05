<?php

error_reporting(0);

 $DSN        = "HRDSQL2";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connec2t to Access database");
	
  }

  if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"]; 

    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_kihon
	
	
	
	WHERE customerCode = '$code_number' AND kihonsiyoCd = '0111'  ORDER BY siyoCode DESC";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	 
	//echo odbc_result($show,'SIYO_DTL_MEI');
	echo mb_convert_encoding(odbc_result ($show,'siyoDetailCd'),"utf-8","sjis-win");
		

    }
 /* $DSN        = "HRDSQL";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

   if(!empty($_POST["code_number"]) ){
	//$code_number = '9758371-2020';  
	$code_number = $_POST["code_number"]; 


    $query = "SELECT 
				HrdInformationService.dbo.Houses.ConstructionCode,
				HrdInformationService.dbo.Houses.ConstructionTypeCode,
				HrdInformationService.dbo.ConstructionTypes.ConstructionTypeCode,
				HrdInformationService.dbo.ConstructionTypes.Method
				
				FROM HrdInformationService.dbo.Houses
				
				INNER JOIN
				HrdInformationService.dbo.ConstructionTypes
				ON
				HrdInformationService.dbo.Houses.ConstructionTypeCode = HrdInformationService.dbo.ConstructionTypes.ConstructionTypeCode
				
				WHERE ConstructionCode = '$code_number' ";
    $show = odbc_exec($con, $query);
	 
	echo mb_convert_encoding(odbc_result ($show,'Method'),"utf-8","sjis-win"); 
	
  } */
   

?>


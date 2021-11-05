<?php

error_reporting(0);



/* 
 $DSN        = "HRDSQL4";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connec2t to Access database");
	
  }

   if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"];  


   $query = "SELECT * FROM UnitWiring.dbo.ShikakuTableEntries 
	
	
	
	WHERE ConstructionCode = '$code_number' AND ItemId = '99' ";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	 
	//echo odbc_result($show,'value');
	echo mb_convert_encoding(odbc_result ($show,'value'),"utf-8","sjis-win");

    }
    */





	$DSN        = "HRDSQL4";    //Data source name
	$DBUSER     = "sys-committee"; //Login user name
	$DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
	 if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
			  
		exit("Could not connec2t to Access database");
		
	  }

   if(!empty($_POST["code_number"]) && ($_POST["plan_number"]) ){
	$code_number = $_POST["code_number"];  
	$plan_number = $_POST["plan_number"];  


    $query = "SELECT * FROM PhotoVoltaic.dbo.SpcadPlanInfos_Extract

	WHERE ConstructionCode = '$code_number' AND PlanNo = '$plan_number' ORDER BY UpdatedDate DESC";
    $show = odbc_exec($con, $query);
	echo mb_convert_encoding(odbc_result ($show,'ElectricCompany'),"utf-8","sjis-win");

    } 
   

?>


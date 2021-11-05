<?php

error_reporting(0);

 $DSN        = "HRDSQL";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

   if(!empty($_POST["code_number"]) ){
	//$code_number = $_POST["code_number"];  
	$code_number = $_POST["code_number"]; 


    $query = "SELECT * FROM HrdInformationService.dbo.ConstructionSchedule

	
	
	WHERE  ConstructionCode = '$code_number' ORDER BY UpdatedDate DESC   ";
    $show = odbc_exec($con, $query);
	//echo odbc_result($show,'PrefectureCode');
	echo odbc_result($show,'ExpectedHouseRaisingDate');
  }
   

?>


<?php



 $DSN        = "HRDSQL";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

  if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"];  


    $query = "SELECT SiteAddressPrefectureCode,PrefectureCode,PrefectureNameRoma FROM HrdInformationService.dbo.ConstructionPrefectureView,
	HrdInformationService.dbo.Prefectures
	
	
	WHERE SiteAddressPrefectureCode = PrefectureCode AND ConstructionCode = '$code_number'   ";
    $show = odbc_exec($con, $query);
	 
	echo odbc_result($show,'SiteAddressPrefectureCode');
	echo '-';
	//echo odbc_result($show,'PrefectureCode');
	echo odbc_result($show,'PrefectureNameRoma');
   }
   

?>


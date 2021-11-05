<?php
error_reporting(0);


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
	
	
	
	WHERE ConstructionCode = '$code_number' AND (ItemId = '79' OR  ItemId = '80' ) AND Value IN ('True')";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	 
	//echo odbc_result($show,'value');
	$bundenban =  odbc_result($show,'ItemId');
	if ($bundenban == '79'){
		echo 'YOJO (余剰電力)';
	} if ($bundenban == '80'){
		echo 'ZENRYO (全量買取)';
	} else {
		
	}
	//echo mb_convert_encoding(odbc_result ($show,'ElectricCompany1'),"utf-8","sjis-win");

    }
   

?>


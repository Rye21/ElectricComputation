<?php



 $DSN        = "HRDSQL2";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connec2t to Access database");
	
  }

  if(!empty($_POST["code_number"]) ){
	@$code_number = $_POST["code_number"];   
	@$colorShanai = $_POST["colorShanai"];   
	@$colorShanaiOthers = $_POST["colorShanaiOthers"];   
	//echo @$colorShanai; 

    $query = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_boss
	
	
	
	WHERE customerCode = '$code_number' ORDER BY siyoCode DESC";
    $show = odbc_exec($con, $query);
	
	//$row = odbc_exec($result);
	 
	$latestSiyo = odbc_result($show,'siyoCode');
	//echo $latestSiyo;
	
	
	if($colorShanai == '外壁色合せ'){
		$itemName = mb_convert_encoding( '外壁タイル', "sjis-win", "utf-8" );
	} else if($colorShanai == '外壁同色'){
		$itemName = mb_convert_encoding( '１階外壁仕上げ', "sjis-win", "utf-8" );
	} else {
		$itemName = mb_convert_encoding( '外壁タイル', "sjis-win", "utf-8" );
	} 
	//echo $itemName;
	//echo mb_convert_encoding($itemName,"utf-8","sjis-win");
	$query1 = "SELECT * FROM siyoDataBroker.dbo.tbl_siyo_syohin
	
	
	
	WHERE customerCode = '$code_number' and komokuName2 = '$itemName' and siyoCode = '$latestSiyo'";
    $show1 = odbc_exec($con, $query1);
	
	//$row = odbc_exec($result);
	 
	echo mb_convert_encoding(odbc_result ($show1,'colorShanai'),"utf-8","sjis-win");
	//echo mb_convert_encoding(odbc_result ($show,'customerCode'),"utf-8","sjis-win");

    }
   

?>


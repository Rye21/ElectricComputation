<?php

error_reporting(0);

  $DSN        = "HRDSQL4";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
		  
    exit("Could not connect to Access database");
	
  }

  /*  if(!empty($_POST["code_number"]) ){
	$code_number = $_POST["code_number"]; */   


    /* $query = "SELECT * FROM Photovoltaic.dbo.SpcadPlanInfos_Extract
	
	
	
	WHERE ConstructionCode = '3370090-2018' ORDER BY UpdatedDate DESC";
    $show = odbc_exec($con, $query);
	$array = array();
	
	while($row = odbc_fetch_array( $show )){ 
		
		$option .= $row["PlanNo"];
		
		//$sample +=  round($hello);	
	}
	echo $option; */
	$pdo = new PDO('odbc:HRDSQL4','sys-committee','h78r78d');

$stmt = $pdo->prepare(
	"SELECT * FROM Photovoltaic.dbo.SpcadPlanInfos_Extract
	WHERE
	ConstructionCode = '3370090-2018'
	ORDER BY UpdatedDate DESC
	"
);
$stmt->bindValue(':code_number',$_REQUEST["code_number"],PDO::PARAM_STR);

$stmt->execute();


while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
	$option .= '<option value="'.$row["PlanNo"].'">'.$row["PlanNo"].'</option>';
}

//disconnect
$pdo = null;

echo $option;
	//$row = odbc_exec($result);
	 
	//echo odbc_result($show,'PlanNo');
	//echo odbc_result($show,'Inverter80Qty');
	//echo odbc_result($show,'Inverter99Qty');
	//echo mb_convert_encoding(odbc_result ($show,'ContractKind'),"utf-8","sjis-win");

   // }
   

?>


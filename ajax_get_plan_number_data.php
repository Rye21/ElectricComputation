<?php
//UDF;User Defined Function
function e($var) {
	return mb_convert_encoding($var,"utf-8","sjis-win");
}

 function RoomName( $roomCd ){
	$pdo = new PDO( "odbc:HRDSQL", "sys-committee", "h78r78d" );
	$stmt = $pdo->prepare(
		"SELECT * FROM HRDInformationService.dbo.Rooms
		WHERE
		RoomCode = :RoomCode
		"
	);
	$stmt->bindValue( ':RoomCode', $roomCd, PDO::PARAM_STR );
	$stmt->execute();
	while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
		return e($row["RoomNameJapanese"]);
	}
	$pdo = null;
}


function komokuName1( $customerCode, $siyoCode, $siyoKbn, $komokuCd1 ){
	$pdo = new PDO( "odbc:HRDSQL2", "sys-committee", "h78r78d" );
	$stmt = $pdo->prepare(
		"SELECT * FROM siyoDataBroker.dbo.tbl_siyo_heya
		WHERE
		customerCode = :customerCode
		AND
		siyoCode = :siyoCode
		AND
		siyoKbn = :siyoKbn
		AND
		komokuCd1 = :komokuCd1
		AND
		notNeedsKoumoku2 = 0
		"
	);
	$stmt->bindValue( ':customerCode', $customerCode , PDO::PARAM_STR );
	$stmt->bindValue( ':siyoCode', $siyoCode , PDO::PARAM_STR );
	$stmt->bindValue( ':siyoKbn', $siyoKbn , PDO::PARAM_STR );
	$stmt->bindValue( ':komokuCd1', $komokuCd1 , PDO::PARAM_STR );
	$stmt->execute();
	while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
		return e($row["komokuName1"]);
	}
	$pdo = null;
}

$pdo = new PDO('odbc:HRDSQL2','sys-committee','h78r78d');

//if($_REQUEST["category"] == 'all'){
	//all
	$stmt = $pdo->prepare(
		"SELECT * FROM siyoDataBroker.dbo.tbl_siyo_syohin
		WHERE
		customerCode = :code_number
		AND
		siyoCode = :siyoCode
		"
	);
	$stmt->bindValue(':code_number', $_REQUEST["code_number"],PDO::PARAM_STR);
	$stmt->bindValue(':siyoCode', $_REQUEST["siyoCode"],PDO::PARAM_STR);
	
/* }else{
	//gaibu, setsbu or naibu
	$stmt = $pdo->prepare(
		"SELECT * FROM siyoDataBroker.dbo.tbl_siyo_syohin
		WHERE
		customerCode = :code_number
		AND
		siyoCode = :siyoCode
		AND
		siyoKbn = :category	
		"
	);
	$stmt->bindValue(':code_number', $_REQUEST["code_number"],PDO::PARAM_STR);
	$stmt->bindValue(':siyoCode', $_REQUEST["siyoCode"],PDO::PARAM_STR);
	$stmt->bindValue(':category', $_REQUEST["category"],PDO::PARAM_INT);
		
} */

$stmt->execute();

$tbody = '';
$array = array();

while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
	$tbody .= '<tr>';
	$tbody .= '<td>'.$row["floorNum"].'</td>';
	$tbody .= '<td>'.$row["roomCd"].'</td>';
	$tbody .= '<td>'.$row["komokuCd2"].'</td>';
	$tbody .= '<td>'.e($row["komokuName2"]).'</td>';
	$tbody .= '<td>'.$row["shohinCd"].'</td>';
	$tbody .= '<td>'.e($row["shohinName"]).'</td>';
	$tbody .= '<td>'.e($row["colorShanai"]).'</td>';
	
	$cc = $row["customerCode"];
	$shohinCd = $row["shohinCd"];
	
	
	
 	require_once("include/dbcon.php");
	$s = $row["shohinCd"];

	$sql="SELECT * FROM items_to_be_checked2 WHERE `check` = '1' AND `shouhinhinbancode` = '$s'";
	$result = $db_connect->query($sql);
	$row = mysqli_fetch_assoc($result);
	$tbody .= '<td>'.$row["comment"].'</td>';	 

	//$ItemName = $row1["ItemName"];
	
	require_once("include/dbcon1.php");
	

	$sql1="SELECT ItemName FROM checking WHERE `shouhinhinbancode` = '$shohinCd'";
	$result1 = $db_connect1->query($sql1);
	$row1 = mysqli_fetch_assoc($result1);
	$ItemName = $row1["ItemName"];
	
	@$tbody .= '<td>'.$row1["ItemName"].'</td>';
	
	require("include/dbcon2.php");
	
	
	$com2 = mb_convert_encoding( $ItemName, "sjis-win", "utf-8" );
	
	
	
	 $sql3 = "SELECT * FROM UnitWiring.dbo.OptionPickingItems where ConstructionCode= '$cc' AND  ItemName = '$com2'";
  //Get the result
  $rst = odbc_exec($con, $sql3);
  //フェッチ

	$tbody .= '<TD>' .odbc_result($rst,"DrawingItemQuantity") .'</TD>';
	
	}		
$pdo = null;
 
?>

<table border>
	<thead>
		<tr>
			<th>Floor</th>
			<th>roomCd</th>
			<th>komokuCd2</th>			
			<th>komokuName2</th>
			<th>shohincd</th>
			<th>shohinname</th>
			<th>color</th>
			<th>Comment</th>
			<th>ItemName</th>
			<th>DrawingQty</th>
		</tr>
	</thead>
	<tbody>
	<?php echo $tbody;?>
<?php
/*		$pdo1 = new PDO('odbc:HRDSQL4','sys-committee','h78r78d');
		$stmt1 = $pdo1->prepare(
			"SELECT ItemName FROM UnitWiring.dbo.OptionPickingItems WHERE `ConstructionCode` = '$code_number' AND ItemName = 'Elevation_AC number 4'"
		);
		$stmt1->bindValue(':code_number', $_REQUEST["code_number"],PDO::PARAM_STR);
		$stmt1->execute();
		$tbody1 = '';
		while( $row2 = $stmt1->fetch( PDO::FETCH_ASSOC ) ){
			@$tbody1 .= '<td>'.e($row2["ItemName"]).'</td>';
		}
		$pdo = null;
		
$code_number = $_REQUEST["code_number"];
	$pdo1 = new PDO('odbc:HRDSQL4','sys-committee','h78r78d');
		$stmt = $pdo1->prepare(
		"SELECT * FROM UnitWiring.dbo.OptionPickingItems WHERE `ConstructionCode` = '$code_number' "
		);
	//$stmt->bindValue(':code_number', $code_number, PDO::PARAM_STR);

	$stmt->execute();

	$tbody1 = '';

	while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
		$tbody1 .= '<td>'.$row["ItemName"].'</td>';
		$tbody1 .= '</tr>';
	}		
$pdo = null;
  	$conn = odbc_connect('HRDSQL4','sys-committee','h78r78d');
	if (!$conn)
	  {exit("Connection Failed: " . $conn);}
	$sql2 = "SELECT * FROM UnitWiring.dbo.OptionPickingItems WHERE ConstructionCode = '$code_number' AND ItemName = $ItemName ";
	$rs = odbc_exec($conn,$sql2);
	if (!$rs)
	  {exit("Error in SQL");}
	while (odbc_fetch_row($rs))
	{
	  $DrawingItemQuantity = odbc_result($rs,'DrawingItemQuantity');
		//$tbody .= '<td>'.$DrawingItemQuantity.'</td>';
	}
	odbc_close($conn);  
	echo @$tbody1;*/
?>
	</tbody>
</table>
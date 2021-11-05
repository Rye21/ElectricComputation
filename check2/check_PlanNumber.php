<?php

error_reporting(0);

 
   $pdo = new PDO('odbc:HRDSQL4','sys-committee','h78r78d');

		$stmt = $pdo->prepare(
			"SELECT * FROM Photovoltaic.dbo.SpcadPlanInfos_Extract
	
	
	
	WHERE ConstructionCode = :code_number ORDER BY UpdatedDate DESC
			"
		);
		$stmt->bindValue(':code_number',$_REQUEST["code_number"],PDO::PARAM_STR);

		$stmt->execute();

		$option = '<option value=""></option>';
		while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
			$option .= '<option value="'.$row["PlanNo"].'">'.$row["PlanNo"].'</option>';
		}

		//disconnect
		$pdo = null;

		echo $option;

?>


<?php

if(@$_REQUEST["perpage"]) {
	$perpage = @$_REQUEST["perpage"];
}else{
	$perpage = 10;
}

if(!@$_REQUEST["page"]) {
	$page = 1;
}else{
	$page = @$_REQUEST["page"];
}


if($_REQUEST["codes"]) {
	$code = $_REQUEST["codes"];
}else{
	$code = '';
}
if($_REQUEST["fileName"]) {
	$inputFileName = $_REQUEST["fileName"];
}else{
	$inputFileName = '';
}
if($_REQUEST["teams"]) {
	$teams = $_REQUEST["teams"];
}else{
	$teams = '';
}
/* echo $code;
echo $inputFileName;
echo $teams;  */
//echo $inputFileName;
  include('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');
if($code && $teams && $inputFileName){
  try {
	
		@$path =  "../denkifinished/$teams/$code/$inputFileName";
		$inputFileNamed = $path;
			
	
		
		$inputFileType = PHPExcel_IOFactory::identify($inputFileNamed);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileNamed);
	 
  } catch (Exception $e) {
    die('Error loading file "' . pathinfo($inputFileNamed, PATHINFO_BASENAME) . '": ' . 
        $e->getMessage());
  }
  if (preg_match("/OptionPicking/i", $inputFileName)) {
	  @$tabSheet = '12';
	  @$sheet = $objPHPExcel->getSheet(@$tabSheet);
	  @$highestRow = $sheet->getHighestRow();
	$highestColumn = $sheet->getHighestColumn();
  } else if (preg_match("/Light/i", $inputFileName)) {
	  @$tabSheet = '0';
	  @$sheet = $objPHPExcel->getSheet(@$tabSheet);
	  @$highestRow = $sheet->getHighestRow();
	  @$highestColumn = $sheet->getHighestColumn();
  } else {
	  echo 'NOT APPLICABLE !!';
  }
	
	$num = 1;
	$ng = 0;
	$arrCnt = 1 ;
	$array = array();
	$content = "Floor,Roomcode,RoomName,NameAtSelection,height of Item,Sonota,Remarks\r\n";
	if(!isset($_POST['send'])){
	echo '<form method="post" action="CSV_heightChecking.php">';
	for ($row = 2; $row <= @$highestRow; $row++) { 
    $rowData = $sheet->rangeToArray('A' . $row . ':' . @$highestColumn . $row, null, true, false);
		if(@$tabSheet == '12'){
			$rowData1 = $rowData[0][0];
			$rowData2 = $rowData[0][1]; 
			$rowData3 = $rowData[0][2]; 
			$rowData4 = $rowData[0][3]; 
			$rowData5 = $rowData[0][4];
			$rowData6 = $rowData[0][5];
				if (preg_match("/$rowData5/i", $rowData6)) {
					$rowData7 = 'OKAY'; 
					$style = '';
				} else {
					$rowData7 = 'NOT GOOD'; 
					$style = 'background-color:red;color:white;';
					@$content .= '"'.$rowData1.'",';
					@$content .= '"'.$rowData2.'",';
					@$content .= '"'.$rowData3.'",';
					@$content .= '"'.$rowData4.'",';
					@$content .= '"'.$rowData5.'",';
					@$content .= '"'.$rowData6.'",';
					@$content .= '"'.$rowData7.'"'."\r\n";
					
				}

				@$tbody .= '<tr style="'.$style.'">';
				@$tbody .= '<td>'.$num.'</td>';
				@$tbody .= '<td>'.$rowData1.'</td>';
				@$tbody .= '<td>'.$rowData2.'</td>';
				@$tbody .= '<td>'.$rowData3.'</td>';
				@$tbody .= '<td>'.$rowData4.'</td>';
				@$tbody .= '<td>'.$rowData5.'</td>';
				@$tbody .= '<td>'.$rowData6.'</td>';
				if(@$rowData7 == 'NOT GOOD'){
					@$tbody .= '<td style="text-align:center;font-weight:bold;display:none;">'.$rowData7.'</td>';
					$ng = $ng + 1;	
					$message = '<span style="float:right;color:red;font-size:20px;">'.$ng.' NOT GOOD FOUND !!</span>';	
				} else {
					@$tbody .= '<td style="color:green;text-align:center;display:none;">'.$rowData7.'</td>';
					
				} 
				
				@$tbody .= '</tr>';	
				
		} else if(@$tabSheet == '0'){
			$rowData1 = $rowData[0][0];
			$rowData2 = $rowData[0][1]; 
			$rowData3 = $rowData[0][2]; 
			$rowData4 = $rowData[0][3]; 
			$rowData5 = $rowData[0][4];
				@$tbody .= '<tr style="'.$style.'">';
				@$tbody .= '<td>'.$num.'</td>';
				@$tbody .= '<td>'.$rowData1.'</td>';
				@$tbody .= '<td>'.$rowData2.'</td>';
				@$tbody .= '<td>'.$rowData3.'</td>';
				@$tbody .= '<td>'.$rowData4.'</td>';
				@$tbody .= '<td>'.$rowData5.'</td>';
				@$tbody .= '</tr>';	
		}
		
	$num = $num + 1;

	
	
	}
	echo '<input type="hidden" name="data" value="'.base64_encode(serialize($content)).'">';		
	echo '<input type="hidden" name="plan" value="'.base64_encode(serialize($teams)).'">';		
	echo '<input type="hidden" name="code" value="'.base64_encode(serialize($code)).'">';
	echo '<input type="hidden" name="file" value="'.base64_encode(serialize($inputFileName)).'">';
		
	echo '<input style="background-color:#2f7585;color:white;width:100px;font-weight:bold;height:40px;float:right" type="submit" name="send" value="CSV">';
	echo '</form>';
}	

?>


	<table class="table table-condensed" border="2"	style="background-color:aliceblue;width:100%;border-style:solid" id="tblData1">
		<thead style=" margin-top:0px;font-weight: bold; background:lightgray !important;">
		<tr>
		<th colspan=23  style="color:blue;">&nbsp;&nbsp;There are <?php echo @$num - 1 ;?> record(s) found. <?php echo @$message;?></th>
		</tr>
		<?php if(@$tabSheet == '12') { ?>
		<tr>
			<th style="vertical-align: middle;border: 1px solid #b009fe8; background:#a6a6a6; "><center>No.</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>Floor</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>Roomcode</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>RoomName</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>Name At Selection</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>height of Item</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>Sonota</th>
		</tr>
		<?php } else if(@$tabSheet == '0') { ?>
			<th style="vertical-align: middle;border: 1px solid #b009fe8; background:#a6a6a6; "><center>No.</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>ConstructionCode</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>PlanNo</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>LightNo</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>RoomName</th>
			<th style="vertical-align: middle;border: 1px solid #b009fe8;"><center>LightSerial</th>
		<?php }  ?>	
	</thead>
	<tbody>
		<?php echo @$tbody;?>
	</tbody>
	</table>


<?php
}  else {
	
}


?>

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


if(@$_REQUEST["fileName"]) {
	$inputFileName = $_REQUEST["fileName"].'.xls';
}else{
	$inputFileName = '';
}
if(@$_REQUEST["SecondfileName"] ) {
	$inputFileName2 = $_REQUEST["SecondfileName"].'.xls';
}else{
	$inputFileName2 = '';
}	


//print_r($inputFileName);

  include('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');
  try {
	////previous  
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
	////latesy
	$inputFileType2 = PHPExcel_IOFactory::identify($inputFileName2);
    $objReader2 = PHPExcel_IOFactory::createReader($inputFileType2);
    $objPHPExcel2 = $objReader2->load($inputFileName2);
	
  } catch (Exception $e) {
    die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . 
        $e->getMessage());
  }
	////previous
    $sheet = $objPHPExcel->getSheet(0);
	$highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();
	////latest
	$sheet2 = $objPHPExcel2->getSheet(0);
	$highestRow2 = $sheet2->getHighestRow();
    $highestColumn2 = $sheet2->getHighestColumn();
	
//	$tbody = '';
	$num = 1;
	$num2 = 1;	
	$combine = '';
	$combine2 = '';
	
	for ($row = 1; $row <= $highestRow; $row++) { 
    $rowPrevious = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, null, true, false);
		//previous																			
		$rowData0 = $rowPrevious[0][0];
		$rowData1 = $rowPrevious[0][1]; 
		$rowData2 = $rowPrevious[0][2]; 
		$rowData3 = $rowPrevious[0][3]; 
		$rowData4 = $rowPrevious[0][4];
		$rowData5 = $rowPrevious[0][5];
		$rowData6 = $rowPrevious[0][6];
		$rowData7 = $rowPrevious[0][7];
		$rowData8 = $rowPrevious[0][8];
   $rowLatest = $sheet2->rangeToArray('A' . $row . ':' . $highestColumn2 . $row, null, true, false);			
		//latest
		$rowDatas0 = $rowLatest[0][0];
		$rowDatas1 = $rowLatest[0][1]; 
		$rowDatas2 = $rowLatest[0][2]; 
		$rowDatas3 = $rowLatest[0][3]; 
		$rowDatas4 = $rowLatest[0][4];
		$rowDatas5 = $rowLatest[0][5];
		$rowDatas6 = $rowLatest[0][6];
		$rowDatas7 = $rowLatest[0][7];
		$rowDatas8 = $rowLatest[0][8];	
		
		
		@$tbody .= '<tr>';
		@$tbody .= '<td>'.$num.'</td>';
		@$tbody .= '<td>'.$rowData0.'</td>';
		@$tbody .= '<td>'.$rowData1.'</td>';
		@$tbody .= '<td>'.$rowData2.'</td>';
		@$tbody .= '<td>'.$rowData3.'</td>';
		@$tbody .= '<td>'.$rowData4.'</td>';
		@$tbody .= '<td>'.$rowData5.'</td>';
		@$tbody .= '<td>'.$rowData6.'</td>';
		@$tbody .= '<td>'.$rowData7.'</td>';
		@$tbody .= '<td>'.$rowData8.'</td>';
		@$tbody .= '</tr>';	
			
		
		@$tbody2 .= '<tr >';
		@$tbody2 .= '<td>'.$num2.'</td>';
		@$tbody2 .= '<td>'.$rowDatas0.'</td>';
		@$tbody2 .= '<td>'.$rowDatas1.'</td>';
		@$tbody2 .= '<td>'.$rowDatas2.'</td>';
		@$tbody2 .= '<td>'.$rowDatas3.'</td>';
		@$tbody2 .= '<td>'.$rowDatas4.'</td>';
		@$tbody2 .= '<td>'.$rowDatas5.'</td>';
		@$tbody2 .= '<td>'.$rowDatas6.'</td>';
		@$tbody2 .= '<td>'.$rowDatas7.'</td>';
		@$tbody2 .= '<td>'.$rowDatas8.'</td>';
		@$tbody2 .= '</tr>';	
		
	$num = $num + 1;	
	$num2 = $num2 + 1;
	
		/* if (str_contains($rowData5, $rowDatas5)) {
			print_r($rowData5.'<br>');
		} */
	$a1[] = $rowData0 ;
	$a2[] = $rowData1 ;
	$a8[] = $rowData8 ;
	$combine = array_merge($a1 , $a2 , $a8);
	$b1[] = $rowDatas0 ;
	$b2[] = $rowDatas1 ;
	$b8[] = $rowDatas8 ;
	$combine2 = array_merge($b1 , $b2 , $b8);
	}
	
	 echo '<tr>';
		 echo '<td>';
			 echo '<div class="containerfluid" style="width:1000px">';
				 echo '<div class="col-sm-6" style="width:500px">';
						echo '<table class="table table-bordered table-hovered table-condensed" id="tblData1"  cellspacing="0" width="100%">';	
							echo '<tr>';
								echo '<td style="background-color:white;color:black;font-size:15px;font-weight:bold">Previous</td>';
							echo '</tr>';
									foreach($combine as $prev) {
										if (!in_array($prev,$combine2)) {
											 echo '<tr>';
											 echo '<td style="background-color:red;color:white;font-size:15px;">';			
												 echo $prev.'<br>';		
											 echo '</td>';
											 echo '</tr>';				
										} 
									 }
						 echo '</table>';
				 echo '</div>';		
				 echo '<div class="col-sm-6" style="width:500px">';			
						 echo '<table class="table table-bordered table-hovered table-condensed" id="tblData2"  cellspacing="0" width="100%">';	
							 echo '<tr>';
								 echo '<td style="background-color:white;color:black;font-size:15px;font-weight:bold">Latest</td>';
							 echo '</tr>';		
									foreach($combine2 as $lat) {
										if (!in_array($lat,$combine)) {
											echo '<tr>';
											echo '<td style="background-color:red;color:white;font-size:15px;">';
												echo $lat.'<br>';		
											echo '</td>';
											echo '</tr>';	
									} 
						 } 			
						 echo '</table>';
				 echo '</div>';		
			 echo '</div>';
		 echo '</td>';
	 echo '</tr>';
	
?>
<?php ?>


	
	
	<tr>
	
	<td >
			<div class="data" style="overflow:auto; height:85%; margin-top:60px; margin-left:0px;border:3;background: #ffffff !important;  width:100%;" >
				<table class="table table-bordered table-hovered table-condensed" id="tblData1"  cellspacing="0"   >
					<thead style=" margin-top:0px;font-weight: bold; background:lightgray !important;">
					<tr>
					<th colspan="10"  style="color:blue;">&nbsp;&nbsp;There are <?php echo $num-1;?> record(s) found. </th>
					</tr>
					<tr>
						<th colspan="10" style="vertical-align: middle;border: 1px solid #b009fe8; background:cyan; "><center>Previous</th>
					</tr>
				</thead>
				<tbody>
					<?php echo @$tbody;?>
				</tbody>
				</table>
			</div>
	</td>
	<td >
			<div class="data2" style="overflow:auto; height:85%; ; margin-left:0px;border:3;background: #ffffff !important;  width:100%;" >
				<table class="table table-bordered table-hovered table-condensed" id="tblData2"  cellspacing="0" >
					<thead style=" margin-top:0px;font-weight: bold; background:lightgray !important;">
					<tr>
					<th colspan="10"  style="color:blue;">&nbsp;&nbsp;There are <?php echo $num2-1;?> record(s) found. </th>
					</tr>
					<tr>
						<th colspan="10" style="vertical-align: middle;border: 1px solid #b009fe8; background:cyan; "><center>Latest</th>
					</tr>
				</thead>
				<tbody>
					<?php echo @$tbody2;?>
				</tbody>
				</table>
			</div>
	</td>
	
	</tr>	


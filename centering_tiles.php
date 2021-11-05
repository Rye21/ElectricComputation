<?php include ('header.php'); ?>
<?php	
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
		$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		
		$pdo->query('SET NAMES UTF8');
		$stmt = $pdo->prepare(
		"SELECT * FROM centering_tiles"
		);
		
		$stmt->bindValue(':1F TO 3F ','%'.$_REQUEST["1F TO 3F "].'%',PDO::PARAM_STR);
		$stmt->execute();
		@$total = $stmt->rowCount();
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			@$tbody .= '<tr>';
			
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">'.$row["1F TO 3F"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">'.$row["1F TO 3F_A"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">'.$row["真壁和室_A"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">'.$row["真壁和室_B"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">'.$row["書斎_A"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#82CAFA">'.$row["書斎_B"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">'.$row["1F_A"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">'.$row["2F_B"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">'.$row["真壁和室_C"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#81D8D0">'.$row["書斎_C"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">'.$row["1F_C"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">'.$row["1F_D"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">'.$row["2F_C"].'</td>';
			@$tbody .= '<td style="font-size:18px;text-align:center;background-color:#98FF98">'.$row["2F_D"].'</td>';
			
			@$tbody .= '</tr>';
			
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
 
?>

<section id="main-content">			
	<section class="wrapper">
		<table class="table table-stripped table-bordered table-hovered">
			<thead style="background-color:#990012">
				<tr>
					<th colspan="14" style="font-weight:bold;font-size:25px;vertical-align:middle;text-align:center;color:white">CENTERING OF TILES</th>					
				</tr>
			</thead>
			<tbody>
				<tr style="background-color:lightblue">
					<td colspan="6" style="font-weight:bold;font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">240 KANABAKARI</td>
					<td colspan="4" style="font-weight:bold;font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">265 KANABAKARI</td>
					<td colspan="4" style="font-weight:bold;font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">260 KANABAKARI</td>
				</tr>
				<tr>
					<td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">1F TO 3F</td>
					<td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">真壁和室</td>
					<td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">書斎</td>
				
				
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">1F</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">2F</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">真壁和室</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">書斎</td>
					
					<td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">1F</td>
					<td colspan="2" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">2F</td>
				</tr>
				<tr>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TD(49)</td>
					
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TD(49)</td>
					
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:black">TD(49)</td>
					
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:black">TC(70)</td>
					
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TD(49)</td>
					
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TC(70)</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:black">TD(49)</td>
					
					
					
					
				</tr>
				<tr>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*2150*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*2150*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#82CAFA;color:red">*1850*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*2100*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*1950*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*2150*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#81D8D0;color:red">*1850*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*2050*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*2050*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*1850*</td>
					<td colspan="1" style="font-size:20px;vertical-align:middle;text-align:center;background-color:#98FF98;color:red">*1850*</td>
					<?php echo @$tbody; ?>
				</tr>
				
			</tbody>
		</table>
	</section>	
</section>	
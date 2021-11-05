
<!DOCTYPE html>
<?php

session_start();
if(!$_SESSION["EmployeeNumber"]){
	header('Location: login.php');
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PDF DATA</title>
		<link rel="icon" type="image/png" href="../image/DOH.png"/>
		<link href="http://hrdapps33/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://hrdapps33/bootstrap/css/animation.css" rel="stylesheet">
		<link href="http://hrdapps33/DOHchecklist/css/mystyle.css" rel="stylesheet">
		<style>
			.pdftable div .mytable tr:hover{
				background-color:#eeeeee;
			}
			.form-control{
				font-size:11px;
			}
			td{
				font-size:11px;
			}
		</style>
	</head>
	<body>
		<center><div style="margin-top:10px;background-color:white;" class="top animated fadeInDownBig"><p style="font-size:40px">PDF DATA OF EXAMINATION</p></div></center>
	<div class="pdftable">
		<div class="row" style="border:none">
			<table style="border:none" class="mytable">
				<tr>
					<form>
						<td style="width:10%;border:none;">
							<label style="font-size:20px;">Select Month:</label>
							<select class="form-control" style="font-size:15px;" name='month' onchange="this.form.submit()">
								<option value="<?php echo @$_GET['month'];?>"><?php echo @$_GET['month'];?></option>
								<option value=""></option>
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
							</select>
						</td>
						<td style="width:5%;border:none;" class="">
						
						</td>
						<td style="width:10%;border:none;" class="hide">
							<label style="font-size:20px;">Select Team:</label>
							<select class="form-control" style="font-size:15px;" name='team' onchange="this.form.submit()">
								<option value="<?php echo @$_GET['team'];?>"><?php echo @$_GET['team'];?></option>
								<option value=""></option>
								<option value="Designing A">Designing A</option>
								<option value="Designing B">Designing B</option>
								<option value="Designing C">Designing C</option>
								<option value="Drafting A">Drafting A</option>
								<option value="Drafting B">Drafting B</option>
								<option value="Operational Support">Operational Support</option>
								<option value="FP Line">FP Line</option>
								<option value="Investigation and Analysis">Investigation and Analysis</option>
								<option value="Inspection">Inspection</option>
								<option value="Quality Checking">Quality Checking</option>
							</select>
							
						</td>
						<td style="width:10%;border:none;">
							<label style="font-size:20px;">Search:</label>
							<input class="form-control" style="font-size:15px;" name='find' value="<?php echo @$_GET['find'];?>" onblur="this.form.submit()">
						</td>
						<td style="width:5%;border:none">
							<br>
							<button type='submit' class="btn btn-danger" style="margin-top:5px"><span class="glyphicon glyphicon-search"></span></button>
							
					
					</form>
				</tr>
			</table>
		</div>
		<?php
		$team = $_SESSION["TeamName"];
		//$team =  @$_GET['team'];
		//$month =  @$_GET['month'];
		//echo $team;
		//echo $month;
		if(isset($_GET['find']) and ($_GET['find'] != '')) {
		//$dirs = "../../denki-svr/20 QCC DOCUMENTS/MISTAKE DISCUSSED/".@$_GET['month']."/";
		$dirs = "docsupport/";
		if($_GET['find'] != ''){
			$dir = $dirs.$_GET['find'];
		}else{
			$dir = $dirs;
		}
			$ext = '.pdf';
			$search = $_GET['find'];
			$results = glob("$dir*$search*$ext");
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						if(stristr($file,$_GET['find'])){
							@$socket_data .= '<tr>
												<td style="text-align:center;font-size:15px;width:70%"><a href='.$files.' style="color:black;margin-left:50px">'.$file.'</a></td>
											<td style="text-align:center;font-size:15px;">'.date ("Y-m-d", filemtime($dir .'/'. $file)).'</td>
											</tr>';
						}else{
							@$socket_data .= '';
						}
					}
					closedir($dh);
				}
			}
		}else {
			$dirs = "docsupport/";
			if(@$_GET['find'] != ''){
				$dir = $dirs.$_GET['find'];
			}else{
				$dir = $dirs;
			}
			$dir2 = str_replace(' ', '%20', $dir);
			if (@$handle = opendir($dir)) {
				while (false !== ($file = readdir($handle))) {
					if (preg_match('/\.pdf$/', $file)) {
						$fileName = str_replace(' ', '%20', $file);
						$files = $dir2.'/'.$fileName;
						@$socket_data .= '<tr>
											<td style="text-align:center;font-size:15px;width:70%"><a href='.$files.' style="color:black;margin-left:50px">'.$file.'</a></td>
											<td style="text-align:center;font-size:15px;">'.date ("Y-m-d", filemtime($dir .'/'. $file)).'</td>
										</tr>';
						
					}else{
						 @$socket_data .= "";
					}
				}
				closedir($handle);
			}
		}
		?>
		<br>
		<table>
			<?php if(@$socket_data == ''){
				echo '<thead><tr>
						<th>Filename</th>
						<th>Date</th>
						</tr></thead>
						<tbody><tr><td colspan="2" style="text-align:center"><center><div style="background-color:white"class="topless animated fadeInUpBig"><p>No Request Found!!!</p></div></center></td></tr></tbody>';
			}else{
				
				 echo '<thead><tr>
						<th>Month of '.@$_GET["month"].'</th>
						<th>Date</th>
						</tr></thead>
						<tbody>'.$socket_data.'</tbody>';
			}?>
		</table>
	</div>
	</body>
</html>

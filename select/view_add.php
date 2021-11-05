<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>FYI attachment</title>
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link rel="shortcut icon" href="../img_oir/logo.ico" type="image/x-icon" />
		<link href="http://hrdapps33/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--<link href="http://hrdapps33/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js" rel="stylesheet">-->
		<link href="http://hrdapps33/bootstrap/css/pnotify.custom.min.css" rel="stylesheet">
		<!--<script src="http://hrdapps33/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>-->
		<script src="http://hrdapps33/bootstrap/js/jquery-1.11.3.js"></script>
		<!--<script src="http://hrdapps33/bootstrap/js/bootstrap.min.js"></script>-->
		<script src="http://hrdapps33/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>	
		<script type="text/javascript">
				function GetDays(){
						var dropdt = new Date(document.getElementById("due_date_of_reply").value);
						var pickdt = new Date(document.getElementById("date_replied").value);
						return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
				}

				function cal(){
				if(document.getElementById("dropoff_date")){
					document.getElementById("delay").value=GetDays();
				}  
			}
		</script>
		<script type="text/javascript">
				function GetDays1(){
						var dropdt = new Date(document.getElementById("received_CAR").value);
						var pickdt = new Date(document.getElementById("due_date_CAR").value);
						return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
				}

				function calculate(){
				if(document.getElementById("dropoff_date1")){
					document.getElementById("delay1").value=GetDays1();
				}  
			}
		</script>
		<style>
			body {
				margin: 0;
				padding: 0;
				overflow: hidden;
				height: 100%; 
				max-height: 100%; 
				font-family:arial;
				line-height: 1.5em;
			}

			main {
				position: fixed;
				top: 130px; /* Set this to the height of the header */
				bottom: 67px; /* Set this to the height of the footer */
				left: 0; 
				right: 0;
				overflow: auto; 
				background:transparent;
			}
							
			#header {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 150px; 
				overflow: hidden; /* Disables scrollbars on the header frame. To enable scrollbars, change "hidden" to "scroll" */
				background:transparent;
				background-image: url("http://e-portalsvrnew:8080/QA/OIRSystem/trial_index/img_oir/header_oir1.png");
				background-size: 100% 210px;
				background-repeat: no-repeat;
			}
			#header1 {
				position: absolute;
				top: 100px;
				left: 0;
				width: 100%;
				height: 50px; 
				overflow: hidden; /* Disables scrollbars on the header frame. To enable scrollbars, change "hidden" to "scroll" */
				background:transparent;
			}
			#header2 {
				position: fixed;
				top: 100px; /* Set this to the height of the header */
				bottom: 65px; /* Set this to the height of the footer */
				left: 0; 
				right: 0;
				overflow: auto; 
				background:transparent;
			}
			#footer {
				position: absolute;
				left: 0;
				bottom: 0;
				width: 100%;
				height: 65px; 
				overflow: auto; /* Disables scrollbars on the footer frame. To enable scrollbars, change "hidden" to "scroll" */
				background:#0099FF;
			}				
			#left {
				position: fixed;
				top: 260px; /* Set this to the height of the header */
				bottom: 80px; /* Set this to the height of the footer */
				left: 0; 
				right: 0;
				overflow: auto; 
				background:transparent;
				/*background-image: url("http://e-portalsvrnew:8080/denki/denki_requesttrial/img/dolphin.gif");
				background-size: 100% 150px;
				background-repeat: no-repeat;*/
			}
			#right {
				position: absolute; 
				top: 0; /* Set this to the height of the header */
				bottom: 0; /* Set this to the height of the footer */
				right: 20px; 
				width: 450px;
				height: 80px; 
				overflow: auto; /* Scrollbars will appear on this frame only when there's enough content to require scrolling. To disable scrollbars, change to "hidden", or use "scroll" to enable permanent scrollbars */	
			}
							
			.innertube {
				margin: 2px; /* Provides padding for the content */
				/*background-image: url("http://e-portalsvrnew:8080/denki/denki_requesttrial/img/cloud.gif");*/
			}

			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
					
			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}
			* html body{
				padding: 50px 200px 50px 200px; /* Set the first value to the height of the header, the second value to the width of the right column, third value to the height of the footer, and last value to the width of the left column */
			}
					
			* html main{ 
				height: 100%; 
				width: 100%; 
			}
		</style>
		<style>
			.area{
			  text-align:left;
			  font-size:3em;
			  color:#0066FF;
			  letter-spacing: -3px;
			  font-weight:600;
			  text-transform:uppercase;
			  animation:blur .99s ease-out;
			  text-shadow:0px 0px 5px #fff,
			  0px 0px 7px #fff;
			} 			
		</style>
		<style>
			.sidenav {
				width: 0;
				<!--height:70%;-->
				position: fixed;
				background-color: #0099FF;
				z-index: 1;
				top: 150px;
				bottom: 92px;
				left: 0;
				overflow-x: auto;
				transition: 0.5s;
				padding-top: 10px;
				position: fixed;
			}
			.sidenav a {
				padding: 8px 8px 8px 32px;
				text-decoration: none;
				font-size: 14px;
				color: white;
				display: block;
				transition: 0.3s
			}

			.sidenav a:hover, .offcanvas a:focus{
				color: #FF0000;
				font-size: 19px;
				font-weight:bold;
			}
			.sidenav .closebtn {	
				position: absolute;
				top: 0;
				right: 0px;
				font-size: 20px;
				margin-left: 50px;
			}

			#main {
				transition: margin-left .5s;
				padding: 16px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
		</style>
		<script language="javascript">
			function time(){
					document.getElementById("demo").value='<?php echo "" .date('Y/m/d h:i');?>';
					}
			function time1(){
					document.getElementById("demo1").value='<?php echo "" .date('Y/m/d h:i');?>';
					}
		</script>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="../bootstrap/js/html5shiv.js"></script>
		<script src="../bootstrap/js/respond.js"></script>
		<![endif]-->
	</head>
	<body>
		<form action="../addnewrecord.php" method="post" enctype="multipart/form-data" charset="utf-8">
					<table class="table table-striped table-bordered table-hover table-condensed" style="width: 20%;">
						<thead>
							<tr style="color: white;">
								<th style="background-color:#009933" colspan="3">
									BASIC INFORMATION:
								</th>
						<!--		<th rowspan="3" >
									<img height="120px"src="http://hrdapps33/FYI/images/fbw.png">
								</th> -->
							</tr>
							<tr>
								<div class="form-inline">
									<th colspan="" style="vertical-align:middle; width:10%;">
										Code Number:
									</th>
									<td colspan="4">
										<input type="text" id="code_number" class="form-control" name="code_number" placeholder="0000000-0000" style="font-size:15px;" pattern="[0-9A-Z]{7}-[0-9A-Z]{4}" maxlength="12"  title="0000000-0000" required/>
									</td>
								</div>
							</tr>
							<tr>	
								<th style="vertical-align:middle;">
									Plan Number:
								</th>
								<td>
									<input type="text" id="plan_number" class="form-control" name="plan_number" placeholder="00-000" style="width:100%; font-size:15px;" required>
								</td>	
								</td>	
							</tr>
						</thead>
					</table>
			<table class="table table-striped table-bordered table-hover table-condensed" style="width: 100%;">
				&nbsp;&nbsp;<a class="btn btn-info btn-md glyphicon glyphicon-search" href="http://hrdapps33/FYI/mainFYI/FYI_fbw_new/fyi_fbw/index.php" target="_blank"> Search</a>
			</table>
			<table class="table table-striped table-bordered table-hover table-condensed" style="width: 100%;">
				<thead style="background-color:#009933; color:white;" style="font-size:15px;">
					<th>No.</th>
					<th>Floor</th>
					<th>Room</th>
					<th>Item</th>
					<th>Interference</th>
					<th>Comment</th>
					<!--<th>Hacchu</th>    -->
				</thead>
					<td style="vertical-align:middle;">
								<center>1</center>
							</td>	

								<?php
								function master() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_floor"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master() as $value ) {
								  $option .= '<option value="'.$value["floor_english"].'">'.$value["floor_english"].'</option>';
								}
								?>
							<td style="width: 11%;">
								<select id="floore" name="floore" class="form-control">
									<option selected><?php echo $option; ?></option>
								</select>
							<textarea id="floorj" name="floorj" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
								<?php
									
								function master_r() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_room"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_r() as $value ) {
								  $option .= '<option value="'.$value["room_english"].'">'.$value["room_english"].'</option>';
								}
								?>
								<td style="width: 22%;">
								<select id="roome" name="roome" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="roomj" name="roomj" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
								function master_i() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_item"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_i() as $value ) {
								  $option .= '<option value="'.$value["itemd_english"].'">'.$value["itemd_english"].'</option>';
								}
								?>
								<td style="width: 26%;">
								<select id="iteme" name="iteme" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="itemj" name="itemj" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php	
								function master_in() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_interference"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_in() as $value ) {
								  $option .= '<option value="'.$value["Interference_english"].'">'.$value["Interference_english"].'</option>';
								}
								?>
								<td style="width: 20%;">
								<select id="interferencee" name="interferencee" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="interferencej" name="interferencej" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_c() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_fbw"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_c() as $value ) {
								   $option .= '<option value="'.$value["id"].'.)'.$value["EnglishMeaning"].'">'.$value["id"].'.)'.$value["EnglishMeaning"].'</option>';
								}
								?>
								<td style="width: %;">
								<select id="commente" name="commente" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="commentj" name="commentj" style="width:600px; height:80px;" class="hide"></textarea>
							</td>
						</tr>
						<tr>
							<td style="vertical-align:middle;">
								<center>2</center>
							</td>	
								<?php
									

								function master2() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_floor"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master2() as $value ) {
								  $option .= '<option value="'.$value["floor_english"].'">'.$value["floor_english"].'</option>';
								}
								?>
							<td style="width: 11%;">
								<select id="floore2" name="floore2" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="floorj2" name="floorj2" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
								<?php
									

								function master_r2() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_room"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_r2() as $value ) {
								  $option .= '<option value="'.$value["room_english"].'">'.$value["room_english"].'</option>';
								}
								?>
								<td style="width: 22%;">
								<select id="roome2" name="roome2" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="roomj2" name="roomj2" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_i2() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_item"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_i2() as $value ) {
								  $option .= '<option value="'.$value["itemd_english"].'">'.$value["itemd_english"].'</option>';
								}
								?>
								<td style="width: 26%;">
								<select id="iteme2" name="iteme2" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="itemj2" name="itemj2" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_in2() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_interference"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_in2() as $value ) {
								  $option .= '<option value="'.$value["Interference_english"].'">'.$value["Interference_english"].'</option>';
								}
								?>
								<td style="width: 20%;">
								<select id="interferencee2" name="interferencee2" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="interferencej2" name="interferencej2" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_c2() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_fbw"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_c2() as $value ) {
								  $option .= '<option value="'.$value["id"].'.)'.$value["EnglishMeaning"].'">'.$value["id"].'.)'.$value["EnglishMeaning"].'</option>';
								}
								?>
								<td style="width: %;">
								<select id="commente2" name="commente2" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="commentj2" name="commentj2" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
						</tr>
						<tr>
							<td style="vertical-align:middle;">
								<center>3</center>
							</td>	
								<?php
									

								function master3() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_floor"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master3() as $value ) {
								  $option .= '<option value="'.$value["floor_english"].'">'.$value["floor_english"].'</option>';
								}
								?>
							<td style="width: 11%;">
								<select id="floore3" name="floore3" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="floorj3" name="floorj3" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
								<?php
									

								function master_r3() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_room"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_r3() as $value ) {
								  $option .= '<option value="'.$value["room_english"].'">'.$value["room_english"].'</option>';
								}
								?>
								<td style="width: 22%;">
								<select id="roome3" name="roome3" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="roomj3" name="roomj3" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_i3() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_item"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_i3() as $value ) {
								  $option .= '<option value="'.$value["itemd_english"].'">'.$value["itemd_english"].'</option>';
								}
								?>
								<td style="width: 26%;">
								<select id="iteme3" name="iteme3" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="itemj3" name="itemj3" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_in3() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_interference"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_in3() as $value ) {
								  $option .= '<option value="'.$value["Interference_english"].'">'.$value["Interference_english"].'</option>';
								}
								?>
								<td style="width: 20%;">
								<select id="interferencee3" name="interferencee3" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="interferencej3" name="interferencej3" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_c3() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_fbw"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_c3() as $value ) {
								  $option .= '<option value="'.$value["id"].'.)'.$value["EnglishMeaning"].'">'.$value["id"].'.)'.$value["EnglishMeaning"].'</option>';
								}
								?>
								<td style="width: %;">
								<select id="commente3" name="commente3" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="commentj3" name="commentj3" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
						</tr>
						<tr>
							<td style="vertical-align:middle;">
								<center>4</center>
							</td>	
								<?php
									

								function master4() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_floor"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master4() as $value ) {
								  $option .= '<option value="'.$value["floor_english"].'">'.$value["floor_english"].'</option>';
								}
								?>
							<td style="width: 11%;">
								<select id="floore4" name="floore4" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="floorj4" name="floorj4" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
								<?php
									

								function master_r4() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_room"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_r4() as $value ) {
								  $option .= '<option value="'.$value["room_english"].'">'.$value["room_english"].'</option>';
								}
								?>
								<td style="width: 22%;">
								<select id="roome4" name="roome4" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="roomj4" name="roomj4" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_i4() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_item"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_i4() as $value ) {
								  $option .= '<option value="'.$value["itemd_english"].'">'.$value["itemd_english"].'</option>';
								}
								?>
								<td style="width: 26%;">
								<select id="iteme4" name="iteme4" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="itemj4" name="itemj4" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_in4() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_interference"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_in4() as $value ) {
								  $option .= '<option value="'.$value["Interference_english"].'">'.$value["Interference_english"].'</option>';
								}
								?>
								<td style="width: 20%;">
								<select id="interferencee4" name="interferencee4" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="interferencej4" name="interferencej4" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_c4() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_fbw"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_c4() as $value ) {
								  $option .= '<option value="'.$value["id"].'.)'.$value["EnglishMeaning"].'">'.$value["id"].'.)'.$value["EnglishMeaning"].'</option>';
								}
								?>
								<td style="width: %;">
								<select id="commente4" name="commente4" class="form-control">

									<option><?php echo $option; ?></option>
								</select>
							<textarea id="commentj4" name="commentj4" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
						</tr>
						<tr>
							<td style="vertical-align:middle;">
								<center>5</center>
							</td>	
								<?php
									

								function master5() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_floor"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master5() as $value ) {
								  $option .= '<option value="'.$value["floor_english"].'">'.$value["floor_english"].'</option>';
								}
								?>
							<td style="width: 11%;">
								<select id="floore5" name="floore5" class="form-control">
									
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="floorj5" name="floorj5" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
								<?php
									

								function master_r5() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_room"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_r5() as $value ) {
								  $option .= '<option value="'.$value["room_english"].'">'.$value["room_english"].'</option>';
								}
								?>
								<td style="width: 22%;">
								<select id="roome5" name="roome5" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="roomj5" name="roomj5" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_i5() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_item"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_i5() as $value ) {
								  $option .= '<option value="'.$value["itemd_english"].'">'.$value["itemd_english"].'</option>';
								}
								?>
								<td style="width: 26%;">
								<select id="iteme5" name="iteme5" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="itemj5" name="itemj5" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_in5() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_master_interference"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_in5() as $value ) {
								  $option .= '<option value="'.$value["Interference_english"].'">'.$value["Interference_english"].'</option>';
								}
								?>
								<td style="width: 20%;">
								<select id="interferencee5" name="interferencee5" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="interferencej5" name="interferencej5" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
							<?php
									

								function master_c5() {
								  try{
									$pdo = new PDO('mysql:host=localhost;port=3306;dbname=jaymaralconis','root','admin');
									$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
										$pdo->query( "SET NAMES utf8" );
										$stmt = $pdo->prepare(
								  "SELECT * FROM fyi_fbw"
									);
									$flag = $stmt->execute();
									if( !$flag ) {
								  $info = $stmt->errorInfo();
									  exit( $info[2] );
									}
									$array = $stmt->fetchAll( PDO::FETCH_ASSOC );
								  }catch( PDOException $e ){
									echo $e->getMessage();
							  }
								  $pdo = null;
								  return $array;
								}
								/////////////////////////////////////////////////////////////////////////////////
								$option = '';
								foreach( master_c5() as $value ) {
								  $option .= '<option value="'.$value["id"].'.)'.$value["EnglishMeaning"].'">'.$value["id"].'.)'.$value["EnglishMeaning"].'</option>';
								}
								?>
								<td style="width: %;">
								<select id="commente5" name="commente5" class="form-control">
									<option><?php echo $option; ?></option>
								</select>
							<textarea id="commentj5" name="commentj5" style="width:600px; height:80px;" class="hide"></textarea> 
							</td>
						</tr>
						
						<tr>
					<!--	<td>Hacchu number:</td>  -->
								
					<!--	<td colspan="6">  -->
								<select style="width: %" class="form-control hide" name="hacchu" id="hacchu">	
									<option value="">-</option>
									<option value="01) Remake-Rehacchu">01) Remake-Rehacchu</option>
									<option value="02) Remake-No rehacchu(Because passed Jyuusetsu delivery date, no change in hacchu)">02) Remake-No rehacchu(Because passed Jyuusetsu delivery date, no change in hacchu)</option>
									<option value="03) Remake-No rehacchu (Because change plan number only or pass or not passed delivery)">03) Remake-No rehacchu (Because change plan number only or pass or not passed delivery)</option>
									<option value="Asking for cover page for all plans before kakouirai for FP, SEKISAN and STOP check.">Asking for cover page for all plans before kakouirai for FP, SEKISAN and STOP check.</option>
								</select>
					<!--		<span style="color: red">*Require Hacchu number</span>  -->
							</td>
							<select name="hacchuj" id="hacchuj" class="form-control hide">
						
									<option value="-">-</option>
								</select>
						</tr>
				</td>
			</tr>
				<td colspan="7"><center>
					<button type="submit" class="btn btn-info" name="btn-upload" id="btn-upload">
							<span class="glyphicon glyphicon-save"></span> Save/Submit
							</button><a class="btn btn-danger btn-md glyphicon glyphicon-backward" onclick="history.back()"> BACK</a>
								</center>
				</td>
				<td colspan="7">
				<!--<center><b>REMARKS:</b></center> -->
					<select name="remarks" id="remarks" class="form-control hide">
									<option value=""></option>
									<option value="PENDING">PENDING</option>
									<option value="OK">OK</option>
								</select> 
				
				</td>
			</table><br>
    </div>
	<script src="../../jquery-1.11.3.js"></script>
<script>
 $(function(){
   $(document).on('change','#floore',function(){
     $.ajax({
       type: 'post',
       url: 'floor.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#floorj").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#roome',function(){
     $.ajax({
       type: 'post',
       url: 'room.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#roomj").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#iteme',function(){
     $.ajax({
       type: 'post',
       url: 'item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#itemj").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#interferencee',function(){
     $.ajax({
       type: 'post',
       url: 'interference.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#interferencej").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#commente',function(){
     $.ajax({
       type: 'post',
       url: 'comment.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#commentj").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#floore2',function(){
     $.ajax({
       type: 'post',
       url: 'floor.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#floorj2").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#roome2',function(){
     $.ajax({
       type: 'post',
       url: 'room.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#roomj2").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#iteme2',function(){
     $.ajax({
       type: 'post',
       url: 'item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#itemj2").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>
<script>
 $(function(){
   $(document).on('change','#interferencee2',function(){
     $.ajax({
       type: 'post',
       url: 'interference.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#interferencej2").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#commente2',function(){
     $.ajax({
       type: 'post',
       url: 'comment.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#commentj2").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#floore3',function(){
     $.ajax({
       type: 'post',
       url: 'floor.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#floorj3").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#roome3',function(){
     $.ajax({
       type: 'post',
       url: 'room.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#roomj3").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#iteme3',function(){
     $.ajax({
       type: 'post',
       url: 'item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#itemj3").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#interferencee3',function(){
     $.ajax({
       type: 'post',
       url: 'interference.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#interferencej3").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#commente3',function(){
     $.ajax({
       type: 'post',
       url: 'comment.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#commentj3").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>
<script>
 $(function(){
   $(document).on('change','#floore4',function(){
     $.ajax({
       type: 'post',
       url: 'floor.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#floorj4").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#roome4',function(){
     $.ajax({
       type: 'post',
       url: 'room.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#roomj4").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#iteme4',function(){
     $.ajax({
       type: 'post',
       url: 'item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#itemj4").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#interferencee4',function(){
     $.ajax({
       type: 'post',
       url: 'interference.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#interferencej4").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#commente4',function(){
     $.ajax({
       type: 'post',
       url: 'comment.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#commentj4").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>
<script>
 $(function(){
   $(document).on('change','#floore5',function(){
     $.ajax({
       type: 'post',
       url: 'floor.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#floorj5").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#roome5',function(){
     $.ajax({
       type: 'post',
       url: 'room.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#roomj5").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#iteme5',function(){
     $.ajax({
       type: 'post',
       url: 'item.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#itemj5").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>
<script>
 $(function(){
   $(document).on('change','#interferencee5',function(){
     $.ajax({
       type: 'post',
       url: 'interference.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#interferencej5").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>	
<script>
 $(function(){
   $(document).on('change','#commente5',function(){
     $.ajax({
       type: 'post',
       url: 'comment.php',
       data: { 
         id: $(this).val()
       }
     }).done(function(data){
       $("#commentj5").text(data)
     }).fail(function(data){
       alert('Failed')
     })
   })
 })  
</script>
	</body>
</html>


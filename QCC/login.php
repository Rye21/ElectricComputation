<?php
session_start();
//print_r($_SESSION);
include '../vendor/autoload.php';
use PHPOnCouch\CouchClient;
if(@$_REQUEST["user"] && @$_REQUEST["pass"]){
$client = new CouchClient( 'http://10.168.64.31:5984', 'hrd_masteruser' );
$query = [
		'$and' => [
			['employee_code' => $_REQUEST["user"]],
			['password' => md5($_REQUEST["pass"])]
		],
		'$or' =>[
				['designation' => 'Team In-Charge'],
				['designation' => 'Section In-Charge'],
				['position' => 'Team Leader'],
				['position' => 'Assistant Supervisor'],
				['position' => 'Supervisor']
			]
	];
	$doc = $client->find($query);
		if (count($doc) > 0){
			$_SESSION["employee_code"] = $doc[0]->employee_code;
			//$_SESSION["nick_name"] = $doc[0]->full_name;
			
			$_SESSION["department"] = $doc[0]->department;
			$_SESSION["section"] = $doc[0]->section;
			$_SESSION["designation"] = $doc[0]->designation;
			$_SESSION["team"] = $doc[0]->team;
			$_SESSION["position"] = $doc[0]->position;
			$_SESSION["nick_name"] = $doc[0]->nick_name;
			header('Location:./');
		}else{
			header('Location:login.php?status=err');
		}
	//print_r($doc);


	/* if($_REQUEST["user"]=='ryan' && $_REQUEST["pass"] == 'ryan21'){
		$_SESSION["user"] ='ryan';
		$_SESSION["pass"] ='ryan21';
		header('Location: ./');
	}else{
	header('Location: login.php?status=err');
	} */
	/* require_once 'check_user.php';
	if($cnt > 0){
		$_SESSION = $session;	
		header('Location: ./');
	}else{
		header('Location: login.php?status=err');
	} */
}

if(@$_REQUEST["status"]){
	echo '<span style="color:red">Please Check Username and Password..</span>';
}
?>
	<!--<link href="http://hrdapps33/QCC/css/log.css" rel="stylesheet">
						<li id="login">
						  <a id="login-trigger" href="#">
							Log in <span>Бе</span>
						  </a>
						  <div id="login-content">
							<form>
							  <fieldset id="inputs">
								<input id="user" type="text" name="user" placeholder="Your email address" required>   
								<input id="pass" type="password" name="pass" placeholder="Password" required>
							  </fieldset>
							  <fieldset id="actions">
								<input type="submit" id="submit" name="submit" value="Login">
								<label><input typ e="checkbox" checked="checked"> Keep me signed in</label>
							  </fieldset>
							</form>
						  </div>                     
						</li>-->
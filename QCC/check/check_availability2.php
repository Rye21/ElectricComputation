<?php 
require_once("../Trivia_quiz/database.php");
//code check email
 if(!empty($_POST["loginid2"])) {
	$loginid2 = $_POST["loginid2"];
$sql="SELECT * FROM mst_user WHERE login = $loginid2";
$result = $cn->query($sql);
$row = mysqli_fetch_assoc($result);

echo $row['phone']; 

}

// End code check email
?>



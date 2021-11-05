
<?php
include 'db_config.php';
//$material =$_POST["editor"];
$title = mysqli_real_escape_string($con, $_POST['title']);
$body = mysqli_real_escape_string($con, $_POST['editor']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$mydate = $_POST['date'];

$sql = "INSERT INTO editor (title, body, date)
VALUES ('$title', '$body', '$date')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
header("location: question.php?date=".$mydate);

mysqli_close($con);
//$actual_image = mysql_real_escape_string($_POST["editor"]);
/* $actual_image = trim($_POST["editor"]);

//$actual_image = mysql_real_escape_string($_POST["editor"]);
//$date = date("d M, Y H:i:s");
mysqli_query("INSERT INTO qcc VALUES(''$actual_image'')");
//echo $title." has been added."; */
/* try{
				$pdo = new PDO('mysql:host=localhost;dbname=ryanpelaez','root','admin');
				$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
				$pdo->query("SET NAMES utf8");
				$stmt = $pdo->prepare("
				INSERT INTO qcc 
				(
				
				material	
				)
				VALUES (
				
				:material
			
				
				
				)
				");
				
				//$stmt->bindValue(':id',@$REQUEST["id"],PDO::PARAM_STR);
		
				$stmt->bindValue(':material',@$material,PDO::PARAM_STR);
				
				
				$stmt->execute();
				
			}catch (PDOException $e){
				echo $e->getMessage();
			}$pdo = null;  */
?>
 <script>
	//window.location.href = 'http://hrdapps33/qcc/editor/question.php';
</script> 
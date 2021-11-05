<?php
//include 'db_connect.php';
$id = $_REQUEST["id"];
//echo $id;


 try {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ryanpelaez','root','admin');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$pdo->prepare(
		"SELECT * FROM `qcc` WHERE `id` = :id"
	);
	$stmt->bindValue(':id',$id,PDO::PARAM_INT);
	$flag = $stmt->execute();
	if (!$flag) { 
		$info = $stmt->errorInfo();
		exit($info[2]);
	}
	//$tbody = '';
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$id = $row["id"];
		$item_photos = $row["item_photos"];
		$description = $row["description"];
		$answer = $row["answer"];
		$category = $row["category"];
		
		
		
	}
 
} catch (PDOException $e){
  var_dump($e->getMessage());
}
$pdo = null; 



?>


<div class="container-fluid">
			<div class="row">
				<form method="post" id="uploadForm" enctype="multipart/form-data" action="updateT.php">
				<div class="col-sm-6">
				<label>Question</label>
					<textarea class="form-control" id="description" name="description" style="height:80px"><?php echo $description;?></textarea><br>
				</div>
				<div class="col-sm-6">
				<label>Answer</label>
					<textarea class="form-control" id="answer" name="answer" style="height:80px"><?php echo $answer;?></textarea><br>
				</div>
								<?php	
											
											include_once '../db_connect.php';
											 
											$query="SELECT DISTINCT category FROM qcc_category";
											$result= $con->query($query);
											
										?>
				
				<label>Category</label>	
					<select class="form-control" id="category" name="category" style="background:transparent;font-weight:bold">
					<option selected style="color:white" disabled><?php echo $category;?></option>
					<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
											<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
											
									<?php } ?>	
					</select>
					<br>	
					<center><input type="file" name="item_photos[]" id="item_photos" multiple ><br>
					<input type="hidden" id="id" name="id" value="<?php echo $id;?>">
					<input type="submit" name="submit" value="UPDATE TRIVIA"/></center>
				
				</form>	
			</div>
					
		</div>
	
	
	
	
<!--<center><button type="button" class="btn btn-sm btn-warning updateT" id="updateT" style="font-weight:bold;font-size:14px">Update
<span class="glyphicon glyphicon-save" aria-hidden="true"></span></button></center>-->

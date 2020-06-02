<?php 
include"function/connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];
$img=$row['img'];



?>
<form class="form-group" action="function/edit_cat.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Name</label>
	<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
	<label>IMG</label>
	<img width="100px;"  height="100px;" src="function/upload/<?php echo $row['img']; ?>">
	<input type="file" class="form-control" name="img" >
	<input type ="submit" class="btn btn-info" name="submit" value="add">
	



</form>
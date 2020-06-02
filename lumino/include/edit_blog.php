	


<?php 
include"function/connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$subject = $row['subject'];
$details = $row['details'];
$img = $row['img'];
	



?>
<form class="form-group" action="function/edit_blog.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Subject</label>
	<input type="text" class="form-control" name="subject" value="<?php echo $subject ?>">
	<label>Details</label>
	<input type="text" class="form-control" name="details" value="<?php echo $details ?>">
	
	<label>IMG</label>
	<img width="100px;"  height="100px;" src="function/upload/<?php echo $row['img']; ?>">
	<input type="file" class="form-control" name="img" >


	<input type ="submit" class="btn btn-info" name="submit" value="Edit">
	



</form>



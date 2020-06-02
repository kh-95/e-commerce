<?php 
include"function/connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM siteinfo WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$phone=$row['phone'];
$email=$row['email'];
$address=$row['address'];
$background = $row['background'];
$logo = $row['logo'];
?>
<form class="form-group" action="function/edit_site.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Phone</label>
	<input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
	<label>Email</label>
	<input type="email" class="form-control" name="email" value="<?php echo $email ?>">
	<label>Address</label>
	<input type="text" class="form-control" name="address" value="<?php echo $address ?>">
	<label>Background</label>
	<img width="200px" height="100px"" src="function/upload/<?php echo $background; ?>">
	<input type="file" class="form-control" name="background" >
	<label>Logo</label>
	<img width="100px" height="50px" src="function/upload/<?php echo $logo; ?>">
	<input type="file" class="form-control" name="logo" >
	<input type ="submit" class="btn btn-info" name="submit" value="add">
	



</form>
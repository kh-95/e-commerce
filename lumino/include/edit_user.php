<?php 
include"function/connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$password = $row['password'];




?>
<form class="form-group" action="function/edit_user.php" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label>username</label>
	<input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $row['username']; ?>">
	<label>password</label>
	<input type="password" class="form-control" name="password" placeholder="password" >
	<label>FirstName</label>
	<input type="text" class="form-control" name="firstname" placeholder="firstname" value="<?php echo $row['fname']; ?>">
	<label>LastName</label>
	<input type="text" class="form-control" name="lastname" placeholder="lastname" value="<?php echo $row['lname']; ?>">
	<label>Email</label>
	<input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $row['email']; ?>">
	<label>Address</label>
	<input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $row['address']; ?>">
	<label>Phone</label>
	<input type="text" class="form-control" name="phone" placeholder="phone" value="<?php echo $row['phone']; ?>">
	<label>age</label>
	<input type="text" class="form-control" name="age" placeholder="age" value="<?php echo $row['age']; ?>">
	<label>IMG</label>
	<img width="50px;"  height="100px;" src="function/upload/<?php echo $row['img']; ?>">
	<input type="file" class="form-control" name="img" >
	<input type ="submit" class="btn btn-info" name="submit" value="add">
	



</form>
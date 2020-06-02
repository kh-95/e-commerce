<?php 
include "function/connect.php";
$id=$_GET['id'];
$sql="SELECT * FROM admin WHERE id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$username=$row['username'];
$password=$row['password'];

?>
<form class="form-group" method="post" action="function/edit_admin.php">
<input type="hidden" name="id" value="<?php echo $row['id'];?>" >
<label> USERNAME</label>
<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
<label>PASSWORD</label>
<input type="password" name="password" value="<?php echo $password;?>" class="form=control">
<input type="submit" value="update" name="submit" class="btn btn-info">







	</form>
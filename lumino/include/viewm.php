<?php
if(isset($_GET['id'])){

include"function/connect.php";
$id=$_GET['id'];
$sql="SELECT * FROM message WHERE id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$message=$row['message'];
$name=$row['name'];
  
  $update="UPDATE message SET seen='1' ,count=count+1 WHERE id=$id";
  $conn->query($update);
?>
<center>
	<h3>
		<label>name:</label>
		<?php echo $name;?>
	</h3>
	<p><?php echo $message; ?></p>
	<a href="message.php" class="btn btn-info">Back</a>
</center>

<?php } ?>



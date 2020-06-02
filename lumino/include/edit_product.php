
<?php 
include"function/connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$name = $row['name'];
	$price = $row['price'];
	$disc = $row['disc'];
	$cat = $row['cat_id'];
	




?>
<form class="form-group" action="function/edit_product.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Name</label>
	<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
	<label>price</label>
	<input type="text" class="form-control" name="price" value="<?php echo $price ?>">
	<label>Disc</label>
	<input type="text" class="form-control" name="disc" value="<?php echo $disc ?>">
	<label>IMG</label>
	<img width="100px;"  height="100px;" src="function/upload/<?php echo $row['img']; ?>">
	<input type="file" class="form-control" name="img" >

	<select class="form-control" name = "cat">
		<option selected="" ></option>

	<?php 
	include 'function/connect.php';
	$sql = "SELECT * FROM categories";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()) {



	?>

		<option value ="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option>
	<?php } ?>

	</select>
	<label>IMG1</label>
	<img width="100px;"  height="100px;" src="function/upload/<?php echo $row['img1']; ?>">
	<input type="file" class="form-control" name="img1" >
	<label>IMG2</label>
	<img width="100px;"  height="100px;" src="function/upload/<?php echo $row['img2']; ?>">
	<input type="file" class="form-control" name="img2" >
	<label>IMG3</label>
	<img width="100px;"  height="100px;" src="function/upload/<?php echo $row['img3']; ?>">
	<input type="file" class="form-control" name="img3" >

	<input type ="submit" class="btn btn-info" name="submit" value="add">
	



</form>
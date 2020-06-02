



<form class="form-group" action="function/add_product.php" method="post" enctype="multipart/form-data">
	<label>Name</label>
	<input type="text" class="form-control" name="name" placeholder="Name">
	<label>price</label>
	<input type="text" class="form-control" name="price" placeholder="price">
	<label>Disc</label>
	<textarea name = "disc" class="form-control" ></textarea>
	<label>Img</label>
	<input type="file" class="form-control" name="img">
	<label>Category</label>
	<select  class="form-control" name="cat">
		<option   selected=""></option>
		<?php
		include "function/connect.php" ;
		$sql="SELECT * FROM categories";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){


?>
<option value="<?php echo $row['id'];?>" ><?php echo $row['name'];?></option>

		<?php   }  ?>

	</select>
	<select name="favour" class="form-control" >
<option selected="" disabled=""></option>
<option value="1">favour</option>
<option value="0">notfavour</option>
   </select>
   <label>Img1</label>
	<input type="file" class="form-control" name="img1">
	<label>Img2</label>
	<input type="file" class="form-control" name="img2">
	<label>Img3</label>
	<input type="file" class="form-control" name="img3">
	<input type="submit" name="submit" value="add" class="btn btn-info">
</form>

<a href="?do=add"><button class="btn btn-primary" >Add Product</button></a>

  <table class="table table-bordered table-hover">
    <thread>
     <tr>
       <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Discription</th>
      <th scope="col">Img</th>
      <th scope="col">category</th>
      <th scope="col">Date</th>
       <th scope="col">favour</th>
       <th scope="col">Img1</th>
       <th scope="col">Img2</th>
       <th scope="col">Img3</th>
      <th scope="col">control</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include"function/connect.php";
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
foreach ($result as $row ){
$name = $row['name'];
$price = $row['price'];
$disc = $row['disc'];
$img = $row['img'];
$cat_id = $row['cat_id'];
$pro_date = $row['pro_date'];
$favour=$row['favourite'];
$img1 = $row['img1'];
$img2 = $row['img2'];
$img3 = $row['img3'];
$sel="SELECT * FROM categories WHERE id=$cat_id";
$result_s=$conn->query($sel);
$row_d=$result_s->fetch_assoc();

?>

 <tr>
     
      <td><?php echo $name; ?></td>
      <td><?php echo $price; ?></td>
      <td><?php echo $disc; ?></td>
      <td><img width="200px" height="100px" src="function/upload/<?php echo $img ;?>" ></td>
      <td ><?php echo $row_d['name'];?></td>
      <td><?php echo $pro_date; ?></td>
      <td><?php if($favour==1){
        echo "favour";
      }else{
        echo "notfavour";
      } ?></td>
      <td><img width="200px" height="100px" src="function/upload/<?php echo $img1 ;?>" ></td>
      <td><img width="200px" height="100px" src="function/upload/<?php echo $img2 ;?>" ></td>
      <td><img width="200px" height="100px" src="function/upload/<?php echo $img3 ;?>" ></td>
      <td><a href="?do=edit&id=<?php echo $row['id']; ?>"><button class="btn
       btn-info">Edit</button></a>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";><?php echo $row['name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_product.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div></td>
    </tr>


 <?php  } ?>
 </tbody>
</table>


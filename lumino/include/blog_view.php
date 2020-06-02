<a href="?do=add"><button class="btn btn-primary">Add blog</button></a>


				<table class="table table-bordered table-hover">
  <thead>
    <tr>
      
      <th scope="col">Subject</th>
      <th scope="col">Details</th>
      <th scope="col">Img</th>
      <th scope="col">Date</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include "function/connect.php";
    $sql="SELECT * FROM blog";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
$Subject=$row['subject'];
$Details=$row['details'];
$img=$row['img'];
$Date=$row['dates'];

?>
<tr>
   <td><?=$Subject;?></td>
   <td><?=$Details;?></td>
   <td><img style="width:50px;height:50px;" src="function/upload/<?=$img;?>"></td>
   <td><?=$Date;?></td>
   <td><a href="?do=edit&id=<?php echo $row['id']; ?>"><button class="btn btn-info">Edit</button></a>
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
        Are you sure delete <span style="color:red";><?php echo $row['subject']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_blog.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div></td>
    </tr>



<?php } ?>
</tbody>
</table>
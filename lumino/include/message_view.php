<table class="table table-bordered table-hover">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">PHONE</th>
      <th scope="col">Email</th>
      
      <th scope="col">View</th>
      <th scope="col">Control</th>

    </tr>
  </thead>
  <tbody>
    <?php
include "function/connect.php";
$sql="SELECT * FROM message";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
$name=$row['name'];
$phone=$row['phone'];
$email=$row['e_mail'];
$view=$row['view'];


?>
<tr>
  <td> <?php echo $name;?></td>
<td> <?php echo $phone;?></td>
<td> <?php echo $email;?></td>
<td class="see"> <?php if($view==0){echo "unseen";}else{echo "seen";}?></td>

<td>
   <button data-mes="<?php echo $row['id']; ?>" type="button" class="btn btn-info view_message" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
  view message
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['name']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span style="color: red;"><?php echo $row['message'];?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="function/delete_message.php?id=<?php echo $row['id'];?>">Delete</a>
      </div>
    </div>
  </div>
</div>





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
        Are you sure delete <span style="color:red";><?php echo $row['message']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_message.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div></td>
    </tr>



<?php } ?>
  </tbody>
  </table>

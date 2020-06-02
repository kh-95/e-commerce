<a href="?do=add"><button class="btn btn_primary">Add Admin</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>
  	
<?php 
include "function/connect.php";

$sql="SELECT * FROM admin";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
	$username=$row['username'];
	$password=$row['password'];

?>
<tr>
<td> <?php echo $username;?></td>
<td><?php echo $password;?> </td>
<td><a href="?do=edit&id=<?php echo $row['id']; ?>"><button class="btn btn-info">Edit</button></a>

<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
Delete</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";> <?php echo $row['username'];?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="function/delete_admin.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
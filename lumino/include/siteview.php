<a href="?do=add"><button class="btn btn_primary">Add SITE</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      

      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Background</th>
      <th scope="col">Logo</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>
  	
<?php 
include "function/connect.php";

$sql="SELECT * FROM siteinfo";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
	$phone=$row['phone'];
$email = $row['e_mail'];
$address = $row['address'];
$background = $row['background'];
$logo = $row['logo'];


?>
<tr>
<td><?php echo $phone;?> </td>
<td><?php echo $email;?> </td>
<td><?php echo $address;?> </td>
<td><img width="200px" height="100px" src="function/upload/<?php echo $background;?>" ></td>
 
<td><img width="100px" height="50px" src="function/upload/<?php echo $logo ;?>"></td>
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
        Are you sure delete <span style="color:red";> <?php echo $row['e_mail'];?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="function/delete_siteinfo.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-danger">Delete</button></a>
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
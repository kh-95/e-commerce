<a href="?do=add"><button class="btn btn_primary">Add User</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Date</th>
        <th scope="col">IMG</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>
  	
<?php 
include "function/connect.php";

$sql="SELECT * FROM user";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
	$username=$row['username'];
	$password=$row['password'];
  $first_name = $row['fname'];
$last_name = $row['lname'];
$email = $row['email'];
$address = $row['address'];
$phone = $row['phone'];
$age = $row['age'];
$gender = $row['gender'];
$u_date=$row['u_date'];
$img=$row['img'];
?>
<tr>
<td> <?php echo $username;?></td>
<td><?php echo $password;?> </td>
<td><?php echo $first_name;?> </td>
<td><?php echo $last_name;?> </td>
<td><?php echo $email;?> </td>
<td><?php echo $address;?> </td>
<td><?php echo $phone;?> </td>
<td><?php echo $age;?> </td>
 <td><?php if($row['gender']== "0"){echo "male";}
      else{echo "female";}?></td>
<td><?php echo $u_date; ?></td>
<td><?php echo $img; ?></td>
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
       <a href="function/delete_user.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-danger">Delete</button></a>
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
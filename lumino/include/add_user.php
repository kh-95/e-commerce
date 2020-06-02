<form class="form-group" action="function/add_user.php" method="post" enctype="multipart/form-data">
	<label>USERNAME</label>
	<input type ="text" class="form-control" name="username" placeholder="name">
	<label>PASSWORD</label>
	<input type ="password" class="form-control" name="password" placeholder="pass">
	<label>FNAME</label>
	<input type ="text" class="form-control" name="fname" placeholder="fname">
	<label>LNAME</label>
	<input type ="text" class="form-control" name="lname" placeholder="lname">
	<label>EMAIL</label>
	<input type ="email" class="form-control" name="email" placeholder="email">
   <label>PHONE</label>
   <input type ="text" class="form-control" name="phone" placeholder="phone">
   <label>ADDRESS</label>
   <input type ="text" class="form-control" name="address" placeholder="address">
   <label>AGE</label>
   <input type ="text" class="form-control" name="age" placeholder="age">
   <select name="gender" class="form-control" >
<option selected="" disabled=""></option>
<option value="0">Male</option>
<option value="1">Female</option>
   </select>
   <label>DATE</label>
   <input type ="text" class="form-control"  placeholder="date">
	<input type="submit" value="add" name="submit" class="btn btn-info">
	<label>Img</label>
	<input type="file" class="form-control" name="img">
</form>
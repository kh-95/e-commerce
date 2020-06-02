<?php
session_start();
if(isset($_SESSION['username'])){
include "design/header.php";	
include "design/nav.php";	
include "design/sidebar.php";	
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Message</h1>
	<?php
	if(!$_GET['do']){
		include "include/message_view.php";
	}	elseif($_GET['do']=="view")	{
	include "include/viewm.php";
	}	
	?>
	</div>
		</div><!--/.row-->
		
		<?php 
include "design/footer.php";
}else{

	header("Location:login.php");
}



?>
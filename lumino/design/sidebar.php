

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['username']; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			
			<li ><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Admin</a></li>
			<li ><a href="user.php"><em class="fa fa-dashboard">&nbsp;</em> User</a></li>
			<li ><a href="cat.php"><em class="fa fa-dashboard">&nbsp;</em> Categories</a></li>
		
			<li ><a href="product.php"><em class="fa fa-dashboard">&nbsp;</em> Product</a></li>
				<li ><a href="message.php"><em class="fa fa-dashboard">&nbsp;</em> Message</a></li>
				<li ><a href="siteinfo.php"><em class="fa fa-dashboard">&nbsp;</em> Site_info</a></li>
			<li ><a href="blog.php"><em class="fa fa-dashboard">&nbsp;</em> BLOG</a></li>
			<li ><a href="function/Logout.php"><em class="fa fa-dashboard">&nbsp;</em> LOGOUT</a></li>
		</ul>
	</div><!--/.sidebar-->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					<?php
					require_once "functions/connect.php";
					  $userid= $_SESSION['login_id'];
					  $qurey = $conn -> query("SELECT * FROM users WHERE id=$userid");
					  $user = $qurey -> fetch_assoc();
					  echo $user['username'];

					?>
				</div>
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
			<li class="<?= $current =='index' ? 'active' : '' ?>"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?= $current =='users' ? 'active' : '' ?>"><a href="users.php"><em class="fa fa-users">&nbsp;</em> users</a></li>
			<li class="<?= $current =='products' ? 'active' : '' ?>"><a href="products.php"><em class="fa fa-bar-products">&nbsp;</em> product</a></li>
			<li><a href="functions/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
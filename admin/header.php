<?php
			session_start();
			if(!isset($_SESSION['username'])){
				header('location:../signup/');	
			  }
?>


<div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" width="127" height="50" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Admin - Dashboard - Rescue  Services</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
					</li>
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
					</li>	
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/favicon.png" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>Admin</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">My Profile</a></li>
							<li><a href="setting.php">Settings</a></li>
							<li><a href="../signup/logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li>
								  <span
								  style="color: #ffffff !important;padding: 10px;"><?php
								 		echo$_SESSION['username']." Loggedin"; 
								  ?></span>
							</li>
							<li class="active"> 
								<a href="index.php">Dashboard</a>
							</li>
							<li> 
								<a href="services.php">Services</a>
							</li>
							<li class="submenu">
								<a href="#"><span>Requests</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="requests.php">All Requests</a></li>
									<li><a href="acceptedrequests.php">Accepted Requests</a></li>
									<li><a href="declinedrequests.php">Declined Requests</a></li>
								</ul>
							</li>
							<li> 
								<a href="setting.php">Settings</a>
							</li>
						</ul>
					</div>
                </div>
            </div>
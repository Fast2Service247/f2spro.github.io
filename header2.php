<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="provider_dashboard.php" class="navbar-brand logo">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
					<a href="provider_dashboard.php" class="navbar-brand logo-small">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="provider_dashboard.php" class="menu-logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li class="cate4"><a href="provider_dashboard.php">Dashboard</a></li>
						<!--<li class="cate4"><a href="categories.php">Categories</a></li>-->
						<!--<li class="cate3"><a href="providers_index.php">Home</a></li>-->
					
						<li class="cate3"><a href="provider_dashboard.php">Dashboard</a></li>
						<li class="cate3"><a href="my_services.php">My Services</a></li>
						<li class="cate3"><a href="add_service.php">Add Service</a></li>
						<li class="cate3"><a href="provider_bookings.php">Booking List</a>
						<li class="cate3"><a href="provider_settings.php">Profile Settings</a></li>
						<li class="cate3"><a href="provider_wallet.php">Wallet</a></li>
						<li class="cate3"><a href="provider_subscription.php">Subscription</a></li>
						<li class="cate3"><a href="provider_availability.php">Availability</a></li>
						<li class="cate3"><a href="provider_chat.php">Chat</a></li>
					    <!--<li class="cate4"><a class="cate" href="about-us.php">About Us</a></li>-->
					    <li class="cate3"><a href="logout.php">Logout</a></li>


						

					</ul>
				</div>
				
				<ul class="nav header-navbar-rht">

					<li class="nav-item desc-list">
						<a href="add_service.php" class="nav-link header-login">
							<i class="fas fa-plus-circle mr-1"></i> <span>Post a Service</span>
						</a>
						
					</li>

					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>
						</a>
						<div class="dropdown-menu notify-blk dropdown-menu-right notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti">Clear All  </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									
									
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="notifications.php">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- chat -->
					<li class="nav-item desc-list cate3" style="margin-top: 25px;">
						<!--<a href="chat.php" class="nav-link">-->
						<!--	<i class="fa fa-comments" aria-hidden="true"></i>-->
						<!--</a>-->
						<a href="add_service.php" class="nav-link header-login">
							<i class="fas fa-plus-circle mr-1"></i> <span>Post</span>
						</a>
					</li>
					<!-- /chat -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="assets/upload_img/<?php echo $p_image; ?>" alt="" width="31">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/upload_img/<?php echo $p_image; ?>" alt="">
								</div>
								<div class="user-text">
									<h6 class="text-truncate"><?php echo $p_name; ?></h6>
									<p class="text-muted mb-0">Provider</p>
								</div>
							</div>
							<a class="dropdown-item" href="provider_dashboard.php">Dashboard</a>
							<a class="dropdown-item" href="my_services.php">My Services</a>
							<a class="dropdown-item" href="provider_bookings.php">Booking List</a>
							<a class="dropdown-item" href="provider_settings.php">Profile Settings</a>
							<a class="dropdown-item" href="provider_wallet.php">Wallet</a>
							<a class="dropdown-item" href="provider_subscription.php">Subscription</a>
							<a class="dropdown-item" href="provider_availability.php">Availability</a>
							<a class="dropdown-item" href="provider_chat.php">Chat</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
			</nav>
		</header>
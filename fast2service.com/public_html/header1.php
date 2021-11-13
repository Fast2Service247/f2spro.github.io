<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	<title>Fast2Service</title>

	<!-- Favicons -->
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Owl CSS -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<?php include ('user_style.php'); ?>
<?php include ('style.php'); ?>
<body>

	<div class="main-wrapper">

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
					<a href="user_index.php" class="navbar-brand logo">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
					<a href="user_index.php" class="navbar-brand logo-small">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="user_index.php" class="menu-logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
					    <li class="menu"><a href="user_index.php"></i>Home</a></li>
					    <li class="menu1"><a href="user_index.php"><i class="fas fa-chart-line"></i>Home</a></li>
					    <li class="menu1"><a href="user_bookings.php"><i class="far fa-calendar-check"></i>My Bookings</a></li>
					    <li class="menu"><a href="categories.php">Categories</a></li>
					    <li class="menu1"><a href="categories.php">Categories</a></li>
						<li class="menu1"><a href="user_settings.php"><i class="far fa-user"></i>Profile Settings</a></li>
						<li class="menu1"><a href="all_services.php"><i class="far fa-calendar-check"></i>Book Services</a></li>
						<li class="menu1"><a href="user_wallet.php"><i class="far fa-money-bill-alt"></i>Wallet</a></li>
						<li class="menu1"><a href="user_reviews.php"><i class="far fa-star"></i>Reviews</a></li>
						<li class="menu1"><a href="user_payment.php">Payment</a></li>
						<li class="menu1"><a href="chat.php">Chat</a></li>
						<!--<li class="menu"><a class="cate" href="about-us.php">About Us</a></li>-->
						<li class="menu1"><a href="about-us.php">About Us</a></li>
                        <li class="menu1"><a href="logout.php">Logout</a></li>
					
						
						
						

						
					
						
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<li class="nav-item desc-list wallet-menu">
						<a href="user-wallet.php" class="nav-link header-login">
							<img src="assets/img/wallet.png" alt="" class="mr-2 wallet-img"><span>Wallet:</span> ₹<?php echo $wallet_amount; ?>
						</a>
					</li>

					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">2</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
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
					<li class="nav-item logged-item">
						<a href="chat.php" class="nav-link">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</a>
					</li>
					<!-- /chat -->
					
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="assets/upload_img/<?php echo $u_image; ?>" >
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/upload_img/<?php echo $u_image; ?>" >
								</div>
								<div class="user-text">
									<h6><?php echo $u_name; ?></h6>
									<p class="text-muted mb-0">User</p>
								</div>
							</div>
							<a class="dropdown-item" href="user_dashboard.php">Dashboard</a>
							<a class="dropdown-item" href="user_bookings.php">My Bookings</a>
							<a class="dropdown-item" href="user_settings.php">Profile Settings</a>
							<a class="dropdown-item" href="all_services.php">Book Services</a>
							<a class="dropdown-item" href="user_wallet.php">Wallet</a>
							<a class="dropdown-item" href="user_reviews.php">Reviews</a>
							<a class="dropdown-item" href="user_payment.php">Payment</a>
							<a class="dropdown-item" href="chat.php">Chat</a>
                            <a class="dropdown-item" href="logout.php" >Logout</a>

						</div>
					</li>
				</ul>
			</nav>
		</header>
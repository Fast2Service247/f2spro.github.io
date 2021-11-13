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

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<div class="main-wrapper">
	
		<!-- Header -->
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
					<a href="index.php" class="navbar-brand logo">
						<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
					</a>
					<a href="index.php" class="navbar-brand logo-small">
						<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="index.php" class="menu-logo">
							<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="categories.php">Categories</a>
						</li>
						<li class="has-submenu">
							<a href="provider-dashboard.php">Providers</a>
							<ul class="submenu">
								<li><a href="provider-dashboard.php">Dashboard</a></li>
								<li><a href="my-services.php">Services</a></li>
								<li><a href="provider-bookings.php">Bookings</a></li>
								<li><a href="provider-settings.php">Profile Settings</a></li>
								<li><a href="provider-wallet.php">Wallet</a></li>
								<li><a href="provider-subscription.php">Subscription</a></li>
								<li><a href="provider-availability.php">Availability</a></li>
								<li><a href="provider-reviews.php">Reviews</a></li>
								<li><a href="provider-payment.php">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="user-dashboard.php">Customers</a>
							<ul class="submenu">
								<li><a href="user-dashboard.php">Dashboard</a></li>
								<li><a href="user-bookings.php">Bookings</a></li>
								<li><a href="user-settings.php">Profile Settings</a></li>
								<li><a href="user-wallet.php">Wallet</a></li>
								<li><a href="user-reviews.php">Reviews</a></li>
								<li><a href="user-payment.php">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu active">
							<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="search.php">Search</a></li>
								<li><a href="service-details.php">Service Details</a></li>
								<li><a href="add-service.php">Add Service</a></li>
								<li><a href="edit-service.php">Edit Service</a></li>
								<li><a href="chat.php">Chat</a></li>
								<li class="active"><a href="notifications.php">Notifications</a></li>
								<li><a href="about-us.php">About Us</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
								<li><a href="faq.php">FAQ</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</li>
						<li>
							<a href="admin/index.php" target="_blank">Admin</a>
						</li>
					</ul>
				</div>

				<ul class="nav header-navbar-rht">

					<li class="nav-item desc-list">
						<a href="add-service.php" class="nav-link header-login">
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
									<li class="notification-message">
										<a href="notifications.php">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-01.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Jeffrey Akridge has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.php">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Nancy Olson has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.php">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Ramona Kingsley has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.php">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-04.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Ricardo Lung has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday 6:20 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.php">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-05.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title">Annette Silva has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">17 Sep 2020 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
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
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="assets/img/provider/provider-01.jpg" alt="" width="31">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/img/provider/provider-01.jpg" alt="">
								</div>
								<div class="user-text">
									<h6 class="text-truncate">Thomas</h6>
									<p class="text-muted mb-0">Provider</p>
								</div>
							</div>
							<a class="dropdown-item" href="provider-dashboard.php">Dashboard</a>
							<a class="dropdown-item" href="my-services.php">My Services</a>
							<a class="dropdown-item" href="provider-bookings.php">Booking List</a>
							<a class="dropdown-item" href="provider-settings.php">Profile Settings</a>
							<a class="dropdown-item" href="provider-wallet.php">Wallet</a>
							<a class="dropdown-item" href="provider-subscription.php">Subscription</a>
							<a class="dropdown-item" href="provider-availability.php">Availability</a>
							<a class="dropdown-item" href="chat.php">Chat</a>
							<a class="dropdown-item" href="index.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>

			</nav>
		</header>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div>
							<h4 class="widget-title">Notifications</h4>
							<div class="notcenter">
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-01.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Jeffrey Akridge has booked your service</strong></h3>
												<span>Today 01:35 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-02.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Nancy Olson booked your service</strong></h3>
												<span>Yesterday 01:31 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-03.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Ramona Kingsley booked your service</strong></h3>
												<span>18 Sep 2020 01:29 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-04.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Ricardo Lung have rejected the service</strong></h3>
												<span>17 Sep 2020 01:21 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-05.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Annette Silva has booked your service</strong></h3>
												<span>16 Sep 2020 01:15 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-06.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Stephen Wilson has booked your service</strong></h3>
												<span>15 Sep 2020 08:03 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-07.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Ryan Rodriguez has booked your service</strong></h3>
												<span>14 Sep 2020 09:29 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-08.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Lucile Devera booked your service</strong></h3>
												<span>13 Sep 2020 08:40 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-09.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Roland Storey has booked your service</strong></h3>
												<span>12 Sep 2020 01:59 PM</span>
											</div>
										</div>
									</div>
								</div>
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<div class="d-flex text-dark">
											<img class="rounded" src="assets/img/customer/user-10.jpg" width="50" alt="">
											<div class="noti-contents">
												<h3><strong>Lindsey Parmley has cancelled the service</strong></h3>
												<span>11 Sep 2020 04:38 AM</span>
											</div>
										</div>
									</div>
								</div>
								
							</div>
								
							<!-- Pagination -->
							<div class="pagination">
								<ul>
									<li class="active">
										<a href="javascript:void(0);">1</a>
									</li>
									<li>
										<a href="javascript:void(0);">2</a>
									</li>
									<li>
										<a href="javascript:void(0);">3</a>
									</li>
									<li>
										<a href="javascript:void(0);">4</a>
									</li>
									<li class="arrow">
										<a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
									</li>
								</ul>
							</div>
							<!-- /Pagination -->
							
						</div>
					</div>
				</div>
			</div>
		</div>﻿
		
		<!-- Footer -->
		<footer class="footer">
		
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Quick Links  </h2>
								<ul>
									<li>
										<a href="about-us.php">About Us</a>
									</li>
									<li>
										<a href="contact-us.php">Contact Us</a>
									</li>
									<li>
										<a href="faq.php">FAQ</a>
									</li>
									<li>
										<a href="#">Help</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Categories</h2>
								<ul>
									<li>
										<a href="search.php">Cleaning</a>
									</li>
									<li>
										<a href="search.php">Saloon's</a>
									</li>
									<li>
										<a href="search.php">Car Wash</a>
									</li>
									<li>
										<a href="search.php">Electrician</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<span><i class="far fa-building"></i></span>
										<p>Near shiv mandir Pratapnagar Udaipur Rajsthan - 313001</p>
									</div>
									<p><i class="fas fa-headphones"></i> 7230879549</p>
									<p class="mb-0"><i class="fas fa-envelope"></i> info@fast2service.com</p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<h2 class="footer-title">Follow Us</h2>
								<div class="social-icon">
									<ul>
										<li>
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-google"></i></a>
										</li>
									</ul>
								</div>
								<div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                    <button type="submit" class="btn footer-btn">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2021 <a href="index.php">Fast2Service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition.php">Terms and Conditions</a>
										</li>
										<li>
											<a href="privacy-policy.php">Privacy</a>
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
		
	</div>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
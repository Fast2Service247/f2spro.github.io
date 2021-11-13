<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Fast2Service</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.png">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php include ('user_style.php'); ?>
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
						<li class="active">
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
							<a href="user-dashboard.php">My Account</a>
							<ul class="submenu">
								<li><a href="user-dashboard.php">Dashboard</a></li>
								<li><a href="user-bookings.php">Bookings</a></li>
								<li><a href="user-settings.php">Profile Settings</a></li>
								<li><a href="user-wallet.php">Wallet</a></li>
								<li><a href="user-reviews.php">Reviews</a></li>
								<li><a href="user-payment.php">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="search.php">Search</a></li>
								<li><a href="service-details.php">Service Details</a></li>
								<li><a href="add-service.php">Add Service</a></li>
								<li><a href="edit-service.php">Edit Service</a></li>
								<li><a href="chat.php">Chat</a></li>
								<li><a href="notifications.php">Notifications</a></li>
								<li><a href="about-us.php">About Us</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
								<li><a href="faq.php">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="modal" data-target="#user-register">Become a User</a>
						</li>
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<li class="nav-item">
						<a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#login_modal">Login</a>
					</li>
				</ul>
			</nav>
		</header>
		<!-- /Header -->
		
		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Categories</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Categories</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<div class="content">
			<div class="container">
				<div class="catsec clearfix">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<a href="search.php">
								<div class="cate-widget">
									<img src="assets/img/sub_category/logo.jpeg" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> Wedding Services  </span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> 21
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-md-6">
							<a href="search.php">
								<div class="cate-widget">
									<img src="assets/img/sub_category/logo.jpeg" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> Bridal Makeup </span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> 15
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-md-6">
							<a href="search.php">
								<div class="cate-widget">
									<img src="assets/img/sub_category/logo.jpeg" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> Pre-Wedding Photoshoot</span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> 15
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-md-6">
							<a href="search.php">
								<div class="cate-widget">
									<img src="assets/img/sub_category/logo.jpeg" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> Wedding Planner </span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> 14
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-md-6">
							<a href="search.php">
								<div class="cate-widget">
									<img src="assets/img/sub_category/logo.jpeg" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> Pre-Bridal Beauty Package </span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> 14
									</div>
								</div>
							</a>
						</div>
						
					</div>
					<div class="pagination">
						<ul>
							<li class="active"><a href="javascript:void(0);">1</a></li>
							<li><a href="javascript:void(0);">2</a></li>
							<li><a href="javascript:void(0);">3</a></li>
							<li><a href="javascript:void(0);">4</a></li>
							<li class="arrow"><a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
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
									<p class="mb-0"><i class="fas fa-envelope"></i> info@fast2service.com

</p>
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
							<div class="col-md-4 col-lg-4">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2021 <a href="index.php">Fast2Service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#provider-register" id="bec">Become a Professional</a>
							</div>

							<div class="col-md-4 col-lg-4">
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

<?php include('form.php'); ?>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
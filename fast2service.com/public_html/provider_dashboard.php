<?php include('session2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Truelysell | Template</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/logo.jpeg">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php include ('provider_style.php'); ?>
<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<?php include ('header2.php'); ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					<!--<div class="col-xl-3 col-md-4 theiaStickySidebar">-->
					<!--	<div class="mb-4">-->
					<!--		<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">-->
					<!--			<img alt="profile image" src="assets/upload_img/<?php echo $p_image; ?>" class="avatar-lg rounded-circle">-->
					<!--			<div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">-->
					<!--				<h6 class="mb-0"><?php echo $p_name; ?></h6>-->
									<!--<p class="text-muted mb-0">Member Since Apr 2020</p>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<div class="widget settings-menu">-->
					<!--		<ul>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-dashboard.php" class="nav-link active">-->
					<!--					<i class="fas fa-chart-line"></i> <span>Dashboard</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="my-services.php" class="nav-link">-->
					<!--					<i class="far fa-address-book"></i> <span>My Services</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-bookings.php" class="nav-link">-->
					<!--					<i class="far fa-calendar-check"></i> <span>Booking List</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-settings.php" class="nav-link">-->
					<!--					<i class="far fa-user"></i> <span>Profile Settings</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-wallet.php" class="nav-link">-->
					<!--					<i class="far fa-money-bill-alt"></i> <span>Wallet</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-subscription.php" class="nav-link">-->
					<!--					<i class="far fa-calendar-alt"></i> <span>Subscription</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-availability.php" class="nav-link">-->
					<!--					<i class="far fa-clock"></i> <span>Availability</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-reviews.php" class="nav-link">-->
					<!--					<i class="far fa-star"></i> <span>Reviews</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--			<li class="nav-item">-->
					<!--				<a href="provider-payment.php" class="nav-link">-->
					<!--					<i class="fas fa-hashtag"></i> <span>Payment</span>-->
					<!--				</a>-->
					<!--			</li>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="col-xl-12 col-md-8">
						<h4 class="widget-title">Dashboard</h4>
						<div class="row">
							<div class="col-lg-4">
								<a href="provider-bookings.php" class="dash-widget dash-bg-1">
									<span class="dash-widget-icon">245</span>
									<div class="dash-widget-info">
										<span>Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="my-services.php" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">66</span>
									<div class="dash-widget-info">
										<span>Services</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="notifications.php" class="dash-widget dash-bg-3">
									<span class="dash-widget-icon">8</span>
									<div class="dash-widget-info">
										<span>Notification</span>
									</div>
								</a>
							</div>
						</div>
						<div class="card mb-0">
							<div class="row no-gutters">
								<div class="col-lg-8">
									<div class="card-body">
										<h6 class="title">Plan Details</h6>
										<div class="sp-plan-name">
											<h6 class="title">
												Gold <span class="badge badge-success badge-pill">Active</span>
											</h6>
											<p>Subscription ID: <span class="text-base">100394949</span></p>
										</div>
										<ul class="row">
											<li class="col-6 col-lg-6">
												<p>Started On 15 Jul, 2020</p>
											</li>
											<li class="col-6 col-lg-6">
												<p>Price $1502.00</p>
											</li>
										</ul>
										<h6 class="title">Last Payment</h6>
										<ul class="row">
											<li class="col-sm-6">
												<p>Paid at 15 Jul 2020</p>
											</li>
											<li class="col-sm-6">
												<p><span class="text-success">Paid</span>  <span class="amount">$1502.00</span>
												</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="sp-plan-action card-body">
										<div class="mb-2">
											<a href="provider_subscription.php" class="btn btn-primary"><span>Change Plan</span></a>
										</div>
										<div class="next-billing">
											<p>Next Billing on <span>15 Jul, 2021</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<!--<footer class="footer">-->
		
			<!-- Footer Top -->
		<!--	<div class="footer-top">-->
		<!--		<div class="container">-->
		<!--			<div class="row">-->
		<!--				<div class="col-lg-3 col-md-6">-->
							<!-- Footer Widget -->
		<!--					<div class="footer-widget footer-menu">-->
		<!--						<h2 class="footer-title">Quick Links  </h2>-->
		<!--						<ul>-->
		<!--							<li>-->
		<!--								<a href="about-us.php">About Us</a>-->
		<!--							</li>-->
		<!--							<li>-->
		<!--								<a href="contact-us.php">Contact Us</a>-->
		<!--							</li>-->
		<!--							<li>-->
		<!--								<a href="faq.php">FAQ</a>-->
		<!--							</li>-->
		<!--							<li>-->
		<!--								<a href="#">Help</a>-->
		<!--							</li>-->
		<!--						</ul>-->
		<!--					</div>-->
							<!-- /Footer Widget -->
		<!--				</div>-->
		<!--				<div class="col-lg-3 col-md-6">-->
							<!-- Footer Widget -->
		<!--					<div class="footer-widget footer-menu">-->
		<!--						<h2 class="footer-title">Categories</h2>-->
		<!--						<ul>-->
		<!--							<li>-->
		<!--								<a href="search.php">Cleaning</a>-->
		<!--							</li>-->
		<!--							<li>-->
		<!--								<a href="search.php">Saloons's</a>-->
		<!--							</li>-->
		<!--							<li>-->
		<!--								<a href="search.php">Car Wash</a>-->
		<!--							</li>-->
		<!--							<li>-->
		<!--								<a href="search.php">Electrician</a>-->
		<!--							</li>-->
		<!--						</ul>-->
		<!--					</div>-->
							<!-- /Footer Widget -->
		<!--				</div>-->
		<!--				<div class="col-lg-3 col-md-6">-->
							<!-- Footer Widget -->
		<!--					<div class="footer-widget footer-contact">-->
		<!--						<h2 class="footer-title">Contact Us</h2>-->
		<!--						<div class="footer-contact-info">-->
		<!--							<div class="footer-address">-->
		<!--								<span><i class="far fa-building"></i></span>-->
		<!--								<p>Near shiv mandir Pratapnagar Udaipur Rajsthan - 313001</p>-->
		<!--							</div>-->
		<!--							<p><i class="fas fa-headphones"></i> 7230879549</p>-->
		<!--							<p class="mb-0"><i class="fas fa-envelope"></i> info@fast2service.com</p>-->
		<!--						</div>-->
		<!--					</div>-->
							<!-- /Footer Widget -->
		<!--				</div>-->
		<!--				<div class="col-lg-3 col-md-6">-->
							<!-- Footer Widget -->
		<!--					<div class="footer-widget">-->
		<!--						<h2 class="footer-title">Follow Us</h2>-->
		<!--						<div class="social-icon">-->
		<!--							<ul>-->
		<!--								<li>-->
		<!--									<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>-->
		<!--								</li>-->
		<!--								<li>-->
		<!--									<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>-->
		<!--								</li>-->
		<!--								<li>-->
		<!--									<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>-->
		<!--								</li>-->
		<!--								<li>-->
		<!--									<a href="#" target="_blank"><i class="fab fa-google"></i></a>-->
		<!--								</li>-->
		<!--							</ul>-->
		<!--						</div>-->
		<!--						<div class="subscribe-form">-->
  <!--                                  <input type="email" class="form-control" placeholder="Enter your email">-->
  <!--                                  <button type="submit" class="btn footer-btn">-->
  <!--                                      <i class="fas fa-paper-plane"></i>-->
  <!--                                  </button>-->
  <!--                              </div>-->
		<!--					</div>-->
							<!-- /Footer Widget -->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
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

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
<?php include('session2.php'); ?>
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
					<!--				<a href="provider-dashboard.php" class="nav-link">-->
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
					<!--				<a href="provider-subscription.php" class="nav-link active">-->
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
						<div class="row pricing-box">
							<div class="col-xl-4 col-md-6 ">
								<div class="card">
									<div class="card-body">
										<div class="pricing-header">
											<h2>Basic</h2>
											<p>Monthly Price</p>
										</div>
										<div class="pricing-card-price">
											<h3 class="heading2 price">₹0.00</h3>
											<p>Duration: <span>3 Months</span></p>
										</div>
										<ul class="pricing-options">
											<li><i class="far fa-check-circle"></i> One listing submission</li>
											<li><i class="far fa-check-circle"></i> 90 days expiration</li>
										</ul>
										<a href="javascript:void(0);" class="btn btn-primary btn-block">Select Plan</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 ">
								<div class="card">
									<div class="card-body">
										<div class="pricing-header">
											<h2>Standard</h2>
											<p>Monthly Price</p>
										</div>
										<div class="pricing-card-price">
											<h3 class="heading2 price">₹50.00</h3>
											<p>Duration: <span>6 Months</span></p>
										</div>
										<ul class="pricing-options">
											<li><i class="far fa-check-circle"></i> One listing submission</li>
											<li><i class="far fa-check-circle"></i> 180 days expiration</li>
										</ul>
										<a href="javascript:void(0);" class="btn btn-primary btn-block">Select Plan</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 pricing-selected">
								<div class="card">
									<div class="card-body">
										<div class="pricing-header">
											<h2>Enterprice</h2>
											<p>Monthly Price</p>
										</div>
										<div class="pricing-card-price">
											<h3 class="heading2 price">₹1200.00</h3>
											<p>Duration: <span>12 Months</span></p>
										</div>
										<ul class="pricing-options">
											<li><i class="far fa-check-circle"></i> One listing submission</li>
											<li><i class="far fa-check-circle"></i> 360 days expiration</li>
										</ul>
										<a href="javascript:void(0);" class="btn btn-primary btn-block">Subscribed</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="plan-det">
									<h6 class="title">Plan Details</h6>
									<ul class="row">
										<li class="col-sm-4">
											<p><span class="text-muted">Started On</span> </p>
										</li>
										<li class="col-sm-4">
											<p><span class="text-muted">Price</span> ₹</p>
										</li>
										<li class="col-sm-4">
											<p><span class="text-muted">Expired On</span> </p>
										</li>
									</ul>
									<h6 class="title">Last Payment</h6>
									<ul class="row">
										<li class="col-sm-4">
											<p>Paid at </p>
										</li>
										<li class="col-sm-4">
											<p><span class="amount">₹ </span>  <span class="badge bg-success-light">Paid</span></p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h5 class="mb-4">Subscribed Details</h5>	
						<div class="card transaction-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-center mb-0 no-footer">
										<thead>
											<tr>
												<th>Plan</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<!--<tr>-->
											<!--	<td>Basic</td>-->
											<!--	<td>03-04-2020</td>-->
											<!--	<td>02-07-2020</td>-->
											<!--	<td>0.00</td>-->
											<!--	<td><span class="badge bg-success-light">Paid</span></td>-->
											<!--</tr>-->
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer class="footer">
		
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
		<!--								<a href="search.php">Saloon's</a>-->
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
		<!--							<p class="mb-0"><i class="fas fa-envelope"></i>info@fast2service.com </p>-->
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
									<p class="mb-0">&copy; 2021 <a href="index.php">Fast2service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term_condition.php">Terms and Conditions</a>
										</li>
										<li>
											<a href="privacy_policy.php">Privacy</a>
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
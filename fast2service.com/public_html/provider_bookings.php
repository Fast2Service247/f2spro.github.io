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
					<!--				<a href="provider-bookings.php" class="nav-link active">-->
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
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">Booking List</h4>
							</div>
							<div class="col-auto">
								<div class="sort-by">
									<select class="form-control-sm custom-select searchFilter" id="status">
										<option>All</option>
										<option>Pending</option>
										<!--<option>Inprogress</option>-->
										<!--<option>Complete Request</option>-->
										<!--<option>Rejected</option>-->
										<!--<option>Cancelled</option>-->
										<option>Completed</option>
									</select>
								</div>
							</div>
						</div>
						<div id="dataList">

							
							<div class="bookings">
								<div class="booking-list">
									<div class="booking-widget">
										<a href="service-details.php" class="booking-img">
											<img src="assets/img/services/service-07.jpg" alt="User Image">
										</a>
										<div class="booking-det-info">
											<h3>
												<a href="service-details.php">Interior Designing</a>
											</h3>
											<ul class="booking-details">
												<li>
													<span>Booking Date</span> 22 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
												</li>
												<li><span>Booking time</span> 11:00:00 - 12:00:00</li>
												<li><span>Amount</span> $100</li>
												<li><span>Location</span> 171 Jadewood Farms Newark</li>
												<li><span>Phone</span> 412-355-7471</li>
												<li>
													<span>User</span>
													<div class="avatar avatar-xs mr-1">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-06.jpg">
													</div>
													Stephen Wilson
												</li>
											</ul>
										</div>
									</div>
									<div class="booking-action">
										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> User Request Accept</a>
										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel"><i class="fas fa-times"></i> Cancel the Service</a>
									</div>
								</div>
							</div> 
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
		<!--								<a href="faq.php">Faq</a>-->
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
									<p class="mb-0">&copy; 2020 <a href="index.php">Fast2Service</a>. All rights reserved.</p>
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
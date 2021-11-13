<?php 
include('session2.php');
$p_email=$_SESSION['p_email'];
include('config.php');
$qry="select * from providers where p_email='".$p_email."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                             
                                $p_name=$row["p_name"];
                                $p_email=$row['p_email'];
                                $p_mobile_number=$row['p_mobile_number'];
                                $p_password=$row['p_password'];
                                $p_address=$row['p_address'];
                                $p_country=$row['p_country'];
								$p_state=$row['p_state'];
                                $p_city=$row['p_city'];
                                $p_pincode=$row['p_pincode'];
                                $p_image=$row['p_image'];
					 }
 
 
   
?> 

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
		<?php include('header2.php'); ?>
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
					<!--				<a href="provider-settings.php" class="nav-link active">-->
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
						<div class="tab-content pt-0">
							<div class="tab-pane show active" id="user_profile_settings">
								<div class="widget">
									<h4 class="widget-title">Profile Settings</h4>
										<form method="post" action="edit_profile.php" enctype="multipart/form-data">
										<!--<div class="row">-->
										<!--	<div class="col-xl-12">-->
										<!--		<h5 class="form-title">Basic Information</h5>-->
										<!--	</div>-->
										<!--	<div class="form-group col-xl-12">-->
										<!--		<div class="media align-items-center mb-3">-->
										<!--			<img class="user-image" src="assets/img/customer/user-01.jpg" alt="">-->
										<!--			<div class="media-body">-->
										<!--				<h5 class="mb-0">Jeffrey Akridge</h5>-->
										<!--				<p>Max file size is 20mb</p>-->
										<!--				<div class="jstinput">	<a href="javascript:void(0);" class="avatar-view-btn browsephoto openfile">Browse</a>-->
										<!--				</div>-->
										<!--			</div>-->
										<!--		</div>-->
										<!--	</div>-->
										<!--</div>-->
										<div class="row">
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Name</label>
												<input class="form-control" type="text" name="p_name" value="<?php echo $p_name; ?>" required >
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Email</label>
												<input class="form-control" type="email" name="p_email" value="<?php echo $p_email; ?>" required>
											</div>

											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Mobile Number</label>
												<input class="form-control no_only" type="text" name="p_mobile_number" value="<?php echo $p_mobile_number; ?>" required pattern="[0-9]{10}">
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Password</label>
												<input type="text" class="form-control" name="p_password" value="<?php echo $p_password; ?>" required>
											</div>
										    <div class="form-group col-xl-12">
												<label class="mr-sm-2">Address</label>
												<input type="text" class="form-control" name="p_address" value="<?php echo $p_address; ?>" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Country</label>
											
													<input type="text" class="form-control" name="p_country" value="<?php echo $p_country; ?>" required>
											</div>
											
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">State</label>
											
													<input type="text" class="form-control" name="p_state" value="<?php echo $p_state; ?>" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">City</label>
											
													<input type="text" class="form-control" name="p_city" value="<?php echo $p_city; ?>" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">PinCode</label>
												<input type="text" class="form-control" name="p_pincode" value="<?php echo $p_pincode; ?>" required>
											</div>
												<div class="form-group col-xl-6">
												<label class="mr-sm-2">Upload Images </label>
												<input type="file" class="form-control datepicker" autocomplete="off" name="p_image" value="<?php echo $p_image; ?>" required>
											</div>
											<div class="form-group col-xl-12">
												<button  id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit" value="submit" name="provider_profile">Update</button>
											</div> 
										</div>
									</form>
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
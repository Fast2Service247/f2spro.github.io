<?php include('session2.php'); 
$p_email=$_SESSION['p_email'];
include('config.php');
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
			<?php include ('header2.php'); ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					<!--<div class="col-xl-3 col-md-4 theiaStickySidebar">-->
					<!--	<div class="mb-4">-->
					<!--		<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">-->
					<!--			<img alt="profile image" src="assets/img/provider/provider-01.jpg" class="avatar-lg rounded-circle">-->
					<!--			<div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">-->
					<!--				<h6 class="mb-0">Thomas Herzberg</h6>-->
					<!--				<p class="text-muted mb-0">Member Since Apr 2020</p>-->
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
					<!--				<a href="my-services.php" class="nav-link active">-->
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
						<h4 class="widget-title">My Services</h4>
						<ul class="nav nav-tabs menu-tabs">
							<li class="nav-item">
								<a class="nav-link" href="my_services.php">Active Services</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="my_services_inactive.php">Inactive Services</a>
							</li>
						</ul>
						<div class="row">
						    
						    
						    
						    
						    
						    	<?php
                    $qry="select * from add_service where p_email='".$p_email."'";
                    $res=mysqli_query($conn, $qry);
                     if($row=mysqli_fetch_array($res))
                     {
                             
                                $title=$row["title"];
                                $p_name=$row["p_name"];
                                $p_email=$row['p_email'];
                                $p_mobile_number=$row['p_mobile_number'];
                                $p_image=$row['p_image'];
                                $service_amount=$row['service_amount'];
                                $service_location=$row['service_location'];
								$category=$row['category'];
                                $sub_category=$row['sub_category'];
                                $service_offered=$row['service_offered'];
                                $descriptions=$row['descriptions'];
                                $image=$row['image'];
							?>
						
							<div class="col-lg-4 col-md-6 inactive-service">
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.php">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/<?php echo $image; ?>">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$<?php echo $service_amount; ?></span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.php"><?php echo $title; ?></a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.php">Plumbing Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
										<div class="user-info">
											<div class="service-action">
												<div class="row">
													<div class="col">
														<a href="javascript:void(0)" class="si-delete-inactive-service text-danger" data-id="149"><i class="far fa-trash-alt"></i> Delete</a>
													</div>
													<div class="col text-right">
														<a href="javascript:void(0)" class="si-delete-active-service text-success" data-id="149"><i class="fas fa-info-circle"></i> Active</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							 <?php 
                               }else{
                                  echo "<h2 class='text-center'>Add your service</h2>";
                               }
                            ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-footer">	<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Delete Service</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Service is Booked and Inprogress..</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">OK</button>
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

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
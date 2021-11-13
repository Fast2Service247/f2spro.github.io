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

<body>

	<div class="main-wrapper">
	
		<!-- Header -->
			<?php include ('header2.php'); ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-header text-center">
							<h2>Edit Service</h2>
						</div>
						<form>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Information</h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Service Title <span class="text-danger">*</span>
											</label> 
											<input class="form-control" type="text" value="Web Design in Argentina" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Service Amount <span class="text-danger">*</span>
											</label>
											<input class="form-control" type="text" value="150000" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Service Location <span class="text-danger">*</span>
											</label>
											<input class="form-control" type="text" value="Argentina" required>
										</div>
									</div>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Category</h3>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Category <span class="text-danger">*</span></label>
											<select class="form-control">
												<option>Men's Saloon</option>
												<option>Plumbering</option>
												<option>Appliance Service</option>
												<option selected>Cleaning</option>
												<option>Electrical</option>
												<option>Carpentry</option>
												<option>Women's Saloon</option>
												<option>Car Wash</option>
												<option>Women's Saloon</option>
												<option>Pest Control</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Sub Category <span class="text-danger">*</span></label>
											<select class="form-control">
												<option>House Cleaning</option>
												<option>Full Car Wash</option>
												<option>Roofing</option>
												<option>Indoor Glass</option>
												<option>Convertible Fridge</option>
												<option>Fridge</option>
												<option>Car Wash</option>
												<option selected>Others</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Offer</h3>
								<div class="membership-info">
									<div class="row form-row membership-cont">
										<div class="col-lg-6">
											<div class="form-group">
												<label>Service Offered <span class="text-danger">*</span>
												</label>
												<input type="text" class="form-control" value="Web Design">
											</div>
										</div>
										<div class="col-12 col-md-2 col-lg-2">
											<label>&nbsp;</label>	<a href="#" class="btn btn-danger trash"><i class="far fa-times-circle"></i></a>
										</div>
									</div>
									<div class="row form-row membership-cont">
										<div class="col-lg-6">
											<div class="form-group">
												<label>Service Offered <span class="text-danger">*</span>
												</label>
												<input type="text" class="form-control" value="Seo">
											</div>
										</div>
										<div class="col-12 col-md-2 col-lg-2">
											<label>&nbsp;</label>	<a href="#" class="btn btn-danger trash"><i class="far fa-times-circle"></i></a>
										</div>
									</div>
								</div>
								<div class="add-more form-group">
									<a href="javascript:void(0);" class="add-membership"><i class="fas fa-plus-circle"></i> Add More</a>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Details Information</h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Descriptions <span class="text-danger">*</span></label>
											<textarea class="form-control service-desc"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Gallery </h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="service-upload">
											<i class="fas fa-cloud-upload-alt"></i> <span>Upload Service Images *</span>
											<input type="file" name="images[]" id="images" multiple>
										</div>
										<div>
											<ul class="upload-wrap">
												<li>
													<div class="upload-images">
														<img alt="Service Image" src="assets/img/services/service-08.jpg">
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn" type="submit">Submit</button>
							</div>
						</form>
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
										<a href="about-us">About Us</a>
									</li>
									<li>
										<a href="contact-us">Contact Us</a>
									</li>
									<li>
										<a href="faq">FAQ</a>
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
										<a href="Cleaning">Cleaning</a>
									</li>
									<li>
										<a href="Saloon's">Saloon's</a>
									</li>
									<li>
										<a href="Car-Wash">Car Wash</a>
									</li>
									<li>
										<a href="Electrician">Electrician</a>
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
											<a href="https://www.facebook.com/fast2service" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="https://twitter.com/Fast2Service" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCQlerlaFEySb6MruFzN6iKA" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="https://www.instagram.com/fast2service" target="_blank"><i class="fab fa-instagram"></i></a>
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
									<p class="mb-0">&copy; 2021 <a href="home">Fast2Service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition">Terms and Conditions</a>
										</li>
										<li>
											<a href="privacy-policy">Privacy</a>
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
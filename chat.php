<?php include('session.php'); ?>

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

<body class="chat-page">

	<div class="main-wrapper">

		<!-- Header -->
	<?php
		include('header1.php');
		?>
		<!-- /Header -->

		<div class="content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-12">
					
						<div class="row chat-window">
						
							<!-- Chat User List -->
							<div class="col-lg-5 col-xl-4 chat-cont-left">
								<div class="card mb-sm-3 mb-md-0 contacts_card flex-fill">
									<div class="card-header chat-search">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="search_btn"><i class="fas fa-search"></i></span>
											</div>
											<input type="text" placeholder="Search" class="form-control search-chat ">
										</div>
									</div>
									<div class="card-body contacts_body chat-users-list chat-scroll">
										<a href="javascript:void(0);" class="media active">
											<div class="media-img-wrap">
												<div class="avatar avatar-away">
													<img src="assets/upload_img/<?php echo $u_image; ?>"  class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name"><?php echo $u_name; ?></div>
													<div class="user-last-chat">Hey, How are you?</div>
												</div>
												<div>
													<div class="last-chat-time">2 min</div>
													<div class="badge badge-success badge-pill">1</div>
												</div>
											</div>
										</a>
										
										
										
		
										
									
										
										
									</div>
								</div>
							</div>
							<!-- Chat User List -->
							
							<!-- Chat Content -->
							<div class="col-lg-7 col-xl-8 chat-cont-right">
							
								<!-- Chat History -->
								<div class="card mb-0">

									<div class="card-header msg_head">
										<div class="d-flex bd-highlight">
											<a id="back_user_list" href="javascript:void(0)" class="back-user-list">
												<i class="fas fa-chevron-left"></i>
											</a>
											<div class="img_cont">
												<img class="rounded-circle user_img" src="assets/upload_img/<?php echo $u_image; ?>" alt="">
											</div>
											<div class="user_info">
												<span><strong id="receiver_name"><?php echo $u_name; ?></strong></span>
												<p class="mb-0">Messages</p>
											</div>
										</div>
									</div>

									<div class="card-body msg_card_body chat-scroll">
										<ul class="list-unstyled">
											
										</ul>
									
									</div>
									
									<div class="card-footer">
										<div class="input-group">
											<input class="form-control type_msg mh-auto empty_check" placeholder="Type your message...">
											<div class="input-group-append">
												<button class="btn btn-primary btn_send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
											</div>
										</div>
									</div>
									
								</div>

							</div>
							<!-- Chat Content -->
							
						</div>

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
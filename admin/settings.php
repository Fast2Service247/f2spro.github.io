<?php 
include('config.php');
session_start();
if($_SESSION['id']=="")
{

 echo '<script> 
 window.location="index.php";
 </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Fast2Service</title>

	<!-- Favicons -->
	

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>
	<div class="main-wrapper">
	
		<!-- Header -->
			<?php include('a_header.php'); ?>
		<!-- /Header -->
		
		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-logo">
				<a href="index.php">
					<img src="assets/img/logo.jpeg" class="img-fluid" alt="">
				</a>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li>
							<a href="index.php"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="categories.php"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
						</li>
						<li>
							<a href="subcategories.php"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
						</li>
						<li>
							<a href="service-list.php"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
						</li>
						<li>
							<a href="total-report.php"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
						</li>
						<li>
							<a href="payment_list.php"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
						</li>
						<li>
							<a href="ratingstype.php"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
						</li>
						<li>
							<a href="review-reports.php"><i class="fas fa-star"></i> <span>Ratings</span></a>
						</li>
						<li>
							<a href="subscriptions.php"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
						</li>
						<li>
							<a href="wallet.php"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
						</li>
						<li>
							<a href="service-providers.php"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
						</li>
						<li>
							<a href="users.php"><i class="fas fa-user"></i> <span>Users</span></a>
						</li>
						<li class="active">
							<a href="settings.php"><i class="fas fa-cog"></i> <span> Settings</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->
		
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-12">
							<h3 class="page-title">General Settings</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<ul class="nav nav-tabs menu-tabs">
					<li class="nav-item active">
						<a class="nav-link" href="settings.php">General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="emailsettings.php">Email Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="stripe_payment_gateway.php">Payment Gateway</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="sms-settings.php">SMS Gateway</a>
					</li>
				</ul>
				
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-4 settings-tab">
						<div class="card">
							<div class="card-body">
								<div class="nav flex-column">
									<a class="nav-link active" data-toggle="tab" href="#general">General</a>
									<a class="nav-link" data-toggle="tab" href="#push_notification">Push Notification</a>
									<a class="nav-link" data-toggle="tab" href="#terms">Terms & Conditions</a>
									<a class="nav-link mb-0" data-toggle="tab" href="#privacy">Privacy</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-8">
						<div class="card">
							<div class="card-body p-0">
								<form> 
									<div class="tab-content pt-0">
									
										<!-- General Settings -->
										<div id="general" class="tab-pane active">
											<div class="card mb-0">
												<div class="card-header">
													<h4 class="card-title">General Settings</h4>
												</div>
												<div class="card-body">
													<div class="form-group">
														<label>Website Name</label>
														<input type="text" class="form-control" placeholder="Dreamguy's Technologies">
													</div>
													<div class="form-group">
														<label>Contact Details</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group">
														<label>Mobile Number</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group">
														<label>Currency</label>
														<p><strong>USD $ </strong></p>
													</div>
													<div class="form-group">
														<label>Website Logo</label>
														<div class="uploader">
															<input type="file" class="form-control">
														</div>
														<p class="form-text text-muted small mb-0">Recommended image size is <b>150px x 150px</b>
														</p>
														<img src="assets/img/logo.jpeg" class="site-logo" alt="">
													</div>
													<div class="form-group">
														<label>Favicon</label>
														<div class="uploader">
															<input type="file" class="form-control">
														</div>
														<p class="form-text text-muted small mb-0">Recommended image size is <b>16px x 16px</b> or <b>32px x 32px</b></p>
														<p class="form-text text-muted small mb-1">Accepted formats: only png and ico</p>
														<img src="assets/img/favicon.png" class="fav-icon" alt="">
													</div>
												</div>
											</div>
										</div>
										<!-- /General Settings -->
										
										<!-- Push Notification -->
										<div id="push_notification" class="tab-pane">
											<div class="card mb-0">
												<div class="card-header">
													<h4 class="card-title">Push Notification</h4>
												</div>
												<div class="card-body">
													<div class="form-group">
														<label>Firebase Server Key</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group">
														<label>APNS Key</label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<!-- /Push Notification -->
										
										<!-- Terms & Conditions -->
										<div id="terms" class="tab-pane">
											<div class="card mb-0">
												<div class="card-header">
													<h4 class="card-title">Terms & Conditions</h4>
												</div>
												<div class="card-body">
													<div class="form-group">
														<label>Page Content</label>
														<textarea class="form-control content-textarea" rows="4">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</textarea>
													</div>
												</div>
											</div>
										</div>
										<!-- /Terms & Conditions -->
										
										<!-- Privacy Policy -->
										<div id="privacy" class="tab-pane pt-0">
											<div class="card mb-0 shadow-none">
												<div class="card-header">
													<h4 class="card-title">Privacy</h4>
												</div>
												<div class="card-body">
													<div class="form-group">
														<label>Page Content</label>
														<textarea class="form-control content-textarea" rows="4">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</textarea>
													</div>
												</div>
											</div>
										</div>
										<!-- /Privacy Policy -->
										
										<div class="card-body pt-0">
											<button type="submit" class="btn btn-primary">Save Changes</button>
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

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>

</html>
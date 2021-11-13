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
						<li class="active">
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
							<a href="total-report.php"><i class="far fa-calendar-check"></i> <span> Booking
									List</span></a>
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
							<a href="subscriptions.php"><i class="far fa-calendar-alt"></i>
								<span>Subscriptions</span></a>
						</li>
						<li>
							<a href="wallet.php"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
						</li>
						<li>
							<a href="service-providers.php"><i class="fas fa-user-tie"></i> <span> Service
									Providers</span></a>
						</li>
						<li>
							<a href="users.php"><i class="fas fa-user"></i> <span>Users</span></a>
						</li>
						<li>
							<a href="settings.php"><i class="fas fa-cog"></i> <span> Settings</span></a>
						</li>
						<li>
							<a href="logout.php"><i class="fas fa-cog"></i> <span> logout</span></a>
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
							<h3 class="page-title">Welcome Admin!</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-primary">
										<i class="far fa-user"></i>
									</span>
									<div class="dash-widget-info">
										<h3>429</h3>
										<h6 class="text-muted">Users</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-primary">
										<i class="fas fa-user-shield"></i>
									</span>
									<div class="dash-widget-info">
										<h3>148</h3>
										<h6 class="text-muted">Providers</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-primary">
										<i class="fas fa-qrcode"></i>
									</span>
									<div class="dash-widget-info">
										<h3>124</h3>
										<h6 class="text-muted">Services</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-primary">
										<i class="far fa-credit-card"></i>
									</span>
									<div class="dash-widget-info">
										<h3>$11378</h3>
										<h6 class="text-muted">Subscription</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 d-flex">

						<!-- Recent Bookings -->
						<div class="card card-table flex-fill">
							<div class="card-header">
								<h4 class="card-title">Recent Bookings</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-center">
										<thead>
											<tr>
												<th>Customer</th>
												<th>Date</th>
												<th>Service</th>
												<th>Status</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Recent Bookings -->

					</div>
					<div class="col-md-6 d-flex">

						<!-- Payments -->
						<div class="card card-table flex-fill">
							<div class="card-header">
								<h4 class="card-title">Payments</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-center">
										<thead>
											<tr>
												<th>Date</th>
												<th>User</th>
												<th>Provider</th>
												<th>Service</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
										    </tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- Payments -->

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
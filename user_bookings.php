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
<?php include ('user_style.php'); ?>
<?php include ('style.php'); ?>
<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<?php include ('header1.php'); ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4">
						<div class="mb-4">
							<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
								<img alt="profile image" src="assets/upload_img/<?php echo $u_image; ?>" class="avatar-lg rounded-circle">
								<div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
									<h6 class="mb-0"><?php echo $u_name; ?></h6>
									<!--<p class="text-muted mb-0">Member Since Apr 2020</p>-->
								</div>
							</div>
						</div>
						<div class="widget settings-menu">
							<ul role="tablist" class="nav nav-tabs">
								<li class="nav-item current">
									<a href="user-dashboard.php" class="nav-link">
										<i class="fas fa-chart-line"></i> <span>Dashboard</span>
									</a>
								</li>
								<li class="nav-item current">
									<a href="user-bookings.php" class="nav-link active">
										<i class="far fa-calendar-check"></i> <span>My Bookings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-settings.php" class="nav-link">
										<i class="far fa-user"></i> <span>Profile Settings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-wallet.php" class="nav-link">
										<i class="far fa-money-bill-alt"></i> <span>Wallet</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-reviews.php" class="nav-link">
										<i class="far fa-star"></i> <span>Reviews</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-payment.php" class="nav-link">
										<i class="fas fa-hashtag"></i> <span>Payment</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-9 col-md-8">
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">My Bookings</h4>
							</div>
							<div class="col-auto">
								<div class="sort-by">
									<select class="form-control-sm custom-select">
										<option>All</option>
										<option>Pending</option>
										<option>Inprogress</option>
										<option>Complete Request</option>
										<option>Rejected</option>
										<option>Cancelled</option>
										<option>Completed</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.php" class="booking-img">
										<img src="assets/img/services/service-08.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.php">Carpentry Service</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-primary">Inprogress</span>
											</li>
											<li><span>Booking time</span> 12:00:00 - 13:00:00</li>
											<li><span>Amount</span> $100</li>
											<li><span>Location</span> Kuala Lumpur, Malaysia</li>
											<li><span>Phone</span> 412-355-7471</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-01.jpg">
												</div>
												Thomas Herzberg
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="#" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Chat</a>
									<a href="javascript:;" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.php" class="booking-img">
										<img src="assets/img/services/service-09.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.php">Pest Control Services</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 22 Jul 2020 <span class="badge badge-pill badge-prof bg-primary">Inprogress</span>
											</li>
											<li><span>Booking time</span> 11:00:00 - 12:00:00</li>
											<li><span>Amount</span> $25</li>
											<li><span>Location</span> IFL Building A, Phnom Penh, Cambodia</li>
											<li><span>Phone</span> 412-355-7471</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-02.jpg">
												</div>
												Matthew Garcia
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="user-chat.php" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Chat</a>
									<a href="javascript:;" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.php" class="booking-img">
										<img src="assets/img/services/service-10.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.php">Plumbing Services</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
											</li>
											<li><span>Booking time</span> 09:00:00 - 10:00:00</li>
											<li><span>Amount</span> $50</li>
											<li><span>Location</span> K-JJ, Quezon City, National Capital Region, Filipijnen</li>
											<li><span>Phone</span></li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-03.jpg">
												</div>
												Yolanda Potter
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="javascript:;" class="btn btn-sm bg-danger-light"> <i class="fas fa-times"></i> Cancel the Service</a>
								</div>
							</div>
						</div>
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.php" class="booking-img">
										<img src="assets/img/services/service-11.jpg" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.php">Wooden Carpentry Work</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>
											</li>
											<li><span>Booking time</span> 12:00:00 - 13:00:00</li>
											<li><span>Amount</span> $14</li>
											<li><span>Location</span> 223 Jehovah Drive Roanoke</li>
											<li><span>Phone</span> 412-355-7471</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
												</div>
												Ricardo Flemings
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
									<a href="javascript:;" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Service</a>
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
			
		<!-- Footer -->
		<?php include ('footer.php'); ?>
	
</body>
</html>
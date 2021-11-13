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
									<a href="user-bookings.php" class="nav-link">
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
									<a href="user-payment.php" class="nav-link active">
										<i class="fas fa-hashtag"></i> <span>Payment</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">Payment History</h4>
						<div class="card transaction-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Service</th>
												<th>Customer</th>
												<th>Date</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-03.jpg" class="pro-avatar" alt=""> Electric Panel Repairing Service
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-01.jpg" alt=""> Thomas Herzberg
												</td>
												<td>23 Jul 2020</td>
												<td><strong>$500</strong></td>
												<td><span class="badge bg-danger-light">User Rejected</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-04.jpg" class="pro-avatar" alt=""> Steam Car Wash
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-02.jpg" alt=""> Matthew Garcia
												</td>
												<td>17 Jul 2020</td>
												<td><strong>$399</strong></td>
												<td><span class="badge bg-success-light">Payment Completed</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-05.jpg" class="pro-avatar" alt=""> House Cleaning Services
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-03.jpg" alt=""> Yolanda Potter
												</td>
												<td>16 Jul 2020</td>
												<td><strong>$2</strong></td>
												<td><span class="badge bg-danger-light">Provider Rejected</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-06.jpg" class="pro-avatar" alt=""> Computer & Server AMC Service
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-04.jpg" alt=""> Ricardo Flemings
												</td>
												<td>15 Jul 2020</td>
												<td><strong>$100</strong></td>
												<td><span class="badge bg-danger-light">User Rejected</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-07.jpg" class="pro-avatar" alt=""> Interior Designing
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-05.jpg" alt=""> Maritza Wasson
												</td>
												<td>15 Jul 2020</td>
												<td><strong>$12</strong></td>
												<td><span class="badge bg-danger-light">Provider Rejected</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-08.jpg" class="pro-avatar" alt=""> Building Construction Services
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-06.jpg" alt=""> Marya Ruiz
												</td>
												<td>16 Jul 2020</td>
												<td><strong>$100</strong></td>
												<td><span class="badge bg-danger-light">Provider Rejected</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-09.jpg" class="pro-avatar" alt=""> Commercial Painting Services
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-07.jpg" alt=""> Richard Hughes
												</td>
												<td>16 Jul 2020</td>
												<td><strong>$2</strong></td>
												<td><span class="badge bg-danger-light">Provider Rejected</span></td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);">
														<img src="assets/img/services/service-10.jpg" class="pro-avatar" alt=""> Plumbing Services
													</a>
												</td>
												<td>
													<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-08.jpg" alt=""> Nina Wilson
												</td>
												<td>14 Jul 2020</td>
												<td><strong>$250</strong></td>
												<td><span class="badge bg-danger-light">Provider Rejected</span></td>
											</tr>
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
	<?php include ('footer.php'); ?>
	
</body>
</html>
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

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

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
						<li class="active">
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
						<li>
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
						<div class="col">
							<h3 class="page-title">Ratings</h3>
						</div>
						<div class="col-auto text-right">
							<a class="btn btn-white filter-btn" href="javascript: void(0);" id="filter_search">
								<i class="fas fa-filter"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<!-- Search Filter -->
					<div class="card filter-card" id="filter_inputs">
						<div class="card-body pb-0">
							<form action="#" method="post">
								<div class="row filter-row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Service</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Type</label>
											<select class="form-control select">
												<option>Select Type</option>
												<option>Good</option>
												<option>Very Good</option>
												<option>Poor</option>
												<option>Fair</option>
												<option>Excellent</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>From Date</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>To Date</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<button class="btn btn-primary btn-block" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				<!-- /Search Filter -->
				
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0 datatable">
										<thead>
											<tr>
												<th>#</th>
												<th>Date</th>
												<th>User</th>
												<th>Provider</th>
												<th>Service</th>
												<th>Type Name</th>
												<th>Ratings</th>
												<th>Comments</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>13 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-04.jpg">
														</a>
														<a href="javascript:void(0);">Ricardo Lung</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-04.jpg">
														</a>
														<a href="javascript:void(0);">Ricardo Flemings</a>
													</span>
												</td>
												<td>Steam Car Wash</td>
												<td>Normal</td>
												<td>4.0</td>
												<td>Good Work</td>
												<td class="text-right">
													<a data-id="40" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>12 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-05.jpg">
														</a>
														<a href="javascript:void(0);">Annette Silva</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-05.jpg">
														</a>
														<a href="javascript:void(0);">Maritza Wasson</a>
													</span>
												</td>
												<td>House Cleaning Services</td>
												<td>Excellent</td>
												<td>5.0</td>
												<td>Best Work</td>
												<td class="text-right">
													<a data-id="39" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>11 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-06.jpg">
														</a>
														<a href="javascript:void(0);">Stephen Wilson</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-06.jpg">
														</a>
														<a href="javascript:void(0);">Marya Ruiz</a>
													</span>
												</td>
												<td>Computer & Server AMC Service</td>
												<td>Excellent</td>
												<td>5.0</td>
												<td>Excellent Service</td>
												<td class="text-right">
													<a data-id="38" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>10 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-07.jpg">
														</a>
														<a href="javascript:void(0);">Ryan Rodriguez</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-07.jpg">
														</a>
														<a href="javascript:void(0);">Richard Hughes</a>
													</span>
												</td>
												<td>Room Cleaning</td>
												<td>Excellent</td>
												<td>5.0</td>
												<td>Thanks</td>
												<td class="text-right">
													<a data-id="37" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>9 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-08.jpg">
														</a>
														<a href="javascript:void(0);">Lucile Devera</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-08.jpg">
														</a>
														<a href="javascript:void(0);">Nina Wilson</a>
													</span>
												</td>
												<td>Plumber</td>
												<td>Excellent</td>
												<td>5.0</td>
												<td>Amazing</td>
												<td class="text-right">
													<a data-id="36" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>8 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-09.jpg">
														</a>
														<a href="javascript:void(0);">Roland Storey</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-09.jpg">
														</a>
														<a href="javascript:void(0);">David Morrison</a>
													</span>
												</td>
												<td>Home Appliance Repair</td>
												<td>Normal</td>
												<td>4.0</td>
												<td>Great!</td>
												<td class="text-right">
													<a data-id="35" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>7 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-10.jpg">
														</a>
														<a href="javascript:void(0);">Lindsey Parmley</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-10.jpg">
														</a>
														<a href="javascript:void(0);">Linda Brooks</a>
													</span>
												</td>
												<td>Plumbing Services</td>
												<td>Good</td>
												<td>5.0</td>
												<td>Good Support</td>
												<td class="text-right">
													<a data-id="34" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>8</td>
												<td>6 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-01.jpg">
														</a>
														<a href="javascript:void(0);">Jeffrey Akridge</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
														</a>
														<a href="javascript:void(0);">Thomas Herzberg</a>
													</span>
												</td>
												<td>Toughened Glass Fitting Services</td>
												<td>Good</td>
												<td>4.0</td>
												<td>Goooodddd!!</td>
												<td class="text-right">
													<a data-id="33" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>9</td>
												<td>5 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-02.jpg">
														</a>
														<a href="javascript:void(0);">Nancy Olson</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-02.jpg">
														</a>
														<a href="javascript:void(0);">Matthew Garcia</a>
													</span>
												</td>
												<td>Car Repair Services</td>
												<td>Excellent</td>
												<td>5.0</td>
												<td>Good</td>
												<td class="text-right">
													<a data-id="32" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>10</td>
												<td>4 Sep 2020</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-03.jpg">
														</a>
														<a href="javascript:void(0);">Ramona Kingsley</a>
													</span>
												</td>
												<td>
													<span class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-03.jpg">
														</a>
														<a href="javascript:void(0);">Yolanda Potter</a>
													</span>
												</td>
												<td>Electric Panel Repairing Service</td>
												<td>Nice Work</td>
												<td>4.0</td>
												<td>-</td>
												<td class="text-right">
													<a data-id="31" href="javascript:void(0);" class="btn btn-sm bg-danger-light mr-2 delete_review_comment">	<i class="far fa-trash-alt mr-1"></i> Delete</a>
												</td>
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
	</div>
	
	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script> 

</body>

</html>
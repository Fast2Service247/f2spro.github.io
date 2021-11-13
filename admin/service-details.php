<?php
include('config.php');
session_start();
if($_SESSION['id']=="")
{

 echo '<script> 
 window.location="index.php";
 </script>';
}

include('../config.php');
$id=$_GET['id'];
$qry="select * from add_service where id='".$id."'";
                                $res=mysqli_query($conn, $qry);
                                while($row=mysqli_fetch_array($res))
                                {
                                 $title=$row['title'];
                                $service_amount=$row['service_amount'];
                                $service_location=$row['service_location'];
                                $category=$row['category'];
                                $sub_category=$row['sub_category'];
                                $service_offered=$row['service_offered'];
								$descriptions=$row['descriptions'];
                                $image=$row['image'];
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

	<!-- Owl CSS -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

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
						<li class="active">
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
				<div class="row">
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="service-header">
									<div class="service-inner">
										<h2><?php echo $title; ?></h2>
										<address class="service-location"><i class="fas fa-location-arrow"></i> <?php echo $service_location; ?></address>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="service-cate">
											<a href="javascript:void(0);">Automobile</a>
										</div>
									</div>
									<div class="service-amount">
										<span>$<?php echo $service_amount; ?></span>
									</div>
								</div>
								<div class="service-description">
									<div class="service-images service-carousel">
										<div class="images-carousel owl-carousel owl-theme">
											<div class="item">
												<img src="../assets/upload_img/<?php echo $image; ?>" alt="" class="img-fluid">
											</div>
											<div class="item">
												<img src="../assets/upload_img/<?php echo $image; ?>" alt="" class="img-fluid">
											</div>
											<div class="item">
												<img src="../assets/upload_img/<?php echo $image; ?>" alt="" class="img-fluid">
											</div>
										</div>
									</div>
									<h5 class="card-title">Service Details</h5>
									<p class="mb-0"><?php echo $descriptions; ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card provider-widget clearfix">
							<div class="card-body">
								<h5 class="card-title">Service Provider</h5>
								<div class="about-author">
									<div class="about-provider-img">
										<div class="provider-img-wrap">
											<a href="javascript:void(0);">
												<img class="img-fluid rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
											</a>
										</div>
									</div>
									<div class="provider-details">
										<a href="javascript:void(0);" class="ser-provider-name">Thomas Herzberg</a>
										<p class="last-seen"><i class="fas fa-circle online"></i> Online</p>
										<p class="text-muted mb-1">Member Since Apr 2020</p>
									</div>
								</div>
								<hr>
								<div class="provider-info">
									<p class="mb-1"><i class="far fa-envelope"></i>  <a href="#">thomasherzberg@example.com</a>
									</p>
									<p class="mb-0"><i class="fas fa-phone-alt"></i> xxxxxxxx50</p>
								</div>
							</div>
						</div>
						<div class="card available-widget">
							<div class="card-body">
								<h5 class="card-title">Service Availability</h5>
								<ul>
									<li><span>Monday</span>09:00 AM - 06:00 PM</li>
									<li><span>Tuesday</span>09:00 AM - 06:00 PM</li>
									<li><span>Wednesday</span>09:00 AM - 06:00 PM</li>
									<li><span>Thursday</span>09:00 AM - 06:00 PM</li>
									<li><span>Friday</span>09:00 AM - 06:00 PM</li>
									<li><span>Saturday</span>09:00 AM - 06:00 PM</li>
									<li><span>Sunday</span>09:00 AM - 06:00 PM</li>
								</ul>
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

	<!-- Owl JS -->
	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>

</html>
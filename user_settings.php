<?php 
include('session.php');
$email=$_SESSION['u_email'];
include('config.php');
$qry="select * from user where u_email='".$email."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                             
                                $u_name=$row["u_name"];
                                $u_email=$row['u_email'];
                                $u_mobile_number=$row['u_mobile_number'];
                                $u_password=$row['u_password'];
                                $u_address=$row['u_address'];
                                $u_country=$row['u_country'];
								$u_state=$row['u_state'];
                                $u_city=$row['u_city'];
                                $u_pincode=$row['u_pincode'];
                                $u_image=$row['u_image'];
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
<?php include ('user_style.php'); ?>
<?php include ('style.php'); ?>
<body>
<h1></h1>
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
									<a href="user-dashboard.php" class="nav-link ">	<i class="fas fa-chart-line"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li class="nav-item current">
									<a href="user-bookings.php" class="nav-link">	<i class="far fa-calendar-check"></i>
										<span>My Bookings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-settings.php" class="nav-link active">	<i class="far fa-user"></i>
										<span>Profile Settings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-wallet.php" class="nav-link ">	<i class="far fa-money-bill-alt"></i>
										<span>Wallet</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-reviews.php" class="nav-link ">	<i class="far fa-star"></i>
										<span>Reviews</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-payment.php" class="nav-link ">	<i class="fas fa-hashtag"></i>
										<span>Payment</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-9 col-md-8">
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
												<input class="form-control" type="text" name="u_name" value="<?php echo $u_name; ?>" >
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Email</label>
												<input class="form-control" type="email" name="u_email" value="<?php echo $u_email; ?>">
											</div>

											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Mobile Number</label>
												<input class="form-control no_only" type="text" name="u_mobile_number" value="<?php echo $u_mobile_number; ?>" required pattern="[0-9]{10}">
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Password</label>
												<input type="text" class="form-control" name="u_password" value="<?php echo $u_password; ?>" required>
											</div>
										    <div class="form-group col-xl-12">
												<label class="mr-sm-2">Address</label>
												<input type="text" class="form-control" name="u_address" value="<?php echo $u_address; ?>" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Country</label>
											
													<input type="text" class="form-control" name="u_country" value="<?php echo $u_country; ?>" required>
											</div>
											
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">State</label>
											
													<input type="text" class="form-control" name="u_state" value="<?php echo $u_state; ?>" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">City</label>
											
													<input type="text" class="form-control" name="u_city" value="<?php echo $u_city; ?>" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">PinCode</label>
												<input type="text" class="form-control" name="u_pincode" value="<?php echo $u_pincode; ?>" required>
											</div>
												<div class="form-group col-xl-6">
												<label class="mr-sm-2">Upload Images </label>
												<input type="file" class="form-control datepicker" autocomplete="off" name="u_image" value="<?php echo $u_image; ?>" required>
											</div>
											<div class="form-group col-xl-12">
												<button  id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit" value="submit" name="profile_submit">Update</button>
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
		<?php include ('footer.php'); ?>
	
</body>
</html>
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
									<a href="user-wallet.php" class="nav-link active">
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
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Wallet</h4>
										<div class="wallet-details">
											<span>Wallet Balance</span>
											<h3>₹<?php echo $wallet_amount; ?></h3>
											<div class="d-flex justify-content-between my-4">
												<div>
													<p class="mb-1">Total Credit</p>
													<h4>₹29,720.80</h4>
												</div>
												<div>
													<p class="mb-1">Total Debit</p>
													<h4>₹29,258.00</h4>
												</div>
											</div>
											<div class="wallet-progress-chart">
												<div class="d-flex justify-content-between">
													<span>₹29258</span>
													<span>₹29,720.80</span>
												</div>
												<div class="progress mt-1">
													<div class="progress-bar bg-theme" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width:98%">98.44%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Add Wallet</h4>
										<form action="database.php" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text display-5">₹</label>
													</div>
													<input type="text" id="myBtn" maxlength="4" class="form-control" name="wallet_amount" id="wallet_amt" placeholder="00.00">
												</div>
											</div>
										
										<div class="text-center mb-3">
											<h5 class="mb-3">OR</h5>
											<ul class="list-inline mb-0">
												<li class="line-inline-item mb-0 d-inline-block">
													<a  onclick="myFunction1()" class="updatebtn">₹50</a>
												</li>
												<li class="line-inline-item mb-0 d-inline-block">
													<a  onclick="myFunction2()" data-amount="100" class="updatebtn">₹100</a>
												</li>
												<li class="line-inline-item mb-0 d-inline-block">
													<a  onclick="myFunction3()" data-amount="150" class="updatebtn">₹150</a>
												</li>
											</ul>
										</div>
										<button type="submit" class="btn btn-primary btn-block withdraw-btn" name="wallet_submit">Add to Wallet</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<h4 class="mb-4">Wallet Transactions</h4>
						<div class="card transaction-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-center mb-0">
										<thead>
											<tr>
												<th>S.No</th>
												<th>Date</th>
												<th>Wallet</th>
												<th>Credit</th>
												<th>Debit</th>
												<th>Txt amt</th>
												<th>Available</th>
												<th>Reason</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>22 Jul 2020</td>
												<td>$972.1</td>
												<td>$0</td>
												<td>$100</td>
												<td>$0</td>
												<td>$872.1</td>
												<td>Booked a Service</td>
												<td><span class="badge bg-danger-light">Debit</span></td>
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
	<script>
function myFunction1() {
  document.getElementById("myBtn").value = "50";
}
function myFunction2() {
  document.getElementById("myBtn").value = "100";
}
function myFunction3() {
  document.getElementById("myBtn").value = "150";
}
</script>


	
</body>
</html>
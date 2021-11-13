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
  
  
  <div class="modal account-modal fade show" id="login_modal" aria-modal="true" style="padding-right: 17px; display: block;">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<center><img src="../assets/img/logo.jpeg" class="img-fluid" alt="Logo" style="max-width: 60%"></center>
				<div class="modal-body">
					<div class="login-header text-center">
						<h3>Admin Login </h3>
					</div>
					<hr>
					<form form action="checklogin.php" method="post">
						<div class="form-group form-focus">
							<label class="focus-label">Username</label>
							<input type="text" class="form-control" placeholder="username" name="username" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input type="password" class="form-control" placeholder="********" name="password" required>
						</div>
						
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit">Login</button>
						<div class="text-center login-or">	<span class="or-line"></span><br>
							<span class="span-or text-center">---------------or---------------</span>
						</div>
						
						<div class="text-center dont-have">Forgot Password ? 
						<a  href="javascript:void(0);" data-toggle="modal" data-target="#register_modal" data-dismiss="modal" aria-label="Close">Forgot</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> 
   
   
   
   
   
   
   
   
</body>
</html>

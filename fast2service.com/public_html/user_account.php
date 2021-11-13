<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Fast2Service</title>

	<!-- Favicon -->
	
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	
<style>
    .card1 {
  
    border: 1px solid #c7c1c1;
    border-radius: 6px;
    padding: 15px;
    
}
.hr11 {
    border-bottom: 1px solid #c1c1bb;
    margin-bottom: 6px;
}
</style>
<body>
<div class="container" style="margin-top: 70px; ">
<div class="card1">
<center><img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo" style="max-width: 15%;"></center>    
<center><h2>Select a User Account</h2></center>
<div class="hr11"></div>
<div>   
<form method="post" action="edit_profile.php" enctype="multipart/form-data">
									
									
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Name</label>
												<input class="form-control" type="text" name="u_name" required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Email</label>
												<input class="form-control" type="email" name="u_email" required>
											</div>

											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Mobile Number</label>
												<input class="form-control no_only" type="text" name="u_mobile_number"  required pattern="[0-9]{10}">
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Password</label>
												<input type="text" class="form-control" name="u_password"  required>
											</div>
										    <div class="form-group col-xl-12">
												<label class="mr-sm-2">Address</label>
												<input type="text" class="form-control" name="u_address"  required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">Country</label>
											
													<input type="text" class="form-control" name="u_country"  required>
											</div>
											
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">State</label>
											
													<input type="text" class="form-control" name="u_state"  required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">City</label>
											
													<input type="text" class="form-control" name="u_city"  required>
											</div>
											<div class="form-group col-xl-6">
												<label class="mr-sm-2">PinCode</label>
												<input type="text" class="form-control" name="u_pincode"  required>
											</div>

											<div class="hr11"></div>
											    <center>
												<button  id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit" value="submit" name="user_account">Continue</button>
												<div class="">Already have an account?<a class="" href=""> Sign in</a></div>
                                              	<div id="" class=""><div class="">Buying for work?<a id="" class="" href=""> Create a free business account</a></div></div>
	                                           </center>
										
									
									</form>
									</div></div></div>
									
  </body>
  </html>
  

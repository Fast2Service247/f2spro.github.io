<?php require_once "controllerUserData.php"; ?>

	
	
	
	
	<!-- Provider Register Modal -->
	<div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a Provider</h3>
					</div>
					
					<!-- Register Form -->
					<form  method="post" action="database.php" enctype="multipart/form-data">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" class="form-control" name="p_name" placeholder="Enter your name" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">email-Id</label>
							<input type="email" class="form-control" name="p_email" placeholder="Enter your email" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="number" class="form-control" name="p_mobile_number" placeholder="000 000 0000" required pattern="[0-9]{10}">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" name="p_password" placeholder="Create password" required>
						</div>
						<div class="text-right">
							<a class="forgot-link" href="#">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" value="provider_submit" name="provider_submit">Signup</button>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a  class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /Provider Register Modal -->
	
	<!-- User Register Modal -->
	<div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a User</h3>
					</div>
					
					<!-- Register Form -->
					<form method="post" action="database.php" enctype="multipart/form-data">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" class="form-control" name="u_name" placeholder="Enter your name" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">email-Id</label>
							<input type="email" class="form-control" name="u_email" placeholder="Enter your email" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="number" class="form-control" name="u_mobile_number" placeholder="000 000 0000" required pattern="[0-9]{10}">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" name="u_password" placeholder="Create password" required>
						</div>
						<div class="text-right">
							<a class="forgot-link" href="#">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" value="user_submit" name="user_submit">Signup</button>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /User Register Modal -->
	
	
	
	

	
	
	<!-- Login Modal -->
	<div class="modal account-modal fade" id="login_modal_provider">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Login Provider<span> Fast2Service</span></h3>
					</div>
					<form action="user_checklogin.php" method="post">
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="email" class="form-control" placeholder="info@fast2service.com" name="p_email" required>
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input type="password" class="form-control" placeholder="********" name="p_password" required>
						</div>
						<div class="text-right">	
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="providers_login">Login</button>
						<div class="login-or">	<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">

							<div class="col-12 g-signin2" data-onsuccess="gmailLogIn" data-theme="dark">
							</div>
						</div>
						<div class="text-center dont-have">Don’t have an account? 
						<a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#provider-register" data-dismiss="modal" aria-label="Close">Register</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<!-- Login Modal -->
	<div class="modal account-modal fade" id="login">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Login <span> Fast2Service</span></h3>
						<hr>
					</div>
                <div class="col-lg-12">
<div class="row">
    <img src="./assets/img/category/user1.png" alt="" style="width: 100%;">
	<div class="col-6 col-sm-6 col-md-6 col-lg-6">
		<div class="">
			<center>
			    <!--<img src="https://fast2service.com/assets/img/category/user.png" alt="" style="width: 100%;">-->
			<button type="button" class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-dismiss="modal" data-target="#login_modal_provider">Provider</button></center> 
		</div>
	</div>
	<div class="col-6 col-sm-6 col-md-6 col-lg-6">
		<div class="">
			<center>
			    <!--<img src="assets/img/category/user.png" alt="" style="width: 100%;">-->
			<a href="login-user.php"><button type="button" class="btn btn-primary"  data-dismiss="modal" data-toggle="modal">User</button></a></center>
		</div>
	</div>
</div>
</div>
				</div>
			</div>
		</div>
	</div>
	

	
	<!-- /Login Modal -->
	
	<!--register_modal-->
	<!--<div class="modal account-modal fade" id="register_modal">-->
	<!--	<div class="modal-dialog modal-dialog-centered" style="max-width: 870px;">-->
	<!--		<div class="modal-content">-->
	<!--			<div class="modal-header p-0 border-0">-->
	<!--				<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>-->
	<!--				</button>-->
	<!--			</div>-->
	<!--			<div class="modal-body">-->
	<!--				<div class="login-header">-->
	<!--					<h3>Register <span>Fast2Service</span></h3>-->
	<!--				</div>-->
 <!--                      <hr>-->
	<!--					<form method="post" action="database.php" enctype="multipart/form-data">-->

	<!--						<div class="row">-->
	<!--							<div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Name</label>-->
	<!--								<input class="form-control" type="text" value="" name="name" required>-->
	<!--							</div>-->
 <!--                               <div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Mobile Number</label>-->
	<!--								<input class="form-control no_only" type="number" value="" name="mobile_number" required>-->
	<!--							</div>-->
 <!--                               <div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Email</label>-->
	<!--								<input class="form-control" type="email" value="" name="email" required>-->
	<!--							</div>-->
	<!--							<div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Password</label>-->
	<!--								<input class="form-control" type="password" value="" name="password" required>-->
	<!--							</div>-->
	<!--						    <div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Confirm Password</label>-->
	<!--								<input class="form-control" type="password" value="" name="confirm_password" required>-->
	<!--							</div>-->
 <!--                               <div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Address</label>-->
	<!--								<input type="text" class="form-control" value="" name="address" required>-->
	<!--							</div>-->
	<!--							<div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">Country</label>-->
	<!--								<input type="text" class="form-control" value="" name="country" required>-->
	<!--							</div>-->
	<!--							<div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">State</label>-->
	<!--								<input type="text" class="form-control" value="" name="state" required>-->
	<!--							</div>-->
	<!--							<div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">City</label>-->
	<!--								<input type="text" class="form-control" value="" name="city" required>-->
	<!--							</div>-->
	<!--							<div class="form-group col-xl-6">-->
	<!--								<label class="mr-sm-2">PinCode</label>-->
	<!--								<input type="nem" class="form-control" value="" name="pincode" required>-->
	<!--							</div>-->
	<!--							<div class="form-group col-xl-12">-->
	<!--								<center><button class="btn btn-primary pl-5 pr-5 " type="submit" name="register_submit">Register</button></center>-->
	<!--							</div> -->
	<!--						</div>-->
	<!--					</form>-->

	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	
	
	
	
	
	
	
	<div class="modal account-modal fade" id="register_modal">
		<div class="modal-dialog modal-dialog-centered" >
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Register User<span> Fast2Service</span></h3>
					</div>
                       <hr>
                <form action="form.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
				
					</form>
					
				

				</div>
			</div>
		</div>
	</div>
	<!--/register_modal-->
	
	
	
	<!-- Login Modal -->
	<div class="modal account-modal fade" id="login_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Login User<span> Fast2Service</span></h3>
					</div>
				                <form action="form.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
						<div class="text-center dont-have">Don’t have an account? 
						<a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#register_modal" data-dismiss="modal" aria-label="Close">Register</a>
						</div>
					</form>
				

				<div class="col-6 ml-2">
					
				</div>
			
				</div>
			</div>
		</div>
	</div>
	
	
	

	
	
	
	
	
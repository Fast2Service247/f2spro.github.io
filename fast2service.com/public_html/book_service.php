<?php 

date_default_timezone_set('Asia/Kolkata');
$currentTime = date( ' h:i:s A', time () );
$currentDate = date( 'd-m-Y',  time () );


// include('session.php'); 
$u_email=$_SESSION['u_email'];
$qry="select * from user where u_email='".$u_email."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                         $u_name=$row['u_name'];
                         $u_email=$row['u_email'];
                         $u_mobile_number=$row["u_mobile_number"];
                     }
					 




session_start();
include('config.php');
$id=$_GET['id'];
$qry="select * from add_service where id='".$id."'";
$res=mysqli_query($conn, $qry);
while($row=mysqli_fetch_array($res)){ $service=$row['title'];$amount=$row['service_amount'];$location=$row['service_location']; $descriptions=$row['descriptions'];$image=$row['image'];}



						
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>fast2Service</title>

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
<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<?php include ('header1.php'); ?>
		<!-- /Header -->
		
		<div class="content">
			<div class="container topmargin">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-header text-center">
							<h2>Book Service</h2>
						</div>
						<form action="payment.php" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Service Location <span class="text-danger">*</span></label>
										<input class="form-control"    value="<?php echo $location; ?>" readonly>
									</div>                            
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Service amount</label>
										<input class="form-control"  value="<?php echo $amount; ?>" readonly>
									</div>
								</div>
								<div class="col-lg-6">
								   <div class="form-group">
										<label>Date <span class="text-danger">*</span></label>
										<input class="form-control"  value="<?php echo $currentDate;?>" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Time slot <span class="text-danger">*</span></label>
										<input class="form-control" type="" value="<?php echo $currentTime;?>" required>
          <!--                              <select class="form-control" name="time_slot" required>-->
          <!--hasDatepicker-->
										<!--	<option>10:00 AM</option>-->
										<!--	<option>11:00 AM</option>-->
										<!--	<option>12:00 PM</option>-->
										<!--	<option>01:00 PM</option>-->
										<!--	<option>02:00 PM</option>-->
										<!--	<option>03:00 PM</option>-->
										<!--	<option>04:00 PM</option>-->
										<!--	<option>05:00 PM</option>-->
										<!--	<option>06:00 PM</option>-->
										<!--	<option>07:00 PM</option>-->
										<!--</select>-->
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="text-center">
											<div id="load_div"></div>
										</div>
										<label>Notes</label>
										<textarea class="form-control" value="<?php echo $descriptions; ?>" rows="5"></textarea>
									</div>
								</div>
								<div class="col-lg-6">
								   <div class="form-group">
											<div><img class="img-fluid serv-img" alt="Service Image" src="assets/img/<?php echo $image; ?>"></div>
									</div>
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn" type="submit" name="booking">Continue to Book</button>
							</div>
						</form>
						<!--<form action="payment.php?id=<?php echo $id; ?>" method="POST">-->
      <!--                  <script-->
      <!--                      src="https://checkout.razorpay.com/v1/checkout.js"-->
      <!--                      data-key="rzp_test_ytq3KH7weyHb2f" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys-->
      <!--                      data-amount="100" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.-->
      <!--                      data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account-->
      <!--                      data-id="<?php echo 'OID',rand(10,100).'END'; ?>"//Replace with the order_id generated by you in the backend.-->
      <!--                      data-buttontext="Continue to Book"-->
      <!--                      data-name="fast2service"-->
      <!--                      data-description="fast2service payment"-->
      <!--                      data-image="https://fast2service.com/assets/img/logo.jpeg"-->
      <!--                      data-prefill.name="<?php echo $u_name; ?>"-->
      <!--                      data-prefill.email="<?php echo $u_email; ?>"-->
	     <!--                   data-prefill.contact="<?php echo $u_mobile_number; ?>"-->
      <!--                      data-theme.color="#F37254"-->
      <!--                      ></script>-->
      <!--                      <input type="hidden" custom="Hidden Element" name="booking" value="booking">-->
      <!--                  </form>-->
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer class="footer">
		
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Quick Links  </h2>
								<ul>
									<li>
										<a href="about-us">About Us</a>
									</li>
									<li>
										<a href="contact-us">Contact Us</a>
									</li>
									<li>
										<a href="faq">FAQ</a>
									</li>
									<li>
										<a href="#">Help</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Categories</h2>
								<ul>
									<li>
										<a href="Cleaning">Cleaning</a>
									</li>
									<li>
										<a href="Saloon's">Saloon's</a>
									</li>
									<li>
										<a href="Car-Wash">Car Wash</a>
									</li>
									<li>
										<a href="Electrician">Electrician</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<span><i class="far fa-building"></i></span>
										<p>Near shiv mandir Pratapnagar Udaipur Rajsthan - 313001</p>
									</div>
									<p><i class="fas fa-headphones"></i> 7230879549</p>
									<p class="mb-0"><i class="fas fa-envelope"></i> info@fast2service.com</p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<h2 class="footer-title">Follow Us</h2>
								<div class="social-icon">
									<ul>
										<li>
											<a href="https://www.facebook.com/fast2service" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="https://twitter.com/Fast2Service" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCQlerlaFEySb6MruFzN6iKA" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="https://www.instagram.com/fast2service" target="_blank"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
								<div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                    <button type="submit" class="btn footer-btn">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2021 <a href="home">fast2Service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition.php">Terms and Conditions</a>
										</li>
										<li>
											<a href="privacy-policy.php">Privacy</a>
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
		
	</div>
    

    
    
	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
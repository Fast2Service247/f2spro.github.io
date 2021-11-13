 <?php include('session.php'); ?>
 
<!DOCTYPE html>
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
	
	
	<!--google signin-->
    <meta name="google-signin-client_id" content="343512845962-0e1obh9rto308n4tdh29m11uj13taou8.apps.googleusercontent.com">
     <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</head>
<style>
    .abcRioButton{width: 100%!important;}
	 bar-icon span{background: #cd2121;}
	.search {margin-left: 42px;width: 85%;border: none;}
</style>
<?php include ('style.php'); ?>
<body>

	<!-- Loader -->
	<div class="page-loading">
		<div class="preloader-inner">
			<div class="preloader-square-swapping">
				<div class="cssload-square-part cssload-square-green"></div>
				<div class="cssload-square-part cssload-square-pink"></div>
				<div class="cssload-square-blend"></div>
			</div>
		</div>
	</div>
	<!-- /Loader -->
	
	<div class="main-wrapper">
	
		<!-- Header -->
		<?php include('header1.php');?>
		
		<!-- /Header -->
    	
		<!-- Hero Section -->
		<section class="hero-section">
			<div class="layer">
				<div class="home-banner"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-search">
								<h3>India's Largest <span>FAST2SERVICE</span></h3>
								<p>Find the near by best and fast service</p>
								<div class="search-box">
									<form action="index.php"> 
										<div class="search-input line">
											<i class="fas fa-tv bficon"></i>
											<div class="form-group mb-0">
												<input type="text" class="form-control" name="search" placeholder="What are you looking for?" required>
											</div>
										</div>
										<div class="search-input">
											<i class="fas fa-location-arrow bficon"></i>
											<div class="form-group mb-0">
												<select class="form-control" name="service_location" required>
	                                            <option>Your Location</option>
												<option>Jaipur</option>
												<option>Jodhpur </option>
												<option>Jhunjhunu</option>
												<option>Jaisalmer</option>
												<option>Jalore</option>
												<option>Jhalawar</option>
												<option>Ajmer</option>
												<option>Alwar</option>
												<option>Swai Madhopur</option>
												<option>Shri Ganganagar</option>
												<option>Sirohi</option>
												<option>Sikar</option>
												<option>Karauli</option>
												<option>Kota</option>
												<option>Tonk</option>
												<option>Naguar</option>
												<option>Pali</option>
												<option>Pratapgarh</option>
												<option>Rajsamand</option>
												<option>Udaipur</option>
												<option>Hanumangarh</option>
												<option>Banswara</option>
												<option>Baran</option>
												<option>Barmer</option>
												<option>Bharatpur</option>
												<option>Bhilwara</option>
												<option>Bikaner</option>
												<option>Bundi</option>
												<option>Churu</option>
												<option>Chittorgarh</option>
												<option>Dausa</option>
												<option>Dholpur</option>
												<option>Dungarpur</option>
											</select> 
												<a class="current-loc-icon current_location" href="javascript:void(0);"><i class="fas fa-crosshairs"></i></a>
											</div>
										</div>
										<div class="search-btn">
											<button class="btn search_service" type="submit" name="">Search</button>
										</div>
									</form>
								</div>
								<div class="search-cat">
									<i class="fas fa-circle"></i>
									<span>Popular Searches</span>
									<a href="Electrical-works">Electrical  Works</a>
									<a href="Cleaning">Cleaning</a>
									<a href="Home-Appliance-Repair">Home Appliance Repair</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Hero Section -->
		
		<!-- Category Section -->
		<section class="category-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6">
								<div class="heading">
									<h2>Featured Categories</h2>
									<span>What do you need to find?</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="viewall">
									<h4><a href="categories.php">View All <i class="fas fa-angle-right"></i></a></h4>
									
								</div>
							</div>
						</div>
						<div class="catsec">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<a href="cleaning_categories.php">
										<div class="cate-widget">
											<img src="assets/img/category/logo.jpeg" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i> Cleaning</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-clone"></i> 21
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="soloon_categories">
										<div class="cate-widget">
											<img src="assets/img/category/logo.jpeg" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i>Saloon'M</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-clone"></i> 15
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="soloon_categories">
										<div class="cate-widget">
											<img src="assets/img/category/logo.jpeg" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i>Saloon'W</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-clone"></i> 15
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="#">
										<div class="cate-widget">
											<img src="assets/img/category/logo.jpeg" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i> Finecher</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-clone"></i> 14
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="#">
										<div class="cate-widget">
											<img src="assets/img/category/logo.jpeg" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i> Appliance Repair</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-clone"></i> 10
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="#">
										<div class="cate-widget">
											<img src="assets/img/category/logo.jpeg" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i> Car Wash</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-clone"></i> 8
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Category Section -->
		
		<!-- Popular Servides -->
		<section class="popular-services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6">
								<div class="heading">
									<h2>Most Popular Services</h2>
									<span>Explore the greates our services. You won’t be disappointed</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="viewall">
									<h4><a href="categories">View All <i class="fas fa-angle-right"></i></a></h4>
									
								</div>
							</div>
						</div>
						<div class="service-carousel">
							<div class="service-slider owl-carousel owl-theme">
							
							
							
							 <?php
                             include('config.php');
                             if($_POST['search']!="")
                             {
        

$qry="SELECT * FROM  add_service WHERE  title LIKE  '%".$_POST['search']."%' or service_location LIKE  '%".$_POST['service_location']."%'";
$res=mysqli_query($conn, $qry);
    
       }
       else 
       {

$qry="select * from add_service ORDER BY id DESC";
$res=mysqli_query($conn, $qry);
       }
                                while($row=mysqli_fetch_array($res))
                                {
                                $id=$row['id'];    
                                 $title=$row['title'];
                                $service_amount=$row['service_amount'];
                                $service_location=$row['service_location'];
                                $category=$row['category'];
                                $sub_category=$row['sub_category'];
                                $service_offered=$row['service_offered'];
								$descriptions=$row['descriptions'];
                                $image=$row['image'];
							?>
							
							
								<div class="service-widget">
									<div class="service-img">
										<a href="#">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/upload_img/<?php echo $image; ?>">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-01.jpg" alt="">
												</a>	
												<span class="service-price">$<?php echo $service_amount; ?></span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="#"><?php echo $title; ?></a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-detail"><?php echo $title; ?></a>
										</h3>
										<div class="rating">	
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>		
											<span class="d-inline-block average-rating">(4.3)</span>
										</div>
										<div class="user-info">
											<div class="row">	
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> 
													<span>xxxxxxxx49</span>
												</span>
												<span class="col ser-location">
													<span><?php echo $service_location; ?></span> <i class="fas fa-map-marker-alt ml-1"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
								
								 <?php 
                               }
                            ?>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Servides -->
		
		<!-- How It Works -->
		<section class="how-work">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading howitworks">
							<h2>How It Works</h2>
							<span></span>
						</div>
						<div class="howworksec">
							<div class="row">
								<div class="col-lg-4">
									<div class="howwork">
										<div class="iconround">
											<div class="steps">01</div>
											<img src="assets/img/icon-1.png" alt="">
										</div>
										<h3>Choose What To Do</h3>
										<p></p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="howwork">
										<div class="iconround">
											<div class="steps">02</div>
											<img src="assets/img/icon-2.png" alt="">
										</div>
										<h3>Find What You Want</h3>
										<p>Find the best service near by and fast delivery.</p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="howwork">
										<div class="iconround">
											<div class="steps">03</div>
											<img src="assets/img/icon-3.png" alt="">
										</div>
										<h3>Amazing Places</h3>
										<p></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /How It Works -->
		
		<!-- Footer -->
	<?php include ('footer.php'); ?>
	
</body>
</html>
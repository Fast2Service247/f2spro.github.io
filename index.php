
<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
     <!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192161521-1"></script>-->
<script>
//   window.dataLayer = window.dataLayer || [];
//   function gtag(){dataLayer.push(arguments);}
//   gtag('js', new Date());

//   gtag('config', 'UA-192161521-1');
</script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    





</head>
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
		<?php include('header.php');?>
		
		<!-- /Header -->
    	
		<!-- Hero Section -->
		<section class="hero-section he_banner">
			<div class="layer">
				<div class="home-banner"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-search">
								<h3> <span></span></h3>
								<h3><span id="live">Find the</span> near by best and fast service</h3>
								<div class="search-box">
									<form method="post"> 
										<div class="search-input line">
											<i class="fas fa-tv bficon"></i>
											<div class="form-group mb-0">
												<input type="text" class="form-control" name="search" value="" placeholder="What are you looking for?" required>
											</div>
										</div>
										<div class="search-input">
											<!--<i class="fas fa-location-arrow bficon"></i>-->
											<div class="form-group mb-0">
												<select class="form-control search2" name="location" required>
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
												<!--<a class="current-loc-icon current_location" href="javascript:void(0);"><i class="fas fa-crosshairs"></i></a>-->
												
											</div>
										</div>
										<div class="search-btn">
											<button class="btn search_service" type="submit" name="submit">Search</button>
										</div>
									</form>
								</div>
								<div class="search-cat">
									<!--<i class="fas fa-circle"></i>-->
									<!--<span>Popular Searches</span>-->
									<!--<a href="Electrician.php">Electrical  Works</a>-->
									<!--<a href="cleaning_categories.php">Cleaning</a>-->
									<!--<a href="Home-Appliance-Repair">Home Appliance Repair</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Hero Section -->
		
		 <!--Category Section -->
		<section class="category-section cat">
			<div class="container">
			    	
				<div class="row">
					<div class="col-lg-12">

                        <div class="catsec">
							<div class="row">
								<!--<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">-->
								<!--	<a href="categories.php?service=<?php $massage_men="Massage_Men"; ?>">-->
								<!--		<div class="">-->
								<!--			<img src="assets/img/category/icon1.png" alt="" style="width: 100%;">-->
								<!--		</div>-->
								<!--	</a>-->
								<!--</div>-->
								<!--<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">-->
								<!--	<a href="categories.php?service=<?php $saloon_men="Saloon_Men"; ?>">-->
								<!--		<div class="">-->
								<!--			<img src="assets/img/category/icon2.png" alt="" style="width: 100%;">-->
								<!--		</div>-->
								<!--	</a>-->
								<!--</div>-->
							 <!--   <div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">-->
								<!--	<a href="categories.php?service=<?php $massage_women="Massage_Women"; ?>">-->
								<!--		<div class="">-->
								<!--			<img src="assets/img/category/icon3.png" alt="" style="width: 100%;">-->
								<!--		</div>-->
								<!--	</a>-->
								<!--</div>-->
								<!--<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">-->
								<!--	<a href="categories.php?service=<?php $saloon_women="Saloon_Women"; ?>">-->
								<!--		<div class="">-->
								<!--			<img src="assets/img/category/icon4.png" alt="" style="width: 100%;">-->
								<!--		</div>-->
								<!--	</a>-->
								<!--</div>-->
								<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php $ac_service_repair="AC_Service_and_Repair"; ?>">
										<div class="">
											<img src="assets/img/category/icon5.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
                                <div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?id=<?php echo $appliance_repair="Appliance_Repair"; ?>">
										<div class="">
											<img src="assets/img/category/icon6.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
								<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php echo $Shop_by_products="Shop by products"; ?>">
										<div class="">
											<img src="assets/img/category/shop.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
								<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php echo $cleaning_disinfection="Cleaning_and_Disinfection"; ?>">
										<div class="">
											<img src="assets/img/category/icon8.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
							    <div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php echo $electricions_service="Electricions_Service"; ?>">
										<div class="">
											<img src="assets/img/category/icon9.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
								<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php echo $car_wach_service="Car_Wach_Service"; ?>">
										<div class="">
											<img src="assets/img/category/icon10.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
								<div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php echo $ro_service_repair="RO_Service_Repair"; ?>">
										<div class="">
											<img src="assets/img/category/icon11.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
                                <div class="col-3 col-sm-3 col-md-2 col-lg-2 colsize">
									<a href="categories.php?service=<?php echo $pest_control_service="Pest_Control_Service"; ?>">
										<div class="">
											<img src="assets/img/category/icon12.png" alt="" style="width: 100%;">
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	<!--	 <section class="wrapper cat2">-->
	<!--	 <div class="container">-->
	<!--	  <div class="row">-->
	<!--	  <div class="col-lg-12">-->
 <!--           <div class="carousel owl-carousel">-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon1.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--            <img src="assets/img/category/icon2.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--            <img src="assets/img/category/icon3.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon4.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon5.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon6.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon7.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--            <img src="assets/img/category/icon8.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--            <img src="assets/img/category/icon9.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon10.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon11.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--           <div class="">-->
 <!--             <img src="assets/img/category/icon12.png" alt="" style="width: 100%;">-->
 <!--           </div>-->
 <!--        </div>-->
 <!--     </div>-->
 <!--     </div>-->
 <!--     </div>-->
	<!--</section>	 -->
		
		<section class="wrapper banner1">
		 <div class="container">
		  <div class="row">
		  <div class="col-lg-12">
         <div class="carousel owl-carousel">
            <div class="card card-1">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-2">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-3">
             <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-4">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-5">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
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
						<center><div class="heading2">
									<h2>Popular Products seller</h2>
								
								</div></center>
						</div>
						</div>
						<div class="service-carousel">
							<div class="carousela owl-theme owl-carousel">
							
							
							
							 <?php
                             include('config.php');
                             if(isset($_POST['submit']))
                             {
        

$qry="SELECT * FROM  add_service WHERE  title LIKE  '%".$_POST['search']."%' or service_location LIKE '%".$_POST['location']."%'";
$res=mysqli_query($conn, $qry);
    
       }
       else 
       {

$qry="select * from add_service WHERE  sub_category LIKE 'Shop_by_products' ORDER BY id DESC";
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
                                $discount_amount=$row['discount_amount'];
								$descriptions=$row['descriptions'];
                                $image=$row['image'];
							?>
							
							
								<div class="service-widget">
									<div class="service-img">
										<a href="service_details.php?id=<?php echo $id; ?>">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/<?php echo $image; ?>">
										</a>
										
											
										
									</div>
									<div class="service-content">
									   
										<h3 class="title">
											<a href="service_details.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
										</h3>
										<div class="rating">	
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>		
											<span class="d-inline-block average-rating">(4.3)</span>
										</div>
											
												<span class="col location"><i class="fas fa-map-marker-alt ml-1"></i> <?php echo $service_location; ?></span><br>
										
												<span class="service-price"><strike>₹<?php echo $service_amount; ?></strike>  ₹<?php echo $discount_amount; ?> -(<?php echo $service_offered; ?> Off)</span>
									
										
											
										 
										
										
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
		
		
		
		
		
		
		
		
		
		
			<section class="wrapper banner1">
		 <div class="container">
		  <div class="row">
		  <div class="col-lg-12">
         <div class="carousel owl-carousel">
            <div class="card card-1">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-2">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-3">
             <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-4">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
            <div class="card card-5">
              <img src="assets/img/banner1.jpeg" alt="" style="width: 100%;">
            </div>
         </div>
       </div>
      </div>
      </div>
	</section>
		
		
		
		
		
		
		
			<section class="popular-services">
			<div class="container">
				<div class="row">
					    <div class="col-lg-12">
						<center><div class="heading2">
									<h2>Popular Services provider</h2>
								
								</div></center>
						</div>
						</div>
						<div class="service-carousel">
							<div class="carousela owl-theme owl-carousel">
							
							
							
							 <?php
                             include('config.php');
                             if(isset($_POST['submit']))
                             {
        

$qry="SELECT * FROM  add_service WHERE  title LIKE  '%".$_POST['search']."%' or service_location LIKE '%".$_POST['location']."%'";
$res=mysqli_query($conn, $qry);
    
       }
       else 
       {

$qry="select * from add_service WHERE  sub_category LIKE 'Service provider' ORDER BY id DESC";
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
										<a href="service_details.php?id=<?php echo $id; ?>">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/<?php echo $image; ?>">
										</a>
										
											
										
									</div>
									<div class="service-content">
									   
										<h3 class="title">
											<a href="service_details.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
										</h3>
										<div class="rating">	
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>		
											<span class="d-inline-block average-rating">(4.3)</span>
										</div>
											
												<span class="col location"><i class="fas fa-map-marker-alt ml-1"></i> <?php echo $service_location; ?></span><br>
										
												<span class="service-price"><strike>₹<?php echo $service_amount; ?></strike>  ₹<?php echo $discount_amount; ?> -(<?php echo $service_offered; ?> Off)</span>
									
										
											
										 
										
										
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
	<?php include ('footer.php'); ?>
	
</body>
</html>




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
<?php include ('style.php'); ?>
<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<?php include ('header.php'); ?>
		<!-- /Header -->
		
		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Find a Professional</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="home">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 theiaStickySidebar">
						<div class="card filter-card">
							<div class="card-body">
								<h4 class="card-title mb-4">Search Filter</h4>
								<form id="search_form">
									<div class="filter-widget">
										<div class="filter-list">
											<h4 class="filter-title">Keyword</h4>
											<input type="text" class="form-control" placeholder="What are you looking for?">
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Sort By</h4>
											<select class="form-control selectbox select">
												<option>Sort By</option>
												<option>Price Low to High</option>
												<option>Price High to Low</option>
												<option>Newest</option>
											</select>
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Categories</h4>
											<select class="form-control form-control selectbox select">
												<option>All Categories</option>
												<option>Home Appliance</option>
												<option>Men's Saloon</option>
												<option>Female Saloon's</option>
												<option>Car Wash</option>
												<option>Cleaning & Disinfection</option>
												<option>Electrical</option>
												<option>Plumber</option>
												<option>Carpenter</option>
												<option>Pest Control</option>
											</select>
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Location</h4>
											<input class="form-control" type="text" placeholder="Search Location">
										</div>
									</div>
									<button class="btn btn-primary pl-5 pr-5 btn-block get_services" type="button">Search</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="row align-items-center mb-4">
							<div class="col-md-6 col">
								<h4><span>0</span> Services</h4>
							</div>
							<div class="col-md-6 col-auto">
								<div class="view-icons">
									<a href="javascript:void(0);" class="grid-view active"><i class="fas fa-th-large"></i></a>
								</div>
							</div>
						</div>
						<div>
														<div class="row">
								 <?php

					include('config.php');
                    $service=$_GET['service'];
                    $qry="select * from add_service where sub_category LIKE '".$service."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                                $id=$row['id'];    
                                $title=$row['title'];
                                $p_mobile_number=$row['p_mobile_number'];
                                $service_amount=$row['service_amount'];
                                $discount_amount=$row['discount_amount'];
                                $service_location=$row['service_location'];
                                $category=$row['category'];
                                $sub_category=$row['sub_category'];
                                $service_offered=$row['service_offered'];
								$descriptions=$row['descriptions'];
                                $image=$row['image'];
							?>
					    
								<div class="col-lg-4 col-md-6 pc">
								<a href="#">
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
									<ul>
						    <li><a href="tel:<?php echo $p_mobile_number; ?>"><button type="button" class="btn btn-warning" style="width: 100%;"><img class="" src="" style="margin-bottom: 0px;"><i class="Phone fas fa-phone"></i>   Call Now</button></a>
							
							<!--<a href="#"><button type="button" class="btn btn-warning"><img class="" src="" style="margin-bottom: 0px;"> Get Bast Deal</button></a>-->
							</li>
							
						</ul>
								</div>
									</a> 
								</div>
								
								
								
								
								
								
								
								
								
								
								<!--phone div-->
								
								
								
								<div class="col-12 col-lg-4 col-md-6 phone">
								<a href="#">
                                <div class="service-widget"> 
                                <div class="row">
                                 <div class="col-5">
									<div class="service-img">
										<a href="service_details.php?id=<?php echo $id; ?>">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/<?php echo $image; ?>">
										</a>
									</div>
									</div>
									<div class="col-7">
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
									<ul>
						    <li><a href="tel:<?php echo $p_mobile_number; ?>"><button type="button" class="btn btn-warning" style="width: 100%;"><img class="" src="" style="margin-bottom: 0px;"><i class="Phone fas fa-phone"></i>   Call Now</button></a>
							
							<!--<a href="#"><button type="button" class="btn btn-warning"><img class="" src="" style="margin-bottom: 0px;"> Get Bast Deal</button></a>-->
							</li>
							
						</ul></div></div>
								</div>
									</a> 
								</div>
															
								 <?php 
                               }
                            ?>	
								
								
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
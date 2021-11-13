<?php
include('config.php');
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



	
		<!-- Header -->
		<?php include ('header1.php'); ?>
		<!-- /Header -->
		

		<div class="content">
			<div class="container topmargin">
				<div class="row">
					<div class="col-lg-8">
						<div class="service-view">
							<div class="service-header">
								<h1><?php echo $title; ?></h1>
								<address class="service-location"><i class="fas fa-location-arrow"></i> <?php echo $service_location; ?></address>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<span class="d-inline-block average-rating">(5)</span>
								</div>
								<div class="service-cate">
									<a href="search.php">Automobile</a>
								</div>
							</div>
							<div class="service-images service-carousel">
								<div class="images-carousel owl-carousel owl-theme">
									<div class="item">
										<img src="assets/img/<?php echo $image; ?>" alt="" class="img-fluid">
									</div>
									<div class="item">
										<img src="assets/img/<?php echo $image; ?>" alt="" class="img-fluid">
									</div>
									<div class="item">
										<img src="assets/img/<?php echo $image; ?>" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="service-details">
								<ul class="nav nav-pills service-tabs" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Services Offered</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-book" aria-selected="false">Reviews</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="card service-description">
											<div class="card-body">
												<h5 class="card-title">Service Details</h5>
												<p class="mb-0"><?php echo $descriptions; ?></p>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">Services Offered</h5>
												<div class="service-offer">
													<ul class="list-bullet">
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">
										<div class="card review-box">
											<div class="card-body">
												<!--<div class="review-list">-->
            <!--                                        <div class="review-img">-->
												<!--		<img class="rounded-circle" src="assets/img/customer/user-01.jpg" alt="">-->
												<!--	</div>-->
            <!--                                        <div class="review-info">-->
            <!--                                            <h5>Jeffrey Akridge</h5>-->
            <!--                                            <div class="review-date">August 06, 2020 20:07 pm</div>-->
            <!--                                            <p class="mb-0">Good Work</p>-->
            <!--                                        </div>-->
            <!--                                        <div class="review-count">-->
            <!--                                            <div class="rating">-->
            <!--                                                <i class="fas fa-star filled"></i>-->
												<!--			<i class="fas fa-star filled"></i>-->
												<!--			<i class="fas fa-star filled"></i>-->
												<!--			<i class="fas fa-star filled"></i>-->
												<!--			<i class="fas fa-star filled"></i>	-->
            <!--                                                <span class="d-inline-block average-rating">(5.0)</span>-->
            <!--                                            </div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            
            
            
            
            
            
            
            
            <div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    
	<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
             <form method="post" action="" enctype="multipart/form-data">
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
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
							</div>
						</div>
						<h4 class="card-title">Related Services</h4>
						<div class="service-carousel">
							<div class="popular-slider owl-carousel owl-theme">
								
								 <?php

					include('config.php');
                   
                    $qry="select * from add_service ORDER BY id DESC";
                                $res=mysqli_query($conn, $qry);
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
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-01.jpg" alt="">
												</a>	
												<span class="service-price">$<?php echo $service_amount; ?></span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.php"><?php echo $title; ?></a>
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
					<div class="col-lg-4 theiaStickySidebar">
						<div class="sidebar-widget widget">
							<div class="service-amount">
								<span>$<?php echo $service_amount; ?></span>
							</div>
							<div class="service-book">
								<a href="book_service.php" class="btn btn-primary"> Book Service </a>
							</div>
						</div>
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
									<p class="mb-1"><i class="far fa-envelope"></i> <a href="#">thomasherzberg@example.com</a></p>
									<p class="mb-0"><i class="fas fa-phone-alt"></i> xxxxxxxx33</p>
								</div>
							</div>
						</div>
						<div class="card available-widget">
							<div class="card-body">
								<h5 class="card-title">Service Availability</h5>
								<ul>
									<li><span>Monday</span>9:30 AM - 7:00 PM</li>
									<li><span>Tuesday</span>9:30 AM - 7:00 PM</li>
									<li><span>Wednesday</span>9:30 AM - 7:00 PM</li>
									<li><span>Thursday</span>9:30 AM - 7:00 PM</li>
									<li><span>Friday</span>9:30 AM - 7:00 PM</li>
									<li><span>Saturday</span>9:30 AM - 7:00 PM</li>
									<li><span>Sunday</span>9:30 AM - 7:00 PM</li>
								</ul>
							</div>
						</div>
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
										<a href="about-us.php">About Us</a>
									</li>
									<li>
										<a href="contact-us.php">Contact Us</a>
									</li>
									<li>
										<a href="faq.php">FAQ</a>
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
										<a href="search.php">Cleaning</a>
									</li>
									<li>
										<a href="search.php">Saloon's</a>
									</li>
									<li>
										<a href="search.php">Car Wash</a>
									</li>
									<li>
										<a href="search.php">Electrician</a>
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
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-google"></i></a>
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
									<p class="mb-0">&copy; 2021 <a href="index.php">Fast2Service</a>. All rights reserved.</p>
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
		
<?php include('form.php'); ?>
<script>
	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    // $('#save_review').click(function(){

    //     var user_name = $('#user_name').val();

    //     var user_review = $('#user_review').val();

    //     if(user_name == '' || user_review == '')
    //     {
    //         alert("Please Fill Both Field");
    //         return false;
    //     }
    //     else
    //     {
    //         $.ajax({
    //             url:"submit_rating.php",
    //             method:"POST",
    //             data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
    //             success:function(data)
    //             {
    //                 $('#review_modal').modal('hide');

    //                 load_rating_data();

    //                 alert(data);
    //             }
    //         })
    //     }

    // });
	
	$('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

	</script>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Owl JS -->
	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
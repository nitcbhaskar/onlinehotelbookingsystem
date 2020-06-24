<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Hotel Booking</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>


<?php
	include ('includes/db.php');
?>
<!-- header -->
<div class="banner-top">
		
			
			
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">E   a   s   y <span></span><p class="logo_w3l_agile_caption">Booking System</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item" ><a href="index.php">Home</a></li>
							<li class="menu__item"><a href="#gallery">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" >Rooms</a></li>
							
							<li class="menu__item">
							<?php
								if(isset($_SESSION['c_name']) || isset($_SESSION['uid']))
								{
								?>
										
										<div class="col-sm-12 " style="color:blue;">
											
											<div class="dropdown">
												<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<h4><?php echo  "Hello ".  $_SESSION['c_name']; ?></h4>
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item" href="customer/c_profile.php"><h4>My Profile</h4></a><br>
													<a class="dropdown-item" href="customer/c_logout.php"><h4>Logout</h4></a>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											
										</div>
									</li>
								<?php }
							
							
							 
							else
							{
								?>
								<li class="menu__item"><a href="customer/c_sign_up.php">Sign-up</a></li>
								<li class="menu__item"><a href="customer/c_login.php" >Login</a></li>
								<?php
							}
							
							?>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->

<!-- banner -->
<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Star Hotel</h4>
									<h3>We know what you love</h3>
										<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
				
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Star Hotel</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
				
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Star Hotel</h4>
								<h3>want luxurious vacation?</h3>
										<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
											
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
<!-- Modal1 -->
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">	
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Resort <span>Inn</span></h4>
				<img src="images/1.jpg" alt=" " style="max-widthf"class="img-responsive">
				<h5>We know what you love</h5>
				<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<div id="availability-agileits">
	<div class="col-md-3 book-form-left-w3layouts">
		<h2>CHECK AVAILABILITY</h2>
	</div>
	<div class="col-md-9 book-form">
		<form action="search_result.php" method="post" enctype="multipart/form-data">
			<div class="fields-w3ls form-left-agileits-w3layouts ">
				<p>City</p>
				<input   name="city" type="text"   placeholder="Enter City" required="">
			</div>
			<div class="fields-w3ls form-left-agileits-w3layouts ">
				<p>Room Type</p>
				<select class="form-control" name="type">
					<option>Select a Room</option>
					<option>Luxury Room</option>
					<option>Deluxe Room</option>
					<option>Single Room</option>
					<option>Double Room</option>
				</select>
			</div>
			<div class="fields-w3ls form-date-w3-agileits">
				<p>Arrival Date</p>
					<input  id="datepicker1" name="check_in" autocomplete="off" type="text" value="Select Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="fields-w3ls form-date-w3-agileits">
				<p>Departure Date</p>
				<input  id="datepicker2" autocomplete="off" name="check_out" type="text" value="Select Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			
			<div class="form-date-w3-agileits" style="float: right; width: 72%;">
			<button type="submit" name="check-availability" class="btn btn-primary" style="font-size: 23px; padding: 6px 27px">Check Availability</button>
			</div>
            	
		

			

			
		</form>
	</div>
</div>


<!-- Gallery -->

<section class="portfolio-w3ls" id="gallery">

		 <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
		 
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Resort Inn</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
<!-- rooms & rates -->
<div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
						<div class="priceing-table-main">
						<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Luxury Room</h4>
						</div>
						<div class="price-gd-bottom">
							
							<div class="price-selet">
								
								<a href="#availability-agileits" class="scroll" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Luxury Room</h4>
						</div>
						<div class="price-gd-bottom">
							
							<div class="price-selet">
								
								<a href="#availability-agileits" class="scroll" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Guest House</h4>
						</div>
						<div class="price-gd-bottom">
							
							<div class="price-selet">
								
								<a href="#availability-agileits" class="scroll" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Single Room</h4>
						</div>
						<div class="price-gd-bottom">
							
							<div class="price-selet">
								
								<a href="#availability-agileits" class="scroll" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--// rooms & rates -->



<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>	
<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>



</html>
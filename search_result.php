<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Booking System</title>
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
	include('includes/db.php');
?>

<!-- header -->
<div class="banner-top">
			<div class="contact-bnr-w3-agile">
				<ul>
					
				</ul>
			</div>
			
			</div>
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
						
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->		
	
<hr>

<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Resort <span>Inn</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>We know what you love</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-3 book-form-left-w3layouts">
	<h2> AVAILABILITY</h2>
</div>
<div class="col-md-9 book-form">
			   <form action="search_result.php" method="post" enctype="multipart/form-data">
			   		<div class="fields-w3ls form-left-agileits-w3layouts ">
			   			<p>City</p>
			   			<input  disabled value=" <?php echo $_POST['city'];?>"  >
			   		</div>
					<div class="fields-w3ls form-left-agileits-w3layouts ">
							<p>Room Type</p>
							<input  disabled value="<?php echo $_POST['type']; ?>"   >
					</div>
					<div class="fields-w3ls form-date-w3-agileits">
						        <p>Arrival Date</p>
									<input disabled value="<?php echo $_POST['check_in']; ?>"  >
								</div>
								<div class="fields-w3ls form-date-w3-agileits">
						        <p>Departure Date</p>
									<input  disabled value="<?php echo $_POST['check_out']; ?>"  >
								</div>
					
					
				</form> 
			</div>
			<div class="clearfix"> </div>
</div>

<!-- Gallery -->

<!-- //gallery -->
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">HOTELS</h3>
						<div class="priceing-table-main">
                        <?php


if(isset($_POST['check-availability']))
{
	//echo "Test";  exit;
    $city=$_POST['city'];
    $type= $_POST['type'];
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];

    //$qry = "SELECT * FROM hotels WHERE `h_city`='$city'  ";
    //echo $selectHotelQuery = "SELECT * FROM hotels WHERE h_city like '%$city%'";
    // $qry = "SELECT h_name FROM `hotels`,`rooms` ON hotels.h_id = rooms.h_id;";
    //  $qry  = 'SELECT * FROM rooms WHERE r_id NOT IN
    //         (SELECT r_id FROM booking WHERE  "'.$check_in.'"  
    //         BETWEEN check_in AND check_out OR "'.$check_out.'"  BETWEEN check_in AND check_out)';

	$qry = "SELECT distinct hotels.h_id ,h_name,h_image FROM hotels, rooms WHERE hotels.h_id=rooms.h_id AND hotels.h_city = '$city' AND rooms.r_type='$type' AND rooms.status='V' AND '$check_in' BETWEEN rooms.check_in AND rooms.check_out AND '$check_out'  BETWEEN rooms.check_in AND rooms.check_out";
	
	//echo $qry;
	$run = mysqli_query($con,$qry);

	
    $row = mysqli_num_rows($run);
    if($row < 1)
    {
        ?>
		 <div class="col-md-3 price-grid">Hotel Not Found In This City</div>
        <!-- <script>
            alert('Hotel Not Found In This City');
            //window.open('index.php','_self');
        </script> -->
        <?php
    }
    
    else
    {
		$i = 0;
        while($data = mysqli_fetch_assoc($run))
        {
			$i++;
        ?>
				 <div class="col-md-3 price-grid">
				 <div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/<?php echo $data['h_image'];?>" style="min-height:150px;min-width:150px;max-height:150px;max-width:150px;  class="img-responsive"/>
								 
								<h3 style="margin-right:10px;"><?php echo $type; ?></h3>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<!-- <ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul> -->
							</div>
							<div class="price-selet">	
								<h3><?php echo  $data['h_name'];?></h3><br>

								<a href="room_listing.php?h_id=<?php echo $data['h_id'];?>&city=<?php echo $city;?>&type=<?php echo $type;?>&check_in=<?php echo $check_in;?>&check_out=<?php echo $check_out;?>" >Book Room</a>
									
									
								
							</div>
						</div>
					</div>
					<!-- <div class="price-block agile">
						<div class="price-gd-top">
						    <img src="images/<?php echo $data['h_image'];?>" style="max-height:250px;max-width:250px;min-height:250px:min-width:250px" class="img-responsive" />
							
						</div>
						<div class="price-gd-bottom">
							   
							<div class="price-selet">	
								<?php echo $data['h_name'];?>
								<a href="room_listing.php" class="scroll" >Book Now </a>
							</div>
						</div>
					</div> -->
				</div>
				<?php  if($i % 4 == 0){ echo "<div>&nbsp;</div>"; } ?>
				<?php } } } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	 <!--// rooms & rates -->

<!-- contact -->


			

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
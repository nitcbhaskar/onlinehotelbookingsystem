<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Resort Inn a Hotel Category Flat Bootstrap Responsive  Website Template | Home :: W3layouts</title>
<!-- for-mobile-apps -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>


<?php
	include ('../includes/db.php');
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
					<h1><a class="navbar-brand" href="../index.php">E   a   s   y <span></span><p class="logo_w3l_agile_caption">Booking System</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						
							<?php
								if(isset($_SESSION['c_name']) || isset($_SESSION['uid']))
								{
									
									
									
								?>
									<div class="col-sm-12 " style="color:blue;">
										<div class="dropdown">
												<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<h4><?php echo  "Hello ".$_SESSION['c_name']; ?></h4>
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item" href="c_profile_edit.php?u_id=<?php echo $_SESSION['uid'];?>"><h4>Edit Profile</h4></a><br>
													<a class="dropdown-item" href="c_logout.php"><h4>Logout</h4></a>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											
										</div>
									</li>
								<?php
								 }
							
							
							 
							else
							{
								?>
								<li class="menu__item"><a href="customer/c_sign_up.php">Sign-up</a></li>
								<li class="menu__item"><a href="customer/c_login.php" >Login</a></li>
								<?php
							}
							
							?>
					
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->


<br>

					
<?php 
	

	$sql = "SELECT booking.c_email,booking.c_name,booking.h_name,booking.booking_date,booking.check_in,booking.check_out,booking.h_id,booking.r_id,booking.booking_id FROM booking LEFT JOIN customer ON booking.customer_id = customer.c_id WHERE  
	booking.customer_id= '".$_SESSION['uid']."'";	
	
	
	$run = mysqli_query($con,$sql);
    $row = mysqli_num_rows($run);
	//echo $row;

    if($row >=1 )
    {
		
    ?>
    <body>
        <div class="container">
        <table class="table table-hover">   
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Hotel Name</th>
                    <th>Hotel City</th>
                    <th>Booking Date</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
			</thead>
			<tbody>
				<thead>
        
        <?php 
        while($data = mysqli_fetch_assoc($run))
        {
            $qry = "SELECT h_city FROM `hotels` WHERE `h_id` = $data[h_id]";
            $run_1 = mysqli_query($con,$qry);
            $data_1 = mysqli_fetch_assoc($run_1);
            ?>
            
                                <tr>
                                    <td><?php echo $data['c_email'];?></td>
                                    <td><?php echo $data['h_name'];?></td>
                                    <td><?php echo $data_1['h_city'];?></td>
                                    <td><?php echo $data['booking_date'];?></td>
                                    <td><?php echo $data['check_in'];?></td>
									<td><?php echo $data['check_out'];?></td>
									<td><a href="c_cancel_booking.php?r_id=<?php echo $data['r_id'];?>&booking_id=<?php echo $data['booking_id'];?>"><h4>Cancel Booking</h4></a></td>
									<td><a href="c_feedback.php?r_id=<?php echo $data['r_id'];?>&booking_id=<?php echo $data['booking_id'];?>&h_id=<?php echo $data['h_id'];?>"><h4>feedback</h4></a></td>
									
                                </tr>
                           
           
            <?php
        }


}
?>

</table>

							 
						
							
			

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
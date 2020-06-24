<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resort Inn a Hotel Category Flat Bootstrap Responsive  Website Template | Home :: W3layouts</title>
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
	session_start();
	include ('includes/db.php');
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
	
<br>

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
	<h2>CHECK AVAILABILITY</h2>
</div>
<div class="col-md-9 book-form">
			   <form action="search_result.php" method="GET" enctype="multipart/form-data">
			   		<div class="fields-w3ls form-left-agileits-w3layouts ">
			   			<p>City</p>
			   			<input  disabled value="<?php echo $_GET['city']; ?>"  >
			   		</div>
					<div class="fields-w3ls form-left-agileits-w3layouts ">
							<p>Room Type</p>
							<input  disabled value="<?php echo $_GET['type']; ?>"  >
					</div>
					<div class="fields-w3ls form-date-w3-agileits">
						        <p>Arrival Date</p>
									<input  disabled value="<?php echo $_GET['check_in']; ?>"  >>
								</div>
								<div class="fields-w3ls form-date-w3-agileits">
						        <p>Departure Date</p>
									<input disabled value="<?php echo $_GET['check_out']; ?>"  >>
								</div>
					
					
				</form>
			</div>
			<div class="clearfix"> </div>
</div>

<div class="container">
<?php 
    include ('includes/db.php');
    $hotelid = $_GET['h_id'];
	$city = $_GET['city'];
	$type= $_GET['type'];
    $check_in=$_GET['check_in'];
    $check_out=$_GET['check_out'];    

    $qry = "SELECT * FROM `rooms` WHERE `h_id`='$hotelid' AND `r_type`='$type'  AND `status` = 'V'";

	$run = mysqli_query($con,$qry);
	
	$row = mysqli_num_rows($run);
    if($row >=1)
    {
		?>
		<table class="table">
 		 <thead>
			<!-- <tr>
			<th scope="col">Image</th>
			<th scope="col">Room Type</th>
			<th scope="col">Price</th>
			</tr> -->
		</thead>
		<tbody>
  		<?php
		while($data = mysqli_fetch_assoc($run))
		{
       	?>
  		<tr>
			<td><img src="images/<?php echo $data['image_1'];?>"  style="min-height:150px;min-width:150px;max-height:150px;max-width:150px; "class="img-responsive" style="max-width:250px; max-height:250px; min-width:250px:min-	height:250px;"/></td>	
			<td><img src="images/<?php echo $data['image_2'];?>"  style="min-height:150px;min-width:150px;max-height:150px;max-width:150px; "class="img-responsive" style="max-width:250px; max-height:250px; min-width:250px:min-	height:250px;"/></td>	
			<td><img src="images/<?php echo $data['image_3'];?>"  style="min-height:150px;min-width:150px;max-height:150px;max-width:150px; "class="img-responsive" style="max-width:250px; max-height:250px; min-width:250px:min-	height:250px;"/></td>	
			<td><?php echo $data['r_type'];?></td>
			<td><?php  echo $data['r_charge'];?></td>
			
			<?php
				// $obj = "SELECT count(`status`) FROM `feedback` WHERE `status`=1 ";
				// $obj_run = mysqli_query($con,$obj);
				// $data_obj_run = mysqli_num_rows($obj_run);

				// if($data_obj_run >= '1' )
				// {
					$obj_1 = "SELECT count(`r_id`) FROM `feedback` WHERE `h_id`='$hotelid'";
					$run_1 = mysqli_query($con,$obj_1);
				
					if($obj_1 >= 1)
					{
						

					$qry_1 = "SELECT `star` FROM `feedback` WHERE `h_id`='$hotelid' AND `r_id`='".$data_1['r_id']."'" ;
					$run_2 = mysqli_query($con,$qry_1);
					$data_2 = mysqli_fetch_assoc($run_2);
					?>
					<td>
						<?php
							$star = $data_2['star'];
							
								for($i=1; $i <= $star; $i++)
								{
									echo '<i class="fa fa-star" aria-hidden="true"></i>';	
								}
								$j = $i;
								while($j <=5)
								{
									?><i class="fa fa-star-o" aria-hidden="true"></i>
									<?php 
									$j++;
								}
					}
				
				else
				{
					?>
					<td>
					<?php
					echo '<i class="fa fa-star" aria-hidden="true"></i>';	
					echo '<i class="fa fa-star" aria-hidden="true"></i>';	
					echo '<i class="fa fa-star" aria-hidden="true"></i>';	
					echo '<i class="fa fa-star" aria-hidden="true"></i>';	
					echo '<i class="fa fa-star" aria-hidden="true"></i>';	
					?>
					</td><?php
				} 
		
				?>
				</td>
			
			<?php
			if( isset($_SESSION['uid']))
			{
			?>
			<td><a href="book_room.php?h_id=<?php echo $data['h_id'];?>&r_no=<?php echo $data['r_no'];?>&city=<?php echo $city;?>&type=<?php echo $type;?>&check_in=<?php echo $check_in;?>&check_out=<?php echo $check_out;?>"><h3>Book Room</h3></a></td>
			<?php
			}
			else
			{
				?>
				<script>
					alert('First Login Then Continue The Booking');
					window.open('customer/c_login.php','_self');
				</script>
		<?php
			} ?>
			</tr>
				<?php 
			} 
		}		
?>
  </tbody>
</table>
 
</div>
			

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

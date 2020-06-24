<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

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
    
    //$c_id = $_GET['u_id'];
    
    
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
												<h4><?php echo  "Hello ".  $_SESSION['c_name']; ?></h4>
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="c_logout.php"><h4>Logout</h4></a>
													
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											
										</div>
								</li>
                                

								<?php
                                 }
                            ?>
						
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
    <div class="jumbotron text-center">
        <h3 align="center">Update form</h3>
    </div>
    
    <?php 
    
     $qry = "SELECT * FROM customer WHERE `c_id`= '".$_SESSION['uid']."'";
    $run = mysqli_query($con,$qry);
    
    $data = mysqli_fetch_assoc($run);  
    
    ?>

<form class="form-horizontal" method="POST" action="c_profile_edit.php" style="width: 70%; float: right;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
	  <input class="form-control" type="email" name="email" value="<?php  echo $data['c_email']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name :</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="name" value =<?php  echo $data['c_name']; ?>  >
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Father's Name</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="f_name" value =<?php echo $data['c_fathers_name']; ?>>
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact</label>
      <div class="col-sm-4">          
        <input  type="number" class="form-control" name="contact" value =<?php  echo $data['contact_no']; ?> >
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">address</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="address" value =<?php  echo $data['address']; ?>>
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">password</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control"  name="password" value =<?php  echo $data['password']; ?>>
      </div>
	</div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
	    <input type="submit" name="submit" value="Submit">
      </div>
    </div>
  </form>



<?php
 
    //  $c_id = $_GET['u_id'];
    if(isset($_POST['submit']))
    {
         $email=$_POST['email'];
        $name=$_POST['name'];
        $f_name=$_POST['f_name'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        
         $sql = "UPDATE `customer` SET `c_email`='$email',`c_name`='$name',`c_fathers_name`='$f_name',`contact_no`='$contact',`address`='$address',`password`='$password' WHERE `c_id`='".$_SESSION['uid']."' ";
        
        
        $run = mysqli_query($con,$sql);
        if($run == true)
        {
            ?>
            <script>
                alert('You profile has been successfully updated!'); 
                window.open('../index.php','_self');
            </script>
            <?php
        }
    }
    



?>






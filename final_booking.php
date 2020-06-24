<?php
include ('includes/db.php');
	session_start();

    if(isset($_POST['submit']))
    {
        
    
	$qry = "SELECT h_name FROM `hotels` WHERE `h_id` = '".$_POST['h_id']."'"; 
	$run = mysqli_query($con,$qry);
	$data = mysqli_fetch_assoc($run);

	$qry_1 = "SELECT r_id FROM `rooms` WHERE `h_id` = '".$_POST['h_id']."' AND `r_no`='".$_POST['roomnumber']."'"; 
	$run_1 = mysqli_query($con,$qry_1);
	$data_1= mysqli_fetch_assoc($run_1);
    
	
	
	$qry_2 = "SELECT  c_name,c_email FROM `customer` WHERE `c_id`= '".$_SESSION['uid']."'";
	$run_2 = mysqli_query($con,$qry_2);
	$data_2 = mysqli_fetch_assoc($run_2);

    
        $email=$data_2['c_email'];
        $name=$_POST['name'];
        $bookingdate=$_POST['booking_date'];
        $check_in = $_POST['check_in'];
		$check_out = $_POST['check_out'];
		$hotelid = $_POST['h_id'];
        $hname=$data['h_name'];
		$r_id= $data_1['r_id'];
		$roomnumber = $_POST['roomnumber'];
        $payment = "COD";
        $var = $check_in;
        $var_1 = $check_out;
        $finalcheck_in = date("Y-m-d", strtotime($var) );
        $finalcheck_out = date("Y-m-d", strtotime($var_1) );

        
		
        $qry = "INSERT INTO `booking`(`customer_id`,`c_email`, `c_name`, `booking_date`, `check_in`, `check_out`, `h_id`, `h_name`, `r_id`, `r_no`, `payment`) VALUES ('".$_SESSION['uid']."','$email','$name','$bookingdate','$finalcheck_in','$finalcheck_out','$hotelid','$hname','$r_id','$roomnumber','$payment')";    
        
        $sql ="UPDATE `rooms` SET `check_in`='$finalcheck_in',`check_out`='$finalcheck_out',`status`='B' WHERE `h_id`='$hotelid' AND `r_id`='$r_id' AND `r_no`='$roomnumber'";
        
        $run = mysqli_query($con,$qry);
        $run_1 = mysqli_query($con,$sql);

        if($run == true)
        {
            
            $booking_customer_id = $_SESSION['uid'];
            $_SESSION['booking_customer_id'] = $booking_customer_id;
            ?>
            <script>
                alert('Data Inserted Successfully'); 
			
				window.open('customer/c_profile.php','_self');
            </script>
            <?php
        }
        else{
            echo "fail";
        }
    }
?>
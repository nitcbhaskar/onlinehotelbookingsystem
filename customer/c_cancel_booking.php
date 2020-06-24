<?php
session_start();
?>
<?php
    include ('../includes/db.php');
    
    $r_id = $_GET['r_id'];
    $booking_id = $_GET['booking_id'];

    $sql = "UPDATE `rooms` SET `check_in`= NULL,`check_out`= NULL,`status`='V' WHERE `r_id`='$r_id'";
    $run = mysqli_query($con,$sql);

    $qry = "DELETE FROM `booking` WHERE `booking_id`='$booking_id'";
    $run_1 = mysqli_query($con,$qry);
    ?>
    <script>
        alert('Booking Cancel');
        window.open('c_profile.php','_self');
    </script>
    <?php
?>


<?php
session_start();

    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location: login.php');
    }

?>

<?php
    $hotelid = $_GET['h_id'];
?>

<?php
    include ('../includes/db.php');
    $qry = "DELETE FROM `hotels` WHERE `h_id`= $hotelid ";
    //echo $qry;exit;
    $run = mysqli_query($con,$qry);

    if($run == true)
    {
        ?>
        <script>
            alert('Data deleted Successfully'); 
            window.open('hotel_manager_dashboard.php','_self');
        </script>
        <?php
    }

   
?>






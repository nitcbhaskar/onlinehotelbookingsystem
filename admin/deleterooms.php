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
$roomid = $_GET['r_id'];
?>


<?php
    include ('../includes/db.php');
    if(isset($_GET['r_id'])){
    $roomid = $_GET['r_id'];
    $qry = "DELETE FROM `rooms` WHERE `r_id`= '$roomid';";
    $run = mysqli_query($con,$qry);

    if($run == true)
    {
        ?>
        <script>
            alert('Data deleted Successfully'); 
            window.open('room_manager_dashboard.php','_self');
        </script>
        <?php
    }
}
?>






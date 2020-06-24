<?php

include('../includes/db.php');

    $id = $_REQUEST['id'];
    
    $qry = "DELETE FROM `hoteldetail` WHERE `id`='$id';";
    
    $run = mysqli_query($con,$qry);

    if($run == true)
    {
        ?>
        <script>
            alert('Data deleted Successfully'); 
            window.open('deletehotels.php','_self');
        </script>
        <?php
    }
    

?> 
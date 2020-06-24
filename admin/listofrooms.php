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
    $hotelid = $_GET['id'];
?>
<html>
<head>
    <title>List Of Rooms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="jumbotron text-center">
        <h1 align="center">List of Rooms</h1>
        <form method="POST" action="room_manager_dashboard.php" style="float:left;margin-left:10px;">
            <button type="submit" class="btn btn-primary" >Back to Room Manager</button>
        </form>
    </div>

    <table align ="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;"> 
        <th>hotel Id</th>
        <th>Room Id</th>
        <th>Room Number</th>
        <th>Room Type</th>
        <th>Room Charge</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th>Image</th>
        <th>Image</th>
        <th>Image</th>
        <th>Delete Room</th>
    </tr>

<?php
   
        include('../includes/db.php');
       
        $qry="SELECT * FROM `rooms` WHERE `h_id`='$hotelid' ";
        
        $run = mysqli_query($con,$qry);
        
        if(mysqli_num_rows($run) <1)
        {
            echo "<tr><td colspan='15' align='center'><h2>No Records Found<h2></td></tr>";
        }
        else
        {
            $count = 0;
            while($data = mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
                <tr align="center">
                    <td><?php  echo $data['h_id']; ?></td>   
                    <td><?php  echo $data['r_id']; ?></td>
                    <td><?php  echo $data['r_no']; ?></td>
                    <td><?php  echo $data['r_type']; ?></td>
                    <td><?php  echo $data['r_charge']; ?></td>
                    <td><?php  echo $data['check_in']; ?></td>
                    <td><?php  echo $data['check_out']; ?></td>
                    <td><img src="../images/<?php echo $data['image_1'];?>" alt="not avaiable" style="max-width:100px;"/></td>
                    <td><img src="../images/<?php echo $data['image_2'];?>" alt="not avaiable" style="max-width:100px;"/></td>
                    <td><img src="../images/<?php echo $data['image_3'];?>" alt="not avaiable" style="max-width:100px;"/></td>
                    <td><a  href="deleterooms.php?h_id=<?php echo $data['h_id']; ?>&r_id=<?php echo $data['r_id']; ?>">Delete Rooms</a></td>

                </tr>


                <?php
            }
        }
    

?>
</table>


</body>
</html>
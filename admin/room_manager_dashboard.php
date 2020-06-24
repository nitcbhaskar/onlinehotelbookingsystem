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
<html>
    <head>
        <title>Room Manager </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
<body>
    <div class="jumbotron text-center">
        <h1 align="center">List of All Hotels for Adding Rooms/Deleting rooms</h1>
    </div>
    <form method="POST" action="admin_manager.php" style="float:left;margin-left:10px;">
        <button type="submit" class="btn btn-primary" >Back to Admin Manager</button>
    </form>
    <br>
    <table align ="center" width="80%" border="1" style="margin-top:10px;">
        <tr style="background-color:#000; color:#fff;"> 
        <th>id</th>
        <th>name</th>
        <th>country</th>
        <th>state</th>
        <th>city</th>
        <th>street</th>
        <th>pincode</th>
        <th>contact no</th>
        <th>email</th>
        <th>owner</th>
        <th>rating</th>
        <th>facilities</th>
        <th>image</th>
        <th> Add Rooms</th>
        <th>List Of Rooms</th>
    </tr>

    <?php
   
        include('../includes/db.php');
       
        $qry="SELECT * FROM `hotels`";
        
        $run = mysqli_query($con,$qry);
        
        if(mysqli_num_rows($run) <1)
        {
            echo "<tr><td colspan='15' align='center'>No Records Found</td></tr>";
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
                    <td><?php  echo $data['h_name']; ?></td>
                    <td><?php  echo $data['h_country']; ?></td>
                    <td><?php  echo $data['h_state']; ?></td>
                    <td><?php  echo $data['h_city']; ?></td>
                    <td><?php  echo $data['h_street']; ?></td>
                    <td><?php  echo $data['h_pincode']; ?></td>
                    <td><?php  echo $data['h_contact_no']; ?></td>
                    <td><?php  echo $data['h_email']; ?></td>
                    <td><?php  echo $data['h_owner_name']; ?></td>
                    <td><?php  echo $data['h_rating']; ?></td>
                    <td><?php  echo $data['h_facilities']; ?></td>
                    <td><img src="../images/<?php echo $data['h_image'];?>" style="max-width:100px;"/></td>
                    <td><a  href="addrooms.php?id=<?php echo $data['h_id'];?>">Add Rooms</a></td>
                    <td><a  href="listofrooms.php?id=<?php echo $data['h_id'];?>">List Of Rooms</a></td>

                </tr>

            <?php
                
            }
        }
?>

</table>

</body>
</html>



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
        <h1 align="center">Feedback Manager</h1>
    </div>
    <form method="POST" action="admin_manager.php" style="float:left;margin-left:10px;">
        <button type="submit" class="btn btn-primary" >Back to Admin Manager</button>
    </form>
    <br>
    <table align ="center" width="80%" border="1" style="margin-top:10px;">
        <tr style="background-color:#000; color:#fff;"> 
        
        <th>Room Id</th>
        <th>hotel Name</th>
        <th>Customer Name</th>
        <th>Star</th>
        <th>Summary</th>
        <th>Date</th>
        <th>Status</th>
        <th></th>
    </tr>

    <?php
   
        include('../includes/db.php');
       
        $qry="SELECT * FROM `feedback` ;";
        
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
                $sql = "SELECT `h_name` FROM `hotels` WHERE `h_id`='".$data['h_id']."'";
                $run_1 = mysqli_query($con,$sql);
                $data_1 = mysqli_fetch_assoc($run_1);

                $sql_1 = "SELECT `c_name`FROM `customer` WHERE `c_id`='".$data['c_id']."'";
                $run_2 = mysqli_query($con,$sql_1);
                $data_2 = mysqli_fetch_assoc($run_2);
                $count++;
                ?>
                <tr align="center">
                    <td><?php  echo $data['r_id']; ?></td>   
                    <td><?php  echo $data_1['h_name']; ?></td>
                    <td><?php  echo $data_2['c_name']; ?></td>
                    <td><?php  echo $data['star']; ?></td>
                    <td><?php  echo $data['summary']; ?></td>
                    <td><?php  echo $data['date']; ?></td>
                    <td><?php  echo $data['status']; ?></td>
                    <td>
                        <button onclick="myFunction()"> Approve</button>
                        <p id="demo"></p>
                        <script>
                            function myFunction() {
                                alert('Are You Sure !');
                                <?php
                                    $sql_3 = "UPDATE `feedback` SET `status`=1 WHERE `id`='".$data['id']."' ";
                                    $run_3 = mysqli_query($con,$sql_3);

                                ?>
                            }   
                        </script>
                    </td>
                </tr>

            <?php
                
            }
        }
?>

</table>

</body>
</html>



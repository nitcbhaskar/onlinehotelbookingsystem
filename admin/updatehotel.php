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
    include('header.php');
    include('titlehead.php');
?>
   



<table align="center" style="margin-top:20px;">
    <form action="updatehotel.php" method="post">
        <tr>
            <th>Enter Hotel Name</th>
            <td><input type="text" name="hotelname" placeholder="Enter Hotel Name" required /></td>
        
            <th>Enter Address</th>
            <td> <input type="text" name="address" placeholder="Enter Address" required /></td>
       
       
            <td colspan="2"><input type="submit" name="submit" value="Search"></td>
        </tr>
        
       
     </form>
</table>
<table align ="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;"> 
        <th>id</th>
        <th>name</th>
        <th>house number</th>
        <th>city</th>
        <th>district</th>
        <th>state</th>
        <th>pincode</th>
        <th>image</th>
        <th>Edit</th>
    </tr>

    <?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        $name=$_POST['hotelname']; 
        $address=$_POST['address'];
        $qry="SELECT * FROM `hoteldetail` WHERE `name` LIKE '%$name%' AND `houseno`='$address'";
        
        $run = mysqli_query($con,$qry);
        
        if(mysqli_num_rows($run) <1)
        {
            echo "<tr><td colspan='9' align='center'>No Records Found</td></tr>";
        }
        else
        {
            $count = 0;
            while($data = mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
                <tr align="center">
                    <td><?php  echo $data['id']; ?></td>
                    <td><?php  echo $data['name']; ?></td>
                    <td><?php  echo $data['houseno']; ?></td>
                    <td><?php  echo $data['city']; ?></td>
                    <td><?php  echo $data['district']; ?></td>
                    <td><?php  echo $data['state']; ?></td>
                    <td><?php  echo $data['pincode']; ?></td>
                    <td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;"/></td>
                    <td><a  href="updateform.php?id=<?php echo $data['id'];?>">Edit</a></td>
                </tr>


                <?php
            }
        }
    }

?>
</table>


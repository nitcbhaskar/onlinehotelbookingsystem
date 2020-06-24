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
    <form method="POST" action="room_manager_dashboard.php" style="float:left;margin-left:0px;">
            <button type="submit" class="btn btn-primary" >Back to Room Manager</button>
        </form>
        <h1 >Add Rooms</h1>
        
    </div>
    
    <form method="post" action="addrooms.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:50%; margin-top:40px;">
    
        <tr>
            <th>Hotel Id</th>
            <td><input type="hidden" name="hid" value='<?php  echo $_GET['id'] ;?>' ></td>
        </tr>
        <tr>
            <th>Room number</th>
            <td><input type="text" name="room_number" placeholder="enter room number" required></td>
        </tr>
        <tr> 
            <th>Room-Type</th>
            <td><select name="type" >
                <option value="">Select Room Type</option>
                <option value="Luxury Room">Luxury Room</option>
                <option value="Deluxe Room">Deluxe Room</option>
                <option value="Single Room">Single Room</option>
                <option value="Double Room">Double Room</option>
               
            </select></td>
        </tr>
        
        <tr>
            <th>Room Charge</th>
            <td><input type="number" name="charge"  ></td>
        </tr>
        <tr>
            <th>Check-In</th>
            <td><input type="date" name="check_in"></td>
        </tr>
        <tr>
            <th>Check-Out</th>
            <td><input type="date" name="check_out"></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><select name="status">
                <option value="">Select Status</option>
                <option value="B">Booked</option>
                <option value="V">Vacant</option>
            </td>
        </tr>
        <tr>
            <th>Image 1</th>
            <td><input type="file" name="img1"  required></td>
        </tr>

        <tr>
            <th>Image 2</th>
            <td><input type="file" name="img2"  required></td>
        </tr>
        <tr>
            <th>Image 3</th>
            <td><input type="file" name="img3"  required></td>
        </tr>
        

        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>

    </table>

</form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include ('../includes/db.php');
        $hotelId=$_POST['hid'];
        $room_number=$_POST['room_number'];
        $type=$_POST['type'];
        $charge=$_POST['charge'];
        $check_in=$_POST['check_in'];
        $check_out =$_POST['check_out']; 
        $status= $_POST['status'];
        $imagename1=$_FILES['img1']['name']; // actual image name
        $tempname1=$_FILES['img1']['tmp_name']; //server_name

        $imagename2=$_FILES['img2']['name']; // actual image name
        $tempname2=$_FILES['img2']['tmp_name']; //server_name

        $imagename3=$_FILES['img3']['name']; // actual image name
        $tempname3=$_FILES['img3']['tmp_name']; //server_name

        move_uploaded_file($tempname1,"../images/$imagename1");
        move_uploaded_file($tempname2,"../images/$imagename2");
        move_uploaded_file($tempname3,"../images/$imagename3");

        echo $qry = "INSERT INTO `rooms`(`h_id`, `r_id`, `r_no`, `r_type`, `r_charge`, `check_in`, `check_out`,`status`, `image_1` , `image_2`,`image_3`) VALUES ('$hotelId','NULL','$room_number','$type','$charge','$check_in','$check_out','$status','$imagename1','$imagename2','$imagename3')";
        
        
        $run = mysqli_query($con,$qry);
        
        if($run == true)
        {
            ?>
            <script>
                alert('Data Inserted Successfully'); 
                window.open('room_manager_dashboard.php','_self');
            </script>
            <?php
        }
       
       
    }
?>

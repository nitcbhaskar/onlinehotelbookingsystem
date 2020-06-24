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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">    
</head>
<style>
.footer {
    position:absolute; 
   left: 0;
   bottom: 0;
   width: 100%;
   height:80px;
   background-color: black;
   color: white;
   
}
</style>
<body>
    <div class="jumbotron text-center">
        <form method="POST" action="hotel_manager_dashboard.php" style="float:left;margin-left:10px;">
            <button type="submit" class="btn btn-primary" >Hotel Manager Dashboard</button>
        </form>
        <h1 align="center">Add Hotels</h1>
    </div>
    <form method="post" action="addhotel.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:50%; margin-top:40px;">
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" placeholder="enter hotel name" required></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><input type="text" name="country" placeholder="enter country " required></td>
        </tr>
        <tr>
            <th>State</th>
            <td><input type="text" name="state" placeholder="enter state" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="enter city" required></td>
        </tr>
        <tr>
            <th>Street</th>
            <td><input type="text" name="street" placeholder="enter street" required></td>
        </tr>
        <tr>
            <th>Pincode</th>
            <td><input type="number" name="pincode" placeholder="enter pincode" required></td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td><input type="number" name="contact" placeholder="enter contact" required></td>
        </tr>
        <tr>
            <th>E-Mail</th>
            <td><input type="email" name="email" placeholder="enter email" required></td>
        </tr>
        <tr>
            <th>Owner </th>
            <td><input type="text" name="owner" placeholder="enter owner name" required></td>
        </tr>
        <tr>
            <th>Rating</th>
            <td><input type="text" name="rating" placeholder="enter rating" required></td>
        </tr>
        <tr>
            <th>Facilities</th>
            <td><input type="text" name="facilities" placeholder="enter facilities" required></td>
        </tr>
        <tr>
            <th>Image </th>
            <td><input type="file" name="img"  required></td>
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
        $name=$_POST['name'];
        $country=$_POST['country'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $street=$_POST['street'];
        $pincode=$_POST['pincode'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $owner=$_POST['owner'];
        $rating=$_POST['rating'];
        $facilities=$_POST['facilities'];
        
        $imagename=$_FILES['img']['name']; // actual image name
        $tempname=$_FILES['img']['tmp_name']; //server_name

        

        move_uploaded_file($tempname,"../images/$imagename");

        $qry = "INSERT INTO `hotels`( `h_name`, `h_country`, `h_state`, `h_city`, `h_street`, `h_pincode`, `h_contact_no`, `h_email`, `h_owner_name`, `h_rating`, `h_facilities`, `h_image`) VALUES ('$name','$country','$state','$city','$street','$pincode','$contact','$email','$owner','$rating','$facilities','$imagename')";
        
        $run = mysqli_query($con,$qry);
        
        if($run == true)
        {
            ?>
            <script>
                alert('Data Inserted Successfully'); 
                header("loation:hotel_manager_dashboard.php");
            </script>
            <?php
        }
        else{
            echo "fail";
        }
    }
?>

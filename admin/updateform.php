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
   
    include('../includes/db.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM `hotels` WHERE `h_id`='$id'";
    $run = mysqli_query($con,$sql);

    $data = mysqli_fetch_assoc($run);

?>
<html>

<head>
    <title>Hotel Manager Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>

</style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 align="center">Update Details</h1>
    </div>
    <form method="post" action="updatedata.php" enctype="multipart/form-data">
        <table align="center" border="1" style="width:50%; margin-top:40px;">
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" value ="<?php  echo $data['h_name']; ?>" required /></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><input type="text" name="country" value =<?php  echo $data['h_country']; ?> required /></td>
        </tr>
        <tr>
            <th>State</th>
            <td><input type="text" name="state" value =<?php echo $data['h_state']; ?> required/></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" value =<?php  echo $data['h_city']; ?> required /></td>
        </tr>
        <tr>
            <th>Street</th>
            <td><input type="text" name="street" value =<?php  echo $data['h_street']; ?> required /></td>
        </tr>
        <tr>
            <th>Pincode</th>
            <td><input type="number" name="pincode" value =<?php  echo $data['h_pincode']; ?> required /></td>
        </tr>

        <tr>
            <th>Contact</th>
            <td><input type="number" name="contact" value =<?php  echo $data['h_contact_no']; ?> required /></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value =<?php  echo $data['h_email']; ?> required /></td>
        </tr>
        <tr>
            <th>Owner</th>
            <td><input type="text" name="owner" value =<?php  echo $data['h_owner_name']; ?> required /></td>
        </tr>
        
        <tr>
            <th>Rating</th>
            <td><input type="numtextber" name="rating" value =<?php  echo $data['h_rating']; ?> required /></td>
        </tr>
        <tr>
            <th>Facilities</th>
            <td><input type="text" name="facilities" value =<?php  echo $data['h_facilities']; ?> required /></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="img"  required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="submit" name="submit" value="Submit"/>
            </td>
        </tr>

    </table>

</form>
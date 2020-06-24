<?php

include('../includes/db.php');

    $name=$_POST['name'];
    $houseno=$_POST['houseno'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $id = $_POST['id'];
    $imagename=$_FILES['img']['name']; // actual image name
    $tempname=$_FILES['img']['tmp_name']; //server_name

    move_uploaded_file($tempname,"../dataimg/$imagename");

    $qry = "UPDATE `hoteldetail` SET `name` = '$name', `houseno` = '$houseno', `city` = '$city', `district` = '$district', `state` = '$state', `pincode` = '$pincode' ,`image`='$imagename' WHERE `id` = $id;";
    
    $run = mysqli_query($con,$qry);

    if($run == true)
    {
        ?>
        <script>
            alert('Data updated Successfully'); 
            window.open('updateform.php?id=<?php echo $id;?>','_self');
        </script>
        <?php
    }
    

?> 
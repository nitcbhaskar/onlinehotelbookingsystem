<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Hotel Booking</title>
<!-- for-mobile-apps -->

</head>
<body style="background-color:#D3D3D3;">


<?php
	include ('../includes/db.php');
	include ('../header.php');
?>
<br>


<h1 align="center"> Login </h1>
<br>
<br>
<form class="form-horizontal" method="POST" action="c_login.php" style="width: 70%; float: right;padding-top:20px ">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
	  <input class="form-control" type="email" name = "email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input  class="form-control" type = "password" name = "pass" required>
      </div>
	</div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
	  <input type="hidden" name="h_id"  value="<?php echo $_GET['h_id']; ?>" />
	  <input type ="submit" name = "login" value="Login">
      </div>
    </div>
  </form>

</body>
</html>





<?php

include ('../includes/db.php'); 

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $qry = "SELECT * FROM `customer` WHERE `c_email`='$email' AND `password`='$password'";
    //echo $qry;exit;
    $run = mysqli_query($con,$qry);

    $row = mysqli_num_rows($run);
    if($row < 1)
    {
        ?>
        <script>
            alert('username or password not match!!');
            window.open('c_login.php','_self');
        </script>
        <?php
    }

    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['c_id'];
        $c_name= $data['c_name'];
        $_SESSION['uid'] = $id;
        $_SESSION['c_name']= $c_name;
        //echo $data['c_name']; 
        header('location:../index.php');
        //echo $data['c_name']; 
    }

}


?>







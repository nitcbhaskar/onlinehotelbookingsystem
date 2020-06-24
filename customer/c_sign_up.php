<?php
	include ('../includes/db.php');
	include ('../header.php');
?>


<h1 align="center" style="background-color: #ccc; padding: 25px;"> New Registration </h1>
<br>

<div class="register-form">
<form class="form-horizontal" method="POST" action="c_sign_up.php" style="width: 70%; float: right;padding-top:20px; ">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
	  <input class="form-control" type="email" name="email" placeholder="enter email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="name" placeholder="enter name " required>
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Father's Name:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="fname" placeholder="enter Father's name" required>
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact:</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" name="contact" placeholder="enter contact" required>
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  name="address" placeholder="enter address" required>
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control"  name="password" placeholder="enter password" required>
      </div>
	</div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control"  name="confirm_password" placeholder="enter password" required>
      </div>
	</div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
	  <input type="hidden" name="h_id"  value="<?php echo $_GET['h_id']; ?>" />
	  <input type="submit" name="submit" value="Submit">
      </div>
    </div>
  </form>
</div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include('../includes/db.php');
        $email=$_POST['email'];
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];

     
        if($password != $confirm_password)
        {
          ?>
          <script>
            alert('Password does not match!');
          </script>
          <?php
          
        }
        else
        {
        $qry = "INSERT INTO `customer`(`c_email`, `c_name`, `c_fathers_name`, `contact_no`, `address`, `password`,`confirm_pass`) VALUES ('$email','$name','$fname','$contact','$address','$password','$confirm_password')";
        
        $run = mysqli_query($con,$qry);

        if($run == true)
        {
            ?>
            <script>
                alert('Registration Successfully'); 
            </script>
            <?php
        }
        else{
            echo "fail";
        }
      }
    }
?>

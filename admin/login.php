<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin_manager.php');
}
?>
<html>
<head>
    <title>admin portal login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  

</head>

<body>
    <div class="jumbotron text-center">
        <h1 align ="center"> Admin Login</h1>
    </div>
    <form align="center"  action="login.php" method="post">
        <table align ="center">
            <tr>
                <td> Email</td> <td> <input type = "text" name = "uname" required> </td>
            </tr>
            <tr>
                <td> Password</td> <td> <input type = "password" name = "pass" required> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type ="submit" name = "login" value="Login"></td>
            </tr>
        </table>

    </form>
</body>
</html>

<?php

include ('../includes/db.php'); 

if(isset($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];

    $qry = "SELECT * FROM admin WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($con,$qry);  

    $row = mysqli_num_rows($run);
    if($row < 1)
    {
        ?>
        <script>
            alert('username or password not match!!');
            window.open('login.php','_self');
        </script>
        <?php
    }

    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        

        $_SESSION['uid'] = $id; 
        header('location:admin_manager.php');
       
    }

}


?>







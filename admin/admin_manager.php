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
    <title>Admin Manager </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>


<body>
    <div class="jumbotron text-center">
        <a href="logout.php" style="float:right; margin-right:30px;font-size:25px">Logout</a>
        <h1 align="center">Admin Manager Dashboard</h1>
        
    </div>
    <div class="container pt-3" >
        <div class="row">
            <div class="col-sm">
                <img src="../images/i7.jpg"  style="max-width:220px;max-height:220px;min-width:220px;min-height:220px;">
                <form method="POST" action="hotel_manager_dashboard.php" style="margin-top:10px;">
                    <button type="submit" class="btn btn-primary" >Hotel Manager Dashboard</button>
                </form>
            </div>

            <div class="col-sm">
                <img src="../images/r4.jpg"  style="max-width:220px;max-height:220px;min-width:220px;min-height:220px;"> 
                <form method="POST" action="room_manager_dashboard.php" style="margin-top:10px;">
                    <button type="submit" class="btn btn-primary" >Room Manager Dashboard</button>
                </form>
            </div>

            <div class="col-sm">
                <img src="../images/r2.jpg"  style="max-width:220px;max-height:220px;min-width:220px;min-height:220px;"> 
                <form method="POST" action="feedback_manager.php" style="margin-top:10px;">
                    <button type="submit" class="btn btn-primary" >feebback Manager Dashboard</button>
                </form>
            </div>
    </div>
</body>
</html>


<?php 
    session_start();
    include ('../includes/db.php');
    include ('../header.php');
    if(isset($_GET['r_id'])){
      $r_id = $_GET['r_id'];
    }

    if(isset($_GET['booking_id'])){
      $booking_id = $_GET['booking_id'];
    }

    if(isset($_GET['h_id'])){
      $h_id = $_GET['h_id'];
    }
    
   
    $c_id = $_SESSION['uid'];
 
    if(isset($_GET['h_id'])){
    $sql = "SELECT `h_name` FROM `hotels` WHERE `h_id`='$h_id'";
    $run = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($run);
    }
?>
<html>
  <head>
    <style>
      @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    fieldset, label { margin: 0; padding: 0; }
    body{ margin: 20px; }
    h1 { font-size: 1.5em; margin: 10px; }

    /****** Style Star Rating Widget *****/

    .rating { 
      border: none;
      float: left;
    }

    .rating > input { display: none; } 
    .rating > label:before { 
      margin: 5px;
      font-size: 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }

    .rating > .half:before { 
      content: "\f089";
      position: absolute;
    }

    .rating > label { 
      color: #ddd; 
    float: right; 
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
</style>
  </head>
<body>
<h1 align="center" style="background-color: #ccc; padding: 25px;"> Feedback Form </h1>
<br>

<div class="register-form">
<form class="form-horizontal" method="POST" action="c_feedback.php" style="width: 70%; float: right;padding-top:20px; ">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Hotel Name:</label>
      <div class="col-sm-4">
	  <input class="form-control" type="text" name="h_name" value="<?php echo $data['h_name'];?>">
      </div>
    </div>
   
	<div class="form-group">
  <label class="control-label col-sm-2" for="pwd">Rating:</label>
  <div class="col-sm-4"> 
  <fieldset class="rating">
      <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
      <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
      <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
      <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
      <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
      <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
      <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
      <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
      <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
      <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
  </fieldset>
</div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Summary:</label>
      <div class="col-sm-4">          
        <textarea id="w3review" name="summary" rows="4" cols="50">
        </textarea>
      </div>
  </div>
  

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
	  <input type="hidden" name="h_id"  value="<?php echo $_GET['h_id']; ?>" />
    <input type="hidden" name="r_id"  value="<?php echo $_GET['r_id']; ?>" />
    <input type="hidden" name="booking_id"  value="<?php echo $_GET['booking_id']; ?>" />
    
	  <input type="submit" name="submit" value="Submit">
      </div>
    </div>
  </form>
</div>
</body>
</html>
  

<?php
  $date = date('Y-m-d'); 
  if(isset($_POST['submit']))
  {
   
    $star = $_POST['rating'];
    $summary = $_POST['summary'];
   

    $qry = "INSERT INTO `feedback`(`r_id`, `h_id`, `c_id`, `booking_id`, `star`, `summary`, `date`, `status`) VALUES ('".$_POST['r_id']."','".$_POST['h_id']."','$c_id','".$_POST['booking_id']."','$star','$summary','$date','0')";
    
    $run = mysqli_query($con,$qry);
    
    if($run == true)
    {
      ?>
      <script>
        alert('Feedback Successfully Submitted!');
        window.open('c_profile.php','_self');
      </script>
      <?php
    }


  }

?>
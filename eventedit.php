<?php
include('session.php');
?>
<?php
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $conn = mysqli_connect("localhost", "root", "");
        // Selecting Database
        $db = mysqli_select_db($conn, "hotspot");
        //session_start();// Starting Session

        // Storing Session
        $user_check = $_SESSION['login_user'];

     
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HotSpot </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
h3 {
    color: white;
    text-align: center;
    font-style: oblique;
     
  }
</style>
  </head>
   <script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  
<body>
<div id="profile">



</div><span>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HotSpot SociaLyte Home</a>
        <p>
    <img src = "https://s3.amazonaws.com/musicfirstbucket/musicfirstappcloud/user-profile/default.png"
         alt = "Picture of a happy monkey" />
		 <h3><center><b id="welcome">SocialLyte: <i><?php echo $login_session; ?></i></b>
  </p>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Create Event</a></li>
           <li><a href="#"> My Events</a></li>
        </ul>

      </li>
      <li><a href="#">Groups</a></li>
      <li><a href="#">What's Hot!!!</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <span class="glyphicon glyphicon-user"></span> Rate an Event</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
   <a href="#" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-fire"></span> Pass The Flame
        </a>
		<a href="createevent.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Create An Event
        </a>
        <a href="viewevent.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-search"></span> Search Events
        </a>
 <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-envelope"></span> Send Message
        </a>
 <a href="#" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Post Announcement 
        </a>
</div>


<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="events"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
/* global $id;
 global $name;
 global $type;
 global $date;
 global $add;
 global $city;
 global $state;
 global $zip;
 global $time;
 global $price;
 global $private;
 global $smoke;
 global $drink;
 global $food;
 global $music;
 global $org; */
 
// Get values from form 
$id=$_POST['event_id'];
$name=$_POST['event_name'];
$type=$_POST['event_type'];
$date=$_POST['event_date'];
$add=$_POST['event_address'];
$city=$_POST['event_city'];
$state=$_POST['event_state'];
$zip=$_POST['event_zip'];
$time=$_POST['event_time'];
$price=$_POST['event_price'];
$private=$_POST['event_private'];
$smoke=$_POST['smoking_permitted'];
$drink=$_POST['drinks_provided'];
$food=$_POST['food_provided'];
$music=$_POST['music_type'];

//$org=$_POST['event_organizer'];
 
// Insert data into mysql 
$sql="UPDATE $tbl_name set event_name='$name',event_type='$type',event_date='$date',event_address='$add',event_city='$city',event_state='$state',event_zip='$zip',event_time='$time',event_price='$price',event_private='$private',smoking_permitted='$smoke',drinks_provided='$drink',food_provided='$food',music_type='$music' where event_id='$id'";
$result=mysql_query($sql);
 
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<BR>";
echo "<BR>";
echo "Event Edited Successfully";
echo "<BR>";
echo "<a href='viewmyevent.php'>Back to My Events</a>";
}
 
else {
echo "ERROR";
}
?> 
 
<?php 
// close connection 
mysql_close();
?>




</body>
</html>
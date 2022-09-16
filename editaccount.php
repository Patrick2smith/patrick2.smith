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
  <title>HotSpot Socialyte Home</title>
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

table, td, th {
 border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

table {
    border-collapse: collapse;
    width: 20%;

}
tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: #ddd;}
th {
     padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
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
  <a href="edituser.php" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-user"></span> Edit Profile
        </a> 
 </p>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Create Event</a></li>
           <li><a href="#"> My Events</a></li>
		   <li><a href="#"> My Invitations</a></li>
        </ul>

      </li>
      <li><a href="groups.php">Groups</a></li>
      <li><a href="#">What's Hot!!!</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <span class="glyphicon glyphicon-user"></span> Rate an Event</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
   <a href="#" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-fire"></span> My Flamed Events
        </a>
		<a href="createevent.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Create An Event
        </a>
        <a href="viewevent.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-search"></span> Search Events
        </a>
 <a href="sendmessage.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-envelope"></span> Send Message
        </a>
 <a href="#" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Post Announcement 
        </a>
		
</div>
<br><br>
<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="users"; // Table name 

 
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// Get values from form 
$uname=$_POST['user_name'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$dob=$_POST['dob'];
$pword=$_POST['password'];
$user=$_POST['user_type'];
$email=$_POST['user_email'];
$img=$_POST['image'];

 
 
// Insert data into mysql 
$sql="UPDATE $tbl_name set user_name='$uname', first_name='$fname',last_name='$lname',dob='$dob',password='$pword',user_type='$user',user_email='$email',image='$img' where user_name='$user_check' ";

$result=mysql_query($sql);
 
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='socialytehome.php'>Back to Home</a>";
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
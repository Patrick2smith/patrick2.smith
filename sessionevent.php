<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect("localhost", "root", "");
// Selecting Database
//$db = mysql_select_db("hotspot", $connection);
//session_start();// Starting Session
// Storing Session
//$user_check=$_SESSION['login_user'];


// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from events where event_organizer='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['event_organizer'];
$id=$row['event_id'];
$name=$row['event_name'];
$type=$row['event_type'];
$date=$row['event_date'];
$add=$row['event_address'];
$city=$row['event_city'];
$state=$row['event_state'];
$zip=$row['event_zip'];
$time=$row['event_time'];
$price=$row['event_price'];
$private=$row['event_private'];
$smoke=$row['smoking_permitted'];
$drink=$row['drinks_provided'];
$food=$row['food_provided'];
$music=$row['music_type'];

//$org=$row['event_organizer'];

if(!isset($login_session)){
mysql_close($connection); // Closing Connection

//header('Location: index.php'); // Redirecting To Home Page

}
?>
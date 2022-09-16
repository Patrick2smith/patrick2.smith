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

$id = $_GET['event_id'];
$ses_sql=mysql_query("select * from events where event_id='$id'", $connection);
$row = mysql_fetch_assoc($ses_sql);
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
      <li class="active"><a href="socialytehome.php">Home</a></li>
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
<center><h1>Edit Event</center>





<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Event Options
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="viewmyevent.php">View My Events</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit My Events</a></li>
     
    </ul>
  </div>



 <a href=<?php echo '"invite.php?event_id='.$id.'"'; ?> class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-user"></span> Invite Users
        </a>

<a href=<?php echo '"eventdelete.php?event_id='.$id.'"'; ?> class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-user"></span> Cancel Event
        </a>

<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttp://localhost/CIS4910_pro/profile.php&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a id="plugin-fb" href="http://www.addlikebutton.net" class="facebook-get-code">addlikebutton.net</a></iframe>
 
<span class="ig-follow" data-id="5479dee" data-handle="Instagram" data-count="true" data-size="small" data-username="true"></span>

<a href="https://twitter.com/Hotspot" class="twitter-follow-button" data-show-count="false">Follow @Hotspot</a>


	  <br><br>
<div data-role="page">

  <div data-role="main" class="ui-content">
    <form method="post" action="eventedit.php">
      <div class="ui-field-contain">
      
	 <input type="hidden" name="event_id" id="event_id" value="<?php echo $id ?>" data-clear-btn="true" placeholder="Enter Event Name...">
      
	  <br><label for="event_name">Event Name:</label>
      <input type="text" name="event_name" id="event_name" value="<?php echo $name ?>" data-clear-btn="true" placeholder="Enter Event Name...">
        
		<br><label for="event_date">Event Date:</label>
      <input type="date" name="event_date" id="event_date" value="<?php echo $date ?>"data-clear-btn="true" placeholder="Enter the Date...">
	  
	   <br><label for="event_time">Event Time:</label>
      <input type="text" name="event_time" id="event_time" value="<?php echo $time ?>" data-clear-btn="true">
	  
	  <br><label for="event_type">Event type:</label>
      <input type="text" name="event_type" id="event_type" value="<?php echo $type ?>" data-clear-btn="true" placeholder="Pool Party, House Party i.e...">
       
	   <br><label for="event_address">Event Address:</label>
      <input type="text" name="event_address" id="event_address"  value="<?php echo $add ?>" data-clear-btn="true" placeholder="Enter Event Address...">
       
	      <br><label for="event_city">Event City:</label>
      <input type="text" name="event_city" id="event_city" value="<?php echo $city ?>" data-clear-btn="true">
       
	   <br><label for="event_state">Event State:</label>
      <input type="text" name="event_state" id="event_state" value="<?php echo $state ?>" data-clear-btn="true">
       
	   <br><label for="event_zip">Event Zip Code:</label>
      <input type="text" name="event_zip" id="event_zip"  value="<?php echo $zip ?>"data-clear-btn="true">
    
<br><label for="event_price">Event price:</label>
      <input type="text" name="event_price" id="event_price" value="<?php echo $price ?>" data-clear-btn="true">
       	
	
	   <br><label for="event_private">Private:</label>
        <select name="event_private" id="event_private">
             <option value="y">Yes</option>
          <option value="n">No</option>
        </select>
		
		<br><label for="smoking_permitted">Smoking Permitted:</label>
        <select name="smoking_permitted" id="smoking_permitted">
             <option value="y">Yes</option>
          <option value="n">No</option>
        </select>
		
				
		<br><label for="drinks_provided">Drinks Provided:</label>
        <select name="drinks_provided" id="drinks_provided">
             <option value="y">Yes</option>
          <option value="n">No</option>
        </select>
		
				
				
		<br><label for="food_provided">Food Provided:</label>
        <select name="food_provided" id="food_provided" >
             <option value="y">Yes</option>
          <option value="n">No</option>
		 
        </select>
		
		
		<br><label for="music_type">Music Type:</label>
      <input type="text" name="music_type" id="music_type" data-clear-btn="true" value="<?php echo $music ?>">
		

     <input type="hidden" name="event_organizer" value="<?php echo $user_check?>" id="event_organizer" value="<?php echo $event_organizer ?>" data-clear-btn="true" placeholder="...">
		

     

</div>
<input type="submit" data-inline="true" value="Submit">
    </form>
  </div>


</body>
</html>
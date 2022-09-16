
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

<center><h1>My Groups</center>








<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttp://localhost/CIS4910_pro/profile.php&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a id="plugin-fb" href="http://www.addlikebutton.net" class="facebook-get-code">addlikebutton.net</a></iframe>
 
<span class="ig-follow" data-id="5479dee" data-handle="Instagram" data-count="true" data-size="small" data-username="true"></span>

<a href="https://twitter.com/HotSpot" class="twitter-follow-button" data-show-count="false">Follow @Hotspot</a>
<center>
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'hotspot';
$table = 'groups';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT * FROM {$table} where group_creator='$user_check'");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);


/*echo "<ol'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";*/
// printing table rows
while($row = mysql_fetch_assoc($result))
{
	echo "<br>";
	
	echo '<h1><a href="showgroup.php?group_id='.$row['group_id'].'">'.$row['group_name'].'</a>';
}
mysql_free_result($result);
?>
</center>
</body>
</html>
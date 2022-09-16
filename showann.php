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
<center>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HotSpot</a>
       <p>
    <img src = "https://s3.amazonaws.com/musicfirstbucket/musicfirstappcloud/user-profile/default.png"
         alt = "Picture of a happy monkey" />
		 <h3><center><b id="welcome">SocialLyte: <i><?php echo $login_session; ?></i></b>
  <a href="edituser.php" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-user"></span> Edit Profile
        </a> 
 </p>
    </div>
   <a href="#" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a><br>
		<a href="createevent.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Create An Event
        </a><br>
        <a href="viewevent.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-search"></span> Search Events
        </a><br>
 <a href="sendmessage.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-envelope"></span> Send Message
        </a><br>
 <a href="announcement.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Whats The Tea 
        </a><br>
		<a href="logout.php" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-off"></span> Logout 
        </a>
      
    </ul>
  </div>
</nav>
   


<h2> Whats The Buzz</h2>


<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttp://localhost/CIS4910_pro/profile.php&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a id="plugin-fb" href="http://www.addlikebutton.net" class="facebook-get-code">addlikebutton.net</a></iframe>
 
<span class="ig-follow" data-id="5479dee" data-handle="Instagram" data-count="true" data-size="small" data-username="true"></span>

<a href="https://twitter.com/HotSpot" class="twitter-follow-button" data-show-count="false">Follow @Hotspot</a>
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'hotspot';
$table = 'announcement';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT * FROM {$table}");
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
	echo "<br>";
	echo "<br>";
	echo '<p>Socialyte:'.$row['ann_user'].'<br>Whats Hot?: '.$row["announce"].'</a>';
}
mysql_free_result($result);
?>
  
</body>
</html>
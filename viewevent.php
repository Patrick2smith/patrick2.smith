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
    width: 10%;
}
tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: #ddd;}
th {
     padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: blue;
}
  
</style>
  </head>
   <script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  
<body>

<div id="profile">



</div><span>

  
       <center><h2> Search Events</h2></center>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Event Options
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="viewmyevent.php">View My Events</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="viewmessage.php">Edit My Events</a></li>
     
    </ul>
  </div>
 <center><form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>

</center>

 


<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'hotspot';
$table = 'events';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT * FROM {$table} where event_organizer='$user_check'");
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
	
	echo '<center><h2> <a href="showevent.php?event_id='.$row['event_id'].'">'.$row["event_name"].'</a>';
}
mysql_free_result($result);
?>
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttp://localhost/CIS4910_pro/profile.php&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a id="plugin-fb" href="http://www.addlikebutton.net" class="facebook-get-code">addlikebutton.net</a></iframe>
 
<span class="ig-follow" data-id="5479dee" data-handle="Instagram" data-count="true" data-size="small" data-username="true"></span>

<a href="https://twitter.com/HotSpot" class="twitter-follow-button" data-show-count="false">Follow @Hotspot</a>
 
</body>
</html>
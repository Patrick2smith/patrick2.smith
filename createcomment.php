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

<center><h1>Create Comment</center>





<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Event Options
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="viewmyevent.php">View My Events</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit My Events</a></li>
     
    </ul>
  </div>




 <a href="createcomment.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Comment 
        </a>

<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttp://localhost/CIS4910_pro/profile.php&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a id="plugin-fb" href="http://www.addlikebutton.net" class="facebook-get-code">addlikebutton.net</a></iframe>
 
<span class="ig-follow" data-id="5479dee" data-handle="Instagram" data-count="true" data-size="small" data-username="true"></span>

<a href="https://twitter.com/Hotspot" class="twitter-follow-button" data-show-count="false">Follow @Hotspot</a>


	  <br><br>
<div data-role="page">

  <div data-role="main" class="ui-content">
    <form method="post" action="showcomments.php">
      <div class="ui-field-contain">
  
      
	  
      <input type="hidden" name="user" value="<?php echo $user_check?>" id="user" data-clear-btn="true">
    
<br><label for="comments">Enter Comment:</label>
      <input type="text" name="comments" id="comments" data-clear-btn="true">
</div>
<input type="submit" data-inline="true" value="Submit">
    </form>


  
  
  
  

</body>
</html>
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


<center><h1>Edit Account</center>

<br><br>

	  <br><br>

  <div data-role="main" class="ui-content">
    <form method="post" action="editaccount.php">
      <div class="ui-field-contain">
      
	  
      <input type="hidden" name="user_name" id="user_name" value="<?php echo $login_session; ?>" data-clear-btn="true" placeholder="Change Username...">
	
      <br><label for="password">Password:</label>
      <input type="password" name="password" id="password"  value="<?php echo $password;?>" data-clear-btn="true" placeholder="Change Password...">
        
		<br><label for="first_name">First Name:</label>
      <input type="first_name" name="first_name" id="first_name" value="<?php echo $firstname;?>" data-clear-btn="true" placeholder="Change First Name...">
       
	   <br><label for="last_name">Last Name:</label>
      <input type="last_name" name="last_name" id="last_name" value="<?php echo $lastname;?>" data-clear-btn="true" placeholder="Change Last Name...">
       
	      <br><label for="dob">Date Of Birth:</label>
      <input type="date" name="dob" id="dob" value="<?php echo $dob;?>" data-clear-btn="true">
       
	   <br><label for="user_type">User Type:</label>
        <select name="user_type" id="user_type">
             <option value="socialyte">Socialyte</option>
          
        </select>
     
   <br><label for="user_email">Email:</label>
      <input type="user_email" name="user_email" id="user_email" value="<?php echo $useremail; ?>" data-clear-btn="true">
	  <br><label for="image">Upload a Profile Pic:</label>
	  <input type="file" name="image" id="image" value="<?php echo $img; ?>" data-clear-btn="true">

</div>
<input type="submit" data-inline="true" value="Submit">
    </form>
  </div>


</body>
</html>
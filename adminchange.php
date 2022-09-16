
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>

</style>
</head>
<body>
   
      <ul class="dropdown-menu" role="menu">
	      
	   <li><a href="index.php">Back To Login Home</a></li>
       
      </ul>
</div>	  
	  <br><br>
<div data-role="page">

    <h1>Join Hotspot</h1>
	<a href="index.php" class="btn btn-danger btn-lg">
      <span class="glyphicon glyphicon-home"></span> Back To Login 
    </a><br><br>
  </div>
  <div data-role="main" class="ui-content">
    <form method="post" action="account_create.php">
      <div class="ui-field-contain">
      
	  <label for="user_name">Username:</label>
      <input type="text" name="user_name" id="user_name" data-clear-btn="true" value="<?php echo $user_name?>">
	
      <br><label for="password">Password:</label>
      <input type="password" name="password" id="password" data-clear-btn="true" value="<?php echo $password?>">
        
		<br><label for="first_name">First Name:</label>
      <input type="first_name" name="first_name" id="first_name" data-clear-btn="true" value="<?php echo $first_name?>">
       
	   <br><label for="last_name">Last Name:</label>
      <input type="last_name" name="last_name" id="last_name" data-clear-btn="true" placeholder="Enter Your Last Name...">
       
	      <br><label for="dob">Date Of Birth:</label>
      <input type="date" name="dob" id="dob" data-clear-btn="true">
       
	   <br><label for="user_type">User Type:</label>
        <select name="user_type" id="user_type">
             <option value="socialyte">Socialyte</option>
          <option value="eventorganizer">Event Organizer</option>
        </select>
     
   <br><label for="user_email">Email:</label>
      <input type="user_email" name="user_email" id="user_email" data-clear-btn="true">

</div>
<input type="submit" data-inline="true" value="Submit">
    </form>
  </div>


</body>
</html>
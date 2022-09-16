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
  <title>HotSpot Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>

</style>
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HotSpot</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="HotspotAdminHome.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Accounts <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="searchaccounts.php">Browse/Search Accounts</a></li>
           <li><a href="#"> Create/Edit/ Delete Accounts</a></li>
   
        </ul>
      </li>
      <li><a href="reports.php">Reports</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
  
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
   <h1>Add an Account</h1>
  <p></p>
  <h3><center><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
</div>
 

	<a href="changeaccount.php" class="btn btn-danger btn-lg">
      <span class="glyphicon glyphicon-home"></span> Back To Accounts 
    </a><br><br>
  </div>
  <div data-role="main" class="ui-content">
    <form method="post" action="updateaccount.php">
      <div class="ui-field-contain">
      
	  <label for="user_name">Username:</label>
      <input type="text" name="user_name" id="user_name" data-clear-btn="true" placeholder="Create a Username...">
	
      <br><label for="password">Password:</label>
      <input type="password" name="password" id="password" data-clear-btn="true" placeholder="Create a Password...">
        
		<br><label for="first_name">First Name:</label>
      <input type="first_name" name="first_name" id="first_name" data-clear-btn="true" placeholder="Enter Your First Name...">
       
	   <br><label for="last_name">Last Name:</label>
      <input type="last_name" name="last_name" id="last_name" data-clear-btn="true" placeholder="Enter Your Last Name...">
       
	      <br><label for="dob">Date Of Birth:</label>
      <input type="date" name="dob" id="dob" data-clear-btn="true">
       
	 
      <input type="hidden" name="user_type" id="user_type" data-clear-btn="true" value="socialyte">
	
     
   <br><label for="user_email">Email:</label>
      <input type="user_email" name="user_email" id="user_email" data-clear-btn="true">

</div>
<input type="submit" data-inline="true" value="Submit">
    </form>
  </div>


</body>
</html>
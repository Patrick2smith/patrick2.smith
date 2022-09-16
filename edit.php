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
$username=$_GET['user_name'];
$ses_sql=mysql_query("select * from users where user_name='$username'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$password =$row['password'];
$firstname =$row['first_name'];
$lastname =$row['last_name'];
$dob =$row['dob'];
$usertype =$row['user_type'];
$useremail =$row['user_email'];

     
	
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create/Edit/Delete Accounts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
table, td, th {
 border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

table {
    border-collapse: collapse;
    width: 50%;
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
           <li><a href="#"> Create/Edit/Delete Accounts</a></li>
   
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
  <h3>Create/Edit/Delete Accounts</h3>
  <p></p>
  <h3><center><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
</div>
  
     <a href="searchaccounts.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-search"></span>Search Accounts
        </a>
   

        <a href="addaccount.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Add an Account
        </a><br><br>




  <div data-role="main" class="ui-content">
    <form method="post" action="adminedit.php?user_name=' . $_GET['user_name'] . '">
      <div class="ui-field-contain">
      
	  <label for="user_name">Username:</label>
      <input type="text" name="user_name" id="user_name" value="<?php echo $username; ?>" data-clear-btn="true" placeholder="Change Username...">
	
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

</div>
<input type="submit" data-inline="true" value="Submit">
    </form>
  </div>

 
<?php 
// close connection 
mysql_close();
?>
</body>
</html>
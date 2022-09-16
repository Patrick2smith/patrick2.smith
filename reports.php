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
           <li><a href="changeaccount.php"> Create/Edit/ Delete Accounts</a></li>
   
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
  <h3>Hotspot Real Time Statistics</h3>
    <?php
	$users = mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE user_type = 'socialyte'");
        if($row0 = mysqli_fetch_array($users))
        $admin = $row0[0]; 
	  echo "<h7> Number Of Socialytes:</h7>";
	  echo $admin;
	  echo "<br>";
	 
	 $users = mysqli_query($conn,"SELECT COUNT(*) FROM events");
        if($row0 = mysqli_fetch_array($users))
        $event = $row0[0]; 
	  echo "<h8> Number Of Total Events:</h8>";
	  echo $event;
	  echo "<br>";
	  
	  $users = mysqli_query($conn,"SELECT COUNT(*) FROM events WHERE event_private='n'");
        if($row0 = mysqli_fetch_array($users))
        $event = $row0[0]; 
	  echo "<h9> Number Of Public Parties:</h9>";
	  echo $event;
	  echo "<br>";
	  
	   $users = mysqli_query($conn,"SELECT COUNT(*) FROM events WHERE event_private='y'");
        if($row0 = mysqli_fetch_array($users))
        $event = $row0[0]; 
	  echo "<h9> Number Of Private Parties:</h9>";
	  echo $event;
	  echo "<br>";
	  
	    $users = mysqli_query($conn,"SELECT COUNT(*) FROM events WHERE food_provided='y'");
        if($row0 = mysqli_fetch_array($users))
        $event = $row0[0]; 
	  echo "<h9> Number Of Parties W/ Food Provided:</h9>";
	  echo $event;
	  echo "<br>";
	  
	     $users = mysqli_query($conn,"SELECT COUNT(*) FROM events WHERE drinks_provided='y'");
        if($row0 = mysqli_fetch_array($users))
        $event = $row0[0]; 
	  echo "<h9> Number Of Parties W/ Drinks Provided:</h9>";
	  echo $event;
	  echo "<br>";
	  
	  
	  ?>
	 
  <p></p>
  <h3><center><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br>
<a href="viewusers.php" class="btn btn-success btn-lg">

          <span class="glyphicon glyphicon-search"></span> View All Accounts
        </a>
<a href="viewgroups.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-fire"></span> View All Groups
        </a>
		<a href="viewevents.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-fire"></span> View All Events
        </a>
  </div>

</body>
</html>
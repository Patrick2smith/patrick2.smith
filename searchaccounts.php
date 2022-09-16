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
  <h3>Search Accounts</h3>
  <p></p>
  <h3><center><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
</div>
   
     <a href="searchaccounts.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-search"></span>Search Accounts
        </a>
   

        <a href="addaccount.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Add an Account
        </a><br><br>
		<h3>Search Accounts</h3>
		
		 <form action="accountsearch.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
<?php
/* 
	VIEW.PHP
	Displays all data from 'users' table
*/

	// connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM users") 
		or die(mysql_error());  
		
	// display data in table
	//echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>user_name</th> <th>First Name</th> <th>Last Name</th><th>dob</th><th>password</th><th>user_type</th><th>user_email</th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr >";
		echo '<td>' . $row['user_name'] . '</td>';
		echo '<td>' . $row['first_name'] . '</td>';
		echo '<td>' . $row['last_name'] . '</td>';
		echo '<td>' . $row['dob'] . '</td>';
		echo '<td>' . $row['password'] . '</td>';
		echo '<td>' . $row['user_type'] . '</td>';
		echo '<td>' . $row['user_email'] . '</td>';
		echo '<td><a href="edit.php?user_name=' . $row['user_name'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?user_name=' . $row['user_name'] . '">Delete</a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>



</body>
</html>
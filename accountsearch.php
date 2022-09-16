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
          <li><a href="#">Browse/Search Accounts</a></li>
           <li><a href="#"> Create/Edit/ Delete Accounts</a></li>
   
        </ul>
      </li>
      <li><a href="reports.php">Reports</a></li>
      <li><a href="#">Events</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <span class="glyphicon glyphicon-user"></span> Rate an Event</a></li>
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
        </a>
<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("hotspot") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM users
            WHERE (`user_name` LIKE '%".$query."%') OR (`first_name` LIKE '%".$query."%')or (`last_name` LIKE '%".$query."%')or (`user_email` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
          
                echo "<p><center><h4>Username:".$results['user_name']."</h4>First Name:".$results['first_name']."<br>Last Name:" .$results['last_name']."<br>Emal Address:" .$results['user_email']."</p>";
              //	echo '<a href="edit.php?user_name=' . $row['user_name'] . '">Edit</a>';
				// posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
	    echo "<br><br>";
        echo "Nothing Has been entered, Minimum length of characters is ".$min_length;
    }
?>

</body>
</html>
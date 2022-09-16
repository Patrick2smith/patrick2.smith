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
<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="users"; // Table name 

 
// Connect to server and select database.
 mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
//$username=$_GET['user_name'];
//$ses_sql=mysql_query("select * from users where user_name='$username'", $conn);
//$row = mysql_fetch_assoc($ses_sql);
$username=$_POST['user_name'];
$firstname =$_POST['first_name'];
$lastname =$_POST['last_name'];
$password =$_POST['password'];
$dob =$_POST['dob'];
$usertype =$_POST['user_type'];
$useremail =$_POST['user_email'];


// Insert data into mysql 
$sql="UPDATE $tbl_name set first_name='$firstname',last_name='$lastname',dob='$dob',password='$password',user_type='$usertype',user_email='$useremail' where user_name='$username' ";

$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='searchaccounts.php'>Back to Accounts</a>";
}
 
else {
echo "ERROR";
}
?> 
</body>
</html>
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
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="invite"; // Table name 
  
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
  
// Get values from form 

$invi=$_GET['invite_id'];
$invitee=$_POST['invitee'];
$invitename=$_POST['invite_ename'];
$attendance=$_POST['attendance'];
  
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(invite_id,invitee,invite_ename, attendance)VALUES('$invi','$invitee','$invitename','$attendance')";
$result=mysql_query($sql);
  
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<BR>";
echo "<BR>";
echo "Invitation Sent Successfully";
echo "<BR>";
echo "<a href='viewmyevent.php'>Back to Event</a>";
}
  
else {
echo "ERROR";
}
?> 
  <?php 
// close connection 
mysql_close();
?>

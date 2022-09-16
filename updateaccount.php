<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="users"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// Get values from form 
$uname=$_POST['user_name'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$dob=$_POST['dob'];
$pword=$_POST['password'];
$user=$_POST['user_type'];
$email=$_POST['user_email'];
 
 
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(user_name, first_name,last_name,dob,password,user_type,user_email)VALUES('$uname','$fname','$lname','$dob','$pword','$user','$email')";
$result=mysql_query($sql);
 
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='changeaccount.php'>Back to Accounts</a>";
}
 
else {
echo "ERROR";
}
?> 
 
<?php 
// close connection 
mysql_close();
?>
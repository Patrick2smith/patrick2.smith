<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="announcement"; // Table name 
  
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
  
// Get values from form 

$ann=$_POST['ann_user'];
$con=$_POST['announce'];

  

  
  
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(ann_user,announce)VALUES('$ann','$con')";
$result=mysql_query($sql);
  
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<BR>";
echo "<BR>";
echo "announcement Posted Successfully";
echo "<BR>";
echo "<a href='showann.php'>Back to home</a>";
}
  
else {
echo "ERROR";
}
?> 
 
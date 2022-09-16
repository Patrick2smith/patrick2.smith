<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="comments"; // Table name 
  
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
  
// Get values from form 

$user=$_POST['user'];
$comm=$_POST['comments'];

  

  
  
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(user,comments)VALUES('$user','$comm')";
$result=mysql_query($sql);
  
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<BR>";
echo "<BR>";
echo "Comment Posted Successfully";
echo "<BR>";
echo "<a href='showevent.php?event_id=4'>Back to Event</a>";
}
  
else {
echo "ERROR";
}
?> 
  <?php 
// close connection 
mysql_close();
?>
<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hotspot"; // Database name 
$tbl_name="groups"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host","$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// Get values from form 
$gid=$_POST['group_id'];
$gname=$_POST['group_name'];
$creator=$_POST['group_creator'];

 
 
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(group_id,group_name,group_creator)VALUES('$gid','$gname','$creator')";
$result=mysql_query($sql);
 
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
	echo '<a href="viewmygroups.php">View Groups</a>';
}
 
else {
echo "ERROR";
}
?> 
 
<?php 
// close connection 
mysql_close();
?>
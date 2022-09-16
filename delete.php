
<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'users' table
*/

 // connect to the database
 include('connect-db.php');
 
 // check if the 'user_name' variable is set in URL, and check that it is valid
// if (isset($_GET['user_name'])
 
 // get user_name value
 $user_name = $_GET['user_name'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM users WHERE user_name='$user_name'") or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: changeaccount.php");
 echo "Account Deleted Successfully";
 //}
// else
 // if user_name isn't set, or isn't valid, redirect back to view page
 //{
// header("Location: view.php");
 //}
 
?>
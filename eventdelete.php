<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'users' table
*/

 // connect to the database
 include('session.php');
 
 // check if the 'user_name' variable is set in URL, and check that it is valid
// if (isset($_GET['user_name'])
 
 // get user_name value
 $id = $_GET['event_id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM events WHERE event_id='$id'") or die(mysql_error()); 
 
 // redirect back to the view page
 
 echo "Event Deleted Successfully<br>";
 echo '<td><a href="socialytehome.php">Home</a></td>';
 //}
// else
 // if user_name isn't set, or isn't valid, redirect back to view page
 //{
// header("Location: view.php");
 //}
 
?>
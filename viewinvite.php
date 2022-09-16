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

$id = $_GET['invite_id'];
$ses_sql=mysql_query("select * from invite where invite_id='$id'", $connection);
$row = mysql_fetch_assoc($ses_sql);
    $invitee=$row['invitee'];
$invitename=$row['invite_ename'];
$attendance=$row['attendance'];
	
	
?>

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'hotspot';
$table = 'events';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT * FROM {$table} where event_organizer='$user_check'");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);


/*echo "<ol'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";*/
// printing table rows
while($row = mysql_fetch_assoc($result))
{
	echo "<br>";
	
	echo '<center><h2> <a href="showevent.php?event_id='.$row['event_id'].'">'.$row["event_name"].'</a>';
}
mysql_free_result($result);
?>

  <div data-role="main" class="ui-content">
    <form method="post" action=<?php echo '"updateinvite.php?invite_id='.$id.'"'; ?>
      <div class="ui-field-contain">
      
	 <input type="hidden" name="invite_id" id="invite_id" value="" data-clear-btn="true" placeholder="Enter Event Name...">
	 	

		<input type="hidden" name="invitee" id="invitee" value="" data-clear-btn="true" placeholder="Enter Event Name...">
   

       <input type="hidden" name="invite_ename" value="<?php echo $user_check?>" id="invite_ename" data-clear-btn="true" placeholder="...">     

	  
	   
	
	   <br><label for="attendance">Are you going to the event:</label>
        <select name="attendance" id="attendance">
             <option value="yes">Yes</option>
          <option value="no">No</option>
		  <option value="maybe">maybe</option>
        </select>
		
     

</div>
<input type="submit" data-inline="true" value="Submit">
    </form>
  </div>
  
</body>
</html>
  
  
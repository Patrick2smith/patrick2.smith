

< ?php
	include_once('db.php');
 
	if(isset($_POST['user_name']))
	{
	  $name = $_POST['user_name'];
 
	  if(mysql_query("INSERT INTO users VALUES('','$name')"))
		echo "Successful Insertion!";
	  else
		echo "Please try again";
	}
 
 
	$res = mysql_query("SELECT * FROM users");
 
 
?>
 
<form action="." method="POST">
Name: <input type="text" name="name"/><br />
<input type="submit" value=" Enter "/>
</form>
 
<h1>A ..</h1>
< ?php
	while( $row = mysql_fetch_array($res) )
	  echo "$row[user_name]. $row[password] <a href='edit.php?edit=$row[user_name]' 
                <a href='edit.php?edit=$row[user_name]'>edit<br />";
?>
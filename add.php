<html>
<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=mysql_real_escape_string($_POST['user_name']);
$pass=mysql_real_escape_string($_POST['password']);
$query1=mysql_query("insert into addd values('$name','$pass')");
echo "insert into users values('$name','$pass')";
if($query1)
{
header("location:list.php");
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
UserName: <input type="text" name="user_name"><br>
Password: <input type="text" name="password"><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</body>
</html>
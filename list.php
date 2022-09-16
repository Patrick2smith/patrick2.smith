<html>
<body>
<?php
include('config.php');
$query1=mysql_query("select user_name, password from users");
echo "<table><tr><td>UserName</td><td>Password</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['user_name']."</td>";
echo "<td>".$query2['password']."</td>";
echo "<td><a href='edit.php?id=".$query2['user_name']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['user_name']."'>x</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>
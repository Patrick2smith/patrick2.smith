<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>View Records</h1>

<p><b>View All</b> | <a href="view-paginated.php">View Paginated</a></p>

<?php
// connect to the database
include('connect-db.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM users where user_name='' "))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<tr> <th>user_name</th> <th>First Name</th> <th>Last Name</th><th>dob</th><th>password</th><th>user_type</th><th>user_email</th> <th></th> <th></th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->user_name . "</td>";
echo "<td>" . $row->first_tname . "</td>";
echo "<td>" . $row->last_name . "</td>";
echo "<td>" . $row->dob . "</td>";
echo "<td>" . $row->password . "</td>";
echo "<td>" . $row->user_type . "</td>";
echo "<td>" . $row->user_email . "</td>";
echo "<td><a href='records.php?id=" . $row->user_name . "'>Edit</a></td>";
echo "<td><a href='delete.php?id=" . $row->user_name . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>

<a href="records.php">Add New Record</a>
</body>
</html>
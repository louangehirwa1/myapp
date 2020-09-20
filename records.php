<?php
// define('DB_SERVER', 'qn0cquuabmqczee2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
// define('DB_USERNAME', 'msubgt366oef8cfu');
// define('DB_PASSWORD', 'rpw5k5lcga0nkrsp');
// define('DB_NAME', 'krtncuwntwv4icqp');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'myapp');
 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
</head>
<body>
<h3>RECORDS</h3><br><br>

	<table border="1">
	<thead>
		<th>ID</th>
		<th>FIRSTNAME</th>
		<th>LASTNAME</th>
	</thead>
<?php
$query = mysqli_query($conn,"SELECT * FROM users");
if ($query) {
    // Get data array
    while($rows = mysqli_fetch_array($query))  
	{ 
?>
	<tbody>
		<tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['firstname']; ?></td>
			<td><?php echo $rows['lastname']; ?></td>
		</tr>
	</tbody>
	<?php }
    } ?>
</table>
</body>
</html>

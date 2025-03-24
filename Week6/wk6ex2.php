<?php	
	// Connect to server and select database
    $conn = mysqli_connect("localhost", "root", "", "db1_gwalke01", 3307);
	
	// Check if connection was successful
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// SQL query to select all records from the 'test' table
	$sql = "SELECT * FROM test";

	// Execute SQL query
	$result = mysqli_query($conn, $sql);

	// Check if the query was successful
	if (!$result) {
		die("Error executing query: " . mysqli_error($conn));
	}
?>
<html>
<body>

<?php
	// Fetch and display each record as a link
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a><br/>";
	}

	// Close the database connection
	mysqli_close($conn);
?>

</body>
</html>


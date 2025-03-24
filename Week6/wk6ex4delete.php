<?php
	// Connect to server and select database
    $conn = mysqli_connect("localhost", "root", "", "db1_gwalke01", 3307);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Check if the 'name' parameter is provided in the URL
	if (isset($_GET['name'])) {
		$name = $_GET['name'];

		// Prepared statement to delete the record safely
		$delete_sql = "DELETE FROM test WHERE name = ?";
		$stmt = mysqli_prepare($conn, $delete_sql);
		mysqli_stmt_bind_param($stmt, "s", $name);
		$result = mysqli_stmt_execute($stmt);

		if ($result) {
			// Redirect to the main page after successful deletion
			header("Location: wk6ex2action.php");
			exit();
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}
	} else {
		echo "No record selected to delete.";
	}

	// Close the database connection
	mysqli_close($conn);
?>

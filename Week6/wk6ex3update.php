<?php
	// Connect to the database
	$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01", 3307);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Check if the id is passed via GET method
	if (isset($_GET['id'])) {
		$name = $_GET['id'];

		// Query to fetch the record based on the GET parameter 'id'
		$sql = "SELECT * FROM test WHERE name = '$name'";

		// Execute the query and store the result
		$result = mysqli_query($conn, $sql);

		// Fetch the result row
		$row = mysqli_fetch_assoc($result);
	}

	// Update the record if the form is submitted
	if (isset($_POST['btnsubmit'])) {
		$new_name = $_POST['txtname'];
		$new_phone_number = $_POST['txttelno'];
		$new_email = $_POST['txtemail'];

		// Query to update the record in the database
		$update_sql = "UPDATE test SET phone_number = '$new_phone_number', email = '$new_email' WHERE name = '$new_name'";

		// Execute the update query
		if (mysqli_query($conn, $update_sql)) {
			echo "Record updated successfully! <a href = 'wk6ex2.php'>Go Back</a>";
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	}

	// Close the connection
	mysqli_close($conn);
?>

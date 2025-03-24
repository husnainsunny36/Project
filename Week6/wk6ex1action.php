<?php
	

	$conn = mysqli_connect("localhost", "root", "","db1_gwalke01",3307);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Insert data into the database
	$sql = "INSERT INTO test (name, email, phone_number) ";
	$sql = $sql . " VALUES ('$_POST[txtName]', '$_POST[txtEmail]', '$_POST[txtPhoneNumber]')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully.";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	// Select data from the database
	$sql = "SELECT * FROM test";
	$result = mysqli_query($conn, $sql);

	// Check if there are results
	if (mysqli_num_rows($result) > 0) {
		// Output data of each row
		while ($row = mysqli_fetch_assoc($result)) {
			echo "$row[name]  $row[email]  $row[phone_number] <br/>";
		}
	} else {
		echo "0 results";
	}

	// Close the connection
	mysqli_close($conn);
?>

<?php

  header("Content-type: image/jpeg");

  $link = mysqli_connect("localhost", "root", "", "db1_gwalke01", 3307);

	
	// Check if connection was successful
	if (!$link) {
		die("Connection failed: " . mysqli_connect_error());
	}

  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>

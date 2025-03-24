<html>
<head></head>
<body>

<?php
  
  $link = mysqli_connect("localhost", "root", "", "db1_gwalke01", 3307);

	
  // Check if connection was successful
  if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
  }
$sql = "select id,name from monster;";

$result = mysqli_query($link, $sql);


echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td><a href='getwav.php?id=" . $row['id']. "'>Click to play</a></td>";
  echo "<td><img src='getjpg.php?id=" . $row['id']. "' height='100' width='100'</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($link);
?>

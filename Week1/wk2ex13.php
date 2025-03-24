<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // Display the data in a table
  echo '<table border="1" align="center">';
  echo '<tr><th>Year</th><th>Grade</th></tr>';

  // Loop through the array and display each year and grade
  foreach ($mymarks as $index => $value) {
    echo "<tr><td>$index</td><td>$value</td></tr>";
  }

  // Display the best year separately
  echo "<tr><td colspan='2' style='text-align:center;'>My best year was Year 3 when I averaged " . $mymarks["year 3"] . "</td></tr>";

  echo '</table>';
?>

<?php
  // Array holding the marks for six modules (module codes as keys)
  $mymarks["CO453"] = 90;  // Application Programming
  $mymarks["CO457"] = 71;  // Business Modelling
  $mymarks["CO450"] = 99;  // Computer Architecture
  $mymarks["CO454"] = 78;  // Digital Technologies And professional practice
  $mymarks["CO451"] = 82;  // Networking
  $mymarks["CO452"] = 79;  // Programming Concepts

  // Variable to hold the total
  $total = 0;

  // Loop to display the module codes and their marks
  foreach ($mymarks as $index => $value) {
    echo "Module $index has a mark of $value <br/>";

    // Add the current module mark to the total
    $total = $total + $value;
  }

  // Calculate the average mark
  $average = $total / 6;

  // Output the average mark
  echo "<br/>The average mark is: $average";
?>

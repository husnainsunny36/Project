<?php
  session_start(); // Start the session to access session data

  // Get the quantity, size, and color from the previous pages
  $quantity = $_POST['selqty'];
  $size = $_POST['selsize'];
  $color = $_POST['selcolour'];

  // Initialize the price based on the size
  switch ($size) {
    case "small":
      $price = 15.75;
      break;
    case "medium":
      $price = 16.75;
      break;
    case "large":
      $price = 17.75;
      break;
    case "xlarge":
      $price = 18.75;
      break;
    default:
      $price = 0; // Default case if no size selected
      break;
  }

  // Calculate the total cost
  $total = $quantity * $price;

  // Display the order summary
  echo "<h2>Your order summary:</h2>";
  echo "<h3>Quantity: $quantity</h3>";
  echo "<h3>Size: " . ucfirst($size) . " (£$price)</h3>";
  echo "<h3>Colour: " . ucfirst($color) . "</h3>";
  echo "<h3>Total cost: £$total</h3>";
?>

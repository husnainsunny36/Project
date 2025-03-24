<?php
  session_start(); // Start the session to store data across pages
?>

<html>
  <head>
    <title>Select Colour</title>
  </head>
  <body>
    <form action="confirmation.php" method="post">
      <h3>Select the colour for your widget:</h3>
      
      <!-- Color options -->
      <select name="selcolour">
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="yellow">Yellow</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
      </select>

      <br/><br/>

      <!-- Pass quantity and size to confirmation.php -->
      <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>" />
      <input type="hidden" name="selsize" value="<?php echo $_POST['selsize']; ?>" />

      <input type="submit" value="Next"/>
    </form>
  </body>
</html>

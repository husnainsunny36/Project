<?php
  session_start(); // Start the session to store data across pages
?>

<html>
  <head>
    <title>Select Size</title>
  </head>
  <body>
    <form action="selectcolour.php" method="post">
      <h3>Select the size of the widget:</h3>
      
      <!-- Size options -->
      <select name="selsize">
        <option value="small">Small (£15.75)</option>
        <option value="medium">Medium (£16.75)</option>
        <option value="large">Large (£17.75)</option>
        <option value="xlarge">Extra Large (£18.75)</option>
      </select>

      <br/><br/>

      <!-- Pass quantity to selectcolour.php -->
      <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>" />

      <input type="submit" value="Next"/>
    </form>
  </body>
</html>

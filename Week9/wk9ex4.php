<?php
// Start the session at the beginning of the script
session_start();

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01", 3307);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['selweek'])) {
    // Use prepared statements to prevent SQL injection
    $selweek = mysqli_real_escape_string($conn, $_POST['selweek']);
    $sql = "SELECT * FROM lotto WHERE wk='$selweek';";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        echo "Number 1 is  $row[number1]<br/>";
        echo "Number 2 is  $row[number2]<br/>";
        echo "Number 3 is  $row[number3]<br/>";
        echo "Number 4 is  $row[number4]<br/>";
        echo "Number 5 is  $row[number5]<br/>";
        echo "Number 6 is  $row[number6]<br/>";
    } else {
        echo "No results found for the selected week.";
    }
} else {
    // Retrieve all weeks from the database and create the form
    $sql = "SELECT * FROM lotto;";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
        echo "<br/>Select the lottery week ";
        echo "<select name='selweek'>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='$row[wk]'>$row[wk]</option>";
        }
        echo "</select><br/>";
        echo "<input type='submit' value='Select' />";
        echo "</form>";
    } else {
        echo "No lottery weeks available.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

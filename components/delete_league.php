<button onclick="history.back()">Go Back</button>

<?php

include "config.php";

if (!empty($_POST['name'])) {
    // Retrieve form data
    $name = $_POST['name'];

    // Construct DELETE statement
    $sql_statement = "DELETE FROM Leagues WHERE name = '$name'";

    // Execute DELETE statement and check result
    $result = mysqli_query($db, $sql_statement);
    if ($result) {
        echo "League deleted successfully!";
    } else {
        echo "Error deleting league: " . mysqli_error($db);
    }
}

?>

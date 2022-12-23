<?php

include "config.php";

if (!empty($_POST['name'])) {
    // Retrieve form data
    $name = $_POST['name'];

    // Construct DELETE statement
    $sql_statement = "DELETE FROM Stadium WHERE name = '$name'";

    // Execute DELETE statement and check result
    $result = mysqli_query($db, $sql_statement);
    if ($result) {
        echo "Stadium deleted successfully!";
    } else {
        echo "Error deleting stadium: " . mysqli_error($db);
    }
}

?>

<button onclick="history.back()">Go Back</button>

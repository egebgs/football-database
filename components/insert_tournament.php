<?php

include "config.php";

if (!empty($_POST['name'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $size = $_POST['size'];

    // Construct INSERT statement
    $sql_statement = "INSERT INTO Tournaments (name, size) VALUES ('$name', $size)";

    // Execute INSERT statement and check result
    $result = mysqli_query($db, $sql_statement);
    if ($result) {
        echo "Tournament added successfully!";
    } else {
        echo "Error adding tournament: " . mysqli_error($db);
    }
}

?>

<button onclick="history.back()">Go Back</button>

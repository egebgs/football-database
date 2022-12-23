<?php

include "config.php";

if (!empty($_POST['name'])) {
    // Retrieve form data
    $country = $_POST['country'];
    $name = $_POST['name'];
    $capacity = $_POST['capacity'];

    // Construct INSERT statement
    $sql_statement = "INSERT INTO Leagues (country, name, capacity) VALUES ('$country', '$name', $capacity)";

    // Execute INSERT statement and check result
    $result = mysqli_query($db, $sql_statement);
    if ($result) {
        echo "League added successfully!";
    } else {
        echo "Error adding league: " . mysqli_error($db);
    }
}

?>
<button onclick="history.back()">Go Back</button>


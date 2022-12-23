<?php

include "config.php";


if (!empty($_POST['name'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $location = $_POST['location'];
    $capacity = $_POST['capacity'];
    $tid = $_POST['tid'];

    // Construct INSERT statement
    $sql_statement = "INSERT INTO Stadium (name, location, capacity) VALUES ('$name', '$location', $capacity)";

    // Execute INSERT statement and check result
    $result = mysqli_query($db, $sql_statement);
    if ($result) {
        echo "Stadium added successfully!";

        $sql_statement2 = "INSERT INTO owns(stadium , tid) VALUES ('$name' , '$tid')";

        $result = mysqli_query($db, $sql_statement2);
    } else {
        echo "Error adding stadium: " . mysqli_error($db);
    }
}

?>

<button onclick="history.back()">Go Back</button>

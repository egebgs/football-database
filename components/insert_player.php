<?php

include "config.php";

if (!empty($_POST['pid'])) {
    // Retrieve form data
    $nationality = $_POST['nationality'];
    $pname = $_POST['pname'];
    $pid = $_POST['pid'];
    $position = $_POST['position'];
    $tid = $_POST['tid'];

    

    // Construct INSERT statement
    $sql_statement = "INSERT INTO Players (nationality, name, pid, position) VALUES ('$nationality', '$pname', $pid, '$position')";

    // Execute INSERT statement and check result
    $result = mysqli_query($db, $sql_statement);
    if ($result) {

        
        
        $sql_statement2 = "INSERT INTO plays_for (tid, pid)
        VALUES ($tid, $pid)";
        mysqli_query($db, $sql_statement2);
        echo "Player added successfully!";


    } else {
        echo "Error adding player: " . mysqli_error($db);
    }
}

?>

<button onclick="history.back()">Go Back</button>


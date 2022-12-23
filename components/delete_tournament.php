<?php

include "config.php";

if (!empty($_POST['tname'])) {
    $tname = $_POST['tname'];
    $sql_statement = "DELETE FROM Tournaments WHERE tname = '$tname'";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} else {
    echo "An error occurred.";
}

?>

<button onclick="history.back()">Go Back</button>

<?php

include "config.php";

if(!empty($_POST['tid']))
{
    $tid = $_POST['tid'];
    $sql_statement = "DELETE FROM teams WHERE tid = $tid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>

<button onclick="history.back()">Go Back</button>








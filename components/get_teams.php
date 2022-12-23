<?php
    include "config.php";

    $sql_statement = "SELECT * FROM teams";

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
        $sailor_id = $row['tid'];
        $sailor_name = $row['name'];
        $srating = $row['abbreviation'];
        $budget = $row['budget'];
        echo $sailor_id . " " . $sailor_name . " " . $srating . " " . $budget .  "<br>" ;
    }
?>
<button onclick="history.back()">Go Back</button>

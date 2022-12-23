<?php
include "config.php"; 

if (!empty($_POST['tid'])){ 
    $name = $_POST['tname'];
    $tid = $_POST['tid']; 
    $budget = $_POST['budget']; 
    $abbreviation = $_POST['abbreviation'];
    
    $sql_statement = "INSERT INTO teams (name, budget, abbreviation, tid) 
    VALUES ('$name',$budget,'$abbreviation', $tid)"; 
    
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "An error occured.";
}

?>
<a href="/components/table_teams.php">
    <button>Show Table</button>
</a>
<button onclick="history.back()">Go Back</button>

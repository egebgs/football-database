<?php
    include "config.php"; 

    if (!empty($_POST['tid']) && !empty($_POST['tournament'])){ 
        $tid = $_POST['tid'];
        $tournament = $_POST['tournament'];
        
        // Check if tournament is full
        $sql_statement = "SELECT COUNT(*) as count FROM Joins WHERE tournament = '$tournament'";
        $result = mysqli_query($db, $sql_statement);
        $row = mysqli_fetch_assoc($result);
        $join_count = $row['count'];
       
        
        // Get tournament capacity
        $sql_statement = "SELECT size FROM Tournaments WHERE name = '$tournament'";
        $result = mysqli_query($db, $sql_statement);
        $row = mysqli_fetch_assoc($result);
        $size = $row['size'];
        
        
        if ($join_count < $size) {
            // Insert team into tournament
            
            $sql_statement = "INSERT INTO Joins (tournament, tid) VALUES ('$tournament', $tid)"; 
            $result = mysqli_query($db, $sql_statement);
            
            if ($result) {
                echo "Team was successfully added to tournament.";
            } else {
                echo "An error occurred while adding the team to the tournament.";
            }
        } else {
            echo "The tournament is full and cannot accept any more teams.";
        }
        
    } else {
        echo "An error occurred. Make sure you provide both the team ID and tournament name.";
    }

?>

<button onclick="history.back()">Go Back</button>

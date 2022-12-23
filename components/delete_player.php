<button onclick="history.back()">Go Back</button>

<?php
include "config.php"; 

if (!empty($_POST['pid'])){ 
    $pid = $_POST['pid']; 
    
    $sql_statement = "DELETE FROM players WHERE pid=$pid"; 
    
    $result = mysqli_query($db, $sql_statement);
    if($result){
        $sql_statement2 = "DELETE FROM plays_for WHERE pid=$pid";
        mysqli_query($db, $sql_statement2);
    }
    echo "Your result is: " . $result;
    
} 
else 
{
    echo "An error occured.";
}

?>

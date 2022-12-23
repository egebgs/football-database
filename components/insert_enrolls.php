<?php
include "config.php"; 

if (!empty($_POST['tid'])){ 

    $tid = $_POST['tid']; 
    $league = $_POST['league'];
	
	$sql_statement = "SELECT COUNT(*) as count FROM enrolls WHERE league='$league'"; 
    $result = mysqli_query($db, $sql_statement);
    $row = mysqli_fetch_assoc($result);
    $enroll_count = $row['count'];
    
    $sql_statement = "SELECT capacity FROM leagues WHERE name='$league'"; 
    $result = mysqli_query($db, $sql_statement);
    $row = mysqli_fetch_assoc($result);
    $capacity = $row['capacity'];

    if($capacity > $enroll_count){
        $sql_statement = "INSERT INTO enrolls (tid,league) 
        VALUES ('$tid', '$league')"; 
        $result1 = mysqli_query($db, $sql_statement);
        echo "Your result is: " . $result1;
    }

    else{
        echo "The capacity is full.";
    }
} 
else 
{
    echo "An error occured.";
}

?>
<a href="/components/table_enrolls.php">
    <button>Show Table</button>
</a>
<button onclick="history.back()">Go Back</button>

<?php 

include "config.php";





if(!empty($_POST['budget']))
{
    $budget = $_POST['budget'];
    $sql_command = "SELECT * FROM teams WHERE $budget > budget";

    $myresult = mysqli_query($db, $sql_command);

        while($id_rows = mysqli_fetch_assoc($myresult))
        {
            $tid = $id_rows['tid'];
            $tname = $id_rows['tname'];
            $abbreviation = $id_rows['abbreviation'];
            $budget = $id_rows['budget'];
            echo "<option value=$tid>". $tname . " - " . $budget . "</option>";
        }
}

?>

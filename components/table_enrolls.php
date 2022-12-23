<?php   
 include "config.php"; 

 if(isset($_POST['search'])){
     $valueToSearch = $_POST['valueToSearch'];
     $query = "SELECT * FROM `enrolls` WHERE CONCAT (`tid` ,`league`) LIKE '%".$valueToSearch."%'";
     $search_result = filterTable($query);
 }
 else{
     $query = "select * from enrolls";  
     $search_result = filterTable($query);
 }

 function filterTable($query){
     $db = mysqli_connect('localhost','root','','football');
     $filter_result = mysqli_query($db,$query); 
     return $filter_result;
 }

 
 ?>  
 <!DOCTYPE html>  
 <html>  
     <head> 
     <link rel="stylesheet" href="style.css" /> 
     </head>
     <title> </title>
     <style>
          table,tr,th,td
          {
               border: 1px solid black;
          }
     </style>
     <body>
          <form action="table_enrolls.php" method="post">
               <input type="text" name="valueToSearch" placeholder="Enter a value:"><br><br>
               <input type="submit" name="search" value="filter"><br><br>


               <table>
                    <tr>
                         <th>Team ID</th>
                         <th>League</th>
                         
                    </tr>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                         <td><?php echo $row['tid'];?></td>
                         <td><?php echo $row['league'];?></td>
                         
                    </tr>
                    <?php endwhile;?>
               </table>
          </form>

     </body>
     <button onclick="history.back()">Go Back</button>

 </html>

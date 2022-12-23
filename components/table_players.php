<?php   
 include "config.php"; 

 if(isset($_POST['search'])){
     $valueToSearch = $_POST['valueToSearch'];
     $query = "SELECT * FROM `players` WHERE CONCAT (`nationality` , `name`, `pid`, `position`) LIKE '%".$valueToSearch."%'";
     $search_result = filterTable($query);
 }
 else{
     $query = "select * from players";  
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
     <title>player Table</title>
     <style>
          table,tr,th,td
          {
               border: 1px solid black;
          }
     </style>
     <body>
          <form action="table_players.php" method="post">
               <input type="text" name="valueToSearch" placeholder="Enter a value:"><br><br>
               <input type="submit" name="search" value="filter"><br><br>


               <table>
                    <tr>
                         <th>Nationality</th>
                         <th>Name</th>
                         <th>Player ID</th>
                         <th>Position</th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                         <td><?php echo $row['nationality'];?></td>
                         <td><?php echo $row['name'];?></td>
                         <td><?php echo $row['pid'];?></td>
                         <td><?php echo $row['position'];?></td>
                    </tr>
                    <?php endwhile;?>
               </table>
          </form>

     </body>
     <button onclick="history.back()">Go Back</button>

 </html>

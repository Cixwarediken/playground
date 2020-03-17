<?php
$conn= mysqli_connect('localhost','root','','todo_db');
$sql = 'SELECT * FROM users';
  // Executing query
 $result =$conn->query($sql);  
 // Getting Result

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1"class="table">
        <tr>
           <?php
          while($row=$result->fetch_assoc()){
                echo "<tr>";
              foreach($row as $r){
              echo  '<td>'. $r .'</td>';
              }
              echo "</tr>";
          }
           ?>
        </tr>
    </table>
</body>
</html>
<style>
body {
    background-color:lightgray;
}
    .table {
        margin-left:auto; 
    margin-right:auto;
    margin-top:10%;
    background-color:rgb(255,69,0);
    box-shadow: 5px 10px teal;
    }
    td 
    {
        padding:20px;
        color:white;
        font-size:25px;
    }
</style>
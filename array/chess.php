<html>
<head>
</head>
<body>
<table border="1px" align="center">
      <?php
      $arr=[];
      function chess($count)
    {
        for($i=1;$i<=$count;$i++)
        //i is row and j is row
        {
            echo "<tr>";
            for($j=1;$j<=$count;$j++)
            {
            $n=$i+$j;
            if($n%2==0)
            {
            echo "<td height=70px width=70px bgcolor=#FFFFFF></td>";
            }
            else
            {
            echo "<td height=70px width=70px bgcolor=#000000></td>";
            }
            }
            echo "</tr>";
        }
    } 
        echo chess(8);
          ?>
</table>
</body>
</html>
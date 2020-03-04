<?php
function GetSquareArray($n)
{
   $arr=[];
    $value=1;
    for ($i = 0;$i < $n;$i++)
    {

        for ($j = 0;$j < $n;$j++)
        {
          $arr[$i][$j]=$value++;
        }
    }
    return $arr;
}
$matrix=GetSquareArray(8);
?>
<table border="1">
<?php
  for($i=0;$i<count($matrix);$i++)
    {
      echo "<tr>";
      for($j=0;$j<count($matrix[$i]);$j++)
      {
        echo"<td>";
        echo $matrix[$i][$j];
        echo "</td>";
      }
      echo "</tr>";
    }
    ?>
</table>
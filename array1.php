<?php
 
    $array1;
    $array2;
    $array=[9,7,1,13,15,21,17,56,43,12];
    echo'Before using sorting :'."<br/>";
    print_r($array);
    echo"<br/>";
    function sortArray($array){
        $count= count($array);
        for($i=0;$i<$count;$i++)
        {
            for($j=$i+1;$j<$count;$j++)
            {
                if($array[$i]>$array[$j])
                {
                    $temp=$array[$i];
                    $array[$i]=$array[$j];
                    $array[$j]=$temp;
                }
            }
        }
        echo'After using sorting'."<br/>";
        print_r($array);
        return $array;
    }

       function filterData($array)
       {
           global $array1;
           global $array2;

           $sorted = sortArray($array);
           $arrSize=count($sorted);
           $splitSize=(int)($arrSize/2);
           foreach ($sorted as $key => $value)
           {
               if($key<=$splitSize)
               {
                   $array1[]=$value;
               } else {
                   $array2[]=$value;
               }
           }
       }
       //printing the result
      filterData($array);
       echo'<br/>';
       echo 'this is the first array :'. json_encode($array1);
       echo'<br/>';
       echo 'this is the second array :'. json_encode($array2);
?>
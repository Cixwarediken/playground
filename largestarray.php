<?php
    function largest($array)
    {
        $count = count($array);
        $max=$array[0];
        for($i=1;$i<$count;$i++)
         if($array[$i]>$max)
           $max=$array[$i];
         return $max;  
    }
    $array=[5,1,7,23,12,77,56,1,85,4];
    //first take value of 5 and assign it to the first max value and inside if loop it is checked for first index and gives 5>5 which 
    //is false value and it returns nothing by checking again till it gets 7 , then checks whether the 7>5 or not 
    //which is also true and it keeps checking till the maximum value is assigned.
    echo 'THE LAREST ARRAY IS :'.largest($array);
?>
<?php
function check ($number)
{
    if ($number%2==0)
    {
        echo"The number is even";
    }
    else{
        echo"The number is odd";
    }
}
$number=4;
check($number)
?>
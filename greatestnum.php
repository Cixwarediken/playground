<?php
$num1=10;
$num2=8;
$num3=7;
if($num1>$num2 && $num1>$num3)
{
    echo "The greatest number is : $num1";
}
else
{
    if($num2>$num1 && $num2>$num3)
    {
        echo "The gratest number is : $num2";
    }
    else
        echo "The greatest number is :$num3";
}
?>
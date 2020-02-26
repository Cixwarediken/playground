<?php
$num=1234;
$rev=0;
while($num>1)
{
    $rem=$num%10;
    $rev=($rev*10)+$rem;
    $num=($num/10);
}
 echo"Reverse number of 1234 is: $rev";
 ?>
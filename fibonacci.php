<?php
$count = 0;
function fibonacci($num)
{
    if($num==0)
    return 0;
    elseif ($num==1)
    return 1;
    else
    {
    return(fibonacci($num-1)+fibonacci($num-2));
    }
}
$num=13;
for($count=0;$count<$num;$count++)
{
    echo fibonacci($count)."<br/>";
}
?>
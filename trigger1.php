<?php
    function addition($num){
        $num=$num+5;
        return multiplication($num);
    }
    function multiplication($num){
        $num=$num*5;
        return subtraction($num);
    }
    function subtraction($num)
    {
        $num=$num-10;
        return $num;
    }
    echo addition(4);
?>
<?php
    //The explode is used for converting the strings into the arrays.
    echo 'This is the example of the exploding strings.';
    echo "<br/>";
    $str='Explode function is transferring string into the array';
    echo "<br/>";
    print_r(explode(' ',$str));
    echo "<br/>";
    echo "<br/>";
    //The implode is used for converting the arrays into the strings.
    echo 'This is the example of the imploding strings.';
    echo "<br/>";
    $array= array('Nepal','is','beautiful','country');
    echo "<br/>";
    echo implode(" ",$array);
?>
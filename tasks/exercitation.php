<?php
    $str="exercitation";
    echo 'The given word is :'. $str."<br>";
    echo substr($str,4,3)."<br>";
    echo 'The position of the \'i\' is :'.strpos($str,"i")."<br>";
    echo 'After removing exer : '.substr_replace($str,'',0,4)."<br>";
    echo 'Removing \'tation\' with \'se\' is :'.substr_replace($str,'se',6)."<br>";
   // $str1="ex|er|ci|ta|ti|on";
   // print_r (explode('|',$str1,6));
    print_r(str_split("exercitation",2)); //spliting with 2 letters
?>
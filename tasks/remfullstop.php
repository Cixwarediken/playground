<html>
   <html>
    <head>
    </head>
    <body>
    <p align='center'>The paragraph after removing the fullstop</p>
    <p align='center'>
    <?php
        $str="Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.";
        $fstop =strpos($str,'.');
        echo substr($str,0,$fstop);
    ?>
    </p>
    </body> 

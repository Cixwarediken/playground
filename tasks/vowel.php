<html>
<head>
</head>
<body>
    <p>
        <?php
            $str="Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.";
           
        ?>
        <p >
        <?php
        $vowel=array('a','e','i','o','u');
        ?>
        </p>
        </p>
        <p>
        <?php
            $replace=array('<span class=a>A</span>',
            '<span class=e>E</span>',
            '<span class=i>I</span>',
            '<span class=o>O</span>',
            '<span class=u>U</span>');  
        ?>
        </p>
        <p>
        <?php
            echo str_replace($vowel,$replace,$str);
        ?>
        </p>
</body>
</html>
<style>
    .a
    {
       color:red; 
    }
    .e
    {
       color:pink; 
    }
    .i
    {
       color:blue; 
    }
    .o
    {
       color:yellow; 
    }
    .u
    {
       color:green; 
    }
    
    
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo str_repeat("Samui",7)."<br>";
    ?>
    <?php
    echo str_replace("Minasan","Samui","Konnichiwa Minasan!")."<br>";
    ?>
    <?php
    echo str_shuffle("Samui")."<br>";
    ?>
    <?php
    print_r(str_split("Hello"));
    ?>
</body>
</html>
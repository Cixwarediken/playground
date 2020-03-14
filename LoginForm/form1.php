<?php
    session_start();
    $name=$_POST['username'];
    $password=$_POST['Password'];
    if($name==null && $password==null)
    {
        echo 'The username and password can\'t be left empty'."<br>";
    }
    else 
    {
         $_SESSION['username']=$_POST['username'];
        echo header('Location: header.php');
    }
?>
 <?php
session_start();

function gotoLogin()
 {
    header('Location: index.php');
    session_destroy();
}
?>
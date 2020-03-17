<?php include 'auth.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    gotoLogin();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['fname']; ?>, the email <?php echo $_SESSION['email']; ?>  is registered successfully !</h2>
    </br>
    <form method="POST" id="goback">
        <button class="button"type="submit">Go Back</button>
    </form>
</body>
</html>
<style>
    body 
    {
        background-color:teal;
    }
    h2 
    {
        color:white;
        text-align: center;
        text-decoration:underline;
    }

    #goback 
    {
    text-align: center;
    }
    .button 
    {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }
</style>
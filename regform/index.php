<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
     $errors=[];
     $fname=trim($_POST['fname']," ");
     $lname=trim($_POST['lname']," ");
     $email=trim($_POST['email']," ");
     $address=trim($_POST['address']," ");
     $password=$_POST['password'];

     if(!$fname || strlen($fname)<1)
     {
         $errors['fname']="<br>".'First Name is required';
     }
     elseif(strlen($fname)>255){
         $errors['fname']='First Name shouldnot exceed 255 strings';
     }
     if(!$lname || strlen($lname)<1){
        $errors['lname']='Last Name is required';
    }
    elseif(strlen($lname)>255){
        $errors['lname']='last Name shouldnot exceed 255 strings';
    }
    if(!$email || strlen($email)<1){
        $errors['email']='email should not be left empty';
    }
    elseif(filter_var ($email, FILTER_VALIDATE_EMAIL)==false)
    {
        $errors['email']='Not an vaild email';
    }
    if(!$address || strlen($address)<1){
        $errors['address']='Please enter your address';
    }
    elseif(strlen($address)>255){
        $errors['address']='Addres shouldnot exceed 255 strings';
    }
    if(!$password || strlen($password)<1){
        $errors['password']='Please enter your password';
    }
    else{
        session_start();
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        $_SESSION['email']=$email;
        header('location:welcome.php');
    }
}
 ?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form  method="POST">
            <table class="form" >  
                <tr>
                    <td>
                        <label for="fname">First Name</label>
                    </td>
                    <td>
                        <input type="text" value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $fname; ?>" placeholder="Enter your name" id="fname" name="fname">
                    </td><br>
                    <td>
                        <span style="color:red">
                        <?php
                        if(isset($errors['fname'])) {
                            echo $errors['fname'];
                            }
                        ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lname">Last Name</label>
                    </td>
                    <td>
                        <input type="text"value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $lname; ?>"  placeholder="Enter your name" id="fname" name="lname">
                    </td><br>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['lname'])){
                                    echo $errors['lname'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="text"value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $email; ?>" placeholder="e.g jdoe@gmail.com" id="email" name="email">
                    </td><br>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['email'])){
                                    echo $errors['email'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <input type="text"value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $address; ?>" placeholder="Enter your Address"  name="address">
                    </td><br>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['address'])){
                                    echo $errors['address'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td><br>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['password'])){
                                    echo $errors['password'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                
                <tr>
                    <td  id="btn" colspan="2">
                        <input id="register" type="submit" value="Register Now"><br>
                        <Input id="reset" type="reset" value="Cancel">
                    </td>
            </table> 
        </form>
    </body>
</html>
<style>
    body 
    {
        background-color:lightgray;
    }
    .form 
    {
        box-sizing: border-box;
        width: auto;
        height: auto;
        padding: 30px;  
        border: 3px solid black;
        background-color:wheat;
        box-shadow: 7px 9px 7px #888888;
        margin:10% auto; 
    }
    #register,#reset 
    {
        background-color: rgb(0, 64, 255);
        border: none;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin:5px;
        margin-left:35%;
    }
</style>
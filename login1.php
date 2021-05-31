<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Input From UI Design</title>
        <link rel="stylesheet" href="login.css">
        <style type="text/css">
            .box{
                position: absolute;
                top:50%;
                left: 50%;

            }
           input[type="reset"], button {
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(eiffel.jpeg);
    background-size: cover;
}

        </style>
    </head>    
    <body>
        <?php 
            include 'header1.php'; 


        
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            $con=mysqli_connect("localhost","root","","tours");
            $res=mysqli_query($con,"select * from user");
            $User=[];
            $passw=[];
            while($row=mysqli_fetch_array($res)){
                $User[]=$row['Username'];
                $passw[]=$row['Password'];
            }
            if(in_array($username,$User)&&in_array($pass,$passw)){
            $_SESSION['user']=$username;
            $_SESSION['pass']=$pass;
            echo"<script>window.open('header1.php','_self')</script>";

            header('Location:homepage.php');
            }
            else{
               
                echo"<script>alert('Enter Correct Username and password')</script>";
                }
            
        }
        ?>
        <div class="box">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="inputBox">
                    <input type="text" name="username" required>
                    <label>username</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required>
                    <label>password</label>
                </div>
                <button name="submit">Submit</button>
                <input type="Reset">
            </form>
        </div>
        <?php include 'footer.php'?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="signin.css">
    </head>
<html>    
    <body>
         <?php include 'header.php';?>
        <div class="box">
       
         <h2>Sign Up</h2>
          <form method="post" action="">
                <div class="inputBox">
                    <input type="text" name="name" required>
                    <label>name</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="passw" required>
                    <label>Create password</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required>
                    <label>Re-Enter password</label>
                </div>
        <?php
            if(isset($_POST['submit']))
               {
                $username=$_POST['name'];
                $password=$_POST['passw'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $con=mysqli_connect("localhost","root","","tours");
                if($password==$pass){
                    $res=mysqli_query($con,"insert into user values('$username','$pass','$email')");
                    echo "<script>alert('Account is Created Successfully')</script>";
                    echo"<script>window.open('login1.php','_self')</script>";
                }
                else{
                    if($pass!=$password){
                        echo "<p style='color:red'><b>Password UnMatched</b></p>";
                    }
                }
                } 
        ?>
        
           
           
                <button name="submit">Submit</button>
                <button type="reset">Reset</button>
            </form>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
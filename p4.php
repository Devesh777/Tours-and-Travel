<html>
<head>

<link rel="stylesheet" href="login.css">
<style type="text/css">
	input[type="Reset"],button {
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}
body{
	background-image:url(taj.jpeg);
	background-size: cover;
}
</style>
</head>
<body>
<?php
include 'header.php';
error_reporting(0);
if(isset($_POST['Submit'])){
 $name=$_POST['Username'];
 $pass=$_POST['pwd'];
 $con=mysqli_connect("localhost","root","","tours");
 $res=mysqli_query($con,"select * from admin where Username='$name' and Password='$pass'");
 if($res->num_rows==0){
 	echo"<script>window.open('p7.php','_self')</script>";
 	
 }
 else{
 	echo "<script>alert('Enter the valid username and password')</script>";
 }
 
}
?>
<div class="box">
	<h2>Admin Login</h2>
	<form method="post",action="">
		<div class="inputbox">
		<br><input type="text" name="Username"><br>
		<label>Username</label>
		</div>
		<div class="inputbox">
		<br><input type="password" name="pwd"><br><br>
		<label>Password</label>
		</div>
		<button name="Submit">Submit</button>
		<input type="Reset" name="Reset">
	</form>
</div>
</body>
</html>
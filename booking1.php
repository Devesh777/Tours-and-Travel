<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url(itz.jpeg); 
	background-repeat: no-repeat;
	background-size: cover;
}
.box{
	position:absolute;
	top: 53%;
	left: 50%;
	transform:translate(-50%,-50%);
	width:700px;
	background: #fff;
	padding: 40px;
	border: 1px solid rgba(0,0,0,.1);
	box-shadow: 0 5px 10px rgba(0,0,0,.3);
}
.box h2{
	margin: 0 0 40px;
	padding: 0;
	color: #f7497d;
	text-transform: uppercase;
}
.box input{
	padding: 10px 0px;
	margin-bottom: 30px;

}
.box input,button{
	width: 100%;
	box-sizing: border-box;
	box-shadow: none;
	outline: none;
	border: none;
	border-bottom: 2px solid #999;

}
.box button
{	
	padding: 12px;
	font-size: 15px;
	border-radius: 10px;
	margin-top:30px;
	border-bottom: none;
	cursor:pointer;
	background: #f7497d;
	color:#fff;
	margin-bottom: 0;
	text-transform: uppercase;
	box-sizing: border-box;
}
.box form div{
	position: relative;
}

.box form div label{
	position: absolute;
	top:10px;
	left:0;
	pointer-events: none;
	color:#999;
	transition: .5s;
}
.box input:valid ~ label,
.box input:focus ~ label{
	top:-12px;
	left:0;
	color:#f7497d;
	font-weight: bold;
	font-size: 12px;
}
.box input:valid,.box input:focus,p.focus 
{
	border-bottom:2px solid #f7497d;
}
.box input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
.box input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
}
footer .left ul{
	padding: 15px 0;
	margin: 0;
}
footer .left a{
	text-decoration: none;
	color: #fff;
}
footer .left li{
	font-size: 18px;
	color: white;
	padding: 15px 0;
	list-style: none;
}
footer .left{
	height: 100px;
	width:300px;
	position: absolute;
	left: 300px;
	border: none;
	padding-right: 80px;
    border-right: 1px solid #fff;
}
footer{
	height: 20px;
	padding-top: 40px;
	width:100%;
	background: rgba(0,0,1,0.5);
	position: fixed;
	bottom:0;
}
	</style>
</head>
<body>
	 <?php include 'header1.php';?>
	 <div class="box">
	 <h2>Booking form</h2>	
	 <?php
	/*error_reporting(0);
	if(isset($_SESSION['user'])){
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['eml'];
	$phone=$_POST['phn'];
	$fd=$_SESSION['da'];
	$td=$_SESSION['dt'];
	$num=$_POST['num'];
	$_SESSION['NAME']=$name;
	$_SESSION['EMAIL']=$email;
	$log=$_SESSION['user'];
	$res=mysqli_query($con,"insert into customer99 values('$name','$email','$fd','$td','$ciy','$cnt','$phone','$num','$log')");
   
	}
	}
	else{
		echo"<script>alert('Please Login')</script>";
		echo"<script>window.open('homepage.php','_self')</script>";	
	}
	?>*/
	
		$con=mysqli_connect("localhost","root","","tours");
		$cnt=$_SESSION['country'];
		$ciy=$_SESSION['city'];
		$ct=mysqli_query($con,"select Cost from trip where Country='$cnt'and City='$ciy'");
		while($row=mysqli_fetch_array($ct)){
			echo"<p style='color:red'><b>Cost:".$row['Cost'].'</b></p>';
	}		
	?>	
	<form action="" method="post">
			<div>
				<input type="text" name="name" required>
				<label>Name</label>
			</div>
			<div>
				<input type="email" name="eml" required>
				<label>Email</label>
			</div>
			<div>
				<input type="tel" name="phn" required>
				<label>Phone Number</label>
			</div>
			<div>
				<input type="Number" name="num" required>
				<label>Number of Passengers</label>
			</div>
			<div>
				<input type="date" name="da"  min="2019-10-23" max="2020-12-31"required>
				<label>Date of Arrival</label>
			</div>

			<div>
				<input type="date" name="dt"  min="2019-10-24" max="2020-12-31"required>
				<label>Date of Departure</label>
			</div>

	 <?php 
	error_reporting(0);
	if(isset($_SESSION['user'])){
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['eml'];
	$phone=$_POST['phn'];
	$fd=$_POST['da'];
	$td=$_POST['dt'];
	$num=$_POST['num'];
	$_SESSION['NAME']=$name;
	$_SESSION['EMAIL']=$email;
	$log=$_SESSION['user'];
	$res=mysqli_query($con,"insert into customer99 values('$name','$email','$fd','$td','$ciy','$cnt','$phone','$num','$log')");
    echo"<script>alert('Booking Done Successfully')</script>";
    echo"<script>window.open('homepage.php','_self')</script>";	
	}
	}
	else{
		echo"<script>alert('Please Login')</script>";
		echo"<script>window.open('homepage.php','_self')</script>";	
	}
	
	

	?>
	
		
			
			<button name="submit">Submit</button>  
		</form>
	</div>
	<?php include'footer.php';?> 
</body>
</html>

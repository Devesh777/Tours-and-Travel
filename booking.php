<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="booking.css">
</head>
<body background="itz.jpeg">
	<?php include 'header1.php';?>
	<div class="box">
	<h2>Booking form</h2>
	<?php
	$country=$_SESSION['country'];
	$city=$_SESSION['City'];
	$trp=$_SESSION['trip'];

				if($trp=="Adventerous"){
				$con=mysqli_connect("localhost","root","","tours");	
				$pr=mysqli_query($con,"select * from advent1 where Country='$country'");
				$row=mysqli_fetch_array($pr);
				if($row['City1']==$city){
					echo"<p>Cost:" .$row['CostCity1']."<p>";
				}

				elseif($row['City2']==$city){
					echo"<p style='color:red'><b>Cost:".$row['CostCity2']."</b></p>";
					
				}
				elseif($row['City3']==$city){
					echo"<p style='color:red'><b>Cost:" .$row['CostCity3']."</b></p>";
					
				}
				elseif($row['City4']==$city){
					echo "<p style='color:red'><b>Cost:".$row['CostCity4']."</b></p>";
					
				}
				
				}
				if($trp=="Family Holiday"){
				$con=mysqli_connect("localhost","root","","tours");	
				$pr=mysqli_query($con,"select * from family_trip where Country='$country'");
				$row=mysqli_fetch_array($pr);
				if($row['City1']==$city){
					echo"<p style='color:red'><b>Cost:". $row['CostCity1']."</b></p>";
				}

				elseif($row['City2']==$city){
					echo "<p style='color:red'><b>Cost:".$row['CostCity2']."</b></p>";
					
				}
				elseif($row['City3']==$city){
					
						echo"<p style='color:red'><b>Cost:". $row['CostCity3']."</b></p>";
					
				}
				elseif($row['City4']==$city){
					echo"<p style='color:red'><b>Cost:" .$row['CostCity4']."</b></p>";
					
				}
				
				}
				if($trp=="HoneyMoon"){
				$con=mysqli_connect("localhost","root","","tours");	
				$pr=mysqli_query($con,"select * from honeymoon where Country='$country'");
				$row=mysqli_fetch_array($pr);
				if($row['City1']==$city){
					echo"<p style='color:red'><b>Cost:". $row['CostCity1']."</b></p>";
				}

				elseif($row['City2']==$city){
					echo "<p style='color:red'><b>Cost:".$row['CostCity2']."</b></p>";
					
				}
				elseif($row['City3']==$city){
					
						echo"<p style='color:red'><b>Cost:". $row['CostCity3']."</b></p>";
					
				}
				elseif($row['City4']==$city){
					echo"<p style='color:red'><b>Cost:" .$row['CostCity4']."</b></p>";
					
				}
				
				}
				
?>
	<?php
	error_reporting(0);
	if(isset($_SESSION['user'])){	
	if(isset($_POST['submit'])){
	$count=$_SESSION['country'];
	$cit=$_SESSION['City'];
	$trp=$_SESSION['trip'];
	$name=$_POST['name'];
	$email=$_POST['eml'];
	$phone=$_POST['phn'];
	$fd=$_SESSION['da'];
	$td=$_SESSION['dt'];
	$num=$_POST['num'];
	$_SESSION['NAME']=$name;
	$_SESSION['EMAIL']=$email;
	$log=$_SESSION['user'];
	
	$con=mysqli_connect("localhost","root","","tours");
    $res=mysqli_query($con,"insert into customer99 values('$name','$email','$fd','$td','$cit','$count','$phone','$num','$log')");
    echo"<script>alert('Booking Done Successfully')</script>";
    echo"<script>window.open('homepage.php','_self')</script>";
	}
	}
	else{
		echo "<script>alert('Please Login')</script>";
		echo"<script>window.open('homepage.php','_self')</script>";	
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
		
				
		
		
			
			<button name="submit">Submit</button>  
		</form>
	</div>
	 <?php include 'footer.php';?>
</body>
</html>
<html>
<head>
<style>
	
	.box{
		width: 600px;
		height: 400px;
		color: white;
		padding:15px;
		background-color: rgba(0,0,1,0.5);
		border-radius: 10px;
		box-shadow: 5px;
		font-size: 25px;
		position: relative;
		top: 20%;
		left:37%;
	}

	button{
		color: white;
		border-radius: 5px;
		background: #f7497d;
	}
	body{
		font:sans-serif;
		background: url(sen1.jpeg);
		background-size:cover;
	}

	.box button{
		width:80px;
	}
	.box select,button{
		padding: 10px;
		margin-right: 40px;
	}
	.box input{
		margin-right: 80px;
		padding:10px;
		padding-right: 30px;
	}

</style>
	
</head>
<body>
<?php include 'header.php'?>
<div class="box">
<form action="" method="post">
Country:<br>
<input type="text" name="country"><br><br>
<select name="trip" required>
	<option>Adventerous</option>
	<option>Family Holiday</option>
	<option>HoneyMoon</option>
</select><br><br>
Enter the name of City:<input type=text name="city"><br><br>
Enter the Cost(in Rs)
<input type="text" name="cost"><br><br>
<button name="submit">Update</button>
<button>Reset</button>
</form>
</div>

<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$country=$_POST['country'];
	$city=$_POST['city'];
	$cost=$_POST['cost'];
	$trip=$_POST['trip'];
	$array1 = [];
	$array2 = [];
	$array3 = [];
	$array4 = [];
	$con=mysqli_connect("localhost","root","","tours");
	if($trip=="Adventerous"){
	$res=mysqli_query($con,"select * from advent1");
	while($row=mysqli_fetch_array($res))
	{
    $array1[] = $row['City1'];
	$array2[] = $row['City2'];
	$array3[] = $row['City3'];
	$array4[] = $row['City4'];
	}
	if(in_array($city,$array1)){
		$rlt=mysqli_query($con,"update advent1 set CostCity1='$cost' where Country='$country'");
	}
	elseif(in_array($city,$array2)){
		$rlt=mysqli_query($con,"update advent1 set CostCity2='$cost' where Country='$country'");
		
	}
	elseif(in_array($city,$array3)){
		$rlt=mysqli_query($con,"update advent1 set CostCity3='$cost' where Country='$country'");
	}
	elseif(in_array($city,$array4)){
		$rlt=mysqli_query($con,"update advent1 set CostCity4='$cost' where Country='$country'");
	}
	mysqli_query($con,"update trip set Cost='$cost' where Country='$country' and City='$city'");
}

elseif($trip=="Family Holiday"){
	$res=mysqli_query($con,"select * from family_trip");
	while($row=mysqli_fetch_array($res))
	{
    $array1[] = $row['City1'];
	$array2[] = $row['City2'];
	$array3[] = $row['City3'];
	$array4[] = $row['City4'];
	}
	if(in_array($city,$array1)){
		$rlt=mysqli_query($con,"update family_trip set CostCity1='$cost' where Country='$country'");
	}
	elseif(in_array($city,$array2)){
		$rlt=mysqli_query($con,"update family_trip set CostCity2='$cost' where Country='$country'");
		
	}
	elseif(in_array($city,$array3)){
		$rlt=mysqli_query($con,"update family_trip set CostCity3='$cost' where Country='$country'");
	}
	elseif(in_array($city,$array4)){
		$rlt=mysqli_query($con,"update family_trip set CostCity4='$cost' where Country='$country'");
	}
	mysqli_query($con,"update trip set Cost='$cost' where Country='$country' and City='$city'");
}
elseif($trip=="HoneyMoon"){
	$res=mysqli_query($con,"select * from honeymoon");
	while($row=mysqli_fetch_array($res))
	{
    $array1[] = $row['City1'];
	$array2[] = $row['City2'];
	$array3[] = $row['City3'];
	$array4[] = $row['City4'];
	}
	if(in_array($city,$array1)){
		$rlt=mysqli_query($con,"update honeymoon set CostCity1='$cost' where Country='$country'");
	}
	elseif(in_array($city,$array2)){
		$rlt=mysqli_query($con,"update honeymoon set CostCity2='$cost' where Country='$country'");
		
	}
	elseif(in_array($city,$array3)){
		$rlt=mysqli_query($con,"update honeymoon set CostCity3='$cost' where Country='$country'");
	}
	elseif(in_array($city,$array4)){
		$rlt=mysqli_query($con,"update honeymoon set CostCity4='$cost' where Country='$country'");
	}
	mysqli_query($con,"update trip set Cost='$cost' where Country='$country' and City='$city'");
}
echo "<script>alert('Cost of the trip is  successfully Changed')</script>";
echo"<script>window.open('p7.php','_self')</script>";
}

include 'footer.php';
?>


</body>
</html>
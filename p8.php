<html>
<head>

	<style type="text/css">
	body{
		background: url(eiffel.jpeg);
		background-size: cover;
	}
		.box{
			width: 600px;
			height: 550px;
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
<?php
include 'header.php';
error_reporting(0);
if(isset($_POST['submit'])){
$country=$_POST['country'];
$trip=$_POST['trip'];
$city=$_POST['city1'];
$ci=$_POST['city2'];
$ct=$_POST['city3'];
$cy=$_POST['city4'];
$cost1=$_POST['cost1'];
$cost2=$_POST['cost2'];
$cost3=$_POST['cost3'];
$cost4=$_POST['cost4'];
$con=mysqli_connect("localhost","root","","tours");
if($trip=="Adventerous"){
$Country=[];
$res=mysqli_query($con,"select * from advent1");
	while($row=mysqli_fetch_array($res))
	{
	$Country[]=$row['Country'];	
    }
if(in_array($country,$Country))
{
$retr=mysqli_query($con,"update advent1 set City1='$city',City2='$ci',City3='$ct',City4='$cy',CostCity1='$cost1',CostCity2='$cost2',CostCity3='$cost3',CostCity4='$cost4' where Country='$country'");
}
else{
$retr=mysqli_query($con,"insert into advent1 values('$country','$city','$ci','$ct','$cy','$cost1','$cost2','$cost3','$cost4')");	
}
}
elseif($trip=="Family Trip"){
$Country=[];
$res=mysqli_query($con,"select * from family_trip");
	while($row=mysqli_fetch_array($res))
	{
	$Country[]=$row['Country'];	
    }
if(in_array($country,$Country)){
	mysqli_query($con,"update family_trip set City1='$city',City2='$ci',City3='$ct',City4='$cy' ,CostCity1='$cost1',CostCity2='$cost2',CostCity3='$cost3',CostCity4='$cost4'where Country='$country'");
}
else{
	mysqli_query($con,"insert into family_trip values('$country','$city','$ci','$ct','$cy','$cost1','$cost2','$cost3','$cost4')");
}
}
elseif($trip=="Honeymoon"){
	$Country=[];
$res=mysqli_query($con,"select * from honeymoon");
	while($row=mysqli_fetch_array($res))
	{
	$Country[]=$row['Country'];	
    }
if(in_array($country,$Country)){
$retr=mysqli_query($con,"update honeymoon set City1='$city',City2='$ci',City3='$ct',City4='$cy',CostCity1='$cost1',CostCity2='$cost2',CostCity3='$cost3',CostCity4='$cost4' where Country='$country'");
	echo "<script>alert('Trip is successfully Updated')</script>";
	echo"<script>window.open('p7.php','_self')</script>";
}
else{
$retr=mysqli_query($con,"insert into honeymoon values('$country','$city','$ci','$ct','$cy','$cost1','$cost2','$cost3','$cost4')");
echo "<script>alert('Trip is successfully added')</script>";
echo"<script>window.open('p7.php','_self')</script>";
}
}
}
?>
<div class="box">
<form action="" method="post">
Country:<br>
<input type="text" name="country"placeholder="Enter the Country Name you Want to add"><br><br>
Enter the Type of Trip:<br>
<div class="opt">
<select name="trip">
<option>Adventerous</option>
<option>Family Trip</option>
<option>Honeymoon</option>
</select><br><br>
</div>
 <span class=city>Enter the Cities:</span>&emsp;&emsp;&emsp;&emsp;&emsp; <span class=cost>Enter the Cost:</span><br>
<input type="text" name="city1" placeholder="Enter the City name" required>
<input type="text" name="cost1" placeholder="Enter the Cost of City" required>
<br><br>
<input type="text" name="city2" placeholder="Enter the City name">
<input type="text" name="cost2" placeholder="Enter the Cost of City"><br><br>
<input type="text" name="city3" placeholder="Enter the City name">
<input type="text" name="cost3" placeholder="Enter the Cost of City">
<br><br>
<input type="text" name="city4" placeholder="Enter the City name">
<input type="text" name="cost4" placeholder="Enter the Cost of City">
<br><br>
 <button name="submit">Add</button>
 <input type="reset">
</form>
</div>
<?php include 'footer.php'?>
</body>
</html>
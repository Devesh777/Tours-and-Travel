<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="contactus.css">
	<style type="text/css">
		.box {
			position: relative;
			top: 1000px;
			width:65%;
		}
		button
		{	padding: 12px;
			font-size: 15px;
			width:100%;
			border-bottom: none;
			cursor:pointer;
			background: #f7497d;
			color:#fff;
			margin-bottom: 0;
			text-transform: uppercase;
		}
		.box input:valid ~ label,.box textarea:valid ~ label,
		.box input:focus ~ label,.box textarea:focus ~ label
		{
			top:-12px;
			left:0;
			color:#f7497d;
			font-weight: bold;
			font-size: 12px;
		}
		.box input:valid ,.box textarea:valid ,
		.box input:focus ,.box textarea:focus 
		{
			border-bottom:2px solid #f7497d;
		}
		body{
			background-image: url(beach2.jpeg);
			background-size: cover;
		}
	</style>
</head>
<body>

	<div class="box">
		<h2>ADD TRIP FORM</h2>	
		<form action="" method="post">
			
			<div>
				<label>Country:</label><br><br>
				<input type="text" name="country" placeholder="Enter the Country Name You Want to add" required><br><br>
			</div>
			
			<div>
				<label>City:</label><br><br>
			    <input type=text name="city" placeholder="Enter the Name of City" required><br><br>
			</div>
			<div>
				<label>Image:</label><br><br>
			    <input type=text name="img" placeholder="Enter the Name of Image" required><br><br>
			</div>
			<div>
				<label>Short Description:</label><br><br>
				<textarea name="sd" required></textarea><br><br>
			</div>
			<div>
				<label>Cost:</label><br><br>
				<input type="text" name="cost" required><br><br>
			</div>
			<div>
				<label>Full Description:</label><br><br>
				<textarea name="fd" required></textarea><br><br>
			</div>
			<div>
				<label>Best Time:</label><br><br>
				<input type="text" name="bt" required><br><br>
			</div>
			<div>
				<label>Places to visit:</label><br><br>
				<textarea name="place" required ></textarea><br><br>
			</div>
			<div>
				<label>Famous Places to visit:</label><br><br>
				<textarea name="fp" required></textarea><br><br>
			</div>
			<div>
				<label>Modes of Transport:</label><br><br>
				<input type="text" name="tt">
			</div><br><br>
			<button name="submit">ADD</button>
			<br><br>
			<input type="reset">
		</form>
</div>
<?php
	if(isset($_POST['submit'])){
		
		$country=$_POST['country'];
		$city=$_POST['city'];
		$img=$_POST['img'];
		$sd=$_POST['sd'];
		$cost=$_POST['cost'];
		$fd=$_POST['fd'];
		$bt=$_POST['bt'];
		$place=$_POST['place'];
		$fp=$_POST['fp'];
		$tran=$_POST['tt'];
	$con=mysqli_connect("localhost","root","","tours");
	$res=mysqli_query($con,"SELECT City,Country from trip");
	$City=[];
	$Country=[];
	while($row=mysqli_fetch_array($res)){
		$City[]=$row['City'];
		$Country[]=$row['Country'];
	}
	if(in_array($city,$City)&&in_array($country, $Country)){
		echo "Trip is Already placed in the table";
		echo"<script>window.open('p7.php','_self')</script>";
	}
	else{
		echo $country;
		echo $img;
	mysqli_query($con,"insert into trip values('$country','$city','$img','$sd','$cost','$fd','$bt','$place','$fp','$tran')");
	echo "<script>alert('Trip is successfully added')</script>";
	echo"<script>window.open('p7.php','_self')</script>";
	}
	}
?>
</body>
</html>
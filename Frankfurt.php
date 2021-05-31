<html>
<head>
	<style type="text/css">
		body{
			background-image:url(Fran.jpeg);
			background-size:cover;
			font-family:"myfont";
		}
		img{
			margin-left: 50px;
		}
		.content{
			height: 1000px;
			width: 75%;
			font-size: 25px;
			letter-spacing: 1px;
			position: relative;
			top: 15%;
			left:15%;
			color: #fff;
			padding: 20px;
			border-width: 5px;
			border-color: #fff;
			box-shadow: 7px;
			background-color: rgba(0,0,1,0.6);
			border-radius: 25px;
			line-height: 60px;

		}
		.content b{
			color: lightgreen;
		}
		img{
			padding-top: 30px;
			width: 500px;
			height: 300px;
		}
		button
		{	padding: 12px;
			font-size: 15px;
			border-radius: 10px;
			position: relative;
			bottom: -40px;
			left:40%;
			cursor:pointer;
			background: #f7497d;
			color:#fff;
			margin-bottom: 0;
			text-transform: uppercase;
			width: 300px;
			box-sizing: border-box;
			box-shadow: none;
			outline: none;
			border: none;
			border-bottom: 2px solid #999;

		}
	</style>
</head>
<body>
<?php
	include 'header1.php'; 
	$connection=mysqli_connect("localhost","root","","tours");
	$res=mysqli_query($connection,"select * from trip where City='Frankfurt'");
	while($row=mysqli_fetch_array($res)){
		echo "<div class='content'>";
		echo "<b>Country:</b>".$row['Country']."<br>";
		echo "<b>City:</b>".$row['City']."<br>";
		echo "<b>Best Time to Visit:</b>".$row['BestTime']."<br>";
		echo "<b>Places to Visit:</b>".$row['Place']."<br>";
		echo "<b>Famous Places:</b>".$row['FamousPl']."<br>";
		echo "<b>Cost of Trip:</b>".$row['Cost']."<br>";
		?>
		<img src="Ger.jpg">
		
		<?php
		echo "</div>";
	}
	

?>
<?php include 'footer.php' ?>
</body>
</html>
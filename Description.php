<?php
session_start();
?>
<html>
<head>
<style>
body{
	background-image:url(Beach.jpeg);
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

}
.content b{
	color: lightgreen;
}
button
{	padding: 12px;
	font-size: 15px;
	border-radius: 10px;
	position: relative;
	bottom: 70px;
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
<?php include 'header1.php';?>
<?php
$country=$_SESSION['country'];
$city=$_SESSION['city'];

$con=mysqli_connect("localhost","root","","tours");
$res=mysqli_query($con,"select * from trip where Country='$country' and City='$city'");
while($row=mysqli_fetch_array($res)){
	
	echo "<div class='content'>";
	echo"<p>";
	echo "<b>Country:</b>".$row['Country']."<br><br>";
	echo "<b>City:</b>".$row['City']."<br><br>";
	echo "<b>Best Time To Visit:</b>".$row['BestTime']."<br><br>";
	echo "<b> Places to Visit :</b>".$row['Place']."<br><br>";
	echo "<b>Famous Places:</b>".$row['FamousPl']."<br><br>";
	echo "<b>Mode Of Transportation:</b>".$row['Transport']."<br><br>";
	echo "</p>";
	
	?>
	<img src="<?php echo $row['Image'];?>"height='300px',width='300px'>
	<br><br>
	<?php
	echo " <b>Cost:</b>".$row['Cost']."<br><br>";
	echo"</div>";
	
	if(isset($_POST['submit'])){
	$_SESSION['count']=$country;
	$_SESSION['cit']=$city; 	
	echo"<script>window.open('booking1.php','_self')</script>";
	
	}
}
?>
<form action="" method="post">
<button name='submit'>Book Now</button>
</form>
<?php include 'footer.php';?> 
</body>
</html>
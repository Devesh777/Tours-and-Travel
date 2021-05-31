<?php
session_start();
?>
<html>
<head>
<style>
body{
font-family:Sansserif;
background-image:url(s2.jpeg);
background-size:cover;	
}
select{
	font:7px SansSerif;
	width:25px;
	height:15px;
}
.box{
	position: relative;

	width:30%;
	height: 35%;
	margin-top:10%;
	margin-left:35%;
	padding:5px;
	background:transparent;
	background-color:rgba(0,1,0,0.5);
	border-radius: 15px;
	color: #fff;

}

button,input[type=reset]{
	margin-left:30px;
	font:15px ComicSans;
	background-color:dodgerblue;
	color:white;
	border-radius:5px;
	height:45px;
	width:15%;
}
.img{
	margin-top:20px;
	margin-right:25px;
	padding:5px;

}
span{
	font:25px ComicSans;
}
select{
	font:15px Comicsans;
	width:150px;
	height:25px;
}
input[type=date]{
	width:150px;
	height:25px;
}
</style>
</head>
<body>
<?php include 'header1.php'?>
<?php 
$country=$_SESSION['country'];
$trp=$_SESSION['trip'];
?>
<div class=box>
<form action="" method="post">
<?php echo "<span>Cities:</span>"?><select  name="city">
<?php
$conn=mysqli_connect("localhost","root","","tours");
if($trp=="Adventerous"){
$result = mysqli_query($conn,"select * from advent1 where Country='$country'");
while($row=mysqli_fetch_array($result))
{
?>
<option><?php echo $row["City1"];?></option>	
<option><?php echo $row["City2"];?></option>
<option><?php echo $row["City3"];?></option>
<option><?php echo $row["City4"];?></option>
<?php
}
} 
?>
<?php
if($trp=="Family Holiday"){
	$conn=mysqli_connect("localhost","root","","tours");
	$result=mysqli_query($conn,"select * from family_trip where Country='$country'");
	while($row=mysqli_fetch_array($result)){
?>
<option> <?php echo $row["City1"];?></option>
<option> <?php echo $row["City2"];?></option>
<option> <?php echo $row["City3"];?></option>
<option> <?php echo $row["City4"];?></option>
<?php
}
}
?>
<?php
if($trp=="HoneyMoon"){
$conn=mysqli_connect("localhost","root","","tours");
$result=mysqli_query($conn,"Select * from  honeymoon where Country='$country'");
while($row=mysqli_fetch_array($result))
{
?>
<option><?php echo $row["City1"];?></option>
<option><?php echo $row["City2"];?></option>
<option><?php echo $row["City3"];?></option>
<option><?php echo $row["City4"];?></option>
<?php
}
}
?>	

</select><br><br>
<span>Date of Departure(From Source):</span><input type="date" name="ds" max="2020-12-31" min="2019-10-10" required><br><br>
<span>Date of Departure(From Destination):</span><input type="date" name="dd" max="2020-12-31" min="2019-10-13" required><br><br>
<button type="submit" name="submit">Submit</button>
<input type="reset">
</form>
<?php
if(isset($_POST['submit'])){
	$city=$_POST['city'];
	$ds=$_POST['ds'];
	$dd=$_POST['dd'];
	$_SESSION['City']=$city;
	$_SESSION['da']=$ds;
	$_SESSION['dt']=$dd;
	echo $_SESSION['da'];
	echo $_SESSION['City'];
	header('Location:booking.php');
}
?>
</div>
<?php
$con=mysqli_connect("localhost","root","","tours");
$resl=mysqli_query($con,"select * from images where Country='$country'");
while($r=mysqli_fetch_array($resl)){
?>
<div class="img">
<img src="<?php echo $r['City1'];?>"height="250px",width="300px">&nbsp&nbsp&nbsp
<img src="<?php echo $r['City2'];?>"height="250px",width="300px">&nbsp&nbsp&nbsp
<img src="<?php echo $r['City3'];?>"height="250px",width="300px">&nbsp&nbsp&nbsp
<img src="<?php echo $r['City4'];?>"height="250px",width="300px">&nbsp&nbsp&nbsp
</div>
<?php
}
include 'footer.php'
?>
</body>
</html>
<html>
<style type="text/css">
	body{
		background: url(mahal.jpeg);
		background-size: cover; 
	}
	.box{
		
		position: relative;
		top:40%;
		left: 30%;
		height: 140px;
		width: 720px;
		background: rgba(0,0,1,0.5);
		border-radius: 15px;
		padding:20px;
		display: flex;
		flex-wrap: wrap;
  		justify-content: space-between; 
	}
	button{
		color:black;
		font:16px sans-serif;
		background: green;
		width: 150px;
		margin-right: 20px;
		height: 100%;
	}
	button.hover{
		background-color:green;
		color:red;
	}
</style>
<body>
<?php 
include 'header.php';
error_reporting(0);
if(isset($_POST['submit'])){
echo"<script>window.open('p8.php','_self')</script>";
}
elseif(isset($_POST['change'])){
	echo"<script>window.open('p9.php','_self')</script>";

}
elseif(isset($_POST['add'])){
	echo"<script>window.open('p.php','_self')</script>";
}
else{
if(isset($_POST['book'])){
	echo"<script>window.open('book.php','_self')</script>";
}
}
?>
<div class="box">
<form action="" method="post">
<button name="submit">Add typesofTrips</button>
<button name="add">Add Trips</button>
<button name="change">Change the Price</button>
<button name="book">View Bookings</button>
</form>
</div>
<?php include 'footer.php'?>
</html>

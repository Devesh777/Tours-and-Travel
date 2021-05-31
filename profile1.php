<?php
session_start();
?>
<html>
<head>
<style>
	table{
			 position:absolute;
  top: 45%;
  left: 65%;
  transform:translate(-70%,-70%);
			border-collapse:collapse;
			width:75%;
			
			font-family:monospace;
			font-size:25px;
			text-align:left;
			padding: 40px;
  			border: 1px solid rgba(0,0,0,.1);
  			
		}
		th{
			background-color: #d96459;
			color:white;
		}
		tr:nth-child(even){background-color: #f2f2f2;color:#d978957;}
		tr:nth-child(odd){color:black;}
	input[type=text]{
		width:80%;
		height:20%;
		border-radius: 5px;
		margin-left:30px;
	}
	button{
	margin-left:30px;
	font:15px monospace;
	background-color:dodgerblue;
	color:white;
	border-radius:5px;
	height:28px;
	width:20%;
	}
	table span{
		color:#fff;
		font-size: 18px;
		margin-left: 30px;
	}
	.box{
	position: absolute;
	padding-top: 20px;
	top:250px;
	width:380px;
	height: 250px;
	border-radius: 10px;
	margin-left:35%;
	
	background:transparent;
	background-color: rgba(0,0,1,0.5) ;
	

}
body{
	background-image: url(eiffel.jpeg);
	background-repeat: no-repeat;
	background-size: cover;
}
body{

	background-size:cover;
	font-family:"myfont";
}
button{
	width:75px;
	height:55px;
	background-color:blue;
	color:white;
	border-radius:10px;
}
</style>
</head>
<body>
	<?php
	include 'header1.php';
	$use=$_SESSION['user'];
	$pass=$_SESSION['pass'];
	
	if(isset($_SESSION['user'])){
	$sql="SELECT * from customer99 where log='$use'";
	
	$con=mysqli_connect("localhost","root","","tours");
    $res=mysqli_query($con,$sql);
    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($res) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Date of  Arrival</th>";
                                        echo "<th>Date of Departure</th>";
                                        echo "<th>City</th>";
                                        echo "<th>Country</th>";
                                        echo "<th>Phone_Number</th>";
                                        echo "<th>Number of Members</th>";
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
    while($row=mysqli_fetch_array($res)){
    	
		echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['datearrival']."</td>";
							echo "<td>".$row['datedep']."</td>";
							echo "<td>".$row['city']."</td>";
							echo "<td>".$row['country']."</td>";
							echo "<td>".$row['phone']."</td>";
							echo "<td>".$row['number']."</td>";
						
							
							echo "</td>";
							echo "</tr>";	
						}                
						echo "</tbody>";
						echo "</table>";                
}
}
}
else{
	echo"<script>alert('Please Login')</script>";
echo"<script>window.open('homepage.php','_self')</script>";
}
include 'footer.php';
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	
    
    <link rel="stylesheet" type="text/css" href="book.css">
    
</head>
<body>
    <?php include 'header.php';?>
<?php	
$con=mysqli_connect("localhost","root","","tours");
                    $sql = "SELECT * FROM customer99";
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
?>
<?php include 'footer.php';?>                            
</body>
</html>
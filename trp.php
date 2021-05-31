<?php
session_start();
?>

<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="trp.css">
    <link rel="stylesheet" type="text/css" href="social.css">


	<style>
    table{
        position: relative;
        top: 70%;
    }
    tr:nth-child(odd){color:black;}
    .box form label{
        font-size: 18px;
        margin-left: 30px;
    }
       
		.pad{
			margin-bottom: 100px;
		}
        body{
    background-image: url(beach2.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
}
footer{
    height: 150px;
    position: relative;
    top: 600px;
}
	</style>
}

	
</head>
<body>
<?php 
		include 'header1.php';
?>
	<div class=box>
	<form action="" method="post">
		<span><label>Country</label>:</span><br><input type="text" name="country" placeholder="Enter the Country Name"><br><br>
		<span><label>City:</label></span><br><input type="text" name="city"placeholder="Enter the ity the name"><br><br>
		<button name="submit">Submit</button>
</form>
</div>
<?php	
$con=mysqli_connect("localhost","root","","tours");
                    $sql = "SELECT * FROM trip";
                    $res=mysqli_query($con,$sql);
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($res) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>Country</th>";
                                        echo "<th>City</th>";
                                        echo "<th>ShortDescription</th>";
                                        echo "<th>Cost</th>";
                                        echo "<th>FullDescription</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($res)){
                                        echo "<tr>";
                                        echo "<td>" . $row['Country'] . "</td>";
                                 ?>
                                        <a href="Search.php"><?php echo "<td>".$row['City']."</td>";?></a>
                                        <?php
                                        echo "<td>" . $row['Short Description'] . "</td>";
                                        echo "<td>" . $row['Cost'] . "</td>";
                                        echo "<td>" . $row['Full Descrition'] . "</td>";
                                         
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    if(isset($_POST["submit"])){
                    	$country=$_POST['country'];
                    	$city=$_POST['city'];
                    	$_SESSION['country']=$country;
                    	$_SESSION['city']=$city;
				  		echo"<script>window.open('Description.php','_self')</script>";
	

					}
                    // Close connection
                    mysqli_close($con);
                    echo"<div class='pad'></div>";
					
?>
<footer>
        <div class="left">
            <ul>
                <li>
                    <a href="https://www.google.com/maps/dir/19.0029824,73.0996736/vesit/@19.0361586,72.852546,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be7c8add9569a29:0xb7ad04bf9a389df7!2m2!1d72.8892516!2d19.0457658"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Pahad ghanj , Maharastra , New panvel,410206</a>
                    
                </li>
                <li>
                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                    +91 9568741354</a>
                </li>
            </ul>
            
            
        </div>
        <div class="handels">
        <ul>
            <li>
                <a href="https://fb.com">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-facebook" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="https://twitter.com">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="https://telegram.com">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-telegram" aria-hidden="true"></span>
                </a>
            </li>
            <li>

                <a href="https://www.instagram.com">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-instagram" aria-hidden="true" onclick="location.href='instagram.com'"></span>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/login" >
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-linkedin" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
        </div>
        
    </footer>

</body>
</html>

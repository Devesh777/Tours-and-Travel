<?php
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="ustf-8">
	<title>home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="home2.css">
	<link rel="stylesheet" type="text/css" href="social.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php
if(isset($_POST['search'])){ 
	$country=$_POST['country'];
	$trip=$_POST['trip'];
	$_SESSION['country']=$country;
	$_SESSION['trip']=$trip;

//echo $_SESSION['country'];
echo"<script>window.open('Search1.php','_self')</script>";
}
?>
	<?php include 'header1.php'?>
	<div class="search">
		<form id='f1' name="myForm"  action="" method='post'>
			<input type="Search" autocomplete="off" name="country" id="country" class="form-control" placeholder="Enter Country Name" required>
				<select name="trip" required>
				<option>Adventerous</option>
				<option>Family Holiday</option>
				<option>HoneyMoon</option>
			</select>
			<button name="search" >Search</button>
			<div id="countryList"></div> 
			
			</form>
	</div>
	<form class="cards">
      <div class="box" onclick="location.href='Mel.php';" style="cursor: pointer;">
        <div class="imgBx">
          <img src="img1.jpg" width=200px>
        </div>
        <div class="content">
          <h3>Melbourne</h3>
          <p>Melbourne is the City of Australia best time to visit Melbourne is Between November to Feburary Famous places to visit is Beaches and Gardens Cost Rs 3lakhs for 5days with Discount per person
          </p>
        </div>
      </div>
      <div class="box" onclick="location.href='London.php';" style="cursor: pointer;">
        <div class="imgBx">
          <img src="img2.jpeg" width=100px>
        </div>
        <div class="content">
          <h3>London</h3>
          <p>London is the City of England. Best time to visit London is Between May to August Famous places to visit is Churches and Gardens Cost Rs 5lakhs for 6days with Discount per person</p>
        </div>
      </div>
      <div class="box" onclick="location.href='Hyderabad.php';" style="cursor: pointer;" >
        <div class="imgBx">
          <img src="hyd.jpg">
        </div>
        <div class="content">
          <h3>Hyderabad</h3>
          <p>Hyderabad is the City of India best time to visit Hyberabad is Between November to Feburary Famous places to visit is Historical places and Gardens , Briyani is king of all food here .Cost Rs 5lakhs for 5days with Discount per person</p>
        </div>
      </div>
       <div class="box" onclick="location.href='Paris.php';" style="cursor: pointer;">
        <div class="imgBx">
          <img src="par.jpg">

        </div>
        <div class="content">
          <h3>Paris</h3>
          <p> Paris is the City of France.Best time to visit Paris is Between May to August Famous places to visit is Beaches and Gardens Cost Rs 3lakhs for 5days with Discount per person</p>
        </div>
      </div>
       <div class="box" onclick="location.href='Frankfurt.php';" style="cursor: pointer;">
        <div class="imgBx">
          <img src="frak.jpg">
        </div>
        <div class="content">
          <h3>Frankfurt</h3>
          <p>Frankfurt is the City of Germany. Best time to visit Frankfurt is Between December to Feburary Famous places to visit is Lakes,Rivers and Gardens Cost Rs 6lakhs for 5days with Discount per person</p>
        </div>
      </div>
    </form>
	<div class="feed">
		<div class="box">
			<h2>01</h2>
			<h3>Review One</h3>
			<p>
				very nice experience , and very good servies.
			</p>
		</div>
		<div class="box">
			<h2>02</h2>
			<h3>Review Second</h3>
			<p>
				very good experience , food provided by them are really tasty and higenic.
				I enjoyed the holidays a lot
			</p>
		</div>
		<div class="box">
			<h2>03</h2>
			<h3>Review third</h3>
			<p>
				nice rooms porvided by them all were 4 star hotel, and very good places ,we covered all places in the city.
			</p>
		</div>
	</div>
	</div>
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

</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search2.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  
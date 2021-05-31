<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header1.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<header>

		<div class="logo" >

		<a href="homepage.php"><i class="fa fa-paw" aria-hidden="true"></i>     TO<b>URS</b></a></div>
		<div class="sign">
			<?php
			if(isset($_SESSION['user'])){
				$user=$_SESSION['user'];
			?>
			<form action=""method="post">
			<a href="#"><i class="fa fa-user" aria-hidden="true"></i>   <b><?php echo $user;?> </b></a>&emsp;
			<a href="logout.php"><i class="fa fa-sign-out" aria-hidden ="true"></i><b>logout</b></a>
			</form>
			<?php
			}
			elseif(!isset($_SESSION['user'])){
			?>
			<a href="login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>   <b>Login</b></a>
			<a href="singin.php"><b>Siginup</b></a>
			
			
			<?php
			}
			?>
		</div>
		<div class="nav">
			<ul>
				<li>
					<a href="homepage.php">
						<div class="icon">
							<i class="fa fa-home" aria-hidden="true"></i>
							<i class="fa fa-home" aria-hidden="true"></i>

						</div>
						<div class="name" data-text="Home">Home</div>
					</a>
				</li>
				<li>
					<a href="profile1.php">
						<div class="icon">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
							
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</div>
						<div class="name" data-text="Profile">Profile</div>
					</a>
				</li>
				<li>
					<a href="trp.php">
						<div class="icon">
							<i class="fa fa-picture-o" aria-hidden="true"></i>
							<i class="fa fa-picture-o" aria-hidden="true"></i>

						</div>
						<div class="name" data-text="trips">Trips</div>
					</a>
				</li>
				<li>
					<a href="aboutus.php">
						<div class="icon">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<i class="fa fa-file-text" aria-hidden="true"></i>

						</div>
						<div class="name" data-text="About">About</div>
					</a>
				</li>
				<li>
					<a href="contactus.php">
						<div class="icon">
							<i class="fa fa-envelope-open" aria-hidden="true"></i>
							<i class="fa fa-envelope-open" aria-hidden="true">
								
							</i>
						</div>
						<div class="name" data-text="Contact">Contact</div>
					</a>
				</li>
			</ul>
		</div>
	</header>

</body>
</html>


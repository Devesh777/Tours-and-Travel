<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contactus.css">
	<link rel="stylesheet" type="text/css" href="social.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<?php include 'header1.php';?>
	<div class="box">
		<h2>Contact Us</h2>
		<form action="https://formspree.io/xlerkayj" method="POST">
			<div>
				<input type="text" name="name" required>
				<label>Name</label>
			</div>
			<div>
				<input type="email" name="Email" required>
				<label>Email</label>
			</div>
			<div>
				<input type="text" name="sub" required>
				<label>Subject</label>
			</div>
			<div>
				<textarea required name="msg"></textarea>
				<label>Message</label>
			</div>
			<input type="submit" name="sub" value="Submit">
			
		</form>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
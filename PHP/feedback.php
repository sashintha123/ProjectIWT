<?php
ob_start();
require 'config.php';

$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `phone`, `Course/Resourse Price`, `Student ID`) VALUES ('','$name','$email','$num','$view','$comments')");

/*echo '<script>alert("Thank You..! Your payment is successful"); location.replace(document.referrer);</script>';*/




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="../css/successful.css">
  </head>
  <body>
	<div class="navbar">
        <div class="icon">
          <h2 class="logo">WINNER</h2>
        </div>
    </div>

    <div class="menu">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="courses.php">Course</a></li>
          <li><a href="ebook-pdf.php">Resources</a></li>
          <li><a href="contact us.php">Contact</a></li>
          <li><a href="aboutus.php">About</a></li>
        </ul>
	</div>
	<div class="container">
		<button type="submit" class="btn" onclick="openPopup()">See Status</button>
		<div class="popup" id="popup">
		<img src="../image/tick.png">
		<h2>Payment Successful!</h2>
		<p>Your payment was successful! You can now continue using "Winner".</p>
		<button type="button" onclick="closePopup()"><a href="home.php">OK</a></button>
		</div>
	</div>
	<script>
	let popup=document.getElementById("popup");

	function openPopup(){
	popup.classList.add("open-popup");
	}
	function closePopup(){
	popup.classList.remove("open-popup");
	}
	</script>
  </body>
</html>

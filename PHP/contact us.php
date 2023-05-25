<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
	<link rel="stylesheet" type="text/css" href="../css/contactcss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("Submitted");
  });
});
</script>
</head>
<body>
	<div class="navbar">
    <div class="icon">
      <h2 class="logo">WINNER</h2>
    </div>
    <div class="menu">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="courses.php">Course</a></li>
        <li><a href="ebook-pdf.php">Resources</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="aboutus.php">About</a></li>
      </ul>

    </div>

    </div>
	<h1>Contact Us</h1>
	<h3>Questions, Bug reports, Feedbacks, Future requests.. We're here for it all</h3>



	<div class="container">
  <form action="con_insert.php" method="POST">

    <label for="name">Name</label><br>
    <input type="text" id="nm" name="name" placeholder="Your name.."> <br>
	<label for="email">Email Address</label><br>
    <input type="text" id="email" name="emailaddress" placeholder="Your email.."> <br>
    <label for="sub">Subject</label><br>
    <input type="text" id="sub" name="subject" placeholder="Write something.."><br>
	<label for="pn">Feedback</label><br>
    <textarea id="fb" name="fb" placeholder="Write something.." style="height:100px"></textarea><br>

    <label for="hcwhy">How Can We Help You</label><br>
    <textarea id="hcwhy" name="hcwhy" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

		<p>Contact Number - 0772334456 / 0112324345</p>
		<br>
		<p>E mail         - winner123@gmail.com     </p>

  </form>
</div>
<footer>
	<div class="footer-content">
		<h3>WINNER</h3>
    <p>JOIN WITH US AND WIN YOUR FUTURE...</p>

  </div>
  <div class="footer-bottom">
    <p>copyright &copy;2022 WINNER . designed by <span>Online Teacher Trainer</span></p>

	</div>
</footer>


</body>
</html>

<?php
    session_start();
    if(isset($_SESSION["user_email"])){
        header("location:aprofile.php");
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/llogin.css">
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
          <li><a href="contact us.php">Contact </a></li>
          <li><a href="aboutus.php">About </a></li>
        </ul>

      </div>

    </div>

    <!-- Forms -->

    <div class="forms">
        <!-- Login Form -->
        <form action="alogin.inc.php" method="post" class="login">
            <h2>Admin Login</h2>
            <input type="text" name="email" placeholder="Enter Your Email..." >
            <input type="password" name="pass" placeholder="Enter Your Password..." >

            <button type="submit" name="login-btn">Login</button>
        </form>

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

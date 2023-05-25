<?php
    session_start();
    // If not logged in
    if(!isset($_SESSION["user_email"])){
        header("location:leclogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_fname"]; } ?></title>
    <link rel="stylesheet" href="../css/lregistyle.css">
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

    <!-- Profile -->
    <div class="profile">
        <h2>Welcome - <span><?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_fname"]; } ?></span></h2>
        <div class="data"><?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"]; } ?></div>
        <div class="data"><?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_email"]; } ?></div>
        <div class="data"><?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_mobile"]; } ?></div>
        <a href="llogout.inc.php">Logout</a>
        <a href="home.php">Home</a>
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

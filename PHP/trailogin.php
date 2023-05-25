<?php
    session_start();
    if(isset($_SESSION["user_email"])){
        header("location: ./lprofile.php");
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
        <form action="tlogin.inc.php" method="post" class="login">
            <h2>Trainee Login</h2>
            <input type="text" name="email" placeholder="Enter Your Email..." value="<?php if(isset($_COOKIE["emailcookie"])){ echo $_COOKIE["emailcookie"]; } ?>">
            <input type="password" name="pass" placeholder="Enter Your Password..." value="<?php if(isset($_COOKIE["passwordcookie"])){ echo $_COOKIE["passwordcookie"]; } ?>">
            <div class="rem">
                <input type="checkbox" name="re-check" id="re-check" <?php if(isset($_COOKIE["emailcookie"])){ ?> checked <?php } ?>>
                <label  for="re-check">Remember Me</label>
                <p class="link">Don't have an account <br>
                <a href="trairegister.php">Sign Up </a>here</p>
            </div>
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

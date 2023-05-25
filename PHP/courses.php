<html>

<head>
    <title>Courses</title>
    <link rel = "stylesheet"  href="../css/styles.css">

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

        <form>
            <input class="mainSearchBar" type="text" name="searchBar" placeholder="Search">
        </form>
    </div>

    <a href="liveCourses.php"><button>Live Courses</button></a>

    <?php
        include 'dbh.php';

        $sqlCommand = "SELECT * FROM course";
        $resultSet = $conn->query($sqlCommand);

        if($resultSet->num_rows > 0)
        {
            while($row = $resultSet->fetch_assoc())
            {
                $courseName = $row["C_Name"];
                $courseDescription = $row["C_Description"];
                $courseFee = $row["C_Fee"];
                $image = $row["image"];

                echo <<<EOT

                    <div class="card">
                        <div class="cardCol1">
                            <img class="courseImg" src="$image" alt="course image">
                        </div>
                        <div class="cardCol2">
                            <p class="courseName">$courseName</p>

                            <p class="courseDescription">
                                $courseDescription
                            </p>
                        </div>
                        <div class="cardCol3">
                            <center><p class="cFee">$ $courseFee</p></center>

                            <center><a href ="pay.php"><button class="cardButton"> Buy</button></a></center>
                        </div>
                    </div>

                EOT;
            }
        }
    ?>


<!--     <div class="card">
        <div class="cardCol1">
            <img class="courseImg" src="a.jpg" alt="course image">
        </div>
        <div class="cardCol2">
            <p class="courseName">Course Name</p>

            <p class="courseDescription">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="cardCol3">
            <center><p class="cFee">$56</p></center>
            <center><button class="cardButton">Add to cart</button><br></center>
            <center><button class="cardButton">Buy</button></center>
        </div>
    </div>

    <div class="card">
        <div class="cardCol1">
            <img class="courseImg" src="a.jpg" alt="course image">
        </div>
        <div class="cardCol2">
            <p class="courseName">Course Name</p>

            <p class="courseDescription">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="cardCol3">
            <center><p class="cFee">$56</p></center>
            <center><button class="cardButton">Add to cart</button><br></center>
            <center><button class="cardButton">Buy</button></center>
        </div>
    </div>

    <div class="card">
        <div class="cardCol1">
            <img class="courseImg" src="a.jpg" alt="course image">
        </div>
        <div class="cardCol2">
            <p class="courseName">Course Name</p>

            <p class="courseDescription">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="cardCol3">
            <center><p class="cFee">$56</p></center>
            <center><button class="cardButton">Add to cart</button><br></center>
            <center><button class="cardButton">Buy</button></center>
        </div>
    </div> -->
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

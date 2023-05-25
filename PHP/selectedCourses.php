<?php

$Mytype = $_GET["type"];

?>

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

    <div class="dropdown">
        <button class="dropdownButton">Dropdown</button>
        <div class="dropdown-content">
            <a href="selectedCourses.php?type=Data Science">Data Science</a>
            <a href="selectedCourses.php?type=Networking Development">Networking Development</a>
            <a href="selectedCourses.php?type=Science and Technology">Science and Technology</a>
            <a href="selectedCourses.php?type=Software Engineering">Software Engineering</a>
            <a href="selectedCourses.php?type=Web Development">Web Development</a>
        </div>
    </div>

    <?php
        include 'dbh.php';

        $sqlCommand = "SELECT * FROM course WHERE C_Name = '$Mytype'";
        $resultSet = $conn->query($sqlCommand);

        if($resultSet->num_rows > 0)
        {
            while($row = $resultSet->fetch_assoc())
            {
                $lecturer = $row["lecturer"];
                $courseDescription = $row["C_Description"];
                $courseFee = $row["C_Fee"];
                $image = $row["image"];

                echo <<<EOT

                    <div class="card">
                        <div class="cardCol1">
                            <img class="courseImg" src="$image" alt="course image">
                        </div>
                        <div class="cardCol2">
                            <p class="courseName">$lecturer</p>

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

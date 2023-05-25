<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Course Page (Admin)</title>
  <link rel="stylesheet" href="../css/adminlec.css">
</head>

<body>
  <section id="menu">
    <div class="logo">
      <h2>WINNER</h2>
    </div>
    <div class="items">
      <li><a href="admincou.php">Course</a></li>
      <li><a href="admintrai.php">Registered Trainees</a></li>
      <li><a href="adminlec.php">Registered Lecturers</a></li>
      <li><a href="#">Resources</a></li>
    </div>
  </section>

  <section id="interface">
    <div class="navi">
      <div class="n1">
        <div class="search">
          <i class="far fa-search"></i>
          <input type="text" placeholder="Search">
        </div>

      </div>
      <div class="profile">
        <i class="far fa-bell"></i>
        <img src="../image/profile.png" alt="prfile">


      </div>
    </div>
    <h3 class="i-name">
      Admin Dashboard
    </h3>
    <div class="values">
      <div class="val-box">
        <i class="far fa-user"></i>
        <div>
          <h3>30</h3>
          <span>Courses</span>
        </div>
      </div>
      <div class="val-box">
        <i class="far fa-user"></i>
        <div>
          <h3>330</h3>
          <span>Resources</span>
        </div>
      </div>
      <div class="val-box">
        <i class="far fa-user"></i>
        <div>
          <h3>500</h3>
          <span>Trainees</span>
        </div>
      </div>
      <div class="val-box">
        <i class="far fa-user"></i>
        <div>
          <h3>45</h3>
          <span>Lecturers</span>
        </div>
      </div>
    </div>
    <div class="board">
      <table width="100%">
        <th>
          <tr>
            <td>RID</td>
            <td>R_Name</td>
            <td>R_Fee</td>
            <td>Action</td>



          </tr>
        </th>
        <tbody>

             <?php
                  //create database connection using dbh file

                   include_once ("dbh.inc.php");

                 //fetch all user data from lecturer tables

                 $sql = "SELECT id,RID,R_Name,R_Fee FROM resources ORDER BY id DESC";
                 $result = mysqli_query($conn,$sql);

                 //output data of each row

                 if($result -> num_rows>0)
                 {
                   while($row = $result -> fetch_assoc())
                   {
                     echo "<tr>";
                     echo "<td>".$row['RID']."</td>";
                     echo "<td>".$row['R_Name']."</td>";
                     echo "<td>".$row['R_Fee']."</td>";
                     echo "<td>  <a href = 'deleter.inc.php?id={$row['id']}'>Delete</a></td>";
                     echo "</tr>";
                   }
                 }

              ?>



        </tbody>

      </table>

    </div>


  </section>


</body>

</html>

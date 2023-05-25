<?php
require_once "dbh.inc.php";

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $lname = $_POST['lname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $subject = $_POST['subject'];

  //update lecturer data

  $result = mysqli_query($conn,"UPDATE lecturers SET fname = $fname, lname = $lname, email = $email, mobile = $mobile, subject = $subject WHERE id = $id");

  //redirect to home page and show updateed list
  header("location:adminlec.php");
}

 ?>

 <?php
//display selected lecturer data base on id
//getting id from url

$id = $_GET['id'];

//fetech lecturer database on id
$result = mysqli_query($conn,"SELECT fname,lname,email,mobile,subject FROM lecturers WHERE id=$id");

while($row = mysqli_fetch_array($result))
{

  $fname = $row['fname'];
  $lname = $row['lname'];
  $email = $row['email'];
  $mobile = $row['mobile'];
  $subject = $row['subject'];


}

  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Lecturer Edit data</title>
    </head>
    <body>
       <a href="adminlec.php"></a>
       <br><br>

       <form name ="update lecturer" action="edit.inc.php" method="post">
         <table border="0">
           <tr>
             <td>First Name</td>
             <td><input type="text" name = "fname" value=<?php echo $fname; ?> ></td>
           </tr>
           <tr>
             <td>Last Name</td>
             <td><input type="text" name = "lname" value=<?php echo $lname; ?> ></td>
           </tr>
           <tr>
             <td>Email</td>
             <td><input type="text" name = "email" value=<?php echo $email; ?> ></td>
           </tr>
           <tr>
             <td>Mobile</td>
             <td><input type="text" name = "mobile" value=<?php echo $mobile; ?> ></td>
           </tr>
           <tr>
             <td>Subject</td>
             <td><input type="text" name = "subject" value=<?php echo $subject; ?> ></td>
           </tr>

           <tr>
             <td><input type = "hidden" name ="id" value=<?php echo $id; ?>></td>
             <td><input type = "submit" name = "update" value="Update"></td>
           </tr>
         </table>

       </form>
    </body>
  </html>

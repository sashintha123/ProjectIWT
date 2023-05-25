<?php
//database connection file
   require_once "dbh.inc.php";

//get id form url to delete that lecturers

  $id = $_GET['id'];


  //delete lecturer row from table based on given id

  $result = mysqli_query($conn,"DELETE FROM resources WHERE id=$id");

  //After delete redirect to Home

  header("location:adminreso.php");


 ?>

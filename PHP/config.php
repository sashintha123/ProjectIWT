<?php
ob_start();


$con = mysqli_connect("localhost", "root", "", "rlec"); //Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>

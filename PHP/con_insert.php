<?php
$server = "localhost" ;
$username= "root" ;
$password= "" ;
$dbname= "rlec";

$conn = mysqli_connect($server ,$username , $password , $dbname );

if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(!empty($_POST['name']) && !empty($_POST['emailaddress']) && !empty($_POST['fb'])){
		$Name = $_POST['name'];
		$Email = $_POST ['emailaddress'];
		$Feedback= $_POST ['fb'];

		$query = "insert into form(Name,Email,Feedback) values ('$Name' ,'$Email' ,'$Feedback');" ;
		$run = mysqli_query($conn,$query) or die(mysqli_error());

		if($run){
			echo " Form submitted successfully";
		}
		else{
			echo "Form not submitted" ;

		}

	}

	else {
		echo " all fields required" ;
	}
}else{
	echo "somthing wrong";
}


?>

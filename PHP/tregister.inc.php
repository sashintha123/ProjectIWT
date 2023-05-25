<?php
    // --Add dbh file--
    require_once "dbh.inc.php";
    // --Add validation file--
    require_once "validationst.inc.php";

    // If user clicks the register button
    if(isset($_POST["register-btn"])){
        // Get form input data
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $subject = $_POST["subject"];
        $qualification = $_POST["qualification"];
        $pass = $_POST["pass"];
        $re_pass = $_POST["re_pass"];

        // Input validation
        if(inputsEmptyRegister($fname, $lname, $email, $mobile,$subject,$qualification, $pass, $re_pass)){
            header("location:trairegister.php?err=empty_inputs");
            // exit();
        }
        else if(nameInvalid($fname, $lname)){
            header("location:trairegister.php?err=invalid_name");
        }
        else if(emailInvalid($email)){
            header("location:trairegister.php?err=invalid_email");
        }
        else if(mobileInvalid($mobile)){
            header("location:trairegister.php?err=invalid_mobile");
        }
        else if(passwordInvalid($pass)){
            header("location:trairegister.php?err=invalid_password");
        }
        else if(passNotMatch($pass, $re_pass)){
            header("location:trairegister.php?err=different_pass");
        }
        else if(emailOrMobileAvailable($conn, $email, $mobile)){
            header("location:trairegister.php?err=available_emailormobile");
        }
        else{
            // If all inputs are error free
            registerNewUser($conn, $fname, $lname, $email, $mobile,$subject,$qualification, $pass, $re_pass);
        }
    }
    else{
        header("location:trairegister.php");
        exit();
    }

    // Function for register a new user
    function registerNewUser($conn, $fname, $lname, $email, $mobile,$subject,$qualification, $pass, $re_pass){
        // Password encryption
        $passHashed = password_hash($pass, PASSWORD_DEFAULT);
        // Query
        $sql = "INSERT INTO trainee (fname, lname, email, mobile,subject,qualification, password) VALUES (?, ?, ?, ?,?,?, ?);";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:trairegister.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "sssisss", $fname, $lname, $email, $mobile,$subject,$qualification, $passHashed);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Close the statement
            mysqli_stmt_close($stmt);

            header("location:trailogin.php?err=noerrors");
        }
    }
?>

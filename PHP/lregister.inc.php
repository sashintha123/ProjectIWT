<?php
    // --Add dbh file--
    require_once "dbh.inc.php";
    // --Add validation file--
    require_once "validations.inc.php";

    // If user clicks the register button
    if(isset($_POST["register-btn"])){
        // Get form input data
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $subject = $_POST["subject"];
        $service = $_POST["service"];
        $pass = $_POST["pass"];
        $re_pass = $_POST["re_pass"];

        // Input validation
        if(inputsEmptyRegister($fname, $lname, $email, $mobile,$subject,$service, $pass, $re_pass)){
            header("location:lecregister.php?err=empty_inputs");
            // exit();
        }
        else if(nameInvalid($fname, $lname)){
            header("location:lecregister.php?err=invalid_name");
        }
        else if(emailInvalid($email)){
            header("location:lecregister.php?err=invalid_email");
        }
        else if(mobileInvalid($mobile)){
            header("location:lecregister.php?err=invalid_mobile");
        }
        else if(passwordInvalid($pass)){
            header("location:lecregister.php?err=invalid_password");
        }
        else if(passNotMatch($pass, $re_pass)){
            header("location:lecregister.php?err=different_pass");
        }
        else if(emailOrMobileAvailable($conn, $email, $mobile)){
            header("location:lecregister.php?err=available_emailormobile");
        }
        else{
            // If all inputs are error free
            registerNewUser($conn, $fname, $lname, $email, $mobile,$subject,$service, $pass, $re_pass);
        }
    }
    else{
        header("location:lecregister.php");
        exit();
    }

    // Function for register a new user
    function registerNewUser($conn, $fname, $lname, $email, $mobile,$subject,$service, $pass, $re_pass){
        // Password encryption
        $passHashed = password_hash($pass, PASSWORD_DEFAULT);
        // Query
        $sql = "INSERT INTO lecturers (fname, lname, email, mobile,subject,service, password) VALUES (?, ?, ?, ?,?,?, ?);";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:lecregister.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "sssisss", $fname, $lname, $email, $mobile,$subject,$service, $passHashed);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Close the statement
            mysqli_stmt_close($stmt);

            header("location:lecregister.php?err=noerrors");
        }
    }
?>

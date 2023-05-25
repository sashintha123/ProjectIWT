<?php
    // --Add dbh file--
    require_once "dbh.inc.php";
    // --Add validation file--
    require_once "validationsa.inc.php";

    // If user clicks the login button
    if(isset($_POST["login-btn"])){
        // Get form input data
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        // Input validation
        if(inputsEmptyLogin($email, $pass)){
            header("location:admilogin.php?err=empty_inputs");
        }
        else if(emailInvalid($email)){
            header("location:admilogin.php?err=invalid_email");
        }
        else if(passwordInvalid($pass)){
            header("location:admilogin.php?err=invalid_password");
        }
        else{
            // If all inputs are error free
            loginUser($conn, $email, $pass);
        }
    }
    else{
        header("location:admilogin.php");
        exit();
    }

    // Function for login
    function loginUser($conn, $email, $pass)
    {
        // Query
        $sql = "SELECT * FROM admin WHERE email = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:admilogin.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "s", $email);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if($row = mysqli_fetch_assoc($data))
            {
                // Get encrypted password
                  $pass = $row["password"];
                // Verify password

            }
                else
                {
                    header("location:admilogin.php?err=loginfailedpass");
                    exit();
                }

               header("location:admindashboard.php");

            }









        // Close the statement
        mysqli_stmt_close($stmt);
    }
?>

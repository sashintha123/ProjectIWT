<?php

// Check if login inputs are empty
function inputsEmptyLogin($email, $pass){
    $value;
    if(empty($email) || empty($pass)){
        $value = true;
    }else{
        $value = false;
    }
    return $value;
}

// Check if email is invalid
function emailInvalid($email){
    $value;
    if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/", $email)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}

// Check if password is invalid
function passwordInvalid($pass){
    $value;
    if(!preg_match("/^.{5,}$/", $pass)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}





 ?>

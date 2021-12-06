<?php
if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'connect.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($email, $password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=wronglogin");
        exit();
    }

    if(invalidPassword($password) !== false) {
        header("location: ../signup.php?error=wronglogin");
        exit();
    }
    

    loginUser($conn, $email, $password);
        
}
else {
    header("location: ../our_mission.php");
    exit();
}


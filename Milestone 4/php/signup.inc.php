<?php
if(isset($_POST["submit"])) {
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    require_once 'connect.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($firstName, $lastName, $email, $password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(invalidName($firstName) !== false) {
        header("location: ../signup.php?error=invalidfirstname");
        exit();
    }

    if(invalidLastName($lastName) !== false) {
        header("location: ../signup.php?error=invalidlastname");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if(invalidPassword($password) !== false) {
        header("location: ../signup.php?error=invalidpassword");
        exit();
    }

    if(emailExists($conn, $email) !== false) {
        header("location: ../signup.php?error=emailtaken");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $password);

}
else {
    header("location:../signup.php");
}
?>
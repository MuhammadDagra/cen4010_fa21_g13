<?php

    function emptyInputSignup($firstName, $lastName, $email, $password) {
        
        if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
            return true;
        }
        else {
            return false;
        }
        
    }

    function invalidName($firstName) {
        
        if (!preg_match("/^[a-zA-Z0-9]*$/", $firstName)) {
            return true;
        }
        else {
            return false;
        }
        

    }

    function invalidLastName($lastName) {
        
        if (!preg_match("/^[a-zA-Z0-9]*$/",$lastName)) {
            return true;
        }
        else {
            return false;
        }
    

    }

    function invalidEmail($email) {
       
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }

        
    }

    function invalidPassword($password) {
        
        if (!preg_match("/^[a-zA-Z0-9]*$/",$password)) {
            return true;
        }
        else {
            return false;
        }
        

    }

    function emailExists($conn, $email) {        
        $select = mysqli_query($conn, "SELECT `email` FROM `Registration` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
        if(mysqli_num_rows($select)) {
            //exit('This email is already being used');
            return true;
        }
        else {
            return false;
        }
    }

    
    function createUser($conn, $firstName, $lastName, $email, $password) {
        $sql = "INSERT INTO Registration (firstName, lastName, email, password) VALUES(?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../signup.php?error=stmtfailed");
                exit();    
            }
        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    
            
		$stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedpwd);
		$execval = $stmt->execute();
		echo $execval;
		//echo "Registration successfully...";
		$stmt->close();
		$conn->close();
        header("location: ../signup.php?error=none");
            
    }

    function emptyInputLogin($email, $password) {
        
        if (empty($email) || empty($password)) {
            return true;
        }
        else {
            return false;
        }
        
    }

    Function loginUser($conn, $email, $password){
        $emailExists = emailExists($conn, $email);

        if ($emailExists === false){
            header ("location: ../signup.php?error=wronglogin");
            exit();
        }
                
        $sql = "SELECT `password` FROM `Registration` WHERE `email` = '".$_POST['email']."'";
        $result = $conn->query($sql);
              
        $row = $result->fetch_assoc();
        
        $pwdHashed = $row["password"];
        $checkPwd = password_verify($password, $pwdHashed);
        
        if($checkPwd === false){
            header ("location: ../signup.php?error=wronglogin");
        }
        else if ($checkPwd === true){
            $sqlName = "SELECT `firstName` FROM `Registration` WHERE `email` = '".$_POST['email']."'";
            $resultName = $conn->query($sqlName);
            $rowName = $resultName->fetch_assoc();
            $firstName = $rowName["firstName"];

            session_start();
            $_SESSION["name"] = $firstName;
            header("location: ../services.php");
            exit();
        }           
        
    }


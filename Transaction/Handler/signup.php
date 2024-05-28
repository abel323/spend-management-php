<?php
    session_start();
    if(isset($_POST['submit'])){
        include('../Partial/connection.inc.php');
        $email = mysqli_real_escape_string($connect, $_POST['user_name']);
        $fname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lname = mysqli_real_escape_string($connect, $_POST['lname']);
        $mname = mysqli_real_escape_string($connect, $_POST['mname']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $password = md5(mysqli_real_escape_string($connect, $_POST['password']));
        $confPassword = md5(mysqli_real_escape_string($connect, $_POST['confPassword']));
        $_SESSION['error'] = "";
        $_SESSION['success'] = "";
        
        if($password != $confPassword){
            $_SESSION['error'] = "Password and confrim password fields did not match!";
            header("Location: ../signup.php");
        }
        else{
            $sql = "INSERT INTO tbluser(FName,LName,MName,Phone,EMail,Password)
            VALUES('$fname','$lname','$mname','$phone','$email','$password')";
            mysqli_query($connect,$sql) or die(mysqli_error($connect));
            $_SESSION['success'] = "User account created successfully! now you can login!";
        }
    }
?>
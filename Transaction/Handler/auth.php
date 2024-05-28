<?php
    session_start();
    include('../Partial/connection.inc.php');
    if(isset($_POST['submit'])){
        $user_name = mysqli_real_escape_string($connect,$_POST['user_name']);
        $password = md5(mysqli_real_escape_string($connect,$_POST['password']));
        $_SESSION['user_name'] = $user_name;
        $_SESSION['password'] = $password;
        $_SESSION['error'] = "Invalid Credientials!";
        $sql = "SELECT EMail,Password FROM tbluser WHERE EMail='$user_name' AND Password='$password'";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        $final = mysqli_fetch_assoc($result);
        if($_SESSION['user_name'] == $final['EMail'] && $_SESSION['password'] == $final['Password']){
            header("Location: ../index.php");
        }
        else{
            header("Location: ../login.php");
        }
    }
?>
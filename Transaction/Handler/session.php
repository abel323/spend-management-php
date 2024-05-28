<?php
    session_start();
    if(!isset($_SESSION['user_name']) && !isset($_SESSION['password'])){
        header('Location: login.php');
    }
?>
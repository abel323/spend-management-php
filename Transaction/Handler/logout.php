<?php
    session_start();
    if(isset($_SESSION['user_name']) and isset($_SESSION['password'])){
        session_destroy();
        echo "<script>window.location.href='../login.php';</script>";
    }
?>
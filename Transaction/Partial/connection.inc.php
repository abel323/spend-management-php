<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "Transaction_Management";

    $connect = mysqli_connect($host, $user, $password) or die('Error: Unable to connect with databse!');
    mysqli_select_db($connect,$db) or die(mysqli_error($connect));
?>
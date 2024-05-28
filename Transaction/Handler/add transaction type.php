<?php
    session_start();
    include('../Partial/connection.inc.php');
    $_SESSION['success_message'] = '';
    $_SESSION['error'] = '';
    if(isset($_POST['submit'])){
        $transaction_type = mysqli_real_escape_string($connect,$_POST['transaction_type']);
        $sql = "INSERT INTO transaction_type(Type) VALUES('$transaction_type')";
        if(mysqli_query($connect,$sql)){
            $_SESSION['success_message'] = "Transaction Type Added Successfully!";
            unset($_SESSION['error']);
            header('Location: ../add payment type.php');
        }
        else{
            $_SESSION['error'] = "Unable To Add Transaction Type!";
            unset($_SESSION['success_message']);
            header('Location: ../add payment type.php');
        }
    }
?>
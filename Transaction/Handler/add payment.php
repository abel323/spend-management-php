<?php
    session_start();
    include('../Partial/connection.inc.php');
    $_SESSION['success_message'] = '';
    $_SESSION['error'] = '';
    if(isset($_POST['submit'])){
        $payment_type = mysqli_real_escape_string($connect,$_POST['payment_type']);
        $sql = "INSERT INTO payment_type(Payment_Type) VALUES('$payment_type')";
        if(mysqli_query($connect,$sql)){
            $_SESSION['success_message'] = "Payment Method Added Successfully!";
            unset($_SESSION['error']);
            header('Location: ../add payment type.php');
        }
        else{
            $_SESSION['error'] = "Unable To Add Payment Method!";
            unset($_SESSION['success_message']);
            header('Location: ../add payment type.php');
        }
    }
?>
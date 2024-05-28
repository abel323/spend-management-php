<?php
    session_start();
    include('../Partial/connection.inc.php');
    $_SESSION['success'] = "";
    $_SESSION['error_message'] = "";
    //$user_id = $_SESSION['user_id'];
    if(isset($_POST['submit'])){
        $reson = mysqli_real_escape_string($connect,$_POST['reason_for_transaction']);
        $transaction_type = mysqli_real_escape_string($connect,$_POST['transaction_type']);
        $transaction_date = mysqli_real_escape_string($connect,$_POST['transaction_date']);
        $payment_type = mysqli_real_escape_string($connect,$_POST['payment_type']);
        $amount = mysqli_real_escape_string($connect,$_POST['amount']);
        $sql = "SELECT ID FROM tbluser WHERE EMail='".$_SESSION['user_name']."'";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        $final = mysqli_fetch_array($result);
        $user_id=$final['ID'];
        $sql = "INSERT INTO tbltransaction(
            Reason_For_Transaction,
            Transaction_Type,
            Transaction_Date,
            Payment_Type,
            Amount,
            User_ID) VALUES('$reson','$transaction_type','$transaction_date','$payment_type',$amount,$user_id)";
        if(mysqli_query($connect,$sql)){
            $_SESSION['success'] = "Transaction Added Successfully!";
            header('Location: ../add transaction.php');
        }
        else{
            $_SESSION['error_message'] = "Unable To Add Transaction!";
            header('Location: ../add transaction.php');
        }
    }
?>
<?php
    include('Handler/session.php');
?>
<!DOCTYPE html>
<html>
    <?php 
        include('Partial/head.php');
        include('Partial/connection.inc.php');
    ?>
    <body>
        <?php
            include('Partial/header.php'); 
        ?>
        <?php
            include('Partial/aside.php');
        ?>
        <main>
            <div class="message">
                <?php
                    if(isset($_SESSION['success_message'])){
                ?>
                <p style="color: green"><?php echo $_SESSION['success_message']; ?></p>
                <?php
                    unset($_SESSION['success_message']);
                    }
                    else if(isset($_SESSION['error_message'])){
                ?>
                <p style="color: red"><?php echo $_SESSION['error_message']; ?></p>
                <?php
                    unset($_SESSION['error']);
                    } 
                ?>
            </div>
            <div class="container">
                <div class="form-container">

                    <fieldset>
                        <legend>Transaction Form</legend>
                        <form action="handler/add transaction.php" method="post">
                            <table border="0">
                                <tr>
                                    <td><label>Reason For Transaction: </label></td>
                                    <td><input type="text" name="reason_for_transaction"></td>
                                </tr>
                                <tr>
                                    <td><label>Transaction Type: </label></td>
                                    <td>
                                        <select name="transaction_type">
                                            <option value="" disabled selected>Transaction Type</option>
                                            <?php
                                                $sql = "SELECT * FROM transaction_type ORDER BY Type";
                                                $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
                                                while($row=mysqli_fetch_assoc($result)){
                                                    echo "<option value='".$row['ID']."'>".$row['Type']."</option>";;
                                                } 
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Transaction Date: </label></td>
                                    <td><input type="date" name="transaction_date"></td>
                                </tr>
                                <tr>
                                    <td><label>Payment Type: </label></td>
                                    <td>
                                        <select name="payment_type" id="payment_type">
                                            <option value="" disabled selected>Payment Type</option>
                                            <?php
                                                $sql = "SELECT * FROM payment_type ORDER BY Payment_Type";
                                                $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "<option value='".$row['ID']."'>".$row['Payment_Type']."</option>";
                                                } 
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Amount: </label></td>
                                    <td><input type="text" name="amount"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </div>
            </div>
        </main>
        <?php
            include('Partial/footer.php');
        ?>
    </body>
</html>
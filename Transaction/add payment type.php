<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <?php 
        include('Partial/head.php');
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
                    <form action="handler/add payment.php" method="post">
                        <fieldset>
                            <legend>Transaction Form</legend>
                            <table border="0">
                                <tr>
                                    <td><label>Pyament Type: </label></td>
                                    <td><input type="text" name="payment_type"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                                    </td>
                                </tr>
                            </table>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
        <?php
            include('Partial/footer.php');
        ?>
    </body>
</html>
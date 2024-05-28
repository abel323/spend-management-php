<?php
    include('Handler/session.php');
    include('Partial/connection.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
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
        <div class="grid-container">
            <div class="grid-item">
                <?php 
                    $sql = "SELECT SUM(Amount) AS Total FROM tblTransaction";
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    if(mysqli_num_rows($result) == 0){
                        echo "<p>Total Spent For Payment: <b>$0</b></p>";
                    }
                    else{
                    $final = mysqli_fetch_assoc($result);

                ?>
                <p>Total Spent For Payment: <b><?php echo $final['Total'];?></b></p>
                <?php } ?>
            </div>
            <div class="grid-item">
                <p>This is item two</p>
            </div>
            <div class="grid-item">
                <p>This is item three</p>
            </div>
            <div class="grid-item">
                <p>This is item four</p>
            </div>
        </div>
    </main>
    <?php
        include('Partial/footer.php'); 
    ?>
</body>
</html>
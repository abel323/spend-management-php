<?php
    include('Handler/session.php');
?>
<!DOCTYPE html>
<html>
    <?php
        include('Partial/head.php'); 
    ?>
    <body>
        <?php include('Partial/header.php'); ?>
        <?php include('Partial/aside.php'); ?>
        <main>
            <!--<div class="searchbar">
                <form method="get" action="list transaction.php">
                    <label>Start Date: </label>
                    <input type="date" name="start_date">
                    <label>End Date: </label>
                    <input type="date" name="end_date">
                    <input type="submit" name="search" value="Search">
                </form>
            </div>-->
            <div class="data-container">
                <?php
                    include('Partial/connection.inc.php');
                    $sql = "SELECT * FROM tbltransaction
                    WHERE User_ID=(SELECT ID FROM tbluser WHERE EMail='".$_SESSION['user_name']."') LIMIT 25";
                    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
                    if(mysqli_num_rows($result)>0){
                ?>
                <table border="1" style="margin-top:20px; margin-left: 20px;">
                    <thead>
                        <th>Transaction ID</th>
                        <th>Reason For Transaction</th>
                        <th>Transaction Type</th>
                        <th>Transaction Date</th>
                        <th>Amount</th>
                        <th>Payment Type</th>
                        
                    </thead>
                    <tbody>
                        <?php
                            $sum = 0;
                            while($row=mysqli_fetch_assoc($result)){
                                extract($row);
                                echo "<tr>";
                                echo "<td>".$Transaction_ID."</td>";
                                echo "<td>".$Reason_For_Transaction."</td>";
                                echo "<td>".$Transaction_Type."</td>";
                                echo "<td>".$Transaction_Date."</td>";
                                echo "<td>".$Amount."</td>";
                                echo "<td>".$Payment_Type."</td>";
                                
                                echo "</tr>";
                                if($Transaction_Type==1){
                                    $sum = $sum+$Amount;
                                }
                            } 
                        ?>
                    </tbody>
                    <tfoot>
                        <?php 
                            echo "<tr>";
                            echo "<td><b>Total</b></td>";
                            echo "<td colspan='6'><b>".$sum."</b></td>";
                        ?>
                    </tfoot>
                </table>
                <?php } 
                    else{
                        echo "<p style='color: red;'>No Data Is Found!</p>";
                        echo "<a href='add transaction.php'>Add New Transaction</a>";
                    }
                ?>
            </div>
        </main>
        <?php include('Partial/footer.php'); ?>
    </body>
</html>
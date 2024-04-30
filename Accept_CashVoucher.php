<?php
        include('config.php');

        $expenseId = $_GET['notification_id'];
        $sql = "UPDATE expense SET Expense_status = 'accepted' WHERE Expense_id = '$expenseId'";

        if( mysqli_query($conn, $sql)){
            echo '<script>alert("Cash voucher accepted successfully")</script>';
            echo "<script>window.location = 'Notification-modified.php'</script>";
        }else{
            echo '<script>alert("Error")</script>';
            echo "<script>window.location = 'Notification-modified.php'</script>";
        }


        
?>
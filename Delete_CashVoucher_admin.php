<?php
        include('config.php');

        $expense_id = $_GET['expense_id'];
        $sql = "DELETE FROM expense WHERE Expense_id = '$expense_id'";


        if( mysqli_query($conn, $sql)){
            echo '<script>alert("Cash Voucher deleted")</script>';
            echo "<script>window.location = 'Notification-modified.php'</script>";
        }else{
            echo '<script>alert("Error")</script>';
            echo "<script>window.location = 'Notification-modified.php'</script>";
        }
?>
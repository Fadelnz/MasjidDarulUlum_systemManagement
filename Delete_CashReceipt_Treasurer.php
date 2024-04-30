<?php
        include('config.php');

        $income_id = $_GET['transaction_id'];
        $sql = "DELETE FROM income WHERE Income_id = '$income_id'";


        if( mysqli_query($conn, $sql)){
            echo '<script>alert("Cash Receipt deleted")</script>';
            echo "<script>window.location = 'Transaction_details.php'</script>";
        }else{
            echo '<script>alert("Error")</script>';
            echo "<script>window.location = 'Transaction_details.php'</script>";
        }
?>
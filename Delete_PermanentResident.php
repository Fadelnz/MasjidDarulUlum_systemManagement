<?php
        include('config.php');

        $application_id = $_GET['application_id'];
        $sql = "DELETE FROM permanentresident WHERE application_id = '$application_id'";


        if( mysqli_query($conn, $sql)){
            echo '<script>alert("Permanent Resident is deleted")</script>';
            echo "<script>window.location = 'Ahli-Kariah-ver3.php'</script>";
        }else{
            echo '<script>alert("Error")</script>';
            echo "<script>window.location = 'Ahli-Kariah-ver3.php'</script>";
        }
?>
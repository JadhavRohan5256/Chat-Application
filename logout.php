<?php
    session_start();
    if(isset($_SESSION['uniqueId'])) {
        include 'conn.php';
        $sql = "UPDATE users SET status = 'offline' where uniqueId = {$_SESSION['uniqueId']}";
        $result = mysqli_query($con,$sql);
        if($result) {
            session_unset();
            session_destroy();
            header('location:'.$hosting);
        }
        else {
            echo '<script>alert("something wrong")</script>';
        }

    }
?>
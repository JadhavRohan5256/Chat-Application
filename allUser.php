<?php
    session_start();
    $sendId = $_SESSION['uniqueId'];
    include "conn.php";
    $sql = "Select *From users";
     $result = mysqli_query($con,$sql) or die("query con't fire");
     $output = " ";
     if(mysqli_num_rows($result) > 0) {
         include "userFetch.php";
         echo $output;
     }
     else {
         echo "<h2 class='text-align:center;color:#00fff00;'>No users Found</h2>";
     }
?>
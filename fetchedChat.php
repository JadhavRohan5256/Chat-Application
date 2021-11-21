<?php
include "conn.php";
$sendMessegeId = $_SESSION['uniqueId'];
$receiveMessegeId = $_GET['userId'];
$sql2 = "SELECT *from messegeList where (sendedMessegeId ={$sendMessegeId} And receivedMessegeId = {$receiveMessegeId}) Or (sendedMessegeId = {$receiveMessegeId} And receivedMessegeId = {$sendMessegeId}) ORDER BY messegeId ASC";
$result2 = mysqli_query($con,$sql2) or die("query can't fire");
$output = "";        
if(mysqli_num_rows($result2) > 0) {
    while($row2 = mysqli_fetch_assoc($result2)) {
        if($sendMessegeId == $row2['sendedMessegeId']) {
            echo "
                 <div class='send'>
                    <p>".$row2['messege']."</p> 
                 </div>
            ";
        }
        else {
           echo  "
                <div class='receive'>
                    <p>".$row2['messege']."</p>
                </div>
            ";
        }
    }
}
else {
    echo "<h2 style='text-align:center;'>Not record found</h2>";
}
?>
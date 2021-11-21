<?php
    session_start();
    if(!isset($_SESSION['uniqueId'])){
        header("location:".$hosting);
    }
    include "conn.php";
    // $sendMessegeId = mysqli_real_escape_string($con,$_POST['sendMessege']);
    // $receiveMessegeId = mysqli_real_escape_string($con,$_POST['receiveMessege']);
    $sendMessegeId = mysqli_real_escape_string($con,$_POST['sendMessege']);
    $receiveMessegeId = mysqli_real_escape_string($con,$_POST['receiveMessege']);
    $sql = "SELECT *from messegeList where (sendedMessegeId ={$sendMessegeId} And receivedMessegeId = {$receiveMessegeId}) Or (sendedMessegeId = {$receiveMessegeId} And receivedMessegeId = {$sendMessegeId}) ORDER BY messegeId ASC";
    $result = mysqli_query($con,$sql) or die("query can't fire");
    $output = "";        
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($sendMessegeId == $row['sendedMessegeId']) {
            //  if(date("Y:m:d") == $row['date'])
             $output .= "
                    <div class='send'>
                        <p>
                            ".$row['messege']."
                            <span>".$row['date']."</span>
                        </p> 
                    </div>
                     ";
            }
            else {
                $output .= "
                <div class='receive'>
                    <p>
                        ".$row['messege']."
                        <span>".$row['date']."</span>
                    </p>
                </div>
                ";
            }
        }
        echo $output;
    }
    else {
        echo "<h2 style='text-align:center;'>Not record found</h2>";
    }
    
   
?>
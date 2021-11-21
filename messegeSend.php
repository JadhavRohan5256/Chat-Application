<?php
    include "conn.php";
    session_start();
    if(!isset($_SESSION['uniqueId'])){
        header("location:".$hosting);
    }
    $sendMessege = mysqli_real_escape_string($con,$_POST['sendMessege']);
    $receiveMessege = mysqli_real_escape_string($con,$_POST['receiveMessege']);
    $messege = mysqli_real_escape_string($con,$_POST['messege']);
    if(!empty($messege) && !empty($sendMessege) && !empty($receiveMessege)) {
        echo $sql = "insert into messegeList(sendedMessegeId,receivedMessegeId,messege) values($sendMessege,$receiveMessege,'$messege')";
        $result = mysqli_query($con,$sql) or die("query can't fire");
        if($result) {
          echo 1;
        }
    }
   

?>
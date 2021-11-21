<?php 
    $session = $_SESSION['uniqueId'];
    $output = " ";
    while($row2 = mysqli_fetch_assoc($result)) {
        if($_SESSION['uniqueId'] != $row2['uniqueId']){
        $output .= '
        <div class="contact">
            <div class="leftView">
                <div class="profile">
                    <a href="chat.php?userId='. $row2['uniqueId'] .'">
                        <img src="fileUploaded/'.$row2['imageName'].'" alt="user profile">
                    </a>
                </div>
                <div class="details">
                    <a href="chat.php?userId='. $row2['uniqueId'].'">
                        <h3>'.$row2['firstName'].' '.$row2['lastName'].'</h3>';
                        // this query work out remaning 
     $output .=   ' </a>';
                    $sql3 = "SELECT *From messegeList where (sendedMessegeId = {$row2['uniqueId']} ) And (receivedMessegeId = {$session} or sendedMessegeId = {$session}) ORDER BY messegeId DESC LIMIT 1";
                    $result3 = mysqli_query($con,$sql3) or die("query con't fire");
                    if(mysqli_num_rows($result3) > 0) {
                        while($row3 = mysqli_fetch_assoc($result3)) {
                            $output .= '<p>'.$row3['messege'].'</p>';
                        }
                    }
               $output .= ' </div>
            </div>
            <div class="rightView">';
                if($row2['status'] == 'online')
                {
                    $output .= '<i class="fa fa-circle"></i>';
                }
$output .= '</div>
        </div>';
            }
            
    }
      
?>
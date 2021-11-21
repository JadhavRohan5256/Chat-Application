<?php 
    include "conn.php";
    session_start();
    if(!isset($_SESSION['uniqueId'])) {
        header('location:'.$hosting);
    }

    $id  = mysqli_real_escape_string($con,$_GET['userId']);
    $sql = "SELECT *From users where uniqueId = $id";
    $result = mysqli_query($con,$sql) or die("query con't fire");
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chating Page</title>
    <link rel="stylesheet" href="css/chat.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="previes">
                <a href="homePage.php">
                    <div class="topArrow"></div>
                    <div class="middleArrow"></div>
                    <div class="bottomArrow"></div>
                </a>
            </div>
            <div class="profile">
                <img src="<?php echo 'fileUploaded/'.$row['imageName']; ?>" alt="profile">
                <div class="name">
                    <h3><?php echo $row['firstName']." ".$row['lastName']; ?></h3>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </div>
        </div>
        <div class="middleSection" id="middleSection">
            <div class="chat">

            </div>
        </div>
        <form method="Post" class='messege' id="form" autocomplete="off">
            <input type="number" name="sendMessege" id="sendMessege" value="<?Php echo $_SESSION['uniqueId']; ?>" hidden>
            <input type="number" name="receiveMessege" id="receiveMessege" value="<?php echo $row['uniqueId']; ?>" hidden>
            <input type="text" name="messege" id="messege" placeholder="Type a message here...">
            <button type="submit" id="sendMessege">
                <i class="fa fa-paper-plane" id="plane"></i>
            </button>
        </form>
    </div>
    <?php
    }
    ?>
    <script src="https://use.fontawesome.com/fed04339ad.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/chat.js"></script>
</body>
</html>


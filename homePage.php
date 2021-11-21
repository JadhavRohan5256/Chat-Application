<?php
    include "conn.php";
    session_start();
    if(!isset($_SESSION['uniqueId'])) {
        header('location:'.$hosting);
    }
    $session = $_SESSION['uniqueId'];
    $sql = "SELECT * From users where uniqueId = $session";
    $result = mysqli_query($con,$sql) or die("can't fetch data");
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/homePage.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="leftView userDetails">
                <div class="profile" id="profile">
                    <img src="<?php echo 'fileUploaded/'.$row['imageName'];?>" alt="user profile">
                </div>
                <div class="userName">
                    <h2><?php echo $row['firstName']." ".$row['lastName']; ?></h2>
                    <!-- <p>This is text messege</p> -->
                </div>
            </div>
            <?php
    }
            ?>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <div class="search">
            <p>Select user to start the chart</p>
            <input type="text" id="search" placeholder="Enter name to search" autocomplete="off">
           <button id="searchBtn" onclick="classLoad()"><i class="fa fa-search"></i></button>
        </div>
        <div class="contactContainer">
            
        </div>
    </div>
    <script src="https://use.fontawesome.com/fed04339ad.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        // fetching all User in homePage 
        $(document).ready(function(){
            // setInterval(() => {
                $.ajax({
                    url:"allUser.php",
                    type:"Post",
                    success:function(data) {
                        $('.contactContainer').html(data);
                    }
                });
            // },500);
        });
        // fetching users based on searcing
        
        $(document).ready(function(){
            $("#search").on("keyup",function() {
                var search_val = $(this).val();
                $.ajax({
                    url:"search.php",
                    type:"Post",
                    data:{search:search_val},
                    success:function(data) {
                        $('.contactContainer').html(data);
                    }
                });
            });
        });
        
        </script>
        <script src="js/homePage.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signUp.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Realtime Chat App</h1>
        </div>
        <div class="error">
            <p></p>
        </div>
        <form action="" id="form">
            <div class="box">
                <div class="subBox">
                    <label for="firstName">Frist Name</label>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name">
                </div>
                <div class="subBox">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="subBox">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email Address">
            </div>
            <div class="subBox">
                <label for="password">Password</label>
                <span onclick="load()">
                  <i class="fa fa-eye" id="Open"></i>
                  <i class="fa fa-eye-slash" id="Close"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Enter New Password">
            </div>
            <div class="subBox">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Your Password">
            </div>
            <div class="subBox">
                <label for="image">Select Image</label>
                <input type="file" name="image" id="image" aria-label="file browser">
            </div>
            <div class="subBox">
                <input type="submit" name="submit" value="Continue to Chart" id="signUp">
            </div>
        </form>
        <div class="login">
            <p>Already signed Up? </p>
            <a href="index.php">Login now</a>
        </div>
    </div>
    
    <script src="https://use.fontawesome.com/fed04339ad.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/signUp.js"></script>
</body>

</html>
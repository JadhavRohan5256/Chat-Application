
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signUp.css">
    <link rel="stylesheet" href="css/index.css">
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
                <input type="submit" value="Continue to Chart" id="signUp">
            </div>
        </form>
        <div class="login">
            <p>Register Here? </p>
            <a href="signUp.php">Sign now</a>
        </div>
    </div>
    <script src="https://use.fontawesome.com/fed04339ad.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
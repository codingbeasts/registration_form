<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
    <title>Login & Signup</title>
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <div class="btn-box">
                <button class="btn signin-btn">sign in</button>
                <button class="btn signup-btn">sign up</button>
            </div>

            <div class="form-box">
            <form class="form-box-1" action="./assets/php/login.php" method="post">
                <label for="uName">user name : </label>
                <input type="text" id="uName" name="username" placeholder="Enter User Name Here" required>

                <label for="passId">password : </label>
                <input type="password" id="passId" name="password" placeholder="Enter Password Here" required>

                <input class="btn form-btn" type="submit" value="submit">
                
            </form>
            <form class="form-box-2" action="./assets/php/signup.php" method="post">
                <label for="uName">user name : </label>
                <input type="text" id="uName" name="username" placeholder="Enter User Name Here" required>

                <label for="emailId">email id :</label>
                <input type="email" name="email" id="emailId" placeholder="Enter Email Here" required>

                <label for="passId">password : </label>
                <input type="password" id="passId" name="password" placeholder="Enter Password Here" required>

                <input class="btn form-btn" type="submit" value="signup">
                
            </form>
            </div>
        </div>
    </div>
    <script src="./assets/js/formswitch.js" type="text/javascript"></script>
</body>
</html>
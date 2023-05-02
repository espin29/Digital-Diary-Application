<?php
    require('localsetting.php');

    if(isset($_GET['authentication'])){
        $authStatus = $_GET['authentication'];
    } else {
        $authStatus = '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, Chrome, Safari, Brave">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="heading">User Login</div>
            <form class="signup" action="authentication.php" method="POST">
                <p class="alr">Welcome to Diaries!</p>
                <br>
                <div class="field">
                    <i class="fa-solid fa-user"></i>
                    <input id="userName" name="userName" type="text" placeholder="Username" required>
                </div>
                <div class="field">
                    <i class="fa-solid fa-lock"></i>
                    <input id="userPassword" name="userPassword" type="password" placeholder="Password" required>
                </div>
                <br><br>
                <button class="login_btn" title="login">Log In</button>
                <p>
                    <?php 
                        if($authStatus == 1) {
                            echo 'Invalid Credentials.';
                        }
                    ?>
                </p>
            </form>
            <form class="login" action="registration_page.php" method="POST">
                <br>
                <p>━━━━━━━━━━ OR ━━━━━━━━━━</p>
                <br>
                <p class="alr">Don't have an account yet?</p>
                <button class="reg_btn" title="register">Sign Up!</button>
                <br><br><br>
            </form>
        </div>
    </div>
</body>
</html>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, Chrome, Safari, Brave">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="heading">User Registration</div>
            <form class="signup" action="user_register.php" method="POST">
                <p class="alr">Sign up and start writing your diaries!</p>
                <br>
                <div class="field">
                    <input name="firstname" type="name" placeholder="First Name" required>
                </div>
                <div class="field">
                    <input name="lastname" type="name" placeholder="Last Name" required>
                </div>
                <div class="field">
                    <input name="username" type="name" placeholder="Username" required>
                </div>
                <div class="field">
                    <input name="password" type="password" placeholder="Password" required>
                </div>
                <br>
                <div class="agree">
                    <input name="checkbox" type="checkbox" required><span>I agree to the <u>Terms of Service</u>.</span>
                </div>
                <br><br>
                <button class="reg_btn" title="register">Sign Me Up!</button>
            </form>
            <form class="login" action="login_page.php" method="POST">
                <br>
                <p>━━━━━━━━━━ OR ━━━━━━━━━━</p>
                <p class="alr">Already have an account?</p>
                <button class="login_btn" title="login">Log In</button>
                <br><br><br>
            </form>
        </div>
    </div>
</body>
</html>
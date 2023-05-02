<?php
    require('localsetting.php');

    $currentUserID = $_GET['userID'];
    
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
    <title>Create Diary</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="heading" style="font-size: 70px;"><i class="fa-solid fa-book-open"></i></div>
            <div class="heading">Create A Diary</div>
            <form action="create_diary_backend.php?userID=<?php echo $_GET['userID']; ?> " method="POST">
                <p class="alr">Please input the necessary information.</p>
                <input type="hidden" name="userID" value="<?php echo $_GET['userID']; ?>">
                <input type="hidden" name="status" value="Active" readonly>
                <br>
                <div class="field">
                    <input id="diaryName" name="diaryName" type="text" placeholder="Diary Name" required>
                </div>
                <br><br><br>
                <button class="login_btn" title="create_diary">Create Diary</button>
                <br><br>
            </form>
            <div>
                <button onclick="goBack()" class="reg_btn" name="cancel">Cancel</button>
                <br><br><br>
            </div>
        </div>
    </div>
</body>
    <script>
         function goBack() {
        window.history.back();
    }
    </script>
</html>
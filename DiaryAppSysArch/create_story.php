<?php
    require('localsetting.php');

    $diaryID = $_GET['diaryID'];

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
    <title>Add Story</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="heading" style="font-size: 70px;"><i class="fa-solid fa-calendar-plus"></i></div>
            <div class="heading">Add A Story</div>
            <form class="signup" action="create_story_backend.php?diaryID=<?php echo $diaryID?>" method="POST">
                <p class="alr">The story can be found in your diary after it is saved.</p>
                <br>
                <div class="field">
                    <label>Write Story:</label><br>
                    <textarea id="storyMessage" name="storyMessage" rows="6" cols="40" required></textarea>
                </div>
                <br><br>
                <button class="reg_btn" title="create_story">Add Story</button>
                <br><br><br>
            </form>
        </div>
    </div>
</body>
</html>
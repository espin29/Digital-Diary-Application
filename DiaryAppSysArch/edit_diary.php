<?php 

    require('fetch_diary.php');
    $userID = $_POST['userID'];
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
    <title>Edit Diary</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="heading" style="font-size: 70px;"><i class="fa-solid fa-file-pen"></i></div>
            <div class="heading">Edit Diary</div>
            <form class="signup" action="edit_diary_backend.php?diaryID=<?php echo $diaryID?>" method="POST">
                <input id="userID" name="userID" type="hidden" value="<?php echo $userID?>">
                <input id="diaryID" name="diaryID" type="hidden" value="<?php echo $_GET['diaryID']?>">
                <br>
                <div class="field">
                    <label for="diaryName">Diary Name</label><br>
                    <input id="diaryName" name="diaryName" type="text" placeholder="Diary Name" value="<?php echo $diaryInfo['diaryName']?>" required>
                </div>
                <br><br>
                <div class="select">
                    <label>Select a status:</label>
                    <select name="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <br><br>
                <button class="reg_btn" title="create_diary">Save Changes</button>
                <br><br><br>
            </form>
        </div>
    </div>
</body>
</html>
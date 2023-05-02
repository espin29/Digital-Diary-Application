<?php
    session_start();

    require('localsetting.php');
    $userID = $_GET['userID'];
    $fetchQuery = "SELECT * 
                    FROM diary INNER JOIN user on user.userID = diary.userID
                    WHERE diary.userID = {$userID}";
    $result = $conn->query($fetchQuery);

    error_reporting(0);
    if(count($_POST)>0) {
    $diaryName = $_POST['diaryName'];
    $result = mysqli_query($conn,"SELECT * FROM diary where diaryName='$diaryName'");
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
    <title>Diaries</title>
</head>
<body>
    <input id="userID" name="userID" type="hidden" value="<?php echo $_GET['userID']?>">
    <div class="container_diary">
        <div class="heading_diary">Diaries Gallery</div>
        <p>Welcome to your diaries! What would you like to do today?</p>
        <div class="searchbar">
            <form method="POST" action="diary_page.php?userID=<?php echo $userID?>">
                <input id="userID" name="userID" type="hidden" value="<?php echo $_GET['userID']?>">
                <input id="diaryName" name="diaryName" type="text" class="search_bar" placeholder="Search">
            </form>
        </div>
        <div class="diary_btn">
            <form action="create_diary.php?userID=<?php echo $_GET['userID']; ?>" method="POST">
                <button type="submit" class="add_btn"><i class="fa-solid fa-circle-plus"></i></button>
            </form>
            <form method="POST" action="logout.php">
            <button type="submit" class="logout_btn"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </div>
        <div class="box_diary">
            <table>
                <tr>
                    <th class="dn">Diary Name</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th class="act">Actions</th>
                </tr>
                <?php
                $i=0;
                    while($items = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $items['diaryName']; ?></td>
                        <td><?php echo $items['status']; ?></td>
                        <td><?php echo $items['diaryCreated']; ?></td>
                        <td class="actions">
                            <form method="POST" action="stories_page.php?diaryID=<?php echo $items['diaryID']; ?>" class="act_btns1">
                                <input name="userID" type="hidden" value="<?php echo $_GET['userID'] ?>">
                                <button type="submit" class="view"><i class="fa-solid fa-eye"></i></button>
                            </form>

                            <form method="POST" action="edit_diary.php?diaryID=<?php echo $items['diaryID']?>" class="act_btns2">
                                <input name="userID" type="hidden" value="<?php echo $_GET['userID'] ?>">
                                <button type="submit" class="edit"><i class="fa-solid fa-pen"></i></button>
                            </form>

                            <form method="POST" action="delete_diary.php?diaryID=<?php echo $items['diaryID']?>" class="act_btns3">
                                <input name="userID" type="hidden" value="<?php echo $_GET['userID'] ?>">
                                <button type="submit" class="delete"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </table>
            <br><br><br>
        </div>
    </div>
</body>
</html>
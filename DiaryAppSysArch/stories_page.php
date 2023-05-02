<?php
    require('localsetting.php');

    $diaryID = $_GET['diaryID'];

    $fetchQuery = "SELECT *
                    FROM story INNER JOIN diary on story.diaryID = diary.diaryID
                    WHERE story.diaryID = {$diaryID}";

    $result = mysqli_query($conn, $fetchQuery);

    error_reporting(0);
    if(count($_POST)>0) {
    $storyID = $_POST['storyID'];
    $result = mysqli_query($conn,"SELECT * FROM story where storyID='$storyID'");
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
    <title>Stories</title>
</head>
<body>
    <div class="container_story">
    <input name="diaryID" type="hidden" value="<?php echo $_GET['diaryID']?>">
        <div class="heading_diary">Stories Board</div>
        <p>Want to write something that happened today?</p>
        <div class="searchbar">
        <form method="POST" action="stories_page.php?diaryID=<?php echo $diaryID?>">
                <input id="userID" name="diaryID" type="hidden" value="<?php echo $_GET['diaryID']?>">
                <input id="storyID" name="storyID" type="text" class="search_bar" placeholder="Search">
            </form>
        </div>
        <div class="diary_btn">
            <div>
                <button onclick="goBack()" class="diary_page"><i class="fa-solid fa-arrow-left"></i></button>
            </div>
            <form method="POST" action="create_story.php?diaryID=<?php echo $diaryID?>">
                <button type="submit" class="add_btn"><i class="fa-solid fa-circle-plus"></i></button>
            </form>
            <form method="POST" action="logout.php">
                <button type="submit" class="logout_btn"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </div>
        <div class="box_diary">
            <table>
                <tr>
                    <th class="dn">Story Number</th>
                    <th>Date Created</th>
                    <th>Story Content</th>
                    <th class="act">Action</th>
                </tr>
             
                <?php
                    while($items = mysqli_fetch_array($result)) 
                    {
                ?>  
                    <tr class="border">
                        <td width="200"><?php echo $items['storyID']; ?></td>
                        <td width="200"><?php echo $items['storyDate']; ?></td>
                        <td width="1000"><?php echo $items['storyMessage']; ?></td>
                        <td width="200">
                            <form method="POST" action="delete_story_backend.php?storyID=<?php echo $items['storyID']?>" class="act_btns">
                                <input name="diaryID" type="hidden" value="<?php echo $diaryID?>">
                                <button type="submit" class="delete"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
    <script>
        function goBack() {
        window.history.back();
    }
    </script>
</html>
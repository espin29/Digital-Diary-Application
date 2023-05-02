<?php

    require('localsetting.php');

    $diaryID = $_GET['diaryID'];
    $storyDate = $_POST['storyDate'];
    $storyMessage = $_POST['storyMessage'];

    $userInfo = array();

    $createStory = "INSERT INTO story VALUES ('', '{$diaryID}', now(), '{$storyMessage}')";

    $result = mysqli_query($conn, $createStory);

    $fetchQuery = "SELECT user.userID
                    FROM user INNER JOIN diary
                    ON user.userID = diary.userID
                    WHERE diary.diaryID = '{$diaryID}'";

    $fetchQueryResult = mysqli_query($conn, $fetchQuery);

    if(mysqli_num_rows($fetchQueryResult) > 0) {
        while($userResult = mysqli_fetch_array($fetchQueryResult)) {
            $userInfo['userID'] = $userResult['userID'];
            $userInfo['userName'] = $userResult['userName'];
            $userInfo['userPassword'] = $userResult['userPassword'];
            $userInfo['firstName'] = $userResult['firstName'];
            $userInfo['lastName'] = $userResult['lastName'];
            $userInfo['lastLoginDate'] = $userResult['lastLoginDate'];

        }
    }

    header('Location:stories_page.php?diaryID='.$diaryID);

?>
<?php 

    require('localsetting.php');

    $storyID = $_GET['storyID'];
    $diaryID = $_POST['diaryID'];

    $DeleteStory = "DELETE FROM story
                    WHERE storyID = '{$storyID}'";
    $resultFromDelete = mysqli_query($conn, $DeleteStory);

    header('Location:stories_page.php?diaryID='.$diaryID);

?>
<?php
    require('localsetting.php');

    $userID = $_POST['userID'];
    $diaryCreated = $_POST['diaryCreated'];
    $diaryName = $_POST['diaryName'];

    $addDiary = "INSERT INTO diary (userID, diaryCreated, diaryName) 
                 VALUES ('{$userID}', '{$diaryCreated}', '{$diaryName}')";
    $resultFromDiary = mysqli_query($conn, $addDiary);

    $lastDiaryID = mysqli_insert_id($conn);

    header('Location:./diary_page.php?diaryID='.$lastDiaryID);

?>

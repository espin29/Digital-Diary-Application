<?php 

    require('localsetting.php');

    $diaryName = $_POST['diaryName'];
    $diaryID = $_GET['diaryID'];
    $userID = $_POST['userID'];
    $status = $_POST['status'];

    $editDiary = "UPDATE diary
                    SET status = '{$status}', diaryName = '{$diaryName}'
                    WHERE diaryID = '{$diaryID}'";

    $resultFromEdit = mysqli_query($conn, $editDiary);

    header('Location:diary_page.php?userID='.$userID);

?>
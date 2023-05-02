<?php
    require('localsetting.php');

    $diaryID = $_GET['diaryID'];
    $userID = $_POST['userID'];

    $DeleteDiary = "DELETE FROM diary WHERE diaryID = '{$diaryID}'";
    $resultFromDelete = mysqli_query($conn, $DeleteDiary);

    header('Location:diary_page.php?userID='.$userID);

?>
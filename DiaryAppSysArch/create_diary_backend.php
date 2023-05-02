<?php
    require('localsetting.php');

    $lastUserID =$_GET['userID'];
    $diaryName = $_POST['diaryName'];
    $status = $_POST['status'];

    $createDiary = "INSERT INTO diary VALUES ('','{$lastUserID}' , '{$status}', now(), '{$diaryName}')";
    $resultFromDiary = mysqli_query($conn, $createDiary);

    $lastDiaryID = mysqli_insert_id($conn);

    if (!$resultFromDiary) {
        die("Error creating diary: " . mysqli_error($conn));
    }else{
    
    header('Location: diary_page.php?userID='.$lastUserID);

    }
?>
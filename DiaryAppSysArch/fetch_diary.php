<?php 

    require('localsetting.php');

    $diaryID = $_GET['diaryID'];
    $diaryInfo = array();

    $fetchQuery = "SELECT * 
                    FROM diary
                    WHERE diaryID = $diaryID";
    
    $resultFromInfo = mysqli_query($conn, $fetchQuery);
    
    while($userResult = mysqli_fetch_array($resultFromInfo)) {
        $diaryInfo['diaryName'] = $userResult['diaryName'];
    }

?>
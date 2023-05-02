<?php

    require('localsetting.php');

    $userID = $_GET['userID'];
    $userInfo = array();
    $userLastNameQuery = "SELECT * FROM user WHERE userID = $userID";
    $userLastNameResult = mysqli_query($conn, $userLastNameQuery);

    while($userResult = mysqli_fetch_array($userLastNameResult)) {
        $userInfo['lastName'] = $userResult['lastName'];
    }

?>
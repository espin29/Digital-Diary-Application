<?php
    require('localsetting.php');

    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    
    
    $fetchQuery = "SELECT * FROM user";

    $result = mysqli_query($conn, $fetchQuery);

    if (mysqli_num_rows($result) > 0) {
        while($userResult = mysqli_fetch_array($result)) {
            if($userName == $userResult['userName'] && $userPassword ==  $userResult['userPassword']) {
                header('Location:diary_page.php?userID='.$userResult['userID']);
                return 0;
            }
        }
        
        header('Location:login_page.php?authentication=1');
    }
?>
<?php
    require('localsetting.php');

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $userName = $_POST['username'];
    $userPassword = $_POST['password'];

    $registerUser = "INSERT INTO user VALUES('', '{$userName}', '{$userPassword}', '{$firstName}', '{$lastName}', now())";
    $resultFromUser = mysqli_query($conn, $registerUser);

    $lastUserID = mysqli_insert_id($conn);

    header('Location: diary_page.php?userID='.$lastUserID);

?>
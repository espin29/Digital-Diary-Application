<?php 

    //Connect to MySQL
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'sysarchact';

    $conn = new mysqli($host, $user, $password, $db);
    $dbconfig = mysqli_select_db($conn, $db);

    //Queries
    $userQuery = "SELECT * FROM user";
    $user = mysqli_query($conn, $userQuery);
    $userItems = mysqli_fetch_assoc($user);
    $totalUserItems = mysqli_num_rows($user);

    $diaryQuery = "SELECT * FROM diary";
    $diary = mysqli_query($conn, $diaryQuery);
    $diaryItems = mysqli_fetch_assoc($diary);
    $totalDiaryItems = mysqli_num_rows($diary);

?>
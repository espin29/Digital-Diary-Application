<?php 
    session_start();

    //remove session variables
    session_unset();

    //terminate session
    session_destroy();

    //redirect to login
    header("Location: ./login_page.php");
    exit;
?>
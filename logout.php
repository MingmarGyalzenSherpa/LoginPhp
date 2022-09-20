<?php

    //start the ongoing sessoin
    session_start();
    
    //ending the ongoing session
    session_destroy();
    //redirecting to login page
    header('location:./index.php');
?>
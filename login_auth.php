<?php

    //starting a session
    session_start();

    include('./db_config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * from login_auth where username='$username'";
    $result = $conn->query($sql);

    if($result->num_rows)
    {
        $data = $result->fetch_assoc();
        $db_password = $data['password'];
        if($password === $db_password)
        {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['name'] = $username;
            header('location:./content.php');
        }else{
            header('location:./index.php');
        }
    }else{
        header('location:./index.php');
    }
   



?>
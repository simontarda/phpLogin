<?php
    session_start() ;
    $user_id = $_POST['user_id'] ;
    $user_passwd = $_POST['user_passwd'] ;
    if($user_id =="john" && $user_passwd =="john@123")
    {
    $_SESSION['success'] =  "ZALOGOWANO DO SYSTEMU!";
    $_SESSION['auth'] = 1 ;
    header("Location:locked.php") ;
    }
    else
    {
    $_SESSION['failure'] =  "NIEPOPRAWNY LOGIN LUB HASŁO";
    header("Location:login.php") ;
    }
    ?>
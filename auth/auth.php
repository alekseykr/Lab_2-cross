<?php
session_start();
include "../database/db.php";
include "../classes/class_user_role.php";
$login= $_POST['login'];
$password= $_POST['password'];
$isAuth = false;

if (!empty($login) && !empty($password)) {
    foreach ($users as $key) {
        if ($login == $key['login'] && $password == $key['password']) {
            $isAuth = true;
            $_SESSION["id"]=$key;
            $_SESSION['lang']= $key['lang'];
            header("location: ../");
        }
    }
    if (!$isAuth) {
        $_SESSION['message'] = "Wrong login or password";
        header("location: http://lab2/auth/login.php");
    }
} else {
    
    $_SESSION['message'] = "Wrong login or password";
    header("location: http://lab2/auth/login.php");
}

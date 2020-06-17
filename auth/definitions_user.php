<?php 
session_start();
$root=$_SERVER["DOCUMENT_ROOT"];

include_once $root."/database/db.php";
include_once $root."/classes/class_user_role.php";


$en=$_POST["en"];
$ru=$_POST["ru"];
$ua=$_POST["ua"];

foreach ($users as $key => $user) {
    
    if ($user == $_SESSION['id']) {
        $name = $user['name'];
        $surname = $user['surname'];
        $role = $user['role'];
        $lang=$user['lang'];
        if(isset($en)){
            $_SESSION['lang'] = "en";
            header("Location: ../index.php");
            break;   
        }
        else if (isset($ru)){
          
            $_SESSION['lang'] = "ru";
            header("Location: ../index.php");
            break;
        }
        else if (isset($ua)){
            $_SESSION['lang'] = "ua"; 
            header("Location: ../index.php");
            break;
        }
    }
}
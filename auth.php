<?php
session_start();
$l=$_POST['login'];
$p=$_POST['password'];
    if($l === "admin" && $p == 1111){
        $_SESSION['auth'] = "true";
        header('Location: restricted.php');
    }
    else{
        header('Location: unrestricted.php');
    }
?>
<?php

    error_reporting(1);
    ini_set("display_errors", 1);

    $isAdmin = $_COOKIE['isAdmin'];
    if($isAdmin!='Ok'){
        echo "관리자만 접근 가능함";
        exit;
    }
?>

<a href="logOut.php">로그아웃</a>
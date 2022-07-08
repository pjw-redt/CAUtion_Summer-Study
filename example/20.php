<?php

    error_reporting(1);
    ini_set("display_errors", 1);

    $connect = mysqli_connect("localhost", "korea", "fighting", "korea");

    if(mysqli_connect_error()){
        echo "mysql 접속중 오류가 발생했습니다.";
        echo mysqli_connect_error();
    }

    $query = "select * from memo ";

    $result = mysqli_query($connect, $query);

    $a = mysqli_fetch_assoc($result);

    print_r($a);
?>
<?php
    $fp = fopen("8.txt", "a");  //w는 파일만들기, a는 기존 파일에 새로고침한 횟수만큼 추가

    fwrite($fp, "test\r\n"); //\r\n은 새로고침

    fclose($fp);

    $fp = fopen("8.txt", "r");
    $a = fread($fp,8);
    echo $a;
    fclose($fp);
?>
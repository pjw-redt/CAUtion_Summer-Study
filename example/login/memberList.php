
<?php

    error_reporting(1);
    ini_set("display_errors", 1);

    $isAdmin = $_COOKIE['isAdmin'];
    if($isAdmin!='Ok'){
        echo "
        <script>
        alert('관리자만 접근 가능합니다.');
        history.back(1);
        </script>";
        exit;
    }
?>
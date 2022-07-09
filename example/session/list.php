<?php
    include "lib.php";

    $isLogin = $_SESSION['isLogin'];

    if(!$isLogin){
        echo "회원만 접근 가능합니다.";
        exit;
    }
?>
    <a href ="logOut.php"> 로그아웃</a>

<h1>회원 리스트</h1>

<ul>
<? for($i=0; $i<=100; $i++){ ?>
    <li>박지우 <?=$i?></li>
    <li>지우 <?=$i?></li>
<?}?>
</ul>
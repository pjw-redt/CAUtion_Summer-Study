<?php
    echo "동해물과 백두산이";


    $a = looppart();
    echo $a;

    $b = 12345;
    $c = multi($b);
    $d = number_format($c); //숫자에 ,찍어주는 역할
    echo $d;

    function multi($x){
        $y = $x * 100;
        return $y;
    }

    function looppart(){ //function은 호출해야만 나옴!
        return "<dir>무궁화 삼천리 화려강산 대한사람 대한으로</div>";
    }
?>
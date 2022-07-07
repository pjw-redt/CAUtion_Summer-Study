<?php
    $list = file("7.txt");

    $tmp = '안녕하세요! 저는! 지우입니다.';
    $str = explode("!",$tmp);
    print_r($str);
?>

<table border = "1" width = "800">
    <tr>
        <th> 이름</th>
        <th> 제목</th>
        <th> 내용</th>
    </tr>
<?php
    foreach($list as $d){
        $str = explode(",", $d);
?>
    <tr>
        <td><?=$str[0]?></td>
        <td><?=$str[1]?></td>
        <td><?=$str[2]?></td>
    </tr>
<?php } ?>
</table>
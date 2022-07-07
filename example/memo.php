<body>
    <form action="memoSave.php">
    <div style="text-align:center;">
        <table border = "1" align="center">
            <tr>
                <td> Name </td>
                <td> <input type="text" name ="name"></td>
            </tr>
            <tr>
                <td> E-mail </td>
                <td> <input type="text" name ="email"></td>
            </tr>
            <tr>
                <td> Memo </td>
                <td> <input type="text" name ="memo" style="width:400px;"></td>
            </tr>
        </table>
            <input type="submit" value="save" style="margin-top: 10px;">

    </div>
    </form>

<table border=1>
    <tr>
        <th> No </th>
        <th> 이름 </th>
        <th> 이메일 </th>
        <th> 내용 </th>
        <th> 시간 </th>
    </tr>
<?php
    $list = file("memo.txt"); //reverse로 하는거 : 순서 바꾸기! $a = array_reverse($list)
   $i = 1;
    foreach($list as $d){
        $data = explode("///", $d);
?>
    <tr>
        <td><?=$i?></td>
        <td> <?=$data[0]?> </td>
        <td> <?=$data[1]?> </td>
        <td> <?=$data[2]?> </td>
        <td> <?=$data[3]?> </td>
    </tr>
    <?php $i++; } ?>

</table>
</body>
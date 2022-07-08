<?php
    include "21Lib.php";
?><!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content="width-device-width, initial-scale-1.0">
    <title>Document</title>
</head>
<body>
    <form action="21memoProc.php">
    이름 : <input type="text" name="name" size=10> <br>
    메모 : <input type="text" name="memo" size=50> <br>
    <input type="submit" value="저장">
    </form>

<?php
    $query = "select * from memo order by idx desc"; //limit 5 : 마지막 5개만 띄워주는거

    $result = mysqli_query($connect, $query);
?>

<table border=1>
    <tr>
        <td> idx </td>
        <td> 이름 </td>
        <td> 메모 </td>
        <td> 등록일 </td>
        <td> 삭제 </td>
        <td> 수정 </td>
    </tr>
    <?php
        while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?=$data["idx"]?> </td>
        <td> <?=$data["name"]?> </td>
        <td> <?=$data["memo"]?> </td>
        <td> <?=$data["regdate"]?> </td>
        <td> <a href="21del.php?idx=<?=$data["idx"]?>" onclick="return confirm ('정말 삭제하시겠습니다?')">삭제</a></td>
        <td> <a href="#" onclick="editData('<?=$data['idx']?>');">수정</a>
    </tr>
    <?php
        }
    ?>

</table>
<script>
    function editData(idx){
        var a = prompt('수정할 내용을 입력하세요.');
        location.href='21edit.php?idx='+idx+"&memo="+a;
    }
</script>

</body>  
</html>
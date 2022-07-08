<?php
    include "21Lib.php";

    $query = "insert into memo(name, memo, regdate)
            values('서기', '안녕하세요', '2022-07-08 20:50:00')";

    mysqli_query($connect, $query);

?>
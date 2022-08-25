<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">
      <img src="/img/CAUtionImg.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      WebHell
    </a>
    <div style="float:right">
      <a class="btn btn-primary" href="CAUtion.php" role="button">CAUtion Fighting^0^</a>
      <a class="btn btn-primary" href="logOut.php" role="button">LogOut</a>
    </div>

  </div>
</nav>

<?php
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);
?>

<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-10">
        

<form action="del.php" method="post" style="margin-top:30px;">
    <input type="hidden" name = "idx" value="<?=$idx?>">
    <table width=800 border="1" cellpadding=10>

    <tr>
        <th colspan="2"> <?=$idx?>번 게시물을 정말 삭제할까요? </th>
    </tr>
        <tr>
            <th> 비밀번호</th>
            <td> <input type="password" name="pwd" placeholder="비밀번호" size=20> </td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="text-align:center;">
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
            </td>
        </tr>
    </table>

</form>

    </div>
    <div class="col">
    </div>
  </div>
</div>
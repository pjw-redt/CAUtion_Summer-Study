<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "select *from sing_board where idx='$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);
?>

<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">
      <img src="/img/CAUtionImg.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      WebHell
    </a>
    <div style="float:right">
      <a class="btn btn-primary" href="CAUtion.php" role="button">CAUtion Fighting^0^</a>
      <a class="btn btn-primary" href="logOut.php" role="button">LogOut</a>
      <a class="btn btn-primary" href="memberList.php" role="button">MemberList</a>
    </div>

  </div>
</nav>


<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-10">

    <form action="writePost.php" method="post" style="margin-top:30px;">
    <table border="1" width=800 border="1" cellpadding=10>
        <tr>
            <th> ID</th>
            <td> <?=$data['name']?> </td>
        </tr>
        <tr>
            <th> Title</th>
            <td> <?=$data['subject']?> </td>
        </tr>
        <tr>
            <th> Memo</th>
            <td> <?=nl2br($data['memo'])?> </td>
          </tr>

        <tr>
            <td colspan="2">
                <div style="float:right;">
                    <a class="btn btn-primary" href="confirmDel.php?idx=<?=$idx?>" role="button">Delete</a>
                    <a class="btn btn-primary" href="write.php?idx=<?=$idx?>" role="button">Modify</a>
                </div>

                <form action="list.php" method="post" autocomplete="off">
                    <button type="submit" class="btn btn-outline-primary">List</button>
                </form>
            </td>
        </tr>
    </table>

</form>
  
    </div>
    <div class="col">
    </div>
  </div>
</div>






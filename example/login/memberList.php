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
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
    </div>

  </div>
</nav>

<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-10">
    <table class="table">
  <thead>
    <tr>
        <th width=70 style="text-align:center;"> No</th>
        <th> Title</th>
        <th width=150> ID</th>
        <th width=200> Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $query = "select * from sing_board order by idx desc";
    $result = mysqli_query($connect, $query);

    while($data = mysqli_fetch_array($result)){

?>
    <tr>
        <td style="text-align:center;"><?=$data["idx"]?></td>
        <td><a href='view.php?idx=<?=$data["idx"]?>'><?=$data["subject"]?></td>
        <td><?=$data["name"]?></td>
        <td><?=$data["regdate"]?></td>
    </tr>
<?php }?>
</table>
  </tbody>
</table>
    </div>
    <div class="col">
    </div>
  </div>
</div>

<form action="write.php" method="post" autocomplete="off" style="padding-left:900px;">
    <button type="submit" class="btn btn-outline-primary">Write</button>
</form>

<?php
include_once("./menu/nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Sayfası</title>
</head>

<body>
  <div class="text-center m-2">
    <h2>Merhaba üye giriş sayfasına hoşgeldiniz</h2>
  </div>

<div class="container" id="form">
  <form class="m-5" action="./php/user-login.php" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1"
        placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="password">Şifre</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre" required>
    </div>
    <button type="submit" name="loginbtn" class="btn btn-primary">Giriş Yap</button>
  </form>
  </div>
</body>

</html>
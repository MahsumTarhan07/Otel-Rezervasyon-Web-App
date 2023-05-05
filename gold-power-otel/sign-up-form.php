<?php
include_once("./menu/nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Sayfası</title>
</head>

<body>
    <div class="container mt-1" id="form">
        <form  action="./php/sign-up-users-insert.php" method="POST">
            <div class="form-group">
                <label for="name">Adınız</label>
                <input type="text" name="name" class="form-control" id="" placeholder="Adınız"required>
            </div>
            <div class="form-group">
                <label for="lastname">Soyadınız</label>
                <input type="text" name="lastname" class="form-control" id="" placeholder="Soyadınız" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefon No:</label>
                <input type="text" name="phone" class="form-control" id="" placeholder="Telefon numarası" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre"required>
            </div>
            <button type="submit" name="userslogin" class="btn btn-primary">Kayit Ol</button>
        </form>
    </div>
</body>

</html>
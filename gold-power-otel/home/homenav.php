<?php
session_start();
ob_start();
include("../database/db.php");

if (!isset($_SESSION['user_id'])) {
    echo "
    <script tpye='text/javascript'>alert('Oturum Kapatılıdı,Tekrar Giriş Yapınız.'); </script>
    ";
    header("Location: ../login.php");
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Otel Rezervasyon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../style/app.css">
    </head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark p-2 ">
        <span id="brand"><a href="home.php">Gold Power Otel</a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-taget="#navbarID">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarID">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a href="get-reservation.php" class="nav-link">Rezervasyon Yap</a>
                </li>
                <li class="nav-item">
                    <a href="my-reservation.php" class="nav-link">Rezervasyonlarım</a>
                </li>
                <li class="nav-item">
                    <a href="my-profile.php" class="nav-link">Profil</a>
                </li>
                <li class="nav-item">
                     <a href="log-out.php" class="nav-link">Cıkış Yap</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="">
        <?php
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
       
        ?>
    </div>



    <footer class="footer bg-dark fixed-bottom mt-5 p-3">
        <div class="container">
          <div class="col">
            <div class="text-center">
                <span class="text-center text-light">@ Copyright 2023 </span>
            </div>
          </div>
        </div>
    </footer>

   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
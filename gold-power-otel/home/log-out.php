<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["name"]);
echo "<script tpye='text/javascript'>alert('Başarıyla Çıkış Yaptınız.');
        window.location = '../index.php';
        </script>";

exit();

?>
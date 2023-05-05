<?php
session_start();
ob_start();

include("../database/db.php");

if (isset($_POST["loginbtn"])) {
    $gelen_email = mysqli_real_escape_string($con, $_POST["email"]);
    $gelen_sifre = mysqli_real_escape_string($con, $_POST["password"]);

    $query = "SELECT * FROM users WHERE email='$gelen_email' AND password='$gelen_sifre'";

    $result = mysqli_query($con, $query);
    
    if((mysqli_num_rows($result) == 1)){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];

        $_SESSION['email'] = $gelen_email;

        echo "
        <script tpye='text/javascript'>alert('Başarıyla Giriş Yaptınız.');
        window.location = '../home/home.php';
        </script>
        ";
        exit();
    }else{
        echo "kullanıcı yok,otomatik yönlendirleceksiniz.";
        header('Refresh:2;../login-form.php'); 
        exit();

    }
}else{
    echo("Hata oluştu,tekrar deneyiniz");
}
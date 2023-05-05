<?php
include("../database/db.php");


if (isset($_POST["userslogin"])) {
    $gelen_ad = $_POST["name"];
    $gelen_soyad = $_POST["lastname"];
    $gelen_tel = $_POST["phone"];
    $gelen_email = $_POST["email"];
    $gelen_sifre = $_POST["password"];

    $komut = "insert into users(name,lastname,phone_number,email,password) 
		VALUES('$gelen_ad','$gelen_soyad','$gelen_tel','$gelen_email','$gelen_sifre')";

    $calistir = mysqli_query($con, $komut);
    if ($calistir) {
        echo "Kaydınız başarılı,üye olduğunuz için teşekürler.";
        loginPage();
    } else {
        echo "Kaydınız eklenirken hata oluştu.";
        loginError();
    }

}


function loginPage()
{
    header('Refresh:2;../login-form.php'); }


function loginError()
{
    header('Refresh:2;../sign-up-form.php');
}

?>
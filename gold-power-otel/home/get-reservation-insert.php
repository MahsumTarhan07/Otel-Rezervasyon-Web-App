<?php
include("../database/db.php");
session_start();

$user_id = $_SESSION['user_id'];

if(isset($_POST['reservation-insert-btn'])) { // Formdan gönderilen verinin doğruluğunu kontrol ediyoruz
    $room = $_POST['select-room']; // Seçilen oda tipi
    $price = $_POST['select-room-price']; // Seçilen oda fiyatı
    $come_date = $_POST['come-date']; // Giriş tarihi
    $out_date = $_POST['out-date']; // Çıkış tarihi

    // Veritabanına ekleme işlemi
    $sql = "INSERT INTO reservation (room, price, come_date, out_date,user_id)
            VALUES ('$room', '$price', '$come_date', '$out_date', '$user_id')";
    
    if(mysqli_query($con, $sql)){ // Sorgu başarılı bir şekilde çalışırsa
        echo "Rezervasyonunuz başarıyla kaydedildi.";
        header('Refresh:2;get-reservation.php'); 

    } else {
        echo "Bir hata oluştu: " . mysqli_error($con);
    }
    mysqli_close($con); // Veritabanı bağlantısını kapatıyoruz
}
?>

<?php
include_once("homenav.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Sayfası</title>
    <script src="../scripts/app.js"></script>
</head>

<body>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Rezervasyon Formu</h2>
        <form action="get-reservation-insert.php" method="post">
        <div class="form-group">
            <label for="oda">Oda Seçimi:</label>
            <select class="form-control" id="oda" name="select-room" required>
              <option value="" selected disabled>Lütfen bir oda seçin</option>
              <option value="1">Tek Kişilik Oda</option>
              <option value="2">Çift Kişilik Oda</option>
              <option value="3">Aile Odası</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fiyat">Fiyat:</label>
            <select class="form-control" id="fiyat" name="select-room-price" required>
              <option value="" selected disabled>Lütfen bir oda seçin</option>
              <option value="100">Tek Kişilik Oda - 100 TL</option>
              <option value="150">Çift Kişilik Oda - 150 TL</option>
              <option value="200">Aile Odası - 200 TL</option>
            </select>
          </div>

          <div class="form-group">
            <label for="tarih">Rezervasyon Tarihi:</label>
            <input type="date" class="form-control" id="come-date" name="come-date" required>
          </div>
          <div class="form-group">
            <label for="tarih">Cıkış Tarihi:</label>
            <input type="date" class="form-control" id="out-date" name="out-date" required>
          </div>
          <button type="submit" name="reservation-insert-btn" class="btn btn-primary btn-block">Rezervasyon Yap</button>
        </form>
      </div>
    </div>
  </div>
</body>


</html>
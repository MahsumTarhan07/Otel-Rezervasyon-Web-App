<?php
include_once("homenav.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyonlarım </title>
</head>

<body>


    <table class="container table table-striped table-light">
        <thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Adınız</th>
                <th scope="col">Soyadınız</th>
                <th scope="col">Oda Bilgisi</th>
                <th scope="col">Fiyatı</th>
                <th scope="col">Geliş Tarihi</th>
                <th scope="col">Cıkış Tarihi</th>
                <th scope="col">Rezervasyonları Düzenle</th>
                <th scope="col">Rezervasyonları İptal Et</th>

            </tr>

        </thead>
        <?php
        $user_id = $_SESSION['user_id'];
        //$sql = "SELECT users.*, reservation.* FROM users INNER JOIN reservation ON users.reservation_id = reservation.user_id WHERE users.id = $user_id";
        $sql = "SELECT users.*, reservation.* FROM users INNER JOIN reservation ON users.id = reservation.user_id WHERE users.id = $user_id";
        
        $result = mysqli_query($con, $sql);
        ?>
        <tbody>
            <?php
            foreach ($result as $row) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $row['id']; ?>
                    </th>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['lastname']; ?>
                    </td>
                    <td>
                        <?php echo $row['room']; ?>
                    </td>
                    <td>
                        <?php echo $row['price']; ?>
                    </td>
                    <td>
                        <?php echo $row['come_date']; ?>
                    </td>
                    <td>
                        <?php echo $row['out_date']; ?>
                    </td>
                    <td>
                        <button class="btn btn-primary">Rezervasyonu Düzenle</button>
                    </td>
                    <td>
                        <button class="btn btn-dark" name="delete" name="cancel-reservation"> Rezervasyonu İptal Et</button>
                    </td>
                </tr>
                <?php
                    }
            ?>
        </tbody>



    </table>


</body>

</html>
<?php 
include_once("homenav.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilim</title>
</head>

<body>
    <?php 
            $user_id = $_SESSION['user_id'];

        	$komut = "select * from users where id=$user_id";

            $calistir = mysqli_query($con,$komut);
            $verioku = mysqli_fetch_array($calistir);
            
            $user_name = $verioku["name"];
            $user_lastname = $verioku["lastname"];
            $user_phone = $verioku["phone_number"];	
            $user_email = $verioku["email"];	
            $user_password = $verioku["password"];	

    
    ?>
    <div class="container mt-1" id="form">
        <form  action="my-profile-update.php" method="POST">
            <div class="form-group">
                <label for="name">Adınız</label>
                <input type="text" name="name" class="form-control" id="" value="<?php echo $user_name;?>" required>
            </div>
            <div class="form-group">
                <label for="lastname">Soyadınız</label>
                <input type="text" name="lastname" class="form-control" id="" value="<?php echo $user_lastname;?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefon No:</label>
                <input type="text" name="phone" class="form-control" id="" value="<?php echo $user_phone;?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $user_email;?>" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre</label>
                <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $user_password;?>" required>
            </div>
            <button type="submit" name="updateBtn" class="btn btn-primary">Update</button>
        </form>
    </div>
         
</body>

</html>
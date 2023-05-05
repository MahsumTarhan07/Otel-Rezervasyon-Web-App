<?php 
session_start();
ob_start();

include("../database/db.php");

$user_id = $_SESSION['user_id'];
echo $user_id;
$update_name = $_POST["name"];
$update_lastname = $_POST["lastname"];
$update_phone = $_POST["phone"];
$update_email = $_POST["email"];
$update_pass = $_POST["password"];


$sql = "UPDATE users SET name='$update_name',lastname='$update_lastname',phone_number='$update_phone',email='$update_email',password='$update_pass' WHERE id='$user_id'";
$calistir = mysqli_query($con, $sql);

if($calistir==1){
    echo "Profiliniz Düzenlendi.";
    header("Location: my-profile.php");
}else{
    echo "Profiliniz güncelnemedi!";
}




?>
<?php
include 'config.php';
$email = $_POST['email'];
$password = $_POST['password'];
$login    = mysqli_query($conn, "SELECT * from siswa where email='$email' and password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['email'] = $user['email'];
    header("location:home.php");
}else{
    header("location:login.php");
}
<?php
include 'config.php';
$email = $_POST['email'];
$password = $_POST['password'];
$login    = mysqli_query($conn, "SELECT * from siswa where email='$email' and password='$password'");
$user = mysqli_fetch_array($login);
$result   = mysqli_num_rows($login);
$nama_user = $user['nama'];
$id_user = $user['id_siswa'];

if($result>0){
	session_start();
	$_SESSION['nama'] = $nama_user;
	$_SESSION['id_siswa'] = $id_user;
    $_SESSION['email'] = $user['email'];
    header("location:home.php");
}else{
    header("location:login.php");
}
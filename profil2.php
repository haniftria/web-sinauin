<?php 
include 'config.php';
$q = "SELECT * FROM siswa WHERE email='$email' AND password='$password'";
$e = mysqli_query($conn, $q);
$is_exist = mysqli_num_rows($e);
if($is_exist>0){

$r = mysqli_fetch_assoc($e);
$_SESSION['id_siswa'] = $r['id_siswa'];
$_SESSION['nama'] = $r['nama'];
$_SESSION['id_siswa'] = $r['id_siswa'];
$_SESSION['email'] = $r['email'];
$_SESSION['nis'] = $r['nis'];
$_SESSION['tempat'] = $r['tempat'];
$_SESSION['tanggal_lahir'] = $r['tanggal_lahir'];
$_SESSION['id_kelas'] = $r['id_kelas'];
$_SESSION['alamat'] = $r['alamat'];
$_SESSION['no_hp'] = $r['no_hp'];
$_SESSION['password'] = $r['password'];
}else{
  die('email atau password tdk ditemukan');
}
 ?>

<h1><?=$_SESSION['id_siswa'];?></h1>


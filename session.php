<?php
include 'config.php';
// Memulai Session
session_start();
$user_check=$_SESSION['nama'];
$sql2="SELECT * from siswa where email='$user_check'";
$ses_sql=mysqli_query($conn, $sql2);
// Ambil data user dengan mysql_fetch_assoc
$row = mysqli_fetch_assoc($ses_sql);
$id_siswa = $row['id_siswa']
$email_session =$row['email'];
$nama_session =$row['nama'];
$nis_session =$row['nis'];
$alamat_session =$row['alamat'];
$nohp_session =$row['no_hp']; 
$tempat_session =$row['tempat'];
$tanggal_lahir =$row['tanggal_lahir'];
$id_kelas =$row['id_kelas']; 
$password =$row['password']; 
if(!isset($login_session)){
    header('Location: login.php'); // Mengarahkan ke login page
}
?>
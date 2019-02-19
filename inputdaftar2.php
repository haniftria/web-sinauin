<?php 
include 'config.php';
$id_siswa = $_POST['id_siswa'];
$nama = $_POST ['nama'];
$email = $_POST ['email'];
$nis = $_POST ['nis'];
$tempat = $_POST ['tempat'];
$tanggal_lahir = $_POST ['tanggal_lahir'];
$id_kelas = $_POST ['id_kelas'];
$alamat = $_POST ['alamat'];
$no_hp = $_POST ['no_hp'];
$password = $_POST ['password'];

$sql_input = "INSERT INTO siswa VALUES ('$id_siswa', '$nama', '$email', '$nis', '$tempat', '$tanggal_lahir', '$id_kelas', '$alamat', '$no_hp', '$password')";
mysqli_query($conn, $sql_input) or die (mysqli_error($conn));

echo'<script>
alert("data disimpan");
location="index.php"
</script>';
 ?>
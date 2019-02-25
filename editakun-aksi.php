<?php
include 'config.php';
$id_siswa = $_POST ['id_siswa'];
$nama = $_POST ['nama'];
$email = $_POST ['email'];
$nis = $_POST ['nis'];
$tempat = $_POST ['tempat'];
$tanggal_lahir = $_POST ['tanggal_lahir'];
$id_kelas = $_POST ['id_kelas'];
$alamat = $_POST ['alamat'];
$no_hp = $_POST ['no_hp'];
$password = $_POST ['password'];

$sql = "UPDATE siswa SET id_siswa='$id_siswa', nama= '$nama', email='$email', nis = '$nis', tempat =  '$tempat', tanggal_lahir= '$tanggal_lahir', id_kelas='$id_kelas', alamat='$alamat', no_hp = '$no_hp', password = '$password' WHERE id_siswa='$id_siswa' ";

mysqli_query($conn, $sql) or die (mysqli_Error($conn));
echo '<script>
alert("Data Berhasil Disimpan");
location="profil.php?"
</script>';

?>
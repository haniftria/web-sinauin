<?php 
include 'config.php';
$id_siswa = $_GET['id_siswa'];

$sql_delete=("DELETE FROM siswa WHERE id_siswa='$id_siswa'");

mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="siswa.php?"
</script>';

 ?>
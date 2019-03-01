<?php 
include 'config.php';
$id_pilihan_soal = $_GET['id_pilihan_soal'];

$sql_delete = ("DELETE FROM pilihan_soal WHERE id_pilihan_soal='$id_pilihan_soal'");

mysqli_query($conn, $sql_delete) or die (mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="pilsoal.php?"
</script>';

 ?>
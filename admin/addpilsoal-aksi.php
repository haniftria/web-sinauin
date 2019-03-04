<?php 
include 'config.php';
$id_pilihan_soal = $_POST ['id_pilihan_soal'];
$id_mata_pelajaran = $_POST ['id_mata_pelajaran'];
$materi = $_POST ['materi'];
$que = $_POST ['que'];
$pilihan_a = $_POST ['pilihan_a'];
$pilihan_b = $_POST ['pilihan_b'];
$pilihan_c = $_POST ['pilihan_c'];
$pilihan_d = $_POST ['pilihan_d'];
$pilihan_e = $_POST ['pilihan_e'];
$ans = $_POST ['ans'];
$userans = $_POST ['userans'];

$sql_insert = "INSERT INTO pilihan_soal VALUES ('$id_pilihan_soal', '$id_mata_pelajaran', '$materi', '$que', '$pilihan_a', '$pilihan_b', '$pilihan_c', '$pilihan_d', '$pilihan_e', '$ans', '$userans')";

mysqli_query($conn, $sql_insert) or die (mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="pilsoal.php?"
</script>';


 ?>
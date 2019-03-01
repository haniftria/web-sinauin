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

$sql_update = ("UPDATE pilihan_soal SET id_pilihan_soal='$id_pilihan_soal', id_mata_pelajaran='$id_mata_pelajaran', materi='$materi', que='$que', pilihan_a='$pilihan_a', pilihan_b='$pilihan_b', pilihan_c='$pilihan_c', pilihan_d='$pilihan_d', pilihan_e='$pilihan_e', ans='$ans', userans='$userans' WHERE id_pilihan_soal='$id_pilihan_soal'");

mysqli_query($conn, $sql_update) or die (mysqli_error($conn));

echo '<script>
alert("Data Berhasil Diedit");
location="pilsoal.php?"
</script>';

 ?>
<?php 

include 'config.php';
$id_mata_pelajaran = $_POST['id_mata_pelajaran'];
$keterangan = $_POST['keterangan'];

$sql_update = ("UPDATE mata_pelajaran SET id_mata_pelajaran='$id_mata_pelajaran', keterangan='$keterangan' WHERE id_mata_pelajaran='$id_mata_pelajaran'");

mysqli_query($conn, $sql_update) or die (mysqli_error($conn));

echo '<script>
alert("Data Berhasil Diedit");
location="mapel.php?"
</script>';

 ?>
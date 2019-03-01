<?php 
include 'config.php';
$id_mata_pelajaran = $_POST['id_mata_pelajaran'];
$keterangan = $_POST['keterangan'];

$sql_insert = "INSERT INTO mata_pelajaran VALUES ('$id_mata_pelajaran', '$keterangan')";

mysqli_query($conn, $sql_insert) or die (mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="mapel.php?"
</script>';

 ?>
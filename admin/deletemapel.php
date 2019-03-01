<?php 
include 'config.php';
$id_mata_pelajaran = $_GET['id_mata_pelajaran'];

$sql_delete=("DELETE FROM mata_pelajaran WHERE id_mata_pelajaran='$id_mata_pelajaran'");

mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="mapel.php?"
</script>';

 ?>
<?php
include 'config.php';
$id_kelas = $_GET['id_kelas']; 

$sql_delete=("DELETE FROM kelas WHERE id_kelas='$id_kelas' ");

mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="kelas.php?"
</script>';

?>

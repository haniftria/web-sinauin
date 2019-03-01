<?php

include 'config.php';
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

$sql_update=("UPDATE kelas SET id_kelas='$id_kelas', nama_kelas='$nama_kelas' WHERE id_kelas='$id_kelas'");

mysqli_query($conn,$sql_update)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Diedit");
location="kelas.php?"
</script>';

?>

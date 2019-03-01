
<?php
include 'config.php';
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

$sql_insert="INSERT INTO kelas VALUES ('$id_kelas','$nama_kelas')";

mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="kelas.php?"
</script>';
?>

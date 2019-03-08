
<?php
include 'config.php';
$id_planner = $_POST['id_planner'];
$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$plan = $_POST['plan'];
$review = $_POST['review'];

$sql_insert="UPDATE planner SET id_planner='$id_planner', id_siswa='$id_siswa', tanggal='$tanggal', plan='$plan', review='$review')";

mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="planner.php?"
</script>';
?>

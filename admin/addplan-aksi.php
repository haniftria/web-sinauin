
<?php
include 'config.php';
$id_planner = $_POST['id_planner'];
$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$plan = $_POST['plan'];
$review = $_POST['review'];

$sql_insert="INSERT INTO planner VALUES ('$id_planner','$id_siswa', '$tanggal', '$plan', '$review')";

mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="planner.php?"
</script>';
?>

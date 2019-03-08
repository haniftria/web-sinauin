<?php 
include 'config.php';
$id_planner = $_GET['id_planner'];

$sql_delete = ("DELETE FROM planner WHERE id_planner='$id_planner'");

mysqli_query($conn, $sql_delete) or die (mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="planner.php?"
</script>';

 ?>
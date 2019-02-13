<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db_sinauin';
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn->connect_error){
	die("Koneksi error");
}
// echo "Koneksi Berhasil";
?>
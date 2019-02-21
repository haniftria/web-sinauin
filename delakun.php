<?php 

session_start();

include('config.php');

$email=$_SESSION['email'];

$sql = "DELETE FROM siswa where email='$email'";

$result=mysqli_query($conn,$sql);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div class="verif">
 		<?php if($result){
 			echo '<script> alert("Akun Berhasil Dihapus");
 			location="index.php?"
 			</script>';
 		} ?>
 	</div>
 </body>
 </html>
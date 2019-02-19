<?php 
include 'config.php';?>
<form action="inputdaftar.php" method="POST">
	<label>Nama</label><br>
	<input type="text" name="nama">
	<label>NIS</label><br>
	<input type="text" name="nis">
	<label>Kelas</label><br>
	<select name="klass">
		<?php 
		$q = mysqli_query("SELECT * FROM klas");
		while ($data = mysqli_fetch_assoc($q)) {
		 	echo '<option value="'.$data['id_klas'].'">'.$data['klas'].'</option>';
		 }
		 ?>
	</select>
	<br>
	<input type="submit" name="simpan" value="simpan">
</form>
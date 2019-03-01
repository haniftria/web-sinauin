<br> <?php include ('header.php') ?>
<?php
  include('config.php');

  $sql_tampil ="SELECT * FROM kelas where id_kelas = '".$_GET['id_kelas']."'";

  $kelas=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
    ?>
</br>
<br>
	<title>Edit Kelas</title>
	<div class="container">
		<h2>Edit data kelas</h2>
</br>
	<a href="kelas.php">Lihat Semua Data</a>
	<form action="editkls-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 30rem;">
		  <div class="card-header text-center">EDIT KELAS</div>
		  <div class="card-body text-success">
		  <div class="form-row">
			<div class="form-group col-md-12">
	          <label>ID Kelas</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['id_kelas'];?>" name="id_kelas">
	        </div>
    		<div class="form-group col-md-12">
	          <label>Nama Kelas</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['nama_kelas'];?>" name="nama_kelas">
	        </div>
			<tr>
				<td></td>
				<td><input type="submit" class="btn-success" value="Simpan"></td>
			</tr>
		 </div>
		 </div>
		 </div>
		</div>
	</form>
</body>
</html>
<?php } ?>
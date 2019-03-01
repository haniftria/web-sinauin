<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Tambah Kelas</title>
	<div class="container">
		<h2>Tambah Kelas Baru</h2>
</br>
	<a href="kelas.php">Lihat Semua Data</a>
	<form action="addkelas-aksi.php" method="post">
	<div class="card border-success mb-3" style="max-width: 30rem;">
	  <div class="card-header text-center">TAMBAH KELAS</div>
	  <div class="card-body text-success">
    	<div class="form-row">
    		<div class="form-group col-md-12">
	          <label>ID Kelas</label>
	          <input type="text" class="form-control" name="id_kelas">
	        </div>
			<div class="form-group col-md-12">
	          <label>Nama Kelas</label>
	          <input type="text" class="form-control" name="nama_kelas">
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

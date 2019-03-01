<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Tambah Mata Pelajaran</title>
	<div class="container">
		<h2>Tambah Mata Pelajaran Baru</h2>
</br>
	<a href="mapel.php">Lihat Semua Data</a>
	<form action="addmapel-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center">TAMBAH MATA PELAJARAN</div>
		  <div class="card-body text-success">
			<div class="form-row">
			<div class="form-group col-md-12">
	          <label>ID Mapel</label>
	          <input type="text" class="form-control" name="id_mata_pelajaran">
	        </div>
			<div class="form-group col-md-12">
	          <label>Keterangan</label>
	          <input type="text" class="form-control" name="keterangan">
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

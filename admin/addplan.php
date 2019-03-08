<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Tambah Rencana&review</title>
	<div class="container">
		<h2>Tambah Rencana & Review</h2>
</br>
	<a href="planner.php">Lihat Semua Data</a>
	<form action="addplan-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center">TAMBAH</div>
		  <div class="card-body text-success">
			<div class="form-row">
			<div class="form-group col-md-12">
	          <label>ID Planner</label>
	          <input type="text" class="form-control" name="id_planner">
	        </div>
			<div class="form-group col-md-12">
	          <label>ID siswa</label>
	          <input type="text" class="form-control" name="id_siswa">
	        </div>
	        <div class="form-group col-md-12">
	          <label>tanggal</label>
	          <input type="date" class="form-control" name="tanggal">
	        </div>
	        <div class="form-group col-md-12">
	          <label>rencana</label>
	          <input type="text" class="form-control" name="plan">
	        </div>
	        <div class="form-group col-md-12">
	          <label>review</label>
	          <input type="text" class="form-control" name="review">
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

<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Tambah Siswa</title>
	<div class="container">
		<h2>Tambah Siswa baru </h2>
	<br/>
	<a href="siswa.php">Lihat Semua Data</a>
	<form action="addsiswa-aksi.php" method="post">
	<div class="card border-success mb-3" style="max-width: 40rem;">
	  <div class="card-header text-center">TAMBAH SISWA</div>
	  <div class="card-body text-success">
	  <div class="form-row">
		<div class="form-group col-md-12">
	         <label>ID Siswa</label>
	         <input type="text" class="form-control" name="id_siswa">
	    </div>
		<div class="form-group col-md-12">
	          <label>Nama</label>
	          <input type="text" class="form-control" name="nama">
	    </div>
		<div class="form-group col-md-12">
	          <label>NIS</label>
	          <input type="text" class="form-control" name="nis">
	    </div>
		<div class="form-group col-md-12">
	          <label>Tempat</label>
	          <input type="text" class="form-control" name="tempat">
	    </div>
		<div class="form-group col-md-12">
	          <label>Tanggal Lahir</label>
	          <input type="text" class="form-control" name="tanggal_lahir">
	    </div>
		<div class="form-group col-md-12">
	          <label>ID Kelas</label>
	          <input type="text" class="form-control" name="id_kelas">
	    </div>
		<div class="form-group col-md-12">
	          <label>Alamat</label>
	          <input type="text" class="form-control" name="alamat">
	    </div>
		<div class="form-group col-md-12">
	          <label>No HP</label>
	          <input type="text" class="form-control" name="no_hp">
	    </div>
		<div class="form-group col-md-12">
	          <label>Email</label>
	          <input type="text" class="form-control" name="email">
	    </div>
	    <div class="form-group col-md-12">
	          <label>Password</label>
	          <input type="text" class="form-control" name="password">
	    </div>
			<tr>
				<td></td>
				<td><input type="submit" class="btn-success" value="Simpan"></td>
			</tr>
		</table>
		</div>
  	</div>
	</div>
	</form>
</body>
</html>

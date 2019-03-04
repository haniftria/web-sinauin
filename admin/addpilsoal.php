<br>
<?php include ('header.php'); ?>
</br>
<br/>
	<title>Tambah Pilihan Soal</title>
	<div class="container">
		<h2>Tambah Pilihan Soal baru</h2>
	<br/>
	<a href="pilsoal.php">Lihat Semua Data</a>
	<form action="addpilsoal-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center">TAMBAH PILIHAN SOAL</div>
		  <div class="card-body text-success">
		  	<div class="form-row">
				<div class="form-group col-md-12">
		          <label>ID Pilihan soal</label>
		          <input type="text" class="form-control" name="id_pilihan_soal">
		        </div>
		        <div class="form-group col-md-12">
		          <label>ID Mata Pelajaran</label>
		          <input type="text" class="form-control" name="id_mata_pelajaran">
		        </div>
		        <div class="form-group col-md-12">
		          <label>Materi</label>
		          <input type="text" class="form-control" name="materi">
		        </div>
				<div class="form-group col-md-12">
		          <label>Soal</label>
		          <input type="text" class="form-control" name="que">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan A</label>
		          <input type="text" class="form-control" name="pilihan_a">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan B</label>
		          <input type="text" class="form-control" name="pilihan_b">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan C</label>
		          <input type="text" class="form-control" name="pilihan_c">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan D</label>
		          <input type="text" class="form-control" name="pilihan_d">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan E</label>
		          <input type="text" class="form-control" name="pilihan_e">
		        </div>
				<div class="form-group col-md-12">
		          <label>Jawaban</label>
		          <input type="text" class="form-control" name="ans">
		        </div>
				<div class="form-group col-md-12">
		          <label>Jawaban User</label>
		          <input type="text" class="form-control" name="userans">
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

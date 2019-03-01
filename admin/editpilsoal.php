<br> <?php include ('header.php') ?>
</br>
<?php
  include('config.php');

  $sql_tampil ="SELECT * FROM pilihan_soal where id_pilihan_soal = '".$_GET['id_pilihan_soal']."'";

  $kelas=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
    ?>
<br>
	<title>Edit Pilihan Soal</title>
	<div class="container">
		<h2>Edit Pilihan Soal </h2>
	<br/>

	<a href="pilsoal.php">Lihat Semua Data</a>
	<form action="editpilsoal-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center">EDIT Pilihan Soal</div>
		  <div class="card-body text-success">
		  <div class="form-row">
				<div class="form-group col-md-12">
		          <label>ID Pilihan Soal</label>
		          <input type="text" class="form-control" name="id_pilihan_soal" value="<?php echo $baris_data['id_pilihan_soal']; ?>">
			    </div>
			    <div class="form-group col-md-12">
		          <label>ID Mata pelajaran</label>
		          <input type="text" class="form-control" name="id_mata_pelajaran" value="<?php echo $baris_data['id_mata_pelajaran']; ?>">
			    </div>
				<div class="form-group col-md-12">
		          <label>Soal</label>
		          <input type="text" class="form-control" name="que" value="<?php echo $baris_data['que']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan A</label>
		          <input type="text" class="form-control" name="pilihan_a" value="<?php echo $baris_data['pilihan_a']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan B</label>
		          <input type="text" class="form-control" name="pilihan_b" value="<?php echo $baris_data['pilihan_b']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan C</label>
		          <input type="text" class="form-control" name="pilihan_c" value="<?php echo $baris_data['pilihan_c']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan D</label>
		          <input type="text" class="form-control" name="pilihan_d" value="<?php echo $baris_data['pilihan_d']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Pilihan E</label>
		          <input type="text" class="form-control" name="pilihan_e" value="<?php echo $baris_data['pilihan_e']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Jawaban</label>
		          <input type="text" class="form-control" name="ans" value="<?php echo $baris_data['ans']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Jawaban User</label>
		          <input type="text" class="form-control" name="userans" value="<?php echo $baris_data['userans']; ?>">
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
<?php } ?>
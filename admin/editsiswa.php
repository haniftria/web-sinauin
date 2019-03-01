<br> <?php include ('header.php') ?>
</br>
<?php
  include('config.php');

  $sql_tampil ="SELECT * FROM siswa where id_siswa = '".$_GET['id_siswa']."'";

  $kelas=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
  // print_r($baris_data);
    ?>
<br>
	<title>Edit Siswa</title>
	<div class="container">
		<h2>Edit Siswa</h2>
</br>
	<a href="siswa.php">Lihat Semua Data</a>
	<form action="editsiswa-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center">EDIT SISWA</div>
		  <div class="card-body text-success">
			<div class="form-row">
				<div class="form-group col-md-12">
		          <label>ID Siswa</label>
		          <input type="text" class="form-control" name="id_siswa" value="<?php echo $baris_data['id_siswa']; ?>">
		        </div>
		        <div class="form-group col-md-12">
		          <label>Nama</label>
		          <input type="text" class="form-control" name="nama" value="<?php echo $baris_data['nama']; ?>">
		        </div>
				<div class="form-group col-md-12">
			          <label>NIS</label>
			          <input type="text" class="form-control" name="nis" value="<?php echo $baris_data['nis']; ?>">
			    </div>
				<div class="form-group col-md-12">
		          <label>Tempat</label>
		          <input type="text" class="form-control" name="tempat" value="<?php echo $baris_data['tempat']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Tanggal lahir</label>
		          <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $baris_data['tanggal_lahir']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>ID Kelas</label>
					<select name="id_kelas" id="id_kelas" class="form-control">
		              <option>-- PILIH KELAS --</option>
		              <?php 
		              include ('config.php');
		              $sql_view = "SELECT * FROM kelas";

		               $siswa=mysqli_query($conn, $sql_view);

		                while ($baris = mysqli_fetch_array($siswa, MYSQLI_ASSOC)) {
		                  ?>
		                  <option value="<?php echo $baris['id_kelas'];?>" <?= ($baris_data['id_kelas'] == $baris['id_kelas']) ? 'selected' :'';?>><?php echo $baris['nama_kelas'];?></option>
		              <?php } ?>
		            </select>
				</div>
				<div class="form-group col-md-12">
		          <label>Alamat</label>
		          <input type="text" class="form-control" name="alamat" value="<?php echo $baris_data['alamat']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>No HP</label>
		          <input type="text" class="form-control" name="no_hp" value="<?php echo $baris_data['no_hp']; ?>">
		        </div>
				<div class="form-group col-md-12">
		          <label>Email</label>
		          <input type="email" class="form-control" name="email" value="<?php echo $baris_data['email']; ?>">
		        </div>
		        <div class="form-group col-md-12">
		          <label>Password</label>
		          <input type="password" class="form-control" name="password" value="<?php echo $baris_data['password']; ?>">
		        </div>
			<tr>
				<td></td>
				<td><input type="submit" class="btn-success" value="Simpan"></td>
			</tr>
		</table>
	</form> 
</body>
</html>
<?php } ?>
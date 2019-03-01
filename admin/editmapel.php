<br> <?php include ('header.php') ?>
<?php
  include('config.php');

  $sql_tampil ="SELECT * FROM mata_pelajaran where id_mata_pelajaran = '".$_GET['id_mata_pelajaran']."'";

  $kelas=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
    ?>
</br>
<br>
	<title>Edit Mata Pelajaran</title>
	<div class="container">
		<h2>Edit data mata pelajaran</h2>
	</br>
		<a href="mapel.php">Lihat Semua Data</a>
	<form action="editmapel-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center">EDIT MAPEL</div>
		  <div class="card-body text-success">
		  	<div class="from-row">
	      		<div class="form-group col-md-12">
		          <label>ID Mapel</label>
		          <input type="text" class="form-control" name="id_mata_pelajaran" value="<?php echo $baris_data['id_mata_pelajaran']; ?>">
		    	</div>
				<div class="form-group col-md-12">
			          <label>Keterangan</label>
			          <input type="text" class="form-control" name="keterangan" value="<?php echo $baris_data['keterangan']; ?>">
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
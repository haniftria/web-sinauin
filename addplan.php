<br>
<?php include ('./template/header2.php');?>
</br>
<?php 
	include('config.php');
	$id_siswa = $_GET['id_siswa'];
?>
<br><br>
	<title>Tambah Planner</title>
	<div class="container">
		<h2>Tambah Planner</h2>
	<a href="planner2.php">Lihat Semua Data</a>
	<form action="addplan-aksi.php" method="post">
	<div class="card-plan border-success mb-3" style="max-width: 30rem;">
	  <div class="card-header text-center bg-success text-light">TAMBAH PLANNER</div>
	  <div class="card-body text-success">
    	<div class="form-row">
    		<div class="form-group col-md-12">
	          <input type="hidden" class="form-control" placeholder="idplanner" name="id_planner">
	        </div>
			<div class="form-group col-md-12">
	          <input type="hidden" class="form-control" placeholder="idsiswa" value="<?php echo $id_siswa ?>" name="id_siswa">
	        </div>
	        <div class="form-group col-md-12">
	          <label>Tanggal</label>
	          <input type="date" class="form-control" name="tanggal">
	        </div>
	        <div class="form-group col-md-12">
	          <label>Rencana</label>
	          <textarea type="text" class="form-control" name="plan"></textarea>
	        </div>
	        <div class="form-group col-md-12">
	          <label>Review</label>
	          <textarea type="text" class="form-control" name="review"></textarea>
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
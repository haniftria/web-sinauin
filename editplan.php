<br> <?php include ('./template/header2.php') ?>
<?php
  include('config.php');

  $sql_tampil ="SELECT * FROM planner where id_planner = '".$_GET['id_planner']."'";

  $plan=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($plan,MYSQLI_ASSOC)){
    ?>
</br>
<br>
<br>
	<title class="center">Edit Planner</title>
	<div class="container">
		<h2>Edit Planner</h2>
	<a href="planner2.php">Lihat Semua Rencana & Hasil</a>
	<form action="editplan-aksi.php" method="post">
		<div class="card-plan border-success mb-3" style="max-width: 40rem;">
		  <div class="card-header text-center bg-success text-light">Edit Planner</div>
		  <div class="card-body text-success">
		  <div class="form-row">
	          <input type="hidden" class="form-control" value="<?php echo $baris_data['id_planner'];?>" name="id_planner">
	          <input type="hidden" class="form-control" value="<?php echo $baris_data['id_siswa'];?>" name="id_siswa">
	        <div class="form-group col-md-12">
	          <label>Tanggal</label>
	          <input type="date" class="form-control" value="<?php echo $baris_data['tanggal'];?>" name="tanggal">
	        </div>
	        <div class="form-group col-md-12">
	          <label>Rencana</label>
	          <textarea type="text" class="form-control" value="<?php echo $baris_data['plan'];?>" name="plan"><?php echo $baris_data['plan'];?></textarea>
	        </div>
	        <div class="form-group col-md-12">
	          <label>Hasil Belajar</label>
	          <textarea type="text" class="form-control" value="<?php echo $baris_data['review'];?>" name="review"><?php echo $baris_data['review'];?></textarea>
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
<?php include ('./template/footer.php') ?>
<?php } ?>
<br> <?php include ('header.php') ?>
<?php
  include('config.php');

  $sql_tampil ="SELECT * FROM planner where id_planner = '".$_GET['id_planner']."'";

  $row=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($row,MYSQLI_ASSOC)){
    ?>
</br>
<br>
	<title>Edit</title>
	<div class="container">
		<h2>Edit data</h2>
</br>
	<a href="planner.php">Lihat Semua Data</a>
	<form action="editplan-aksi.php" method="post">
		<div class="card border-success mb-3" style="max-width: 30rem;">
		  <div class="card-header text-center">EDIT</div>
		  <div class="card-body text-success">
		  <div class="form-row">
			<div class="form-group col-md-12">
	          <label>ID planner</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['id_planner'];?>" name="id_planner">
	        </div>
    		<div class="form-group col-md-12">
	          <label>id siswa</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['id_siswa'];?>" name="id_siswa">
	        </div>
	        <div class="form-group col-md-12">
	          <label>tanggal</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['tanggal'];?>" name="tanggal">
	        </div>
	        <div class="form-group col-md-12">
	          <label>rencana</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['plan'];?>" name="plan">
	        </div>
	        <div class="form-group col-md-12">
	          <label>review</label>
	          <input type="text" class="form-control" value="<?php echo $baris_data['review'];?>" name="review">
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
<?php } ?>
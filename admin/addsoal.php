<?php include ('config.php'); ?>
<?php include 'header.php' ?>
<title>Buat Soal</title>
<br> <br> <br>
<form method="post" action="addsoal-aksi.php">
	<div class="container">
	<h2>Input Data Soal</h2>
	<div class="card border-success mb-3" style="max-width: 30rem;">
	  <div class="card-header text-light bg-success text-center">TAMBAH SOAL</div>
	  <div class="card-body text-success">
    	<div class="form-row">
    		<div class="form-group col-md-12">
	          <input type="hidden" name="id_pilihan_soal" placeholder="idpilsoal">
	        </div>
	        <div class="form-group col-md-12">
	        	<?php
	        	$id_mata_pelajaran = $_POST ['id_mata_pelajaran'];
	        	$sql = "SELECT * FROM `mata_pelajaran` WHERE id_mata_pelajaran='$id_mata_pelajaran'";
	        	$mapel=mysqli_query($conn,$sql);

	        	while ($m = mysqli_fetch_array($mapel, MYSQLI_ASSOC)){ 
	        	?>
	      	  <input type="text" name="id_mata_pelajaran" placeholder="idmapel" value="<?php echo $m['id_mata_pelajaran']; ?>">
	        </div>
	    	<?php } ?>
    		<?php
				$n = $_POST['jum']; // membaca jumlah data
				for ($i=1; $i<=$n; $i++)
				{ ?>
    		
	        <div class="form-group col-md-12">
	          <label>Soal</label>
	          <input type="text" name="que<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<label>Pilihan A</label>
	        	<input type="text" name="pilihan_a<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<label>Pilihan B</label>
	        	<input type="text" name="pilihan_b<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<label>Pilihan C</label>
	        	<input type="text" name="pilihan_c<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<label>Pilihan D</label>
	        	<input type="text" name="pilihan_d<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<label>Pilihan E</label>
	        	<input type="text" name="pilihan_e<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<label>Jawaban</label>
	        	<input type="text" name="ans<?php echo $i?>">
	        </div>
	        <div class="form-group col-md-12">
	        	<input type="hidden" name="userans<?php echo $i?>" placeholder="Jawaban user">
	        </div>

	        <?php } ?>

<br>
<input type="hidden" name="jum" value="<?php echo $n; ?>">
<input type="submit" name="submit" value="Submit">
</form>
</div>
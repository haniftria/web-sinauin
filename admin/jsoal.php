<?php include 'header.php' ?>
<?php include ('config.php'); ?>
<title>Jumlah Soal</title>
<br> <br> <br>
<div class="container">
	<form action="addsoal.php" method="POST">
		<h2>Input Data Soal</h2>
		<br>
		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
		  <div class="card-header">Jumlah soal</div>
		  <div class="card-body">
		  	<?php
		  		$idmapel = $_GET['idmapel'];
	        ?>
	      <input type="hidden" name="id_mata_pelajaran" placeholder="idmapel" value="<?php echo $idmapel ?>" readonly>
	  <?php  ?>
		  <input type="text" name="jum" placeholder="jumlah">
		  <input type="submit" name="submit" value="Submit">
		  </div>
		  </div>
	</form>
</div>
<?php 
session_start(); 
include('config.php');

$email=$_SESSION['email'];

$sql = "SELECT * FROM siswa where email='$email'";

$result = mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);

if($rows>0)
{
  $array=mysqli_fetch_assoc($result);
}

?>
<?php include ('template/header2.php');?>

    <title>Profil - SINAUIN</title>
  </head>
  <body>
    <!-- profil  -->
  <div class="card card-profil border-success mb-3" style="max-width: 40rem;">
  <div class="card-header text-center">Profil</div>
  <div class="card-body text-success">
    <img src="img/prof.png" class=".rounded">
    <form>
  <fieldset disabled>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" value="<?php echo $array['nama']; ?>" readonly>
    </div>
    <div class="form-group">
      <label>NIS</label>
      <input type="text" value="<?php echo $array['nis']; ?>" name="nis" class="form-control" readonly>
    </div>
    <div class="form-group">
      <label>Kelas</label>
      <?php 
        $email=$_SESSION['email'];
        $sql = "SELECT s.*,k.nama_kelas FROM siswa s LEFT JOIN kelas k ON s.id_kelas=k.id_kelas where email='$email'";
        $siswa=mysqli_query($conn, $sql);

        while ($baris_data = mysqli_fetch_array($siswa, MYSQLI_ASSOC)) {
       ?>
       <input type="text" value="<?php echo $baris_data['nama_kelas'] ?>" name="id_kelas" class="form-control" readonly>
       <?php } ?>
    </div>
    <div class="form-group">
      <label>Tempat</label>
      <input type="text" value="<?php echo $array['tempat']; ?>" name="tempat" class="form-control" readonly>
    </div>
    <div class="form-group">
      <label>Tanggal lahir</label>
      <input type="text" value="<?php echo $array['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control" readonly>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" value="<?php echo $array['alamat']; ?>" name="alamat" class="form-control" readonly>
    </div>
    <div class="form-group">
      <label>No HP</label>
      <input type="text" value="<?php echo $array['no_hp']; ?>" name="no_hp" class="form-control" readonly>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" value="<?php echo $array['email']; ?>" name="email" class="form-control" readonly>
    </div>
  </fieldset>
  <div class="btn-profil">
    <a href="editakun.php" class="btn btn-success">Edit Profil</a>
    <a href="home.php" class="btn btn-success">OK</a>
  </div>
</form>
  </div>
    <!-- akhir profil -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
session_start();
include ('template/header2.php');
include('config.php');

        $email=$_SESSION['email'];
        $update = "SELECT * FROM siswa where email='$email'";
        $profil=mysqli_query($conn, $update);

        while ($bariss = mysqli_fetch_array($profil, MYSQLI_ASSOC)) {
 ?>

<title>Edit Profil</title>
<div class="card-daftar card border-success mb-3" style="max-width: 40rem;">
  <div class="card-header text-center">EDIT PROFIL</div>
  <div class="card-body text-success">
     <form action="editakun-aksi.php" method="post">
       <div class="form-row">
        <div class="form-group col-md-12">
          <input type="hidden" class="form-control" name="id_siswa" value="<?php echo $bariss['id_siswa']; ?>" readonly>
        </div>
        <div class="form-group col-md-12">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $bariss['nama']; ?>">
        </div>
        <div class="form-group col-md-12">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" name="nis" value="<?php echo $bariss['nis']; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="tempat">Tempat</label>
            <input type="text" class="form-control" name="tempat" value="<?php echo $bariss['tempat']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $bariss['tanggal_lahir']; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Kelas</label>
            <select name="id_kelas"  id="id_kelas" class="form-control">
              <option>-- PILIH KELAS --</option>
              <?php 
              include ('config.php');
              $sql_view = "SELECT * FROM kelas";

               $siswa=mysqli_query($conn, $sql_view);

                while ($kelas = mysqli_fetch_array($siswa, MYSQLI_ASSOC)) {
                  ?>
                  <option value="<?php echo $kelas['id_kelas'] ?>" <?= ($bariss['id_kelas'] == $kelas['id_kelas']) ? 'selected' :'';?>><?php echo $kelas['nama_kelas'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" value="<?php echo $bariss['alamat'] ?>">
        </div>
        <div class="form-group">
          <label for="no_hp">No. HP</label>
          <input type="text" class="form-control" name="no_hp" value="<?php echo $bariss['no_hp']; ?>">
        </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $bariss['email']; ?>">
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-daftar btn-success">Simpan</button>
        </div>
      </form>
  </div>
</div>
<?php } ?>
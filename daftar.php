<?php include ('template/header.php');?>
<title>Daftar - SINAUIN</title>
    <!-- Daftar/Register -->
<div class="card-daftar card border-success mb-3" style="max-width: 40rem;">
  <div class="card-header text-center">PENDAFTARAN SISWA</div>
  <div class="card-body text-success">
     <form action="daftar-aksi.php" method="post">
       <div class="form-row">
        <div class="form-group col-md-12">
          <label for="id_siswa">ID siswa</label>
          <input type="text" class="form-control" name="id_siswa" placeholder="ID Siswa">
        </div>
        <div class="form-group col-md-12">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
        </div>
        <div class="form-group col-md-12">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" name="nis" placeholder="Nomer Induk Siswa">
        </div>
        <div class="form-group col-md-6">
            <label for="tempat">Tempat</label>
            <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir">
          </div>
          <div class="form-group col-md-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="id_kelas">Kelas</label>
            <select name="id_kelas" class="form-control">
              <option selected>Choose...</option>
              <option>101</option>
              <option>102</option>
              <option>103</option>
              <option>X TKJ 1</option>
              <option>X TKJ 2</option>
              <option>X TKJ 3</option>
              <option>X RPL 1</option>
              <option>X RPL 2</option>
              <option>X RPL 3</option>
              <option>X RPL 4</option>
              <option>XI TJA 1</option>
              <option>XI TJA 2</option>
              <option>XI TJA 3</option>
              <option>XI TKJ 1</option>
              <option>XI TKJ 2</option>
              <option>XI TKJ 3</option>
              <option>XI RPL 1</option>
              <option>XI RPL 2</option>
              <option>XI RPL 3</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" placeholder="Alamat Rumah">
        </div>
        <div class="form-group">
          <label for="no_hp">No. HP</label>
          <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP">
        </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-daftar btn-success">Daftar</button>
        </div>
      </form>
  </div>
</div>
</div>
    <!-- Akhir Daftar/Register -->
<?php include ('template/header.php');?>
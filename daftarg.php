<?php include ('template/header.php');?>
    <!-- Daftar/Register -->
  <div>
<div class="card-daftar card border-success mb-3" style="max-width: 40rem;">
  <div class="card-header text-center">PENDAFTARAN GURU</div>
  <div class="card-body text-success">
     <form>
       <div class="form-row">
        <div class="form-group col-md-12">
          <label for="namalengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
        </div>
        <div class="form-group col-md-6">
            <label for="tempat">Tempat</label>
            <input type="text" class="form-control" id="tempat" placeholder="Tempat Lahir">
          </div>
          <div class="form-group col-md-6">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal Lahir">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Guru Mata pelajaran</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>Bahasa Indonesia</option>
              <option>Matematika</option>
              <option>PKN</option>
              <option>Pendidikan Agama</option>
              <option>Bahasa Inggris</option>
              <option>Bahasa Jawa</option>
              <option>Sejarah Indonesia</option>
              <option>Kimia</option>
              <option>Fisika</option>
              <option>DP 1</option>
              <option>DP 2</option>
              <option>DP 3</option>
              <option>DP 4</option>
              <option>KK 1</option>
              <option>KK 2</option>
              <option>KK 3</option>
              <option>KK 4</option>
              <option>KK 5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Alamat Rumah">
        </div>
        <div class="form-group">
          <label for="nomer">No. HP</label>
          <input type="text" class="form-control" id="nomer" placeholder="Nomor HP">
        </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password">
          </div>
          <div class="form-group col-md-6">
            <label for="pass1">Konfirmasi Password</label>
            <input type="password" class="form-control" id="pass1" placeholder="Konfirmasi Password">
          </div>
        </div>
       </div>
        <div class="form-group">
           <button type="submit" class="btn btn-daftar  btn-success">Sign in</button>
        </div>
      </form>
  </div>
</div>
</div>

    <!-- Akhir Daftar/Register -->
<?php include ('template/footer.php');?>
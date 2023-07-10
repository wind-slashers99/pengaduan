<?php include 'header.php'; ?>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="card" style="width: 25rem;">
        <div class="card-body">
          <h5 class="card-title">Form Pengaduan</h5>
          <p class="card-text">
          <form action="pengaduan_act.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan NIK Anda Yang Telah terdaftar</label>
              <input type="text" class="form-control" name="nik_mas" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputPassword1">Masukkan Aduan Anda </label>
              <textarea class="form-control" id="exampleInputPassword1" name="isi"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
  <?php include 'footer.php'; ?>
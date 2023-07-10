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
          <h5 class="card-title">Registrasi</h5>
          <center>
            <?php
            if (isset($_GET['alert'])) {
              if ($_GET['alert'] == "gagal") {
                echo "<div class=pesan>$pesan</div>";
              }
            }

            ?>
          </center>
          <p class="card-text">
          <form action="reg_act.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">NIK KTP</label>
              <input type="number" name="nik_mas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select class="form-control" name="jk" id="exampleFormControlSelect1">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">No Telepon</label>
              <input type="number" class="form-control" name="telpon" id="exampleInputEmail1" aria-describedby="emailHelp">
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
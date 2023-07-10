<?php include 'header.php'; ?>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <br>
    <br>
    <br>
    <br>
    <div class="container">



      <div class="card" style="width: 60rem;">
        <div class="card-body">
          <h5 class="card-title">Form Cek Pengaduan</h5>
          <p class="card-text">

            <?php
            include 'conn.php';
            if (isset($_GET['nik_mas'])) {
            ?>
          <table class="table table-bordered table-hover table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pengaduan</th>
                <th>Tanggal Pengaduan</th>
                <th>Isi Pengaduan</th>
                <th>Status Pengaduan</th>
                <th>Tanggapan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $id = $_GET['nik_mas'];
              $data = mysqli_query($con, "select * from pengaduan where nik='$id' order by id_pengaduan desc");
              if (mysqli_num_rows($data) > 0) {
                while ($d = mysqli_fetch_array($data)) {
              ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['id_pengaduan'] ?></td>
                    <td><?php echo $d['tgl_pengaduan'] ?></td>
                    <td><?php echo $d['isi_laporan'] ?></td>
                    <td><?php if ($d['status'] == "proses") {
                          echo "<span class='badge badge-danger'>Menunggu Konfirmasi</span>";
                        } else {
                          echo "<span class='badge badge-success'>Selesai</span>";
                        } ?></td>
                    <td><a href="detail_tanggapan.php?id=<?php echo $d['id_pengaduan'] ?>" class="btn btn-primary">Detail</a></td>
                  </tr>
                <?php
                }
              } else {
                ?>
                <tr>
                  <td colspan="6" class="text-center">
                    Data Tidak Ditemukan
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          <a href="cek.php" class="btn btn-primary">Cek Lagi</a>
        <?php
            } else {


        ?>
          <form action="cek.php" method="get">
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan NIK Anda Yang Telah terdaftar</label>
              <input type="text" class="form-control" name="nik_mas" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <br>
              <button type="submit" class="btn btn-primary">Cek</button>
          </form>
        <?php  } ?>
        </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-1"></div>
  <?php include 'footer.php'; ?>
<?php include'header.php' ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Rincian Tanggapan </h3>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-datatable">
        <thead>
  <tr>
    <th>No</th>
    <th>ID Tanggapan</th>
    <th>ID Pengaduan</th>
    <th>Tanggal Laporan</th>
    <th>Tanggapan</th>
    <th>ID Petugas</th>
      </tr>
      </thead>
      <tbody>

        <?php include 'conn.php';
        $no=1;
        $id = $_GET['id'];
        $data = mysqli_query($con,"select * from tanggapan where id_pengaduan='$id'");
        if (mysqli_num_rows($data)>0){
        while ($d = mysqli_fetch_array($data)){
            ?>
             <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $d['id_tanggapan'] ?></td>
              <td><?php echo $d['id_pengaduan'] ?></td>
              <td><?php echo $d['tgl_tanggapan'] ?></td>
              <td><?php echo $d['tanggapan'] ?></td>
              <td><?php echo $d['id_petugas'] ?></td>
        </tr>
        <?php
          }
        }else{
          ?>
          <tr>
            <td colspan="6" class="text-center">
              Aduan Anda Belum Di Tanggapi
        </td>
        </tr>
        <?php  
        }
        ?>
</tbody>
        </table>
        <a href="cek.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

<?php include'footer.php' ?>
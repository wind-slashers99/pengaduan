<?php include'header.php'; 

include '../conn.php';
$id=$_GET['id'];
$data = mysqli_query($con,"select * from pengaduan where id_pengaduan='$id'");
$d = mysqli_fetch_array($data);

?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
    <br>
    <br>
    <br>
    <br>
    <div class="container">
<div class="card" style="width: 70rem;">
  <div class="card-body">
    <h5 class="card-title">Form Pengaduan</h5>
    <p class="card-text">

  

        <form action="tanggapan_act.php" method="post">
        <div class="table-reponsive">
        <table class="table table-bordered table-stripped table-hover">
            <tr>
                <td>ID Pengaduan</td>
                <td>  <input type="text" class="form-control" name="id_pengaduan" value="<?php echo $d['id_pengaduan'] ?>"  id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                  </td>
</tr>
            <tr>
                <td>NIK</td>
                <td>  <input type="text" class="form-control" name="nik" value="<?php echo $d['nik'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                  </td>
</tr>
            <tr>
                <td>Tanggal</td>
                <td>  <input type="text" class="form-control" name="tanggal" value="<?php echo $d['tgl_pengaduan'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                  </td>
</tr>
            <tr>
                <td>Isi Pengaduan</td>
                <td>  <input type="text" class="form-control" name="isi" value="<?php echo $d['isi_laporan'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                  </td>
</tr>
            <tr>
                <td>Status</td>
                <td>  <select class="form-control" name="status" id="exampleFormControlSelect1">
      <option>Silahkan Pilih...</option>
      <option value="proses">Menunggu Konfirmasi</option>
      <option value="selesai">Konfirmasi & Selesai</option>
    </select>
                  </td>
</tr>
            <tr>
                <td>Isi Tanggapan</td>
                <td><textarea class="form-control" name="tanggapan" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                  </td>
</tr>
        </table>
    </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
    </p>
  </div>
</div>
</div>
</div>
<div class="col-md-2"></div>
<?php include'footer.php'; ?>

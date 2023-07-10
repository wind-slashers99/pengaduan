<?php include 'conn.php';

$tanggal = date("Y-m-d");
$nik = $_POST['nik_mas'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

$data = mysqli_query($con, "select * from masyarakat where nik='$nik'");

if (mysqli_num_rows($data) > 0) {
    $pesan = "NIK Sudah Terdaftar";
    header('location:regis.php?alert=gagal');
} else {
    if (preg_match("/^[0-9]{16}$/", "$nik")) {


        mysqli_query($con, "insert into masyarakat values('$tanggal','$nik','$nama','$jk','$alamat','$telpon')");

        header('location:regis.php?alert=berhasil');
    } else {
        $pesan = "NIK Minimal 16 angka";
        header('location:regis.php?alert=gagal');
    }
}

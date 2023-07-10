<?php include'conn.php';

$nik = $_POST['nik_mas'];
$isi = $_POST['isi'];
$tgl= date('Y-m-d');

$data = mysqli_query($con,"select * from masyarakat where nik='$nik'");

if (mysqli_num_rows($data)>0){
    mysqli_query($con,"insert into pengaduan values('NULL','$tgl','$nik','$isi','proses')");

    header('location:pengaduan.php?berhasil');


}else{

header('location:pengaduan.php?gagal');

}

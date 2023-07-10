<?php include'../conn.php';
session_start();
$petugas = $_SESSION['id'];
$id = $_POST['id_pengaduan'];
$nik = $_POST['nik'];
$tgl = $_POST['tanggal'];
$isi = $_POST['isi'];
$status = $_POST['status'];
$tanggapan = $_POST['tanggapan'];


if (mysqli_query($con,"insert into tanggapan values('NULL','$id','$tgl','$tanggapan','$petugas')")){

   $d = mysqli_query($con,"update pengaduan set status='$status' where id_pengaduan='$id'");
    header('location:proses.php?alert=berhasil');

}else{


    header('location:tanggapan.php?alert=gagal');


}
?>
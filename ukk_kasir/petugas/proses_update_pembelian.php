
<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];

// update data ke database
mysqli_query($koneksi,"update pelanggan set NamaPelanggan='$NamaPelanggan', NomorTelepon='$NomorTelepon', Alamat='$Alamat' where PelangganID='$PelangganID'");

// mengalihkan halaman kembali ke data_barang.php
header("location:pembelian.php?pesan=update");

?>
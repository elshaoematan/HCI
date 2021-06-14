<?php include("connect.php");
session_start();

//Getting Orders
$nama = $_POST['name'];
$email = $_POST['email'];
$nik_ktp = $_POST['nik_ktp'];
$pembayaran_melalui = $_POST['pembayaran_melalui'];
$notelp = $_POST['notelp'];
$namabarang = $_POST['namabarang'];
$jumlahbarang = $_POST['jumlahbarang'];
$hargatotal = $_POST['hargatotal'];
$pesanan = "Nama barang = " . $namabarang . " | Jumlah pesanan = " . $jumlahbarang . " | Total Harga = ". $hargatotal;

//Mengirim ke Database
$send = "INSERT INTO tb_pesanan(nama, pesanan, email, nik_ktp, pembayaran_melalui, notelp)
    VALUES('$nama','$pesanan','$email','$nik_ktp','$pembayaran_melalui','$notelp')";
$result = mysqli_query($conn,$send);

session_destroy();
header("location:Exit.html");
?>
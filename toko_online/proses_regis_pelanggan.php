<?php
if ($_POST) {
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $No_tlp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validasi input
    if (empty($Nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='regis_pelanggan.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='regis_pelanggan.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='regis_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        // Insert data ke dalam tabel pegawai
        $insert = mysqli_query($koneksi, "INSERT INTO toko_pelanggan (nama, alamat, telp, username, password) 
                                       VALUES ('" . $Nama . "', '" . $Alamat . "', '" . $No_tlp . "', '" . $username . "', '" . md5($password) . "')") or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Sukses mendaftar sebagai Pelanggan');location.href='regis_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar sebagai Pelanggan');location.href='regis_pelanggan.php';</script>";
        }
    }
}
?>
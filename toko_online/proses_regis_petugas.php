<?php
if ($_POST) {
    $Nama = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    
    // Validasi input
    if (empty($Nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='regis_petugas.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='regis_petugas.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='regis_petugas.php';</script>";
    } else {
        include "koneksi.php";
        // Insert data ke dalam tabel pegawai
        $insert = mysqli_query($koneksi,"INSERT INTO toko_petugas (nama_petugas, username, password, level) 
                                       VALUES ('" . $Nama . "', '" . $username . "', '" . md5($password) . "', '" . $level . "')") 
                                       or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Sukses mendaftar sebagai Petugas');location.href='regis_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar sebagai Petugas');location.href='regis_petugas.php';</script>";
        }
    }
}
?>
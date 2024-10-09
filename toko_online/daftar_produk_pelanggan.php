<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login.php');
    exit();
}

// Koneksi ke database
include "koneksi.php";

// Ambil data produk dari database
$query = "SELECT * FROM toko_produk";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5; /* Latar belakang abu-abu terang */
            color: #333; /* Warna teks abu-abu gelap */
        }
        .navbar {
            background-color: #333; /* Navbar dengan warna hitam */
            color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Sedikit bayangan */
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            background-color: #fff; /* Warna putih untuk kartu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sedikit bayangan */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek animasi */
        }
        .card:hover {
            transform: translateY(-10px); /* Efek hover mengangkat */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Bayangan lebih tebal saat hover */
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333; /* Warna teks kartu */
        }
        .card-text {
            color: #555; /* Warna teks deskripsi lebih abu-abu */
        }
        .btn-outline-success {
            color: #333;
            border-color: #333;
        }
        .btn-outline-primary {
            color: #555;
            border-color: #555;
        }
        .btn-outline-success:hover, .btn-outline-primary:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- Daftar Produk -->
<div class="container">
    <h3 class="mt-4 text-center">Daftar Produk</h3>
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="foto_produk/<?= $row['foto_produk'] ?>" class="card-img-top" alt="<?= $row['nama_produk'] ?>" style="max-height: 250px; object-fit: cover; border-radius: 10px 10px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                        <p class="card-text"><?= $row['deskripsi'] ?></p>
                        <p class="card-text"><strong>Rp <?= number_format($row['harga'], 0, ',', '.') ?></strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="beli_produk.php?id_produk=<?= $row['id_produk'] ?>" class="btn btn-sm btn-outline-success">Beli</a>
                                <a href="tambah_keranjang.php?id=<?= $row['id_produk'] ?>" class="btn btn-sm btn-outline-primary">Tambah ke Keranjang</a>
                            </div>
                            <small class="text-muted">Tersedia</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

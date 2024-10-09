<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login_petugas.php');
    exit();
}

// Koneksi ke database
include "koneksi.php";

// Ambil data produk dari database
$query = "SELECT * FROM toko_produk";
$result = mysqli_query($koneksi, $query);
include "header_petugas.php"

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
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #1e88e5;
            color: white;
        }
        .navbar-brand {
            font-weight: bold;
            color: white;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            width: 18rem;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
        .btn-danger {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <!-- Daftar Produk -->
    <div class="container">
        <h3 class="mt-4">Daftar Produk</h3>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg" style="background-color: #f7f7f7; border-radius: 10px;">
                    <img src="foto_produk/<?= $row['foto_produk'] ?>" class="card-img-top rounded-top" alt="<?= $row['nama_produk'] ?>" style="height: 250px; object-fit: cover; border-bottom: 3px solid #333;">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><?= $row['nama_produk'] ?></h5>
                        <p class="card-text text-muted"><?= $row['deskripsi'] ?></p>
                        <p class="card-text"><strong class="text-dark">Rp <?= number_format($row['harga'], 0, ',', '.') ?></strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="beli_produk.php?id_produk=<?= $row['id_produk'] ?>" class="btn btn-sm btn-dark shadow-sm">Beli</a>
                                <a href="tambah_keranjang.php?id=<?= $row['id_produk'] ?>" class="btn btn-sm btn-secondary shadow-sm">Tambah ke Keranjang</a>
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
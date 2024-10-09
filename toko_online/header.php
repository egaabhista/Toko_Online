<?php
// Cek apakah session sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egadventure ∆</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5; /* Warna abu-abu terang untuk latar belakang */
            color: #333; /* Warna teks abu-abu gelap */
        }

        .navbar {
            background-color: #f8f9fa; /* Navbar dengan warna abu-abu terang */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Sedikit bayangan untuk efek kedalaman */
        }

        .nav-link {
            color: #333 !important; /* Warna teks link di navbar */
            font-weight: bold;
        }

        .nav-link:hover {
            color: #555 !important; /* Warna saat link di-hover */
        }

        .navbar-brand {
            color: #333 !important; /* Warna teks untuk brand navbar */
            font-weight: bold;
        }

        .navbar-toggler {
            border-color: #333; /* Warna ikon toggler */
        }

        .navbar-toggler-icon {
            color: #333; /* Warna ikon toggler */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Egadventure ∆</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_produk_pelanggan.php">Daftar Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat_transaksi.php">Riwayat Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

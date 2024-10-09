<?php 
include "header.php";
?>

<div class="container mt-5">
    <h2 class="text-center text-dark fw-bold">Selamat Datang, <?=$_SESSION['nama']?>!</h2>
    <p class="text-center text-muted lead mb-4">Silahkan berbelanja produk terbaik kami</p>

    <!-- Tampilan daftar produk secara grid -->
    <div class="row">
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM toko_produk";
        $result = mysqli_query($koneksi, $query);
        
        while ($row = mysqli_fetch_assoc($result)) { ?>
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
        <?php } ?>
    </div>
</div>

<?php 
include "footer.php";
?>

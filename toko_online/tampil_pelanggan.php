<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pelanggan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4; /* Background abu-abu muda */
            font-family: 'Arial', sans-serif;
            color: #333333; /* Warna teks hitam abu-abu */
        }
        .container {
            margin-top: 50px;
            max-width: 900px;
            background-color: #ffffff; /* Background putih */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #333333; /* Warna teks hitam abu-abu */
            font-weight: bold;
            position: relative;
        }
        h3::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background-color: #333333; /* Garis hitam di bawah heading */
            margin: 10px auto 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff; /* Background tabel putih */
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0; /* Garis abu-abu terang */
        }
        th {
            background-color: #333333; /* Warna header hitam abu-abu */
            color: black;
            font-weight: 600;
            text-align: center;
        }
        td {
            color: #555555; /* Warna teks abu-abu gelap */
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f0f0f0; /* Warna baris genap abu-abu terang */
        }
        tr:nth-child(odd) {
            background-color: #e6e6e6; /* Warna baris ganjil abu-abu gelap */
        }
        tr:hover {
            background-color: #333333; /* Warna hover hitam abu-abu */
            color: white;
        }
        .btn {
            border-radius: 30px;
            padding: 6px 20px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .btn-success {
            background-color: #444444; /* Tombol abu-abu gelap */
            border: none;
        }
        .btn-success:hover {
            background-color: #333333; /* Hover lebih gelap */
        }
        .btn-danger {
            background-color: #666666; /* Tombol abu-abu */
            border: none;
        }
        .btn-danger:hover {
            background-color: #555555; /* Hover lebih gelap */
        }
        .btn-primary {
            background-color: #000000; /* Tombol hitam */
            border: none;
        }
        .btn-primary:hover {
            background-color: #333333; /* Hover hitam lebih terang */
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-img"></div> <!-- Placeholder untuk gambar header -->
        <h3>Daftar Pelanggan</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO TELEPON</th>
                    <th>USERNAME</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_pelanggan = mysqli_query($koneksi, "SELECT * FROM toko_pelanggan");
                $no=0;
                while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_pelanggan['nama']?></td>
                    <td><?=$data_pelanggan['alamat']?></td>
                    <td><?=$data_pelanggan['telp']?></td>
                    <td><?=$data_pelanggan['username']?></td>
                    <td>
                        <a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success btn-sm">Ubah</a> 
                        <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

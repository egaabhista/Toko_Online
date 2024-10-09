<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        .form-control, .form-select {
            background-color: #f7f7f7;
            border: 1px solid #ccc;
            color: #333;
        }
        .form-control:focus, .form-select:focus {
            border-color: #333;
            box-shadow: none;
        }
        .btn {
            background-color: #333;
            border-color: #333;
        }
        .btn:hover {
            background-color: #555;
            border-color: #555;
        }
    </style>
</head>
<body>

    <?php 
    include "koneksi.php";
    $qry_get_petugas = mysqli_query($koneksi,"SELECT * FROM toko_petugas WHERE id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas = mysqli_fetch_array($qry_get_petugas);
    ?>

    <div class="container">
        <h3>Ubah Petugas</h3>
        <form action="proses_ubah_petugas.php" method="post">
            <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">

            <div class="mb-3">
                <label for="nama_petugas">Nama Petugas:</label>
                <input type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin diubah">
            </div>

            <div class="mb-3">
                <label for="level">Level:</label>
                <select name="level" class="form-select" id="level" required>
                    <option value="" disabled selected>Pilih Level</option>
                    <option value="CEO" <?= $dt_petugas['level'] == 'CEO' ? 'selected' : '' ?>>CEO</option>
                    <option value="Manager" <?= $dt_petugas['level'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
                    <option value="Admin" <?= $dt_petugas['level'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="Karyawan" <?= $dt_petugas['level'] == 'Karyawan' ? 'selected' : '' ?>>Karyawan</option>
                </select>
            </div>

            <div class="d-grid">
                <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

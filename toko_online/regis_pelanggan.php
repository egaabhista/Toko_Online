<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Registrasi Pelanggan</title>
    <style>
        body {
            background-color: #fff; /* Background abu-abu lembut */
            font-family: Arial, sans-serif;
        }
        .form-register {
            background-color: #f5f5f5; /* Warna putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 50px auto;
            color: #333;
        }
        .form-register h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #0a3d62; /* Navy */
        }
        .form-control, .btn-primary {
            border-radius: 5px;
        }
        .form-control {
            border: 1px solid #ccc;
        }
        .btn-primary {
            background-color: #0a3d62; /* Navy */
            border-color: #0a3d62;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #083358; /* Darker navy */
            border-color: #083358;
        }
        .form-label {
            color: #666; /* Warna abu-abu */
        }
        .mb-3 textarea {
            background-color: #fff;
            border: 1px solid #ccc;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="form-register">
        <h3>Registrasi Pelanggan</h3>
        <form action="proses_regis_pelanggan.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No Telepon</label>
                <input type="text" name="telp" class="form-control" id="telp" placeholder="Masukkan No Telepon">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

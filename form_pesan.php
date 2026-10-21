<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff1ff;
            margin: 0;
            padding: 40px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            max-width: 500px;
            margin: auto;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .btn {
            background-color: #510053;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Form Pesan Mahasiswa</h2>

        <!-- Kirim data isi form pakai metode POST ke file hasil_pesan.php -->
        <form action="hasil_pesan.php" method="POST">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">

            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas">

            <label for="pesan">Pesan / Kesan</label>
            <!-- <input type="text" name="pesan" id="pesan" rows="4"> -->
            <textarea name="pesan" id="pesan" rows="4"></textarea>

            <!-- Tombol Link untuk batal dan kembali ke halaman utama (index.php) -->
            <div class="btn-group">
                <button type="submit" name="kirim" class="btn">Kirim</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>

</body>
</html>
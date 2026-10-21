<?php
    // Fungsi `isset()` mengecek apakah data form dengan nama "nama", "kelas", dan "pesan" benar-benar sudah dikirimkan melalui metode POST 
    if (!isset($_POST["nama"]) || 
        !isset($_POST["kelas"]) || 
        !isset($_POST["pesan"])
    ) {
        header("Location: form_pesan.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan Mahasiswa</title>
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
            margin-bottom: 8px;
        }
        p.sub-title {
            margin-top: 0;
            color: #555;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .item {
            background-color: #f8fafc;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            background-color: #510053;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Pesan Berhasil Dikirim</h2>
        <!-- Ambil data nama yang diketik di form tadi -->
        <p class="sub-title">Terima kasih, <?= $_POST["nama"]; ?>!</p>

        <!-- Tampilkan data yang dikirim dari form -->
        <div class="item"><strong>Nama:</strong> <?= $_POST["nama"]; ?></div>
        <div class="item"><strong>Kelas:</strong> <?= $_POST["kelas"]; ?></div>
        <div class="item"><strong>Pesan / Kesan:</strong> <?= $_POST["pesan"]; ?></div>

        <!-- Tombol untuk kembali ke halaman utama tabel mahasiswa -->
        <a href="index.php" class="btn">Kembali ke Data Mahasiswa</a>
    </div>

</body>
</html>
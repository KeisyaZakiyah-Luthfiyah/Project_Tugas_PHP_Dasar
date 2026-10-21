<?php
    // Fungsi `isset()` mengecek apakah seluruh data parameter GET terkirim
    if (
        !isset($_GET["nim"]) ||
        !isset($_GET["nama"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["nilai"]) ||
        !isset($_GET["grade"]) ||
        !isset($_GET["status"])
    ) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
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
        <h2>Detail Mahasiswa</h2>

        <!-- Ambil data yang dikirim lewat link tadi lalu tampilkan -->
        <div class="item"><strong>NIM:</strong> <?= $_GET["nim"]; ?></div>
        <div class="item"><strong>Nama:</strong> <?= $_GET["nama"]; ?></div>
        <div class="item"><strong>Jurusan:</strong> <?= $_GET["jurusan"]; ?></div>
        <div class="item"><strong>Email:</strong> <?= $_GET["email"]; ?></div>
        <div class="item"><strong>Nilai:</strong> <?= $_GET["nilai"]; ?></div>
        <div class="item"><strong>Grade:</strong> <?= $_GET["grade"]; ?></div>
        <div class="item"><strong>Status:</strong> <?= $_GET["status"]; ?></div>

        <a href="index.php" class="btn">Kembali</a>
    </div>

</body>
</html>
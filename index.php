<?php

    // Array Multidimensi. Kumpulan data mahasiswa (seperti daftar nama di buku catatan)
    $mahasiswa = [
        [
            "nim" => "25022",
            "nama" => "Khanza Ramadini",
            "jurusan" => "Pendidikan Guru Sekolah Dasar",
            "email" => "ramadini@upi.edu",
            "nilai" => 62
        ],
        [
            "nim" => "25025",
            "nama" => "Keni Hasani",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "keni@upi.edu",
            "nilai" => 85
        ],
        [
            "nim" => "25028",
            "nama" => "Aca Athifa",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "athifa@upi.edu",
            "nilai" => 58
        ],
        [
            "nim" => "25031",
            "nama" => "Nadia Az-Zahra",
            "jurusan" => "Psikologi",
            "email" => "nadia@upi.edu",
            "nilai" => 90
        ],
        [
            "nim" => "25034",
            "nama" => "Altari Restiani",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "restiani@upi.edu",
            "nilai" => 75
        ]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff1ff; /* Warna latar belakang halaman (pink muda) */
            margin: 0;
            padding: 30px;
        }
        .card {
            background: #fff; /* Kotak putih utama */
            padding: 25px;
            border-radius: 10px; /* Membuat sudut kotak menjadi melengkung */
            box-shadow: 0 2px 8px rgba(0,0,0,0.05); /* Efek bayangan halus */
            max-width: 1000px;
            margin: auto; /* Agar posisi kotak di tengah */
        }
        .header {
            display: flex;
            justify-content: space-between; /* Memposisikan elemen agar terpisah ke ujung kiri & kanan */
            align-items: center;
            margin-bottom: 20px;
        }
        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px; /* Menambah jarak bawah agar tidak terlalu rapat dengan tabel */
            width: 100%;
        }
        h2 { 
            margin: 0; 
            font-size: 22px; 
        }
        p { 
            margin: 4px 0 0;
            color: #666; 
            font-size: 13px; 
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th, td {
            border: 1px solid #ddd; /* Garis tipis antar sel tabel */
            padding: 10px;
            text-align: left;
        }
        th {
            background: #f8fafc; /* Warna latar belakang kepala tabel */
        }
        /* Desain Tombol tombolan */
        .btn {
            background: #510053;
            color: #fff;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
        } 
        /* Warna teks untuk status kelulusan */
        .status-lulus {
            color: #2e7d32;
            font-weight: bold;
        }
        .status-tidak-lulus {
            color: #d32f2f;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header-top">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a href="form_pesan.php" class="btn">Isi Form Pesan</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <!-- Mulai nomor urut tabel dari angka 1 -->
                <?php $no = 1; ?>

                <!-- Cetak data mahasiswa satu-satu secara otomatis -->
                <?php foreach ($mahasiswa as $data) : ?>
                    <?php
                        // Percabangan untuk cek nilai buat nentuin Grade (A, B, C, D)
                        if ($data["nilai"] >= 80) {
                            $grade = "A";
                        } elseif ($data["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($data["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        // percabangan if else cek nilai buat nentuin Lulus atau Tidak Lulus (sekaligus warnanya)
                        if ($data["nilai"] >= 70) {
                            $status = "Lulus";
                            $class_status = "status-lulus"; // Teks jadi hijau
                        } else {
                            $status = "Tidak Lulus";
                            $class_status = "status-tidak-lulus"; // Teks jadi merah
                        }
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data["nim"]; ?></td>
                        <td><?= $data["nama"]; ?></td>
                        <td><?= $data["jurusan"]; ?></td>
                        <td><?= $data["email"]; ?></td>
                        <td><?= $data["nilai"]; ?></td>
                        <td><?= $grade; ?></td>
                        <td class="<?= $class_status; ?>"><?= $status; ?></td>
                        <td>

                            <!-- Lempar data mahasiswa lewat link ke halaman detail.php -->
                            <a class="btn" href="detail.php?nim=<?= $data["nim"]; ?>&nama=<?= $data["nama"]; ?>&jurusan=<?= $data["jurusan"]; ?>&email=<?= $data["email"]; ?>&nilai=<?= $data["nilai"]; ?>&grade=<?= $grade; ?>&status=<?= $status; ?>">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                <!-- Tambah nomor urut setiap baris selesai dicetak -->
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
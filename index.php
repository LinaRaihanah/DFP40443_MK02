<?php
$nama = "AMALINA RAIHANAH BINTI ROHIMI";
$nomatrik = "18DIT24F1027";
$kelas = "DIT4A";
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Maklumat Pelajar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ff7d7d;
            text-align: center;
        }
        .container {
            background: white;
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
        }
        img {
            width: 150px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Maklumat Pelajar</h2>

    <img src="gambar.jpg" alt="Gambar Pelajar">

    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>No Matrik:</strong> <?= $nomatrik ?></p>
    <p><strong>Kelas:</strong> <?= $kelas ?></p>

    <p><strong>Program:</strong> DIPLOMA TEKNOLOGI MAKLUMAT</p>
</div>

</body>
</html>
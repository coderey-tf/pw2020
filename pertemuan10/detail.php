<?php
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail mahasiswa</title>
</head>

<body>
  <h3>Detail mahasiswa</h3>
  <ul>
    <li type="none"><img src="img/<?= $m['gambar']; ?>"></li>
    <li type="none">NRP : <?= $m['nrp']; ?></li>
    <li type="none">NAMA : <?= $m['nama']; ?></li>
    <li type="none">EMAIL : <?= $m['email']; ?></li>
    <li type="none">JURUSAN : <?= $m['jurusan']; ?></li>
    <li type="none"><a href="">ubah</a> | <a href="">hapus</a></li>
    <li type="none"><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>

  </ul>
</body>

</html>
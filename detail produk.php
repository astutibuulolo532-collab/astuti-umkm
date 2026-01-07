<?php
include 'data_produk.php';
$id = $_GET['id'];

foreach ($produk as $p) {
    if ($p['id'] == $id) break;
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?= $p['nama'] ?></title>
</head>
<body>

<h2><?= $p['nama'] ?></h2>
<img src="assets/img/<?= $p['gambar'] ?>" width="300">
<p>Harga: Rp <?= number_format($p['harga']) ?></p>
<p><?= $p['deskripsi'] ?></p>
<p>Bahan: <?= $p['bahan'] ?></p>

<a href="https://wa.me/<?= $p['whatsapp'] ?>">Hubungi WhatsApp</a>

</body>
</html>

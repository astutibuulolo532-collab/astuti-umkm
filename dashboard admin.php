<?php
include 'data_produk.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Katalog UMKM</title>

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f8;
    margin: 0;
}

.header {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
    padding: 30px;
    text-align: center;
}

.container {
    padding: 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 25px;
}

.card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
    overflow: hidden;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.card-body {
    padding: 15px;
}

.card-body h4 {
    margin: 0 0 10px;
}

.price {
    color: #27ae60;
    font-weight: bold;
    margin-bottom: 15px;
}

.btn-wa {
    display: block;
    text-align: center;
    background: #25D366;
    color: white;
    padding: 10px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
}
.btn-wa:hover {
    background: #1ebe5b;
}

.footer {
    text-align: center;
    padding: 25px;
    background: #fff;
    margin-top: 40px;
}
</style>

</head>
<body>

<div class="header">
    <h1>🛍️ Katalog Produk UMKM</h1>
    <p>Produk pilihan berkualitas untuk Anda</p>
</div>

<div class="container">
<?php foreach ($produk as $p) { ?>
    <div class="card">
        <img src="assets/img/<?= $p['gambar']; ?>">
        <div class="card-body">
            <h4><?= $p['nama']; ?></h4>
            <div class="price">
                Rp <?= number_format($p['harga'],0,',','.'); ?>
            </div>
            <a class="btn-wa"
               href="https://wa.me/<?= $wa_admin; ?>?text=Halo%20saya%20tertarik%20dengan%20<?= urlencode($p['nama']); ?>"
               target="_blank">
               💬 Hubungi WhatsApp
            </a>
        </div>
    </div>
<?php } ?>
</div>

<div class="footer">
    <p>📞 Kontak Admin:</p>
    <a class="btn-wa"
       href="https://wa.me/<?= $wa_admin; ?>"
       target="_blank">
       Chat Admin via WhatsApp
    </a>
</div>

</body>
</html>

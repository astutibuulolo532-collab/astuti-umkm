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

/* ===== HEADER KONTAK ===== */
.header {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
    padding: 35px 20px;
}

.header-content {
    max-width: 900px;
    margin: auto;
    text-align: center;
}

.logo {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    background: white;
    padding: 5px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);


}

.header h1 {
    margin: 5px 0;
    font-size: 32px;
    letter-spacing: 1px;
}

.contact {
    font-size: 14px;
    margin-top: 8px;
}

.contact a {
    color: #fff;
    font-weight: bold;
    text-decoration: underline;
}


/* ===== PRODUK ===== */
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
    transition: .3s;
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

.editable {
    outline: none;
    cursor: text;
}
.price {
    color: #27ae60;
    font-weight: bold;
}

/* ===== FOOTER KONTAK ===== */
.footer {
    background: #fff;
    padding: 30px;
    text-align: center;
    border-top: 1px solid #eee;
}
.wa-btn {
    display: inline-block;
    background: #25D366;
    color: white;
    padding: 12px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
}
</style>
</head>

<body>

<!-- ===== HEADER KONTAK ADMIN (CENTER + LOGO) ===== -->
<div class="header">
    <div class="header-content">
        <img src="17.jpg" class="logo" alt="Logo UMKM">

        <h1>SELAMAT DATANG DI TOKO ASTUTI</h1>

        <div class="contact">
            👤 Astuti &nbsp; | &nbsp;
            📧 astutibuulolo@email.com &nbsp; | &nbsp;
            <a href="https://wa.me/6281234567890" target="_blank">
                WhatsApp
            </a>
        </div>
    </div>
</div>


<div class="container">

<!-- PRODUK 1 -->
<div class="card">
    <img src="1.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama1">heels premium wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga1">Rp 100.000</div>
    </div>
</div>

<!-- PRODUK 2 -->
<div class="card">
    <img src="2.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama2">heels import </h3>
        <div class="price editable" contenteditable="true" data-key="harga2">Rp 110.000</div>
    </div>
</div>

<!-- PRODUK 3 -->
<div class="card">
    <img src="3.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama3">heels cantik wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga3">Rp 120.000</div>
    </div>
</div>

<!-- PRODUK 4 -->
<div class="card">
    <img src="4.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama4">heels wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga4">Rp 130.000</div>
    </div>
</div>

<!-- PRODUK 5 s/d 16 -->
<!-- Tinggal LANJUTKAN pola ini sampai produk16 -->
</div>
<div class="container">

<!-- PRODUK 1 -->
<div class="card">
    <img src="5.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama1">tas wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga1">Rp 90.000</div>
    </div>
</div>

<!-- PRODUK 2 -->
<div class="card">
    <img src="6.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama2">tas </h3>
        <div class="price editable" contenteditable="true" data-key="harga2">Rp 130.000</div>
    </div>
</div>

<!-- PRODUK 3 -->
<div class="card">
    <img src="7.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama3">tas cantik</h3>
        <div class="price editable" contenteditable="true" data-key="harga3">Rp 80.000</div>
    </div>
</div>

<!-- PRODUK 4 -->
<div class="card">
    <img src="8.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama4">tas import</h3>
        <div class="price editable" contenteditable="true" data-key="harga4">Rp 190.000</div>
    </div>
</div>

<!-- PRODUK 5 s/d 16 -->
<!-- Tinggal LANJUTKAN pola ini sampai produk16 -->
</div>
<div class="container">

<!-- PRODUK 1 -->
<div class="card">
    <img src="9.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama1">dress wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga1">Rp 100.000</div>
    </div>
</div>

<!-- PRODUK 2 -->
<div class="card">
    <img src="10.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama2">kameja wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga2">Rp 80.000</div>
    </div>
</div>

<!-- PRODUK 3 -->
<div class="card">
    <img src="11.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama3">batik terbaru wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga3">Rp 123.000</div>
    </div>
</div>

<!-- PRODUK 4 -->
<div class="card">
    <img src="12.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama4">dress import</h3>
        <div class="price editable" contenteditable="true" data-key="harga4">Rp 130.000</div>
    </div>
</div>

<!-- PRODUK 5 s/d 16 -->
<!-- Tinggal LANJUTKAN pola ini sampai produk16 -->
</div>
<div class="container">

<!-- PRODUK 1 -->
<div class="card">
    <img src="13.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama1">celana kulot wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga1">Rp 150.000</div>
    </div>
</div>

<!-- PRODUK 2 -->
<div class="card">
    <img src="14.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama2">celana mini</h3>
        <div class="price editable" contenteditable="true" data-key="harga2">Rp 110.000</div>
    </div>
</div>

<!-- PRODUK 3 -->
<div class="card">
    <img src="15.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama3">celana cargo wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga3">Rp 120.000</div>
    </div>
</div>

<!-- PRODUK 4 -->
<div class="card">
    <img src="16.jpg">
    <div class="card-body">
        <h3 class="editable" contenteditable="true" data-key="nama4">celana jumbo wanita</h3>
        <div class="price editable" contenteditable="true" data-key="harga4">Rp 130.000</div>
    </div>
</div>

<!-- PRODUK 5 s/d 16 -->
<!-- Tinggal LANJUTKAN pola ini sampai produk16 -->
</div>

            </div>
        </div>
    </div>

</div>

<!-- ===== FOOTER KONTAK ===== -->
<div class="footer">
    <p>📞 Hubungi Kami</p>
    <a class="wa-btn" href="https://wa.me/6281234567890" target="_blank">
        Chat Admin via WhatsApp
    </a>
</div>

<script>
// SIMPAN EDIT KE LOCAL STORAGE
document.querySelectorAll('.editable').forEach(el => {
    const key = el.dataset.key;

    if (localStorage.getItem(key)) {
        el.innerHTML = localStorage.getItem(key);
    }

    el.addEventListener('input', () => {
        localStorage.setItem(key, el.innerHTML);
    });
});
</script>

</body>
</html>
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

/* ===== HEADER KONTAK ===== */
.header {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
    padding: 25px 40px;
}
.header h1 {
    margin: 0;
}
.contact {
    margin-top: 8px;
    font-size: 14px;
}
.contact a {
    color: #fff;
    text-decoration: underline;
    margin-left: 10px;
}

/* ===== PRODUK ===== */
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
    transition: .3s;
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

.editable {
    outline: none;
    cursor: text;
}
.price {
    color: #27ae60;
    font-weight: bold;
}

/* ===== FOOTER KONTAK ===== */
.footer {
    background: #fff;
    padding: 30px;
    text-align: center;
    border-top: 1px solid #eee;
}
.wa-btn {
    display: inline-block;
    background: #25D366;
    color: white;
    padding: 12px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
}
</style>
</head>

<body>


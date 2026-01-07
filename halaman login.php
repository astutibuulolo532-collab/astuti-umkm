<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard UMKM</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            text-align: center;
            padding-top: 100px;
        }
        .box {
            background: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,.1);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #e74c3c;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Selamat Datang 👋</h2>
    <p>Halo, <b><?php echo $_SESSION['username']; ?></b></p>
    <p>Anda berhasil login ke Sistem UMKM</p>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>

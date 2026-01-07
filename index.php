<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login UMKM</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: white;
            width: 360px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        button {
            width: 48%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }
        .login {
            background: #2575fc;
            color: white;
        }
        .batal {
            background: #e74c3c;
            color: white;
        }
        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="card">
    <h2> silahkan loginLogin </h2>

    <form action="proses login.php" method="POST">
        <input type="text" name="username" placeholder="Nama Pengguna" required>
        <input type="password" name="password" placeholder="Password" required>

        <div class="btn-group">
            <button type="submit" class="login">Login</button>
            <button type="reset" class="batal">Batal</button>
        </div>
    </form>

    <div class="footer">
        © 2026 Sistem UMKM
    </div>
</div>

</body>
</html>

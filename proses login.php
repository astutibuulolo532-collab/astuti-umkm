<?php
session_start();

// AKUN LOGIN
$user = "admin";
$pass = "12345";

// AMBIL DATA
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// CEK LOGIN
if ($username === $user && $password === $pass) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit;
} else {
    echo "<script>
        alert('Username atau Password salah!');
        window.location='index.php';
    </script>";
    exit;
}
?>

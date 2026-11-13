<?php
include "koneksi.php";

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kantin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <?php if ($_SESSION['role'] === 'pelanggan'): ?>
            <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['namauser']) ?> (Pelanggan)</h2>
            <ul>
                <li><a href="crud-petugas.php">Lihat Produk &amp; Beli</a></li>
            </ul>
        <?php else: ?>
            <h2><?= htmlspecialchars($_SESSION['namauser']); ?></h2>
            <ul>
                <?php if ($_SESSION['role'] === 'administrator'): ?>
                    <li><a href="register.php">Registrasi</a></li>
                <?php endif; ?>
                <li><a href="crud-petugas.php">Data Produk</a></li>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
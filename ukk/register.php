<?php
include "koneksi.php";
session_start();

if (isset($_POST['daftar'])) {
    $allowedRoles = ['administrator', 'kasir', 'pelanggan'];
    $role = in_array($_POST['role'], $allowedRoles) ? $_POST['role'] : 'kasir';

    mysqli_query(
        $koneksi,
        "INSERT INTO petugas (usn, username, password, role) VALUES (
            '{$_POST['usn']}',
            '{$_POST['username']}',
            '{$_POST['password']}',
            '{$role}'
        )"
    );

    echo "<script>alert('Berhasil!'); window.location='login.php';</script>";
    exit();
}
?>
<link rel="stylesheet" href="style.css?v=99">
<a href="index.php">Kembali</a>

<form method="POST">
    <h3>Registrasi User</h3>
    Nama    : <input type="text" name="usn" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Role    : <select name="role" required>
                <option value="administrator">Administrator</option>
                <option value="kasir">Petugas (Kasir)</option>
                <option value="pelanggan">Pelanggan</option>
             </select><br><br>

    <button type="submit" name="daftar">Simpan</button>
</form>





























<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Daftar Pelanggan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <form action="" method="post">
            <fieldset>
                <div>
                    <label for="usn">Nama user</label><br>
                    <input type="text" id="usn" name="usn" required>
                </div>
                <br>
                <div>
                    <label for="username">Masukkan nama akun anda</label><br>
                    <input type="text" name="username" id="username" required>
                </div>
                <br>
                <div>
                    <label for="password">password</label><br>
                    <input type="text" name="password" id="password" required>
                </div>
                <div>
                    <label for="role">isi tugas anda. sebagai admin/petugas/pelanggan</label>
                    <input type="text" name="role" id="role" required>
                </div>
                <br>
                <div>
                    <button type="submit" name="submit">Kirim</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html> -->
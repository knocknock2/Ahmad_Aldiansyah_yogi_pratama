<?php
include("koneksi.php");

if (isset($_POST['login'])) {
    $namaPelanggan = $_POST['namaPelanggan'];
    $nomoeTelpon   = $_POST['nomoeTelpon'];

    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE namaPelanggan='$namaPelanggan' AND nomoeTelpon='$nomoeTelpon'");

    if (mysqli_num_rows($query) > 0) {
        header("Location: crud-petugas.php");
    } else {
        echo "Login gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>login petugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>login petugas</h2>
        <form action="" method="post">
            <fieldset>
                <div>
                    <label for="namaPelanggan">nama pelanggan</label><br>
                    <input type="text" id="namaPelanggan" name="namaPelanggan" required>
                </div>
                <br>
                <div>
                    <label for="nomoeTelpon">nomor telepon</label><br>
                    <input type="text" id="nomoeTelpon" name="nomoeTelpon" required>
                </div>
                <br>
                <div>
                    <button type="submit" name="login">login</button>
                </div>
            </fieldset>
        </form>
        <p>kalo belum punya akun silahkan daftar di sini dulu yaww <a href="register.php">daftar di sini</a></p>
    </div>
</body>
</html>

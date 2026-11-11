<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    $namaPelanggan = $_POST['namaPelanggan'];
    $alamat        = $_POST['alamat'];
    $nomoeTelpon   = $_POST['nomoeTelpon'];

    $query = mysqli_query($koneksi, "INSERT INTO pelanggan (namaPelanggan, alamat, nomoeTelpon) VALUES ('$namaPelanggan', '$alamat', '$nomoeTelpon')");

    if ($query) {
        header("location: index.php");
    } else {
        echo "Gagal : " . mysqli_error($koneksi);
    }
}
?>

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
                    <label for="namaPelanggan">Nama Pelanggan</label><br>
                    <input type="text" id="namaPelanggan" name="namaPelanggan" required>
                </div>
                <br>
                <div>
                    <label for="alamat">Masukkan Alamat Anda</label><br>
                    <input type="text" name="alamat" id="alamat" required>
                </div>
                <br>
                <div>
                    <label for="nomoeTelpon">Nomor Telepon</label><br>
                    <input type="text" name="nomoeTelpon" id="nomoeTelpon" required>
                </div>
                <br>
                <div>
                    <button type="submit" name="submit">Kirim</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
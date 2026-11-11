<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "INSERT INTO itemkantin (nama, harga, stok) VALUES ('$nama', '$harga', '$stok')");

    if ($query) {
        header("location: list-item.php");
    } else {
        echo "Gagal : " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>data item kantin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <form action="" method="post">
            <fieldset>
                <div>
                    <label for="nama">Nama item</label><br>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <br>
                <div>
                    <label for="harga">harga item</label><br>
                    <input type="text" name="harga" id="harga" required>
                </div>
                <br>
                <div>
                    <label for="stok">stok</label><br>
                    <input type="text" name="stok" id="stok" required>
                </div>
                <br>
                <div>
                    <button type="submit" name="submit">Kirim data item</button>
                </div>
            </fieldset>
        </form>
        <a href="crud-petugas.php">kembali ke menu petugas</a>
    </div>
</body>
</html>

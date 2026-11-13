<?php
include("koneksi.php");

if (isset($_GET['nama'])) {
    $nama_lama = $_GET['nama'];
    $result = mysqli_query($koneksi, "SELECT * FROM itemkantin WHERE nama = '$nama_lama'");
    $item = mysqli_fetch_assoc($result);

    if (!$item) {
        header("Location: list-item.php");
        exit;
    }
}

if (isset($_POST['update'])) {
    $nama_lama = $_POST['nama_lama'];
    $nama_baru = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "UPDATE itemkantin SET nama = '$nama_baru', harga = '$harga', stok = '$stok' WHERE nama = '$nama_lama'";
    mysqli_query($koneksi, $query);

    header("Location: list-item.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card" style="max-width: 500px;">
    <h1>Edit Item Kantin</h1>

    <form action="" method="POST">
        <input type="hidden" name="nama_lama" value="<?php echo htmlspecialchars($item['nama']); ?>">
        
        <label>Nama Item:</label><br>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($item['nama']); ?>" required><br><br>

        <label>Harga:</label><br>
        <input type="text" name="harga" value="<?php echo htmlspecialchars($item['harga']); ?>" required><br><br>

        <label>Stok:</label><br>
        <input type="text" name="stok" value="<?php echo htmlspecialchars($item['stok']); ?>" required><br><br>

        <button type="submit" name="update">Simpan Perubahan</button>
        <a href="index.php" class="btn">Batal</a>
    </form>
</div>

</body>
</html>
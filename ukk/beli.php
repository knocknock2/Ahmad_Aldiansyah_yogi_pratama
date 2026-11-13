<?php
include("koneksi.php");

if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];

    $query = "UPDATE itemkantin SET stok = stok - 1 WHERE nama = '$nama' AND stok > 0";
    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "berhasil";
        header("location: list-item.php");
    } else {
        echo "<script>alert('Stok sudah habis!'); window.location='list-item.php';</script>";
    }
} else {
    header("Location: list-item.php");
}
?>
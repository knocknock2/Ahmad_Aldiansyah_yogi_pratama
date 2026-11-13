<?php
include("koneksi.php");

if (isset($_GET['nama'])) {
    $nama_item = $_GET['nama'];

    mysqli_query($koneksi, "DELETE FROM itemkantin WHERE nama = '$nama_item'");

    header("Location: list-item.php");
} else {
    header("Location: list-item.php");
}
?>
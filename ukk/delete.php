<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: list-item.php");
    exit();
}
if (isset($_GET['idProduk'])) {
    $id = $_GET['idProduk'];
    mysqli_query($koneksi, "DELETE FROM itemkantin WHERE idProduk = $id");
}
header("Location: list-item.php");
exit();
?>
<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>makanan yang sudah di data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card" style="max-width: 700px;"> 
    <h1>makanan yang sudah di daftar</h1>

    <a href="pendataan-item.php"> Tambah Baru</a>

    <table>
        <thead>
            <tr>
                <th style="width: 50px;">No.</th>
                <th>nama item</th>
                <th>harga</th>
                <th>stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM itemkantin";
            $query = mysqli_query($koneksi, $sql);
            $no = 1;

            while ($item = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . htmlspecialchars($item['nama']) . "</td>";
                echo "<td>" . htmlspecialchars($item['harga']) . "</td>";
                echo "<td>" . htmlspecialchars($item['stok']) . "</td>";
                echo "<td>
                        <a href='beli.php?nama=" . urlencode($item['nama']) . "' onclick='return confirm(\"Beli makanan ini?\")'>Beli</a> | 
                        <a href='edit-item.php?nama=" . urlencode($item['nama']) . "'>Edit</a> | 
                        <a href='hapus-item.php?nama=" . urlencode($item['nama']) . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    
    <a href="crud-petugas.php" class="btn">Kembali ke Menu Utama</a>
</div>

</body>
</html>
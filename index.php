<?php

$conn = mysqli_connect("localhost", "root", "", "tabel_barang");


$result = mysqli_query($conn, "SELECT * FROM barang");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <a href="tambah.php">Tambah Barang</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Opsi</th>
            <th>Kode</th>
            <th>Barcode</th>
            <th>Nama Barang</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="edit.php?id=<?=$row["kode"]; ?>">Edit</a> |
                <a href="hapus.php?id=<?=$row["kode"]; ?>">Hapus</a>
            </td>
            <td><?= $row["kode"]; ?></td>
            <td><?= $row["barcode"]; ?></td>
            <td><?= $row["nama_barang"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
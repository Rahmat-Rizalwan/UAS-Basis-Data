<?php

$conn = mysqli_connect("localhost", "root", "", "tabel_barang");

$kode = $_GET["id"];

$result = mysqli_query($conn,"SELECT * FROM barang WHERE kode = $kode");

$mhs = mysqli_fetch_assoc($result);
var_dump($mhs["kode"]);


if( isset($_POST["submit"])){
$kode = $_POST["kode"];
$barcode = $_POST["barcode"];
$namabarang = $_POST["nama_barang"];

$query = "UPDATE barang SET
            kode = '$kode',
            barcode = '$barcode',
            nama_barang = '$namabarang'
        WHERE kode = $kode
        ";
mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        
        <script>
            alert('Data Telah Diupdate!');
            document.location.href = 'index.php';
        </script>

        ";

    } else {
        echo "
        
        <script>
            alert('Data Gagal Diupdate!');
            document.location.href = 'index.php';
        </script>

        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Update Data Barang</title>
</head>

<body>
    <h1>Update Data Barang</h1>

    <form action="" method="POST">
    
    <ul>
        <li>
            <label for="kode">Kode : </label>
            <input type="text" name="kode" id="kode" value="<?= $mhs["kode"]; ?>">
        </li>
        <li>
            <label for="barcode">Barcode : </label>
            <input type="text" name="barcode" id="barcode" value="<?= $mhs["barcode"]; ?>">
        </li>
        <li>
            <label for="nama_barang">Nama Barang : </label>
            <input type="text" name="nama_barang" id="nama_barang" value="<?= $mhs["nama_barang"]; ?>">
        </li>
        
        <li>
            <button type="submit" name="submit"> Update </button>
        </li>
    </ul>


    </form>
</body>
</html>
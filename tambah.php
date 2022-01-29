<?php

$conn = mysqli_connect("localhost", "root", "", "tabel_barang");

if( isset($_POST["submit"])){

    $kode = $_POST["kode"];
    $barcode = $_POST["barcode"];
    $namabarang = $_POST["nama_barang"];

    $query = "INSERT INTO barang
                VALUES
                ( '', '$kode', '$barcode', '$namabarang')

            ";
    mysqli_query($conn,$query);
var_dump($query);
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        
        <script>
            alert('Data Telah Ditambahkan!');
            document.location.href = 'index.php';
        </script>

        ";

    } else {
        echo "
        
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>

        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Tambah Data Barang</title>
</head>

<body>
    <h1>Tambah Data Barang</h1>

    <form action="" method="POST">
    
    <ul>
        <li>
            <label for="kode">Kode : </label>
            <input type="text" name="kode" id="kode">
        </li>
        <li>
            <label for="barcode">Barcode : </label>
            <input type="text" name="barcode" id="barcode">
        </li>      
        <li>
            <label for="nama_barang">Nama Barang : </label>
            <input type="text" name="nama_barang" id="nama_barang">
        </li>

        <li>
            <button type="submit" name="submit"> Tambah </button>
        </li>
    </ul>


    </form>
</body>
</html>
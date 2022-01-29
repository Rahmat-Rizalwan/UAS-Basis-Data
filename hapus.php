<?php

$conn = mysqli_connect("localhost", "root", "", "tabel_barang");

$Kode = $_GET["id"];

    mysqli_query($conn, " DELETE FROM barang WHERE Kode = $Kode");
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        
        <script>
            alert('Data Telah Dihapus!');
            document.location.href = 'index.php';
        </script>

        ";

    } else {
        echo "
        
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>

        ";
    }
    
?>
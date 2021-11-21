<?php
    require 'Robby_functions.php';
    $id = $_GET["id"];
    if (hapus($id) > 0){
        echo "<script>
            alert('Buku Berhasil dihapus!');
            document.location.href = 'Robby_home.php';
            </script>";
        }else {
            echo "<script>
            alert('Buku Gagal dihapus!');
            document.location.href = 'Robby_detailBuku.php';
        </script>";
    }
?>
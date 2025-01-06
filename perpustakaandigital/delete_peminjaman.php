<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idpinjam'];
    mysqli_query($kon, "delete from peminjaman where id_peminjaman='$idDelete'");

    header("location:data_peminjaman.php");
    ?>
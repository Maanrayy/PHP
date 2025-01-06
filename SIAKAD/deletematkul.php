<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idmatkul'];
    mysqli_query($kon, "delete from matkul where idMatkul='$idDelete'");

    header("location:tampil_matkul.php");
    ?>
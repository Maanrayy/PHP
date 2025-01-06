<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idmhs'];
    mysqli_query($kon, "delete from mahasiswa where idMhs='$idDelete'");

        header("location:tampil_mahasiswa.php");
    ?>
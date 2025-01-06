<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['iddosen'];
    mysqli_query($kon, "delete from dosen where idDosen='$idDelete'");

        header("location:tampil_dosen.php");
    ?>
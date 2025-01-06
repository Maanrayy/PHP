<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idkrs'];
    mysqli_query($kon, "delete from krs where idKrs='$idDelete'");

        header("location:tampil_krs.php");
    ?>
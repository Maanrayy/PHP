<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idanggota'];
    mysqli_query($kon, "delete from anggota where id_anggota='$idDelete'");

    header("location:data_anggota.php");
    ?>
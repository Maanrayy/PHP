<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idbuku'];
    mysqli_query($kon, "delete from databuku where id_buku='$idDelete'");

    header("location:data_buku.php");
    ?>
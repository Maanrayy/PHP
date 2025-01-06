<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['idprodi'];
    mysqli_query($kon, "delete from prodi where idProdi='$idDelete'");

        header("location:tampil_prodi.php");
    ?>
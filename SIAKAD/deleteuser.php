<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['iduser'];
    mysqli_query($kon, "delete from username where idUsername='$idDelete'");

    header("location:tampil_username.php");
    ?>
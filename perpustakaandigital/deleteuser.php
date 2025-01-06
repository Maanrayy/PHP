<?php
    include 'koneksi.php';
    
    $idDelete = $_GET['iduser'];
    mysqli_query($kon, "delete from username where id_user='$idDelete'");

    header("location:data_username.php");
    ?>
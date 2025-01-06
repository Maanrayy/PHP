<?php
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $idKrs = $_POST ['idKrs'];
        $idMhs = $_POST ['idMhs'];
        $idMatkul = $_POST ['idMatkul'];
        $nilaiUts = $_POST ['nilaiUts'];
        $nilaiUas= $_POST ['nilaiUas'];

        $queryinput = mysqli_query($kon,"insert into krs
        values ('$idKrs','$idMhs','$idMatkul','$nilaiUts','$nilaiUas')");

    }
    header("location:tampil_krs.php");
?>

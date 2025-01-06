<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idKrs = $_POST ['idKrs'];
        $idMhs = $_POST ['idMhs'];
        $idMatkul = $_POST ['idMatkul'];
        $nilaiUts = $_POST ['nilaiUts'];
        $nilaiUas = $_POST ['nilaiUas'];


        mysqli_query($kon,
         "update krs set idMhs='$idMhs', idMatkul='$idMatkul', nilaiUts='$nilaiUts', nilaiUas='$nilaiUas'where idKrs= '$idKrs'");

         header ("location:tampil_krs.php");

    }
?>
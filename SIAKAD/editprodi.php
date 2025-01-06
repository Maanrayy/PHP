<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idProdi = $_POST ['idProdi'];
        $namaProdi = $_POST ['namaProdi'];
        $alamatProdi = $_POST ['alamatProdi'];
        $noTelp = $_POST ['noTelp'];
        $idDosen = $_POST ['idDosen'];


        mysqli_query($kon,
         "update prodi set namaProdi='$namaProdi', alamatProdi='$alamatProdi', noTelp='$noTelp'where idProdi= '$idProdi'");

         header ("location: tampil_prodi.php");

    }
?>
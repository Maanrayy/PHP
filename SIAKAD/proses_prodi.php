<?php
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $idProdi = $_POST ['idProdi'];
        $namaProdi = $_POST ['namaProdi'];
        $alamatProdi = $_POST ['alamatProdi'];
        $noTelp = $_POST ['noTelp'];
        $idDosen = $_POST ['idDosen'];

        $queryinput = mysqli_query($kon,"insert into prodi
        values ('$idProdi','$namaProdi','$alamatProdi','$noTelp','$idDosen')");

    }
    header("location:tampil_prodi.php");
?>

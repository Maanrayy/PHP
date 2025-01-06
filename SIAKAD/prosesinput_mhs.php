<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idMhs = $_POST['idMhs'];
        $namaMhs = $_POST['namaMhs'];
        $jkMhs = $_POST['jkMhs'];
        $tmplMhs = $_POST['tmplMhs'];
        $tgllhrMhs = $_POST['tgllhrMhs'];
        $alamatMhs = $_POST['alamatMhs'];
        $telpMhs = $_POST['telpMhs'];
        $idUsername = $_POST['idUsername'];
        $idProdi = $_POST['idProdi'];

        $queryinput = mysqli_query($kon,"insert into mahasiswa 
        values ('$idMhs','$namaMhs','$jkMhs','$tmplMhs','$tgllhrMhs','$alamatMhs',' $telpMhs','$idUsername','$idProdi')");

    }
    header("location:tampil_mahasiswa.php");
?>
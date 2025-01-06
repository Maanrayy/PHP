<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idMhs = $_POST ['idMhs'];
        $namaMhs = $_POST ['namaMhs'];
        $jkMhs = $_POST ['jkMhs'];
        $tmplMhs = $_POST ['tmplMhs'];
        $tgllhrMhs = $_POST ['tgllhrMhs'];
        $telpMhs = $_POST ['telpMhs'];
        $idUsername = $_POST ['idUsername'];
        $idProdi = $_POST ['idProdi'];


        mysqli_query($kon,
         "update mahasiswa set namaMhs='$namaMhs', jkMhs='$jkMhs',tmplMhs='$tmplMhs',tgllhrMhs='$tgllhrMhs',telpMhs= '$telpMhs',
         idUsername='$idUsername',idProdi='$idProdi' where idMhs= '$idMhs'");

         header ("location:tampil_mahasiswa.php");

    }
?>
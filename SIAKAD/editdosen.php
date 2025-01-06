<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idDosen = $_POST ['idDosen'];
        $namaDosen = $_POST ['namaDosen'];
        $jkDosen = $_POST ['jkDosen'];
        $tmplDosen = $_POST ['tmplDosen'];
        $tgllhrDosen = $_POST ['tgllhrDosen'];
        $telpDosen = $_POST ['telpDosen'];
        $alamatDosen = $_POST ['alamatDosen'];
        $idUsername = $_POST ['idUsername'];


        mysqli_query($kon,
         "update dosen set namaDosen='$namaDosen', jkDosen='$jkDosen',tmplDosen='$tmplDosen',tgllhrDosen='$tgllhrDosen',telpDosen= '$telpDosen',
         alamatDosen='$alamatDosen',idUsername='$idUsername' where idDosen= '$idDosen'");

         header ("location:tampil_dosen.php");

    }
?>
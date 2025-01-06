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

        $queryinput = mysqli_query($kon,"insert into dosen
        values ('$idDosen','$namaDosen','$jkDosen','$tmplDosen','$tgllhrDosen','$telpDosen ','$alamatDosen ','$idUsername')");

    }
    header("location:tampil_dosen.php");
?>

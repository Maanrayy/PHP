<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idMatkul = $_POST ['idMatkul'];
        $namaMatkul = $_POST ['namaMatkul'];
        $idDosen = $_POST ['idDosen']; 

        mysqli_query($kon,
         "update matkul set namaMatkul='$namaMatkul', idDosen='$idDosen' where idMatkul= '$idMatkul'");

         header ("location:tampil_matkul.php");

    }
?>
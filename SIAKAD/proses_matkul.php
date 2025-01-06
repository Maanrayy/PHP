<?php
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $idMatkul = $_POST ['idMatkul'];
        $namaMatkul = $_POST ['namaMatkul'];
        $idDosen = $_POST ['idDosen'];

        $queryinput = mysqli_query($kon,"insert into matkul 
        values ('$idMatkul','$namaMatkul','$idDosen')");

    }
    header("location:tampil_matkul.php");
?>

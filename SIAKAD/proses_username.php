<?php
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $idUser = $_POST ['idUsername'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];

        $queryinput = mysqli_query($kon,"insert into username 
        values ('$idUser','$username','$password')");

    }
    header("location:tampil_username.php");
?>

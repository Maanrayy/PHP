<?php
    include 'koneksi.php';
    if(isset($_POST['input'])){
        $idUser = $_POST ['idUsername'];
        $username = $_POST ['username'];
        $password = $_POST ['password']; 

        mysqli_query($kon,
         "update username set username='$username', password='$password' where idUsername= '$idUser'");

         header ("location: tampil_username.php");

    }
?>
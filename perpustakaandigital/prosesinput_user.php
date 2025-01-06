<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $idUser = $_POST ['user_id'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $email = $_POST ['email'];

        $queryinput = mysqli_query($kon,"insert into username 
        values ('$idUser','$username','$password','$email')");

    }
    header("location:data_username.php");
?>

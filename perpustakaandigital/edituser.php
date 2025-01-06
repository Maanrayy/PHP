<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id_user = $_POST ['id_user'];
        $username = $_POST ['username'];
        $password = $_POST ['password']; 
        $email = $_POST ['email'];

        mysqli_query($kon,
         "update username set username='$username', password='$password', email='$email' where id_user= '$id_user'");

         header ("location:data_username.php");

    }
?>
<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $namaDB = "perpustakaandigital";

    $kon = mysqli_connect($server,$user,$password,$namaDB);

    // cek koneksinya
    if(mysqli_connect_errno()){
        echo "Maaf koneksi Database Anda Gagal!" . mysqli_connect_error();
    }
    else{
        echo "";
    }
?>
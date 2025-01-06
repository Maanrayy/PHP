<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $id_buku = $_POST ['id_buku'];
        $nama_buku = $_POST ['nama_buku'];
        $kategori_buku = $_POST ['kategori_buku'];
        $jumlah_buku = $_POST ['jumlah_buku'];

        $queryinput = mysqli_query($kon,"insert into databuku 
        values ('$id_buku','$nama_buku','$kategori_buku','$jumlah_buku')");

    }
    header("location:data_buku.php");
?>

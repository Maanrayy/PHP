<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id_buku = $_POST ['id_buku'];
        $nama_buku = $_POST ['nama_buku'];
        $kategori_buku = $_POST ['kategori_buku'];
        $jumlah_buku = $_POST ['jumlah_buku'];

        mysqli_query($kon,
         "update databuku set nama_buku='$nama_buku', kategori_buku='$kategori_buku', jumlah_buku='$jumlah_buku' where id_buku= '$id_buku'");

         header ("location:data_buku.php");

    }
?>
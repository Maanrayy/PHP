<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id_anggota = $_POST ['id_anggota'];
        $nama_anggota = $_POST ['nama'];
        $telepon_anggota = $_POST ['telepon'];
        $alamat_anggota = $_POST ['alamat'];

        mysqli_query($kon,
         "update anggota set nama='$nama_anggota', telepon='$kategori_anggota', alamat='$alamat_anggota' where id_anggota= '$id_anggota'");

         header ("location: data_buku.php");

    }
?>
<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id_peminjaman = $_POST ['id_Peminjaman'];
        $id_user = $_POST ['id_user'];
        $id_buku = $_POST ['id_buku'];
        $tanggal_pinjam = $_POST ['tanggal_pinjam'];
        $tanggal_kembali = $_POST ['tanggal_kembali'];
        $id_anggota = $_POST ['id_anggota'];

        mysqli_query($kon,
         "update peminjaman set id_user='$id_user', id_buku='$id_buku', tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali',id_anggota='$id_anggota' where id_peminjaman= '$id_peminjaman'");

         header ("location:data_peminjaman.php");

    }
?>
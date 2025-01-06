<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $id_anggota = $_POST ['id_anggota'];
        $nama_anggota = $_POST ['nama'];
        $alamat_anggota = $_POST ['alamat'];
        $telepon_anggota = $_POST ['telepon'];

        $queryinput = mysqli_query($kon,"insert into anggota 
        values ('$id_anggota','$nama_anggota','$alamat_anggota','$telepon_anggota')");

    }
    header("location:data_anggota.php");
?>

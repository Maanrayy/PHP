
<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $id_peminjaman = $_POST ['id_peminjaman'];
        $id_user = $_POST ['id_user'];
        $id_buku = $_POST ['id_buku'];
        $tanggal_pinjam = $_POST ['tanggal_pinjam'];
        $tanggal_kembali = $_POST ['tanggal_kembali'];
        $id_anggota = $_POST ['id_anggota'];

        $queryinput = mysqli_query($kon,"insert into peminjaman 
        values ('$id_peminjaman','$id_user','$id_buku','$tanggal_pinjam','$tanggal_kembali','$id_anggota' )");

    }
    header("location:data_peminjaman.php");
?>
<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Anggota..xls"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Data Anggota</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('data.gif'); /* Ganti 'gambar.jpg' dengan URL atau path ke gambar yang Anda inginkan */
      background-size: cover; /* Menyesuaikan gambar agar memenuhi seluruh latar belakang */
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: rgba(255, 255, 255, 0.7); /* Menambahkan lapisan transparan pada latar belakang agar teks lebih mudah terbaca */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .action-buttons {
      position: absolute;
      top: 20px;
      left: 20px;
    }

    .action-buttons a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .action-buttons a:hover {
      background-color: #0056b3;
    }

    .form-container {
      max-width: 80%;
      margin: 0 auto;
      margin-top: 30px; /* Pindahkan form ke bawah */
    }

    /* Penyesuaian penataan teks pada kolom tabel */
    th:nth-child(1),
    td:nth-child(1) {
      text-align: center; /* Sejajarkan ID Buku */
    }

    th:nth-child(2),
    td:nth-child(2) {
      text-align: center; /* Sejajarkan Nama Buku */
    }

    th:nth-child(3),
    td:nth-child(3),
    th:nth-child(4),
    td:nth-child(4) {
      text-align: center; /* Sejajarkan Kategori Buku dan Jumlah Buku */
    }
  </style>
</head>
<body>
  <div class="action-buttons">
    <a href="index2.php">Home</a>
    <a href="anggota.php">Input Data</a>
  </div>
  <div class="container">
    <h2>Data Anggota Perpustakaan</h2>
    <table>
      <thead>
        <tr>
          <th>ID Anggota</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>Opsi</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
      <?php
    include 'koneksi.php';
    $datauser = mysqli_query($kon,"select * from anggota");
    while ($tampil = mysqli_fetch_array($datauser)){
    ?>
    <tr>
        <td><?php echo $tampil ['id_anggota'];?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><?php echo $tampil ['alamat'];?></td>
        <td><?php echo $tampil ['telepon'];?></td>
        <td><a href="formedit_anggota.php?idanggota=<?php echo $tampil['id_anggota'];?>" onclick="return confirm('Apakah Anda Yakin?')">Edit</a></td>
        <td><a href="delete_anggota.php?idanggota=<?php echo $tampil['id_anggota'];?>" onclick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
    </tr>
    <?php } ?>
      </tbody>
    </table>
    <div class="form-container">
      <!-- Form atau konten lainnya -->
    </div>
  </div>
</body>
</html>

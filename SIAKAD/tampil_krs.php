<!DOCTYPE html>
<html>
<head>
  <title>SIAKAD</title>
  <link rel="icon" type="image/x-icon" href="book.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 10px;
    }
    .header {
      background-color: aliceblue;
      padding: 30px;
      text-align: center;
    }
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .leftcolumn {
      float: left;
      width: 100%; /* Presisi 100% untuk membuat kolom lebar sepanjang layar */
      height: 600px;
    }
    .card {
      background-color: #f1f1f1; /* Warna latar belakang pertama */
      padding: 20px;
      margin-top: 20px;
      height: 100%; /* Sesuaikan tinggi dengan parent */
    }
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

 input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.footer {
    background-color: rgb(0, 0, 0);
    padding: 80px;
    text-align: center;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color: #f1f1f1;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 3px solid #ddd;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
  </style>
</head>
<body>
<a href="INDEX.html"><button class="dropbtn">DASHBOARD</button></a>
    <div class="dropdown">
      <button class="dropbtn">DATA MASTER</button>
      <div class="dropdown-content">
      <a href="#">MAHASISWA</a>
      <a href="">LOGIN</a>
      <a href="#">DOSEN</a>
      <a href="#">MATKUL</a>
      </div>
    </div>
    <button class="dropbtn">KRS</button>
    <button class="dropbtn">LAPORAN</button>
  </div>
  <div class="header">
    <font face="verdana" size="5" color="blue">
      <b>SIAKAD <br>SISTEM INFORMASI AKADEMIK</b>
    </font>
  </div>
  <div class="topnav">
  <a href="tampil_krs.php">LIHAT DATA</a>
    <a href="input_krs.php">INPUT KRS</a>
  </div>
  <div class="leftcolumn">
    <div class="card">
    <h1>Data KRS</h1>

<table id="customers">
  <tr>
    <th width="100">ID KRS</th>
    <th width="200">ID Mahasiswa</th>
    <th width="210">ID Matkul</th>
    <th width="350">Nilai Uts</th>
    <th width="350">Nilai Uas</th>
    <th>Update</th>
    <th>Update</th>
  </tr>
  <?php
    include 'koneksi.php';
    $datauser = mysqli_query($kon,"select * from krs");
    while ($tampil = mysqli_fetch_array($datauser)){
    ?>
    <tr>
        <td><?php echo $tampil ['idKrs'];?></td>
        <td><?php echo $tampil ['idMhs'];?></td>
        <td><?php echo $tampil ['idMatkul'];?></td>
        <td><?php echo $tampil ['nilaiUts'];?></td>
        <td><?php echo $tampil ['nilaiUas'];?></td>
        <td><a href="formedit_krs.php?idkrs=<?php echo $tampil['idKrs'];?>" onclick="return confirm('Apakah Anda Yakin?')">Edit</a></td>
        <td><a href="deletekrs.php?idkrs=<?php echo $tampil['idKrs'];?>" onclick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
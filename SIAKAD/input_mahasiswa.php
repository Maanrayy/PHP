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
      background-color: lemonchiffon;
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
      float: center;
      width: 100%; /* Presisi 100% untuk membuat kolom lebar sepanjang layar */
      height: 800px;
    }
    .card {
      background-color: #f1f1f1; /* Warna latar belakang pertama */
      padding: 20px;
      margin-top: 20px;
      height: 100%; /* Sesuaikan tinggi dengan parent */
    }
    input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=submit] {
      width: 50%;
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
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
        padding: 50px;
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
  </style>
</head>
<body>
<a href="INDEX.html"><button class="dropbtn">DASHBOARD</button></a>
    <div class="dropdown">
      <button class="dropbtn">DATA MASTER</button>
      <div class="dropdown-content">
      <a href="">MAHASISWA</a>
      <a href="">LOGIN</a>
      <a href="#">DOSEN</a>
      <a href="#">MATKUL</a>
      </div>
    </div>
    <button class="dropbtn">KRS</button>
    <button class="dropbtn">LAPORAN</button>
  
  <div class="header">
    <font face="verdana" size="5" color="blue">
      <b>SIAKAD <br>SISTEM INFORMASI AKADEMIK</b>
    </font>
  </div>
  <div class="topnav">
    <a href="tampil_mahasiswa.php">LIHAT DATA</a>
    <a href="input_mahasiswa.php">INPUT MAHASISWA</a>
  </div>
  <div class="leftcolumn">
    <div class="card">
      <form action="prosesinput_mhs.php" method="post" name="Dosen">
        <table border="0">
          <tr>
            <td width ="200">ID Mahasiswa </td>
            <td><input type="text" name="idMhs" placeholder="ID Mahasiswa"></td>
          </tr>
          
          <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="namaMhs" placeholder="Nama Mahasiswa"></td>
          </tr>
         
          <tr>
            <td>Jenis kelamin</td>
            <td>
              <input type="radio" name="jkMhs" value="laki-laki">laki-laki
              <input type="radio" name="jkMhs"value="perempuan">perempuan
            </td>
          </tr>

          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>
              <input type="text" name="tmplMhs" placeholder="Tempat">
              <input type="date" name="tgllhrMhs">
            </td>
          </tr>

          <tr>
            <td>Alamat</td>
            <td>
              <input type="text" name="alamatMhs" placeholder="Alamat">
            </td>
          </tr>

          <tr>
            <td>Telepon</td>
            <td><input type="text" name="telpMhs" placeholder="Telepon"></td>
          </tr>
       
          <tr>
            <td>Id Username</td>
            <td>
              <select name="idUsername">
                <?php 
                  include 'koneksi.php';
                  $data=mysqli_query ($kon, "select * from username");
                  while($tampil = mysqli_fetch_array($data)){
                ?>
                <option value="<?php echo $tampil['idUsername'];?>"><?php echo $tampil ['idUsername'];?></option>
                <?php } ?>
              </select>
            </td>
          </tr>

          <tr>
            <td>Id Prodi</td>
            <td>
              <select name="idProdi">
                <?php 
                  include 'koneksi.php';
                  $data1=mysqli_query ($kon, "select * from prodi");
                  while($tampil1 = mysqli_fetch_array($data1)){
                ?>
                <option value="<?php echo $tampil1['idProdi'];?>"><?php echo $tampil1 ['idProdi']."-".$tampil1 ['namaProdi'];?></option>
                <?php } ?>
              </select>
            </td>
          </tr>

          <tr align="center">
            <td colspan="2"><input type="submit" value="submit" value="SIMPAN" name="input"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="footer"></div>

</body>
</html>
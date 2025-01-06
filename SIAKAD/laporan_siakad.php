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
      padding-top: 20;
      padding-bottom: 20;
      overflow: hidden;
      background-color: #ac4646;
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
  </style>
</head>
<body>
  <a href="index.html"><button class="dropbtn">DASHBOARD</button></a>
  <div class="dropdown">
      <button class="dropbtn">DATA MASTER</button>
      <div class="dropdown-content">
        <a href="cetakdatamhs_excel.php">MAHASISWA</a>
        <a href="input_username.php">LOGIN</a>
        <a href="cetakdatadosen_excel.php">DOSEN</a>
        <a href="input_prodi.php">PRODI</a>
        <a href="input_matkul.php">MATKUL</a>
        <a href="input_krs.php">KRS</a>
      </div>
      <button class="dropbtn">LAPORAN</button>
  </div>
  <div class="header">
    <font face="verdana" size="5" color="blue">
      <b>Cetak Data <br>SISTEM INFORMASI AKADEMIK</b>
    </font>
  </div>
  <div class="topnav">
    <font color="white"><marquee><br>Data bisa dicetak menjadi file PDF dan EXCEL <br></marquee></font>
  </div>
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <center><img src="potoo.jpg" height="600" width="100%"></center>
      </div>
    </div>
  </div>
</body>
</html>
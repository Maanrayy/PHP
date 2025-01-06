<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Online</title>
    <link rel="icon" type="image/x-icon" href="harapanlaut.jpg">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #dedede;
        }

        /* Container Styles */
        #container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            overflow: hidden;
        }

        /* Header Styles */
        .header {
            position: relative; /* tambahkan posisi relatif */
            border-radius: 10px 10px 0 0;
            padding: 10px 0 0 10px;
            background-image: url(header.jpeg);
            text-align: center;
        }

        .header img {
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto;
        }

        .header h1 {
            position: absolute; /* tambahkan posisi absolut */
            top: 50%; /* posisi vertikal tengah */
            left: 50%; /* posisi horizontal tengah */
            transform: translate(-50%, -50%); /* untuk menengahkan */
            font-size: 40px;
            color: #fff;
            font-family: 'Montserrat', Times, serif;
            font-style: italic;
            margin-top: 10px;
        }

        /* Logout Button Styles */
        .logout-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            background-color: #ca1414;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #ff1a1a;
        }

        /* Main Content Styles */
        .main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            color: #fff;
            border: 1px solid #dedede;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #281e5a;
            border-radius: 10px;
        }

        .sidebar h3 {
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            display: block;
            font-size: 17px;
            text-decoration: none;
            color: #64bed4;
            padding: 10px 0;
            text-align: center;
            border-bottom: 1px dotted #d4d2db;
        }

        .sidebar ul li:last-child a {
            border-bottom: none;
        }

        .sidebar ul li a:hover {
            color: #ca1414;
        }

        /* Content Styles */
        .content {
            width: calc(50% - 20px);
            border: 1px solid #dedede;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #fff;
        }

        .content h3 {
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
        }

        .content h2 {
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
        }

        .content img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .content p {
            text-align: center;
        }

        .content a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .content a:hover {
            color: #ca1414;
        }

        /* Footer Styles */
        .footer {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 20px;
            color: #6813c9;
            border: 1px solid #dedede;
            padding: 15px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            margin-top: 20px;
        }
        /* Undo Button Styles */
.undo-btn {
    position: absolute;
    top: 10px;
    right: 10px; /* Menempatkan di pojok kanan */
    padding: 6px 12px; /* Menyesuaikan padding */
    background-color: #ca1414; /* Warna latar belakang */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px; /* Menyesuaikan ukuran font */
    transition: background-color 0.3s; /* Efek transisi */
}

.undo-btn:hover {
    background-color: #ff1a1a; /* Warna latar belakang saat dihover */
}

    </style>
</head>
<body>

<div id="container">
    <div class="header">
       <!--- <button class="undo-btn" onclick="undo()">Undo</button> --->
        <button class="logout-btn" onclick="logout()">Logout</button>
        <img src="header.jpg" alt="Header Image">
        <h1>Perpustakaan CodeVerse University</h1>
    </div>

    <div class="main">
        <div class="sidebar">
            <h3>MENU</h3>
            <ul>
                <li><a href="username.php">Username</a></li>
                <li><a href="databuku.php">Data Buku</a></li>
                <li><a href="peminjaman.php">Peminjaman</a></li>
                <li><a href="anggota.php">Anggota</a></li>
            </ul>
        </div>

        <div class="content">
            <h3>Novel Populer</h3>
            <h2>Buku: Agus R. Sardjono - Harapan Laut</h2>
            <img src="harapanlaut.jpg" alt="Book Image">
            <p><a href="daftar_buku.php">Buku/Novel lainya >></a></p>
        </div>

        <div class="sidebar">
            <h3>Laporan</h3>
            <ul>
                <li><a href="cetak_username.php">Cetak Username</a></li>
                <li><a href="cetak_buku.php">Cetak Data Buku</a></li>
                <li><a href="cetak_peminjaman.php">Cetak Data Peminjaman</a></li>
                <li><a href="cetak_anggota.php">Cetak Anggota Peminjaman Buku</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="footer">
    <p>Created by ©RohmanRayy</p>
</div>

<script>
    function logout() {
        // Let's assume here you implement the logout functionality
        // For example, redirecting the user to the logout page
        window.location.href = "index.php";
        
    }
</script>

</body

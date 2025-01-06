<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Perpustakaan Online</title>
<link rel="stylesheet" href="css/style.css">
<style>
/* CSS styling goes here */

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: #f2f2f2;
}

.header {
    padding: 50px 20px;
    text-align: center;
    background-image: url('header.jpeg');
    background-size: cover;
    background-position: center;
    border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.header h1 {
    font-size: 48px;
    font-style: italic;
    margin: 0;
}

h4 {
    font-size: 16px;
    text-align: left;
    color: #444;
    padding: 10px 20px;
}

.left {
    width: 260px;
    color: #fff;
    border: 1px solid #dcdcdc;
    padding: 10px;
    margin: 10px;
    float: left;
    background-color: #3949ab; /* Ubah warna background menu */
    border-radius: 8px;
}

.left h3 {
    color: #fff;
    font-size: 18px;
    margin-bottom: 10px;
    text-align: center; /* Pusatkan teks pada menu */
}

.left ul {
    list-style-type: none;
    margin-bottom: 20px;
    padding-left: 0; /* Hilangkan padding kiri pada daftar */
}

.left ul li a {
    display: block;
    font-size: 16px;
    color: #fff;
    padding: 10px;
    transition: background-color 0.3s;
    text-align: center; /* Pusatkan teks pada daftar */
}

.left ul li a:hover {
    background-color: #3f51b5;
}

.middle2 {
    width: calc(100% - 340px);
    padding: 10px;
    margin: 10px;
    float: left;
    text-align: center;
}

.middle2 h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.col {
    flex: 0 0 calc(33.33% - 20px); /* Lebar setiap kolom adalah 33.33% */
}

.buku {
    padding: 0;
    margin-bottom: 20px;
    border: 1px solid #dcdcdc;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.3s;
}

.buku:hover {
    transform: translateY(-5px);
}

.foto img {
    width: 100%;
    height: 200px; /* Sesuaikan tinggi gambar buku */
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

.judul {
    font-size: 16px;
    font-weight: 600;
    padding: 8px 10px;
}

.penulis {
    font-size: 14px;
    color: #555;
    padding: 0 10px 10px;
}

.footer {
    text-align: center;
    padding: 20px;
    background-color: #5c6bc0; /* Ubah warna background footer */
    color: #fff;
    clear: both;
    border-radius: 0 0 10px 10px;
}
</style>
</head>
<body>
    
<div id="container">
    <div class="header">
        <h1>Perpustakaan Codeverse University</h1>
    </div>
    <h4>Selamat Datang,</h4>

    <div class="main">
        <div class="left">
            <h3>MENU</h3>
            <ul>
                <li><a href="index.php">Logout</a></li>
                <li><a href="index2.php">Home</a></li>
                <li><a href="daftar_buku.php">Daftar Buku</a></li>
            </ul>
            <!---<h3>BUKU TERPOPULER</h3>
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Pemrograman</a></li>
                <li><a href="#">Database</a></li>--->
            </ul>
        </div>

        <div class="middle2">
            <h2>DAFTAR BUKU</h2>
            <div class="row">
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="amancalled_ove.jpeg" alt="Fredick Backman - A Man Called Ove">
                            <div class="judul">A Man Called Ove</div>
                            <div class="penulis">Penulis: Fredick Backman</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="rembulan_tenggelam_diwajahmu.jpg" alt="Tere Liye - Rembulan Tenggelam Diwajahmu">
                            <div class="judul">Rembulan Tenggelam Diwajahmu</div>
                            <div class="penulis">Penulis: Tere Liye</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="3.png" alt="James Clear - Atomic Habits">
                            <div class="judul">Atomic Habits</div>
                            <div class="penulis">Penulis: James Clear</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="4.jpeg" alt="Jeffry Nguyen - The Last Battle">
                            <div class="judul">The Last Battle</div>
                            <div class="penulis">Penulis: Jeffry Nguyen</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="5.jpeg" alt="Deanna Zendher - When in Burns">
                            <div class="judul">When in Burns</div>
                            <div class="penulis">Penulis: Deanna Zendher</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="6.jpeg" alt="James Paterson - Disruptive Impact">
                            <div class="judul">Disruptive Impact</div>
                            <div class="penulis">Penulis: James Paterson</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="7.jpg" alt="Ir. Yuniar Supardi - Programmer JavaScript & NodeJs">
                            <div class="judul">Programmer JavaScript & NodeJs</div>
                            <div class="penulis">Penulis: Ir. Yuniar Supardi</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="8.jpg" alt="Rizki Hidayatullah - Pemrograman Web PHP">
                            <div class="judul">Pemrograman Web PHP</div>
                            <div class="penulis">Penulis: Rizki Hidayatullah</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="9.jpg" alt="Ayub Subandi - Aljabar Kalkulus">
                            <div class="judul">Aljabar Kalkulus</div>
                            <div class="penulis">Penulis: Ayub Subandi</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="11.jpg" alt="Riskaninda Maharani - Horror Tanah Jawa">
                            <div class="judul">Horror Tanah Jawa</div>
                            <div class="penulis">Penulis: Riskaninda Maharani</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="12.jpeg" alt="Don Daglow - The Fog Seller">
                            <div class="judul">The Fog Seller</div>
                            <div class="penulis">Penulis: Don Daglow</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="buku" onclick="showBookInfo(this)">
                        <div class="foto">
                            <img src="14.jpeg" alt="Claudia Cain - Silver & Bone">
                            <div class="judul">Silver & Bone</div>
                            <div class="penulis">Penulis: Claudia Cain</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Place other book entries here -->
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; Created by ©RohmanRayy</p>
</div>

<script src="js/script.js"></script>

</body>
</html>

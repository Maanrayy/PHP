<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('form.gif');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            color: #333;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        /* CSS untuk tombol Undo dan Home */
        .action-buttons {
            position: fixed;
            top: 30px;
            left: 30px;
            z-index: 9999;
        }

        .action-buttons a {
            display: inline-block;
            padding: 12px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
            text-decoration: none;
        }

        .action-buttons a.home-button {
            background-color: #dc3545;
            margin-left: 15px;
        }

        .action-buttons a:hover {
            background-color: #bd2130;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="prosesdata_buku.php" method="post" name="proses_buku">
            <div class="form-header">
                <h2>Ubah Data Buku</h2>
            </div>
            <?php
            include 'koneksi.php';
            $idEdit = $_GET['idbuku'];
            $dataEdit = mysqli_query($kon, "select * from databuku where id_buku= '$idEdit'");
            while ($tampil = mysqli_fetch_array($dataEdit)) {
            ?>
                <div class="form-group">
                    <label for="user_id">ID Buku:</label>
                    <input type="text" name="id_buku" value="<?php echo $tampil['id_buku'] ?>">
                </div>
                <div class="form-group">
                    <label for="username">Nama Buku:</label>
                    <input type="text" name="nama_buku" value="<?php echo $tampil['nama_buku'] ?>">
                </div>
                <div class="form-group">
                    <label for="text">Kategori Buku:</label>
                    <input type="text" name="kategori_buku" value="<?php echo $tampil['kategori_buku'] ?>">
                </div>
                <div class="form-group">
                    <label for="text">Jumlah Buku:</label>
                    <input type="text" name="jumlah_buku" value="<?php echo $tampil['jumlah_buku'] ?>">
                </div>
            <?php } ?>
            <div class="form-group">
                <button type="submit" id="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <!-- Tombol Undo dan Home -->
    <div class="action-buttons">
        <a href="index2.php">Home</a>
        <a href="data_buku.php" class="home-button">Lihat Data</a>
    </div>
</body>

</html>

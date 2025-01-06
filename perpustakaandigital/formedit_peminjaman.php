<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data Peminjaman</title>
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
            max-width: 400px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header h2 {
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"],
        .form-group input[type="file"],
        .form-group select,
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .action-buttons {
            position: fixed;
            top: 20px;
            left: 20px;
        }

        .action-buttons a {
            display: inline-block;
            padding: 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .action-buttons a.home-button {
            background-color: #dc3545;
            margin-left: 10px;
        }

        .action-buttons a:hover {
            background-color: #bd2130;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="proses_peminjaman.php" method="post" name="proses_buku">
            <div class="form-header">
                <h2>Form Ubah Data Peminjaman</h2>
            </div>
            <div class="form-group">
                <label for="id_peminjaman">ID Peminjaman:</label>
                <input type="text" name="id_peminjaman" placeholder="Enter User ID">
            </div>
            <div class="form-group">
                <label for="id_user">ID User:</label>
                <select name="id_user">
                    <?php 
                        include 'koneksi.php';
                        $data=mysqli_query ($kon, "select * from username");
                        while($tampil = mysqli_fetch_array($data)){
                            echo "<option value='".$tampil['id_user']."'>".$tampil['id_user']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_buku">ID Buku:</label>
                <select name="id_buku">
                    <?php 
                        $data=mysqli_query ($kon, "select * from databuku");
                        while($tampil = mysqli_fetch_array($data)){
                            echo "<option value='".$tampil['id_buku']."'>".$tampil['id_buku']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Peminjaman:</label>
                <input type="date" name="tanggal_pinjam" value="<?php echo $tampil['tanggal_pinjam'] ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" value="<?php echo $tampil['tanggal_kembali'] ?>">
            </div>
            <div class="form-group">
                <label for="id_anggota">ID Anggota:</label>
                <select name="id_anggota">
                    <?php 
                        $data=mysqli_query ($kon, "select * from anggota");
                        while($tampil = mysqli_fetch_array($data)){
                            echo "<option value='".$tampil['id_anggota']."'>".$tampil['id_anggota']."-".$tampil['nama']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" id="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <!-- Tombol Undo dan Home -->
    <div class="action-buttons">
        <a href="index2.php">Home</a>
        <a href="data_peminjaman.php" class="home-button">Lihat Data</a>
    </div>
</body>

</html>

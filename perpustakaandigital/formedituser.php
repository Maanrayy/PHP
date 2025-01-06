<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
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
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            color: #333;
            margin-bottom: 20px;
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
        <form action="prosesinput_user.php" method="post" name="proses_user">
            <div class="form-header">
                <h2>Form Username</h2>
                <?php
                include 'koneksi.php';
                $idEdit = $_GET['iduser'];
                $dataEdit = mysqli_query($kon, "select * from username where id_user= '$idEdit'");
                while ($tampil = mysqli_fetch_array($dataEdit)) {
                ?>
            </div>
            <div class="form-group">
                <label for="user_id">ID User:</label>
                <input type="text" name="user_id" value="<?php echo $tampil['id_user'] ?>">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo $tampil['username'] ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" name="password" value="<?php echo $tampil['password'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $tampil['email'] ?>">
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
        <a href="data_username.php" class="home-button">Lihat Data</a>
    </div>
</body>

</html>

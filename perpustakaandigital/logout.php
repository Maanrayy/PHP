<?php 
// mengaktifkan session
session_start();

// Jika terdapat pesan kesalahan dari GET
$pesan = "";
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == 'logout') {
        $pesan = "Anda telah berhasil logout.";
    } elseif ($_GET['pesan'] == 'salah') {
        $pesan = "Username atau password salah. Silakan coba lagi.";
    }
}
 
// menghapus semua session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Logout</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #777;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Maaf Username dan Password salah!</h2>
        <p><?php echo $pesan; ?></p> <!-- Menampilkan pesan kesalahan atau logout -->
        <a href="index.php">Kembali ke Halaman Login</a>
    </div>
</body>
</html>

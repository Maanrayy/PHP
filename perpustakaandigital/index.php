<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Admin</title>
<link rel="stylesheet" type="text/css" href="css/Login.css">
<style>
    body {
        background-image: url(login.png);
        background-size: cover;
        background-position: center;
        font-family: verdana;
        margin: 0;
        padding: 0;
    }

    .tampilan {
        background: rgba(255, 255, 255, 0.7); /* Tambahkan transparansi untuk tampilan */
        width: 400px;
        margin: 100px auto;
        border-radius: 16px;
        min-height: 256px;
        overflow: hidden;
    }

    .kepala {
        background: #281e5a;
        padding: 10px 22px;
        height: 60px;
    }

    .logo {
        background-image: url(../images/logo.png);
        background-position: center;
        background-size: 60px;
        width: 60px;
        height: 60px;
        float: left;
        margin-right: 20px;
    }

    .kepala h2.judul {
        color: #fff;
        font-size: 25px;
        font-weight: normal;
        text-align: left;
        line-height: 20px;
        margin: 0; /* Remove margin top */
        padding-top: 10px; /* Add padding top */
    }

    .kesalahan {
        font-size: 20px;
        color: #ff0000;
        padding: 10px 0;
        text-align: center;
    }

    .artikel {
        padding: 10px 22px 0;
        color: #808080;
    }

    .artikel div.kotak {
        margin: 16px 0;
    }

    .kotak input[type="text"],
    .kotak input[type="password"] {
        font-size: 15px;
        width: 100%;
        height: 40px;
        padding: 0 10px;
        background: #eeeeee;
        border: none;
        color: #808080;
    }

    .kotak input[type="submit"] {
        background: #ff5555;
        font-size: 18px;
        margin: 0 0 0 130px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="tampilan">
    <div class="kepala">
        <div class="logo"></div>
        <h2 class="judul">Login Admin</h2>
    </div>
    <div class="artikel">
        <div class="kesalahan">
            <?php
            if(isset($_GET["login_error"])){
                echo "Username atau password salah";
            }
            ?>
        </div>
        <div class="kotak">
            <form method="post" action="cek_login.php">
                <p><input type="text" name="username" value="" placeholder="Masukan Username Anda"></p>
                <p><input type="password" name="password" value="" placeholder="Masukan Password Anda"></p>
                <p class="submit"><input type="submit" name="commit" value="Login"></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>

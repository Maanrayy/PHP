<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cetak Data Buku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('data.gif');
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: rgba(255, 255, 255, 0.7);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .action-buttons {
      position: absolute;
      top: 20px;
      left: 20px;
    }

    .action-buttons a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .action-buttons a:hover {
      background-color: #0056b3;
    }

    .form-container {
      max-width: 80%;
      margin: 0 auto;
      margin-top: 30px;
    }

    th:nth-child(1),
    td:nth-child(1) {
      text-align: center;
    }

    th:nth-child(2),
    td:nth-child(2),
    th:nth-child(3),
    td:nth-child(3),
    th:nth-child(4),
    td:nth-child(4) {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="action-buttons">
    <a href="excel_buku.php">EXCEL</a>
    <a href="pdf_buku.php">PDF</a>
  </div>
  <div class="container">
    <h2>Data Buku</h2>
    <table>
      <thead>
        <tr>
          <th>ID Buku</th>
          <th>Nama Buku</th>
          <th>Kategori Buku</th>
          <th>Jumlah Buku</th>
        </tr>
      </thead>
      <tbody>
      <?php
    include 'koneksi.php';
    $datauser = mysqli_query($kon,"select * from databuku");
    while ($tampil = mysqli_fetch_array($datauser)){
    ?>
    <tr>
        <td><?php echo $tampil ['id_buku'];?></td>
        <td><?php echo $tampil ['nama_buku'];?></td>
        <td><?php echo $tampil ['kategori_buku'];?></td>
        <td><?php echo $tampil ['jumlah_buku'];?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <div class="form-container">
      <!-- Form atau konten lainnya -->
    </div>
  </div>

  <script>
    function goToHome() {
      window.location.href = "index2.php";
    }

    const actionButtons = document.querySelector(".action-buttons");

    const homeButton = document.createElement("a");
    homeButton.textContent = "Home";
    homeButton.classList.add("home-button");

    homeButton.addEventListener("click", goToHome);

    actionButtons.appendChild(homeButton);
  </script>
</body>
</html>

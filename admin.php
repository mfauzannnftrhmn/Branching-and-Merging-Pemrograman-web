<?php 
session_start();
if ($_SESSION['role'] = 'admin') {
    
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrator</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        .btn-tambah-produk {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 20px 0;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(90deg, #4caf50, #45a049);
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            text-decoration: none;
        }
        .btn-tambah-produk:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }
        .btn-logout {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            text-decoration: none;
        }
        .btn-logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat datang Administrator, <?php echo $_SESSION['name']; ?></h1>

        <!-- Tombol Tambah Produk -->
        <a href="create.php" class="btn-tambah-produk">Tambah Produk</a>

        <!-- Tombol Logout -->
        <a href="./backend/logout.php" class="btn-logout">Logout</a>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6f42c1, #d9a7c7);
            font-family: 'Arial', sans-serif;
        }
        
        .container {
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            color: #4b0082;
            text-transform: uppercase;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            font-weight: bold;
            border-radius: 50px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .table {
            border-radius: 8px;
            overflow: hidden;
        }

        .table-dark {
            background-color: #4b0082;
            color: white;
            font-weight: bold;
        }

        .table-bordered {
            border: 2px solid #ddd;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table td img {
            max-width: 100px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

       
        .btn-warning, .btn-danger {
            border-radius: 50px;
            padding: 6px 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-warning:hover, .btn-danger:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 50px;
            padding: 6px 15px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

       
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 0.9rem;
            }

            h1 {
                font-size: 1.6rem;
            }
        }

       
        .table td .btn {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Produk</h1>
        <div class="text-end mb-3">
            <a href="create.php" class="btn btn-success">Tambah Produk</a>
        </div>
        <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect, "SELECT * FROM products");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($products)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td>Rp <?= number_format($row['price'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="../pertemuan-6/<?= htmlspecialchars($row['image']); ?>" target="_blank" class="btn btn-primary btn-sm">Unduh</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

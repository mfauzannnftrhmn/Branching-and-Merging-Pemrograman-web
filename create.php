<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        body {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

       
        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

       
        h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        
        .form-control {
            border-radius: 30px;
            padding: 12px 20px;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff7e5f;
            box-shadow: 0 0 5px rgba(255, 126, 95, 0.5);
        }

        
        .btn-primary {
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #feb47b, #ff7e5f);
            transform: scale(1.05);
        }

        
        .btn-outline-primary {
            border-color: #ff7e5f;
            color: #ff7e5f;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #ff7e5f;
            color: #fff;
        }

        
        .custom-file-label::after {
            content: "Browse";
            color: #ff7e5f;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tambah Produk</h1>
        <div class="text-center mb-4">
            <a href="show.php" class="btn btn-outline-primary">Lihat Data Produk</a>
        </div>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="image" name="image" required>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
            </div>
        </form>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

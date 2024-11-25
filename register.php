<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .form-container h1 {
            text-align: center;
            color: #6e8efb;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
            padding: 10px 15px;
            font-size: 14px;
        }
        .btn-custom {
            background: #6e8efb;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #5a76d4;
            transform: scale(1.05);
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer a {
            color: #6e8efb;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Register</h1>
        <form action="./backend/register.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm" class="form-control" placeholder="Masukkan konfirmasi password Anda" required>
            </div>
            <button type="submit" name="submit" class="btn btn-custom btn-block">Register</button>
        </form>
        <div class="form-footer">
            <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

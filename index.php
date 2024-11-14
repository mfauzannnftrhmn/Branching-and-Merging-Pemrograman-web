<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body style="background-color:bisque">
        <h2 style="background-color:grey">Selamat Datang</h2>
        <h3>silahkan login terlebih dahulu</h3>
        <form action="./backend/login.php" method="POST">
            <input type="email" name="email" id="email" placeholder="masukan email" />
            <input type="password" name="password" id="password" placeholder="masukan password" />
            <button type="submit">Login</button>
        </form>

</body>
</html>
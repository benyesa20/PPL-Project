<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Manajemen Barang (SIM) pada UNIB Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        header {
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 30px 0 50px 0;
        }

        header h1 {
            font-size: 2.8em;
        }

        header p {
            font-size: 1.3em;
            margin-top: 10px;
        }

        .cta-button {
            display: inline-block;
            background-color: #ffc107; /* Yellow color */
            color: #333;
            padding: 15px 30px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #e0a800;
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }

        .feature {
            width: 30%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .feature h3 {
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .feature p {
            font-size: 1em;
            line-height: 1.5;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<header>
    <div class="d-flex justify-content-between mx-5 ">
        <ul class="d-flex gap-5 list-unstyled py-3">
            <li><a href="" class="text-decoration-none text-light">Home</a></li>
            <li><a href="" class="text-decoration-none text-light">About</a></li>
            <li><a href="" class="text-decoration-none text-light">Login</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Sistem Informasi Manajemen Barang (SIM) pada UNIB Store</h1>
        <p>Selamat Datang di Website Sistem Informasi Manajemen Barang UNIB Store</p>
        <a href="#signup" class="cta-button">Mulai Sekarang</a>
    </div>
</header>

<main class="container">
    <section class="features">
        <div class="feature">
            <h3>Manajemen Barang</h3>
            <p>Kelola barang masuk dan keluar dengan efisien untuk memastikan stok selalu terjaga.</p>
        </div>
        <div class="feature">
            <h3>Manajemen Penjualan</h3>
            <p>Monitor keuangan masuk dan keluar, termasuk modal dan gaji, untuk kelangsungan bisnis.</p>
        </div>
        <div class="feature">
            <h3>Manajemen Pegawai</h3>
            <p>Kelola absensi dan gaji pegawai untuk meningkatkan kinerja tim dan transparansi.</p>
        </div>
    </section>

    <section class="container form-container" id="signup">
        <h3>Daftar untuk Informasi Lebih Lanjut</h3>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Nama Anda" required><br>
            <input type="email" name="email" placeholder="Email Anda" required><br>
            <button type="submit">Kirim</button>
        </form>
    </section>
</main>

<footer>
    <div class="container">
        <p>&copy; 2024 Sistem Informasi Manajemen Barang (SIM) pada UNIB Store. All rights reserved.</p>
    </div>
</footer>

</body>
</html>

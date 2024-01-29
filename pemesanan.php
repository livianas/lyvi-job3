<?php
// Ambil data dari URL (metode GET)
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = isset($_GET["login"]) ? htmlspecialchars($_GET["login"]) : "Guest";
} else {
    // Redirect ke halaman login jika mencoba mengakses langsung order_page.php
    header("Location: pemesanan.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Baju</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }
        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1em;
        }
        input, select {
            width: 100%;
            padding: 0.5em;
            margin: 0.5em 0;
        }
        button {
            padding: 0.5em;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <h2>Selamat datang, <?php echo $username; ?>!</h2>
    <p>Silakan lakukan pemesanan baju di sini.</p>

    <header>
        <h1>Pesan Sekarang</h1>
    </header>

    <section>
        <form action="proses_pemesanan.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="daftar list"></label>
            <section>
                <h2>Pricelist</h2>
                <p>Berikut adalah daftar harga barang yang tersedia:</p>
                    <ul>
                        <li>Midi dress - Rp.120.000</li>
                        <li>kemeja - Rp.10.000</li>
                        <li>Blazer - Rp.195.000</li>
                    </ul>
            </section>

            <label for="barang">Pilih:</label>
            <select id="barang" name="barang" required>
                <option value="barang1">Midi dress</option>
                <option value="barang2">kemeja</option>
                <option value="barang3">Blazer</option>
                <!-- Tambahkan opsi barang lainnya sesuai kebutuhan -->

            </select>

            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" required>

            <button type="submit">Pesan</button>
        </form>
    </section>

</body>
</html>



    <!-- Form pemesanan baju dapat ditambahkan di sini -->
</body>
</html>

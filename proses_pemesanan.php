<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (Other head elements) ... -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<?php
// Check if the form is submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $barang = isset($_POST["barang"]) ? htmlspecialchars($_POST["barang"]) : "";
    $jumlah = isset($_POST["jumlah"]) ? intval($_POST["jumlah"]) : 0;

    // Price list (you can modify this based on your actual pricing)
    $hargaList = [
        "barang1" => 100000,   // Price for Barang 1 (Rp.100.000)
        "barang2" => 10000,    // Price for Barang 2 (Rp.10.000)
        // Add more items as needed
    ];

    // Function to format number to currency (Rupiah)
    function formatRupiah($angka){
        $rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $rupiah;
    }

    // Perform validation (you can add more validation as needed)
    if (empty($nama) || empty($email) || empty($barang) || $jumlah <= 0 || !array_key_exists($barang, $hargaList)) {
        // Handle validation errors, for example, redirect back to the order page with an error message
        header("Location: order_page.php?error=1");
        exit();
    }

    // Calculate total cost
    $hargaPerItem = $hargaList[$barang];
    $totalCost = $jumlah * $hargaPerItem;

    // Process the order (you can customize this part based on your requirements)
    // For simplicity, let's just echo the order details in this example
    echo "<h2>Pemesanan Berhasil:</h2>";
    echo "<table>";
    echo "<tr><td><strong>Nama:</strong></td><td>$nama</td></tr>";
    echo "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>Barang:</strong></td><td>$barang</td></tr>";
    echo "<tr><td><strong>Jumlah:</strong></td><td>$jumlah</td></tr>";
    echo "<tr><td><strong>Harga Per Item:</strong></td><td>" . formatRupiah($hargaPerItem) . "</td></tr>";
    echo "<tr><td><strong>Total Cost:</strong></td><td>" . formatRupiah($totalCost) . "</td></tr>";
    echo "</table>";

    // "Beranda" button   
    echo '<button onclick="window.location.href=\'pemesanan.php\'">Beranda</button>';

    // You can save the order information to a database or perform other actions here
    
} else {
    // If someone tries to access this page directly without submitting the form, redirect to the order page
    header("Location: order_page.php");
    exit();
}
?>

</body>
</html>

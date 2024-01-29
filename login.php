<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pemesanan Baju</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
            margin: 5px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            color: #ff0000;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="pemesanan.php" method="post">
        <label for="username">Username/Email:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Memproses data formulir jika formulir dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai dari input formulir
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Lakukan validasi login (Contoh sederhana, Anda mungkin ingin melakukan validasi yang lebih aman)
        if ($username == "contoh_user" && $password == "contoh_password") {
            echo "<p>Login berhasil!</p>";
            // Redirect atau lakukan tindakan setelah login berhasil
        } else {
            echo "<p>Login gagal. Silakan coba lagi.</p>";
        }
    }
    ?>
</body>
</html>

<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style/style_show.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #343a40;
    margin-bottom: 20px;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #C9DABF;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #5F6F65;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #808D7C;
}

a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

     </style>
</head>
<body>
    <div class ="cointariner">
    <h1>Edit Produk</h1>
    <form method="post">
        <label>Nama Produk:</label>
        <input type="text" name="name" value="<?= $row['name']; ?>" required><br><br>

        <label>Harga:</label>
        <input type="text" name="price" value="<?= $row['price']; ?>" required><br><br>

        <label>Gambar URL:</label>
        <input type="text" name="image" value="<?= $row['image']; ?>"><br><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">Kembali ke Data Produk</a>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    
</body>
</html>

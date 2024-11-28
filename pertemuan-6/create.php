<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; 
            padding: 20px; 
        }

        .container{
            max-width: 1000px; 
            margin: 0 auto; 
            background-color: #C9DABF; 
            padding: 20px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 8px; 
        }

        a:hover{
            text-decoration: underline;
        }

        form{
            display: flex;
            flex-direction: colum;
        }

        input[type="text"], 
        input[type="number"], 
        input[type="file"],
        input[type="submit"] {
        margin-bottom: 10px;
        padding: 12px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s;
        }

        </style>
</head>
<body>
<div class="container">
    <h1>Tambah Produk</h1>
    <a href="show.php">Lihat data produk</a>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="input nama produk">
        <input type="number" name="price" placeholder="input harga produk">
        <input type="file" name="image" >
        <input type="submit" value="simpan" name="submit">
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>